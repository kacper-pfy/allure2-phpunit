<?php

declare(strict_types=1);

namespace Allure2Adapter\Model;

use MabeEnum\Enum;

final class Stage extends Enum
{
    public const SCHEDULED = 'scheduled';
    public const RUNNING = 'running';
    public const FINISHED = 'finished';
    public const PENDING = 'pending';
    public const INTERRUPTED = 'interrupted';
}
