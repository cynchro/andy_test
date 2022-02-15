<?php

class CalculatorController
{

    private $_year;

    function __construct($year)
    {
        $this->_year = $year;
    }

    //calculate the salary payment date
    public function PaySalary($date)
    {
        $lastDay = date('Y-m-d', strtotime(date('Y-m-1', strtotime($date . 'next month')) . '-1 day'));
        
        $date = strtotime($lastDay);
        $date = date("l", $date);
        $date = strtolower($date);

        switch ($date) {
            case 'saturday':
                $days = '-1 day';
                break;

            case 'sunday':
                $days = '-2 day';
                break;

            default:
                $days = '0 day';
                break;
        }

        $payDay = strtotime($days, strtotime($lastDay));
        $payDay = date('Y-m-d', $payDay);

        return $payDay;
    }

    //calculate the bonus payment date
    public function PayBonus($date)
    {

        $payBonus = $date;
        $date = strtotime($date);
        $date = date("l", $date);
        $date = strtolower($date);

        if (($date == "saturday") || ($date == "sunday")) {
            $payBonus = date('Y-m-d', strtotime($payBonus . 'next wednesday'));
        }

        return $payBonus;
    }

    //calculate the remaining months to end the year
    public function RemainingMonths()
    {
        $months = array();
        $month = date('m');
        $month = ltrim($month, '0');

        for ($i = $month; $i <= 12; $i++) {
            $months[] = array('month' => str_pad($i, 2, "0", STR_PAD_LEFT));
        }
        return $months;
    }

    //generate the information
    public function GenerateData()
    {
        $calendarData = array();
        $i = 1;
        foreach ($this->RemainingMonths() as $m) {

            $fecha = DateTime::createFromFormat('!m', $m['month']);
            $calendarData[] = array(
                $i++, $fecha->format('F'), $this->PaySalary($this->_year . '-' . $m['month'] . '-' . 1), // 1 = month start day
                $this->PayBonus($this->_year . '-' . $m['month'] . '-' . 15) // 15 = bonus pay day
            );
        }

        return $calendarData;
    }

    //I generate the CSV file
    public function CreateCsv()
    {

        $fp = fopen('./Files/' . $this->_year . '_file.csv', 'w') or die("Unable to open file!");
        fputcsv($fp, array('ID', 'Month', 'Salary_Pay_Date', 'Bonus_Pay_Date'));

        foreach ($this->GenerateData() as $fields) {
            fputcsv($fp, $fields);
        }

        fclose($fp);

        echo 'File generated!';
        die;
    }

}
