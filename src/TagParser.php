<?php

namespace App;

// class TagParser {
//     function __construct(protected $new = []){}

//     function convert($tags)
//     {
//         foreach ($tags as $tag) {
//             $tag = lcfirst($tag);
//             $this->new[] = $tag;
//         }
//         return $this->new;
//     }
// }

// $test = new TagParser;
// $test->convert(array ('Personal', 'Finance', 'Relationships'))

class TagParser {
    function convert($tags)
    {
        // Earlier Solutions

        /*
        1. testConvertTag() & testConvertTags():
        return explode(', ', $tags);

        2. testConvertSpaces():
        $tags = preg_split('/[,|] ?/', $tags);

        return array_map(function ($tag) 
        {
            return trim($tag);
        }, $tags);

        Short Syntax:
        return array_map(fn($tag) => trim($tag), $tags);
        */


        // This solution accounts for all test conditions:
        return preg_split('/ ?[,|] ?/', $tags);
    }
}

?>