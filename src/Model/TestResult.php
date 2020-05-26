<?php

declare(strict_types=1);

namespace Allure2Adapter\Model;

final class TestResult extends ExecutableItem
{
    private string $uuid;
    private string $historyId;
    private string $testCaseId;
    private string $rerunOf;
    private string $fullName;
    /**
     * @var array<Label>
     */
    private array $labels;
    /**
     * @var array<Link>
     */
    private array $links;
}
