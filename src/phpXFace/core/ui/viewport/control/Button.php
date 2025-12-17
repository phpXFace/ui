<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Button as HtmlButton;
use phpXFace\core\ui\property\IButtonProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Button extends AbstractComposite implements IButton {

	/**
	 * @var HtmlButton
	 */
	private $button = null;

	public function __construct() {
		$this->button = new HtmlButton();
		$this->button->getAttributes()->addClass( 'pxf-button' );
	}

	/**
	 * @param string $bindDialog
	 */
	public function setBindDialog( $bindDialog ) {
		$this->getProperties()->addData('toggle','modal');
		$this->getProperties()->addData('target','#'.$bindDialog);
	}

	/**
	 * @return IButtonProperties
	 */
	public function getProperties() {
		return $this->button->getAttributes();
	}

	protected function getDraw() {
		return $this->button;
	}
}


?>
