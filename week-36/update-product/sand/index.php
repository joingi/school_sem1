<!DOCTYPE html>
<html>
<head>
<title>showProducts</title>
</head>
<body>
<?php
// - How do you know if this page should update the data?
// - How do you know if this page shold NOT update the data?
// - Think about the address bar: If you get a "old" and "new
// variable, then the user is trying to update
// - If no "old" and "new" variables are passed, then the user
// is just trying to see the letters

    // Do I need to update something or just display the data
  $sajLetters = file_get_contents('data.txt');
  $ajLetters = json_decode($sajLetters);

if ($_GET['old']  && $_GET['new']) {
    // echo "PLEASE UPDATE";
    for ($i=0; $i<count($ajLetters); $i++) {
        // echo $i;
        $jItem = $ajLetters[$i];
        if ($jItem->name == $_GET['old']) {
            // echo "YES, MATCH";
            $jItem->name = $_GET['new'];
        }
    }
    $sajLetters = json_encode( $ajLetters );
    file_put_contents( 'data.txt', $sajLetters );
}



for ($i=0; $i<count($ajLetters); $i++) {
    $sLetter = $ajLetters[$i]->name;
    echo "<div>
                    <span id='lblOldLetter'>$sLetter</span>
                    <input id='txtNewLetter' type='text' value=''>
                    <button id='btnUpdate'>UPDATE</button>
                    </div>";
}
?>

    <script>

        btnUpdate.addEventListener("click",function(){
            // console.log("X");
            // pass to the page itself the old and the new value
            // the old value is to find a match
            // the new value is to replace the match with it
            var sOldValue = lblOldLetter.innerHTML;
            console.log("sOldValue",sOldValue);
            var sNewValue = txtNewLetter.value;
            console.log("sNewValue",sNewValue);
            // index.php?old=A&new=X
            location.href = "index.php?old="+sOldValue+"&new="+sNewValue;

        });
</script>
</body>
</html>
