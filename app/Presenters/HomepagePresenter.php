<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Components\ITestFactory;
use App\Components\Test;
use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
    /** @var ITestFactory @inject */
    public $testFactory;


    public function renderDefault() {
        //bdump($this['test']);
    }

    public function createComponentTest() {
        $control = $this->testFactory->create();

        $control->onSuccess[] = function (Test $test) {
            $this->redirect("this");
        };

        return $control;
    }
}
