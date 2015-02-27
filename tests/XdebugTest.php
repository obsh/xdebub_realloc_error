<?php


class XdebugTest extends PHPUnit_Framework_TestCase
{
    const MAX_RECURSION = 100;
    private $recursionGuard;

    public function testShouldFail()
    {
        $this->recursion();
    }

    private function recursion()
    {
        $this->recursionGuard++;
        if ($this->recursionGuard < self::MAX_RECURSION) {
            $this->recursion();
        }
        // call autoloader from deep nesting level
        $logger = new \Psr\Log\NullLogger();
    }
}