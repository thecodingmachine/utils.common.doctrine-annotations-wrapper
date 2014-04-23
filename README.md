utils.common.doctrine-annotations-wrapper
=========================================

Provide an install script for a Doctrine's AnnotationReader in Mouf Framework.

Content of the package
----------------------

This package provide a new reader in order to be able to read Doctrine's Annotations in a mouf project.

The installer is based on pure PHP code (as you can see in the AnnotationReaderInstaller setCode function), and it does two things : 

-   register a new loader (so that we can use the composer autoloader, located in 'vendor/autoload.php').
-   create a new AnnotationReader (use to parse every annotations in the code).

Installation
------------

To install the package, just add its latest version to your composer.json (see the package in the [packagist website](https://packagist.org/packages/mouf/utils.common.doctrine-annotations-wrapper)) adn run the `php composer.phar update`.

Then in Mouf validation process, a new task should be marked as "To run", lounch the installation process and you will have your annoationReander instance ready to use !