# laravel-assignment-3
## Clone from git
<code>git clone https://github.com/eather009/laravel-assignment-3.git
<br/>
cd laravel-assignment-3/portfolio
</code>

## create database first and Update .env for database connection 

## Run Following Commands to Initiate database
<code>
<br/>php artisan migrate:fresh
<br/>php artisan db:seed UsersTableSeeder
<br/>php artisan db:seed ProfilesTableSeeder
<br/>php artisan db:seed ContactsTableSeeder
<br/>php artisan db:seed EducationsTableSeeder
<br/>php artisan db:seed ProjectsTableSeeder
<br/>php artisan db:seed SkillsTableSeeder
<br/>php artisan db:seed CompaniesTableSeeder
<br/>php artisan db:seed WorkHistoriesTableSeeder
</code>


## Run following command to start server

<code>php artisan serve</code>