<?php

$composerAutoloader = __DIR__."/../vendor/autoload.php";
if ( $composerAutoloader && is_file( $composerAutoloader ) && is_readable( $composerAutoloader ) ) {
	require_once $composerAutoloader;
} else {
	throw new RuntimeException( 'Please run: "composer install" to install dependencies.' );
}

$boostrap = new \phpXFace\core\lib\bootstrap\Bootstrap();

?>
