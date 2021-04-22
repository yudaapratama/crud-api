# CRUD API

Simple create, read, update and delete api build with laravel.

## System Requirements

- Apache
- Mysql 
- PHP 5.6+
- Composer

## Installation

Git clone to local computer and start server.

```sh
cd crud-api
php artisan serve
```
and open browser to http://localhost:8000/api/person

## Usage

| Description | Method | End Point |
| ------ | :------: | ------ |
| Read all data | GET | http://localhost:8000/api/person |
| Detail data | GET | http://localhost:8000/api/person/1 |
| Add data to Databases | POST | http://localhost:8000/api/person |
| Update data | PUT | http://localhost:8000/api/person/1 |
| Delete data | DELETE | http://localhost:8000/api/person/1 |

Example result: 
```
[{
    "id":1,
    "name":"Yudha",
    "email":"yuda@mail.com",
    "phone":"0895123456487",
    "address":"Lampung",
    "created_at":"2021-04-22 09:38:41",
    "updated_at":"2021-04-22 09:38:50"
}]
```
## License
[MIT](https://choosealicense.com/licenses/mit/)
