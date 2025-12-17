<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\ui\common\IComponentElement;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
abstract class AbstractComposite extends AbstractComponentBase implements IComposite {

	/**
	 * @var IComponent[]
	 */
	protected $components = array();

	/**
	 * @var IComponentElement[]
	 */
	protected $elements = array();

	/**
	 * Adding further components
	 *
	 * @param IComponent $component
	 * @return AbstractComposite
	 */
	public function add( IComponent &$component ) {
		$this->components[] = $component;
		return $this;
	}

	/**
	 * Removing a component and return true if successful
	 *
	 * @param IComponent $component
	 * @return boolean
	 */
	public function remove( IComponent $component ) {
		$index = array_search( $component, $this->components, true );
		if ( $index === false ) {
			return false;
		}
		array_splice( $this->components, $index, 1 );
		return true;
	}

	/**
	 * Removing all components
	 */
	public function removeAll() {
		unset( $this->components );
		$this->components = array();
	}

	/**
	 * Renders the component collection and adding it to this component element
	 *
	 * @return IComponentElement
	 */
	public function render() {
		foreach ( $this->components as $component ) {
			$this->addElement( $component->render() );
		}

		return parent::draw();
	}

	/**
	 * Get an array of IComponentElement objects
	 *
	 * @return IComponentElement[]
	 */
	protected function getElements() {
		return $this->elements;
	}

	/**
	 * Add component element
	 *
	 * @param IComponentElement $element
	 */
	private function addElement( IComponentElement $element ) {
		$this->elements[] = $element;
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
