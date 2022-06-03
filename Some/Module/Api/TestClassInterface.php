<?php
declare(strict_types = 1);

namespace Some\Module\Api;

interface TestClassInterface
{
    /**
     * @param mixed $value
     * @return mixed
     */
    public function testFunction(mixed $value): mixed;
}

