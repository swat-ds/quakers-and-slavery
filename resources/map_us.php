<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Quakers &amp; Slavery : US Map</title>
<!--Style Sheet -->
<link href="../QuakersSlavery_nosidebar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../scripts/common.js"></script>


</head>

<body onload="preloadImages();"> 

<div id="containerspc">
	<div id="top">
		<div id="searchbar_background"></div>
		<div id="searchbar">
           <form action="../results.php" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="004729466521513158082:l2aaiy7lnvq" />
    <input type="hidden" name="cof" value="FORID:9" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="31" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>
           
            </div>
		
			 
     

       
        
<!-- Bread Crumbs -->	 
<div id="navbar_background"></div>    
    <div id="navbar">    
               <?php
/**
 * File: $Id: class.breadcrumb.inc.php, 2004/04/30 00:53 PDT
 * -----------------------------------------------------------------------
 * Purpose of file: Show the directories and their links in path form
 *                  Home > Firstdir > Seconddir > Etc > filename.php
 * Information: If you use this script please contact me with a url or
 *              product information plus the product :) and please keep
 *              all header information intact. Cheers!
 * Pay-Pal info: paypal@baskettcase.com
 * -----------------------------------------------------------------------
 * @access public
 * @author Richard Baskett <rick@baskettcase.com>
 * @category directory structure
 * @copyright Copyright © 2004, Baskettcase Web Development
 * @example example.php
 * @link http://www.baskettcase.com/classes/breadcrumb/
 * @package breadcrumb
 * @version 2.4.2
 */

class breadcrumb {
  // Directory Structure
  var $scriptArray = '';
  
  // Filename
  var $fileName = '';
  
  // Document Root
  var $document_root = '';
  
  // Homepage name
  var $homepage = 'home';
  
  // Directory type formatting
  var $dirformat = '';
  
  // Symbol to use between Directories
  var $symbol = ' &gt; ';
  
  // CSS Class to use for each item
  var $cssClass = '';
  
  // Special Directory text style
  var $special = '';
  
  // Frameset target value default is '_self'
  var $target = '';
  
  // is this a personal site?
  var $personalSite = '';
  
  // Show the filename with the path
  var $showfile = TRUE;
  
  // Remove the link to the current directory
  var $unlinkCurrentDir = FALSE;
  
  // Hide the file Extension
  var $hideFileExt = FALSE;
  
  // Linke the filename to itself
  var $linkFile = FALSE;
  
  // Replace underscore with space
  var $_toSpace = FALSE;
  
  // Show errors
  var $showErrors = FALSE;
  
  // Where are the images kept and what type of images
  var $imagedir = array();
  
  // Change the Directory Names to something a bit more readable
  var $changeName = array();
  
  // Change the file name to something a bit more user friendly
  var $changeFileName = array();
  
  // If variable has a value check for that page if it exists link the directory
  // otherwise just show the name of the directory.
  var $fileExists = array();
  
  // Remove a directory from the breadcrumb so that it does not show
  var $removeDirs = array();
  
  /**
   * function breadcrumb
   * @since Version 2.0.0
   */
  function breadcrumb() {
    // Creates an array of Directory Structure
    $this->scriptArray = explode("/", $_SERVER['PHP_SELF']);
    // Pops the filename off the end and throws it into it's own variable
    $this->fileName = array_pop($this->scriptArray);
    // Is this a personal site?
    if (substr($_SERVER['PHP_SELF'], 1, 1)=='~') {
    	$tmp = explode('/', $_SERVER['PHP_SELF']);
    	$this->personalSite = $tmp[1];
			$this->document_root = str_replace(str_replace('/'.$this->personalSite, '', $_SERVER["SCRIPT_NAME"]), '', $_SERVER['PATH_TRANSLATED']);
   	}
   	else 
			$this->document_root = str_replace($_SERVER["SCRIPT_NAME"], '', $_SERVER['PATH_TRANSLATED']);
   	#echo $this->document_root.'<Br />';
   	#echo $_SERVER["SCRIPT_NAME"].'<Br />';
   	#echo $_SERVER["PATH_TRANSLATED"].'<Br />';
  }
  
  /**
   * function str_split
   * @since Version 2.2.0
   * Converts a string to an array
   */
  function str_split($string) {
    for ($i=0; $i<strlen($string); $i++) $array[] = $string{$i};
    return $array;
  }
  
  
  /**
   * function specialLang
   * @since Version 2.0.0
   * Convert string into language specified
   */
  function specialLang($string, $lang) {
    // parse Directory special text style
    switch($lang) {
      case 'elmer': $string = str_replace('l','w',$string);
                    $string = str_replace('r','w',$string);
                    break;
      case 'hacker': $string = strtoupper($string);
                     $string = str_replace('A','&#52;',$string);
                     $string = str_replace('C','&#40;',$string);
                     $string = str_replace('D','&#68;',$string);
                     $string = str_replace('E','&#51;',$string);
                     $string = str_replace('F','&#112;&#104;',$string);
                     $string = str_replace('G','&#54;',$string);
                     $string = str_replace('H','&#125;&#123;',$string);
                     $string = str_replace('I','&#49;',$string);
                     $string = str_replace('M','&#124;&#86;&#124;',$string);
                     $string = str_replace('N','&#124;&#92;&#124;',$string);
                     $string = str_replace('O','&#48;',$string);
                     $string = str_replace('R','&#82;',$string);
                     $string = str_replace('S','&#53;',$string);
                     $string = str_replace('T','&#55;',$string);
                     break;
      case 'pig': $vowels = array('a','A','e','E','i','I','o','O','u','U');
                  $string = $this->str_split($string);
                  $firstLetter = array_shift($string);
                  $string = implode('',$string);
                  $string = (in_array($firstLetter, $vowels))
                    ? $firstLetter.$string.'yay'
                    : $string.$firstLetter.'ay';
                  break;
      case 'reverse': $string = strrev($string);
                      break;
    }
    return $string;
  }
  
  
  /**
   * function dirFormat
   * @since Version 2.2.0
   * Convert string into specified format
   */
  function dirFormat($string, $format) {
    // parse Directory text style
      switch($format) {
        case 'titlecase': $string = $this->titleCase($string); break;
        case 'ucfirst': $string = ucfirst($string); break;
        case 'ucwords': $string = $this->convertUnderScores($string);
                        $string = ucwords($string); break;
        case 'uppercase': $string = strtoupper($string); break;
        case 'lowercase': $string = strtolower($string); break;
        default: $string = $string;
      }
    return $string;
  }
  
  
  /**
   * function titleCase
   * @since Version 2.3.0
   * Convert string into Title Case which excludes capitalizing certain small
   * words.  As in a movie title, or book title. "The Wind in the Trees"
   * @author Justin@gha.bravepages.com, un-thesis@wakeup-people.com,
   *         mgm@starlingtech.com, rick@baskettcase.com
   */
  function titleCase($text) {
    $text = $this->convertUnderScores($text);
    $min_word_len = 4;
    $always_cap_first = TRUE;
    $exclude = array('of','a','the ','and','an','or','nor','but','is','if',
                     'then','else','when','up','at','from','by','on','off',
                     'for','in','out','over','to','into','with','htm','html',
                     'php','phtml'); 

    // Allows for the specification of the minimum length  
    // of characters each word must be in order to be capitalized 

    // Make sure words following punctuation are capitalized 
    $text = str_replace(array('(', '-', '.', '?', ',',':','[',';','!'), 
                        array('( ', '- ', '. ', '? ', ', ',': ','[ ','; ','! '),
                        $text); 

    $words = explode (' ', strtolower($text)); 
    $count = count($words); 
    $num = 0; 
    
    while ($num < $count) { 
      if (strlen($words[$num]) >= $min_word_len 
          && array_search($words[$num], $exclude) === false) 
        $words[$num] = ucfirst($words[$num]); 
      $num++; 
    } 
    
    $text = implode(' ', $words); 
    $text = str_replace( 
    array('( ', '- ', '. ', '? ', ', ',': ','[ ','; ','! '), 
    array('(', '-', '.', '?', ',',':','[',';','!'), $text); 
    
     // Always capitalize first char if cap_first is true 
    if ($always_cap_first) { 
       if (ctype_alpha($text[0]) && ord($text[0]) <= ord('z') 
          && ord($text[0]) > ord('Z')) 
         $text[0] = chr(ord($text[0]) - 32); 
    }
  
   return $text; 
  }


  
  /**
   * function removeDirectories
   * @since Version 2.3.2
   * @author rick@baskettcase.com
   * Remove the directories from the breadcrumb
   */
  function removeDirectories() {
    $numDirs = count($this->scriptArray);
    for ($i=0; $i<$numDirs; $i++) {
      if (!in_array($this->scriptArray[$i], $this->removeDirs))
        $newArray[] = $this->scriptArray[$i];
    }
    return $newArray;
  }


  
  /**
   * function removeFileExt
   * @since Version 2.4
   * @author rick@baskettcase.com
   * Remove the file extension from the filename
   */
  function removeFileExt($filename) {
    $newFileName = @explode('.',$filename);
    return $newFileName[0];
  }


  
  /**
   * function convertUnderScores
   * @since Version 2.4
   * @author rick@baskettcase.com
   * Replace underscores with spaces
   */
  function convertUnderScores($name) {
    $varName = str_replace('_',' ',$name);
    return $varName;
  }



  /**
   * function show_breadcrumb
   * @since Version 0.0.1
   */
  function show_breadcrumb() {
   // Either set the home element or pop the first empty array off the beginning
    if ($this->homepage != '') $this->scriptArray[0] = $this->homepage;
    else $tmp = array_shift($this->scriptArray);
    
    // if this is a personal site remove the root directory and set
    // new homepage to user directory
    if ($this->personalSite!='') {
    	$this->removeDirs[] = $this->scriptArray[0];
    	if ($this->homepage != '') $this->scriptArray[1] = $this->homepage;
    	else $tmp = array_shift($this->scriptArray);
		}
		    	
    if ($this->homepage=='') $dir = '/';
    
    // Build Path Structure
    $numDirs = count($this->scriptArray);
    
    // BEGIN DIRECTORY FOR LOOP
    for ($i=0; $i<$numDirs; $i++) {
      #echo $this->changeName[$this->scriptArray[$i]];
      #$dirName = $this->scriptArray[$i];
      $dirName = ($this->changeName[$this->scriptArray[$i]]!='') ? 
                  $this->changeName[$this->scriptArray[$i]] :
                  $this->scriptArray[$i];
                  
      // append the current directory
      if ($this->personalSite!='' && $i==1)
      	$this->scriptArray[$i] = $this->personalSite;
      $dir .= ($i==0 && $this->homepage!='') ? '/' : $this->scriptArray[$i]."/";
      
      // Use Text instead of Images
      if (!$this->imagedir) {
        // Replace underscores with spaces if _toSpace is set
        if ($this->_toSpace==TRUE) 
          $dirName = $this->convertUnderScores($dirName);
        
        // parse Directory special text style
        $dirName = $this->specialLang($dirName, $this->special);
  
        // Convert string into specified format
        $dirName = $this->dirFormat($dirName, $this->dirformat);
      }
      // Use Images instead of text
      else {
        $dirName = '<img src="'.$this->imagedir[0].$dirName.'.'.
                   $this->imagedir[1].'" />'; 
      }
      
      // Add CSS
      if ($this->cssClass!='') $class = ' class="'.$this->cssClass.'"';
      
      // Add frame target
      if ($this->target!='') $target = ' target="'.$this->target.'"';
      
      // create link
      // If fileExists has values then check to make sure one of those files
      // exists, if it does, link it, otherwise do not link
      if ($this->fileExists) {
        for ($k=0; $k<count($this->fileExists); $k++) {
        	if ($this->personalSite!='') {
        		if (strpos($dir, $this->personalSite))
        			$exists_filename = str_replace($this->personalSite.'/', '', $this->document_root.$dir.$this->fileExists[$k]);
						else continue;
					}
					else
						$exists_filename = $this->document_root.$dir.$this->fileExists[$k];
					#echo $exists_filename.'<br />';
          if (file_exists($exists_filename)) {
            $showLink = 'yes';
            break;
          } else $showLink = 'no';
        }
      }
      
      if ($this->unlinkCurrentDir==TRUE && ($i+1)==$numDirs || $showLink=='no')
         $breadcrumb[] = $dirName;
      // If we are not supposed to remove the directory, show it
      elseif (!in_array($this->scriptArray[$i], $this->removeDirs) || $showLink=='yes') 
      	$breadcrumb[] = "<a href='$dir'$class$target>$dirName</a>";
      elseif ($this->personalSite!='' && $i==1)
      	$breadcrumb[] = "<a href='$dir'$class$target>$dirName</a>";
    }
    // END DIRECTORY FOR LOOP
    
    $fileName = $originalFileName = $this->fileName;
    
    if ($this->fileNametoTitle==TRUE) $fileName = $this->getPageTitle(); 
    
    // Check to see if hideFileExt is on, if so turn on showfile
    // and remove the file extension
    if ($this->hideFileExt==TRUE) $this->showfile = TRUE;
    
    if ($this->showfile==TRUE) {
      // Change the filename if filename is in changeFileName array
      if ($this->changeFileName[$_SERVER['PHP_SELF']]!='') 
        $fileName = $this->changeFileName[$_SERVER['PHP_SELF']];
      // If it is not then just use $fileName or remove extension if specified
      elseif ($this->hideFileExt==TRUE)
        $fileName = $this->removeFileExt($fileName);
        
      // Convert underscores to spaces
      if ($this->_toSpace==TRUE) 
        $fileName = $this->convertUnderScores($fileName);
      // parse filename special text style
      $fileName = $this->specialLang($fileName, $this->special);
      // Convert string into specified format
      $fileName = $this->dirFormat($fileName, $this->dirformat);
      // Add CSS
      if ($this->cssClass!='') $fileName = '<span class="'.$this->cssClass.'">'.
                                           $fileName.'</span>';
      // Add link to filename
      if ($this->linkFile==TRUE)
        $fileName = '<a href="'.$originalFileName.'">'.$fileName.'</a>';
      $fileName = $this->symbol.$fileName;
    } else $fileName = '';
    
    // Web Server Path
    // return if we are not at root
    if ($numDirs>0) return implode($this->symbol,$breadcrumb).$fileName;
    // if at root just return the filename
    else return $fileName;
  }
}
    $breadcrumb = new breadcrumb;
$breadcrumb->homepage='';
$breadcrumb->unlinkCurrentDir=FALSE;
if ($breadcrumb->fileName=='index.php') $breadcrumb->showfile = FALSE;
else $breadcrumb->hideFileExt = TRUE;
$breadcrumb->linkFile=FALSE;
$breadcrumb->changeName=array('library'=>'Library Home', 'quakersandslavery'=>'Exhibit Home');
$breadcrumb->dirformat='ucwords'; // Show the directory in this style
$breadcrumb->_toSpace=TRUE; // converts underscores to spaces
$breadcrumb->removeDirs=array('speccoll'); //removes speccoll as the first breadcrumb
echo "<div id=\"breadcrumb\">".$breadcrumb->show_breadcrumb()."</div>";
?>
		
	   </div>
       
       
       <div id="sectionheader"><a href="/speccoll/quakersandslavery/"><img src="../images/janejohnson1.png" alt="Quakers &amp; Slavery" class="png" /></a></div>
       
    <!--Global Navigation -->
               
       <?php
   function menu($a)
        {
        $u = $_SERVER['PHP_SELF'];//gives me /speccoll/quakersandslavery/index.php
        $dir  = substr(strrchr(getcwd(), '/'), 1);//gives me quakersandslavery
        $currDir = explode("/", $a);
        $workingDir = explode("/", $u);


        if ($currDir[3] == $workingDir[3])
{
            echo("class=\"navtab active\"");
            }



       else
            {
            echo("class=\"navtab\"");
            }


        }
?>

<div id="subnavbar_background"></div>    
<div id="subnavbar">
<!-- <div  <?php menu("/speccoll/quakersandslavery/index.php"); ?> id="tab_index"><a href="/speccoll/quakersandslavery/index.php">Welcome</a></div>-->
<div  <?php menu("/speccoll/quakersandslavery/primary_sources/index.php"); ?> id="tab_primarysources"><a href="/speccoll/quakersandslavery/primary_sources/index.php">Primary Sources</a>
  <span>
        <a href="/speccoll/quakersandslavery/primary_sources/index.php">About the Collection</a> 
        <a href="/speccoll/quakersandslavery/primary_sources/browse_and_search.php">Browse &amp; Search</a>
        <a href="/speccoll/quakersandslavery/primary_sources/copies_and_downloads.php">Copies &amp; Downloads</a> 
        <a href="/speccoll/quakersandslavery/primary_sources/help.php">Help Using the Collection</a> 
  </span>
</div>
<div  <?php menu("/speccoll/quakersandslavery/commentary/index.php"); ?> id="tab_commentary"><a href="/speccoll/quakersandslavery/commentary/index.php">Scholarly Commentary</a>
  <span>
       <!-- <a href="/speccoll/quakersandslavery/commentary/introduction.php">Introduction</a> -->
        <a href="/speccoll/quakersandslavery/commentary/themes/index.php">Themes</a>
        <a href="/speccoll/quakersandslavery/commentary/people/index.php">People</a> 
        <a href="/speccoll/quakersandslavery/commentary/organizations/index.php">Organizations</a>
  </span>
</div>
<div  <?php menu("/speccoll/quakersandslavery/resources/index.php"); ?> id="tab_resources"><a href="/speccoll/quakersandslavery/resources/index.php">Resources</a>
  <span>
        <a href="/speccoll/quakersandslavery/resources/bibliography.php">Bibliography</a> 
        <a href="/speccoll/quakersandslavery/resources/glossary.php">Glossary</a>
        <a href="/speccoll/quakersandslavery/resources/image_list.php">Images</a>
        <a href="/speccoll/quakersandslavery/resources/map_world.php">Map</a>
        <a href="/speccoll/quakersandslavery/resources/timeline.php">Timeline</a> 
        
  </span>
</div>	
<div  <?php menu("/speccoll/quakersandslavery/about/index.php"); ?> id="tab_about"><a href="/speccoll/quakersandslavery/about/index.php">About the Project</a>
<span>
<!--        <a href="/speccoll/quakersandslavery/about/project_description.php">Project Description</a> -->
        <a href="/speccoll/quakersandslavery/about/contact_us.php">Contact Us</a>
        <a href="/speccoll/quakersandslavery/about/project_funding.php">Project Funding</a>
        <a href="/speccoll/quakersandslavery/about/project_staff.php">Project Staff</a>
        </span>
</div>
</div>
            	
  
       
       </div>
          <!-- end of top div -->
       <div id="main">
     

 <div id="content"> 
    <div id="pagecontent"> 
    
    <h1>Interactive United States Map</h1>
  <p>Hover your mouse over the map below to select a geographic region. Click to connect to the materials on Triptych associated with that region. Click here to <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11721" target="_blank">view map description</a> on Triptych. Click here to <a href="../resources/map_world.php">return to World Map</a>.</p>
<!-- ImageReady Preload Script (USMap.psd) -->
<div align="center">
  <script type="text/javascript">
<!--

function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		USMap_01_ImageMap_05_over = newImage("images/USMap_01-ImageMap_05_over.gif");
		USMap_01_ImageMap_04_over = newImage("images/USMap_01-ImageMap_04_over.gif");
		USMap_01_ImageMap_03_over = newImage("images/USMap_01-ImageMap_03_over.gif");
		USMap_01_ImageMap_02_over = newImage("images/USMap_01-ImageMap_02_over.gif");
		USMap_01_ImageMap_01_over = newImage("images/USMap_01-ImageMap_01_over.gif");
		preloadFlag = true;
	}
}

// -->
</script>
  <!-- End Preload Script -->

  <!-- ImageReady Slices (USMap.psd) -->
  <img name="USMap_01" src="images/USMap_01.gif" width="800" height="642" border="0" alt="" usemap="#USMap_01_Map" />
  <map id="USmap" name="USMap_01_Map">
    <area shape="poly" alt="" coords="727,32, 733,59, 747,75, 737,82, 719,87, 704,102, 693,106, 693,108, 680,114, 669,124, 661,141, 665,149, 661,162, 673,180, 683,179, 685,170, 684,186, 670,186, 667,181, 658,188, 653,181, 637,196, 604,203, 600,210, 595,208, 558,183, 555,173, 439,163, 455,143, 459,123, 521,126, 527,118, 531,87,
567,66, 633,72, 639,65, 646,60, 653,47, 659,24" href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=Northern%20States&amp;CISOFIELD1=geogra&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=altern&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=creato&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=s" target="_blank"
	onmouseover="changeImages('USMap_01', 'images/USMap_01-ImageMap_05_over.gif'); return true;"
	onmouseout="changeImages('USMap_01', 'images/USMap_01.gif'); return true;"
	onmousedown="changeImages('USMap_01', 'images/USMap_01-ImageMap_05_over.gif'); return true;"
	onmouseup="changeImages('USMap_01', 'images/USMap_01-ImageMap_05_over.gif'); return true;" />
    <area shape="poly" alt="" coords="440,166, 445,170, 553,172, 563,186, 587,209, 591,212, 591,230, 587,260, 573,273, 538,253, 404,259, 390,271, 375,291, 361,292, 353,286, 333,284, 310,276, 305,283, 301,291, 278,305, 253,320, 217,324, 212,336, 200,346, 193,348, 183,346, 172,317, 160,299, 158,284, 144,275, 129,257, 141,199,
154,185, 156,178, 241,178, 243,173, 355,177, 368,183, 392,185, 412,176, 427,170, 438,166, 438,164" href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=Free%20Border-States&amp;CISOFIELD1=geogra&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=altern&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=creato&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=s" target="_blank"
	onmouseover="changeImages('USMap_01', 'images/USMap_01-ImageMap_04_over.gif'); return true;"
	onmouseout="changeImages('USMap_01', 'images/USMap_01.gif'); return true;"
	onmousedown="changeImages('USMap_01', 'images/USMap_01-ImageMap_04_over.gif'); return true;"
	onmouseup="changeImages('USMap_01', 'images/USMap_01-ImageMap_04_over.gif'); return true;" />
    <area shape="poly" alt="" coords="419,229, 424,253, 551,253, 557,276, 567,295, 547,336, 540,302, 536,296, 532,267, 533,293, 531,310, 514,299, 507,296, 504,276, 497,272, 479,277, 456,299, 429,325, 420,342, 366,349, 320,368, 259,366, 187,361, 195,345, 210,342, 216,328, 217,320, 238,316, 267,310, 272,307, 288,303, 306,285,
308,277, 332,286, 339,291, 359,289, 369,299, 379,292, 382,280, 390,277, 398,266, 408,261, 415,220, 419,227" href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=Slave%20Border-States&amp;CISOFIELD1=geogra&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=altern&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=creato&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=s" target="_blank"
	onmouseover="changeImages('USMap_01', 'images/USMap_01-ImageMap_03_over.gif'); return true;"
	onmouseout="changeImages('USMap_01', 'images/USMap_01.gif'); return true;"
	onmousedown="changeImages('USMap_01', 'images/USMap_01-ImageMap_03_over.gif'); return true;"
	onmouseup="changeImages('USMap_01', 'images/USMap_01-ImageMap_03_over.gif'); return true;" />
    <area shape="poly" alt="" coords="509,286, 512,302, 531,311, 540,344, 547,350, 543,403, 527,415, 529,433, 502,439, 471,469, 434,498, 415,513, 400,542, 390,556, 388,618, 322,610, 315,597, 299,595, 274,607, 269,601, 265,584, 248,577, 213,582, 193,586, 154,587, 150,587, 144,560, 93,556, 108,510, 117,455, 126,428, 132,415,
175,369, 332,365, 346,360, 359,355, 367,352, 379,349, 387,345, 429,338, 470,296, 480,283, 495,275, 500,271" href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=Southern%20States&amp;CISOFIELD1=geogra&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=altern&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=creato&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=s" target="_blank"
	onmouseover="changeImages('USMap_01', 'images/USMap_01-ImageMap_02_over.gif'); return true;"
	onmouseout="changeImages('USMap_01', 'images/USMap_01.gif'); return true;"
	onmousedown="changeImages('USMap_01', 'images/USMap_01-ImageMap_02_over.gif'); return true;"
	onmouseup="changeImages('USMap_01', 'images/USMap_01-ImageMap_02_over.gif'); return true;" />
    <area shape="poly" alt="" coords="62,22, 52,47, 57,95, 69,103, 84,108, 97,115, 126,143, 133,162, 148,178, 144,199, 131,209, 137,270, 142,281, 161,286, 167,316, 183,333, 186,353, 194,353, 179,365, 167,369, 155,384, 154,396, 140,409, 137,432, 105,476, 109,491, 114,500, 109,514, 102,534, 94,552, 101,558, 151,563, 156,588,
172,595, 161,606, 157,615, 153,618, 138,615, 125,609, 30,606, 12,601, 9,449, 13,431, 19,24" href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=States%20West%20of%20Mississippi&amp;CISOFIELD1=geogra&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=altern&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=creato&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=s" target="_blank"
	onmouseover="changeImages('USMap_01', 'images/USMap_01-ImageMap_01_over.gif'); return true;"
	onmouseout="changeImages('USMap_01', 'images/USMap_01.gif'); return true;"
	onmousedown="changeImages('USMap_01', 'images/USMap_01-ImageMap_01_over.gif'); return true;"
	onmouseup="changeImages('USMap_01', 'images/USMap_01-ImageMap_01_over.gif'); return true;" />
  </map>
  <!-- End ImageReady Slices -->
</div>
  
      </div>
      <!-- end of pagecontent div -->
      
   
    
    <!-- end of content div -->
</div>
  </div><!-- end of main div -->
  <div id="footer">
    <div id="footer_left">
    <a href="../speccoll/quakersandslavery/about/contact_us.php">Contact Us</a> |
    <a href="../speccoll/quakersandslavery/about/project_funding.php">Funders</a> |
    <a href="http://www.brycchancarey.com/slavery/quakersandslavery.htm/">Quakers &amp; Slavery Conference</a>    </div>
    <div id="footer_right">
    <a href="http://www.swarthmore.edu/fhl.xml">Friends Historical Library at Swarthmore College</a> |
    <a href="http://haverford.edu/library/special/">Haverford College Quaker &amp; Special Collections</a>
    </div>
    </div>
  
  </div><!--end of containerspc div -->
  
  

</body>
</html>