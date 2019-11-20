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
        $this['test'];
    }

    public function createComponentTest() {
        $control = $this->testFactory->create();

        //udělá nekonečnou smyčku, ale ilustrativně řeší problém
        $control->onAnchor[] = function (Test $test) {
            $this->redirect("this");
        };

        return $control;
    }
}
