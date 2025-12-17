<?php
namespace phpXFace\core\ui\viewport\table;

use phpXFace\core\ui\html\table\TableRow;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\table
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Row extends AbstractComposite implements IRow {

	/**
	 * @var TableRow
	 */
	private $tableRow = null;

	public function __construct() {
		$this->tableRow = new TableRow();
	}

	/**
	 *  @return IBaseProperties
	 */
	public function getProperties() {
		return $this->tableRow->getAttributes();
	}

	protected function getDraw() {
		return $this->tableRow;
	}
} 
