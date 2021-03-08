<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Rescue of Jane Johnson</title><!-- InstanceEndEditable -->

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
   <a href="johnson.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="johnson.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>
 
    <h2>Jump to Section</h2>
    <p></p>
	<h3><a href="#featured">Featured Image</a></h3>
	<h3><a href="#philadelphia">Philadelphia, 1855</a></h3>
	<h3><a href="#escape">Escape</a></h3>
	<h3><a href="#williamson">Case of Passmore Williamson</a></h3>
	<h3><a href="#still">Case of William Still et al</a></h3>
    <h3><a href="#references">References</a></h3>
    <h3><a href="#sources">Primary Sources</a></h3>
	<p>&nbsp;</p>
    <h2>Related Topics</h2>
	<h3><a href="../organizations/underground_railroad.php">Underground Railroad</a></h3>
	<h3>&nbsp;</h3>
	
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11727" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11727&amp;action=2&amp;DMSCALE=20&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=30&amp;DMY=60&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" border="0" alt="William Still" /></a>
        <h1>Rescue of Jane Johnson</h1>
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
		  <p align="right"><i>Rescue of Jane Johnson and Her Children</i></p>
		  <div align="right" ><i>Jane Johnson's dramatic rescue from a ferry in Philadelphia is pictured in </i>The Underground Rail Road<i> by William Still (Philadelphia: Porter &amp; Coates, 1872, p. 89), where it appears opposite a narrative account of the event. William Still is pictured in a tall top hat at the center of the image, escorting Johnson and her children off the ferry. Wearing a beard and traditional Quaker garb, Passmore Williamson restrains John H. Wheeler, who is shown from the back, his face in shadow, his hands grasping for his former slaves.</i></div></td>
          <td><a title="Uncle Tom's Cabin" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11710" target="_blank"><img style="padding:10px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11710&amp;action=2&amp;DMSCALE=6&amp;DMWIDTH=300&amp;DMHEIGHT=200&amp;DMX=0&amp;DMY=0&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Rescue of Johnson"/></a></td>
        </tr>
      </table>     
      <br />
    <h2><a name="philadelphia" id="philadelphia"></a>Philadelphia, 1855</h2>
<p> In 1855, the city of Philadelphia was divided on the question of slavery. On the one hand, it was the base of several outspoken anti-slavery organizations, largely driven by the city's resident population of Friends. On the other hand, it was also home to a contingent of pro-slavery sympathizers, a fact made all too obvious by the mob violence against the abolitionist &quot;Temple of Free Speech,&quot; Pennsylvania Hall, in 1838. Pennsylvania was a free state bordered by slave states; it was a transitional space with an ambivalent population, where some escaped slaves settled but far more only passed through. Exact figures do not exist, but William Still recorded that the Vigilance Committee (of which he was Chairman) saw 60 fugitive slaves pass through Philadelphia in a single month in 1857 (Still 97). </p>
<p> The presence, temporary or permanent, of escaped slaves became an increasingly complex issue with the passage of the Fugitive Slave Act of 1850. The new federal law, part of the Compromise of 1850, strengthened the 1793 fugitive slave law as a concession to slaveholders.&nbsp; It was now legal for law enforcement officers to conscript any citizen for assistance in securing an escaped slave; those who refused were liable to imprisonment and fines. At the same time, it became easier to allege a black was an escaped slave, and impossible for him to defend himself in court, resulting in the kidnapping into slavery of free blacks who had obtained their freedom quite legally. </p>
<p>Much to the slaveholders' chagrin, the 1850 act had the opposite of its intended effect. It rallied the anger of existing abolitionists, but moreover, it provoked a backlash amongst previously ambivalent northerners now faced with the prospect of being drafted to hunt down a fugitive slave. Abolitionists and northern states' rights advocates disavowed the federal slave law, placing authority in state &quot;Personal Liberty Laws&quot; instead. In 1842, Pennsylvania's personal liberty law had been declared unconstitutional by Roger B. Taney's Supreme Court (which would later rule on the landmark Dred Scott case in 1857); but Pennsylvania passed a modified version of its personal liberty law in 1847. It was under this 1847 law that Pennsylvania conductors of the Underground Railroad claimed the right to continue their activities. (Brandt 88) </p>
<p>Amidst the confusion surrounding fugitive slaves' rights, the Pennsylvania Anti-Slavery Society maintained a Vigilance Committee that was charged with assisting runaway slaves in Philadelphia. In 1855, as the result of an 1852 reorganization, the acting subcommittee consisted of four men with William Still as chair (Brandt 27). Only one of the four was white: Passmore Williamson, 1822-1895. A birthright Friend, Williamson was disowned in 1848 for neglecting to attend meeting, but he nevertheless continued to live a Quaker lifestyle for the rest of his life. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="escape" id="escape"></a>Escape </h2>
<p>In July of 1855, John H. Wheeler, a North Carolina politician and the United States ambassador to Nicaragua, brought his slave Jane Johnson and her two children with him on a journey to South America. Although they would be travelling through free states--even stopping overnight in Philadelphia and New York--Wheeler apparently was not overly concerned that his slaves would attempt to escape. He planned to keep a close eye on his slaves, but he underestimated the will and resolve of Jane. While still in Philadelphia, she approached some free blacks and confided her desire to run away; someone sent a hurried message to the Pennsylvania Anti-Slavery Society; and just after Wheeler had settled with his slaves on a ferry to depart from Philadelphia, Passmore Williamson, William Still, and five colored dockworkers boarded the ship. </p>
<p>Passmore Williamson quickly located Johnson and explained to her that she was free. William Still later recalled his words: &quot;You are entitled to your freedom according to the laws of Pennsylvania, having been brought into the State by your owner&quot; (Still 88). Wheeler protested, but two of the colored dockworkers, John Ballard and William Curtis, held him back. Johnson exclaimed, &quot;I am not free, but I want my freedom--ALWAYS wanted to be free!! but he holds me&quot; (Still 89). William Still led Johnson and her children off the ferry and into a carriage, and that day, July 18, 1855, they were free. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="williamson" id="williamson"></a>Case of Passmore Williamson </h2>
<p>A furious Wheeler petitioned for a writ of habeas corpus that would force Passmore Williamson, Johnson's &quot;abductor,&quot; to produce her to the court. The writ was granted by Judge John K. Kane, who, disregarding William Still and the other five freedmen who assisted Johnson's escape, placed all responsibility with Williamson. &quot;Of all the parties to the act of violence, he was the only white man, the only citizen, the only individual having recognized political rights, the only person whose social training could certainly interpret either his own duties or the rights of others under the constitution of the land&quot; (Kane qtd. in Williamson, 12). When Williamson refused to comply, claiming (truthfully) that he had no knowledge of Johnson's whereabouts, he was held in contempt of court. </p>
<p>From July 27, 1855, Williamson spent over three months in Moyamensing Prison in Philadelphia. As with the Fugitive Slave Act of 1850, however, the anti-abolitionists' excessive zeal backfired: the main result of Williamson's imprisonment was that it attracted support for his cause. &quot;The opportunity seemed favorable for teaching abolitionists and negroes, that they had no right to interfere with a 'chivalrous southern gentleman,'&quot; William Still later wrote of Wheeler's hubris; but Williamson's &quot;resolute course was bringing floods of sympathy throughout the North&quot; (Still 92, 93). It seemed that the longer Williamson endured imprisonment, the more respect he earned. &quot;Passmore is very cheerful, &amp; firm as a rock,&quot; Lucretia Mott recorded after visiting him in September (<a href="http://triptych/cdm4/page_text_trico.php?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11702&amp;CISOBOX=1&amp;OBJ=11708&amp;ITEM=3" target="_blank">connect to primary source and full transcript.</a>). In addition to Mott, he received a long string of distinguished visitors, including Frederick Douglass and Harriet Tubman. Supportive letters arrived for him daily, and even the prison staff seemed to sympathize with him: he was granted unprecedented privileges, and on one occasion was even escorted from prison to visit his newborn daughter at home (Brandt 96-99). </p>
<p>Williamson was defended by the extremely capable legal team of Edward Hopper (son of Isaac Hopper and son-in-law of James and Lucretia Mott) and Charles Gilpen, and his trial stretched on. Meanwhile, it was becoming quite clear that his imprisonment was not aiding the pro-slavery cause. Wheeler withdrew his complaint on November 3, 1855, and Williamson was released from prison. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="still" id="still"></a>Case of William Still et al </h2>
<p>While Passmore Williamson waited in prison, the other participants in Johnson's escape--William Still and the five black dock-workers--were facing riot and assault charges. John H. Wheeler was still claiming that Jane Johnson had been forcibly abducted, even though she had already submitted an affidavit swearing that she left Wheeler of her own volition. So, now Johnson tried an even bolder approach: she travelled to Philadelphia and personally appeared in court to testify on behalf of the defense. </p>
<p>It was a risky move, for under the 1850 Fugitive Slave Act Wheeler could easily conscribe local authorities to recapture Johnson for him. Nonetheless, Johnson appeared as a surprise witness on August 29, 1855. She was escorted to the courtroom by a cadre of female abolitionists: Lucretia Mott, Sarah McKim, Sarah Pugh, and Rebecca Plumly. After giving her testimony, which Mott described as &quot;very clear &amp; satisfact[or]y&quot;, Johnson was whisked out the back door of the courtroom by J. Miller McKim. Mott recounted breathlessly: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11700" target="_blank">&quot;we didnt drive slow com[in]g. home Miller, an officer--jane &amp; self--another carriage follow[in]g. with 4 officers for protection--and all with the knowledge of the states attorney&quot;</a>. </p>
<p>Johnson's surprise appearance had the desired effect. Still was acquitted, the remaining five freedmen were found not guilty of riot charges, and only two freedmen--the two who physically restrained Wheeler--were sentenced for assault. They served just one week's imprisonment. Jane Johnson, meanwhile, deserted her former master in Philadelphia for the second time in two months. She was widely commended for her courage--risking her own freedom to defend the men who had helped her achieve it. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<br />  
<h2><a name="references"></a>References</h2>
<p>Brandt, Nat, and Yanna Kroyt Brandt. <em>In the Shadow of the Civil War: Passmore Williamson and the Rescue of Jane Johnson</em>. Columbia: University of South Carolina Press, 2007.</p>
<p>Mott, Lucretia. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11700" target="_blank"><em>Letter from Lucretia Mott</em></a>. <span class="maintext">1855-09-04. Mott Manuscripts, Friends Historical Library of Swarthmore College, MSS 035. </span></p>
<p>Still, William. <em>The Underground Rail Road.</em> Philadelphia: Porter &amp; Coates, 1872. 86-97. </p>
<p>Williamson, Passmore. <em>Case of Passmore Williamson</em>. Philadelphia: U. Hunt &amp; son, 1856.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<div id="topBorder">
    <br />
     <h2><a name="sources">
  
    </a>Related Primary Sources</h2>
    <br />
    <table border="0" cellpadding="0" cellspacing="1">
     
   
     
      <tr>
        <td width="130"><div align="left"><a title="Lucretia Mott Letter" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11700" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11701&amp;action=2&amp;DMSCALE=22&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=140&amp;DMY=550&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Letter"/></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a title="Philadelphia in Slavery Days" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7111" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=7111&amp;action=2&amp;DMSCALE=13&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=720&amp;DMY=210&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt=""/></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a title="Pennsylvania Yearly Meeting of Progressive Friends" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,6102" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=6102&amp;action=2&amp;DMSCALE=27&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=70&amp;DMY=590&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="PYM Progressive Friends"/></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a title="American Anti-Slavery Society Anniversary" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8702" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=8702&amp;action=2&amp;DMSCALE=13&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=280&amp;DMY=0&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="AASS"/></a></div></td>
      </tr>
      <tr>
        <td width="130" valign="top"><div align="left">Lucretia Mott Letter </div></td>
         <td width="70"></td>
        <td width="130" valign="top"><div align="left">Philadelphia in Slavery Days </div></td>
         <td width="70"></td>
       <td width="130" valign="top"><div align="left">Pennsylvania Yearly Meeting of Progressive Friends</div></td>
        <td width="70"></td>
        <td width="130" valign="top"><div align="left">American Anti-Slavery Society Anniversary </div></td>
      </tr>
    </table>
    <br />
    </div>
    <p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Jane+Johnson&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">view all documents that mention Jane Johnson</a>)</p>
    

    
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