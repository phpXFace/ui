<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class ButtonGroup extends AbstractComposite implements IButtonGroup {

	/**
	 * @var Container
	 */
	private $container;

	public function __construct() {
		$this->container = new Container();
		$this->container->getAttributes()->addClass( 'btn-group' );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->container->getAttributes();
	}

	protected function getDraw() {
		return $this->container;
	}

} 
