<?php 

namespace Tests;
use App\TagParser;
use PHPUnit\Framework\TestCase;

class DataProviderTest extends TestCase {

    protected TagParser $parser;

    /**
     * @dataProvider tagProvider
     */

    function testConversion($input, $expected)
    {
        $parser = new TagParser;
        $result = $parser->convert($input);
        $this->assertSame($expected, $result);
    }

    function tagProvider()
    {
        return 
        [
            ['Personal', ['Personal']],
            ['Personal, Finance, Relationships', ['Personal', 'Finance', 'Relationships']],
            ['Personal,Finance,Relationships', ['Personal', 'Finance', 'Relationships']],
            ['Personal | Finance | Relationships', ['Personal', 'Finance', 'Relationships']],
            ['Personal|Finance|Relationships', ['Personal', 'Finance', 'Relationships']]
        ];
    }

}

?>