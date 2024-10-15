# Logger

## Requirements

+ PHP >= 8.1
+ Composer
+ MySQL or PostgreSQL
+ Laravel 10

## Installation

### Clone the repository: 
`git clone https://github.com/admiralbub/logger.git`
`cd logger`

### Install dependencies: 
`composer install`

### Setup environment
Copy .env.example to .env:
`cp .env.example .env`

### Configure the .env file
Make sure to configure your database credentials and other environment settings.

`DB_CONNECTION=mysql`
`DB_HOST=127.0.0.1`
`DB_PORT=3306`
`DB_DATABASE=your_database`
`DB_USERNAME=your_username`
`DB_PASSWORD=your_password`

### Generate application key:
`php artisan key:generate`

### Migrate the database

Run the following command to migrate your database tables:
`php artisan migrate`


### Run the application

To serve the application locally:
`php artisan serve`

### Setting config file

config/logger.php

```php
<?php 

    return [

        'email_to' => 'your@gmail.com', // Write your email. Example: your@gmail.com

        'type' => 'file' // 3 types: file, email, or db
    ];

?>
```
### Demonstration of controller methods via url

1. `http://127.0.0.1/log`  
   Sends a log message to the default logger.

2. `http://127.0.0.1/log/{type}`  
   Sends a log message to a special logger. 3 types: `file`, `email`, or `db`.

3. `http://127.0.0.1/log-to-all`  
   Sends a log message to all loggers.