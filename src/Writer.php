<?php

declare(strict_types=1);

namespace Allure2Adapter;

final class Writer
{
    public function __construct(string $directory, bool $deletePrevious)
    {
        if (!file_exists($directory) && !mkdir($directory, 0755, true) && !is_dir($directory)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $directory));
        }
        if ($deletePrevious) {
            $files = scandir($directory);
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                }
            }
        }
    }
}
