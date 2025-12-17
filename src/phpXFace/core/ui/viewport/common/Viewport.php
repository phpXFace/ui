<?php
namespace phpXFace\core\ui\viewport\common;

use phpXFace\core\lib\asset\AssetReader;
use phpXFace\core\lib\delegate\ControllerInvoker;
use phpXFace\core\ui\html\ISection;
use phpXFace\core\ui\html\Section;
use phpXFace\core\ui\viewport\property\Javascript;
use phpXFace\core\ui\viewport\property\Stylesheet;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\common
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Viewport extends AbstractComposite implements IViewport {

	/**
	 * @var ISection
	 */
	private $viewport = null;

	/**
	 * @var string
	 */
	private $controller = null;

	/**
	 * @var string
	 */
	private $stylesheet = null;

	/**
	 * @var string
	 */
	private $javascript = null;

	public function __construct() {
		$this->viewport = new Section();
	}

	/**
	 * Re-Invokes the controller
	 */
	public function __wakeup() {
		if ( !is_null( $this->controller ) ) {
			$controllerInvoker = new ControllerInvoker();
			$controllerInvoker->invoke( $this->controller );
		}
	}

	public function setStylesheet( $stylesheet ) {
		$this->stylesheet = $stylesheet;
		$assetReader = new AssetReader();
		$this->add( new Stylesheet( $assetReader->getStyleSheetContent( $stylesheet ) ) );
	}

	/**
	 * @param string $javascript
	 */
	public function setJavascript( $javascript ) {
		$this->javascript = explode( ',', $javascript );
		$assetReader = new AssetReader();
		$jsScript = '';
		foreach( $this->javascript as $jsFile ){
			$jsScript .= $assetReader->getJavascriptContent( $jsFile );
		}
		$this->add( new Javascript(  $jsScript ) );
	}

	public function setController( $controller ) {
		$this->controller = $controller;
	}

	protected function getDraw() {
		return $this->viewport;
	}

	public function getProperties() {
		return $this->viewport->getAttributes();
	}

}

?>
