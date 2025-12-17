<?php
namespace phpXFace\core\ui\common;

use phpXFace\core\lib\di\InjectionSingelton;

/**
 * Abstract base class for defining a component element.
 *
 * Provides the foundation for rendering HTML elements with specific tags,
 * attributes, and content. Concrete implementations must define the
 * element tag, child content, and attributes.
 *
 * @author      C.Pergande
 * @package     phpXFace\core\ui\common
 * @copyright   Copyright(c) 2014 Christian Pergande - phpXFace®
 * @license     MIT
 */
abstract class AbstractComponentElement implements IComponentElement {

	const HTML_FORMAT = '<%s%s>%s</%1$s>';

	/**
	 * Get the element tag
	 *
	 * @return string
	 */
	abstract protected function getElementTag();

	/**
	 * Get the child content
	 *
	 * @return string
	 */
	abstract protected function getContent();

	/**
	 * @return AbstractDecoratorProperties
	 */
	abstract protected function getAttributes();

	public function render() {
		$injector = InjectionSingelton::getInstance();
		$scope = $injector->getClassInstance( 'phpXFace\auth\client\models\Scope' );
		$authPermission = $this->getAttributes()->getAttribute('pxf-scope');

		if( $authPermission === null || ( $authPermission && $scope->isValid( $authPermission ) ) ){
			return sprintf( self::HTML_FORMAT, $this->getElementTag(), $this->getAttributes()->render(), $this->getContent() );
		}
	}
}

?>
