<?php
declare(strict_types = 1);

namespace Some\Module\Plugin;

use Some\Module\Model\TestClass;

class TestClassPlugin
{
    public function beforeTestFunction(TestClass $subject, mixed $value): mixed
    {
        if (!is_string($value)) {
            return null;
        }

        return 'Prefix ' . $value;
    }
}
