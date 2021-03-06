<?php
    require_once "src/Leet.php";

    class LeetTest extends PHPUnit_Framework_TestCase
    {

        function test_stringSplit()
        {
            $test_Leet = new Leet;
            $input = 'hello';

            $result = $test_Leet->stringSplit($input);
            $this->assertEquals(["h","3","l","l","0"], $result);
        }

        function test_replaceE()
        {
            $test_Leet = new Leet;
            $input = 'e';

            $result = $test_Leet->stringSplit($input);
            $this->assertEquals(["3"], $result);
        }

        function test_replaceO()
        {
            $test_Leet = new Leet;
            $input = 'o';

            $result = $test_Leet->stringSplit($input);
            $this->assertEquals(['0'], $result);
        }

        function test_replaceI()
        {
            $test_Leet = new Leet;
            $input = 'I';

            $result = $test_Leet->stringSplit($input);
            $this->assertEquals(["1"], $result);
        }

        function test_replaceS()
        {
            $test_Leet = new Leet;
            $input = "ss";

            $result = $test_Leet->stringSplit($input);
            $this->assertEquals(['s','Z'], $result);
        }

        function test_string()
        {
            $test_Leet = new Leet;
            $input = ['hello'];

            $result = $test_Leet->stringSplit($input);
            $this->assertEquals(['h3ll0'], $result);
        }
    }
?>
