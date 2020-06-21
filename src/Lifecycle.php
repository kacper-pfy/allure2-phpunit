<?php

declare(strict_types=1);

namespace Allure2Adapter;

final class Lifecycle
{
    public static self $instance;

    public static function create(): self
    {
        self::$instance = new self();
        return self::$instance;
    }

    public static function getInstance(): self
    {
        return self::$instance;
    }
}
