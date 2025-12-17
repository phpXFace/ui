<?php
namespace phpXFace\core\ui\viewport\table;

use phpXFace\core\ui\html\table\Table;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\table
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TableView extends AbstractComposite implements ITableView {

	/**
	 * @var Table
	 */
	private $table = null;

	public function __construct() {
		$this->table = new Table();
		$this->getProperties()->addClass( 'table' );
	}

	/**
	 *  @return IBaseProperties
	 */
	public function getProperties() {
		return $this->table->getAttributes();
	}

	protected function getDraw() {
		return $this->table;
	}

} 
