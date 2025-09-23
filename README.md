# 🏢 Management Software

A web-based management system for companies, developed with **Laravel**, **Fortify**, and **Bootstrap**.  
It provides a secure platform where users can authenticate and manage business-related data with full **CRUD functionality**.

🔴 *Please keep in mind the app is still a work in progress.*

---

## 🚀 Features
- User authentication  
- Manage company products (create, read, update, delete)  
- Responsive UI  
  
<!--
---

## 🖼️ Demo
Here’s a preview of the application:  

![Movie Catalog Screenshot](docs/screenshot.png)  

Or you can record a short demo GIF and place it in the `docs/` folder, for example:  

![Movie Catalog Demo](docs/demo.gif)  

-->
---

## 🛠️ Tech Stack
<p align="center">
  <a href="https://laravel.com/"><img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?logo=laravel&logoColor=white" /></a>
  <a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-^8.4-777BB4?logo=php&logoColor=white" /></a>
  <a href="https://getbootstrap.com/"><img src="https://img.shields.io/badge/Bootstrap-5-7952B3?logo=bootstrap&logoColor=white" /></a>
  <a href="https://laravel.com/docs/fortify"><img src="https://img.shields.io/badge/Auth-Laravel%20Fortify-0A66C2" /></a>
</p>

---

## ⚙️ Installation
1. Clone the repository
    ```bash
   git clone https://github.com/carob98/management-software-laravel.git
   cd management-software-laravel
   ```

2. Install dependencies
    ```bash
    composer install
    npm install
    ```

3. Configure environment variables
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Run migrations
    ```bash
    php artisan migrate
    ```

5. Start the development server
    ```bash
    php artisan serve
    npm run dev
    ```
    
    or as a single command
    
    ```bash
    composer run dev
    ```
---


