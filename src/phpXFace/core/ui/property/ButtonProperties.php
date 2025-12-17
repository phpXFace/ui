<?php
namespace phpXFace\core\ui\property;

use phpXFace\core\ui\common\AbstractDecoratorProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class ButtonProperties extends AbstractDecoratorProperties{

	private $type = null;

	public function getType() {
		return $this->type;
	}

	public function setType( $type ) {
		$this->type = $type;
		$this->addAttribute( 'type', $this->type );
	}

}

?>
