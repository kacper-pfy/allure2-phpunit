<?php

declare(strict_types=1);

namespace Allure2Adapter\Model;

final class TestResultContainer
{
    private string $uuid;
    private string $name;
    /**
     * @var array<string>
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
