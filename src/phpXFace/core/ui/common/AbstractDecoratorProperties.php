<?php
namespace phpXFace\core\ui\common;

use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * Abstract class representing a decorator that provides additional properties to elements.
 *
 * This class serves as a base class for extending element-specific properties and
 * attributes through a decorator pattern. It allows chaining of property objects
 * and dynamic method invocation on those objects. Additionally, it provides
 * functionality for managing attributes and rendering them in a string format.
 *
 * @author      C.Pergande
 * @package     phpXFace\core\ui\common
 * @copyright   Copyright(c) 2014 Christian Pergande - phpXFace®
 * @license     MIT
 */
abstract class AbstractDecoratorProperties implements IElementProperties {

	/**
	 * @var AbstractDecoratorProperties
	 */
	private $properties = null;

	/**
	 * @var array
	 */
	private $attributes = array();

	/**
	 * Extends the properties with further element specific properties.
	 *
	 * @param IBaseProperties $properties
	 */
	public function __construct( IBaseProperties $properties = null ) {
		$this->properties = $properties;
	}

	/**
	 * Calls through the property object chain. If method cannot be found it will silently fail.
	 *
	 * @param string $method name of the method to called
	 * @param mixed $value argument to hand-over to the method
	 */
	public function __call( $method, $value ) {
		if ( !is_null( $this->properties ) && \method_exists( $this->properties, $method )  ) {
			if ( count( $value ) > 1 ) {
				$this->properties->$method( $value[ 0 ], $value[ 1 ] );
			} elseif ( count( $value ) === 1 ) {
				$this->properties->$method( $value[ 0 ] );
			} else {
				return $this->properties->$method();
			}
		}
	}

	/**
	 * Adding further attributes to the property object
	 *
	 * @param string $key
	 * @param mixed $value
	 */
	public function addAttribute( $key, $value ) {
		$this->attributes[ $key ] = $value;
	}

	/**
	 * Returns all attributes for this element.
	 *
	 * @return array
	 */
	public function getAttributes() {
		return $this->attributes;
	}

	/**
	 * Returns attribute for this attribute name.
	 *
	 * @param string $attributeName
	 * @return string
	 */
	public function getAttribute( $attributeName ) {
		$result = null;
		foreach($this->attributes as $key => $value){
			if( $attributeName === $key ){
				$result = $value;
			}
		}
		return $result;
	}

	public function removeAttribute( $attributeName ){
		unset($this->attributes[ $attributeName ]);
	}

	/**
	 * Renders all attributes into a string.
	 *
	 * @return string
	 */
	public function render() {
		$mergedAttributes = $this->getAllAttributes();
		$attributes = implode( ' ', array_map( array( $this, 'getAttributeConcatenation' ), array_keys( $mergedAttributes ), $mergedAttributes ) );
		return ( strlen( $attributes ) > 1 ) ? ' ' . $attributes : '';
	}

	/**
	 * Get a attribute concatenation.
	 *
	 * @param string $attributeName
	 * @param string $attributeValue
	 *
	 * @return string
	 */
	public function getAttributeConcatenation( $attributeName, $attributeValue ) {
		if( strstr( $attributeName, 'data' ) ){
			return $attributeName . '=' . '\'' . $attributeValue . '\'';
		}
		return $attributeName . '=' . '"' . $attributeValue . '"';
	}

	/**
	 * Returns all attributes for this element.
	 *
	 * @return array
	 */
	public function getAllAttributes() {
		if ( $this->properties === null ) {
			$this->attributes = $this->getAttributes();
		} else {
			$this->attributes = \array_merge( $this->getAttributes(), $this->properties->getAttributes() );
		}
		return $this->attributes;
	}

	/**
	 * Checking the chain for callable method
	 *
	 * @param string $method
	 * @return bool
	 */
	public function methodExists( $method ) {
		$result = false;
		if ( \method_exists( $this, $method ) ) {
			$result = true;
		} elseif ( !is_null( $this->properties ) ) {
			if ( \method_exists( $this->properties, $method ) ) {
				$result = true;
			} else {
				return $this->properties->methodExists( $method );
			}
		}
		return $result;
	}

	/**
	 * Returns the property object
	 *
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->properties;
	}

}

?>
