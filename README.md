## rolepermissionsimple
Simple role permission package for Laravel

### Instalation

#### 1. Composer

```
composer require pairac/rolepermissionsimple
```

#### 2. Service Provider

Add package to application providers in ```config/app.php```
```
'providers' => [

        ....

        /*
         * Package Service Providers...
         */

        Pairac\Rolepermissionsimple\RolePermissionSimpleServiceProvider::class,

    ],
```

#### 3. Vendor publish

run artisan command 
```
php artisan vendor:publish --tag=rolepermissionsimple-migrations
```

#### 4. DB Migrate

run database migrate
```
php artisan migrate
```