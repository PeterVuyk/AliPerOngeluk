# Ali per ongeluk

A dutch pun to ridicule Aliexpress. Order something completely worthless that has no value at all.
This project is written in PHP with the Symfony framework. The goal for this project is to get familiar with Docker and Amazon web services.

![alt text](https://raw.githubusercontent.com/PeterVuyk/AliPerOngeluk/master/src/OrderingBundle/Resources/public/img/webpage-screenshot.png)

## Getting Started

* git clone this project to your (local) repository
* cd to the docker directory
* Change the environment parameters in the .env file
* Run the docker containers by docker-compose up
* Add the dependencies by composer install (during the setup you can add the parameters)
* Add the database by running: php bin/console doctrine:database:create
* Create the tables by running: php bin/console doctrine:migrations:migrate
* Dump the assets manually: php bin/console assetic:dump

## Contributing

This is an open source project, feel free to download or fork the project.