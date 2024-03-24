composer require saarash/permissions








#### Composer Install 

	composer require saarash/permissions


#### Provider in bootstrap/app.php
```
 'providers' => ServiceProvider::defaultProviders()->merge([
       
        .........

        \saArash\permissions\permissionsProvider::class,
    ])->toArray(),
```

#### Publish and Run the migrations

```bash
php artisan vendor:publish --tag=permissions

php artisan migrate
```


 