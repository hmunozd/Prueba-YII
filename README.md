# Prueba-YII

Descripción breve del proyecto y su finalidad.

## Estructura de la base de datos

El proyecto requiere la creación de una base de datos que contenga dos tablas: "clientes" y "camposextra". La tabla "clientes" guardará la información del punto 2, mientras que la tabla "camposextra" almacenará la información descrita en los puntos 3, 4 y 5. 

Ambas tablas se relacionan mediante un campo llamado "ID_EXTERNO", que debe mantener la relación entre el cliente y la información recopilada de la compra.

## Recolección de datos

La primera página del proyecto tendrá un formulario para la recolección de datos. Los siguientes campos son obligatorios y deben contar con un botón para continuar a la siguiente página:

- Cédula
- Nombre del cliente
- Teléfono
- Correo electrónico
- Género

## Selección de compra

En la siguiente página, el cliente debe seleccionar si desea realizar una compra o no. Si la respuesta es "sí", se mostrarán los siguientes campos:

- Artículo (lista con varios artículos)
- Precio
- Método de pago

## Motivos de negatividad

Si la respuesta del cliente es "no", se mostrará un menú desplegable con los siguientes motivos de negatividad:

- Muy caro
- Se lo piensa mejor
- No interesa
