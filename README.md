<p align="center">
  <img src="./logo.png" alt="phpXFace" width="160" />
</p>

phpXFace UI
===========

An experimental, component‑based UI layer for the phpXFace microservice framework. It lets you describe views in XML (inspired by Android and JavaFX) that are marshalled into PHP component trees with controller hooks, dependency injection, and event handling.

This repository contains the UI module. The runtime depends on `phpxface/core` and a few doctrine libraries.

## Project status

This package is a small building block within the phpXFace ecosystem.

- Origin: started as a personal side project in 2013 to explore annotations, DI, modular apps, and an XML‑driven UI.
- Today: published openly for anyone curious about these ideas. Expect legacy code and APIs.
- Maintenance: no longer maintained by the original author. Issues and PRs may not be reviewed or merged. Please consider forking if you need changes.


Features
--------
- XML → PHP component tree: declarative UI with an XML DSL.
- Controller injection: reference UI elements by `id` and inject them into controllers via annotations.
- Event routing: annotate controller methods to handle UI or HTTP events.
- A set of common UI building blocks: layouts, controls, shapes, tables.


Quick Example
-------------

XML view:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<Phpxface environment="Development" lang="en-GB" release="0.0.1" xmlns:pxf="http://www.w3.org/2001/XMLSchema-instance" pxf:schemaLocation="">
    <Viewport controller="phpXFace\development\Controller">
        <BorderPane>
            <center>
                <Pane id="infoLoader"/>
                    <Text id="anotherText"/>
                    <Include source="sample/test123.xml"/>
                </Pane>
            </center>
        </BorderPane>
    </Viewport>
</Phpxface>
```

Controller with injected components and event handling:

```php
<?php
namespace phpXFace\development;

use phpXFace\core\lib\annotations\PXF as PXF;
use phpXFace\core\lib\annotations\PXF_Event as PXF_Event;
use phpXFace\core\lib\collection\Map;
use phpXFace\core\lib\application\Application;
use phpXFace\core\lib\delegate\PXFController;
use phpXFace\core\ui\viewport\layout\Pane;
use phpXFace\core\ui\viewport\shape\Text;
use myProject\module\model\ParamObject;

class Controller extends Application implements PXFController{

    /**
     * @PXF("infoLoader")
     * @var Pane
     */
    private $infoLoader = null;

    /**
     * Resources such as labels (e.g. i18n)
     * @var Map
     */
    private $resourceBundle = null;

    /**
     * @PXF("anotherText")
     * @var Text
     */
    private $anotherText = null;

    /**
     * The init method acts as a constructor
     */
    public function init() {
        $this->infoLoader->getProperties()->addClass("infoIcon");
        $this->addPane();
        $this->anotherText->setText("Hello");
    }

    /**
     * @PXF_Event("module/controller/action")
     * @param ParamObject $params POST & GET Parameters
     */
    public function handleButtonAction( ParamObject $params ){
        $this->anotherText->setText( $params->getId() );
    }

    /**
     * Add a new Pane to the extisting component object
     */
    private function addPane(){
        $pane = new Pane();
        $pane->getProperties()->addClass("test123");
        $this->infoLoader->add( $pane );
    }

}

?>
```


Installation
------------

phpXFace is split into multiple packages. This UI package depends on `phpxface/core` (VCS). Because the core package is hosted as a VCS repository, you need to add it explicitly to your Composer configuration.

Minimum Composer setup in your application:

```json
{
  "minimum-stability": "dev",
  "repositories": [
    { "type": "vcs", "url": "ssh://git@github.com/phpxface/core.git" }
  ],
  "require": {
    "phpxface/ui": "dev-develop"
  }
}
```

Then install:

```bash
composer update phpxface/ui
```

Packages and Modules
--------------------
- This repository: UI components (layouts, controls, shapes, tables) and related properties.
- Dependency: `phpxface/core` — application, DI, annotations, routing, and core abstractions.


Component Catalog (selection)
-----------------------------
- Layouts: `Pane`, `Panel`, `BorderPane`, `GridPane`, `FlowPane`, `HBox`, `VBox`, `StackPane`, `TabPane`, `Accordion`.
- Controls: `Button`, `Checkbox`, `Radiobox`, `ComboBox`, `Dialog`, `FormGroup`, `Hyperlink`, `Label`, `ScrollPane`, `SplitPane`, `ListView`, `ListItem`, `TextField`, `Menu`, `MenuBar`, `MenuItem`, `MenuGroup`, `Breadcrumb`, `DropdownMenu`.
- Shapes: `Text`, `Alert`, `Badge`, `Divider`, `Icon`, `Label`, `PageHeader`, `Heading`, `Abbreviation`, `DescriptionList`, `HelpBlock`, `Image`, `Paragraph`, `Timeline`.
  

How It Works
------------
1. You point phpXFace at an XML view file.
2. The XML is parsed into a tree of component objects.
3. Elements with `id` are collected and can be injected into your controller using `@PXF("id")`.
4. The controller `init()` method is called to bind behavior.
5. Methods annotated with `@PXF_Event("route")` receive events or requests with parameters.

Security
--------
There is no active security response for this repository. Do not use this project for production workloads without performing your own security review.

If you still wish to report a vulnerability, you may open a minimal issue to request a contact channel, but a response is not guaranteed. Consider maintaining a private fork with your fixes.


Roadmap
-------
There is no official roadmap. Future direction is community‑owned via forks. Possible areas of exploration (if you decide to maintain a fork):

- Document examples for modern PHP versions
- Optional shims/polyfills for compatibility
- CI to exercise a small supported matrix

If you’d like to coordinate with others, you can open an issue, but engagement is not guaranteed.


License
-------
This project is open‑source software. See the `LICENSE` file for details.


Acknowledgements
----------------
This project was inspired by ideas from Android, JavaFX, and various PHP frameworks from the early 2010s. Thanks to everyone who explores, reports issues, and submits improvements.
