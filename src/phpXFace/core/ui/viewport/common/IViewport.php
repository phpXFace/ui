<?php
namespace phpXFace\core\ui\viewport\common;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IViewport {

	/**
	 * @param $stylesheet
	 * @return void
	 */
	public function setStylesheet( $stylesheet );

	/**
	 * @param $javascript
	 * @return void
	 */
	public function setJavascript( $javascript );

	/**
	 * @param string $controller controller name
	 */
	public function setController( $controller );
}

?>
