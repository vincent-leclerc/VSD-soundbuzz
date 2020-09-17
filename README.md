# SoundBuzz

SoundBuzz est un projet scolaire qui consiste à créer une application web de streaming/partage de musiques.

## Lancement du projet 

* docker-compose up -d
* yarn install
* yarn encore dev
* docker exec -it ID_DU_CONTAINER_PHP composer require symfony/security-bundle
* docker exec -it ID_DU_CONTAINER_PHP php bin/console make:migration
* docker exec -it ID_DU_CONTAINER_PHP php bin/console doctrine:migrations:migrate

## Ajout d'une page 

- créer un controller dans le dossier src/Controller
- si besoin faire : 
    composer require annotations

- si besoin pour installer twig 
    composer require symfony/twig-bundle

## ajout de bootsrap (optionnel)

- installer yarn et npm 
    brew ou apt install npm 

    brew ou apt install yarn

- faire ensuite : 
    yarn add bootstrap --dev

# Liens utiles 

https://symfony.com/doc/current/frontend/encore/bootstrap.html

https://medium.com/@Gaotian/créer-une-image-docker-avec-symfony-4-902001abd65f