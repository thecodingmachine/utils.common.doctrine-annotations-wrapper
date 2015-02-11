Doctrine's Annotations for Mouf framework
=========================================

Provides an install script for Doctrine's AnnotationReader in Mouf Framework.

Content of the package
----------------------

This package contains an install script that provides a [Doctrine's `AnnotationReader`](http://docs.doctrine-project.org/projects/doctrine-common/en/latest/reference/annotations.html) instance in a Mouf project.

This instance is called `annotationReader`.

By default, it is configured as the following:

- You don't have to register annotations using the `AnnotationRegistry`. Indeed, the autoloader of Composer is directly used and therefore, any class accessible through Composer can be a valid Annotation.
- The annotation reader stored in `annotationReader` instance requires annotations to exist. It will throw an exception if an annotation is not found.
- Annotations must be fully qualified.

Installation
------------

To install the package, just add its latest version to your composer.json (see the package in the [packagist website](https://packagist.org/packages/mouf/utils.common.doctrine-annotations-wrapper)) adn run the `php composer.phar update`.

Then in Mouf validation process, a new task should be marked as **To run**, launch the installation process and you will have your `annotationReader` instance ready to use!