# ejercicioExamen

# src
La clase Examen.php es la que contiene las funciones que resuelven el ejercicio.

# tests
La clase ExamenTest.php es la que contiene las baterias de pruebas. Para las pruebas se utilió el Framework PHP UNIT.
Fuente: https://phpunit.de/getting-started/phpunit-9.html

# Instalación

1. Clonar el repositorio, asignar permisos, ingresar a la carpeta.
2. Ingresar a https://getcomposer.org/download/ para instalar composer. Ejecutar los comandos dentro de la carpeta del proyecto.
3. Instalar las dependencias de PHPUNIT ```composer require --dev phpunit/phpunit ^9```
4. Correr los casos de testing ```./vendor/bin/phpunit tests```

# Prueba rápida

Ejecutar el siguiente comando
```php src/Examen.php ```
EL resultado arroja una descripción similar a lo siguiente:
```Se encontraron 15 pares de numeros, que sumados son igual a 784, sobre un array de un tamanio de 324```