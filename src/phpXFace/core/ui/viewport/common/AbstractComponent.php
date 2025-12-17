<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\common\IComponentElement;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
abstract class AbstractComponent extends AbstractComponentBase implements IComponent{

	/**
	 * Renders the component collection and adding it to this component element
	 *
	 * @return IComponentElement
	 */
	public function render() {
		return parent::draw();
	}

	/**
	 * Get an array of IComponentElement objects
	 *
	 * @return IComponentElement[]
	 */
	protected function getElements() {
		return array();
	}

	/**
	 * Get the complete rendered component tree
	 *
	 * @return string
	 */
	public function draw() {
		return $this->render()->render();
	}

}

?>
