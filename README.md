# Desafio HOP

El siguiente proyecto se encuentra realizado en un entorno de DOCKER corriendo la imagen de PHP 8.0.20, mientras que Laravel se utilizo en su versión 9. La base de datos utilizada fue MySQL.

# Instrucciones para desplegar:

1.- Abrir nuestra terminal.

2.- Clonar el repositorio (git clone https://github.com/Reinaldo-Marquez/hop_swapi.git).

3.- Una vez finalizada la descarga procederemos a crear los contenedores de docker y ejecutarlos, para esto abriremos una terminal en la carpeta del repositorio y correremos el comando: "docker-compose up -d".

4.- Culminada la creacion de los contenedores, nos moveremos a la carpeta "SRC" dentro de la consola y una vez en ella correremos el comando: "composer install".

5.- Clonaremos el archivo .env.example y o renombraremos ".env". Dicho archivo ya posee todas las credenciales configuradas para la BD (Nombre del host / IP: 127.0.0.1, usuario: laravel, contraseña: secret y puerto: 3307).

6.- Procederemos ahora a crear las tablas y los seeders correspondientes, para esto correremos el comando: "docker-compose exec php php /var/www/html/artisan migrate --seed".

7.- Habiendo finalizada la creación vamos a importar la colección de postman que se encuentra dentro de la carpeta del proyecto y que nos proporsionara todos los endpoints disponibles.

# Uso de los endpoints y ejemplos:

# Starships / Vehicles

a) Listar starships / vehicles (GET): 

  Este metodo permite listar todos los elementos en la tabla y ademas posee un filtro con el cual podremos fintrar por el nombre de la nave que estemos requiriendo. Dicho parametro lo pasaremos a traves de la URL de la petición (no es "case sensitive" y puede realizar la busqueda solo con una parte del nombre), esto nos devolvera los elementos paginados (5 por pagina) y el total de elementos encontrados junto con el detalle de cada uno:
  
 Ejemplo:
 
 http://localhost:8080/api/starships?name=death
 
 <img width="915" alt="image" src="https://user-images.githubusercontent.com/49925569/177454328-9306a429-84cb-4d77-9f9f-10218301c87c.png">

b) Crear starships / vehicles (POST):
  
  Este metodo se encarga de registrar una nueva nave en nuestra base al proporcionarle un body como el que se muestra a continuación:
  
      {
        "name": "Death Star 2",
        "model": "DS-1 Orbital Battle Station",
        "manufacturer": "Imperial Department of Military Research, Sienar Fleet Systems",
        "cost_in_credits": "1000000000000",
        "length": "120000",
        "max_atmosphering_speed": "n/a",
        "crew": "342,953",
        "passengers": "843,342",
        "cargo_capacity": "1000000000000",
        "consumables": "3 years",
        "hyperdrive_rating": "4.0",
        "MGLT": "10",
        "starship_class": "Deep Space Mobile Battlestation",
        "pilots": [],
        "films": [
            "https://swapi.dev/api/films/1/"
        ],
        "url": "https://swapi.dev/api/starships/9/"
      }
      
c) Actualizar Starship / vehicles (PUT):

  En este metodo podemos modificar cualquier información de la nave.

    Body de la petición:

      {
        "model": "DS-1 Orbital Battle Station"
      }
      
d) Eliminar starship / vehicles (DELETE):

  Con este metodo podremos borrar los datos de cualquier nave ingresada.
  
# Test funcionales:

  Para correr los test funcionales correremos el comando "docker-compose exec php php /var/www/html/./vendor/bin/phpunit":
  
  docker-compose exec php php /var/www/html/./vendor/bin/phpunit
