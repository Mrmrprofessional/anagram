 <?php

     require_once "src/AnagramCheck.php";

     class AnagramCheckTest extends PHPUnit_Framework_TestCase
     {
         function test_checkAnagram_oneCharacter()
         {
             $test_AnagramCheck = new AnagramCheck;
             $input = "a";
             $array = "a";

             $result = $test_AnagramCheck->checkAnagram($input, $array);

             $this->AssertEquals(["a"], $result);
         }

         function test_checkAnagram_inverse()
         {
             $test_AnagramCheck = new AnagramCheck;
             $input = "on";
             $array = "no";

             $result = $test_AnagramCheck->checkAnagram($input, $array);

             $this->AssertEquals(["no"], $result);
         }

         function test_checkAnagram_array()
         {
             $test_AnagramCheck = new AnagramCheck;
             $input = "one";
             $array = "no, eno, noe, yes, hello";

             $result = $test_AnagramCheck->checkAnagram($input, $array);

             $this->AssertEquals(["eno", "noe"], $result);
         }
         
     }


  ?>
