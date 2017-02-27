<?php

  $dirList = array_map('basename', glob('../portfolio/*'));
  $uri = $_SERVER['REQUEST_URI'];
  $uriPage = substr(strrchr($uri, "/"), 1); // Outputs: URI
  $prev;
  $next;

  function prettyPrint($uri){
    $page_name = substr($uri, 0, strpos($uri, '.'));
    $page_name_array = (explode('_',$page_name));
    foreach ($page_name_array as $word) {
      $pretty_name .= ucfirst($word." ");
    }
    return $pretty_name;
  }

  foreach ($dirList as $key => $page) {
    if ($uriPage == $page){
      if ($key == 0){
        $prev = $dirList[(sizeof($dirList)-1)];
        $next = $dirList[$key+1];

      }
      else if ($key == (sizeof($dirList)-1)){
        $next = $dirList[0];
        $prev = $dirList[$key-1];
      }

      else {
        $prev = $dirList[$key-1];
        $next = $dirList[$key+1];
      }
      $next_name = prettyPrint($next);
      $prev_name = prettyPrint($prev);
    }
  }

?>
