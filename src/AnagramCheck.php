<?php
    class AnagramCheck
    {
        function checkAnagram($input_word, $input_compare)
        {
            $compare_array = explode(", ", $input_compare);
            $return_array = array();

            foreach ($compare_array as $word)
            {
                $split_word = str_split($input_word);
                sort($split_word);
                $split_compare = str_split($word);
                sort($split_compare);
                if ($split_word == $split_compare)
                {
                    array_push($return_array, $word);
                }
            }

            return $return_array;
        }
    }
 ?>
