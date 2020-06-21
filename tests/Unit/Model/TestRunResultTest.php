<?php

declare(strict_types=1);

namespace Allure2PhpUnit\Tests\Unit\Model;

use Allure2Adapter\Model\TestRunResult;
use Faker\Factory;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class TestRunResultTest extends TestCase
{
    public function testCreate(): void
    {
        $generator = Factory::create();
        $name = $generator->title;
        $uuid = Uuid::uuid4();
        $testRunResult = new TestRunResult($uuid, $name);
        self::assertEquals($uuid, $testRunResult->getUuid());
        self::assertEquals($name, $testRunResult->getName());

    }
}
