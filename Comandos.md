# Comandos de ayuda

## Set-Up Base de datos

**Crear base de datos**

- sudo -u postgres createdb prueba

**Crear usuario**

- sudo -u postgres createuser -P prueba

**Conectarse**

- psql -h localhost -U prueba -d prueba

## Clonamos proyecto

- composer install
- npm install
- npm run dev
- Reconstruir .env (cp .env.example .env)
- php artisan migrate
- php artisan key:generate

## Comandos en general de artisan

**Crear migraciones**

- php artisan make:migration create_prueba_table

**Deshacer migraciones**

- php artisan migrate:rollback

**Aplicar migraciones**

- php artisan migrate

**Crear controladores**

- php artisan make:controller ReservasController

**Set-Up servidor**

- php artisan serve

**Listar todas las rutas registradas**

- php artisan route:list

