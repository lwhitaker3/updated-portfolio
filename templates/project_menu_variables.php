<?php
  $dirList = array_map('basename', glob('../portfolio/*'));
  $uri = $_SERVER['REQUEST_URI'];
  $uriPage = stripExtension(substr(strrchr($uri, "/"), 1)); // Outputs: URI
  $prev;
  $next;
  function prettyPrint($uri){
    $page_name = stripExtension($uri);
    $page_name_array = (explode('_',$page_name));
    foreach ($page_name_array as $word) {
      $pretty_name .= ucfirst($word." ");
    }
    return $pretty_name;
  }
  function stripExtension($name) {
    return preg_replace("/\\.php/", "", $name);
  }
  foreach ($dirList as $key => $pageWithExtension) {
    $page = stripExtension($pageWithExtension);
    if ($uriPage == $page){
      if ($key == 0){
        $prev = stripExtension($dirList[(sizeof($dirList)-1)]);
        $next = stripExtension($dirList[$key+1]);
      }
      else if ($key == (sizeof($dirList)-1)){
        $next = stripExtension($dirList[0]);
        $prev = stripExtension($dirList[$key-1]);
      }
      else {
        $prev = stripExtension($dirList[$key-1]);
        $next = stripExtension($dirList[$key+1]);
      }
      $next_name = prettyPrint($next);
      $prev_name = prettyPrint($prev);
    }
  }
?>
