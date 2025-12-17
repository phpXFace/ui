<?php
namespace phpXFace\core\ui\viewport\table;

use phpXFace\core\ui\html\table\TableData;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\table
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class Cell extends AbstractComposite implements ICell {

	/**
	 * @var TableData
	 */
	private $tableData = null;

	public function __construct() {
		$this->tableData = new TableData();
	}

	/**
	 *  @return IBaseProperties
	 */
	public function getProperties() {
		return $this->tableData->getAttributes();
	}

	protected function getDraw() {
		return $this->tableData;
	}
} 
