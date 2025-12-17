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
class TableBody extends AbstractComposite implements ITableBody {

	/**
	 * @var \phpXFace\core\ui\html\table\TableBody
	 */
	private $tableBody = null;

	public function __construct() {
		$this->tableBody = new \phpXFace\core\ui\html\table\TableBody();
	}

	/**
	 *  @return IBaseProperties
	 */
	public function getProperties() {
		return $this->tableBody->getAttributes();
	}

	protected function getDraw() {
		return $this->tableBody;
	}

} 
