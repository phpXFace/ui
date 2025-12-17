<?php
namespace phpXFace\core\ui\viewport\table;

use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\table
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TableHeader extends AbstractComposite implements ITableHeader {

	/**
	 * @var \phpXFace\core\ui\html\table\TableHeader
	 */
	private $tableHeader = null;

	public function __construct() {
		$this->tableHeader = new \phpXFace\core\ui\html\table\TableHeader();
	}

	/**
	 *  @return IBaseProperties
	 */
	public function getProperties() {
		return $this->tableHeader->getAttributes();
	}

	protected function getDraw() {
		return $this->tableHeader;
	}

} 
