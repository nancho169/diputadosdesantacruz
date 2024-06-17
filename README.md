## Acerca del proyecto

AGREGAR INFO


## Consideraciones

# 1. Clona el repositorio
git clone https://github.com/nancho169/diputadosdesantacruz

# 2. Navega al directorio del repositorio clonado
cd diputadosdesantacruz

#Instala dependecia de node
npm install

#soluciona error autoload.php Failed to open stream:
composer install

#Carga las bases
php artisan migrate

#y a volar
php artisan serve


//SOLO DE SER NECESARIO
# Genera una nueva clave de aplicación
php artisan key:generate

# Genera una nueva clave de aplicación
php artisan key:generate

# Instala las dependencias de JavaScript y compila los assets
npm install
npm run dev  # o npm run production
## Laravel Sponsors

