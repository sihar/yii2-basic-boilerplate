<h1 align="center">Yii 2 Basic Boilerplate</h1>

Fitur Yii 2 Basic Boilerplate
- Tema AdminLTE (yii2-adminlte-asset)
- Manajemen RBAC (yii2-admin)
- Ajax CRUD (yii2-ajaxcrud)
- Pretty Url

Instalasi
---------

* Clone project dari reposistory
* Dari terminal arahkan ke direktori aplikasi, jalankan perintah berikut
~~~
composer install
~~~
* Rename file db.php.example menjadi db.php dan sesuaikan konfigurasi database
* Jalankan perintah berikut
~~~
yii migrate
yii migrate --migrationPath=@mdm/admin/migrations
yii migrate --migrationPath=@yii/rbac/migrations
~~~
* Generate user admin dengan perintah berikut
~~~
yii tool/generate-admin
~~~
Selesai!  
Silahkan akses aplikasi dari browser.  
Contoh:  
http://yii2-basic-boilerplate