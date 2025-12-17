<?php
namespace phpXFace\core\ui\property;

use phpXFace\core\ui\common\AbstractDecoratorProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class SelectProperties extends AbstractDecoratorProperties{

	/**
	 * @var string
	 */
	private $name = null;

	/**
	 * @var boolean
	 */
	private $multiple = null;

	/**
	 * @var int
	 */
	private $size = null;

	/**
	 * @param boolean $multiple
	 */
	public function setMultiple( $multiple ) {
		$this->multiple = $multiple;
		$this->addAttribute( 'multiple', $multiple );
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
		$this->addAttribute( 'name', $name );
	}

	/**
	 * @param int $size
	 */
	public function setSize( $size ) {
		$this->size = $size;
		$this->addAttribute( 'size', $size );
	}

	/**
	 * @return boolean
	 */
	public function getMultiple() {
		return $this->multiple;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return int
	 */
	public function getSize() {
		return $this->size;
	}
}
