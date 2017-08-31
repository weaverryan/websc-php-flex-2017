# 11) I need a database!
> _slides/11-orm.md

A) Install Doctrine ORM!

    composer req orm

B) Configure your database  in `.env`

    database user: websc
    database pass: websc
    database name: phpflex

    DATABASE_URL="mysql://websc:websc@127.0.0.1:3306/phpflex?charset=utf8mb4&serverVersion=5.7"

C) Copy our `MenuItem.php` entity

    cp _files/MenuItem.php src/Entity/

D) Add our table and load some dummy data!

    ./bin/console doctrine:schema:update --force
    php _files/add_menu_items.php

SUCCESS WHEN:

You've got some data in the database? You can check
by running:

    ./bin/console doctrine:query:sql 'SELECT * FROM menu_item'
