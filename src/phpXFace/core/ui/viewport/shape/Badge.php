<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\i18n\lib\I18n;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\viewport\common\AbstractComponent;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Badge extends AbstractComponent implements IBadge {

	/**
	 * @var Span
	 */
	private $badge = null;

	/**
	 * @var string
	 */
	private $text = null;

	public function __construct() {
		$this->badge = new Span();
		$this->badge->getAttributes()->addClass( 'badge' );
	}

	public function setText( $text ) {
		$this->text = $text;
		$this->badge->setContent( I18n::_( $text ) );
	}

	/**
	 *  @return IBaseProperties
	 */
	public function getProperties() {
		return $this->badge->getAttributes();
	}

	protected function getDraw() {
		return $this->badge;
	}

} 
