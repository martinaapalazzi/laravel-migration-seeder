# Passi da fare per poter utilizzare il template di Laravel

0. Creo la repository a partire dal template e mi clono la repository appena creata

1. Copio il file .env.example e lo rinomino in .env

2. Apro il terminale ed eseguo il comando composer install

3. Sempre nel terminale, al termine del comando composer install, eseguo il comando php artisan key:generate

4. Sempre nel terminale, al termine dell'esecuzione di php artisan key:generate, eseguiamo il comando npm install (oppure, npm i)

5. Sempre nel terminale, al termine di npm install, eseguire il comando npm run build
- Al posto di npm run build, potreste eseguire npm run dev e lasciarlo attivo

6. Aprire un altro terminale ed eseguire il comando php artisan serve

LARAVEL MIGRATION SEEDER ESERCIZIO

STEP BY STEP

- creare nuovo database in phpmyadmin e lo scrivo nome nel file env;

- php artisan make:model Train;

- php artisan make:migration create_trains_table;

- riempire la tabella con nomi di colonne dentro la funzione up()

- php artisan migrate;

- se modifico la tabella, cambio nome di colonne allora faccio: php artisan migrate:rollback; 

- poi di nuovo: php artisan migrate;

- creo un seeder per riempire le mie colonne di dati, facendo il comando: php artisan make:seeder TrainSeeder (NomeModelSeeder);

- dopo aver riempito le colonne dei nostridatti allora facciamo il comando: php artisan db:seed --class=TrainSeeder; (questo esegue i seeder)


// SPIEGAZIONE:batch(ordine di come vengono eseguite le migration).
php artisanmigrate:rollback(esegue il codice della funzione down dell ultimo batch di migration ed elimina i record relativi nella tabella migrations) //


Milestone 1

Creiamo una tabella trains e relativa Migration (php artisan make:migration create_trains_table)
Ogni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
Cancellato
È probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto...
Inserite inizialmente i dati tramite PhpMyAdmin.
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.


Milestone 2

Aggiungiamo un seeder per la classe Train usando FakerPHP.







