<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Quakers &amp; Slavery : Browse &amp; Search</title>
<!--Style Sheet -->
<link href="../QuakersSlavery_sidebar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../scripts/common.js"></script>
<script language="javascript" type="text/javascript" src="../scripts/list.js"></script>
<script language="JavaScript" type="text/javascript" src="../ContentFlow/contentflow.js"></script>
<script language="JavaScript" type="text/javascript" src="../ContentFlow/ContentFlowAddOn_carousel.js"></script>
</head>

<body onload="fillCategory();">


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
       <div id="sidebar">
    <div id="sidebarcontent">
    
<h2>Other Ways to Discover the Collection</h2>
  <h3><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=thumb&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);title,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=0&amp;CISOTYPE=link&amp;CISOOP1=all&amp;CISOFIELD1=type&amp;CISOBOX1=Image&amp;CISOOP2=all&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=all&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=all&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=&amp;c=all&amp;CISOROOT=/HC_QuakSlav" target="_blank">Preview All Image Thumbnails</a></h3>
  <h3><a href="../resources/bibliography.php">Bibliography of Materials on Triptych</a></h3>
  <h3><a href="../commentary/index.php">Read Scholarly Commentary</a></h3>
  <h3><a href="../resources/map_world.php">Explore Interactive Map</a></h3>
  <h3><a href="../resources/timeline.php">Explore Interactive Timeline</a></h3>

</div></div>

 <div id="content"> 
    <div id="pagecontent"> 
    
    <h1>Search Primary Sources</h1>
 <form action="combined_search.php" method="get" target="_blank" name="searchform" id="form2">
	
    
    <input maxlength="75" size="50" name="searchterm" />
	<input value="D" name="SORT" type="hidden" />
	<input value="Search" name="search" type="submit" />
    <br />
    <input type="radio" value="1" name="CISOBOXNumber" checked="checked" />find all terms
    <input type="radio" value="2" name="CISOBOXNumber" />find exact phrase
    <input type="radio" value="3" name="CISOBOXNumber" />find author/creator
        <br /><br />
        </form>
        
        <h1>Browse Primary Sources by Category</h1>
        <form name="drop_list" method="get" action="http://triptych.brynmawr.edu/cdm4/results.php" target="_blank">


<input type="hidden" name="CISOOP1" value="exact" />
<input type="hidden" name="CISORESTMP" value="results.php" />
<input type="hidden" name="CISOVIEWTMP" value="item_viewer.php" />
<input type="hidden" name="CISOMODE" value="grid" />
<input type="hidden" name="CISOGRID" value="thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none" />
<input type="hidden" name="CISOBIB" value="title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none" />
<input type="hidden" name="CISOTHUMB" value="20 (4x5);relevancy,none,none,none,none" />
<input type="hidden" name="CISOTITLE" value="20;title,none,none,none,none" />
<input type="hidden" name="CISOHIERA" value="20;altern,title,none,none,none" />
<input type="hidden" name="CISOSUPPRESS" value="1" />


<select name="Category" onchange="SelectSubCat();">
<option value="">Select Category</option>
</select>&nbsp;
<span id="toggle" style="display:none">

<select id="SubCat" name="CISOPARM">



<option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>


</select>
<input type="submit" value="Go" class="button" />
</span>
</form>

<br />
<br />

<h1>Image Galleries</h1><br/>
    <h3>Quaker Abolitionists (<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=thumb&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=0&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=subjec&amp;CISOBOX1=Quaker+abolitionists&amp;CISOOP2=exact&amp;CISOFIELD2=type&amp;CISOBOX2=Image&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">see all</a>) (<a href="http://trilogy.brynmawr.edu/speccoll/quakersandslavery/commentary/people/index.php">view index</a>)</h3>
 <div class="ContentFlow">
            <div class="loadIndicator"><div class="indicator"></div></div>
           
            <div class="flow">

  <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11697" target="_blank"><img src="/speccoll/quakersandslavery/images/neall.png" class="content" alt="Daniel Neall Sr" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11697" target="_blank">Daniel Neall Sr, 1784-1846</a> 
              </div></div>
                     
                     
              <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11142" target="_blank"><img src="/speccoll/quakersandslavery/images/brown.png" class="content" alt="Moses Brown" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11142" target="_blank">Moses Brown</a> 
              </div></div>
                      
             
              
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11141" target="_blank"><img src="/speccoll/quakersandslavery/images/garrett_big.png" class="content" alt="Thomas Garrett" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11141" target="_blank">Thomas Garrett</a> 
              </div></div>
			  
		    <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11113"  target="_blank"><img class="content" src="/speccoll/quakersandslavery/images/featured/BenjLay.png" alt="Benjamin Lay" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,395" target="_blank">Benjamin Lay, 1677-1759</a>
              </div></div>  
			  
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11165" target="_blank"><img src="/speccoll/quakersandslavery/images/mott_lucretia.png" class="content" alt="Lucretia Mott" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11165" target="_blank">Lucretia Mott</a> 
              </div></div>    
			                      
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11156" target="_blank"><img src="/speccoll/quakersandslavery/images/pennypacker.png" class="content" alt="Elijah Pennypacker"/></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11156" target="_blank">Elijah F. Pennypacker</a> 
              </div></div>
			  
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11146" target="_blank"><img src="/speccoll/quakersandslavery/images/cuffee.png" class="content" alt="Paul Cuffee" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11146" target="_blank">Paul Cuffee</a> 
              </div></div>    
			            
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11153" target="_blank"><img src="/speccoll/quakersandslavery/images/hopper.png" class="content" alt="Isaac T. Hopper" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11153" target="_blank">Isaac T. Hopper</a> 
              </div></div>
              
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11139" target="_blank"><img src="/speccoll/quakersandslavery/images/janney.png" class="content" alt="Samuel Janney" /></a>
                 <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11139" target="_blank">Samuel M. Janney</a> 
              </div></div>
                          
                <!-- Add as many items as you like. -->
            </div>
            <div class="globalCaption"></div>
            
</div>
<br />
  <h3>Kneeling Slaves (<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=thumb&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=0&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=descri&amp;CISOBOX1=version+of+image%3A+kneeling+slave&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">see all</a>)</h3>
 <div class="ContentFlow">
            <div class="loadIndicator"><div class="indicator"></div></div>
           
            <div class="flow">

              
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11627" target="_blank"><img src="/speccoll/quakersandslavery/images/featured/misery.png" class="content" alt="Mirror of Misery" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11627" target="_blank">From 'Mirror of Misery'</a> 
              </div>
              </div>
                          
              <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11136" target="_blank"><img src="/speccoll/quakersandslavery/images/kneeling_cdv.png" class="content" alt="From carte fe visite" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11136" target="_blank">From carte de visite</a> 
              </div></div>
                      
             <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7946" target="_blank"><img src="/speccoll/quakersandslavery/images/kneeling_lovejoy.png" class="content" alt="Elijah P Lovejoy letterhead" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7946" target="_blank">Elijah P. Lovejoy letterhead</a> 
              </div></div>
              
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11173" target="_blank"><img src="/speccoll/quakersandslavery/images/kneeling_medal.png" class="content" alt="From medal" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11173" target="_blank">From medal</a> 
              </div></div>
			  
		    <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11176"  target="_blank"><img src="/speccoll/quakersandslavery/images/kneeling_pincushion.png" class="content" alt="From pincushion" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11176" target="_blank">From pincushion</a>
              </div></div>  
			  
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11711" target="_blank"><img src="/speccoll/quakersandslavery/images/kneeling_tribute.png" class="content" alt="Cover of Tribute for the Negro" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11711" target="_blank">Cover of 'Tribute for the Negro'</a> 
              </div></div>    
			                      
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11137" target="_blank"><img src="/speccoll/quakersandslavery/images/kneeling_whittier.png" class="content" alt="From John G. Whittier broadside" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11137" target="_blank">From John G. Whittier broadside</a> 
              </div></div>
			  
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11180" target="_blank"><img src="/speccoll/quakersandslavery/images/kneeling_bag.png" class="content" alt="From bag" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11180" target="_blank">From bag</a> 
              </div></div>    
			            
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11440" target="_blank"><img src="/speccoll/quakersandslavery/images/kneeling_british.png" class="content" alt="British &amp; Foreign Anti Slavery Society letterhead" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11440" target="_blank">British &amp; Foreign Anti Slavery Society letterhead</a> 
              </div></div>
              
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11709" target="_blank"><img src="/speccoll/quakersandslavery/images/kneeling_genius.png" class="content" alt="Genius of Universal Emanciaption" /></a>
                 <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11709" target="_blank">From 'Genius of Universal Emancipation'</a> 
              </div></div>
                          
                <!-- Add as many items as you like. -->
            </div>
            <div class="globalCaption"></div>
            
</div>
<br />
  <h3>White Slaves (<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=thumb&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=0&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=subjec&amp;CISOBOX1=national+freedman%27s+relief+association&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">see all</a>) (<a href="/speccoll/quakersandslavery/commentary/themes/white_slaves.php">read essay</a>)</h3>
 <div class="ContentFlow">
            <div class="loadIndicator"><div class="indicator"></div></div>
           
            <div class="flow">

              
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank"><img src="/speccoll/quakersandslavery/images/ws_augusta.png" class="content" alt="Augusta from Harper's" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank">Augusta, from Harper's</a> 
              </div>
              </div>
                          
              <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank"><img src="/speccoll/quakersandslavery/images/ws_charley.png" class="content" alt="Charlie from Harper's" /></a>
                <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank">Charley, from Harper's</a> 
              </div></div>
                      
             <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank"><img src="/speccoll/quakersandslavery/images/ws_rebecca.png" class="content" alt="Rebecca from Harper's" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank">Rebecca, from Harper's</a> 
              </div></div>
              
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank"><img src="/speccoll/quakersandslavery/images/ws_rosa.png" class="content" alt="Rosa from Harper's" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank">Rosa, from Harper's</a> 
              </div></div>
			    
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11132" target="_blank"><img src="/speccoll/quakersandslavery/images/ws_rar.png" class="content" alt="Rebecca, Augusta, and Rosa" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11132" target="_blank">Rebecca, Augusta, and Rosa</a> 
              </div></div>    
			  
			  <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11127"  target="_blank"><img src="/speccoll/quakersandslavery/images/featured/learning.png" class="content" alt="Learning is Wealth" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11127" target="_blank">'Learning is Wealth'</a>
              </div></div>                    
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11130" target="_blank"><img src="/speccoll/quakersandslavery/images/ws_freedombanner.png" class="content" alt="Freedon's Banner" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11130" target="_blank">'Freedom's Banner'</a> 
              </div></div>
			  
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11133" target="_blank"><img src="/speccoll/quakersandslavery/images/ws_rebecca_kimball.png" class="content" alt="Rebeccas by M.H. Kimball" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11133" target="_blank">Rebecca, by M. H. Kimball</a> 
              </div></div>    
			            
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11160" target="_blank"><img src="/speccoll/quakersandslavery/images/ws_rebecca_mcclees.png" class="content" alt="Rebecca, by J.E. M'Clees" /></a>
              <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11160" target="_blank">Rebecca, by J. E. M'Clees</a> 
              </div></div>
              
               <div class="item"><a class="content" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11129" target="_blank"><img src="/speccoll/quakersandslavery/images/ws_rebecca_paxson.png" class="content" alt="Rebecca by Chas. Paxson" /></a>
                 <div class="caption"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11129" target="_blank">Rebecca, by Chas. Paxson</a> 
              </div></div>
                          
                <!-- Add as many items as you like. -->
            </div>
            <div class="globalCaption"></div>
        </div>
      <!-- end of pagecontent div -->
      
   
    
    <!-- end of content div -->
</div>
  </div></div><!-- end of main div -->
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