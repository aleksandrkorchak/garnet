# Guest Book

Была использована среда разработки Laravel Homestead:
1. __Php 7.4__
2. __Web-server Nginx__
3. __MySQL 5.7__
***

Чтобы установить приложение необходимо: 
1. Скачать репозиторий: 
	- `git clone https://github.com/aleksandrkorchak/garnet.git`
2. Обновить все пакеты и их зависимости, используя composer: 
	- `composer install`	
3. Установить зависимости в локальную папку node_modules: 
	- `npm install`
4. Создать базу данных "garnet"
5. Сгенерировать ключ:
    - `php artisan key:generate`
7. Пример файла с переменными среды "__.env.example__" скопировать и переименовать в файл "__.env__". 
   Пример из "__.env__" для подключения к базе данных, используя Homestead:
   ```
   DB_CONNECTION=mysql
   DB_HOST=localhost
   DB_PORT=33060
   DB_DATABASE=garnet
   DB_USERNAME=homestead
   DB_PASSWORD=secret
   ```
8. Создать структуру базы данных:
	- `php artisan migrate:refresh`
9. Set up domain on the Webserver
