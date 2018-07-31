# cfox eSports Management Tool
### Setup

To install an instance of cfox on your local machine just follow these steps.

```
git clone git@github.com:cfoxio/cfox.git
cd cfox
```

OPTIONAL: You could use ddev to start the project locally on your machine if you like. To use it just type `ddev start` to build up your environment and then `ddev ssh` into it. Now just execute all of the following commands inside your ddev environment.

First you need to install laravel and all the other dependencies of this application.

```composer install```

Now edit the `.env` file in the root directory of the repository. Just change the `APP_URL`, `SESSION_DOMAIN` and the database information.

#### Building JS and CSS

To get the template building up and running you first need to `npm install` from the root of the project. After you have installed the dependencies there is unfortunatly one bug on the AdminLTE package that needs to be fixed. First go into `node_modules/admin-lte/package.json` and add the following line into the json array:

```
"main": "dist/js/adminlte.js",
```

With that we make sure that we can acquire the admin-lte module in our javascript files.
The other change we need to make is in the `node_modules/admin-lte/build/scss/AdminLTE.scss` file. The lines 7-11 need to look like this:

```
// Bootstrap
// ---------------------------------------------------
@import "~bootstrap/scss/functions";
@import "bootstrap-variables";
@import "~bootstrap/scss/bootstrap";
```

Here we provide the including of our bootstrap dependencies.

#### Database

Don't forget to set up a database! The default name of it would be `cfox`, same for the database username.
The default password for our database user is `secret` but we recommend changing it, even if it is on a local machine.
After that just run the following command:

```
php artisan migrate --seed
```

Now you should be good to go!
