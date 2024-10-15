# Logger

## 1 Requirements

+ PHP >= 8.1
+ Composer
+ MySQL or PostgreSQL
+ Laravel 10

## 2 Installation

### 2.1 Clone the repository: 

`git clone https://github.com/admiralbub/logger.git`

`cd logger`

### 2.2 Install dependencies: 

`composer install`

### 2.3 Setup environment

Copy .env.example to .env:

`cp .env.example .env`

### 2.4 Configure the .env file
Make sure to configure your database credentials and other environment settings.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 2.5 Generate application key:
`php artisan key:generate`

### 2.6 Migrate the database

Run the following command to migrate your database tables:
`php artisan migrate`


### 2.7 Run the application

To serve the application locally:
`php artisan serve`

### 2.8 Setting config file

config/logger.php

```php
<?php 
    return [
        'email_to' => 'your@gmail.com', // Write your email. Example: your@gmail.com
        'type' => 'file' // 3 types: file, email, or db
    ];
?>
```

## 3. Demonstration of controller methods via url

1. `http://127.0.0.1/log`  
   Sends a log message to the default logger.

2. `http://127.0.0.1/log/{type}`  
   Sends a log message to a special logger. 3 types: `file`, `email`, or `db`.

3. `http://127.0.0.1/log-to-all`  
   Sends a log message to all loggers.

## 4. Log file

The log file with all the records is located in `/storage/log.log`