Project setup

Installation

Step 1: Create database named lead-system
Step 2: Clone the source code
        git clone -b master https://git@github.com:susmithasusu/lead-system.git
Step 3: cd lead-system
Step 4:composer install
Step 5:php init
Step 6:vim common/config/main-local.php

 change db information

    'db' => [

            'class' => 'yii\db\Connection',

            'dsn' => 'mysql:host=127.0.0.1;dbname=lead-system',

            'username' => 'root',

            'password' => '',

            'charset' => 'utf8',

        ],

 Step 7:
            point API end point URL to backend
             /www/lead-system/backend/web


            point frontend URL to frontend
             /www/lead-system/frontend/web   


database is attached as an sql file lead-system.sql                 



Extra notes

Validation rules can be applied and Make the landing page as  visually appealing if i had more time.