### ClickView Programming Test

Please go through following instructions:

Current database name is `sampleapp`
This application need (Laravel framework)[http://laravel.com/].

![Sample Pic](https://cloud.githubusercontent.com/assets/693487/10017144/64999c62-616f-11e5-8d4b-ca527ffc1172.png)

1. `git clone` repository
2. Change the `database.php` and `.env` file to suite the database requirements
3. Make sure `php` is there and `mysql` is running.
4. Run `php artisan migrate`
5. Run `php db:seed`
6. Run `php artisan serve`
7. Visit http://localhost:8000
8. You can also get to api via REST Verbs
    e.g. http://localhost:8000/contacts
         http://localhost:8000/contacts/1 etc.
