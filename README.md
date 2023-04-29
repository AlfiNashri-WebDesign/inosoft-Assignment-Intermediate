<p align="center"><a rel="nofollow" href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" rel="nofollow"></a></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework" rel="nofollow"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads" rel="nofollow"></a>
<a href="https://packagist.org/packages/laravel/framework" rel="nofollow"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version" rel="nofollow"></a>
<a href="https://packagist.org/packages/laravel/framework" rel="nofollow"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License" rel="nofollow"></a>
</p>

## About Laravel

1. buat baca mongodb, Kembalikan dulu Folder Vendornya <br> 
ketik  <br>
composer require jenssegers/mongodb        <br>
atau  jika mongodb belum kebaca bisa pake  <br>
composer require jenssegers/mongodb --ignore-platform-req=ext-mongodb  <br>

2. Cek dulu apa aja yg uda ke install <br>
composer check-platform-reqs <br>

Checking platform requirements for packages in the vendor dir
composer-runtime-api 2.2.2 <br>
ext-curl             7.4.22   success <br>
					  
ext-dom              20031129     success <br>

3. php artisan -V  <br>

4. php artisan migrate <br>

5. php artisan db:seed <br>

6. jalankan, krn postman pake port : 8001, ubah dulu port nya<br>
php artisan serve --port=8001  <br>


7. Aktifkan Xampp, postman juga jalankan