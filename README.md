# cfox eSports Management Tool
### Setup

To install an instance of cfox on your local machine just follow these steps.

```
git clone git@github.com:cfoxio/cfox.git
cd cfox
composer install
```

Now edit the `.env` file in the root directory of the repository. Just change the `APP_URL`, `SESSION_DOMAIN` and the database information. Don't forget to set up a database! The default name of it would be `cfox`, same for the database username.
The default password for our database user is `secret` but we recommend changing it, even if it is on a local machine.

After that run the following command:

```
php artisan migrate --seed
```

Now you should be good to go!
