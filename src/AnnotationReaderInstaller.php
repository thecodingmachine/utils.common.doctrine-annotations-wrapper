<?php
/*
 * Copyright (c) 2013 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */

namespace Mouf\Utils\Common\Doctrine\Annotations;

use Mouf\Installer\PackageInstallerInterface;
use Mouf\MoufManager;
use Mouf\Actions\InstallUtils;

/**
 * A logger class that writes messages into the php error_log.
 */
class AnnotationReaderInstaller implements PackageInstallerInterface {

	/**
	 * (non-PHPdoc)
	 * @see \Mouf\Installer\PackageInstallerInterface::install()
	 */
	public static function install(MoufManager $moufManager) {
		// Let's create the instances.
		$annotationReader = InstallUtils::getOrCreateInstance('annotationReader', null, $moufManager);
		$annotationReader->setCode('// Using composer autoloader
$loader = require ROOT_PATH . \'vendor/autoload.php\';
Doctrine\\Common\\Annotations\\AnnotationRegistry::registerLoader(array($loader, \'loadClass\'));

// Creating a new AnnotationReader
$reader = new Doctrine\\Common\\Annotations\\AnnotationReader();
return new Doctrine\\Common\\Annotations\\CachedReader($reader, new Doctrine\\Common\\Cache\\ArrayCache());');

		// Let's rewrite the MoufComponents.php file to save the component
		$moufManager->rewriteMouf();
	}
}
