
1. create .env file
    APP_ENV=local
    APP_KEY=base64:0xHxFU/eUDj7teZpveWbbOzJu7scfkvA0m1huea0fX0=
    APP_DEBUG=true
    APP_LOG_LEVEL=debug
    APP_URL=http://localhost

    DB_CONNECTION=queue_app
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=queue_app
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password

    Note:
    a) May need to generate app key by running php artisan key:generate and specifying it in APP_KEY
    b) create databse queue_app
    c) Specify the usename and password on DB_USERNAME and DB_PASSWORD respectively

2. Run a database migration
-> php artisan migrate

3. Seed database
-> php artisan db:seed