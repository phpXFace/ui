<?php
namespace phpXFace\core\ui\html;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\common\IComponentElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class DescriptionList extends AbstractCompositeElement implements IElementProperties, IDescriptionList {

    const ELEMENT_TAG = 'dl';

    /**
     * @var IBaseProperties
     */
    private $properties = null;

    public function __construct() {
        $this->properties = new BaseProperties();
    }

    public function add( IComponentElement $component ) {
        parent::add( $component );
    }

    protected function getElementTag() {
        return self::ELEMENT_TAG;
    }

    /**
     * @return IBaseProperties
     */
    public function getAttributes() {
        return $this->properties;
    }
}

?>
