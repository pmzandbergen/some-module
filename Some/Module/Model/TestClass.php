<?php
declare(strict_types = 1);

namespace Some\Module\Model;

use Some\Module\Api\TestClassInterface;

class TestClass implements TestClassInterface
{
    /**
     * @param mixed $value
     * @return mixed
     */
    public function testFunction(mixed $value): mixed
    {
        return $value;
    }
}
