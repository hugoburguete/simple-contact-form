# Setup
All these instructions can be found on the <a href="https://laravel.com/docs/5.5">Laravel documentation site</a>. But I'll try to simplify the setup below.

## Config
First you'll need to make a copy of `.env.example` and rename it to `.env`. This will contain all the app config variables. The important variables to change are:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

I'm assuming you have <a href="http://php.net/">php</a> installed on your machine. If you don't, you'll need to install it. You'll need to run <a href="https://getcomposer.org/">composer</a> to install the project dependencies. Do so by accessing the project through the cmd and running `composer install`.

Once that's installed, you'll need to set your server to point to the /public folder. If you do not have a server on your machine, you can run `php artisan serve` and php will host your site (`http://localhost` is the url needed to accesss it).

If you're able to see the site, that's great!  At this point, all that's left is to migrate the database. To do so, access the project on the cmd, and run `php artisan migrate`.

That's it :)