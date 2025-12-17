<?php
namespace phpXFace\core\ui\property;

use phpXFace\core\ui\common\AbstractDecoratorProperties;
use phpXFace\i18n\lib\I18n;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\property
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TextAreaProperties extends AbstractDecoratorProperties{

    /**
     * @var string
     */
    private $name = null;

    /**
     * @var string
     */
    private $placeholder = null;

    /**
     * @param string $name
     */
    public function setName( $name ) {
        $this->name = $name;
        $this->addAttribute( 'name', $name );
    }

    public function setPlaceholder( $placeholder ) {
        $this->placeholder = $placeholder;
        $this->addAttribute( 'placeholder', I18n::_( $this->placeholder ) );
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

}
