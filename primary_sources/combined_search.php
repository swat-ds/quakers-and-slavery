<?php
$search = $_GET["searchterm"];
$boxno = $_GET["CISOBOXNumber"];

// This script takes the 'CISOBoxNumber' input from the HTML form, which corresponds to a search method of either (1) AND, (2) Exact
// phrase, or (3) OR. 
// The script then inputs the user's search string into the appropriate field (CISOBOX1 for an AND search, CISOBOX2 for an exact
// phrase search, or CISOBOX3 for an OR search.

if ($boxno == 1) { 
  $url ="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&CISOBOX1=".$search."&CISOFIELD1=CISOSEARCHALL&CISOOP2=exact&CISOBOX2=&CISOFIELD2=CISOSEARCHALL&CISOOP3=any&CISOBOX3=&CISOFIELD3=CISOSEARCHALL&CISOOP4=none&CISOBOX4=&CISOFIELD4=CISOSEARCHALL&CISOROOT=/HC_QuakSlav&t=a";
  }
elseif ($boxno == 2)  {
  $url = "http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&CISOBOX1=&CISOFIELD1=CISOSEARCHALL&CISOOP2=exact&CISOBOX2=".$search."&CISOFIELD2=CISOSEARCHALL&CISOOP3=any&CISOBOX3=&CISOFIELD3=CISOSEARCHALL&CISOOP4=none&CISOBOX4=&CISOFIELD4=CISOSEARCHALL&CISOROOT=/HC_QuakSlav&t=a";
}
elseif ($boxno == 3)  {
  $url = "http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&CISOBOX1=".$search."&CISOFIELD1=creato&CISOOP2=exact&CISOBOX2=&CISOFIELD2=altern&CISOOP3=any&CISOBOX3=&CISOFIELD3=creato&CISOOP4=none&CISOBOX4=&CISOFIELD4=CISOSEARCHALL&CISOROOT=/HC_QuakSlav&t=s";
}

elseif ($boxno == 4) {
  $url = "http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&CISOBOX1=".$search."&CISOFIELD1=identi&CISOOP2=exact&CISOBOX2=&CISOFIELD2=altern&CISOOP3=any&CISOBOX3=&CISOFIELD3=creato&CISOOP4=none&CISOBOX4=&CISOFIELD4=CISOSEARCHALL&CISOROOT=/HC_QuakSlav&t=s";
}
header("Location: $url");
exit();
?>