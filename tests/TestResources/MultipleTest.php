<?php

declare(strict_types=1);

namespace Allure2Adapter\Tests\TestResources;

use Generator;
use PHPUnit\Framework\TestCase;

class MultipleTest extends TestCase
{
    public function testSuccess(): void
    {
        self::assertEquals(true, true);
    }

    public function testFail(): void
    {
        self::assertEquals(true, false);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testDataProvider(bool $value): void
    {
        self::assertEquals(true, $value);
    }

    public function dataProvider(): Generator
    {
        yield 'true' => [true];
        yield 'false' => [ false];
    }
}
