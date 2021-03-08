<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : White Slaves</title><!-- InstanceEndEditable -->

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
       
       
       <div id="sectionheader"><a href="/speccoll/quakersandslavery/"><img src="../../../quakersandslavery/images/janejohnson1.png" alt="Quakers &amp;amp; Slavery" class="png" /></a></div>
       
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
   <a href="white_slaves.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="white_slaves.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>
 
    <h2>Jump to Section</h2>
    <p></p>
    <h3><a href="#featured">Featured Image</a> </h3>
    <h3><a href="#emancipation">The Emancipation Proclamation and Freedmen's Relief</a></h3>
    <h3><a href="#publicity">The Publicity Tour</a></h3>
	<h3><a href="#analysis">Analysis of the Images</a></h3>
	<h3><a href="#references">References</a></h3>
	<h3><a href="#sources">Primary Sources</a></h3>
   
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11521&amp;action=2&amp;DMSCALE=5&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=45&amp;DMY=20&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" border="0" alt="Emancipated Slaves"/></a>
        <h1>White Slaves</h1>
          <h3>By Celia Caust-Ellenbogen</h3>
          <p><i>Swarthmore College, Class of 2009. Quakers &amp; Slavery Digitization Project Intern</i></p>
          <br />
          <br />
          <br />
          <br />
          <br />
      
	  <table style="border: 2px solid #bdb89a; background: #ECE5B6;">
        <tr>
          <td>
		  <h3 align="right"><a name="featured" id="featured"></a>Featured Image:</h3>
		  <p align="right"><i>LEARNING IS WEALTH: WILSON, CHARLEY, REBECCA &amp; ROSA, Slaves from New Orleans.</i></p>
		  <div align="right"><i>Quakers often purchased photographs that, like this one, were sold as fund-raisers to support freedmen's relief work. This particular photograph was mixed amongst portraits of relatives and friends in a photograph album belonging to the Trumans, prominent Philadelphia-area Friends. (link to  a detailed inventory of the <a href="http://www.swarthmore.edu/library/friends/truman_underhill/truman_underhill.htm" target="_blank">Truman-Underhill Album Collection</a>) (see all references to <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=truman&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank">Truman family members in the Quakers &amp; Slavery Collection</a>)</i></div></td>
          <td><a title="Uncle Tom's Cabin" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11127" target="_blank"><img style="padding:10px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11127&amp;action=2&amp;DMSCALE=50&amp;DMWIDTH=300&amp;DMHEIGHT=200&amp;DMX=13&amp;DMY=140&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Uncle Tom's Cabin" /></a></td>
        </tr>
      </table>     
      <br />
    <h2><a name="emancipation" id="emancipation"></a>The Emancipation Proclamation and Freedmen's Relief</h2>
          <p>When Abraham Lincoln's Emancipation Proclamation took effect on 1 January 1863, thousands of slaves living in the rebelling Confederate States found that they had been instantly &quot;freed.&quot; Technically speaking this was true, but the logistics involved in actually restoring a free and equal status to the newly emancipated slaves was, to say the least, staggering. Without money, education, or experience fending for themselves--not to mention the additional challenges of living in a war-torn and racially-prejudiced county--the former slaves faced seemingly insurmountable challenges to finding some means of subsistence. Northerners and abolitionists quickly deployed relief organizations, such as the <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=Friends%20Association%20of%20Philadelphia%20for%20the%20Aid%20and%20Elevation%20of%20the%20Freedmen&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank">Friends Association of Philadelphia for the Aid and Elevation of the Freedmen</a>. These groups worked tirelessly to acquire supplies, establish schools, and provide other forms of support, but resources were limited. Moreover, it was not easy to arouse the sympathy of countrymen who were preoccupied by war, and more often than not ambivalent on the issue of African-American slavery. </p>
          <p>By December of the same year, 1863, much of Louisiana was occupied by the Union army. Ninety-five schools serving over 9,500 students--including almost half of the black children in Louisiana--were running under its auspices (Clinton 58). But keeping these schools up and running would require ongoing financial support. Toward this end, the National Freedman's Association, in collaboration with the American Missionary Association and interested officers of the Union Army, launched a new propaganda campaign. Five children and three adults, all former slaves from New Orleans, were sent to the North on a publicity tour. A drawing of them was printed in the 30 January 1864 issue of the popular <em>Harper's Weekly</em>, bearing the intriguing caption: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank">&quot;EMANCIPATED SLAVES, WHITE AND COLORED.&quot;</a> The authors of this campaign were pursuing a surprising, and quite effective, strategy for arousing sympathy for blacks--they portrayed them as white.</p>
 <div align="center"><a title="Emancipated Slaves, White and Colored" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11521&amp;action=2&amp;DMSCALE=8&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Emancipated Slaves"/></a>  
        </div>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
          <h2><a name="publicity" id="publicity"></a>The Publicity Tour </h2>
          <p>Of the eight slaves sent north from New Orleans, four children--Charley, Augusta, Rebecca, and Rosina (Rosa)--looked white. As the <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11522" target="_blank">article accompanying the group portrait</a> in <em>Harper's Weekly </em>affirmed, they were &quot;perfectly white;&quot; &quot;very fair;&quot; &quot;of unmixed white race&quot;. Their light complexions contrasted sharply with those of the three adults, Wilson, Mary, and Robert; and that of the fifth child, Isaac--&quot;a black boy of eight years; but none the less intelligent than his whiter companions&quot;. </p>
          <p>Accompanied on their tour by Col. George Hanks of the Corps d'Afrique (the 18th Infantry, a corps of colored soldiers), the group posed for photographs in New York and Philadelphia (Metropolitan Museum of Art). The portraits were produced in the format of <em>cartes de visite </em>(CDVs), albumen prints the size of a calling card, and sold for 25 cents each. The proceeds of the sale were directed to Maj. Gen. Nathaniel P. Banks in Louisiana, where the money would be &quot;devoted to the education of colored people,&quot; as the verso of each photograph explains. </p>
          <p>Of the &quot;Emancipated Slaves from New Orleans&quot; series, at least 22 different prints remain in existence today. The bulk were produced by New York photographers <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=paxson&amp;CISOFIELD1=creato&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=altern&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=creato&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=s" target="_blank">Charles Paxson,</a>  and <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=thumb&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=0&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=subjec&amp;CISOBOX1=national+freedman%27s+relief+association&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=&amp;c=exact&amp;CISOROOT=/HC_QuakSlav" target="_blank">Myron H. Kimball</a>, who took the initial group portrait later reproduced as a <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank">woodcut</a> in <em>Harper's Weekly</em>. At least one CDV remains by Philadelphia photographer <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11160" target="_blank">James E. McClees</a>: a portrait of Rebecca.</p>
 <div align="center"><table>
  <tr>
                      <td width="200"><h2 align="center">White Slaves</h2> 
                <p align="center">(clockwise): <span class="maintext">REBECCA, AUGUSTA and ROSA, Emancipated Slaves, from New Orleans</span>; R<span class="maintext">osa. A Slave Girl from New Orleans</span>; <span class="maintext">FREEDOM'S BANNER</span>: C<span class="maintext">HARLEY, A Slave Boy from New Orleans</span></p></td>
        <td><a title="Rebecca, Augusta &amp; Rosa" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11132" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11132&amp;action=2&amp;DMSCALE=35&amp;DMWIDTH=200&amp;DMHEIGHT=200&amp;DMX=10&amp;DMY=70&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="White Slaves"/></a></td>
  </tr>
  <tr>
        <td width="200"><a title="Charley" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11130" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11130&amp;action=2&amp;DMSCALE=35&amp;DMWIDTH=200&amp;DMHEIGHT=200&amp;DMX=60&amp;DMY=60&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Charley" /></a></td>
        <td><a title="Rosa" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11128" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11128&amp;action=2&amp;DMSCALE=40&amp;DMWIDTH=200&amp;DMHEIGHT=200&amp;DMX=30&amp;DMY=80&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Rosa" /></a></td>
  </tr>
</table>
</div>
 <p align="right"><a href="#top" target="_top">TOP</a> </p>
          <h2><a name="analysis" id="analysis"></a>Analysis of the Images </h2>
            <p>The tremendous success of the &quot;White Slaves&quot; propaganda campaign has been under increasing scrutiny in recent years. Scholars of history, photography, and cultural studies have formulated a number of interesting arguments to explain the appeal these images may have had for contemporary viewers. </p>
          <p>In &quot;Rosebloom and Pure White, Or So It Seemed,&quot; Mary Niall Mitchell points out that by depicting slaves as white, the photographs made an argument for the Civil War that was independent of class status. Southern slavery was a threat to the freedom of all white people, the photographs insisted; thus repudiating the notion, made dangerous by the New York draft riots of 1863, that the Civil War was purely an elitist conflict waged with the blood of the poor (Mitchell 58) In the same article, Mitchell also highlights the significance of the fact that the majority of the photos in the series were portraits of young, white, and well-dressed girls. Such portraits took advantage of the patronizing tendencies of the northern Victorian public, calling upon the viewer to protect the purity, innocence, and &quot;whiteness&quot; of youthfulness and femininity (Mitchell 72).</p>
          <p>In &quot;Visualizing the Color Line,&quot; Carol Goodman notes that much of the power of the photographs stemmed from allusions to physical abuse. When paired with a related article in the same issue of <em>Harper's Weekly</em>, the allusions in the portrait of white slaves to the white masters' sexual exploitation of their female slaves is clear. The most grievous sin of slavery, the editor of <em>Harper's Weekly</em> contends, is that it permits slaveholding &quot;<a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11522" target="_blank">'gentlemen' [to] seduce the most friendless and defenseless of women</a>&quot;. Moreover, two of the four black slaves included in the publicity tour bear the marks of abuse on their skin--<a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11131" target="_blank">Wilson</a>  has a brand upon his forehead; <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11523" target="_blank">Mary</a>, as she is described in <em>Harper's Weekly</em>, has more than 50 rawhide-scars on her arm and back. (Goodman)</p>
          <p>Gwendolyn DuBois Shaw, in <em>Portraits of a People</em>, considers the ways props were used to imply that the subjects shared the viewers' values. Several portraits taken by Charles Paxson figure the American flag prominently in the composition, such as <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11130" target="_blank">&quot;Freedom's Banner.&quot;</a> Another of Paxson's photographs, <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11127" target="_blank">&quot;Learning is Wealth,&quot;</a> depicts each of the subjects holding a book--which, moreover, recalls the purpose behind the whole project, raising money for schools in Louisiana. (Shaw 160).</p>
          <div align="center"> <table>
            <tr>
              <td width="200"><h2 align="center">Rebecca</h2> 
              <p align="center">photographed by (clockwise): <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=paxson&amp;CISOFIELD1=creato&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=altern&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=creato&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=s" target="_blank">Charles Paxson</a>, New York; <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11160" target="_blank">James E. M'Clees</a>, Philadelphia; <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=kimball&amp;CISOFIELD1=creato&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=altern&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=creato&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=s" target="_blank">Myron H. Kimball</a>, New York </p></td>
        <td><a title="Rebecca by Paxson" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11129" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11129&amp;action=2&amp;DMSCALE=40&amp;DMWIDTH=200&amp;DMHEIGHT=200&amp;DMX=120&amp;DMY=100&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Rebecca"/></a></td>
            </tr>
 
            <tr>
        <td width="200"><a title="Rebecca by Kimball" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11133" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11133&amp;action=2&amp;DMSCALE=35&amp;DMWIDTH=200&amp;DMHEIGHT=200&amp;DMX=15&amp;DMY=35&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Rebecca" /></a></td>
        <td><a title="Rebecca by M'Clees" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11160" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11160&amp;action=2&amp;DMSCALE=50&amp;DMWIDTH=200&amp;DMHEIGHT=200&amp;DMX=70&amp;DMY=120&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="" /></a></td>
            </tr>
          </table></div>
 <p align="right"><a href="#top" target="_top">TOP</a> </p>    
<h2><a name="references"></a>References</h2>
<p>Clinton, Catharine. &quot;Orphans of the Storm: Steering a New Course.&quot; In <em>Civil War Stories</em>. Athens, GA: University of Georgia Press, 1998. 41-80.</p>
<p>Goodman, Carol. <a href="http://www.mirrorofrace.org/carol.php" target="_blank">&quot;Visualizing the Color Line.&quot;</a> From <em>Mirror of Race</em> online exhibition by Suffolk University. <a href="http://www.mirrorofrace.org/carol.php" target="_blank">http://www.mirrorofrace.org/carol.php</a>.</p>
<p> <em>Harper's Weekly</em>. Vol. 8 No. 370 (January 30, 1864): <a href="http://triptych.brynmawr.edu/cdm4/page_text.php?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11522&amp;CISOBOX=0&amp;OBJ=11524&amp;ITEM=2" target="_blank">66</a>, <a href="http://triptych.brynmawr.edu/cdm4/page_text.php?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11521&amp;CISOBOX=0&amp;OBJ=11524&amp;ITEM=1" target="_blank">69</a>, <a href="http://triptych.brynmawr.edu/cdm4/page_text.php?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11523&amp;CISOBOX=1&amp;OBJ=11524&amp;ITEM=3" target="_blank">71</a>.</p>
<p>Metropolitan Museum of Art. <!--<a href="http://www.metmuseum.org/works_of_art/collection_database/photographs/emancipated_slaves_myron_h_kimball/objectview.aspx?collID=19&amp;amp;OID=190036388" target="_blank">&quot;Emancipated Slaves&quot; by Myron H. Kimball</a>.-->  &quot;Emancipated Slaves&quot; by Myron H. Kimball. Accession number 2005.100.92.</p>
<p>Mitchell, Mary Niall. &quot;Rosebloom and Pure White, Or So It Seemed.&quot; In <em>Raising Freedom's Child: Black Children and Visions of the Future after Slavery</em>. New York: New York University Press, 2008. 51-90.</p>
<p>Shaw, Gwendolyn DuBois. <em>Portraits of a People: Picturing African Americans in the Nineteenth Century</em>. Seattle: University of Washington Press, 2006. 154-161.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<div id="topBorder">
    <br />
     <h2><a name="sources">
 
    </a>Related Primary Sources</h2>
    <br />
    <table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a title="Wilson" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11131" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11131&amp;action=2&amp;DMSCALE=50&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=100&amp;DMY=20&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Wilson" /></a></div></td>
        <td width="70"></td>

        <td width="130"><div align="left"><a title="Annual Reports of Friends' Freedman Association" class="body_con" href="http://triptych.brynmawr.edu/cdm4/page_text.php?CISOROOT=/HC_QuakSlav&amp;CISOPTR=7266&amp;CISOBOX=0&amp;OBJ=7459&amp;ITEM=2" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=7266&amp;action=2&amp;DMSCALE=8&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=225&amp;DMY=213&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Reports" /></a></div></td>
        <td width="70"></td>

        <td width="130"><div align="left"><a title="Teachers of Friends' Freedman Association" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1564" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=1564&amp;action=2&amp;DMSCALE=10&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=20&amp;DMY=60&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0"  alt="Teachers"/></a></div></td>
        <td width="70"></td>

        <td width="130"><div align="left"><a title="Slaves Learning" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11136" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11136&amp;action=2&amp;DMSCALE=19&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=0&amp;DMY=25&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Slaves Learning" /></a></div></td>
      </tr>
      <tr>
        <td width="130" valign="top"><div align="left">Wilson, from the same series </div></td>
        <td width="70"></td>

        <td width="130" valign="top"><div align="left"  >Annual Reports of Friends' Freedman Association </div></td>
        <td width="70"></td>

        <td width="130" valign="top"><div align="left">Teachers of Friends' Freedman Assocation </div></td>
        <td width="70"></td>

        <td width="130" valign="top"><div align="left" >Slaves Learning</div></td>
      </tr>
    </table>
    <br />
    <p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=thumb&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=0&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=subjec&amp;CISOBOX1=national+freedman%27s+relief+association&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">view all &quot;Emancipated Slaves--White and Colored&quot; series</a>)</p>
    </div>
    
    

    
	<!-- InstanceEndEditable -->
  
  
 

	
	
	            
    </div>
      <!-- end of pagecontent div -->
      
   
    
    <!-- end of content div -->
</div>
  </div><!-- end of main div -->
  <div id="footer">
    <div id="footer_left">
    <a href="../../../quakersandslavery/about/contact_us.php">Contact Us</a> |
    <a href="../../../quakersandslavery/about/project_funding.php">Funders</a> |
    <a href="http://www.brycchancarey.com/slavery/quakersandslavery.htm/">Quakers &amp; Slavery Conference</a>    </div>
    <div id="footer_right">
    <a href="http://www.swarthmore.edu/fhl.xml">Friends Historical Library at Swarthmore College</a> |
    <a href="http://haverford.edu/library/special/">Haverford College Quaker &amp; Special Collections</a>
    </div>
    </div>
  
  </div><!--end of containerspc div -->
  
  

</body>
<!-- InstanceEnd --></html>