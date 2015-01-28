Atelier Lecture de fichier
==========================

Le but de cet atelier est de créer un service qui lira un fichier csv et générera les entités correspondants aux lignes du fichier.
Le fichier csv se trouve dans web/upload/terrain.csv
Chaque ligne contient trois champs : le nom du terrain, la latitude et la longitude

Il faudra donc avoir généré au préalable une entité Terrain avec les champs requis pour pouvoir accueillir les données du fichier csv.

Préparartion du projet
----------------------

Dans la console dans le fichier racine du serveur web

  * ./composer.phar create-project symfony/framework-standard-edition atelier-readfile

  * cd atelier-readfile

  * php app/console doctrine:database:create

  * curl 192.168.0.21/sf_bash/chmod.sh | sh

  * php app/console generate:bundle
  ** WCS/TerrainBundle
 
  * php app/console doctrine:generate:entity
  ** WCSTerrainBundle:Terrain
  
  * php app/console doctrine:generate:crud
  ** WCSTerrainBundle:Terrain
  

Emplacement du code spécifique à l'atelier :
--------------------------------------------

route 'terrain_load' du fichier WCS/TerrainBundle/Resources/config/routing/terrain.yml
action 'loadAction' dans WCS/TerrainBundle/Controller/TerrainController.php
config du service 'wcs_terrain.load' dans le fichier WCS/TerrainBundle/Resources/config/service.yml
classe du service 'wcs_terrain.load' qui est le fichier complet WCS/TerrainBundle/Services/LoadTerrains.php


