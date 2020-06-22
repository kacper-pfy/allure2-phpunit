<?php

declare(strict_types=1);

namespace Allure2Adapter;

final class Lifecycle
{
    public static self $instance;
    private Writer $writer;

    public function __construct(Writer $writer)
    {
        $this->writer = $writer;
    }

    public static function create(Writer $writer): self
    {
        self::$instance = new self($writer);
        return self::$instance;
    }

    public static function getInstance(): self
    {
        return self::$instance;
    }
}
