<?php
namespace phpXFace\core\ui\property;

use phpXFace\core\ui\common\AbstractDecoratorProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class OptionProperties extends AbstractDecoratorProperties{

	/**
	 * @var boolean
	 */
	private $disabled = null;

	/**
	 * @var boolean
	 */
	private $selected = null;

	/**
	 * @var string
	 */
	private $value = null;

	/**
	 * @param boolean $disabled
	 */
	public function setDisabled( $disabled ) {
		$this->disabled = $disabled;
		$this->addAttribute( 'disabled', 'disabled' );
	}

	/**
	 * @return boolean
	 */
	public function getDisabled() {
		return $this->disabled;
	}

	/**
	 * @param boolean $selected
	 */
	public function setSelected( $selected ) {
		$this->selected = $selected;
		$this->addAttribute( 'selected', 'selected' );
	}

	/**
	 * @return boolean
	 */
	public function getSelected() {
		return $this->selected;
	}

	/**
	 * @param string $value
	 */
	public function setValue( $value ) {
		$this->value = $value;
		$this->addAttribute( 'value', $value );
	}

	/**
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}

} 
