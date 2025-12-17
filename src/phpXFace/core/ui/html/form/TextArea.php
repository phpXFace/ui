<?php
namespace phpXFace\core\ui\html\form;

use phpXFace\core\ui\common\AbstractComponentElement;
use phpXFace\core\ui\property\TextAreaProperties;
use phpXFace\core\ui\property\IElementProperties;
use phpXFace\core\ui\property\BaseProperties;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\html\form
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TextArea extends AbstractComponentElement implements ITextarea, IElementProperties {

    const ELEMENT_TAG = 'textarea';

    /**
     * @var \phpXFace\core\ui\property\TextAreaProperties
     */
    private $properties = null;

    public function __construct() {
        $baseProperties = new BaseProperties();
        $this->properties = new TextAreaProperties( $baseProperties );
    }

    protected function getElementTag() {
        return self::ELEMENT_TAG;
    }

    /**
     * @return \phpXFace\core\ui\property\TextAreaProperties
     */
    public function getAttributes() {
        return $this->properties;
    }

    /**
     * Get the child content
     *
     * @return string
     */
    protected function getContent() {
        // TODO: Implement getContent() method.
    }
}

?>
