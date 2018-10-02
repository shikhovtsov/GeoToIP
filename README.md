GeoToIp
====================

Инструкция по установке:

1. Создать БД для проекта

2. Скопировать файл .env.example и сохранить его как .env

3. В .env файле прописать данные о БД

4. Запустить команду composer install

5. Сгенерировать таблицы в БД и заполнить их тестовыми данными
php artisan migrate
php artisan db:seed

6. Запустить сервер
php -S localhost:8000 -t public

7. GET Метод http://localhost:8000/ip2geo?ip=x.x.x.x
```
200 OK
{
    "status": "success",
    "data": {
        "country": "Russia",
        "city": "Novosibirsk",
        "lat": "55.01880300",
        "long": "82.93395200"
    }
}
```
```
400 Bad Request
{
    "status": "fail",
    "data": "Ip parameter is missing or has the wrong format"
}
```
```
404 Not Found
Пустой 
```

