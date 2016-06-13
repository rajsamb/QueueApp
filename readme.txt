I have choosen Laravel Framework for this project. I have done followng on this project:

    -> Used Database Migration to create Customers, CustomerTypes, ServiceTypes and CustomerQueues Table
    -> Defined relationship between table in a Model.
    -> Created a small database table seeder
    -> Used view composer to fetch customer types and service types and make it avaliable in the view.
    -> Organised the view under resources > views.
    -> Used composer to pull package (Form Builder: laravelcollective/html)
    -> Used request class for basic validation.
    -> Used Bootstrap for front end css. Used CDN Link

I usually do the following for bigger project.

    -> Use bower to manage front end dependencies
    -> Use Sass CSS Framework and put them in resources > assets folder. I don't have huge experience using sass but learning and implementing on the project at my current Job.
    -> Use gulp and elixer to compile css and js.

To Run the Project:

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