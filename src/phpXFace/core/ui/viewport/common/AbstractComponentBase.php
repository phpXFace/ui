<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\lib\annotations\PXF_DI as PXF_DI;
use phpXFace\core\lib\di\Injector;
use phpXFace\core\ui\common\IComponentElement;
use phpXFace\core\ui\property\IBaseProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
abstract class AbstractComponentBase extends Injector{

	/**
	 * Get the IComponentElement object of this component
	 *
	 * @return IComponentElement
	 */
	abstract protected function getDraw();

	/**
	 * Get an array of IComponentElement objects
	 *
	 * @return IComponentElement[]
	 */
	abstract protected function getElements();

	/**
	 * @return IBaseProperties
	 */
	abstract public function getProperties();

	/**
	 * @PXF_DI("\phpXFace\core\lib\marshaller\ComponentReferences")
	 * @var \phpXFace\core\lib\marshaller\IComponentReferences
	 */
	private $componentReferences = null;

	/**
	 * Re-allocate the identifier and its reference to this component object.
	 * @throws \Exception
	 */
	public function __wakeup() {
		$this->componentReferences = parent::getClassInstance( "\\phpXFace\\core\\lib\\marshaller\\ComponentReferences" );
		if ( $this->getProperties()->getId() !== null ) {
			$this->componentReferences->add( $this->getProperties()->getId(), $this );
		}
	}

	/**
	 * Get the current component element
	 *
	 * @return IComponentElement
	 */
	public function draw() {
		foreach ( $this->getElements() as $componentElement ) {
			$this->getDraw()->add( $componentElement );
		}
		return $this->getDraw();
	}
}

?>
