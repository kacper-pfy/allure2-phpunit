<?php

declare(strict_types=1);

namespace Allure2Adapter\Utility;

use Allure2Adapter\Model\StepResult;

trait StepSupport
{
    public function executeStep($name, $logic, $title = null)
    {
        $logicResult = null;

        if (isset($name) && is_callable($logic)) {
            $step = new StepResult();
            try {
                $logicResult = $logic();
            } catch (\Exception $e) {
                throw $e;
            }
        } else {
            throw new \Exception("Step name shouldn't be null and logic should be a callable.");
        }

        return $logicResult;
    }
}
