<?php

declare(strict_types=1);

namespace Allure2Adapter\Model;

use Ramsey\Uuid\UuidInterface;

final class TestResultContainer
{
    private UuidInterface $uuid;
    private string $name;
    /**
     * @var array<UuidInterface>
     */
    private array $children;
    private string $description;
    private string $descriptionHtml;
    /**
     * @var array<FixtureResult>
     */
    private array $befores;
    /**
     * @var array<FixtureResult>
     */
    private array $afters;
    /**
     * @var array<Link>
     */
    private array $links;
    private int $start;
    private int $stop;
}
