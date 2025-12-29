<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

**Tamrin 6 :**

1) Ensure SQLite database file exists
```
type NUL > database\database.sqlite
```
2) Configure .env for SQLite

Open .env and set:
```
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

CACHE_STORE=file
SESSION_DRIVER=file
```
3) Build database + seed sample data
```
php artisan migrate:fresh --seed
```

5) Run the server
```
php artisan serve
```

6) Open in browser:
```
http://127.0.0.1:8000/reports/top-students
```

Expected output: student(s) with at least 2 results and avg score >= 80 (seed includes a student that qualifies).
