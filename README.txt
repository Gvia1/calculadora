### Calculadora ###
 	- Esta es una aplicacion la cual su principal funcion es realizar operaciones matematicas.
	- Esta desarrollada con Symfony 6.2.4 con PHP 8.1.13.

Instalacion del proyecto:
	- Para descargar el proyecto desde git es necesario ejecutar el comando:
		git clone https://github.com/Gvia1/calculadora.git
	- Al haber descargado el proyecto, en el directorio del mismo es necesario ejecutar composer install para instalar todas las dependencias.

Controladores:
	- CalculadoraController:
		Es un controlador que cuenta con las rutas 
			* /add/{op1}/{op2} : sumará los dos numeros introducidos en las op1 y op2.
			* /subtract/{op1}/{op2} : restará los dos numeros introducidos en las op1 y op2.
			* /multiply/{op1}/{op2} : multiplicará los dos numeros introducidos en las op1 y op2.
			* /divide/{op1}/{op2} : dividirá los dos numeros introducidos en las op1 y op2.

		Al realizar las operaciones creara una vista con el resultado.
Comandos:
	- OperationsCommand:
		Comando para realizar operaciones matematicas. 
		El comando cuenta con 3 argurmentos:
			op1 : primer numero de la operacion.
			op2 : segundo numero de la operacion.
			operacion: El tipo de la operacion (add, subtract, multiply, divide)
		Para ejecutar el comando es necesario escribir en la consola estando en el directorio del proyecto:
			- php bin/console app:operations op1 op2 operacion
			ejemplo : php bin/console app:operations 5 6 add

		Este comando devolverá por consola el resultado de la operacion.