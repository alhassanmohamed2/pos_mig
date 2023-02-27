
## Migrations with SQL

Laravel Migrations Using SQL Query and composer package that take the SQL Query and create migrations for you.


## Steps

- Copy the SQL Query from the migration.sql file

- Create a database with any name in phpMyAdmin
- Paste the SQL query in it and run it
- Configure your database with you Laravel project
- Install the following package [laravel-migrations-generator](https://github.com/kitloong/laravel-migrations-generator)

- Run the following command inside your Laravel project

```bash
  composer require --dev kitloong/laravel-migrations-generator
```
- Run this command to generate all the migration files 
```bash
php artisan migrate:generate
```

## Database ERD
[ERD](https://lucid.app/lucidchart/a20318ee-e431-4244-bb5c-37ebf32c563c/edit?viewport_loc=1401%2C-24%2C3717%2C2325%2C0_0&invitationId=inv_af0fe630-53fd-41fa-947f-da69de711198)

![App Screenshot](./ERD.svg)
 

