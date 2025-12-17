<?php
namespace phpXFace\core\ui\viewport\layout;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\common\IComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\layout
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Accordion extends AbstractComposite implements IPanel {

	/**
	 * @var Pane
	 */
	private $panel = null;

	public function __construct() {
		$this->panel = new Pane();
		$this->panel->getProperties()->addClass( 'panel-group' );
		$this->panel->getProperties()->setRole( 'tablist' );
	}

	protected function getDraw() {
		return $this->panel->render();
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->panel->getProperties();
	}
} 
