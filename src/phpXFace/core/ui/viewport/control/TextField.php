<?php
namespace phpXFace\core\ui\viewport\control;

use phpXFace\core\ui\html\Container;
use phpXFace\core\ui\html\form\FormInput;
use phpXFace\core\ui\html\form\InputType;
use phpXFace\core\ui\html\Span;
use phpXFace\core\ui\property\IInputProperties;
use phpXFace\core\ui\viewport\common\AbstractComponent;
use phpXFace\core\ui\viewport\shape\Icon;

/**
 * @author      C.Pergande
 * @package     phpXFace\core\ui\viewport\control
 * @copyright   Copyright(c) 2013 Christian Pergande - phpXFace®
 * @license     MIT
 */
class TextField extends AbstractComponent implements ITextField {

	/**
	 * @var FormInput
	 */
	private $textField = null;

	/**
	 * @var string
	 */
	private $addOnPosition = 'left';

	/**
	 * @var string
	 */
	private $addOnText = null;

	/**
	 * @var string
	 */
	private $addOnIcon = null;

	/**
	 * @var string
	 */
	private $addOnIconContext = null;

	public function __construct() {
		$this->textField = new FormInput();
		$this->textField->getAttributes()->addClass( 'pxf-textfield' );
		$this->textField->getAttributes()->setType( InputType::TEXT );
	}

	public function setValue( $value ){
		$this->getProperties()->setValue( $value );
	}

	public function setAddOnText( $text ){
		$this->addOnText = $text;
	}

	public function setAddOnIcon( $icon ){
		$this->addOnIcon = $icon;
	}

	public function setAddOnIconContext( $addOnIconContext ) {
		$this->addOnIconContext = $addOnIconContext;
	}

	public function setAddOnPosition( $position ){
		$this->addOnPosition = $position;
	}

	/**
	 * @return IInputProperties
	 */
	public function getProperties() {
		return $this->textField->getAttributes();
	}

	protected function getDraw() {

		if( !is_null( $this->addOnText ) || !is_null( $this->addOnIcon ) ){
			$container = new Container();
			$container->getAttributes()->addClass( 'input-group' );

			$wrapper1 = new Container();
			$wrapper1->getAttributes()->addClass( 'input-group-addon' );
			$wrapper1->getAttributes()->addClass( 'clear' );

			$wrapper2 = new Container();
			$wrapper2->getAttributes()->addClass( 'input-group-addon' );
			$wrapper2->getAttributes()->addClass( 'clear' );

			if( !is_null( $this->addOnText ) ) {
				$span = new Span( $this->addOnText );
				$wrapper1->add( $span );
			}elseif( !is_null( $this->addOnIcon ) ){
				$icon = new Icon();
				$icon->setContext( $this->addOnIconContext );
				$icon->setType( $this->addOnIcon );
				$icon->getProperties()->addStyle( 'margin: 0px' );
				$wrapper1->add( $icon->render() );
			}

			if( !is_null( $this->addOnIcon ) ) {
				$icon = new Icon();
				$icon->setContext( $this->addOnIconContext );
				$icon->setType( $this->addOnIcon );
				$icon->getProperties()->addStyle( 'margin: 0px' );
				$wrapper2->add( $icon->render() );
			}

			if( $this->addOnPosition === 'left' ) {
				$container->add( $wrapper1 );
				$container->add( $this->textField );

				if( !is_null( $this->addOnIcon ) && !is_null( $this->addOnText ) ){
					$container->add( $wrapper2 );
				}

			}elseif( $this->addOnPosition === 'right' ){
				if( !is_null( $this->addOnIcon ) && !is_null( $this->addOnText ) ){
					$container->add( $wrapper2 );
				}
				$container->add( $this->textField );
				$container->add( $wrapper1 );
			}

			return $container;
		}
		return $this->textField;
	}

}
