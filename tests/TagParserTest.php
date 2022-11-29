<?php 

// To parse data means to convert data from one format to another.

namespace Tests;
use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase {

    protected TagParser $parser;
    protected function setUp(): void
    {
        $this->parser = new TagParser;
    }

    function testConvertTag()
    // testConvertTag(): converts a single string to an array
    {
        // $result = $parser->convert(array ('Personal', 'Finance', 'Relationships'));
        $result = $this->parser->convert('Personal');
        $expectation = ['Personal'];

        $this->assertSame($expectation, $result);
    }

    function testConvertTags()
    // testConvertTags(): converts a comma-separated list of tags into an array
    {
        $result = $this->parser->convert('Personal, Finance, Relationships');
        $expectation = ['Personal', 'Finance', 'Relationships'];

        $this->assertSame($expectation, $result);
    }

    function testConvertSpaces()
    // testConvertSpaces(): converts a comma-separated list regardless of whitespace
    {
        $result = $this->parser->convert('Personal,Finance,Relationships');
        $expectation = ['Personal', 'Finance', 'Relationships'];

        $this->assertSame($expectation, $result);
    }

    function testConvertPipes()
    // testConvertPipes(): converts a pipe-separated list into an array
    {
        $result = $this->parser->convert('Personal | Finance|Relationships');
        $expectation = ['Personal', 'Finance', 'Relationships'];

        $this->assertSame($expectation, $result);
    }
}

?>