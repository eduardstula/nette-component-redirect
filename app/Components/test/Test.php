<?php

declare(strict_types=1);

namespace App\Components;

use Nette\Application\UI\Control;
use Nette\ComponentModel\IComponent;
use Nette\SmartObject;

class Test extends Control {

    use SmartObject;

    /**
     * @var array
     */
    public $onAttached;

    public function render() {
        $this->template->setFile(__DIR__ . '/test.latte');
        $this->template->render();
    }

}