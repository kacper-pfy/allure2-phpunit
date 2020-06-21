<?php

declare(strict_types=1);

namespace Allure2Adapter\Tests\TestResources;

use PHPUnit\Framework\TestCase;

class RiskyTest extends TestCase
{
    public function testCreate(): void
    {
        $this->markAsRisky();
        self::assertEquals(true, 1);
    }
}
