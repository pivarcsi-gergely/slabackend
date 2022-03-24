Ha változtatni akarsz a route-ok között:
- A RouteServiceProvider.php-ból az adott route-ot "megbabrálni" (törlés, névmódósítás)
- Ez a három parancs:
composer dump-autoload -o
php artisan clear-compiled
php artisan optimize
