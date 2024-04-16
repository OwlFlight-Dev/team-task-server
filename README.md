# Backend Installation Guide

## Prerequisites
Before getting started, ensure that you have the following dependencies installed on your system:
- PHP 8.3.6
- Composer 2.7.2
- MySQL CLI 8.3.0

## Step-by-Step Installation

### 1. Clone the Repository
```bash
https://github.com/OwlFlight-Dev/team-task-server.git
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Migrate Database Table with Dummy Data
```bash
php artisan migrate --seed
```

### 4. Start the server
```bash
php artisan serve
```