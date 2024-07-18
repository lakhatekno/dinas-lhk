# Requirement
- PHP 8.2++
- framework: Laravel 11 
- database: mysql

# Environment gue
- Laragon: untuk mysql dan nginx -> untuk run laravel dengan mudah.
  <a>https://youtu.be/nW60yGRoUrs?si=gzj2IShKYXYdbLKw</a>
- XAMPP untuk apache -> phpmysql

# Tutorial
## Laragon
1. Install laragon, seperti pada video sandhika galih ehehehehehhehehe
   - <a>https://youtu.be/nW60yGRoUrs?si=gzj2IShKYXYdbLKw</a>
   
## Clone Project
1. clone github seperti biasa di folder C:/Laragon/www
2. udah keknya
   
## Persiapan Database
1. buka laragon, nyalakan mysql dan nginx
2. buat database mysql, bebas namanya apa, contoh: dinas_lhk

## Setting Environment
1. cari file .env
2. cari:
```
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
3. untuk run localhost, ubah menjadi (hapus commentnya yh)
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 //ip localhost
DB_PORT=3306 //port default
DB_DATABASE=dinas_lhk //sesaui nama database yang tadi dibikin
DB_USERNAME=root //user default
DB_PASSWORD= //password default
```

## instalasi laravel
0. buka menggunakan vscode
1. masuk ke terminal vscodenya,
2. ketik 'composer install' lalu Enter saja
3. ketik 'npm install' lalu Enter
4. ketik 'npm run dev' lalu enter, jangan tutup terminalnya.
5. buka terminal baru
6. ketik 'php artisan migrate:fresh' lalu Enter
7. ketik 'php artisan db:seed --class=Items' lalu Enter
8. di laragon, klik kanan -> arahkan ke 'www' -> klik 'dinas-lhk'


