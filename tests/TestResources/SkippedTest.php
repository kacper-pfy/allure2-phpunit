<?php

declare(strict_types=1);

namespace Allure2Adapter\Tests\TestResources;

use PHPUnit\Framework\TestCase;

class SkippedTest extends TestCase
{
    public function testCreate(): void
    {
        self::markTestSkipped('skipped test');
        self::assertEquals(true, 1);
    }
}
