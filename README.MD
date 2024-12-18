# Sistema de Registro de Eventos de Vuelos en Globo 🎈

Este proyecto es una aplicación web desarrollada en **PHP 7**, **MySQL** y utiliza el patrón **MVC**.

## 📁 Estructura del Proyecto

/proyecto_vuelos_globo
│
├── /app
│   ├── /controllers       # Controladores PHP
│   │   └── LoginController.php
│   ├── /models            # Modelos PHP
│   │   └── EventoModel.php
│   └── /views             # Vistas (HTML + PHP)
│       └── RegistroEvento.php
│
├── /public                # Archivos públicos accesibles por el navegador
│   ├── /css               # Archivos CSS personalizados y Bootstrap
│   │   ├── bootstrap.min.css
│   │   └── estilo.css
│   │
│   ├── /js                # Archivos JavaScript, jQuery y Bootstrap JS
│   │   ├── bootstrap.bundle.min.js
│   │   ├── jquery.min.js
│   │   └── script.js
│   │
│   ├── /img               # Imágenes del proyecto
│   └── /vendor            # Librerías externas (si no usas CDNs)
│
├── /config                # Configuraciones generales (DB, rutas, etc.)
│   └── database.php
│
├── .htaccess              # Configuraciones de URL amigables (opcional)
├── index.php              # Archivo de entrada principal (login)
└── README.md              # Documentación del proyecto


## 🚀 Requisitos

- PHP 7.0 o superior
- MySQL o MariaDB
- Apache (Recomendado: XAMPP o WAMP)
- Bootstrap 5 (para diseño responsivo)
- jQuery (para funcionalidades interactivas)

## 🔧 Instalación

1. **Clona el repositorio o descarga el proyecto**:
   ```bash
   git clone https://github.com/tu_usuario/proyecto_vuelos_globo.git

2. **Configura la base de datos:

Importa el archivo SQL con la estructura de las tablas.
Edita el archivo /config/database.php para tu conexión a MySQL.
Inicia el servidor Apache con XAMPP o WAMP.

Abre el proyecto en tu navegador:

http://localhost/proyecto_vuelos_globo/

📋 Funcionalidades
Login: Validación de usuarios.
Formulario de Eventos: Registro de datos de pasajeros, vuelos y servicios adicionales.
Catálogos: Gestión de datos dinámicos (género, tipo de vuelo, transporte, etc.).
🛠 Tecnologías Usadas
PHP 7
MySQL
Bootstrap 5
jQuery
Apache
📧 Contacto
Si tienes dudas o sugerencias, puedes escribirme a:
tuemail@example.com