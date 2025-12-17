<?php
namespace phpXFace\core\ui\property;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
interface IButtonProperties extends IBaseProperties {

	const BUTTON_TYPE_SUBMIT = 'submit';

	const BUTTON_TYPE_BUTTON = 'button';

	const BUTTON_TYPE_RESET = 'reset';

	/**
	 * Get the button type (e.g. submit, button, reset)
	 *
	 * @return string
	 */
	public function getType();

	/**
	 * Set the button type (e.g. submit, button, reset)
	 *
	 * @param string $type
	 * @return void
	 */
	public function setType( $type );

}

?>
