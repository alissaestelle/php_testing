<?php 

namespace Tests;
use PHPUnit\Framework\TestCase;
use App\Question;
use App\Quiz as Quiz;

class QuizTest extends TestCase 
{
    /**
     * @test
     */

    function quizQuestions()
    {
        $new = new Quiz;
        $new->addQuestion(new Question('What is 2 + 2?', 4));

        $this->assertCount(1, $new->questions());
    }

}


?>