<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Glossary </title><!-- InstanceEndEditable -->

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
   <a href="../../quakersandslavery/resources/Q&amp;SGlossary.pdf" target="_blank"> <img class= "floatleft" src="../../quakersandslavery/images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="../../quakersandslavery/resources/Q&amp;SGlossary.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>  
   
    
    <br />
    <h2>Jump to </h2>
    
   
<h3>
<a href="#A">A,</a> 
<a href="#B">B,</a> 
<a href="#C">C,</a> 
<a href="#D">F,</a>
<a href="#E">E,</a>
<a href="#F">F,</a>
<a href="#G">G,</a>
</h3>


<h3>
<a href="#H">H,</a>
<a href="#I">I,</a>
<a href="#K">K,</a>
<a href="#L">L,</a>
<a href="#M">M,</a>
<a href="#N">N,</a>
<a href="#O">O,</a>
</h3>


<h3>
<a href="#P">P,</a>
<a href="#Q">Q,</a>
<a href="#R">R,</a>
<a href="#S">S,</a>
<a href="#T">T,</a>
<a href="#V">V,</a>
<a href="#W">W,</a>
</h3>

<h3>
<a href="#Y">Y,</a>
<a href="#1">1</a>
</h3>


  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    
   <h1>Quakers &amp; Slavery Glossary</h1>
   <br />
<p>The Society of Friends (Quakers) was founded in the middle of the seventeenth century in England by <a href="../commentary/people/index.php#fox">George Fox</a> and others. American Quaker activity has been documented in Massachusetts and Virginia as early as 1656. By the time William Penn's colony, Pennsylvania (whose "lower counties" became Delaware) was founded in 1681, Quakerism was well established in Massachusetts, Rhode Island, Long Island, New Jersey, Maryland, and Virginia. In 1827-28, there was a major doctrinal split among Quakers over the views of <a href="../commentary/people/index.php#hicks">Elias Hicks</a>. Further fragmentation occurred later in the 19th century, particularly in the Midwest. Many of the branches of Quakerism have reunited. </p>

<p><b>Note on abbreviations:</b> Yearly, quarterly, and monthly meetings are frequently abbreviated in correspondence as ym, qm, and mm, respectively.</p>
<p><b>Note on Quaker dating. </b>Quakers objected to using names of days and months which derived from pagan gods, so they substituted numbers.  Thus Sunday was for them "First Day," Monday was "Second Day," etc. January was "First Month," February was "Second Month," etc. Sometimes they used Roman numerals (i-xii) for months, but most often they used Arabic numerals appended by the abbreviation "mo." for example 1mo., 2mo., etc.</p>

<a name="Date"></a><p><b>Note on Quaker dating before 1752.</b> Up to and including 1751 the Julian calendar was used in England, Wales, Ireland and the British colonies overseas.  In these places the year officially began on 25 March.  As an example, 24 March 1750 was followed the next day by 25 March 1751. Because Quakers did not use month names, they called March "1mo." (regardless of the day of the month); April was "2mo.," etc. The examples given above&mdash;24 March 1750, immediately followed by 25 March 1751&mdash;would be rendered in the Quaker style as 24th 1mo. 1750 and 25th 1mo. 1751.  With 1752 the the practice changed; the year 1751 began on 25 March 1751 and ended on 31 December 1751, which was immediately followed by 1 January 1752. In Quaker style, these dates would be rendered 25th 1mo. 1751; 31st 10mo. 1751; 1st 1mo. 1752.</p>

<br />


<h2><a name="A"></a>A</h2>

<p><b>Abolitionism:</b>   The term "abolitionism" is sometimes used to distinguish those who advocated immediate and unconditional end of slavery,  and the term "anti-slavery" used as a generic term to indicate opposition to slavery.  In 18th and 19th century usage, the terms were often used interchangeably. </p>

<p><b>Acknowledgement:</b> A formal, written statement of apology by an offending member to the meeting for having acted in a manner contrary to the rules of discipline. </p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOBOX1=American+Anti-Slavery+Society&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">American Anti-Slavery Society:</a></b> Founded in Philadelphia in 1833 on the basis of immediate emancipation, the American Anti-Slavery Society advocated a broadly based anti-slavery movement. It published an official weekly newspaper, the National Anti-Slavery Standard.</p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Anti-slavery+Fair&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">Anti-Slavery Fairs</a>:</b> Fundraising events where free-produce goods were sold to the public, and the proceeds donated to local anti-slavery groups. The first Anti-Slavery Fair was held in Boston in 1834. See also free-produce. </p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp; CISOVIEWTMP=item_viewer.php&amp; CISOMODE=grid&amp; CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp; CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp; CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp; CISOTITLE=20;title,none,none,none,none&amp; CISOHIERA=20;altern,title,none,none,none&amp; CISOSUPPRESS=1&amp; CISOTYPE=link&amp; CISOOP1=exact&amp; CISOFIELD1=title&amp; CISOBOX1=&amp; CISOOP2=exact&amp; CISOFIELD2=altern&amp; CISOBOX2=&amp; CISOOP3=exact&amp; CISOFIELD3=creato&amp; CISOBOX3=&amp; CISOOP4=exact&amp; CISOFIELD4=CISOSEARCHALL&amp; CISOBOX4=sewing+society&amp; c=exact&amp; CISOROOT=%2FHC_QuakSlav" target="_blank">Anti-Slavery Sewing Societies:</a></b> Associations of women who made clothing to donate to runaway slaves and freedmen. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="B"></a>B</h2>

<p><b><a href="http://trilogy.brynmawr.edu/speccoll/bym/BYMindex.htm" target="_blank">Baltimore Yearly Meeting:</a></b> In 1672, a General Meeting of Friends was held at West River. The Separation of 1828 split the "Yearly Meeting held at Baltimore for the Western Shore of Maryland and the adjacent parts of Pennsylvania and Virginia" in two. The Hicksite branch retained the name, while the Orthodox branch renamed itself The Yearly Meeting of Friends for the Western Shore of Maryland and Adjacent Areas of Pennsylvania and Virginia, in unity with the Ancient Yearly Meeting of Friends. </p>

<p><b>Birthright member:</b> A person whose parents are both members of the Society of Friends, thus making the person a Friend from birth. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="C"></a>C</h2>

<p><b>Certificate of removal:</b> see Removal. </p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=any&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=any&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=any&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=any&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=colonization&amp;c=any&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">Colonization:</a></b> In December 1816, delegates met in Washington, D.C. and organized the American Colonization Society. They voted to begin seeking voluntary removal of U.S. blacks to Africa. That same year, thirty-eight African-American passengers were taken to Sierra Leone by a merchant named Paul Cuffee, a free black member of the Society of Friends. The Colonization Movement was controversial within the Society of Friends.</p>

<p><b>Congregational Friends:</b> see Progressive Friends. </p>

<p><b>Conservative Friends:</b> see Wilburites. </p>

<p><b>Convinced Friend:</b> A person who is not a birthright member who joins the Society of Friends. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="D"></a>D</h2>

<p><b>Discipline:</b> A book compiling rules of behavior for Friends bearing on all matters of church government such as qualification, description and transfer of membership; duties of ministers; methods of filing appeals; and attitudes toward marriage. The book of discipline is currently called Faith and Practice. </p>

<p><b>Disownment:</b> The involuntary termination of membership in a meeting, when a member of a meeting acts contrary to established discipline. Reasons for disownment have changed over time, often reflecting contemporary societal mores. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="E"></a>E</h2>

<p><b>Elders:</b> A small group of men and women appointed to assist and also oversee the ministers. There were monthly, quarterly, and yearly meetings of ministers and elders to oversee the spiritual life of the Society of Friends. See also ministers.</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="F"></a>F</h2>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=Free%20Produce&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank">Free-produce:</a></b> The free-produce movement was a boycott against goods produced by slave labor. The idea of a boycott of slave produce dates from at least the mid 18th century when it was advocated by <a href="../commentary/people/index.php#woolman">John Woolman</a>, Joshua Evans and others. <a href="../commentary/people/index.php#hicks">Elias Hicks'</a> "Observations on the Slavery of Africans" (1810) strongly advocated free-produce. In 1826, Friends in Wilmington, Delaware, drew up a charter for a formal free-produce organization and Baltimore Quaker Benjamin Lundy opened a store that sold only goods obtained by labor from free people. In 1827, the movement expanded with the formation in Philadelphia, Pennsylvania of the "Free Produce Society" founded by Thomas M'Clintock and others. Though the free-produce movement was not intended as a sectarian response to slavery, most of the free-produce associations were Quakers.</p>

<p><b>Free Quakers:</b> In 1781 some Quaker supporters of the Revolution, following their disownment, established an independent body called the Free Quakers. One of them, Samuel Wetherill (1736 - 1816), a Quaker minister, insisted that an individual Quaker could interpret truth in his own way and thus reject the peace testimony. The Free Quakers ceased to exist in 1836, partly because they could not define a common religious belief. </p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Freedmen%27s+Association&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">Friends Association for the Aid and Elevation of the Freedmen:</a></b> The Women's Association of Philadelphia for the Relief of the Freedmen was founded in 1862 to provide charitable assistance to recently freed slaves. Many Quakers were involved in this organization. Friends Association for the Aid and Elevation of the Freedmen was established by Hicksite Quakers of both sexes in 1864. Its Orthodox counterpart was renamed Friends' Freedmen's Association circa 1873.</p>

<p><b>Friends' Freedmen's Association of Philadelphia:</b> An organization of Orthodox Quakers founded in 1863 as Friends' Association of Philadelphia and Its Vicinity, for the Relief of Colored Freemen.  Its purpose was to provide relief and education to freed slaves during and after the Civil War. The name was changed circa 1873.</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="G"></a>G</h2>

<p><b><a href="http://www.swarthmore.edu/library/friends/NYYM/NYYMindex.htm" target="_blank">Genesee Yearly Meeting:</a></b> Genesee Yearly Meeting was set off from the Hicksite branch of New York Yearly Meeting in 1834. It included Quakers who lived in northern and western New York State, southern Canada, and Michigan.</p>

<p><b>Gurneyite Friends (also called "Evangelical Friends"):</b> Following the teachings of English Quaker minister and reformer, John Joseph Gurney (1788 - 1847), Gurneyites were evangelical Quakers believing in the direct and immediate work of the Holy Spirit based on systematic study of the Scriptures and in the centrality to Christianity of the doctrine of atonement. See also Wilburite Friends. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="H"></a>H</h2>

<p><b>Half-Yearly Meeting:</b> A meeting held twice a year, composed of monthly meetings within a convenient geographical area, and with the responsibilities of a quarterly meeting. </p>

<p><b>Hicksite Friends:</b> The Friends called "Hicksite," resulting from the Separation of 1827, placed special emphasis on the Inward Light, a divine spark within each person. They objected to creedal tests and to the authority of ministers and elders. Originally inspired by New York minister Elias Hicks (1748 - 1830), these Friends became increasingly liberal in theology, social practices and church organization over the decades. See also Orthodox Friends; Separation of 1827/28.</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="I"></a>I</h2>

<p><b>Immediatism:</b> The idea that slavery should be ended immediately, unconditionally and without compensation to the owners,  was advocated by English Quaker Elizabeth Heyrick in her pamphlet, "Immediate Not Gradual Emancipation" (1824). The pamphlet was soon reprinted in American and strongly influenced William Lloyd Garrison and the direction of the American Anti-Slavery Society.   Garrison drew a distinction between immediatism and the gradualism of the early anti-slavery movement. </p>

<p><b>Indiana Yearly Meeting:</b> see Ohio and Indiana Yearly Meetings</p>

<p><b>Indiana Yearly Meeting of Anti-Slavery Friends:</b> Indiana Yearly Meeting of Anti-Slavery Friends opened in 1843 as a separation from Indiana Yearly Meeting (Orthodox) and laid down itself and all subordinate bodies, except Newport Monthly Meeting, in 1857.</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="K"></a>K</h2>

<p><b>Kidnapping:</b> In its 18th and 19th century context, kidnapping referred almost exclusively to the stealing of people for the purposes of enslavement.  The protection of the free African-American people from kidnapping was a major concern. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="L"></a>L</h2>

<p><b>Laid down:</b> Term used to denote the official discontinuance of a meeting. </p>

<p><b>London Yearly Meeting:</b> The first meeting of Friends from different parts of Britain to be organized was in Yorkshire in 1656. In 1660, a meeting attended by representatives from Friends from the whole of Britain, decided that an annual General Assembly of the Brethren would be held in London annually, the first being held in Fifth Month (May) 1661.</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="M"></a>M</h2>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=any&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=any&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=any&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=any&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=manumission+manumissions&amp;c=any&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">Manumission:</a></b> Manumission is the legal term for freeing slaves. </p>

<p><b>Marriage certificate:</b> A document containing the marriage vows, signed by the couple and by all in attendance. Quaker marriages occur during the meeting for worship after approval is obtained from the meetings of which the two people are members. Approval is based on a statement of good character and clearness from any other engagements. The clerk usually records a copy of the marriage certificate in the meeting's records. </p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Meeting+for+Sufferings&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">Meeting for Sufferings:</a></b> A committee first appointed in 1756 by Philadelphia Yearly Meeting (New York in 1757, Baltimore in 1778) to raise and administer relief to Friends who suffered distress as a result of Indian conflicts or governmental persecution. Later, similar committees were appointed by quarterly and monthly meetings to assist Friends who encountered hardships due to their opposition to war and slavery. The Meeting for Sufferings also maintained contact with its counterpart in London which had been organized in 1676. The Meeting for Sufferings acted for the Yearly Meeting between sessions and later developed into Representative Meeting of the Yearly Meeting. </p>

<p><b>Meeting for worship:</b> Meetings for worship within Philadelphia Yearly Meeting have always been organized on the principle of silent waiting, where each person may pray, meditate, or "listen to the Light of God" within himself or herself and within the group. Vocal ministry arises when a member feels inwardly led to offer a specific message, prayer, or song. It is not necessary to be a member to attend such a meeting. </p>

<p><b>Membership register:</b> Volume in which the monthly meeting records its members, often including information about births, deaths, marriages, and removals. Such composite registers were unusual prior to the 1827 Separation but became common thereafter. </p>

<p><b>Memorials:</b> On the death of a minister or other important member, the monthly meeting might prepare a brief biography testifying to the spiritual value of this life. The memorial was read at the monthly meeting and forwarded to the quarterly and/or yearly meeting. This practice is no longer generally followed. Yearly Meetings also periodically published printed books of memorials, particularly in the second half of the 19th century. </p>

<p><b>Men's meeting:</b> Monthly, quarterly, and yearly meetings for business were held by men and women in separate sessions until the late 1800's and early 1900's when men and women gradually began to meet in joint session. See also women's meeting. </p>

<p><b>Ministers:</b> Historically, men and women who were recognized as being unusually inspired by the Spirit of God and provided most of the vocal messages in meeting for worship. Ministers were formally designated or "recorded" by the monthly meeting, and regular meetings of ministers and elders, called Preparative Meetings of Ministers and Elders, or Select Meetings, were held to consider the spiritual life of the meeting. See also elders.</p>

<p><b>Minutes:</b> Official records of proceedings kept for all Quaker business meetings (preparative, monthly, quarterly, and yearly meetings), along with their committees. </p>

<p><b>Monthly meeting: </b>The basic unit of Quaker administration, which holds regular monthly business meetings. Only members can participate. It has responsibility for care of members, authorizes removals and marriages, maintains discipline, considers the queries, manages meeting property, fosters social concerns, and reports regularly to the quarterly meeting. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="N"></a>N</h2>

<p><b>New England Yearly Meeting:</b> Friends began holding general meetings on Rhode Island in 1661, and held business sessions under the name Rhode Island Yearly Meeting beginning with the session at Portsmouth attended by <a href="../commentary/people/index.php#fox">George Fox</a> in 1672/06. The structure of New England was largely unaffected by the Hicksite Separation in 1828, except for a small group of Friends on Nantucket Island, but the Yearly Meeting separated into Gurneyite and Wilburite branches in 1845, named, respectively, the Yearly Meeting of Friends for New England and the New England Yearly Meeting of Friends. New England Yearly Meeting covered the area from Maine to Rhode Island and west to eastern Vermont.</p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=New+York+Association+of+Friends+for+the+Relief+&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">New York Association of Friends for the Relief of Those Held in Slavery and the Improvement of the Free People of Color:</a></b> A Quaker society in New York City, organized in 1839. Its purpose was to support the abolition of slavery and educational charities for blacks.</p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=New-York+Society+for+Promoting+the+Manumission+of+Slaves&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">The New-York Society for Promoting the Manumission of Slaves,and Protecting Such of Them as Have Been, or May Be Liberated:</a> </b> Formed in 1785, the society opened the African Free School two years afterwards. Its original members included John Jay and Alexander Hamilton; later, many members of the Society of Friends, including <a href="../commentary/people/index.php#hopper">Isaac T. Hopper</a>, joined the society.</p>

<p><b><a href="http://www.swarthmore.edu/library/friends/NYYM/NYYMindex.htm" target="_blank">New York Yearly Meeting:</a> </b>New York Yearly Meeting was first held in 1696 as the Yearly Meeting at Flushing or Long Island, consisting essentially of the Flushing Quarterly Meeting that was set off from New England Yearly Meeting. It separated into Hicksite and Orthodox branches in 1828. The Hicksite branch suffered a Progressive (or Congregational) separation in 1846 when the larger body in Marlborough Monthly Meeting withdrew, later becoming the Friends of Human Progress. The Scipio, Farmington and Ferrisburgh Quarterly Meetings of the Orthodox Yearly Meeting further divided in 1847 in response to the Gurneyite/Wilburite separation in New England Yearly Meeting, leading to the organization in 1853 of the New York Yearly Meeting held at Poplar Ridge (generally called Primitive). During parts of the 19th century, New York Yearly Meeting included New York State, Northern New Jersey, southern Canada, western Vermont, and Michigan.</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="O"></a>O</h2>

<p><b><a href="http://www.swarthmore.edu/library/friends/RG2/ohioym.xml" target="_blank">Ohio and Indiana Yearly Meetings:</a></b> The Ohio Yearly Meeting was set off from Baltimore Yearly Meeting in 1812 for Friends west of the Allegheny Mountains (including Virginia, Pennsylvania, Ohio, and Indiana). It opened in 1813 at Short Creek in Mount Pleasant, Ohio. Indiana Yearly Meeting was set off in 1821, composed of Friends in the states of Indiana, Illinois, and the western part of Ohio. Ohio Yearly Meeting separated into Hicksite and Orthodox branches in 1828, and Congregational/Progressive meetings split off in 1850-1852. In 1854, the Orthodox branch further divided into Wilburite and Gurneyite sections.</p>

<p><b>Orthodox Friends:</b> Members of a branch of Quakers resulting from the Separation of 1827 who were evangelical and stressed the Jesus Christ of history and reliance on the Bible as the authoritative source of religious truth. See also Hicksite Friends; Separation of 1827/28.</p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="P"></a>P</h2>

<p><b>Particular meeting:</b> A formally-established meeting for worship under the care of a monthly meeting. </p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp; CISOVIEWTMP=item_viewer.php&amp; CISOMODE=grid&amp; CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp; CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp; CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp; CISOTITLE=20;title,none,none,none,none&amp; CISOHIERA=20;altern,title,none,none,none&amp; CISOSUPPRESS=1&amp; CISOTYPE=link&amp; CISOOP1=exact&amp; CISOFIELD1=title&amp; CISOBOX1=&amp; CISOOP2=exact&amp; CISOFIELD2=altern&amp; CISOBOX2=&amp; CISOOP3=exact&amp; CISOFIELD3=creato&amp; CISOBOX3=&amp; CISOOP4=exact&amp; CISOFIELD4=CISOSEARCHALL&amp; CISOBOX4=Pennsylvania+Hall&amp; c=exact&amp; CISOROOT=%2FHC_QuakSlav" target="_blank">Pennsylvania Hall Association:</a> </b>The Pennsylvania Hall Association was a stockholders association formed in 1837 to erect a building in Philadelphia, Pennsylvania, dedicated "to Liberty and the Rights of Man." The Hall was erected on 6th Street, between Cherry and Race Streets.  Many of the primary movers behind the Association were Quakers involved in the anti-slavery movement.  The building was opened on May 14, 1838, but, as a symbol of the abolitionist movement, it was destroyed by an angry mob on May 17, 1838.</p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp; CISOVIEWTMP=item_viewer.php&amp; CISOMODE=grid&amp; CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp; CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp; CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp; CISOTITLE=20;title,none,none,none,none&amp; CISOHIERA=20;altern,title,none,none,none&amp; CISOSUPPRESS=1&amp; CISOTYPE=link&amp; CISOOP1=exact&amp; CISOFIELD1=title&amp; CISOBOX1=&amp; CISOOP2=exact&amp; CISOFIELD2=altern&amp; CISOBOX2=&amp; CISOOP3=exact&amp; CISOFIELD3=creato&amp; CISOBOX3=&amp; CISOOP4=exact&amp; CISOFIELD4=CISOSEARCHALL&amp; CISOBOX4=Pennsylvania+Society+for+Promoting+the+Abolition+of+Slavery&amp; c=exact&amp; CISOROOT=%2FHC_QuakSlav" target="_blank">Pennsylvania Society for Promoting the Abolition of Slavery</a>:</b> The first anti-slavery organization in the United States, begun in Philadelphia in 1774. Founded by the Quaker <a href="../commentary/people/index.php#benezet">Anthony Benezet</a>, its membership was substantially composed of Friends. It was reorganized in 1784, and again in 1787, when it was renamed the Pennsylvania Society for Promoting the Abolition of Slavery, the Relief of Free Negroes Unlawfully Held in Bondage, and for Improving the Condition of the African Race.</p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Pennsylvania+Yearly+Meeting+of+Progressive+Friends&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">Pennsylvania Yearly Meeting of Progressive Friends:</a></b> Opened at Old Kennett, Chester County, Pennsylvania, in 1853 as a separation from meetings in the Western Quarterly Meeting of Philadelphia Yearly Meeting (Hicksite). See Progressive Friends.</p>

<p><b><a href="http://trilogy.brynmawr.edu/speccoll/PYMindex.htm" target="_blank">Philadelphia Yearly Meeting:</a></b> A general meeting for Friends in the Delaware Valley area was first convened at Burlington in 1681. The first general meeting held in Philadelphia was in 1683. In 1685, the meetings in New Jersey and Pennsylvania were combined into one yearly meeting with alternate sessions at Philadelphia and Burlington. Since 1760, all yearly meetings have been held in Philadelphia. The great Separation among Philadelphia Friends occurred at the Yearly Meeting of 1827. From that year, there were two Philadelphia Yearly Meetings, one of the Orthodox, the other of the Hicksite branch. The area of the Yearly Meeting has diminished over time; at the time of the Civil War it included eastern Pennsylvania, southern New Jersey, Delaware, and the Eastern Shore of Maryland.</p>

<p><b>Preparative meeting:</b> A regularly-organized business meeting of a single congregation which prepared business to be presented to the monthly meeting. The scope of business as recorded in its minutes was normally limited to responses to queries and matters of property and school oversight. </p>

<p><b>Prize Goods:</b> Goods seized from enemy ships by naval or privateer vessels and sold to the public; as part of their testimony against war, Quakers were forbidden to purchase them. Elias Hicks and other Quakers argued that slave produced goods, having been created by people who were enslaved by war and violence, were prize goods. See free-produce. </p>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Progressive+Friends&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">Progressive Friends (also called "Congregational Friends"):</a> </b> A reform movement which developed among Hicksite Friends in the 1840s, but also included many non-Quaker liberals and radicals. The largest group became formally organized as the Pennsylvania Yearly Meeting of Progressive Friends, which met at Longwood in Chester County, Pennsylvania, from 1853 to 1940. Progressive Friends advocated a religion of humanity which stressed the inherent goodness and perfectibility of humankind and promoted such reform causes as abolition of slavery, temperance, women's rights, opposition to capital punishment, prison reform, homestead legislation, pacifism, Indian rights, economic regulation, and practical and co-educational schooling. See also Pennsylvania Yearly Meetings of Progressive Friends; Yearly Meeting of Congregational Friends (Waterloo, N.Y.). </p>



<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="Q"></a>Q</h2>

<p><b>Quarterly meeting:</b> Meetings for business held four times per year, attended by representatives of all monthly meetings in a region. It is an intermediary between the monthly and yearly meeting, serves as an appellate body for disciplinary matters, and considers problems too large for a local meeting to solve. A quarterly meeting holds the authority to establish or discontinue a monthly, preparative, or particular meeting for worship. It collects financial assessments from each monthly meeting in accordance with the quota established by the yearly meeting. </p>

<p><b>Queries:</b> A set of questions, revised periodically, which were to be answered in writing by preparative, monthly, and quarterly meetings and reported to the Yearly Meeting. The queries concerned conduct of individuals and practices of the meetings, and provided one means of assuring uniformity in discipline. Meetings of ministers and elders also responded to queries.  </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="R"></a>R</h2>

<p><b>Removal:</b> A certificate of removal is a document given to persons who are transferring their membership from one monthly meeting to another. Their removal testifies that they are members in good standing with the meetings they are leaving. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="S"></a>S</h2>

<p><b>Separation of 1827/28:</b> As a result of a schism among Quakers over the teachings of <a href="../commentary/people/index.php#hicks">Elias Hicks</a>, in 1827-28 some meetings split into "Hicksite" and "Orthodox" branches. Two Philadelphia Yearly Meetings were formed, "Race Street" and "Arch Street," meetings; in Baltimore, the bodies were distinguished as "Stoney Run" and "Homewood;" New York Yearly Meeting split into "15th Street" and "20th Street." See also Hicksite Friends; Orthodox Friends.</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="T"></a>T</h2>

<p><b>Testimonies:</b> Traditionally, Quakers developed a series of specific practices, often called testimonies, which expressed ethical conduct of truthfulness, simplicity, equality, and peace. Testimonies include rejection of oaths, use of "thee" and "thou" in speech, plain dress, refusal to take off hats to social superiors, equality of men and women, opposition to slavery, and refusal to bear arms. Testimonies also can refer to official documents, frequently disownments and memorials, prepared by Quaker business meetings as part of what they considered witnessing to truth. </p>

<p><b>Traveling certificate or minute:</b> A document issued by a meeting to a member in good standing (normally a recorded minister), allowing him or her to travel to other meetings to visit or preach. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="V"></a>V</h2>

<p><b><a href="http://trilogy.brynmawr.edu/speccoll/bym/virgym.xml" target="_blank">Virginia Yearly Meeting:</a></b> Virginia Yearly Meeting was established in 1672 and at various times included thirteen Monthly Meetings. In 1777, Friends in Virginia made the decision to disown members holding slaves. By 1784 Friends persuaded the Virginia legislature to pass a law permitting manumission and within six years nearly all Quaker slave-holders had freed their slaves. Life in slave states became difficult and many Quakers from Virginia and surrounding states migrated west. There was no Hicksite Separation in this area. Virginia Yearly Meeting was laid down in 1843. At this time the Meeting was assumed as a Half-Years Meeting under Baltimore Yearly Meeting (Orthodox).</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="W"></a>W</h2>

<p><b>Wilburite Friends (also called "Conservative Friends"):</b> Orthodox Quakers who identified with prominent Rhode Island Quaker minister John Wilbur (1774 - 1856) in his criticisms of English Quaker minister Joseph John Gurney (1788 - 1847). Wilburites emphasized the plain life, separation from the world, strict enforcement of the discipline, guidance by the Inward Light, and close adherence to writings of early Quakers. The differences led to major separations in New England and Ohio Yearly Meetings, and a minor separation in New York Yearly Meeting in the 1840s and 1850s. Philadelphia Yearly Meeting (Orthodox) maintained a fragile unity, despite tensions between a Wilburite majority and a Gurneyite minority. A second series of splits for similar reasons occurred in the late 19th and early 20th centuries, resulting in Yearly Meetings of Conservative Friends. See also Gurneyite Friends.</p>

<p><b>Women's meeting:</b> Separate business meetings for women alongside the men's meetings were held by preparative, monthly, quarterly, and yearly meetings. Women appointed representatives, communicated with other women's meetings, granted or received certificates of removal, approved marriages for women members. The men's meeting rarely overruled the women's meetings on removals, marriages or questions regarding matters of discipline. Women usually had to work with much smaller funds than men's meetings. Gradually, beginning late in the 19th century, men and women met jointly to conduct business. See also men's meeting.</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="Y"></a>Y</h2>

<p><b><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp; CISOVIEWTMP=item_viewer.php&amp; CISOMODE=grid&amp; CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp; CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp; CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp; CISOTITLE=20;title,none,none,none,none&amp; CISOHIERA=20;altern,title,none,none,none&amp; CISOSUPPRESS=1&amp; CISOTYPE=link&amp; CISOOP1=all&amp; CISOFIELD1=title&amp; CISOBOX1=&amp; CISOOP2=all&amp; CISOFIELD2=altern&amp; CISOBOX2=&amp; CISOOP3=all&amp; CISOFIELD3=creato&amp; CISOBOX3=&amp; CISOOP4=all&amp; CISOFIELD4=CISOSEARCHALL&amp; CISOBOX4=congregational&amp; c=all&amp; CISOROOT=%2FHC_QuakSlav" target="_blank">Yearly Meeting of Congregational Friends (Waterloo, N.Y.):</a></b> Progressive Friends in the Scipio, Farmington and Michigan Quarterly Meetings separated in 1848 from Genesee Yearly Meeting: Waterloo Yearly Meeting of opened in 1849 under the Basis of Religious Association (1848). It was composed of the former Junius Monthly Meeting and other Friends separating from the Scipio Quarterly Meeting. It became the Annual Meeting of the Friends of Human Progress in 1854, and continued until approximately 1884.</p>

<p><b>Yearly meeting:</b> A large autonomous body of Quakers, which meets for several days once a year. In theory, its decisions are binding on the monthly and quarterly meetings within its jurisdiction and on the committees and staff which carry out the work of the yearly meeting. It meets annually to conduct business, formulate the discipline, receive reports and concerns from its constituent meetings, review the state of the Society, and communicate with other yearly meetings and non-Quaker organizations.</p>

<h2><a name="1"></a>1</h2>

<p><b>1mo., 2mo., etc.:</b> January, February, etc. See Note on <a href="#Date">Quaker dating</a> above.</p>

<p align="right"><a href="#top" target="_top">TOP</a> </p>


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