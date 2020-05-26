<?php

declare(strict_types=1);

namespace Allure2Adapter\Model;

use MabeEnum\Enum;

final class Status extends Enum
{
    public const FAILED = 'failed';
    public const BROKEN = 'broken';
    public const PASSED = 'passed';
    public const SKIPPED = 'skipped';
}
