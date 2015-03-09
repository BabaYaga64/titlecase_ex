<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_oneWord()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = 'beowulf';

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Beowulf", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "black beauty";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Black Beauty", $result);
        }

        function test_leaveLowerCase()
        {
            $test_LeaveLowerCase = new TitleCaseGenerator;
            $input = 'beauty and the beast';

            $result = $test_LeaveLowerCase->makeTitleCase($input);

            $this->assertEquals("Beauty and the Beast", $result);
        }

        function test_makeCaseConsistent()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = 'bEAuty AnD THE beasT';

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Beauty and the Beast", $result);
        }

        function test_makeTitleCase_firstWordIsArticle()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = 'the Little Mermaid';

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("The Little Mermaid", $result);
        }
    }

?>
