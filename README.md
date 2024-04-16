# Backend Installation Guide

## Prerequisites
Before getting started, ensure that you have the following dependencies installed on your system:
- PHP 8.3.6 (https://www.php.net/downloads.php)
        - After downloading PHP, locate php.ini in your php folder and uncomment the line `extension=fileinfo` and `extension=pdo_mysql` (remove the ;)
- Composer 2.7.2 (https://getcomposer.org/download/)
- MySQL CLI 8.3.0 (https://dev.mysql.com/downloads/mysql/)
        - Root password set as 'secret', run it once so Laravel can connect to it.

## Step-by-Step Installation

### 1. Clone the Repository
```bash
https://github.com/OwlFlight-Dev/team-task-server.git
```

### 2. Create environment file
- Create a new file named .env and copy .env.example into it

### 3. Install Dependencies
```bash
composer install
```

### 4. Migrate Database Table with Dummy Data
```bash
php artisan migrate --seed
```

### 5. Start the server
```bash
php artisan serve
```