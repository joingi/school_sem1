<?php
  // You can simulate a slow server with sleep
  // sleep(2);

  session_start();

  if(!isset($_SESSION['favorites'])) {
    $_SESSION['favorites'] = [];
  }

  // Reusable function to remove 1 element from array
  function array_remove($element, $array) {
    $index = array_search($element, $array);
    array_splice($array, $index, 1);
    return $array;
  }

  function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }

  if(!is_ajax_request()) {
     exit;
    }

  // extract $id
  // $raw_id = isset($_POST['id']) ? $_POST['id'] : '';
  $raw_id = $_POST['id'];

  if (!isset($raw_id)) {
    $_POST[''];
  }
  // echo $raw_id;

  // preg_match id of blog post
  if (preg_match("/blog-post-(\d+)/", $raw_id, $aMatchId)) {
    $id = $aMatchId[1];


    // If id is not in SEASSION favorites[array] - it will append the array to the array
    if (in_array($id, $_SESSION['favorites'])) {
      $_SESSION['favorites'] = array_remove($id, $_SESSION['favorites']);
    }

    // echo string true
    echo 'false';
    }
    else {
      echo 'true';
    }
  // store in $_SESSION['favorites']
  // return true/false
?>
