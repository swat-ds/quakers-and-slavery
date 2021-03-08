<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Pennsylvania Hall </title><!-- InstanceEndEditable -->

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
   <a href="pennsylvania_hall.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="pennsylvania_hall.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>
   
    <h2>Jump to Section</h2>
    <p></p>
    <h3><a href="#temple">Temple of Free Discussion</a></h3>
    <h3><a href="#four_days">Four Days</a></h3>
    <h3><a href="#riot">Riot</a></h3>
	    <h3><a href="#legal">Legal Struggle</a></h3>
			    <h3><a href="#legacy">Legacy</a></h3>
	<h3><a href="#references">References</a></h3>
	<h3><a href="#sources">Primary Sources</a></h3>
	<h2>Related Topics</h2>
	<h3><a href="../people/neall_sr.php">Daniel Neall Sr.</a></h3>
	<h3><a href="../people/neall_jr.php">Daniel Neall Jr.</a></h3>
	<h3><a href="../people/whittier.php">John G. Whittier</a> </h3>
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->    
      <a href="http://triptych.brynmawr.edu/u?/Friends,716" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/Friends&amp;CISOPTR=716&amp;action=2&amp;DMSCALE=35&amp;DMWIDTH=150&amp;DMHEIGHT=150&amp;DMX=30&amp;DMY=20&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Pennsylvania Hall" border="0" /></a>
        <h1>Pennsylvania Hall Association</h1>
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
		  <p align="right"><i>The Burning of Pennsylvania Hall </i></p>
		  <div align="right"><i>This image was engraved by John Sartain, an artist and abolitionist who based the mezzotint upon a sketch he made while witnessing the riot (see </i>Philadelphia's Cultural Landscape<em>, ed. by Katharine Martinez and Page Talbott (Phila.: Temple Univ. Press, 2000) p. </em><i>13). It was a widely reproduced image that appeared in </i><span class="maintext">History of Pennsylvania Hall </span><i><span class="maintext">(Phila.: Mayhew and Gunn, 1838). </span>This particular print is in a frame made out of wood salvaged from the Pennsylvania Hall fire--the frame, which used to hold a mirror, was originally owned by John G. Whittier.</i></div></td>
          <td><a title="Burning of Pennsylvania Hall" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9589" target="_blank"><img style="padding:10px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11163&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=300&amp;DMHEIGHT=200&amp;DMX=10&amp;DMY=5&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Burning of Pennsylvania Hall"/></a></td>
        </tr>
      </table>    
      <br /> 
    <h2><a name="temple"></a>Temple of Free Discussion</h2>
<p> In the 1830s, the antislavery movement underwent a dramatic transformation. A rapid influx of non-Quakers coincided with increasing radicalization in some sectors, leading to an ideological divide. There remained the &quot;old guard&quot; of abolitionists, primarily Quaker, who continued to favor petitions and nonviolent protest as the means to attaining gradual emancipation. But now, there also emerged groups of &quot;Immediatist&quot; or &quot;Garrisonian&quot; (after William Lloyd Garrison) abolitionists: they insisted upon immediate and unconditional emancipation, achieved through any means necessary. These latter groups were more outspoken and confrontational about their beliefs, and they invited a corresponding amount of the public's rancor. It became increasingly difficult to secure lecture halls for antislavery speeches, until, in 1837, a frustrated group of Philadelphia abolitionists decided to circumvent the problem by building their own facility. </p>
<p>Pennsylvania Hall, as they decided to name it, would be luxuriously appointed with four offices, a small lecture room, two committee rooms, and a large auditorium with three galleries (Brown 127). To cover the $40,000 of building costs, the Board of Managers sold 2,000 shares for $20 each, in cash or trade. Antislavery associations would be free to meet there, but the managers were clear to state the hall would be open to other groups as well. &quot;The building <em>is not to be used for Anti-Slavery purposes alone</em>,&quot; the secretary, William Dorsey, announced at the hall's opening. &quot;It will be rented from time to time, in such portions as shall best suit applicants, for <em>any purpose not of an immoral character</em>&quot; (<em>History</em> 6). It was to be, as Daniel Neall Jr. later wrote, <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8814" target="_blank">&quot;the second Temple of Free Discussion&quot;</a> </p>

<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="four_days"></a>Four Days</h2>
<p> Pennsylvania Hall was dedicated on May 14, 1838. By May 18, it was not much more than smoke and ash. But in those four short days Pennsylvania Hall enjoyed an illustrious, if all too brief, existence. A long list of distinguished individuals including Arnold Buffum, Lewis C. Gunn, Charles C. Burleigh, and William Lloyd Garrison spoke on the topics of Temperance, Free Speech, Indians, and Anti-Slavery. The Pennsylvania Anti-Slavery Society, the Requited Labor [Free Produce] Convention, and the Anti-Slavery Convention of American Women all held gatherings within its walls. Daniel Neall Jr. estimated that about 3,000 people attended the events, and described May 16, 1838 as <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8844" target="_blank">&quot; one of the most satisfactory [nights] of my life&quot;</a>. There was unprecedented mixing of racial, gender, and class at Pennsylvania Hall events; as a jury noted in July 1841, <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4223" target="_blank">&quot;more parade of familiarity between persons of different sexes and colors...than had ever before, or has ever since, been exhibited in the city of Philadelphia&quot; </a>.  Aside from general hostility toward abolitionists, it was apparently this <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4601" target="_blank">racial/sexual mixing </a>that above all infuriated Philadelphians. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="riot"></a>Riot</h2>
<p> The directors of Pennsylvania Hall were wary of the threat of violence before the doors even opened. Their anxiety understandably intensified when placards began appearing around the city, announcing, &quot;it behooves all citizens, who entertain a proper respect for the right of property, and the preservation of the Constitution of the United States, to interfere, <em>forcibly</em> if they <em>must</em> [at the antislavery conventions to be held at Pennsylvania Hall]&quot; (<em>History</em> 136). When heckling began on May 16 and several windows were smashed, the Executive Committee resolved to seek outside protection. They decided that night, <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4133" target="_blank">&quot;we cannot undertake to defend the Hall by force--that as law-abiding and peaceable citizens, we throw ourselves upon the justice of our cause, the laws of our country, and the right guaranteed to us by the Constitution&quot;</a>.</p>
<p>When representatives from the executive committee went to meet with the Mayor, they were hardly comforted by his ambivalent reply: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4592" target="_blank">&quot;There are always two sides to a question--public opinion makes mobs and ninety-nine out of a hundred of those with whom I conversed are against you&quot;</a>. He told them the only way to protect the hall would be to discontinue the scheduled meetings and give him the keys, which the Board reluctantly agreed to do. On the evening of May 17, the Mayor went to address the anti-abolitionist crowd that was gathered around Pennsylvania Hall. He explained that meetings had ceased and urged the crowd to disperse, but the riot's momentum had already built up. As soon as the Mayor left, the crowd broke down the doors, destroyed the building's contents, and set it aflame. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8844" target="_blank">&quot;Flames burst in rolling masses from the windows--soon the whole building was enveloped in one dense, dark coloured, sheet of flame&quot;</a> Daniel Neall Jr. wrote.</p>
<p>As the fire grew, the spectacle drew an even larger crowd of witnesses who may not have actively participated in the riot, but who implicitly approved the violence. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4223" target="_blank">12,000-15,000 were estimated to be present on the scene</a>, but only a small proportion probably actually committed acts of destruction; moreover, no one was ever brought to trial for his role in the events. Firefighters appeared on the scene, but while they prevented the fire from spreading to other buildings, they made no attempt to save Pennsylvania Hall. <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8844" target="_blank">&quot;The engines made their appearance, but understanding their business, [played] not a drop on the building&quot;</a> Daniel Neall Jr. sardonically observed. By the end of the evening, Pennsylvania Hall was little more than rubble. Still not sated, the mob continued to Thirteenth and Callowhill streets where they attacked the Shelter for Colored Orphans--a charitable institution unconnected with the Anti-Slavery Society. </p>
<center>
<table border="0">
  <tr>
            <td><div align="center"><a title="Before" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11162" target="_blank"><img style="padding:10px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11162&amp;action=2&amp;DMSCALE=14&amp;DMWIDTH=300&amp;DMHEIGHT=200&amp;DMX=60&amp;DMY=30&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Before" /></a></div></td>
          <td><div align="center"><a title="After" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11164" target="_blank"><img style="padding:10px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11164&amp;action=2&amp;DMSCALE=17&amp;DMWIDTH=300&amp;DMHEIGHT=200&amp;DMX=30&amp;DMY=8&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="After" /></a></div></td>

  </tr>
  <tr>
    <td colspan="2"><div align="center">Pennsylvania Hall, before and after the riot, from <em>History of Pennsylvania Hall</em> (Phila.: Mayhew and Gunn, 1838). This particular copy of <em>History</em> belonged to <a href="../people/index.php#parrishd">Dillwyn Parrish</a>. </div></td>
    </tr>
</table>
</center>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="legal"></a>Legal Struggle</h2>
<p> Unfortunately for the subscribers to Pennsylvania Hall, its destruction was only the beginning of a decade of legal and financial struggles still to come. The Board of Directors filed a $100,000 lawsuit against the county for failing to prevent the mob violence. Meanwhile, they  allowed the hall's ruins to stand as a tangible reminder of the damages sustained--until, that is, the treasurer <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4175" target="_blank">Samuel Webb was arrested </a>for the &quot;nuisance&quot; this caused. Webb's arrest occurred in July of 1841, and when a jury soon afterward offered the Board of Directors <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4228" target="_blank">$33,000 compensation</a>, they decided to take it. The total expenditure on the hall up to that point had been <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4225" target="_blank">$57,126.39</a>. </p>
<p>Still, even after the Board of Directors agreed to accept the $33,000--one-third their original claim and just over one-half the hall's cost--the award was not forthcoming. They pursued the case to the state supreme court before the county commissioners finally turned over the money, and by that point the amount had been reduced to $27,943.82. In <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4581" target="_blank">1848</a> the Pennsylvania Hall Association finally paid off its debts and interest, and paid stock dividends of $2 dividend per share. Daniel Neall Sr., the president of the association, was dead by the time <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4584" target="_blank">his son cleared the debts</a> he had incurred on behalf of Pennsylvania Hall. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="legacy"></a>Legacy</h2>
<p>The destruction of Pennsylvania Hall was a watershed event in the history of antislavery activism in Philadelphia. On the one hand, it marks the peak of anti-abolitionist sentiment in Philadelphia; on the other hand, the violence of the event provoked a backlash against precisely such extreme sentiment. While Southern publications rejoiced, the <em>Public Ledger</em>, a mainstream Philadelphia periodical with no abolitionist allegiances, nonetheless declaimed the mob attack on Pennsylvania Hall as a &quot;Scandalous Outrage Against Law and Decency.&quot; The May 18, 1838 issue editorialized, &quot;we are decidedly opposed to any mingling of the two races...[but] we should prefer as companions, moral, peaceful and orderly blacks, to profligate and disorderly whites.&quot; Daniel Neall Jr. shrewdly observed the attitude shift in a letter to a friend: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8814" target="_blank">&quot;The slave has now friends in this City where ears were deaf to the Truth until the fearful encroachments of Wednesday and Thursday nights told them their own liberties were their price to be paid for the Crime of their silence&quot;</a>. As Ira V. Brown argues in &quot;Racism and Sexism: The Case of Pennsylvania Hall,&quot; the burning of Pennsylvania Hall and other instances of anti-abolitionist violence may have actually had the opposite of their intended effect: they aroused animosity towards anti-abolitionists and won sympathy for abolitionists, and not the other way around. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="references"></a>References</h2>
<p>Brown, Ira V. (Ira Vernon), 1922-. &quot;Racism and Sexism: the Case of Pennsylvania Hall.&quot; <em>Phylon, the Atlanta University Review of Race and Culture</em> 37:2 (June 1976), 126-136. </p>
<p><em>History of Pennsylvania Hall, which was Destroyed by a Mob, on the 17th of May, 1838</em>. Philadelphia: Merrihew and Gunn, 1838.</p>
<p>Neall, Daniel, 1817-1894. Daniel Neall Manuscripts, Friends Historical Library of Swarthmore College, SC 086.</p>
<p>Pennsylvania Hall Association. Pennsylvania Hall Association Records, Friends Historical Library of Swarthmore College, RG4/074. </p>
<div id="topBorder">
    <br />
    <h2><a name="sources">
   
    </a>Related Primary Sources</h2>
    <br />
    <table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a title="Pennsylvania Hall, Board of Managers" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4127" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=4149&amp;action=2&amp;DMSCALE=10&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=165&amp;DMY=123&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Board of Managers" /></a></div></td>
          <td width="70"></td>
        <td width="130"><div align="left"><a title="Pennsylvania Hall, Legal &amp; Financial" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4551" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=4551&amp;action=2&amp;DMSCALE=14&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=180&amp;DMY=20&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Legal &amp; Financial" /></a></div></td>
          <td width="70"></td>
        <td width="130"><div align="left"><a title="Pennsylvania Hall Retrospectives" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4594" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=4594&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=15&amp;DMY=120&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Retrospectives"/></a></div></td>
          <td width="70"></td>
         <td width="130"><div align="left"><a title="Daniel Neall Jr. Papers" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8795" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=8832&amp;action=2&amp;DMSCALE=20&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=430&amp;DMY=780&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Daniel Neall Jr." /></a></div></td>
           <td width="70"></td>
      </tr>
      <tr>
        <td width="130" valign="top"><div align="left">Records of the Pennsylvania Hall Association Board of Managers </div></td>
          <td width="70"></td>
        <td width="130" valign="top"><div align="left">Legal and Financial Records of the Pennsylvania Hall Association </div></td>
          <td width="70"></td>
        <td width="130" valign="top"><div align="left">Pennsylvania Hall Retrospectives</div></td>
          <td width="70"></td>
	     <td width="130" valign="top"><div align="left">Daniel Neall Jr. Papers</div></td>
           
      </tr>
    </table>
    <br />
    <p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=pennsylvania%20hall&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank">view all documents that mention Pennsylvania Hall</a>)</p>
    </div><!-- InstanceEndEditable -->
  
  
 

	
	
	            
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