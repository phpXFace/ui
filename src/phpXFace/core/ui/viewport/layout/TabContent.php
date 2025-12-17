<?php
namespace phpXFace\core\ui\viewport\layout;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\layout
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TabContent extends AbstractComposite implements ITabContent {

	/**
	 * @var Container
	 */
	private $tabContent = null;

	/**
	 * @var boolean
	 */
	private $active = null;

	public function __construct() {
		$this->tabContent = new Container();
		$this->tabContent->getAttributes()->addClass( 'pxf-tab-contentItem' );
		$this->tabContent->getAttributes()->setRole( 'tabpanel' );
	}

	/**
	 * @param boolean $active
	 */
	public function setActive( $active ) {
		$this->active = $active;
		if ( $active ) {
			$this->getProperties()->addClass( 'active' );
		}
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->tabContent->getAttributes();
	}

	protected function getDraw() {
		return $this->tabContent;
	}

} 
