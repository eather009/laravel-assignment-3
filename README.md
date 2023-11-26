# laravel-assignment-3
## Clone from git
git clone https://github.com/eather009/laravel-assignment-3.git
<br/>
<code>cd laravel-assignment-3/portfolio</code>

## run composer
<code>composer install</code>
## create database first
cp .env.example .env
### Update .env for database connection
vi .env

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
<br/>php artisan storage:link
</code>


## Run following command to start server

<code>php artisan serve</code>


# For Demo, visit 
http://13.231.214.135/

Login: 
email: eather.ahmed@gmail.com
password: testPassword