<?php
namespace phpXFace\core\ui\viewport\shape;

use phpXFace\core\ui\html\IDescriptionListTerm;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\viewport\common\AbstractComposite;
use phpXFace\core\ui\html\DescriptionListName;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\shape
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class DescriptionListContent extends AbstractComposite implements IDescriptionListContent {

    /**
     * @var IDescriptionListTerm
     */
    private $descriptionListContent = null;

    public function __construct() {
        $this->descriptionListContent = new DescriptionListName();
    }

    /**
     *  @return IBaseProperties
     */
    public function getProperties() {
        return $this->descriptionListContent->getAttributes();
    }

    protected function getDraw() {
        return $this->descriptionListContent;
    }

}
