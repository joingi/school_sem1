<?php

// pass the language in the address bar
// www.something.com?language=dk
$sLanguage = "en";

$sjTitle = '{
                            "title":
                            {
                                "en":"Hi",
                                "dk":"Hej",
                                "sp":"Hola"
                            },
                            "footer":{
                                "en":"Bye",
                                "dk":"Hej hej",
                                "sp":"Chao"
                            }
                        }';

        // $sjTitle = '{
        //     "en":{"title":"Hi","footer":"Bye"} ,
        //     "dk":{"title":"Hej","footer":"Hej hej"},
        //     "sp":{"title":"Hola","footer":"Chao"}
        // }';

$jTitle = json_decode( $sjTitle );

echo $jTitle->title->$sLanguage;
echo $jTitle->footer->$sLanguage;

?>