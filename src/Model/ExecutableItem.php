<?php

declare(strict_types=1);

namespace Allure2Adapter\Model;

abstract class ExecutableItem
{
    protected string $name;
    protected Status $status;
    protected StatusDetails $statusDetails;
    protected Stage $stage;
    protected string $description;
    protected string $descriptionHtml;
    /**
     * @var array<StepResult>
     */
    protected array $steps;
    /**
     * @var array<Attachment>
     */
    protected array $attachments;
    /**
     * @var array<Parameter>
     */
    protected array $parameters;
    protected int $start;
    protected int $stop;
}
