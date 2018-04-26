# All steps
All steps to setup laravel with passport, a minimal API and a vue frontend including register, login and a protected api route.

## Step 1
Install laravel and passport.

1.  "`composer create-project --prefer-dist laravel/laravel laravel-vue-spa-passport`"
2. "`composer require laravel/passport`"
3. Adjust the "`.env`", fill the db-settings.
4. "`php artisan make:auth`" for creating the default html-based login - dialog

## Step 2
Migration and Setup

1. run "`php artisan migrate:`"
2. run "`php artisan passport:install`"

### Error on migration?
If you get the error "`Syntax error or access violation: 1071 Specified key was too long; ...`" you have an problem with an old mysql or an maria databases. Here is how to fix this (for laravel 5.6).

1. Open "`config/database.php`" and change the connections > mysql > engine to "`InnoDB ROW_FORMAT=DYNAMIC`".
2. Open "`app/Providers/AppServiceProvider`" and add the following code in the boot-function: "`\Illuminate\Support\Facades\Schema::defaultStringLength(191);`"
3. Run "`php artisan migrate:fresh`" to delete all existing tables an restart the migration.

## Step 3
... todo


# Resources
* https://laravel.com/docs/5.5/installation
* https://laravel.com/docs/5.6/passport
* http://learninfinity.info/laravel-5-api-authentication-using-passport/
* https://stackoverflow.com/a/48041832