<?php 

namespace Tests;
use App\TagParser;
use PHPUnit\Framework\TestCase;

class DataProviderTest extends TestCase {

    protected TagParser $parser;

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

    /**
     * @test
     * @dataProvider tagProvider
     */

    function conversion($input, $expected)
    {

        $parser = new TagParser;
        var_dump($input);
        $result = $parser->convert($input);
        $this->assertSame($expected, $result);
    }

}

?>