<?php

declare(strict_types=1);

namespace Allure2Adapter\Model;

use Ramsey\Uuid\UuidInterface;

final class TestResult extends ExecutableItem
{
    private UuidInterface $uuid;
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
