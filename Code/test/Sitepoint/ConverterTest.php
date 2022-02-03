<?php

namespace SitePoint\Converter;

use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase {

    public function testHello() {
        $this->assertEquals('Hello', 'Hell' . 'o');
    }

    public function testSimpleConversion() {
        $input = '{"key":"value","key2":"value2"}';
        $output = [
            'key' => 'value',
            'key2' => 'value2'
        ];
       // $this->assertTrue(\class_exists("\SitePoint\Converter\Converter"));
        $converter = new \SitePoint\Converter\Converter();
        echo $converter->functionName("sdsd");
        $this->assertEquals($output, $converter->convertString($input));
    }

}
