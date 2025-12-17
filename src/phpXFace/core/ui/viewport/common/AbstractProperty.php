<?php
namespace phpXFace\core\ui\viewport\common;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 *
 * @deprecated
 */
abstract class AbstractProperty {

	private $value;

	abstract protected function getAttributeValue();

	public function get() {
		return $this->value;
	}

	public function set( $value ) {
		$this->value = $value;
	}

	protected function getAttributeName() {
		$class = \explode( "\\", \get_class( $this ) );
		return \array_shift( \array_reverse( $class ) );
	}

	public function __toString() {
		return "-pxf-{$this->getAttributeName()}-{$this->getAttributeValue()}";
	}
}

?>
