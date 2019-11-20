<?php

declare(strict_types=1);

namespace App\Components;

use Nette\Application\UI\Control;
use Nette\SmartObject;

class Test extends Control {

    use SmartObject;

    /**
     * @var array
     */
    public $onSuccess;


    public function render() {

        $this->onSuccess($this);
        //$this->template->setFile(__DIR__ . '/test.latte');
        //$this->template->render();
    }

}