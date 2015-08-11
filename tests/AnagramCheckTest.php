 <?php

     require_once "src/AnagramCheck.php";

     class AnagramCheckTest extends PHPUnit_Framework_TestCase
     {
         function test_checkAnagram_oneCharacter()
         {
             $test_AnagramCheck = new AnagramCheck;
             $input = "a";
             $array = array("a");

             $result = $test_AnagramCheck->checkAnagram($input, $array);

             $this->AssertEquals("a", $result);
         }

     }


  ?>
