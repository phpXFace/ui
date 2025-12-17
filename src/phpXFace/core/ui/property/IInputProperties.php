<?php
namespace phpXFace\core\ui\property;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IInputProperties extends IBaseProperties {

	/**
	 * Get the name of the input field
	 *
	 * @return string
	 */
	public function getName();

	/**
	 * Set the name of the input field
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName( $name );

	/**
	 * Get the input type
	 *
	 * @return string
	 */
	public function getType();

	/**
	 * Set the input type
	 *
	 * @param string $type
	 * @return void
	 */
	public function setType( $type );

	/**
	 * Set the input value
	 *
	 * @param string $value
	 * @return void
	 */
	public function setValue( $value );
}

?>
