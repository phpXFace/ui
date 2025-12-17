<?php
namespace phpXFace\core\ui\common;

/**
 * Represents an abstract composite element that can contain and manage multiple
 * component elements, allowing for composite behavior in a component hierarchy structure.
 * This class provides methods for adding, removing, and rendering nested components.
 *
 * @author      C.Pergande
 * @package     phpXFace\core\ui\common
 * @copyright   Copyright(c) 2014 Christian Pergande - phpXFace®
 * @license     MIT
 */
abstract class AbstractCompositeElement extends AbstractComponentElement implements ICompositeElement {

	/**
	 * @var IComponentElement[]
	 */
	protected $components = array();

	/**
	 * @var string
	 */
	protected $contentBuffer = '';

	/**
	 * Adding a component element to this composite element
	 *
	 * @param IComponentElement $component
	 * @return IComponentElement
	 */
	public function add( IComponentElement $component ) {
		$this->components[] = $component;
		return $component;
	}

	/**
	 * Removes a component element from this composite element
	 *
	 * @param IComponentElement $component
	 * @return boolean true if remove was successful
	 */
	public function remove( IComponentElement $component ) {
		$index = array_search( $component, $this->components, true );
		if ( $index === false ) {
			return false;
		}
		array_splice( $this->components, $index, 1 );
		return true;
	}

	/**
	 * Returns the rendered content
	 *
	 * @return string html
	 */
	public function render() {
		foreach ( $this->components as $component ) {
			$this->addContentBuffer( $component->render() );
		}
		return parent::render();
	}

	/**
	 * Get the rendered content
	 *
	 * @return string
	 */
	protected function getContent() {
		return $this->contentBuffer;
	}

	/**
	 * Add rendered content to the buffer.
	 *
	 * @param string $content html
	 */
	private function addContentBuffer( $content ) {
		$this->contentBuffer .= $content;
	}
}

?>
