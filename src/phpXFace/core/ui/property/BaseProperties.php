<?php
namespace phpXFace\core\ui\property;

use phpXFace\core\ui\common\AbstractDecoratorProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class BaseProperties extends AbstractDecoratorProperties implements IBaseProperties {

	/**
	 * Element identifier
	 *
	 * @var string
	 */
	private $id     = null;

	/**
	 * Element role
	 *
	 * @var string
	 */
	private $role   = null;

	/**
	 * Style classes
	 *
	 * @var array
	 */
	private $class  = array();

	/**
	 * Element data attributes
	 *
	 * @var array
	 */
	private $data   = array();

	/**
	 * Style properties
	 *
	 * @var array
	 */
	private $style  = array();

	/**
	 * Data binding
	 *
	 * @var null
	 */
	private $bind   = null;

	public function getId() {
		return $this->id;
	}

	public function setId( $id ) {
		$this->id = $id;
		$this->addAttribute( 'id', $this->id );
	}

	public function setRole( $role ) {
		$this->role = $role;
		$this->addAttribute( 'role', $this->role );
	}

	public function getRole() {
		return $this->role;
	}

	public function getClass() {
		return $this->class;
	}

	public function addClass( $class ) {
		\array_push( $this->class, $class );
		$this->addAttribute( 'class', \implode( ' ', $this->class ) );
	}

	public function removeClass( $class ) {
		if ( in_array( $class, $this->class ) ) {
			foreach ( $this->class as $key => $value ) {
				if ( $value === $class ) {
					unset( $this->class[ $key ] );
					$this->addAttribute( 'class', \implode( ' ', $this->class ) );
				}
			}
		}
	}

	public function getData() {
		return $this->data;
	}

	public function addData( $name, $data ) {
		\array_push( $this->data, array( $name => $data ) );
		foreach ( $this->data as $data ) {
			foreach ( $data as $name => $value ) {
				$this->addAttribute( "data-{$name}", $value );
			}
		}
	}

	public function setBind( $bind ) {
		$this->bind = $bind;
		$this->addAttribute( 'data-bind', $bind );
	}

	public function getBind() {
		return $this->bind;
	}

	public function getStyle() {
		return $this->style;
	}

	public function addStyle( $style ) {
		\array_push( $this->style, $style );
		$this->addAttribute( 'style', \implode( ';', $this->style ) );
	}

}

?>
