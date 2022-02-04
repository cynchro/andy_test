**NOTE:** For this development use only PHP 7.4.3, do not use any library or any framework only PHP Object-Oriented Programming because the idea is that they can evaluate my use of the language without any Framework, which facilitates the development.

Thanks a lot!

# use mode

chmod 777 -R to Files folder.

php generator.php <year>

Example:

php generator.php 2022

# The assignment (max 1h30): Salary Payment Date tool

This assignment gives us a good understanding about the thought-process and the capabilities of the developer. This doesn’t have to be a rock-solid, highly scalable super fancy production-ready application, but just something that allows us to get an idea of the developer's skills and level.

Try to keep things simple. If frameworks, libraries or databases are needed to write the application, please mention them and the arguments why they were required in the documentation for this assignment.

**NOTE:** This is a sample code and will only be used for evaluation purposes

**Requirements:**

You are required to create a small command-line utility to help a fictional company determine the dates they need to pay salaries to their sales department. 

This company is handling their sales payroll in the following way: 
- Sales staff gets a monthly fixed base salary and a monthly bonus.  
- The base salaries are paid on the last day of the month unless that day is a Saturday or a Sunday (weekend).  
- On the 15th of every month bonuses are paid for the previous month, unless that day is a weekend. In that case, they are paid the first Wednesday after the 15th. 
- The output of the utility should be a CSV file, containing the payment dates for the remainder of this year. The CSV file should contain a column for the month name, a column that contains the salary payment date for that month, and a column that contains the bonus payment date

For your convenience, we've added the following flow-chart to visualize the requirements

[![Mikko Test Workflow](http://blob.in2itvof.com/in2it/mikko_test_workflow.png)](http://blob.in2itvof.com/in2it/mikko_test_workflow.png)