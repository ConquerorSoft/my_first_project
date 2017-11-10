# My First Project #
[![Build Status][ico-travis]][link-travis] [![Software License][ico-license]](LICENSE.md) [![Coverage Status][ico-scrutinizer]][link-scrutinizer] [![Quality Score][ico-code-quality]][link-code-quality]

This is my very first project I created at php[world]. I learned that I have to create a README file to provide a description of my project so it can be used by other projects or persons.

### The steps to create "my first project" ###

1- create the my_first_project directory

    cd ~ && mkdir -p phplibrary/my_first_project && cd phplibrary/my_first_project

2- create a README.md file

    vim README.md

3- initialize a git repository

    git init

4- Do the first commit

    git add .
    git commit -m "First commit of my project"

5- Assign a version to your project

    git tag -a v0.1.0 -m "version 0.1.0"

6- Create a repository in github or bitbucket
7- Connect your repository with github (or bitbucket)

    git remote add origin https://github.com/ConquerorSoft/my_first_project.git
    git push -u origin master
    git push origin v0.1.0

8- run composer init

    composer init

9- enter all the information asked by composer init

    Package name (<vendor>/<name>) [gabriel/my_first_project]: php_library_right_way/my_first_project
    Description []: Project created with composer init
    Author [Christian Varela <dobleclick.mx@gmail.com>, n to skip]: Christian Varela <cvarela@conquerorsoft.com>
    Minimum Stability []:
    Package Type (e.g. library, project, metapackage, composer-plugin) []: project
    License []: MIT

    Define your dependencies.

    Would you like to define your dependencies (require) interactively [yes]?
    Search for a package: php
    Enter the version constraint to require (or leave blank to use the latest version): ^5.6 || ^7.0
    Search for a package:
    Would you like to define your dev dependencies (require-dev) interactively [yes]?
    Search for a package: phpunit/phpunit
    Enter the version constraint to require (or leave blank to use the latest version): ^5.7
    Search for a package: squizlabs/php_codesniffer
    Enter the version constraint to require (or leave blank to use the latest version): 3.*
    Search for a package:

    {
        "name": "php_library_right_way/my_first_project",
        "description": "Project created with composer init",
        "type": "project",
        "require": {
            "php": "^5.6 || ^7.0"
        },
        "require-dev": {
            "phpunit/phpunit": "^5.7",
            "squizlabs/php_codesniffer": "3.*"
        },
        "license": "MIT",
        "authors": [
            {
                "name": "Christian Varela",
                "email": "cvarela@conquerorsoft.com"
            }
        ]
    }

    Do you confirm generation [yes]?

10- composer.json file is created, commit to git

    git add .
    git commit -m "Composer init"
    git tag -a v0.1.1 -m "version 0.1.1"
    git push -u origin master
    git push origin v0.1.1

11- Run composer install

    composer install


