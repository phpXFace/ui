<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\viewport\layout\Pane;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class InputGroup extends AbstractComposite implements IInputGroup {

	/**
	 * @var Pane
	 */
	private $pane = null;

	public function __construct() {
		$this->pane = new Pane();
		$this->pane->getProperties()->addClass( 'input-group' );
	}

	/**
	 * @return IBaseProperties
	 */
	public function getProperties() {
		return $this->pane->getProperties();
	}

	protected function getDraw() {
		return $this->pane->render();
	}

}

