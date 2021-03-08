<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Images </title><!-- InstanceEndEditable -->

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
   <a href="../../quakersandslavery/resources/Q&amp;SList_Images.pdf" target="_blank"> <img class= "floatleft" src="../../quakersandslavery/images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="../../quakersandslavery/resources/Q&amp;SList_Images.pdf" target="_blank">Printer Friendly PDF</a>
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
<a href="#O">O,</a>
</h3>


<h3>
<a href="#P">P,</a>

<a href="#R">R,</a>
<a href="#S">S,</a>
<a href="#T">T,</a>
<a href="#U">U,</a>
<a href="#V">V,</a>
<a href="#W">W,</a>
<a href="#Y">Y</a>
</h3>



<!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    
 <h1> Quakers &amp; Slavery List of Images</h1>
 

<br />

<h2><a name="A"></a>A</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7946" target="_blank">Abby Hopper Gibbons letter [extract].</a> Gibbons, Abby Hopper, 1801-1893. New York (N.Y.): Date 1838-09-28. Friends Historical Library of Swarthmore College, MSS 031. </p>


<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11174" target="_blank">Abolitionist Society Seal.</a> Friends Historical Library of Swarthmore College, Relic 203. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11180" target="_blank">Anti-slavery Bag.</a> 1898-12-17. Friends Historical Library of Swarthmore College, Whittier MSS, Relic 295. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11169" target="_blank">The Anti-Slavery Harp [excerpt].</a> Brown, William Wells, 1814?-1884. Boston (Mass.): 1848. Friends Historical Library of Swarthmore College, BX7612 pam. vol. 144. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11172" target="_blank">Anti-Slavery medal.</a> Friends Historical Library of Swarthmore College, Relic 141. </p>

<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="B"></a>B</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9847" target="_blank">Benezet instructing colored children.</a>  1850.  Haverford College Special Collections, manuscript collection 852. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,395" target="_blank">Benjamin Lay.</a> Pinx, W. Williams. Haverford College Special Collections.  </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9589" target="_blank">Burning of Pennsylvania Hall.</a> Sartain, John, 1808-1897. 1838.  Haverford College Special Collections.  </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11163" target="_blank">The Burning of Pennsylvania Hall.</a> Sartain, John, 1808-1897. Philadelphia (Pa.): 1838. Friends Historical Library of Swarthmore College, F158.8.P4 P4. </p>

<h2><a name="C"></a>C</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11130" target="_blank">CHARLEY, A Slave Boy from New Orleans.</a> Paxson, Charles. New York (N.Y.): 1864. Friends Historical Library of Swarthmore College, PA 100/R3/N4. </p>

<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="D"></a>D</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11145" target="_blank">David Cooper.</a> Friends Historical Library of Swarthmore College, PA 100/C447. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11164" target="_blank">Destruction of the Hall.</a> Gilbert, Reuben S. Philadelphia (Pa.): 1838. Friends Historical Library of Swarthmore College, F158.8.P4 P4. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11147" target="_blank">Dillwyn Parrish.</a> Gutekunst, Frederick, 1831-1917. Philadelphia (Pa.). Friends Historical Library of Swarthmore College, PA 100/P154/001. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="E"></a>E</h2>


<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,12044" target="_blank">East India Sugar Basins Advertisement</a>. London (England): Camberwell Press. Friends Historical Library of Swarthmore College, PA 56 #39.</p> 

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11151" target="_blank">Edward Parrish.</a> Friends Historical Library of Swarthmore College, PA 100/P158. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11152" target="_blank">Edward Parrish Portrait.</a> Parrish, Anne Lodge, 1858-1946. 1904. Swarthmore College, Parrish Parlor East. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11150" target="_blank">Elias Hicks.</a> Field, Richard, 1793-1875. New York (N.Y.): 1829-04. Friends Historical Library of Swarthmore College, PA 100/H312/040. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11154" target="_blank">Elihu Burritt.</a> Elliott &amp; Fry. London (England)Great Britain: [1846?]. Swarthmore College Peace Collection, DG 96. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11156" target="_blank">Elijah F. Pennypacker.</a> [1883]. Friends Historical Library of Swarthmore College, E450 .S63. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11159" target="_blank">Executive Committe of the Pennsylvania Anti-Slavery Society.</a> 1851? Friends Historical Library of Swarthmore College, PA 100/R3/A5/008A. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="F"></a>F</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1564" target="_blank">Female Teachers of the Friends Freedman Association.</a>  Haverford College Special Collections, duplicate photo box.  </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11695" target="_blank">Friends Meeting House Merion.</a> Reinagle, Hugh, 1788-1834. 1830. C.G. Childs Engraver. Haverford College Special Collections, manuscript collection 912. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="G"></a>G</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11171" target="_blank">Genius of Universal Emancipation [excerpt].</a> Baltimore (Md.): Genius of universal emancipation (Baltimore, Md.), 1829-10-02. Friends Historical Library of Swarthmore College. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11149" target="_blank">George Fox.</a> Great Britain: 1824. Friends Historical Library of Swarthmore College, PA 100/F212/024. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="H"></a>H</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9590" target="_blank">Home of Anthony Benezet.</a> Haverford College Special Collections, manuscript collection 852. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="I"></a>I</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11153" target="_blank">Isaac T. Hopper Portrait.</a> Thayer, Theodora W., 1868-1905. Swarthmore College, Parrish Parlor West. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="J"></a>J</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11168" target="_blank">J. Miller McKim.</a> Philadelphia (Pa.): 1851. Friends Historical Library of Swarthmore College, PA 100/R3/A5/008A. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11166" target="_blank">James Mott. Phillips, H. C.</a> Philadelphia (Pa.): [ca.1860]. Friends Historical Library of Swarthmore College, PA 100/P7/M67/004. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11148" target="_blank">John G. Whittier. </a>Friends Historical Library of Swarthmore College, PA 100/W. </p>


<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11577" target="_blank">Joseph Dugdale.</a> Friends Historical Library of Swarthmore College, D 328/002.  </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11140" target="_blank">Joseph Dugdale.</a> Leisenring, W. K. Mount Pleasant (Iowa): 1876. Friends Historical Library of Swarthmore College, PA 102 box 2. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="L"></a>L</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11709" target="_blank">LINES Written under a Print representing a colored person kneeling in chains.</a> Philadelphia (Pa.): 1837-07. Friends Historical Library of Swarthmore College, BX7612 pam.vol.212.</p>
<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11165" target="_blank">Lucretia Mott.</a> Furness, William Henry, 1802-1896. 1858. Friends Historical Library of Swarthmore College, reading room, PA 100/P7/M68/024. </p>
<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3705" target="_blank">Lucretia Mott quietly took her place beside the colored man... </a> Haverford College Special Collections, manuscript collection 851, Box 13, Folder 13. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11440" target="_blank">Lucretia Mott to C. W. Pennock [extract].</a> Mott, Lucretia, 1793-1880. Philadelphia (Pa.): 1843-10-26, Friends Historical Library of Swarthmore College, Mott MSS. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="M"></a>M</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11722" target="_blank">Maps from Carey's General atlas, improved and enlarged. </a>Carey's General atlas, improved and enlarged : 	being a collection of maps of the world and quarters; their principal empires, kingdoms, &amp;c . [extracts]. Carey, Mathew, 1760-1839. 1818. Philadelphia. Haverford College Special Collections, G1319 1818 .C3.	</p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11580" target="_blank">The Mirror of Misery [excerpt].</a> New York (N.Y.): Wood, Samuel S., 1789-1861, 1814. Friends Historical Library of Swarthmore College, PA 56 #53.</p>  

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11142" target="_blank">Moses Brown.</a> 1836-07-04. Friends Historical Library of Swarthmore College, PA 100/B92. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="N"></a>N</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8555" target="_blank">Note from Joseph Sturge.</a> Sturge, Joseph, 1793-1859. 1842-12-02. MSS 004</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="O"></a>O</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11167" target="_blank">Old Charlotte.</a>[ca.1855]. Friends Historical Library of Swarthmore College, PA 107/136. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11137" target="_blank">Our countrymen in chains!.</a> Whittier, John Greenleaf, 1807-1892. New York (N.Y.): Anti-slavery Society of New York (New York, N.Y.). Friends Historical Library of Swarthmore College, 3 1797 00626 3457. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="P"></a>P</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11727" target="_blank">Passmore Williamson.</a> James Cremer &amp; Co. Friends Historical Library of Swarthmore College, PA 100/P7/W. </p>
<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11146" target="_blank">Paul Cuffe.</a> Friends Historical Library of Swarthmore College, PA 100/C613. </p>
<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11162" target="_blank">Pennsylvania Hall.</a> Philadelphia (Pa.): 1838. Friends Historical Library of Swarthmore College, F158.8.P4 P4. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7111" target="_blank">Philadelphia in Slavery Days.</a> Philadelphia (Pa.): Public Ledger, 1902-12-14. Friends Historical Library of Swarthmore College, PG 7. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7152" target="_blank">Protective Case.</a> New-York Association of Friends for the Relief of Those Held in Slavery and the Improvement of Free People of Color. New York (N.Y.). Friends Historical Library of Swarthmore College, RG4/051. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="R"></a>R</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11160" target="_blank">Rebecca. A Slave Girl from New Orleans.</a> M'Clees, Jas. E. (James E.). Philadelphia (Pa.): 1863. Friends Historical Library of Swarthmore College, PA 100/R3/N4/005. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11129" target="_blank">Rebecca. A Slave Girl from New Orleans.</a> Paxson, Charles. New York (N.Y.): 1864. Friends Historical Library of Swarthmore College, PA 74/2/298. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11133" target="_blank">REBECCA, an Emancipated Slave, from New Orleans.</a> Kimball. New York (N.Y.): 1863. Friends Historical Library of Swarthmore College, PA 100/R3/N4/006. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11132" target="_blank">REBECCA, AUGUSTA and ROSA, Emancipated Slaves, from New Orleans.</a> Kimball. New York (N.Y.): 1863. Friends Historical Library of Swarthmore College, PA 100/R3/N4/004. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11176" target="_blank">'Remember the Slave' pincushion.</a> Friends Historical Library of Swarthmore College, PA 56 #43. </p>
<p> <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11710" target="_blank">Rescue of Jane Johnson.</a> Philadelphia (Pa.): 1872. Friends Historical Library of Swarthmore College, E450 .S85.</p>
<p><a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,11158" target="_blank">The Resurrection of Henry Box Brown at Philadelphia.</a> Rosenthal, L. N. (Louis N.). Philadelphia (Pa.). Friends Historical Library of Swarthmore College, PA 100/R3/A5/004.</p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11126" target="_blank">Robert Purvis.</a> Hurn, J. W. Philadelphia (Pa.). Friends Historical Library of Swarthmore College, PA 100/P. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11128" target="_blank">Rosa. A Slave Girl from New Orleans.</a> Paxson, Charles. New York (N.Y.): 1864. Friends Historical Library of Swarthmore College, PA 100/R3/N4/007. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11138" target="_blank">Ruth Dugdale.</a> Leisenring, W. K. Mount Pleasant (Iowa): [1876]. Friends Historical Library of Swarthmore College, PA 102 box 2. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="S"></a>S</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11139" target="_blank">Samuel M. Janney. Henszey &amp; Co.</a> Philadelphia (Pa.): Friends Historical Library of Swarthmore College, PA 100/J143. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11807" target="_blank">The Slave's Friend [excerpts]</a>. American Anti-Slavery Society. New York (N.Y.): 1836. Friends Historical Library of Swarthmore College, HT 851.S53.</p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11136" target="_blank">[Slaves learning].</a> Phillips, H. C. Philadelphia (Pa.). Friends Historical Library of Swarthmore College, PA 100/R3/N4/002. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11170" target="_blank">Some Historical Account of Guinea... [excerpt].</a> Benezet, Anthony, 1713-1784. London (England): 1788. Friends Historical Library of Swarthmore College, BX7615.B4757 1788. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11175" target="_blank">Sugar basin.</a> Friends Historical Library of Swarthmore College, PA 56 #38. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="T"></a>T</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11144" target="_blank">T. Clarkson et Wilberforce.</a> Hardiviller, Charles Achille d', 1795-ca. 1835. 1835. Friends Historical Library of Swarthmore College, PA 100/C271/010. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8646" target="_blank">Table &amp; Inkstand.</a> Trask, A. K. P. Philadelphia (Pa.): [1883]-12-06. Friends Historical Library of Swarthmore College, SC 086. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11155" target="_blank">Theodore Parker.</a> Osgood, James R. (James Ripley), 1836-1892, 1849. Swarthmore College, BX9869 .P3 F9. </p>

<p><a href=" http://triptych.brynmawr.edu/u?/HC_QuakSlav,3672" target="_blank">Thomas Clarkson 1840 commemorative coin.</a>  Haverford College Special Collections, Com 3.3.
 </p>
 
<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11141" target="_blank">Thomas Garrett.</a> Hurn, John W. Philadelphia (Pa.). Friends Historical Library of Swarthmore College, PA 100/G136. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11157" target="_blank">Traite des Negres.</a> Delaunay, Nicolas, 1739-1792. Paris (France). Friends Historical Library of Swarthmore College, PA 100/R3/A5/001. </p>
<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11711" target="_blank">A Tribute to the Negro [excerpt].</a> Great Britain: 1848. Friends Historical Library of Swarthmore College, BX7616.A73 T8.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="U"></a>U</h2>
<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11712" target="_blank">Uncle Tom's Cabin. George et Elisa Chez les Quakers.</a> Regnier, Claude. Paris (France). Friends Historical Library of Swarthmore College, ++Art Race Relations. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11696" target="_blank">Unknown Quaker Abolitionist.</a> Artist unknown.  Haverford College Special Collections, 988 B-R. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="V"></a>V</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11161" target="_blank">Virtuous Harry, or Set a Thief to Catch a Thief!</a> Baillie, James. New York (N.Y.): 1844. Friends Historical Library of Swarthmore College, PA 250/107. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="W"></a>W</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11131" target="_blank">WILSON CHINN, a Branded Slave from Louisiana.</a> Kimball. New York (N.Y.): 1863. Friends Historical Library of Swarthmore College, PA 100/R3/N4/001. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11127" target="_blank">WILSON, CHARLEY, REBECCA &amp; ROSA, Slaves from New Orleans.</a> Paxson, Charles. 1864. Friends Historical Library of Swarthmore College, PA 100/R3/N4/003. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11173" target="_blank">[Woman's Rights] Anti-Slavery medal.</a> 1838. Friends Historical Library of Swarthmore College, Relic 142. </p>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11177" target="_blank">Workbag [purse?].</a> Friends Historical Library of Swarthmore College, PA 56 #40. 	</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="Y"></a>Y</h2>

<p><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11143" target="_blank">Yours truly, Thomas Clarkson.</a> Cochran, John, fl. 1821-1865. Great Britain: Fisher, Son, &amp; Co., 	1839. Friends Historical Library of Swarthmore College, PA 100/C271/005. 	</p>



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