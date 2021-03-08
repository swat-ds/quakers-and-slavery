<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Isaac T. Hopper</title><!-- InstanceEndEditable -->

<!--Style Sheet -->
<link href="/speccoll/quakersandslavery/QuakersSlavery_sidebar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/speccoll/quakersandslavery/scripts/common.js"></script>


<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style5 {font-size: 24px}
-->
</style>
<!-- InstanceEndEditable -->

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
   <a href="hopper.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="hopper.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>
  
    <h2>Jump to</h2>
   <h3><a href="#l771">1771,</a> <a href="#l787">1787,</a> <a href="#l792">1792,</a> <a href="#l795">1795,</a> <a href="#l811">1811,</a> <a href="#l824">1824,</a> <a href="#l827">1827,</a> <a href="#l829">1829,</a> <a href="#l830">1830,</a> <a href="#l832">1832,</a> <a href="#l838">1838,</a> <a href="#l840">1840,</a> <a href="#l842">1842,</a> <a href="#l845">1845,</a> <a href="#l852">1852</a></h3>
	<h3><a href="#references">References</a></h3>
	<h3><a href="#sources">Primary Sources</a></h3>
   <p></p>
 <!--   <h2>Related Topics</h2>
	<p>&nbsp;</p>  -->
	
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11153" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11153&amp;action=2&amp;DMSCALE=35&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=40&amp;DMY=20&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" border="0" alt="Page 1" title="Page 1" /></a>
        <h1>Isaac T. Hopper</h1>
          <h3>By Celia Caust-Ellenbogen</h3>
          <p><i>Swarthmore College, Class of 2009. Quakers &amp; Slavery Digitization Project Intern</i></p>
          <br />
          <br />
          <br />
          <br />
          <br />

	<h2>1771 - Birth</h2>
	<p>Isaac Hopper was born in Woodbury, New Jersey in 1771. His family background was heavily Quaker, although his parents, Levi and Rachel Tatem Hopper, were not members of the Society of Friends at the time of his birth. Levi had been disowned for marrying outside of the Society, although he was later restored to membership; Rachel was received into the Society of Friends in 1791. <em>(Read two mottos signed by Isaac Hopper, written in <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7955" target="_blank">1845</a> and <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7956" target="_blank">1848</a>.)</em></p>
	<h2><a name="l787" id="l787"></a>1787 - Philadelphia</h2>
	<p>At the age of 16, Hopper moved to Philadelphia to take a position as an apprentice, and soon began his career as a tailor. Meanwhile, he took it upon himself to help the less fortunate whenever possible. In her biography of Isaac Hopper, L. Maria Child dates his first act of helping an escaped slave to shortly after his arrival in Philadelphia; she records an estimate that he assisted over 1,000 fugitives during his forty years of residence in Philadelphia (Child 33-35, 201). He was elected to membership with the <a href="../organizations/index.php#pas">Pennsylvania Abolition Society</a> in 1796, and soon gained a reputation for devising cunning legal maneuvers to obtain freedom for colored people. Hopper also volunteered as an overseer at the <a href="index.php#benezet">Benezet</a> school for colored children, a teacher for colored adults, a fire-fighter, a Guardian of the Poor for the City of Philadelphia, and an Inspector of the Public Prisons; he served on Friends' committees to assist the poor, work with Native Americans, and counsel Friends who refused to pay militia taxes. <em>(In an 1847 letter, Hopper <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7687" target="_blank">recalls leaving his childhood</a> friend Joseph Whitall to go to Philadelphia and become a tailor.)</em></p>
	<h2><a name="l792" id="l792"></a>1792 - Quaker Membership</h2>
	<p>In October of 1792, Hopper was received into membership by Philadelphia Monthly Meeting. He was likely motivated in part by his childhood love for Sarah Tatum, who came from a strict Quaker family, and from his own family background. <em>(Hopper admonishes those who depart from old Quaker plainness in this <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7684&amp;" target="_blank">letter to his daughter</a>, written in 1847.)</em></p>
	<h2><a name="l795" id="l795"></a>1795 - Marriage to Sarah Tatum</h2>
	<p>Isaac Hopper married Sarah Tatum, his childhood sweetheart, in 1795. The couple had a dozen children together, eight of whom survived childhood. Sarah Hopper died in 1822. <em>(Isaac Hopper wrote a letter to his eldest daughter in 1839, sharing his <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7559" target="_blank">memories</a> of her mother and his first wife, Sarah Tatum Hopper.)</em></p>
	<p align="right"><a href="#top" target="_top">TOP</a></p>
    <h2><a name="l811" id="l811"></a>1811 - Disownment (I)</h2>
	<p>In his total commitment to helping the less fortunate, Hopper sometimes neglected to secure his own finances. Hopper's pecuniary difficulties intensified when he fell ill in 1809, and was unable to fulfill his debts. He was disowned by his monthly meeting in 1811 for &quot;departing at times from the truth of his assertions, violating his promises, and failing in the discharge of his just debts.&quot; His membership was reinstated in 1820, but he was never entirely free of debts (Bacon 76-80). <em>(In a letter from 1834, Hopper <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7871" target="_blank">assures a business partner</a> that he will take responsibility for debts. See a <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7151" target="_blank">summary of money due to Isaac Hopper</a> in 1841 for supplies purchased on behalf of the <a href="../organizations/index.php#nyaf">New-York Association of Friends for the Relief of those Held in Slavery &amp;c.</a>)</em></p>
    <h2><a name="l824" id="l824"></a>1824 - Marriage to Hannah Attmore</h2>
	<p>One and a half years after the death of his first wife, Hopper married Hannah Attmore in 1824. They had four children together, but two died during the Cholera Epidemic of 1832. <em>(Hopper mentions his marriage to Hannah in this <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7840" target="_blank">letter to Elias Hicks</a>.)</em></p>
    <h2><a name="l827" id="l827"></a>1827 - Disownment (II)</h2>
	<p>Beginning in the late 1820s, the teachings of <a href="index.php#hicks">Elias Hicks</a> began to cause controversy within the Society of Friends. In Philadelphia, New York, and Baltimore, two separate yearly meetings were formed, commonly called &quot;Hicksite&quot; and &quot;Orthodox&quot; branches. Isaac Hopper and Elias Hicks were close friends, and Hopper was an outspoken advocate of the Hicksite cause; his friend and biographer L. Maria Child described him as &quot;the Napoleon of the battle&quot; (Child 285). This description is particularly fitting given that Hopper bore a remarkable resemblance to Napoleon Bonaparte (Child 248, 314). Hopper was disowned from the South District Monthly Meeting (Orthodox) in 1827, but by that time he was already established in an equivalent Hicksite group that considered itself a legitimate meeting; Hopper and most of his friends discounted the other meeting's authority to disown him. (Bacon 86-87). <em>(Read a letter from Isaac Hopper <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7974" target="_blank">to Elias Hicks</a>. Read <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7844" target="_blank">Hicks's response</a>.)</em></p>
	<h2><a name="l829" id="l829"></a>1829 - New York City</h2>
	<p>After the Hicksite-Orthodox split, Hopper's tailoring business lost many of its Orthodox Quaker clients. In the midst of pecuniary difficulties, he agreed to move to New York City in 1829 to run a bookstore catering to Hicksite tastes. He also published a Hicksite magazine, &quot;The Friend, or the Advocate of Truth,&quot; and after that he started the &quot;Friends Intelligencer&quot; in 1838. Meanwhile, Hopper continued to pursue his philanthropic goals with unabated zeal. An anti-abolitionist mob threatened his bookstore in 1834 (although he managed to fend them off). By that time Hopper was well-known in New York, and across the country, for sheltering fugitive slaves. <em>(While travelling in Savannah (Georgia) in 1837, <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7555" target="_blank">John Hopper was recognized as Hopper's son</a> and confronted by an anti-abolitionist mob. He narrowly escaped with his life.)</em></p>
    <p align="right"><a href="#top" target="_top">TOP</a></p>
	<h2><a name="l830" id="l830"></a>1830 - Travels in Great Britain</h2>
	<p>In 1830-31 Hopper traveled to Great Britain to settle a family affair, and combined his business with religious visits to Jordans meeting house, among other places (Bacon 97). Upon his arrival, he discovered that British Friends, apprised of the recent schism among American Friends, viewed Hicksites with suspicion. Hopper was particularly dismayed to learn of a certain letter circulating among British Friends that maligned him in particular and warned young Friends to avoid contact with him. However, with his good humor and thoughtful bearing, Hopper managed to win the respect and admiration of most of the people he met while abroad. <em>(Isaac Hopper's <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7487" target="_blank">letters home</a> detail his journey abroad.)</em></p>
    <h2><a name="l832" id="l832"></a>1832 - Cholera Epidemic</h2>
	<p>A cholera epidemic hit New York City in 1832, killing several thousand residents (primarily lower-class slum inhabitants). The deaths of two of Isaac and Hannah's children--Thomas, not yet 4 years old, and Hannah, about 2--brought the terror and the tragedy of such an epidemic into the Hopper home. <em>(Read Isaac Hopper's <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7515" target="_blank">letters to his daughter in Philadelphia</a> about the epidemic.)</em></p>
    <h2><a name="l838" id="l838"></a>1838 - The Darg Affair</h2>
	<p>In 1838, a slave named Thomas Hughes ran away from his master, John P. Darg. Like many fugitive slaves before him, Hughes went to New York City and sought out Isaac T. Hopper for shelter; but unlike them, Hughes had a secret. He had stolen $8,000 from his master before escaping. When Hopper discovered the truth about Hughes, he consulted with fellow abolitionists including Barney Corse, a Friend, and David Ruggles, a free black man. Under the circumstances, they concluded that they must rightfully return Darg's money--but, they decided, it would still be wrong to surrender Hughes back into slavery. Instead, they negotiated a compromise: if (most of) Darg's money was returned to him, he agreed to manumit Hughes. In accordance with this agreement, the majority of Darg's money was restored to him; Hughes served two years in prison for his theft (the minimum sentence); and upon his release from prison, Hughes was no longer a slave. Meanwhile, controversy raged over the question of the abolitionists' behavior, particularly within the Society of Friends. Some Quakers insisted that Hopper had gone too far in helping a fugitive slave who was also a thief; George Fox White claimed, &quot;I had a thousand times rather be a slave, and spend my days with slaveholders, than to dwell in companionship with abolitionists.&quot; (Bacon 113-117; &quot;A Rare Specimen of a Quaker!&quot;). <em>(<a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7487" target="_blank">Abby Hopper Gibbons</a> defends her father's actions in a letter. Isaac Hopper tells Hughes' <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11699" target="_blank">Tale of Oppression</a>.)</em></p>
 <p align="right"><a href="#top" target="_top">TOP</a></p>
    <h2><a name="l840" id="l840"></a>1840 - American Antislavery Society</h2>
	<p>Isaac Hopper became book agent and treasurer of the <a href="../organizations/index.php#aass">American Anti-Slavery Society</a> in 1840. He served on the Executive Committee, and contributed a column entitled &quot;Tales of Oppression&quot; to the Society's official publication, &quot;The National Anti-Slavery Standard.&quot; In 1841, Lydia Maria Child, who would later become Hopper's biographer, took over editorship of &quot;The Standard.&quot; <em>(Hopper describes the <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7580" target="_blank">role of &quot;The National Anti-Slavery Standard&quot;</a> as a defense against untrue attacks on abolitionists.)</em></p>
    <h2><a name="l842" id="l842"></a>1842 - Disownment (III)</h2>
	<p>On March 25,1841, the &quot;National Anti-Slavery Standard,&quot; the official publication of the American Anti-Slavery Society, ran an article headlined &quot;A Rare Specimen of a Quaker!&quot; The titular specimen was Quaker minister George Fox White; the article accused him of being &quot;in the constant practice of denouncing abolitionists in the most offensive and opprobrious terms.&quot; Complaints were subsequently lodged with New York Monthly Meeting (Hicksite), that the article &quot;<span class="maintext">excite[d] discord and disunity</span>&quot; amongst the Society of Friends, contrary to discipline. The article's author, Oliver Johnson, was not a Quaker, but the meeting determined that the Executive Committee of the American Anti-Slavery Society should be held responsible for the contents of the publication (Bacon 130). Only three members of the Executive Committee fit both criteria of being Quaker and residing full-time in New York City: Isaac T. Hopper, his son-in-law <a name="gibbons" id="gibbons"></a>James S. Gibbons, and Charles Marriott. After over a year of deliberation, the men were disowned in 1842. Nonetheless, they continued to attend religious meetings, and 40 years later--after the abolition of slavery--New York Yearly Meeting acknowledged regret for disowning them. <em>(Read a <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7951" target="_blank">minute of the disownment proceedings</a> by the Hester Street Overseers. Read letters written by Isaac Hopper referring to his disownment proceedings: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7914" target="_blank">March 1841</a>, <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7585" target="_blank">May 1841</a>, <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7601" target="_blank">October 1841</a> and <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7624" target="_blank">January 1843</a>. Read the <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7964" target="_blank">acknowledgement</a> composed by Aaron M. Powell.)</em></p>
    <h2><a name="l845" id="l845"></a>1845 - The Prison Association</h2>
	<p>Before Isaac Hopper moved to New York, he volunteered as a prison inspector in Philadelphia. Indeed throught his life he was quick to offer advice, aid, and support to convicts. But in 1845, after he retired from his position at the American Anti-Slavery Society, he began to devote all his energies to the causes of prison reform and assisting ex-prisoners. He was a driving force behind the Prison Association from its inception in 1845, until just before his death in 1852. <em>(Read a <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7935" target="_blank">letter of gratitude</a> to Hopper from a former prisoner, and a <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7929" target="_blank">letter of inquiry</a> by Hopper seeking employment for a woman former prisoner. See also this <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7957" target="_blank">resolution</a> from the Executive Committee of the Prison Association accepting Hopper's resignation for reasons of poor health.)</em></p>
    <h2><a name="l852" id="l852"></a>1852 - Death</h2>
	<p>Isaac Hopper died on May 7, 1852. He spoke his final words to Lydia Maria Child, soon to become his biographer: &quot;Tell them I love them <em>all</em>&quot; (Child 480). <em>(Read a <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,10127" target="_blank">memorial</a> of Isaac T. Hopper presented by William Lloyd Garrison at the Yearly Meeting of Congregational Friends at Waterloo, N.Y.)</em></p>
<p align="right"><a href="#top" target="_top">TOP</a></p>
<br />  
    <h2><a name="references"></a>References</h2>
<p>Bacon, Margaret Hope. <em>Lamb's Warrior: The Life of Isaac T. Hopper</em>. New York: Thomas Y. Crowell Company, 1970. </p>
<p><a name="child" id="child"></a>Child, Lydia Maria. <em>Isaac T. Hopper: A True Life</em>. Boston: John P. Jewett and Company, 1854. </p>
<p>Hopper, Isaac T. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7465" target="_blank">Isaac T. Hopper Papers</a>. Friends Historical Library of Swarthmre College, RG5 115 and SC 058.</p>
<p>Hopper, Isaac T. <em>Kidnappers in Philadelphia: Isaac Hopper's Tales of Oppression, 1780-1843, </em>[compiled by] Daniel E. Meaders. New York: Garland Pub., 1994. Series: Studies in African American History and Culture, edited by Graham Hodges. </p>
<p> Hopper, Isaac T. <em>Narrative of the Proceedings of the Monthly Meeting of New-York, and their Subsequent Confirmation by the Quarterly and Yearly Meetings, in the Case of Isaac T. Hopper</em>. New York: 1843. </p>
<div id="topBorder">
    <br />
<a name="sources" id="sources"></a>
    <h2>Related Primary Sources</h2>
    <br />
    
    <table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7946" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=7946&amp;action=2&amp;DMSCALE=12&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=110&amp;DMY=0&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Pennsylvania Hall Retrospectives" alt="Pennsylvania Hall Retrospectives" /></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4605" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=4605&amp;action=2&amp;DMSCALE=10&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=60&amp;DMY=0&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Manumission Society Members" alt="Manumission Society Members" /></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7152" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=7152&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=285&amp;DMY=382&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="NY Assocation of Friends for the Relief of those Held in Slavery" alt="NY Assocation of Friends for the Relief of those Held in Slavery" /></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11699" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11699&amp;action=2&amp;DMSCALE=13&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=143&amp;DMY=178&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Rare Specimen of a Quaker Preacher!" alt="Rare Specimen of a Quaker Preacher!" /></a></div></td>
      </tr>
      <tr>
        <td width="130" valign="top"><div align="left">Isaac T. Hopper Papers</div></td>
         <td width="70"></td>
        <td width="130" valign="top"><div align="left">Hopper's List of Manumission Society Members</div></td>
         <td width="70"></td>
        <td width="130" valign="top"><div align="left">New York Assoc. of Friends for the Relief of Those Held in Slavery</div></td> <td width="70"></td>
        <td width="130" valign="top"><div align="left">Rare Specimen of a Quaker Preacher!</div></td>
      </tr>
    </table>
    <br />
    <p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Hopper&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">view all documents that mention Isaac Hopper</a>)</p>
  
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