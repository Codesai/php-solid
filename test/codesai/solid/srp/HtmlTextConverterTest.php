<?php

namespace codesai\solid\srp;

require __DIR__ . "/../../../../src/codesai/solid/srp/HtmlTextConverter.php";
use PHPUnit\Framework\TestCase;

class HtmlTextConverterTest extends TestCase
{
    public function test_html_conversion()
    {
        $converter = new HtmlTextConverter(__DIR__ . "/sample.txt");

        $result = $converter->convertToHtml();

        $this->assertSame("line one<br />line two<br />line three<br />", $result);
    }
}
