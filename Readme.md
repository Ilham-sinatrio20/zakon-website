<h1 style="text-align:center; font-weight:bolder;">Catatan Sebelum Mengclone Zakon Website</h1>

## Beberapa Catatan Terkait Penggunaan Repository Ini
1. Silahkan melakukan clone pada repository ini

2. Setelah melakukan clone ketikan di terminal perintah berikut. Bertujuan agar APP KEY update otomatis dan vendor akan terinstal
     ```shell
        composer update
     ```
     ```shell
        cp .env.example .env
     ```
     ```shell
        php artisan key:generate
     ```
3. Install beberapa package berikut
    - Laravel Debugbar -> Untuk membantu proses debug
        ```shell
        composer require barryvdh/laravel-debugbar --dev
        ```
    - Laravel Query Detector -> Membantu proses pengecekan query
        ```shell
        composer require beyondcode/laravel-query-detector --dev
        ```
    - Laravel IDE Helper
        ```shell
        composer require --dev barryvdh/laravel-ide-helper
        ```
    - Doctrine/dbal
        ```shell
        composer require doctrine/dbal
        ```
    - NPM run watch 
      Untuk menginstal browsersync agar saat ada update halaman web tidak perlu direfresh serta localhost akan berjalan di port:3000, umumnya laravel ada pada port:5000
        ```shell
        npm run watch
        ```

4. Untuk halaman admin bisa menggunakan template
    <ul>
        <li> <a href="https://getstisla.com/">STISLA</a></li>
        <li> <a href="https://coreui.io/">Core UI</a></li>
    <ul>
