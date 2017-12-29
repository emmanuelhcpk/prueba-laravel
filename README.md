# Ejemplo de prueba

Arquitectura General

Proyecto realizado en Laravel 5.4

app
- Components (Arquitecura Basada en componentes y separada en dominios)
    * Admin
        * ProcesoOrdenes(logica de aplicacion)
    * Api
    * Notifiacacion
    * Databank
        * crm
        * swing



- Http
    * Controllers (Controladores dividos por capa de responsabilidad)
        * Admin
        * Api



Instalación

Copiar y configurar archivo de entorno
`cp .env.example .env`

instalación de paquetes php
`composer install`

Creacion de la base de datos

``` php artisan make:migration --seed```