<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.22.0.5166 modeling language!*/

class Project
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {}

  //------------------------
  // INTERFACE
  //------------------------

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

  //------------------------
  // DEVELOPER CODE - PROVIDED AS-IS
  //------------------------
  
  // line 6 project.ump
  public static function listOwners ($umplifyDir = null) 
  {
    if ($umplifyDir == null) { $umplifyDir = getenv("UMPLIFY_DIR"); }
    if ($umplifyDir == null) { $umplifyDir = "/data/umplify_projects"; }
    $allDirs = scandir($umplifyDir);
    $owners = array_filter($allDirs, function($d) { return !in_array($d, array(".","..",".DS_Store")); });
    return array_values($owners);
  }

// line 15 project.ump
  public static function listProjects ($ownerName, $umplifyDir = null) 
  {
    if ($umplifyDir == null) { $umplifyDir = getenv("UMPLIFY_DIR"); }
    if ($umplifyDir == null) { $umplifyDir = "/data/umplify_projects"; }
    $allDirs = scandir($umplifyDir . '/' . $ownerName);
    $projects = array_filter($allDirs, function($d) { return !in_array($d, array(".","..",".DS_Store")); });
    return array_values($projects);
  }

// line 24 project.ump
  public static function listVersions ($ownerName, $projectName, $umplifyDir = null) 
  {
    if ($umplifyDir == null) { $umplifyDir = getenv("UMPLIFY_DIR"); }
    if ($umplifyDir == null) { $umplifyDir = "/data/umplify_projects"; }
    $allDirs = scandir($umplifyDir . '/' . $ownerName . '/' . $projectName);
    $versions = array_filter($allDirs, function($d) { return !in_array($d, array(".","..",".DS_Store")); });
    return array_values($versions);
  }

// line 33 project.ump
  public static function getUmplifierScore ($ownerName, $projectName, $projectVersion, $umplifyDir = null) 
  {
    if ($umplifyDir == null) { $umplifyDir = getenv("UMPLIFY_DIR"); }
    if ($umplifyDir == null) { $umplifyDir = "/data/umplify_projects"; }
    $dirPath = $umplifyDir . '/' . $ownerName . '/' . $projectName . '/' . $projectVersion . '/';

    if (file_exists($dirPath . "2.umplify.score"))
    {
      return 2;
    }
    elseif (file_exists($dirPath . "1.umplify.score")) {
      return 1;
    }
    elseif (file_exists($dirPath . "0.umplify.score")) {
      return 0;
    }
    elseif (file_exists($dirPath . "F.umplify.score")) {
      return -1;
    }
    else
    {
      return null;
    }
  }

}
?>