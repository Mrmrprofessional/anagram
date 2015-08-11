<?php
    class AnagramCheck
    {
        function checkAnagram($input_word, $input_compare)
        {
            $compare_array = explode(", ", $input_compare);
            foreach ($compare_array as $word)
            {
                $split_word = str_split($input_word);
                $sort_word = sort($split_word);
                $split_compare = str_split($word);
                $sort_compare = sort($split_compare);
                if ($sort_word == $sort_compare)
                {
                    return $word;
                }
            }
        }
    }
 ?>








$compare_array = explode(" ", $input_compare);

$compare_array = explode(", ", $input_compare);
foreach ($compare_array as $word)
