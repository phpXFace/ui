<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\i18n\lib\I18n;
use phpXFace\core\ui\html\form\IOption;
use phpXFace\core\ui\html\form\Option;
use phpXFace\core\ui\property\IOptionProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class ComboBoxItem extends AbstractComponent implements IComboBoxItem {

	/**
	 * @var IOption
	 */
	private $comboBoxItem = null;

	/**
	 * @var string
	 */
	private $text = null;

	public function __construct() {
		$this->comboBoxItem = new Option();
		$this->comboBoxItem->getAttributes()->addClass( 'pxf-combobox-item' );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->comboBoxItem->setContent( I18n::_( $text ) );
	}

	/**
	 * @return IOptionProperties
	 */
	public function getProperties() {
		return $this->comboBoxItem->getAttributes();
	}

	protected function getDraw() {
		return $this->comboBoxItem;
	}
} 
