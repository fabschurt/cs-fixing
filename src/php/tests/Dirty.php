<?php declare(strict_types=1);

class Foo {

    protected $name;

    /**
     * @param null|bool|string $name
     */
    function __construct($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function nope()
    {
        return 'stuff';
    }

    public function yep()
    {
        return;
    }

    static public function dope() : string
    {
        return 'DOPE!';

        echo 'IGNORED.';
    }
}
