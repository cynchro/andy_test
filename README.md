**Requerimientos:**

Debe crear una pequeña utilidad de línea de comandos para ayudar a una empresa ficticia a determinar las fechas en que deben pagar los salarios a su departamento de ventas.

Esta empresa está manejando su nómina de ventas de la siguiente manera:
- El personal de ventas recibe un salario base fijo mensual y una bonificación mensual.
- Los salarios base se pagan el último día del mes a menos que ese día sea sábado o domingo (fin de semana).
- El día 15 de cada mes se pagan las bonificaciones del mes anterior, salvo que ese día sea fin de semana. En ese caso, se pagan el primer miércoles después del día 15.
- El resultado de la utilidad debe ser un archivo CSV que contenga las fechas de pago para el resto de este año. El archivo CSV debe contener una columna para el nombre del mes, una columna que contenga la fecha de pago del salario de ese mes y una columna que contenga la fecha de pago de la bonificación.

## Instalacion

you need to give write permissions to the folder

`chmod 777 -R to Files folder.`

## Como usar

`php generator.php <year>`

Ejemplo:

`php generator.php 2022`
