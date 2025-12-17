<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class DescriptionList extends AbstractComposite implements IDescriptionList {

    /**
     * @var \phpXFace\core\ui\html\DescriptionList
     */
    private $descriptionList = null;

    public function __construct() {
        $this->descriptionList = new \phpXFace\core\ui\html\DescriptionList();
    }

    /**
     *  @return IBaseProperties
     */
    public function getProperties() {
        return $this->descriptionList->getAttributes();
    }

    protected function getDraw() {
        return $this->descriptionList;
    }

}
