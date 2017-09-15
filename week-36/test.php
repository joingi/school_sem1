<?php
// CREATE A ARRAY WITH 1 JSON OBJECT
// IN IT. THE OBJECT HAS A KEY NAME
// WITH VALUE X
// SHOW THE ARRAY AS TEXT IN THE SCREEN
// [{"NAME":"X"}]
// CONVERT THE STRING TO AN OBJECT ARRAY
// JSON_DECODE

// ADD A NEW JSON OBJECT TO THE ARRAY
// THE KEY IS NAME THE VALUE IS A
// [{"NAME":"X"},{"NAME":"A"}]

// UPDATE A TO B
// [{"NAME":"X"},{"NAME":"B"}]

// DELETE THE SECOND OBJECT
// ARRAY_SPLICE( ARRAY , INDEX, ELEMENT TO DELETE)
// [{"NAME":"X"}]

// SHOW THIS IN THE SCREEN:
// MY NAME IS X



// jProducts()
// array_push('{"1": "k"}');

// array_splice($sProducts, 1 ,0);


// echo "END";

// language Switch
$sjTitle = '{"title":{"en": "hi", "dk": "hej"}}';
$jTitle = json_decode( $sjTitle );

echo $jTitle->title->en;

?>