<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\ListItem;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class MenuItem extends AbstractComposite implements IMenuItem {

	/**
	 * @var Hyperlink
	 */
	private $hyperlink = null;

	/**
	 * @var string
	 */
	private $target = null;

	/**
	 * @var boolean
	 */
	private $disabled = null;

	public function __construct() {
		$this->hyperlink = new Hyperlink();
		$this->hyperlink->getProperties()->addClass( 'pxf-menu-item' );
	}

	public function add( IComponent &$component ) {
		$this->hyperlink->add( $component );
	}

	public function setTarget( $target ) {
		$this->target = $target;
		$this->hyperlink->getProperties()->setHref( $target );
	}

	public function setDisabled( $disabled ) {
		$this->disabled = $disabled;
	}

	public function isDisabled() {
		return $this->disabled;
	}


	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->hyperlink->getProperties();
	}

	protected function getDraw() {
		$listItem = new ListItem();
		$listItem->add( $this->hyperlink->render() );
		if ( $this->disabled && !is_null( $this->disabled ) ) {
			$this->hyperlink->getProperties()->addClass( 'disabled' );
			$this->hyperlink->getProperties()->setHref( '#' );
		}
		return $listItem;
	}

} 
