<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Anchor;
use phpXFace\core\ui\html\IAnchor;
use phpXFace\core\ui\property\IAnchorProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Hyperlink extends AbstractComposite implements IHyperlink {

	/**
	 * @var IAnchor
	 */
	private $anchor = null;

	public function __construct() {
		$this->anchor = new Anchor();
		$this->anchor->getAttributes()->addClass( 'pxf-hyperlink' );
	}

	/**
	 * @return IAnchorProperties
	 */
	public function getProperties() {
		return $this->anchor->getAttributes();
	}

	protected function getDraw() {
		return $this->anchor;
	}
}

?>
