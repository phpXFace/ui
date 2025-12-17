<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\form\ISelect;
use phpXFace\core\ui\html\form\Select;
use phpXFace\core\ui\property\ISelectProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class ComboBox extends AbstractComposite implements IComboBox {

	/**
	 * @var ISelect
	 */
	private $comboBox = null;

	public function __construct() {
		$this->comboBox = new Select();
		$this->comboBox->getAttributes()->addClass( 'pxf-combobox' );
	}

	/**
	 * @return ISelectProperties
	 */
	public function getProperties() {
		return $this->comboBox->getAttributes();
	}

	protected function getDraw() {
		if( !is_null( $this->getProperties()->getBind()) ){
			$bind = explode( ':', $this->getProperties()->getBind() );
			$this->getProperties()->setName( $bind[1] );
		}
		return $this->comboBox;
	}

} 
