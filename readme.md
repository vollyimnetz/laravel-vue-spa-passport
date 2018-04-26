# All steps
All steps to setup laravel with passport, a minimal API and a vue frontend including register, login and a protected api route.

## Step 1
Setup laravel and passport.

1.  ```composer create-project --prefer-dist laravel/laravel laravel-vue-spa-passport```
2. ```composer require laravel/passport```
3. Adjust the ```.env```, fill the db-settings.
4. ```php artisan make:auth``` for creating the default html-based login - dialog




### Error on migration?
With some old mysql or maria databases there is an error when trying to migrate to the default

