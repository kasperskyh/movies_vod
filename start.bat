%systemDrive%\xampp\mysql\bin\mysql -uroot -e "CREATE DATABASE IF NOT EXISTS movies_vod;"

php -r "copy('.env.example', '.env');"

call composer install

call php artisan migrate:fresh --seed

call php artisan key:generate

call php artisan storage:link

code .
