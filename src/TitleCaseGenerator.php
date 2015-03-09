<?php

    class TitleCaseGenerator
    {
        private $articles = array(
            "a",
            "and",
            "the",
            "in",
            "of",
            "or",
            "on"
        );

        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", strtolower($input_title));
            $output_titlecased = array();
            array_push($output_titlecased, ucfirst($input_array_of_words[0]));
            array_shift($input_array_of_words);
            foreach ($input_array_of_words as $word) {
                if (in_array($word, $this->articles)) {
                    array_push($output_titlecased, $word);
                } else {
                    array_push($output_titlecased, ucfirst($word));
                };
            };

            return implode(" ", $output_titlecased);
        }
    }

?>
