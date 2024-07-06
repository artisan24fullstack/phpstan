# Larastan

## Installation de Larastan

- Utilisez Composer pour ajouter Larastan à votre projet en tant que dépendance de développement 

```
composer require larastan/larastan:^2.0 --dev
```

## Configuration de Larastan 

- Dans la racine de votre application, créez un fichier phpstan.neon 
  
-  Voici un exemple de configuration basique :

```
includes:
    - vendor/larastan/larastan/extension.neon

parameters:

    paths:
        - app/

    # Level 9 is the highest level
    level: 5

#    ignoreErrors:
#        - '#PHPDoc tag @var#'
#
#    excludePaths:
#        - ./*/*/FileToBeExcluded.php
#
#    checkMissingIterableValueType: false
```

- Cette configuration indique à PHPStan où chercher les fichiers à analyser (paths) et quel niveau d'analyse utiliser (level). 

- Vous pouvez ajuster ces paramètres selon vos besoins.

## Pour analysee le code : 

- Exécutez l'analyse statique sur votre code en utilisant la commande PHPStan :

```
./vendor/bin/phpstan analyse
```
                                                                           
 > [OK] No errors level: 5                                                                                                    
                                                                                                                        

                  
