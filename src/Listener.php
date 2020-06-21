<?php

declare(strict_types=1);

namespace Allure2Adapter;

use PHPUnit\Runner\AfterIncompleteTestHook;
use PHPUnit\Runner\AfterLastTestHook;
use PHPUnit\Runner\AfterRiskyTestHook;
use PHPUnit\Runner\AfterSkippedTestHook;
use PHPUnit\Runner\AfterSuccessfulTestHook;
use PHPUnit\Runner\AfterTestErrorHook;
use PHPUnit\Runner\AfterTestFailureHook;
use PHPUnit\Runner\AfterTestHook;
use PHPUnit\Runner\AfterTestWarningHook;
use PHPUnit\Runner\BeforeFirstTestHook;
use PHPUnit\Runner\BeforeTestHook;

final class Listener implements
    AfterIncompleteTestHook,
    AfterLastTestHook,
    AfterRiskyTestHook,
    AfterSkippedTestHook,
    AfterSuccessfulTestHook,
    AfterTestErrorHook,
    AfterTestFailureHook,
    AfterTestHook,
    AfterTestWarningHook,
    BeforeFirstTestHook,
    BeforeTestHook
{
    private Writer $writer;
    private Lifecycle $storage;

    public function __construct(string $outputDirectory, bool $deletePreviousResults = false)
    {
        $this->writer = new Writer($outputDirectory, $deletePreviousResults);
        $this->storage = Lifecycle::create();
    }

    public function executeAfterIncompleteTest(string $test, string $message, float $time): void
    {
    }

    public function executeAfterLastTest(): void
    {
    }

    public function executeAfterRiskyTest(string $test, string $message, float $time): void
    {
    }

    public function executeAfterSkippedTest(string $test, string $message, float $time): void
    {
    }

    public function executeAfterSuccessfulTest(string $test, float $time): void
    {
    }

    public function executeAfterTestError(string $test, string $message, float $time): void
    {
    }

    public function executeAfterTestFailure(string $test, string $message, float $time): void
    {
    }

    public function executeAfterTest(string $test, float $time): void
    {
    }

    public function executeAfterTestWarning(string $test, string $message, float $time): void
    {
    }

    public function executeBeforeFirstTest(): void
    {
    }

    public function executeBeforeTest(string $test): void
    {
    }
}
