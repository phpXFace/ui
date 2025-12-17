<?php
namespace phpXFace\core\ui\property;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IFormProperties extends IBaseProperties {

	/**
	 * Get the type of method (e.g. POST, GET)
	 *
	 * @return string
	 */
	public function getMethod();

	/**
	 * Set the type of method (e.g. POST, GET)
	 *
	 * @param string $method
	 */
	public function setMethod( $method );

	/**
	 * Set the form action url
	 *
	 * @param string $action
	 * @return void
	 */
	public function setAction( $action );

	/**
	 * Get the form action url
	 *
	 * @return string
	 */
	public function getAction();
}
