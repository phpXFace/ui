<?php
namespace phpXFace\core\ui\html;

use phpXFace\core\ui\common\AbstractCompositeElement;
use phpXFace\core\ui\property\BaseProperties;
use phpXFace\core\ui\property\IBaseProperties;
use phpXFace\core\ui\property\IElementProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class DescriptionListTerm extends AbstractCompositeElement implements IElementProperties, IDescriptionListTerm {

    const ELEMENT_TAG = 'dt';

    /**
     * @var IBaseProperties
     */
    private $properties = null;

    /**
     * @var string
     */
    private $content = null;

    public function __construct( $content = null ) {
        $this->content = $content;
        $this->properties = new BaseProperties();
    }

    protected function getContent() {
        return $this->content;
    }

    public function setContent( $text ) {
        $this->content = $text;
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
