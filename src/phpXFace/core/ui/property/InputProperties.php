<?php
namespace phpXFace\core\ui\property;

use phpXFace\core\ui\common\AbstractDecoratorProperties;
use phpXFace\i18n\lib\I18n;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class InputProperties extends AbstractDecoratorProperties implements IElementProperties {

	/**
	 * @var string
	 */
	private $name = null;

	/**
	 * @var string
	 */
	private $type = null;

	/**
	 * @var string
	 */
	private $placeholder = null;

	/**
	 * @var string
	 */
	private $value = null;

	public function getName() {
		return $this->name;
	}

	public function setValue( $value ){
		$this->value = $value;
		$this->addAttribute( 'value', $this->value );
	}

	public function setName( $name ) {
		$this->name = $name;
		$this->addAttribute( 'name', $this->name );
	}

	public function setPlaceholder( $placeholder ) {
		$this->placeholder = $placeholder;
		$this->addAttribute( 'placeholder', I18n::_( $this->placeholder ) );
	}

	public function getType() {
		return $this->type;
	}

	public function setType( $type ) {
		$this->type = $type;
		$this->addAttribute( 'type', $this->type );
	}
}

?>
