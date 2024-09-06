# TradeChatApp

**Versión:** 1.0  
**Fecha de publicación:** Septiembre 2024  
**Autor:** Marco José Munguía Alva - 201931804  

## Descripción del Proyecto

TradeChatApp es una aplicación web desarrollada para facilitar la comunicación entre usuarios a través de un sistema de chat en tiempo real. Además, permite a los usuarios realizar publicaciones de artículos, gestionar perfiles y realizar transacciones de forma sencilla y eficiente.

## Tecnologías Utilizadas

### Frontend:
- **HTML5**: Se utiliza para la estructura y el contenido de las páginas web.
- **CSS3**: Proporciona el diseño y el estilo visual de la aplicación, asegurando una interfaz amigable y responsiva.
- **JavaScript (ES2023)**: Maneja la interacción del lado del cliente, permitiendo funcionalidad dinámica en la página.

### Backend:
- **PHP (8.3.11)**: El lenguaje de servidor que gestiona la lógica del negocio, las interacciones con la base de datos y la generación de contenido dinámico.
- **MySQL (8.1.0)**: Sistema de gestión de bases de datos utilizado para almacenar la información de usuarios, mensajes, publicaciones y transacciones.

### Desarrollo local:
- **XAMPP (8.2.7)**: Plataforma utilizada para el desarrollo local, que incluye Apache, MySQL y PHP para facilitar el despliegue y la prueba de la aplicación.

## Estructura del Proyecto

El proyecto sigue el patrón **MVC** (Modelo-Vista-Controlador), lo que permite una clara separación entre la lógica de negocio, la interfaz de usuario y la gestión de datos. A continuación se describe la estructura de los directorios principales:

### 1. **Controller (`controller/php/`)**
   Contiene la lógica del lado del servidor, gestionando la interacción entre las vistas y el modelo de la aplicación.
   - **config.php**: Configura la conexión a la base de datos.
   - **login.php**: Gestiona la autenticación de los usuarios.
   - **insert-chat.php**: Inserta nuevos mensajes en la base de datos.
   - **get-chat.php**: Recupera los mensajes de chat desde la base de datos.
   - **profile.php**: Permite la edición del perfil de usuario.
   
### 2. **JavaScript (`controller/javascript/`)**
   Scripts que añaden interactividad a las vistas.
   - **login.js**: Valida y gestiona el inicio de sesión mediante AJAX.
   - **signup.js**: Controla el registro de usuarios.
   - **users.js**: Muestra la lista de usuarios con opciones de búsqueda y filtrado.
   
### 3. **Vistas (`view/`)**
   Contiene las plantillas que presentan la interfaz de usuario.
   - **login.php**: Formulario para iniciar sesión.
   - **home.php**: Página de inicio tras el inicio de sesión.
   - **chat.php**: Interfaz de chat donde los usuarios pueden comunicarse en tiempo real.
   - **profile.php**: Página que muestra y permite editar los datos del perfil.
   - **style.css**: Define el diseño visual de toda la aplicación.

### 4. **Modelo (`model/`)**
   - **tradechatapp.sql**: Script SQL que crea las tablas necesarias para la aplicación en la base de datos.

## Instalación y Configuración

### Requisitos:
- **XAMPP** o cualquier servidor local con Apache, PHP y MySQL instalados.

### Pasos:
1. Clona el repositorio desde [GitHub](https://github.com/MunguiaMander/TradeChatApp).
2. Coloca el proyecto en la carpeta `htdocs` de XAMPP.
3. Carga el archivo SQL (`model/tradechatapp.sql`) en MySQL para crear las tablas.
4. Configura la conexión a la base de datos en `controller/php/config.php`.
5. Accede a la aplicación a través de `http://localhost/TradeChatApp/project/view/index.php`.

## Enlaces de Interés

- [Marco Teorico](https://docs.google.com/document/d/1UPxffwzBf7xb53TNBqHn3B78idn4w5sKx2DTy61Cq28/edit?usp=sharing)
- [Manual de Usuario](https://docs.google.com/document/d/1HDNPkrcu2AlMyG_7zvc3KXTIjPXCU5HNYdxfnadlL5g/edit?usp=sharing)
- [Manual Técnico](https://docs.google.com/document/d/1OQqLAHzkkfFFkqWBtqp1nCieozYhZjs8-5Hkwb9vMVc/edit?usp=sharing)