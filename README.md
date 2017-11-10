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

    Package name (<vendor>/<name>) [gabriel/my_first_project]: conquerorsoft/my_first_project
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
        "name": "conquerorsoft/my_first_project",
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
    Would you like the vendor directory added to your .gitignore [yes]?

10- composer.json file is created, edit it to include your library

    {
        "name": "conquerorsoft/my_first_project",
        "description": "Project created with composer init",
        "type": "project",
        "repositories": [
            {
                "type": "vcs",
                "url": "/Users/gabriel/phplibrary/my_first_library"
            }
        ],
        "require": {
            "php": "^5.6 || ^7.0",
            "conquerorsoft/my_first_library": "^0.1"
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

11- commit to git

    git add .
    git commit -m "Composer init"
    git tag -a v0.1.1 -m "version 0.1.1"
    git push -u origin master
    git push origin v0.1.1

12- Run composer install

    composer install

13- create a Changelog file ( this format is recommended: [Keep a Changelog](http://keepachangelog.com/en/1.0.0/) )

    vim CHANGELOG.md

14- commit to git

    git add .
    git commit -m "Changelog file added"
    git tag -a v0.1.2 -m "version 0.1.2"
    git push -u origin master
    git push origin v0.1.2

15- Create structure for starting the development

    mkdir src && mkdir tests

16- Edit the composer.json file to be this way now:

    {
        "name": "conquerorsoft/my_first_project",
        "description": "Project created with composer init",
        "type": "project",
        "keywords": [
            "conquerorsoft",
            "my_first_project",
            "tutorial",
            "phpworld 2017",
            "workshop"
        ],
        "homepage": "http://www.conquerorsoft.com/my_first_project",
        "repositories": [
            {
                "type": "vcs",
                "url": "/Users/gabriel/phplibrary/my_first_library"
            }
        ],
        "require": {
            "php": "^5.6 || ^7.0",
            "conquerorsoft/my_first_library": "^0.1"
        },
        "require-dev": {
            "phpunit/phpunit": "^5.7",
            "squizlabs/php_codesniffer": "3.*"
        },
        "license": "MIT",
        "authors": [
            {
                "name": "Christian Varela",
                "email": "cvarela@conquerorsoft.com",
                "homepage": "http://www.conquerorsoft.com/ChristianVarela",
                "role": "Developer"
            }
        ],
        "minimum-stability": "stable",
        "scripts": {
            "test": "phpunit",
            "check-style": "phpcs -p --standard=PSR2 --runtime-set ignore_errors_on_exit 1 --runtime-set ignore_warnings_on_exit 1 src tests",
            "fix-style": "phpcbf -p --standard=PSR2 --runtime-set ignore_errors_on_exit 1 --runtime-set ignore_warnings_on_exit 1 src tests"
        }
    }

17- Create file phpunit.xml

    vim phpunit.xml

18- add build to .gitignore

    echo build >> .gitignore

19- run composer update

    composer update

20- commit to git

    echo "build/" >> .gitignore
    git add .
    git commit -m "Preparation for development"
    git tag -a v0.1.3 -m "version 0.1.3"
    git push -u origin master
    git push origin v0.1.3

21- Add a LICENSE.md file (for this example we chose MIT)

    vim LICENSE.md

22- Create tests/FirstProjectClassTest.php

    vim tests/FirstProjectClassTest.php

23- Create src/FirstProjectClass.php

    vim src/FirstProjectClass.php

24- Add autoload section to composer.json

    "autoload": {
        "psr-4": {
            "conquerorsoft\\my_first_project\\": "src"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "conquerorsoft\\my_first_project\\": "test"
        }
    },

25- Rum composer dump-autoload

    composer dump-autoload

26- commit to git

    git add .
    git commit -m "Classes from project calling my library"
    git tag -a v0.1.4 -m "version 0.1.4"
    git push -u origin master
    git push origin v0.1.4

27- add repository to Travis and create travis configuration file
    
    vim .travis.yml

28- commit to git

    git add .
    git commit -m "Travis CI integration"
    git tag -a v0.1.5 -m "version 0.1.5"
    git push -u origin master
    git push origin v0.1.5

29- Change composer.json to use github repository instead of file system local folder

    vim composer.json

    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/ConquerorSoft/my_first_library"
        }
    ],

30- run composer update

    composer update

31- commit to git

    git add .
    git commit -m "VCS reference changed for my_first_library in composer.json"
    git tag -a v0.1.6 -m "version 0.1.6"
    git push -u origin master
    git push origin v0.1.6

32- Remove references for repositories in composer.json since now the library is on packagist.org
33- Run composer update

    composer clearcache
    composer update

34- commit to git

    git add .
    git commit -m "my_first_library is now taken from packagist"
    git tag -a v0.1.7 -m "version 0.1.7"
    git push -u origin master
    git push origin v0.1.7

## Contributing ##

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security ##

If you discover any security related issues, please email cvarela@conquerorsoft.com instead of using the issue tracker.

## Credits ##

- [Christian Varela][link-author]

## License ##

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat
[ico-travis]: https://travis-ci.org/ConquerorSoft/my_first_project.svg?branch=master
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/conquerorsoft/my_first_project.svg?style=flat
[ico-code-quality]: https://img.shields.io/scrutinizer/g/conquerorsoft/my_first_project.svg?style=flat

[link-travis]: https://travis-ci.org/ConquerorSoft/my_first_project
[link-scrutinizer]: https://scrutinizer-ci.com/g/conquerorsoft/my_first_project/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/conquerorsoft/my_first_project
[link-author]: https://github.com/gabrielconqueror

