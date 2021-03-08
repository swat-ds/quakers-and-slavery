<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Bibliography </title><!-- InstanceEndEditable -->

<!--Style Sheet -->
<link href="/speccoll/quakersandslavery/QuakersSlavery_sidebar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/speccoll/quakersandslavery/scripts/common.js"></script>


<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->

</head>

<body>

<div id="containerspc">
	<div id="top">
		<div id="searchbar_background"></div>
		<div id="searchbar">
           <form action="http://trilogy.brynmawr.edu/speccoll/quakersandslavery/results.php" id="cse-search-box">
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
       
       
       <div id="sectionheader"><a href="/speccoll/quakersandslavery/"><img src="../images/janejohnson1.png" alt="Quakers &amp;amp; Slavery" class="png" /></a></div>
       
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
        </span>
</div>
</div>
            	
  
       
       </div>
          <!-- end of top div -->
       <div id="main">
       <div id="sidebar">
    <div id="sidebarcontent">
  
  <!-- InstanceBeginEditable name="sidebar" -->
  
  
    <h3>
   <a href="../../quakersandslavery/resources/Q&amp;SBibliography.pdf" target="_blank"> <img class= "floatleft" src="../../quakersandslavery/images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="../../quakersandslavery/resources/Q&amp;SBibliography.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>
   
   
    <br /> 
    <h2>Jump to </h2>
    
   
<h3>

<a href="#A">A,</a> 
<a href="#B">B,</a> 
<a href="#C">C,</a> 
<a href="#D">D,</a>
<a href="#E">E,</a>
<a href="#F">F,</a>
<a href="#G">G,</a>
</h3>

<h3>
<a href="#H">H,</a>
<a href="#I">I,</a>
<a href="#J">J,</a>

<a href="#L">L,</a>
<a href="#M">M,</a>
<a href="#N">N,</a>
<a href="#O">O,</a></h3>

<h3>
<a href="#P">P,</a>

<a href="#R">R,</a>
<a href="#S">S,</a>
<a href="#T">T,</a>
<a href="#V">V,</a>
<a href="#W">W,</a>
<a href="#XYZ">Y</a></h3>


<!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    
    <h1>Quakers &amp; Slavery Bibliography</h1>

<br />

<h2><a name="A"></a>A</h2>

<p>Allinson, Samuel.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9852" target="_blank">Draft of Samuel Allinson letter to Patrick Henry.</a>  1774-10-17.  Haverford College  Special Collections,  manuscript collection 968, 3 pages.  </p>

<p>American Anti-Slavery Society. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11807" target="_blank">The Slave's Friend</a>. 1836. Friends Historical Library of Swarthmore College, HT 851.S53, 232 pages.</p>


<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11109" target="_blank">The Annual Monitor [extracts].</a> 1813. Friends Historical Library of Swarthmore College, BX7790 .A6 v.1, 15 pages. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11515" target="_blank">An Anti-Slavery Group of 1850.</a> 1896-1897. Friends Historical Library of Swarthmore College, Friends' Intelligencer and Journal LIII:43 and LIV:9, 4 pages. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4106" target="_blank">The Anti-Slavery Alphabet.</a> 1846.  Friends Historical Library of Swarthmore College, E449.A62, 16 pages. </p>

<h2><a name="B"></a>B</h2>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9798" target="_blank">Letter to Jonah Thompson.</a>  1756-04-24.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9799" target="_blank">Letter to Caspar Wistar.</a>  1784-04-25.  Haverford College Special Collections,	manuscript collection 852, 6 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9705" target="_blank">Letter to Charlotte Queen of Great Britain.</a>  1783-08-25.  Haverford College Special 	Collections, manuscript collection 852, 2 pages. </p>

<p>Benezet, Anthony. <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,9702" target="_blank"> Letter to Edward Cathrall.</a>  1764-11-25.  Haverford College Special Collections, 	manuscript collection 852, 3 pages. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9716" target="_blank">Letter to George Dillwyn.</a>  1767-04.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,9719" target="_blank">Letter to George Dillwyn.</a>  1767-04-15.  Haverford College Special Collections, 	manuscript collection 852, 2 pages. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9724" target="_blank">Letter to George Dillwyn.</a>  1767-08-30.  Haverford College Special Collections, 	manuscript collection 852, 3 pages.  </p>

<p>Benezet, Anthony.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,9727" target="_blank">Letter to George Dillwyn.</a>  1769-11.  Haverford College Special Collections, 	manuscript collection 852, 2 pages. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9731" target="_blank">Letter to George Dillwyn.</a>  1770-05.  Haverford College Special Collections, 	manuscript collection 852, 3 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9734" target="_blank">Letter to George Dillwyn.</a>  1771-05-02.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,9739" target="_blank">Letter to George Dillwyn.</a>  1771-12-23.  Haverford College Special Collections, 	manuscript collection 852, 4 pages. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9749" target="_blank">Letter to George Dillwyn.</a>  1773-08-05.  Haverford College Special Collections, 	manuscript collection 852, 9 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9611" target="_blank">Letter to George Dillwyn.</a>  1774-02-15.  Haverford College Special Collections, 	manuscript collection 852, 6 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9614" target="_blank">Letter to George Dillwyn.</a>  1778-07-12.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9621" target="_blank">Letter to George Dillwyn.</a>  1779-08-04.  Haverford College Special Collections, 	manuscript collection 852, 6 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9626" target="_blank">Letter to George Dillwyn. </a> 1779-09-11.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9629" target="_blank">Letter to George Dillwyn.</a>  1779-09-15.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9634" target="_blank">Letter to George Dillwyn.</a>  1779-10.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.   </p>

<p>Benezet, Anthony. <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,9640" target="_blank"> Letter to George Dillwyn.</a>  1780-04.  Haverford College Special Collections, 	manuscript collection 852, 5 pages. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9643" target="_blank">Letter to George Dillwyn.</a>  1780-07.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9648" target="_blank">Letter to George Dillwyn.</a>  1780-07.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9653" target="_blank">Letter to George Dillwyn.</a>  1780-08-06.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9819" target="_blank">Letter to George Dillwyn. </a> 1781-05.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9810" target="_blank">Letter to George Dillwyn.</a>  1781-07.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9823" target="_blank">Letter to George Dillwyn. </a> 1781-12.  Haverford College Special Collections, 	manuscript collection 852, 3 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9814" target="_blank">Letter to George Dillwyn.</a>  1782-02.  Haverford College Special Collections, 	manuscript collection 852, 3 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9663" target="_blank">Letter to George Dillwyn.</a>  1783-07.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.   </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9668" target="_blank">Letter to George Dillwyn.</a>  1783-08-17.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9673" target="_blank">Letter to George Dillwyn.</a>  1783-09-14.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9658" target="_blank">Letter to George Dillwyn.</a>  1783.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,9595" target="_blank">Letter to George Dillwyn.</a>  Undated.  Haverford College Special Collections, 	manuscript collection 852, 4 pages. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9598" target="_blank">Letter to George Dillwyn.</a>  Undated.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9601" target="_blank">Letter to George Dillwyn.</a>  Undated.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href="	http://triptych.brynmawr.edu/u?/HC_QuakSlav,9850" target="_blank">Letter to Israel Pemberton and others.</a>  1778-01.  Haverford College Special 	Collections, manuscript collection 852, 1 page. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9836" target="_blank">Letter to John Fothergill.</a>  1773-04-28.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9827" target="_blank">Letter to John Smith.</a>  1758-02-25.  Haverford College Special Collections, 	manuscript collection 852, 3 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9785" target="_blank">Letter to John Smith.</a>  1759-02-20.  Haverford College Special Collections, 	manuscript collection 852, 5 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9789" target="_blank">Letter to John Smith.</a>  1760-02-08.  Haverford College Special Collections, 	manuscript collection 852, 3 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9754" target="_blank">Letter to Joseph Phipps.</a>  1763-05-28.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9680" target="_blank">Letter to Moses Brown.</a>  1773-11.  Haverford College Special Collections, manuscript 	collection 852, 6 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9684" target="_blank">Letter to Moses Brown.</a>  1773-12-28.  Haverford College Special Collections, 	manuscript collection 852, 3 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9689" target="_blank">Letter to Moses Brown.</a>  1774-05-09.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9698" target="_blank">Letter to Moses Brown.</a>  1780-07-01.  Haverford College Special Collections, 	manuscript collection 852, 8 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9839" target="_blank">Letter to Robert Pleasants.</a>  1765-01-14.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9759" target="_blank">Letter to Robert Pleasants. </a> 1773-04-08.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,635" target="_blank">Letter to Robert Pleasants.</a>  1774-05-07.  Haverford College Special  Collections, manuscript collection 852, 3 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9763" target="_blank">Letter to Robert Pleasants.</a>  1780-10-23.  Haverford College Special Collections, 	manuscript collection 852, 5 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9846" target="_blank">Letter to Robert Pleasants. </a> 1781-03-17.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7464" target="_blank">Letter to Samuel Allinson.</a>  1772-10-30.  Haverford College Special  Collections, manuscript collection 968, 4 pages.   </p>

<p>Benezet, Anthony.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,9602" target="_blank">Letter to Samuel Allinson.</a> 1773-12-14. Haverford College Special Collections, 	manuscript collection 852, 2 pages. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9710" target="_blank">Letter to Samuel Fothergill.</a>  1757-10-17.  Haverford College Special Collections, 	manuscript collection 852, 4 pages.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9713" target="_blank">Letter to Samuel Fothergill.</a>  1771-10-24.  Haverford College Special Collections, 	manuscript collection 852, 2 pages.  </p>

<p>Benezet, Anthony.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,9793" target="_blank">Letter to Samuel Smith. </a> 1765-05-17.  Haverford College Special Collections, 	manuscript collection 852, 4 pages. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9772" target="_blank">Letter to Selina,  Countess of Huntington.</a>  1774-05-20.  Haverford College Special 	Collections, manuscript collection 852, 7 pages. </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9781" target="_blank">Letter to Selina,  Countess of Huntington. </a> 1775-03-10.  Haverford College Special 	Collections, manuscript collection 852, 7 pages. 	</p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9849" target="_blank">Receipt for teaching, [typescript].</a>   Haverford College Special Collections, 	manuscript collection 852, 1 page.  </p>

<p>Benezet, Anthony.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9848" target="_blank">Receipt for teaching, [typescript].</a>  Haverford College Special Collections, 	manuscript collection 852, 1 page.  </p>



<p>Besse, Joseph.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3669" target="_blank">A collection of the sufferings of the people called Quakers : for the testimony of a good   conscience, from the time of their being first distinguished by that name in the year 1650, to  the time of the act, commonly called the Act of toleration, granted to Protestant dissenters in  the first year of the reign of King William the Third and Queen Mary, in the year 1689 </a>/ Taken  from original records and other authentick accounts [extracts].  1753.  Haverford College Special  Collections, Quaker Collection BX7650.B5 C6 v. 2, 9 pages. </p>

<p align="right"><a href="#top" target="_top">TOP</a> </p>

<p>Binford, James. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11104" target="_blank">Letter to Robert Pleasants.</a> 1794-12-04.  Haverford College Special Collections, 	manuscript collection 1116/168, 4 pages.  	</p>

<p>Brown, Moses.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1522" target="_blank">Letter to Benjamin Bourn.</a>  1791-01-16.  Haverford College Special  Collections, manuscript collection 954, 3 pages.  </p>

<p>Brown, Moses.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1539" target="_blank">Letter from Moses Brown.</a>  1787-11-13.  Haverford College Special  Collections,  manuscript collection 954, 4 pages. </p>


<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,947" target="_blank">Letter to George Washington Taylor.</a>  1846-11-11.  Haverford College Special  Collections, manuscript collection 1179, box 1, 3 pages.  </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,952" target="_blank">Letter to George Washington Taylor.</a>  1846-09-29.  Haverford College Special  Collections, manuscript collection 1179, box 1, 4 pages. </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,985" target="_blank">Letter to George Washington Taylor.</a> 1847-01-04.  Haverford College Special  Collections, manuscript collection 1179, box 1, 1 page.  </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,956" target="_blank">Letter to George Washington Taylor.</a>  1849-02-02.  Haverford College Special  Collections, manuscript collection 1179, box 1, 3 pages.   </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,943" target="_blank">Letter to George Washington Taylor.</a>  1846-10-19.  Haverford College Special  Collections, manuscript collection 1179, box 1, 4 pages.   </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,959" target="_blank">Letter to George Washington Taylor.</a>  1854-05-02.  Haverford College Special  Collections, manuscript collection 1179, box 1, 2 pages.   </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,962" target="_blank">Letter to George Washington Taylor.</a>  1854-11-06.  Haverford College Special  Collections, manuscript collection 1179, box 1, 2 pages.  </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,967" target="_blank">Letter to George Washington Taylor.</a>  1854-10-20.  Haverford College Special  Collections, manuscript collection 1179, box 1, 4 pages.   </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,973" target="_blank">Letter to George Washington Taylor.</a>  1854-11-28.  Haverford College Special  Collections, manuscript collection 1179, box 1, 5 pages. </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,978" target="_blank">Letter to George Washington Taylor. </a> 1854-12-13.  Haverford College Special  Collections,  manuscript collection 1179, box 1, 4 pages.   </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1004" target="_blank">Letter to George Washington Taylor.</a>  1854-11-21.  Haverford College Special  Collections, manuscript collection 1179, box 1, 3 pages.  </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1008" target="_blank">Letter to George Washington Taylor.</a>  1855-05-04.  Haverford College Special  Collections, manuscript collection 1179, box 1, 3 pages.   </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1507" target="_blank">Letter to George Washington Taylor.</a>  1855-04-20.  Haverford College Special  Collections, manuscript collection 1179, box 1, 3 pages.   </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1016" target="_blank">Letter to George Washington Taylor.</a>  1855-02-16.  Haverford College Special  Collections, manuscript collection 1179, box 1, 7 pages.  </p>

<p>Burritt, Elihu.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,1019" target="_blank">Letter to George Washington Taylor.</a>  1856-03-28.  Haverford College Special  Collections, manuscript collection 1179, box 1, 2 pages. </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1551" target="_blank">Letter to George Washington Taylor.</a>  1855-01-19.  Haverford College Special  Collections, manuscript collection 1179, box 1, 3 pages.   </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1562" target="_blank">Letter to George Washington Taylor.</a>  1856-11-08.  Haverford College Special  Collections, manuscript collection 1179, box 1, 2 pages.  </p>

<p>Burritt, Elihu.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1024" target="_blank">Letter to George Washington Taylor.</a>  1856-12-01.  Haverford College Special  Collections, manuscript collection 1179, box 1, 4 pages.   </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="C"></a>C </h2>

<p>Chesterfield Monthly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4079" target="_blank">Chesterfield Monthly Meeting, Men's  Minutes.</a> 1774-1786.  Friends Historical Library of Swarthmore College, RG2/Ph/C47,  286 pages.    </p>

<p>Chesterfield Monthly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4981" target="_blank">Chesterfield Monthly Meeting, Men's  Minutes.</a>  1786-1798.  Friends Historical Library of Swarthmore College, RG2/Ph/C47,  287 pages.    </p>

<p>Chesterfield Monthly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,5123" target="_blank">Chesterfield Manumissions.</a>  1774- 1848.  Friends Historical Library of Swarthmore College, RG2/Ph/C47, 141 pages.    </p>

<p>Clark, William B.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1515" target="_blank">Letter to Nicholas Waln.</a>  1784-04-23.  Haverford College Special  Collections, manuscript collection 966, box 1, 2 pages.  </p>


<p>Clarkson, Thomas.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,932" target="_blank">An essay on the slavery and commerce of the human species, particularly the  African. </a> Translated from a Latin dissertation, which was honored with the first prize in the  University of Cambridge, for the year 1785.  With additions.  1786.  Haverford College Special  Collections, BX7642.C55 E79 1786a, 297 pages.   </p>

<p>Clarkson, Thomas.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8636" target="_blank">Letter from Thomas Clarkson.</a>  1830-03-30.  Friends Historical Library of Swarthmore College, MSS 004, 4 pages.   </p>

<p>Clarkson, Thomas.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1503" target="_blank">The History of the Rise, Progress, and Accomplishment of the Abolition of the Slave- Trade [original manuscript].</a>  ca. 1808.  Haverford College Special Collections, manuscript collection 975 A, 331 pages. </p>

<p>Clarkson, Thomas.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3065" target="_blank">The History of the Rise, Progress, and Accomplishment of the Abolition of the African Slave-Trade by the British Parliament.</a>  1808.  Haverford College Special Collections, Rare Books HT1162 .C6 1808 v. 1, 576 pages.    </p>

<p>Clarkson, Thomas.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3659" target="_blank">The History of the Rise, Progress, and Accomplishment of the Abolition of the African Slave-Trade by the British Parliament.</a>  1808.  Haverford College Special Collections, Rare Books HT1162 .C6 1808 v. 2, 593 pages.    </p>

<p>Coffin, Joshua and William Lloyd Garrison.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11087" target="_blank">Letters to Alonzo Lewis.</a>  1830-1832.  Friends Historical Library of Swarthmore College, MSS 004, 20 pages.  </p>

<p><a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,3721" target="_blank">Consequences of Slavery. </a> 1856-03-08.  Haverford College Special Collections, Quaker Reference BX7601. F78 v.296, p. 205, 1 page.   </p>

<p>Cooper, David. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,10004" target="_blank">Notices of David Cooper.</a> 1747-1794. Friends Historical Library of Swarthmore College, Periodicals: Friends' Review vols. 15-16, 148 pages.  </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="D"></a>D</h2>

<p>Davis, John. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1041" target="_blank"> Letter to Joseph Talcot.</a>  1830-05-01.  Haverford College Special Collections, manuscript collection 1015, 7 pages.    </p>

<p>De Angeli, Marguerite.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11463" target="_blank">Thee, Hannah! [illustrations only].</a>  1940.  Haverford College Special Collections, BX7724.D28 T3, 51 pages.    </p>

<p>Dugdale, Joseph A.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3791" target="_blank">Joseph Dugdale Correspondence.</a>  1841-1873.  Friends Historical Library of  Swarthmore College, SC 032, 63 pages.   </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="E"></a>E</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3688" target="_blank">Early Anti-Slavery Advocates.</a>  1855-11-24 to 1856-03-29.  Haverford College Special Collections, Quaker Reference BX7601. F78 v.29, 15 pages.   </p>

<p>Ecroyd, John.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,983" target="_blank">Letter to Elihu Burritt.</a>  1854-02-10.  Haverford College Special Collections, manuscript collection 1179, box 1, 4 pages.   </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11007" target="_blank">"The Efforts of the Friends of humanity..."</a> Friends Historical Library of Swarthmore College, MSS 004, 4 pages.  </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank">Emancipated Slaves, White and Colored.</a> 1864-01-30. Christopher Densmore Private Collection, Harper's Weekly VIII:370 (Jan. 30 1864), 3 pages. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="F"></a>F</h2>

<p>Female Anti-Slavery Sewing Society. <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,631" target="_blank"> The Female Anti-Slavery Sewing Society Minutes. Record of garments. </a> 1852-06-23 through 1852-10-05.  Haverford College  Special Collections, manuscript collection 975, box F, 35 pages. </p>

<p>Fox, George.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,595" target="_blank">Gospel family-order : being a short discourse concerning the ordering of families, both of  whites, blacks and Indians.</a>  1676.  Haverford College Special Collections, BX7733 .G62 c.2, 21 pages.   </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1043" target="_blank">Free Maryland.</a>  1864-11-01.  Haverford College Special Collections, manuscript collection 1179, box 3, 1 page.  </p>

<p>Free Produce Society of Pennsylvania.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4641" target="_blank">Constitution of the Free Produce Society of Pennsylvania.</a>  1827- 01-08.  Friends Historical Library of Swarthmore College, E446.F7, 8 pages.  </p>

<p>Friends' Association of Philadelphia for the Aid and Elevation of the Freedmen.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7104" target="_blank">Friends Association for  the Aid and Elevation of the Freedmen, Executive Minutes. </a> 1864-1865.  Friends Historical  Library of Swarthmore College, RG4/120, 81 pages.   </p>

<p>Friends' Association of Philadelphia for the Aid and Elevation of the Freedmen.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7459" target="_blank">Friends' Association of  Philadelphia for the Aid and Elevation of the Freedmen, Annual Reports.</a>  1864-1871.  Friends  Historical Library of Swarthmore College, SG 3, 192 pages.   </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="G"></a>G</h2>

<p>Garrett, Thomas.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,1512" target="_blank">Letter from Thomas Garrett. </a> 1861-12-02.  Haverford College Special  Collections, manuscript collection 851, box 5, 4 pages.  </p>

<p>Gereau, Daniel E. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11694" target="_blank">Some Thoughts on Slavery.</a> 1844. Friends Historical Library of Swarthmore College, BX7748.3 .G4, 12 pages. </p>

<p>Gibson, James G.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8102" target="_blank">Deposition Signed by Henry H. Parker.</a>  1860-10-09.  Haverford College Special  Collections, manuscript collection 950, 1 page.   </p>

<p>Gray, George. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,12049" target="_blank"> A testimony for family meeting and keeping negro servants. </a>  Haverford College Special Collections, manuscript collection, 1167, 4 pages. </p>

<p>Grimk&#232;, Sarah Moore.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8073" target="_blank">Letter to Joseph Tallcot.</a>  1836-10-14.  Haverford College Special  Collections, collection number 1015, 4 pages.  </p>

<p>Grimk&#232;, Sarah Moore.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8078" target="_blank">Letter to Joseph Tallcot. </a> 1837-06-23.  Haverford College Special  Collections, collection number 1015, 4 pages.   </p>

<p>Grimk&#232;, Sarah Moore.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8083" target="_blank">Letter to Joseph Tallcot.</a>  1837-10-25.  Haverford College Special  Collections, collection number 1015, 4 pages.   </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="H"></a>H</h2>
<p>Harned, William; Ray, Charles B. (Charles Bennett), Lester, Andrew.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,480" target="_blank">Anti-Slavery circular of  William Harned et al.</a>  1849.  Haverford College Special Collections, manuscript collection 1013, box F, 3 pages.    </p>

<p>Hendericks, Gerret; Graeff, Derick up de; Pastorius, Francis Daniell, 1651-1719; Graef, Abraham up den.   <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8" target="_blank">Quaker Protest Against Slavery in the New World, Germantown (Pa.)</a> 1688.  1688-4-18.   Haverford College Special Collections, manuscript collection 990 B-R, 2 pages.  </p>

<p>Henry, Patrick.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,488" target="_blank">Copy of Patrick Henry letter to Robert Pleasants.</a>  1773-01-18.  Haverford College Special  Collections, manuscript collection 968, 3 pages.   </p>

<p>Hicks, Elias.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8068" target="_blank">Elias Hicks Manumission.</a>  1778-12-14.  Friends Historical Library of Swarthmore College, MSS 044, 1 page.    </p>

<p><a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,5842" target="_blank">History of Western District Colored School.</a>  Haverford College Special Collections, manuscript collection 950, 2 pages.   </p>

<p>Hopper, Isaac T. (Isaac Tatem).  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4632" target="_blank">A List Of the Members of the New York Manumission Society. </a> 1791- 1827.  Friends Historical Library of Swarthmore College, SC 212, 27 pages.   </p>

<p>Hopper, Isaac T. (Isaac Tatem).  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7974" target="_blank">Isaac T. Hopper Papers.</a>  1807-1889.  Friends Historical Library of  Swarthmore College, RG5 115; SC 058; various MSS and RG5, 500 pages.   </p>

<p>Hopper, Isaac T. and Johnson, Oliver. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11699" target="_blank">'Rare Specimen of a Quaker Preacher!' and 'Tales of Oppression No. XVI.' </a>1841-03-25. Friends Historical Library of Swarthmore College, Periodicals: The National Anti-Slavery Standard I:42, 2 pages. .</p>

<p>Hough, John. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11100" target="_blank">Letter to Robert Pleasants.</a> 1792-9-20.  Haverford College Special Collections, manuscript 	collection 1116/168, 3 pages.   </p>

<p>Hough, John. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11096" target="_blank">Letter to Robert Pleasants.</a> 1793-1-9.  Haverford College Special Collections, manuscript 	collection 1116/168, 3 pages.   </p>

<p>Hunt, John.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8568" target="_blank">John Hunt Journal.</a>  1820-1821.  Friends Historical Library of Swarthmore  College, RG5/240, 36 pages.  </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="I"></a>I</h2>
<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8088" target="_blank">'I am under apprehension our old Enemies (the Quakers)&hellip;'.</a>  1796-11-10.  Friends Historical Library of  Swarthmore College, MSS 004, 4 pages.  </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="J"></a>J</h2>

<p>Jackson, Isaac. <a href="http://triptych.haverford.edu/u?/HC_QuakSlav,12114" target="_blank">Isaac Jackson Journal.</a>  1776-11.  Haverford College Special Collections, manuscript collection 975B, 23 pages.  </p>

<p>Jackson, Francis.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8631" target="_blank">At a full meeting of some of the warmest advocates of the Anti-Slavery cause in  Boston&hellip;.</a>  1843-01-09.  Friends Historical Library of Swarthmore College, MSS 004, 4 pages.  </p>

<p>Janney, Samuel M. (Samuel Mcpherson).  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8505" target="_blank">Samuel M. Janney Papers. </a> 1833-1870.  Friends Historical  Library of Swarthmore College, RG5/183, 335 pages. </p>

<p>Johnson, Christopher. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11089" target="_blank">Letter to Robert Pleasants.</a> 1792-8-20.  Haverford College Special Collections, manuscript collection 1116/168, 3 pages. 	 </p>

<p>Joues, Hannah.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,434" target="_blank">Letter of Appreciation.</a>  1903-01-22.  Haverford College Special Collections, manuscript collection 950, 4 pages.  </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="L"></a>L</h2>
<p>Lay, Benjamin.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7019" target="_blank">All Slave-Keepers That keep the Innocent in Bondage, Apostates&hellip;. </a> 1737.  Friends  Historical Library of Swarthmore College, BX7748.3 .L44, 278 pages.   </p>

<p>Letchworth, Rachel K.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,419" target="_blank">Account of the Mothers' Meeting associated with the Western District Monthly  Meeting's School for Colored Children.</a>  1892-13-03.  Haverford College Special Collections, manuscript collection 950, 7 pages.  </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,443" target="_blank">Letter of Appreciation.</a>  1863-03-06.  Haverford College Special Collections, manuscript collection 950, 1 page. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8094" target="_blank">Letter to Eastern Pennsylvania Antislavery Society. </a> 1842.  Friends Historical Library of Swarthmore  College, MSS 004, 4 pages.  </p>

<p>London Yearly Meeting.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8521" target="_blank">London Yearly Meeting Circular Epistle on Slavery.</a>  1840-5-20.   Haverford College Special Collections, manuscript collection 1250, JO1.10, 3 pages.   </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="M"></a>M</h2>

<p>Mifflin, Warner.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1534" target="_blank">A serious expostulation with the members of the House of Representatives of the  United States [extracts].</a>  1793.  Haverford College Special Collections, BX7738.M64 S4 1793a, 11 pages.   </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11578" target="_blank">The Mirror of Misery.</a> 1814. Friends Historical Library of Swarthmore College, E446 .M637, 48 pages. </p>

<p>Monthly Meeting of Friends of Philadelphia for the Northern District.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9586" target="_blank">Philadelphia Monthly Meeting of Friends for the Northern District Minutes [extracts]. </a> 1844-05-28.  Haverford College Special 	Collections, manuscript collection 1250, JO2.1, 1 page.  	</p>

<p>Monthly Meeting of Friends of Philadelphia for the Southern District.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8867" target="_blank">Philadelphia Monthly Meeting of Friends for the Southern District Minutes [extracts].</a>  1775-08-02.  Haverford College Special Collections, manuscript collection 1250, JO1.6, 2 pages.  	 </p>

<p>Monthly Meeting of Friends of Philadelphia for the Southern District.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8871" target="_blank">Philadelphia Monthly Meeting of Friends for the Southern District Minutes [extracts].</a>  1844-04-22.  Haverford College Special Collections, manuscript collection 1250, JO2.1, 3 pages.  </p>

<p>Monthly Meeting of Friends of Philadelphia for the Southern District.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9587" target="_blank">Philadelphia Monthly Meeting of Friends for the Southern District Minutes [extracts].</a>  1844-04-24.  Haverford College Special Collections, manuscript collection 1250, JO2.1, 1 page.  </p>

<p>Monthly Meeting of Friends of Philadelphia for the Southern District. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8517" target="_blank">Philadelphia Monthly Meeting for the Southern District Minutes [extracts]. Charge Against R. Wilson.</a>  1837.  Haverford College Special Collections, manuscript collection 1250, JO1.10, 2 pages.    </p>

<p>Monthly Meeting of Friends of Philadelphia for the Southern District. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8514" target="_blank">Philadelphia Monthly Meeting for the Southern District Minutes, [extracts]. Essay of Testimony in Case of R. Wilson.</a>  1837.  Haverford College Special Collections, manuscript collection 1250, JO1.10, 2 pages.   </p>

<p>Monthly Meeting of Friends of Philadelphia for the Southern District. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8526" target="_blank">Philadelphia Monthly Meeting Minutes [extracts]. Report on the Black Schools.</a>  1840-01.  Haverford College Special Collections, manuscript collection 1250, JO1.10, 4 pages.  </p>

<p>Monthly Meeting of Friends of Philadelphia for the Southern District. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8533" target="_blank">Philadelphia Monthly Meeting for the Southern District Minutes [extracts] Report on the Millings Alley School.</a>  1844-01-06.  Haverford College  Special Collections, manuscript collection 1250, JO2.1, 3 pages.  </p>

<p>Monthly Meeting of Friends of Philadelphia for the Southern District. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8536" target="_blank">Philadelphia Monthly Meeting for the Southern District Minutes [extracts]. </a> 1844-04-05.  Haverford College Special Collections, manuscript collection 1250 J02.1, 2 pages.  </p>

<p>Monthly Meeting of Friends of Philadelphia for the Western District. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8529" target="_blank">Philadelphia Monthly Meeting for the Western District Minute, 1844-06-19 [extracts].</a>  1844-6-19.  Haverford College Special Collections, manuscript collection 1250, JO2.1, 2 pages.  </p>

<p>Monthly Meeting of Friends of Philadelphia.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9064" target="_blank">Philadelphia Manumissions Book. </a> 1772-1786.  Haverford 	College Special Collections, manuscript collection 1250, S2.15, 184 pages.   </p>

<p>Monthly Meeting of Friends of Philadelphia.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8875" target="_blank">Philadelphia Monthly Meeting Minutes [extracts]. </a> 1844-	03-02; 1844-04-25.  Haverford College Special Collections, manuscript collection 1250, JO2.1, 3 	pages.   </p>

<p>Monthly Meeting of Friends of Philadelphia.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9588" target="_blank">Philadelphia Monthly Meeting Minutes [extracts]. </a> 1844-	04-25.  Haverford College Special Collections, manuscript collection 1250, JO2.1, 1 page.  </p>

<p>Monthly Meeting of Friends of Philadelphia.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8879" target="_blank">Philadelphia Monthly Meeting Minutes [extracts].</a>  1844-	08-26.  Haverford College Special Collections, manuscript collection 1250, JO2.1, 3 pages.  </p>

<p>Monthly Meeting of Friends of Philadelphia.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8101" target="_blank">Philadelphia Monthly Meeting Minutes [extracts].</a>  1737-	06-24.   Haverford College Special Collections, manuscript collection 1250 JB 1.8 pages 284-	286, 2 pages.   </p>

<p>Monthly Meeting of Friends of Philadelphia.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,394" target="_blank">Philadelphia Monthly Meeting Minutes [extracts].</a>  1737-09-26.   Haverford College Special Collections, manuscript collection 1250 JB 1.8 pages 287-289, 2 pages.   </p>

<p>Morgan, Cadwalader.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,19" target="_blank">Quaker Protest Against Slavery, Merion (Pa.).</a>  1696-07-05.  Haverford  College Special Collections, manuscript collection 990 B-R, 2 pages.  </p>

<p>Mott, Lucretia. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11700" target="_blank">Letter from Lucretia Mott.</a> 1855-09-04. Friends Historical Library of Swarthmore College, Mott MSS, 4 pages. </p>
<p>Mott, Lucretia. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11440" target="_blank">Letter from Lucretia Mott to C. W. Pennock. </a>1843-10-26. Friends Historical Library of Swarthmore College, Mott MSS, 4 pages. </p>
<p>Mott, Lucretia.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3710" target="_blank">Letter to Adeline Roberts.</a>  1851-08-08.  Haverford College Special  Collections, manuscript collection 851, box 13, folder 13, 4 pages.  </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="N"></a>N</h2>

<p>Neall, Daniel.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8794" target="_blank">50th Anniversary of the American Anti-Slavery Society.</a>  1833-1886.  Friends Historical  Library of Swarthmore College, SC 086; MSS 035; MSS 044, 152 pages.  </p>

<p>Neall, Daniel.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8864" target="_blank">Daniel Neall Papers. </a> 1834-1904.  Friends Historical Library of Swarthmore College, SC 086, 69 pages.   </p>

<p>New Jersey Society for Promoting the Abolition of Slavery.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1563" target="_blank">Membership Certificate of the New Jersey  Society for Promoting the Abolition of Slavery.</a>  Haverford College Special Collections , 988E R, 1 page.   </p>

<p>New Jersey Society for Promoting the Abolition of Slavery.  <a href="http://triptych.haverford.edu/u?/HC_QuakSlav,12257" target="_blank">Minutes of the Proceedings of the New Jersey Society for Promoting the Abolition of Slavery.</a>   Haverford College Special Collections , manuscript collection 975 A, 113 pages. </p>

<p>New-York Association of Friends for the Relief of Those Held in Slavery and the Improvement of Free  People of Color.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11665" target="_blank">Address from the New-York Association of Friends, for the Relief of those held in Slavery.</a> 1842. Friends Historical Library of Swarthmore College, Broadsides N, 1 page. </p>

<p>New-York Association of Friends for the Relief of Those Held in Slavery and the Improvement of Free  People of Color.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7265" target="_blank">New York Association of Friends for the Relief of those held in Slavery &amp;c.,  minute book.</a>  1839-1844.  Friends Historical Library of Swarthmore College, RG4/051, 85 pages.    </p>

<p>New-York Association of Friends for the Relief of Those Held in Slavery and the Improvement of Free  People of Color.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7151" target="_blank">New York Association of Friends for the Relief of those held in Slavery &amp;c.,  Financial Papers.</a>  1840-1843. Friends Historical Library of Swarthmore College, RG4/051, 40 pages.    </p>

<p>New-York Association of Friends for the Relief of Those Held in Slavery and the Improvement of Free  People of Color. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11681" target="_blank">Testimony of the New-York Association of Friends for the Relief of those held in slavery, &amp;c. concerning Charles Marriott, deceased.</a> 1844-05-30. Friends Historical Library of Swarthmore College, BX7796 .M365N3, 15 pages. </p>

<p>Nicholson, Thomas. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11093" target="_blank">Letter to Robert Pleasants.</a> 1778-2-11.  Haverford College Special Collections, 	manuscript collection 1116/168, 3 pages.  </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="O"></a>O</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1045" target="_blank">Original Subscribers to the Free Produce [Friend?].</a>  Haverford College Special Collections, manuscript collection 1179, box 3, 1 page.   </p>

<p>Otis, Sarah H. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11455" target="_blank">Letter from Sarah H. Otis to Mary Otis.</a> [1862]. Friends Historical Library of Swarthmore College, SC 090, 4 pages.  </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="P"></a>P</h2>

<p>Parrish, John. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8052" target="_blank"> Notes on Abolition. </a> ca.1805.  Friends Historical Library of Swarthmore College, 59 pages.    </p>

<p>Paul, Benjamin; Freeman, Samuel A.; King, Eyer; Wyath, Symon; Pinhard, John; Shaw, Henry. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1028" target="_blank"> Letter to  Joseph Talcot.</a>  1837-01-28.  Haverford College Special Collections, manuscript collection 1015, 3 pages.   </p>

<p>Pemberton, James, 1723-1809. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,12040" target="_blank">From the Overseers of the Press Concerning Jn. Woolmans Negro Book</a>. 1762-03-28. Friends Historical Library of Swarthmore College, RG2/Ph/W57, 2 pages.</p>

<p>Pennsylvania Hall Association (Philadelphia, Pa.).  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4591" target="_blank">Pennsylvania Hall Association, Legal and Financial  Papers.</a> 1837-1849.  Friends Historical Library of Swarthmore College, RG4/072, 332 pages.   </p>

<p>Pennsylvania Hall Association (Philadelphia, Pa.). Board of Managers.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4256" target="_blank">Pennsylvania Hall Association,  Board of Managers Minutes.</a>  1837-1847.  Friends Historical Library of Swarthmore College, RG4/074, 130 pages.    </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4604" target="_blank">Pennsylvania Hall, Retrospective Newspaper Articles.</a>  1896-1899.  Friends Historical Library of  Swarthmore College, RG4/072,  12 pages.   </p>

<p>Pennsylvania Society for Promoting the Abolition of Slavery.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1059" target="_blank">The Constitution of the Pennsylvania  Society, for Promoting the Abolition of Slavery, &amp;c.</a>  1787-04-23.  Friends Historical Library of  Swarthmore College, E445.P3A2, 15 pages.   </p>

<p>Pennsylvania Yearly Meeting of Progressive Friends (1853-1940).  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,6739" target="_blank">Proceedings of the Pennsylvania  Yearly Meeting of Progressive Friends.</a>  1853-1873.  Friends Historical Library of  Swarthmore College, SG 2 PENNA. Y.M., 896 pages.  </p>

<p>Pennsylvania Yearly Meeting of Progressive Friends (1853-1940).  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1116" target="_blank">Proceedings of the Pennsylvania  Yearly Meeting of Progressive Friends. </a> 1853-1862.  Friends Historical Library of  Swarthmore College, SG 2 PENNA. Y.M., 110 pages.   </p>

<p>Pennsylvania Yearly Meeting of Progressive Friends (1853-1940). Kennett Quarterly Meeting.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4692" target="_blank">Kennett  Quarterly Meeting of Progressive Friends, Minutes. </a> 1852-1861.  Friends Historical Library of  Swarthmore College, RG2/Pa Pr, 49 pages.  </p>

<p>Pennypacker, E. F. (Elijah Funk).  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4105" target="_blank">Elijah Pennypacker Correspondence.</a>  1839-1861.  Friends Historical  Library of Swarthmore College, SC 097, 25 pages. </p>

<p>Peterson, Eliza. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,429" target="_blank"> Letter of Appreciation.</a>  1899-04-23.  Haverford College Special Collections, manuscript collection 950, 6 pages.  </p>

<p>Philadelphia Free Produce Association of Friends. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11647" target="_blank">An Address to the Members of the Religious Society of Friends on the Subject of Slavery and the Slave-Trade.</a> 1849-10-15. Friends Historical Library of Swarthmore College, E441 .F73 A3, 16 pages. .</p>

<p>Philadelphia Free Produce Association of Friends. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1044" target="_blank">By laws of the Board of Managers of the Free Produce Association of Friends of the Philadelphia Yearly  Meeting.</a> Haverford College Special Collections, manuscript collection 1179, box 3, 1 page.  </p>

<p>Philadelphia Free Produce Association of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,997" target="_blank">First report of the Manufacturing Committee to the Board of Managers of the Free Produce Association.</a>  Haverford College Special Collections, manuscript collection 1179, box 3, 2 pages.  </p>

<p>Philadelphia Free Produce Association of Friends; Johnson, Israel H.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1000" target="_blank">Report of the Manufacturing Committee.</a> 1846-06-06.  Haverford College Special Collections, manuscript collection 1179, box 3, 2 pages. </p>

<p>Philadelphia Free Produce Association of Friends. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,496" target="_blank">To our fellow members of the Religious Society of  Friends.</a> 1845.  Haverford College Special Collections, BX7642.F8 T627 no.1, 2 pages.  </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7111" target="_blank">Philadelphia in Slavery Days.</a>  1902-12-14.  Friends Historical Library of Swarthmore College, PG 7 Clothier, 1 page.  </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends. <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,937" target="_blank">Chester Quarterly Meeting (1683-1800) Chester Quarterly Meeting Minutes, [extracts].</a>  1729.  Haverford College Special Collections, manuscript collection 1250, A1.2, 1 page.  </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends. Philadelphia Quarterly Meeting.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8098" target="_blank">Philadelphia Quarterly Meeting Minutes [extracts].</a>  1754.  Haverford College Special Collections, manuscript collection 1250, A1.3, 3 pages. </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends. Philadelphia Quarterly Meeting; Pemberton, John.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8511" target="_blank">Philadelphia Quarterly Meeting Minute [extracts].</a>  1775-11-6.  Haverford College  Special Collections, manuscript collection 1250, JO1.6, 2 pages.  </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11723" target="_blank">Philadelphia Yearly Meeting Minutes  [extracts]. </a>  1688. Haverford College Special Collections, manuscript collection 1250, A1.2, 3 pages.   </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11713" target="_blank">Philadelphia Yearly Meeting Minutes  [extracts].</a>  1696-7-5.  Haverford College Special Collections, manuscript collection 1250, A1.2, 6 pages.  </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,936" target="_blank">Philadelphia Yearly Meeting Minutes  [extracts]. </a> 1730.  Haverford College Special Collections, manuscript collection 1250, A1.2, 3 pages.   </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,938" target="_blank">Philadelphia Yearly Meeting Minutes  [extracts].</a>  1738.  Haverford College Special Collections, manuscript collection 1250, A1.2, 1 page.  </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1547" target="_blank">Philadelphia Yearly Meeting Epistle of Caution and Advice.</a>  1754.  Haverford College Special Collections, manuscript collection 1250, A1.3, 3 pages.   </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3699" target="_blank">Philadelphia Yearly Meeting Minutes [extracts]. Reports to the President Senate and House of Representatives of the United States. </a>  1789.  Haverford College Special Collections, manuscript collection 1250, A1.11, 5 pages.    </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8537" target="_blank">Philadelphia Yearly Meeting Minute on Slavery.</a>  1839-04-15.   Haverford College Special Collections, manuscript collection 1250, JO1.10, 1 page. </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11445" target="_blank">Philadelphia Yearly Meeting, Rule of Discipline on Slavery [extract].</a> 1797. Friends Historical Library of Swarthmore College, BX7609 .P4 1797, 9 pages. </p>






<p>Philadelphia Yearly Meeting of the Religious Society of Friends. Meeting for Sufferings.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1559" target="_blank">Address to the  Members of Philadelphia Yearly Meeting.</a>  1864-12-20.  Haverford College Special Collections, manuscript collection 1250, B3.6, 7 pages.  </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  Meeting for Sufferings. Philadelphia Yearly Meeting, Meeting for Sufferings Minutes [extracts].  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1518" target="_blank">Representation to the Assembly of New Jersey on the Subject of the Slave trade.</a>  1788-10-08.   Haverford College Special Collections, manuscript collection 1250/ B6.2, 2 pages.</p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  Meeting for Sufferings. Waln, Nicholas. Philadelphia Yearly Meeting's <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1171" target="_blank">Meeting for Sufferings Minutes [extract].</a>  1788-01-17.  Haverford College Special Collections, manuscript collection 1250, B3.3, 2 pages.  </p>

<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  Meeting for Sufferings. Waln, Nicholas. Philadelphia Yearly Meeting Minute [extracts]. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3702" target="_blank">First Draft of Philadelphia Yearly Meeting Address to Continental Congress.</a> 1789-10-3.  Haverford  College Special Collections, manuscript collection 1250, B6.2, 2 pages. </p>




<p>Philadelphia Yearly Meeting of the Religious Society of Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9585" target="_blank">The Original Papers of Manumission by the Monthly Meetings Composing the Quarterly Meeting of Philadelphia.</a>  1772-1790.  Haverford College Special Collections, manuscript collection, 1250, S2.15, 520 pages.   </p>

<p>Pleasants, Robert. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11181" target="_blank">Letterbook.</a>  1754-1797.  Haverford College Special Collections, manuscript collection 	1116/168, 243 pages. </p>

<p>Post, Calysta&#59; Post, H.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3715" target="_blank">Letter to Roswell Cushman.</a>  1846.  Haverford College Special Collections, manuscript collection 851, 4 pages.  </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="R"></a>R</h2> 

<p>Requited Labor Convention (1838 : Philadelphia). <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11771" target="_blank">Requited Labor Convention Proceedings</a>. 1838. Friends Historical Library of Swarthmore College, E449.R4, 36 pages.</p>

<p>Reynolds, Richard. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11512" target="_blank">Letter from Richard Reynolds to William Allen.</a> 1809-09-25. Friends Historical Library of Swarthmore College, MSS 004, 2 pages. </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="S"></a>S</h2>


<p>Salem Monthly Meeting (Society of Friends : 1676-1827). <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,10007" target="_blank">The Petition of sundry Inhabitants of the county of Salem.</a> 1774. Friends Historical Library of Swarthmore College, RG2/Ph/S26, 2 pages. </p>

<p>Sharp, Granville.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1033" target="_blank">Letter to Anthony Benezet.  </a>1772-08-21.  Haverford College Special  Collections, manuscript collection 968, 4 pages.  </p>

<p>Sheppard, Moses. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,10302" target="_blank">Correspondence.</a> 1840-1858. Friends Historical Library of Swarthmore College, RG5/137, 700 pages.  </p>

<p>Sheppard, Moses. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11062" target="_blank">Maryland Colonization Society Records.</a> 1831-1835. Friends Historical Library of Swarthmore College, RG5/137, 100 pages. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,994" target="_blank">The Slave.</a>  1854.  Haverford College Special Collections, manuscript collection 1179, box 3, 4 pages.  </p>

<p>Society for the Relief of Free Negroes, Unlawfully Held in Bondage.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,461" target="_blank">Ruees [sic] for the regueatfon [sic] of  the Society for the Relief of Free Negroes , and others, unlawfully held in bondage, Instituted in  Philadelphia in the year 1784. To which are prefixed, The acts of the General Assembly of  Pennsylvania, respecting the gradual abolition of slavery.  </a>1784.  Haverford College Special  Collections, BX7797.2.S6 S67, 17 pages. </p>

<p>Stoddard, Jonathan. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11525" target="_blank">Paul Cuffe receipt. </a>1789-04-02. Friends Historical Library of Swarthmore College, MSS 004, 1 page. </p>

<p>Sturge, Joseph.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8567" target="_blank">Joseph Sturge Papers.</a>  1841.  Friends Historical Library of Swarthmore College, MSS 004, 12 pages.   </p>

<p>Sumner, Charles.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11088" target="_blank">Letter from Charles Sumner to E. M. Davis.</a>  1856-09-02.  Friends Historical Library of  Swarthmore College, MSS 004, 1 page.  </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="T"></a>T</h2>


<p>Taber, William C.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,984" target="_blank">Letter to George Washington Taylor.</a>  1846-06.  Haverford College Special  Collections, manuscript collection 1179, Box 1, 1 page. </p>

<p>Taylor, George W.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1042" target="_blank">Receipt, Free Labor Ware-House.</a>  1866-02-04.  Haverford College Special Collections, manuscript collection 1179, box 3, 1 page.   </p>

<p>Thomas, Chas. Y.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9851" target="_blank">Letter to Allen.</a>  1909-01-09.  Haverford College Special Collections, manuscript 	collection 852, 1 page.  </p>

<p>Troth, Anna B.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,442" target="_blank">Treasurer's Report for the Mothers' Meeting associated with the Western District  Monthly Meeting's School for Colored Children. </a> 1871-07-06.  Haverford College  Special Collections, manuscript collection 950, 7 pages.  </p>

<p>Troth, Sarah J.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,411" target="_blank">Letter to Lucy C. Shelmire. </a> 1907-09-23.  Haverford College Special Collections, manuscript collection 950, 15 pages. </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="U"></a>U</h2>


<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8508" target="_blank">United Committees on the Cases of Slaves Minute [extracts]. </a> 1777-02-17.  Haverford College Special  Collections, manuscript collection, 1250 JO1.6, 2 pages.  </p>

<p>United States. Circuit Court (4th Circuit).  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8067" target="_blank">Thomas Garrett Trial Notes.</a>  1848-05-26.  Friends Historical  Library of Swarthmore College, MSS 004, 12 pages. </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="V"></a>V</h2>


<p>Vaux, Roberts.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,573" target="_blank">Memoirs of the lives of Benjamin Lay and Ralph Sandiford : two of the earliest public  advocates for the emancipation of the enslaved Africans.</a>  1816.  Haverford College Special  Collections, BX7720.F93 v.6, 44 pages.  </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="W"></a>W</h2>


<p>Weld, Theodore Dwight.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3720" target="_blank">Letter to Samuel Allinson.</a>  1844-06-09.  Haverford College Special  Collections, manuscript collection 968, box 10, 4 pages.  </p>

<p>Whittier, John Greenleaf.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3693" target="_blank">Letter to Angelina and Sarah Moore Grimk&eacute;.</a>  1837-08-14.   Haverford College Special Collections, manuscript collection 851, box 18, folder 1, 4 pages.  </p>

<p>Wistar, Caspar.  <a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,9831" target="_blank">Letter to Doctor Reynell Coaetes.</a>  1839-11-22.  Haverford College Special Collections, manuscript collection 852, 3 pages.  </p>

<p>Woolman, Abner.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,12053" target="_blank">Abner Woolman's Journal.</a>  1770-1772.  Haverford College Special Collections, manuscript collection 1250 B5.1 15a, 62 pages. </p>

<p>Woolman, John.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,528" target="_blank">Some considerations on the keeping of Negroes : recommended to the professors of  Christianity of every denomination. </a> 1754.  Haverford College Special Collections, BX7642.W9 C7 1754, 31 pages.   </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="XYZ"></a>Y</h2>


<p> Yearly Meeting of Congregational Friends.  <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,10270" target="_blank">Proceedings of the Yearly Meeting of Congregational Friends. </a> 1849-1861. Friends Historical Library of Swarthmore College, SG 2 N.Y.Y.M., 262 pages. </p>

<p>Yearly Meeting of Friends, held in Virginia. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,10271" target="_blank">Black Water Monthly Meeting, Manumissions.</a>  1776-1779. 	Haverford College Special Collections, manuscript collection 1116/196, 30 pages. 	</p>

<p>Yearly Meeting of Friends, held in Virginia. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11436" target="_blank">Virginia Yearly Meeting Minutes [extracts].</a>  1779. 	Haverford College Special Collections, manuscript collection 1116/159, 3 pages. </p>


<!-- InstanceEndEditable -->
  
  
 

	
	
	            
    </div>
      <!-- end of pagecontent div -->
      
   
    
    <!-- end of content div -->
</div>
  </div><!-- end of main div -->
  <div id="footer">
    <div id="footer_left">
    <a href="../about/contact_us.php">Contact Us</a> |
    <a href="../about/project_funding.php">Funders</a> |
    <a href="http://www.brycchancarey.com/slavery/quakersandslavery.htm/">Quakers &amp; Slavery Conference</a>    </div>
    <div id="footer_right">
    <a href="http://www.swarthmore.edu/fhl.xml">Friends Historical Library at Swarthmore College</a> |
    <a href="http://haverford.edu/library/special/">Haverford College Quaker &amp; Special Collections</a>
    </div>
    </div>
  
  </div><!--end of containerspc div -->
  
  

</body>
<!-- InstanceEnd --></html>