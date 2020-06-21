<?php

declare(strict_types=1);

namespace Allure2Adapter\Model;

use Ramsey\Uuid\UuidInterface;

final class TestRunResult
{
    private UuidInterface $uuid;
    private string $name;

    public function __construct(UuidInterface $uuid, string $name)
    {
        $this->uuid = $uuid;
        $this->name = $name;
    }

    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
