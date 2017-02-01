<?php

namespace tests\Lib;

use Lib\StringFormatter;

class StringFormatterTest extends \PHPUnit_Framework_TestCase 
{

    public function testPrefix()
    {
        $prefix = new StringFormatter();
        $result = $prefix->prefix('front', 'back');

        $this->assertEquals($result, 'frontback');
    }

    public function testPrefixCamel()
    {
        $prefixCamel = new StringFormatter();
        $result = $prefixCamel->prefix('front', 'back', true);

        $this->assertEquals($result, 'frontBack');
    }

    public function testSuffix()
    {
        $suffix = new StringFormatter();
        $result = $suffix->suffix('front', 'back');

        $this->assertEquals($result, 'backfront');
    }

    public function testSuffixCamel()
    {
        $suffixCamel = new StringFormatter();
        $result = $suffixCamel->suffix('front', 'back', true);

        $this->assertEquals($result, 'backFront');
    }

    public function testToCamelCase(){
        $camel = new StringFormatter();
        $result = $camel->ToCamelCase('front', 'back');

        $this->assertEquals($result, 'frontBack');
    }

    public function testConcatString(){
        $concat = new StringFormatter();
        $result = $concat->concatString('front', 'back');

        $this->assertEquals($result, 'frontback');
    }
}