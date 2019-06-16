
## How to use

- Clone the repository with __git clone__
  Open terminal go to root folder eg: root@pc:/var/www/html#

  then run this git clone https://github.com/attackerbeater/Expenses-Manager.git

- Copy __.env.example__ file to __.env__ then edit with the database credentials

  eg: cp -R .env.example .env  
  then open the copied file
  sudo nano .env
  then add database credentials

  if you don't have database already you can create via terminal

  eg:
  mysql -u root -p
  CREATE DATABASE expensesmanager;
  exit;

  hit enter to go back

  within .env file
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=expensesmanager
  DB_USERNAME=
  DB_PASSWORD=


- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL and login with default credentials __admin@admin.com__ - __password__
