# Dr. Forrás-Biró Aletta pszichológus weboldala
Technikai leírás. A projekt mérete miatt CI folyamat kiépítését nem tartom indokoltnak.

## Függőségek
### Kötelező
- PHP 8
- Laravel Nova licensz (megvásárolható: https://nova.laravel.com/ )
- Támogatott adatbázisok:
  - MySQL 5.7+
  - PostgreSQL 9.6+
  - SQLite 3.8.8+
  - SQL Server 2017+ 

### Opcionális (javasolt)
- Redis vagy Memcached szerver DB cacheléshez

## Telepítés
- Szokásos Laravel 8 telepítési eljárás (https://laravel.com)
- Redis vagy Memcached használata esetén a `.env` file szerkesztése
- Telepítés után adatbázis schéma feltöltése `php artisam migrate` utasítással
- Első felhasználó létrehozása a `php artsian nova:user` utasítással
- Opcionális (javasolt) a `php artisan optimize` utasítás futtatása a konfigurációs állományok gyorsítótárazása érdekében








