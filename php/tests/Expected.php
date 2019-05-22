<?php

declare(strict_types=1);

class Foo
{
    protected $name;

    public static function dope(): string
    {
        return 'DOPE!';
    }

    /**
     * @param bool|string|null $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @throws \Exception
     *
     * @return mixed
     */
    public function nope()
    {
        return 'stuff';
    }

    public function yep(): void
    {
    }
}
