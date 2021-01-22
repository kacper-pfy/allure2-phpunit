<?php

declare(strict_types=1);

namespace Allure2Adapter\Tests\TestResources;

use PHPUnit\Framework\TestCase;

class FailedTest extends TestCase
{
    public function testCreate(): void
    {
        self::assertEquals(true, false);
    }
}
