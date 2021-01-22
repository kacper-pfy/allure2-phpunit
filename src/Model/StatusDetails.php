<?php

declare(strict_types=1);

namespace Allure2Adapter\Model;

final class StatusDetails
{
    private bool $known;
    private bool $muted;
    private bool $flaky;
    private string $message;
    private string $trace;
}
