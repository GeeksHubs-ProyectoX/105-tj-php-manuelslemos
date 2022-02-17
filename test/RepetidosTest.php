<?php

namespace Test;
use PHPUnit\Framework\TestCase;
use Repetidos\Repetidos;

class Test01Test extends TestCase
{

    public function test01 () {
        $expected = [];
        $result = (new Repetidos())->apply([]);
        $this->assertEquals($result, $result );
    }

    public function test02 () {
        $expected = [1];
        $result = (new Repetidos())->apply([1]);
        $this->assertEquals($result, $result );
    }

    public function test03 () {
        $expected = [1, 2];
        $result = (new Repetidos())->apply([1, 2]);
        $this->assertEquals($result, $result );
    }

    public function test04 () {
        $expected = [1, 2];
        $result = (new Repetidos())->apply([1, 2, 2]);
        $this->assertEquals($result, $result );
    }

    public function test05 () {
        $expected = [1, 2];
        $result = (new Repetidos())->apply([1, 2, 2, 1]);
        $this->assertEquals($result, $result );
    }


    public function test06 () {
        $expected = [1, 2, 'a'];
        $result = (new Repetidos())->apply([1, 2, 2, 1, 'a']);
        $this->assertEquals($result, $result );
    }

    public function test07 () {
        $expected = [1, 2, 'a'];
        $result = (new Repetidos())->apply([1, 2, 2, 1, 'a', 'a']);
        $this->assertEquals($result, $result );
    }

    public function test08 () {
        $expected = [1, 2, 'a', 'b'];
        $result = (new Repetidos())->apply([1, 2, 2, 1, 'a', 'a', 'b']);
        $this->assertEquals($result, $result );
    }

    public function test09 () {
        $expected = [1, 2, 'a', 'b'];
        $result = (new Repetidos())->apply([1, 2, 2, 1, 'a', 'a', 'b', 'b']);
        $this->assertEquals($result, $result );
    }


    public function test10 () {
        $expected = [1, 2, 'a', 'b', 'hola'];
        $result = (new Repetidos())->apply([1, 2, 2, 1, 'a', 'a', 'b', 'b', 'hola']);
        $this->assertEquals($result, $result );
    }

    public function test11 () {
        $expected = [1, 2, 'a', 'b', 'hola', 'ola'];
        $result = (new Repetidos())->apply([1, 2, 2, 1, 'a', 'a', 'b', 'b', 'hola', 'ola']);
        $this->assertEquals($result, $result );
    }

    public function test12 () {
        $expected = [1, 2, 'a', 'b', 'hola', 'ola'];
        $result = (new Repetidos())->apply([1, 2, 2, 1, 'a', 'a', 'b', 'b', 'hola', 'ola', 'hola']);
        $this->assertEquals($result, $result );
    }

}
