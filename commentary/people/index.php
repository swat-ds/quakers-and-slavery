<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_nosidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : People</title><!-- InstanceEndEditable -->

<!--Style Sheet -->
<link href="/speccoll/quakersandslavery/QuakersSlavery_nosidebar.css" rel="stylesheet" type="text/css" />

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
       
       
       <div id="sectionheader"><a href="/speccoll/quakersandslavery/"><img src="../../../quakersandslavery/images/janejohnson1.png" alt="Quakers &amp; Slavery" class="png" />
     
        </a></div>
       
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
<!--<div  <?php menu("/speccoll/quakersandslavery/index.php"); ?> id="tab_index"><a href="/speccoll/quakersandslavery/index.php">Welcome</a></div>-->

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
<div  <?php menu("/speccoll/quakersandslavery/about/index.php"); ?> id="tab_about" ><a href="/speccoll/quakersandslavery/about/index.php">About the Project</a>
<span>
       <!-- <a href="/speccoll/quakersandslavery/about/index.php">Project Description</a> -->
        <a href="/speccoll/quakersandslavery/about/contact_us.php">Contact Us</a>
        <a href="/speccoll/quakersandslavery/about/project_funding.php">Project Funding</a>
        </span>
</div>
</div>
            	
  
       
       </div>
          <!-- end of top div -->
       <div id="main">
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" --> 
<div id="upper">
  <h1>People</h1>

  <p>This page features brief biographies of some of the most prominent, interesting, and influential people associated with Quakers and Slavery.</p> 
  <br /> 
 
 <div class="twocolumns">
<div class="column1">

    <p>
     <script language="JavaScript" type="text/javascript">
//<![CDATA[
<!--
function JumpToIt(list) {
    var newPage = list.options[list.selectedIndex].value
    if (newPage != "None") {
        location.href=newPage
    }
}
//-->
//]]>
   </script>
   
   <select onchange="JumpToIt(this)">
 <option value="None">Jump to... (select from list)</option>
          
          <option value="#benezet">Benezet, Anthony</option>
          <option value="#burritt">Burritt, Elihu</option>
          <option value="#clarkson">Clarkson, Thomas</option>
          <option value="#dugdalej">Dugdale, J., R. and S.</option>
          <option value="#fox">Fox, George</option>
          <option value="#garrett">Garrett, Thomas</option>
          <option value="#hicks">Hicks, Elias</option>
          <option value="#hopper">Hopper, Isaac T.</option>
          <option value="#janney">Janney, Samuel M.</option>
          <option value="#lay">Lay, Benjamin</option>
          <option value="#mckim">McKim, J. Miller</option>
          <option value="#mottj">Mott, James and Lucretia</option>
          <option value="#nealls">Neall, Daniel Sr. and Jr.</option>
          <option value="#parker">Parker, Theodore</option>
          <option value="#parrishd">Parrish, D., E., and J.</option>
          <option value="#pennypacker">Pennypacker, E. F.</option>
          <option value="#pleasants">Pleasants, Robert</option>
          <option value="#purvis">Purvis, Robert</option>
          <option value="#sheppard">Sheppard, Moses</option>
          <option value="#taylor">Taylor, George W.</option>       
           <option value="#whittier">Whittier, John G.</option>   
            <option value="#woolman">Woolman, John</option>          
     </select>
</p>
</div>
 <div class="column2">
 <div align="center" style="border: 2px solid #bdb89a; background: #ECE5B6; padding:0px 0px 0px 0px; margin-bottom: 10px;"> 
 <table> <tr>
 <td><strong><img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" />&nbsp;SEARCH primary sources&nbsp;</strong></td>
 <td><strong><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" />&nbsp;READ scholarly commentary</strong>&nbsp;</td>
 <td><strong><img src="../../images/relationshipmap_dc.png" height="25" width="25" border="0" alt="Relationship Map Icon Icon" title="Realtionship Map" />&nbsp;EXPLORE relationship map</strong></td>
 </tr></table>
 </div>
</div> </div>
</div> 
 <p>&nbsp;  </p>
<div id="lower">
   <table border="0" cellspacing="10px">
    <tr>
        <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9847" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=9847&amp;action=2&amp;DMSCALE=11&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=90&amp;DMY=80&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Anthony Benezet" title="Anthony Benezet" /></a></td>
    <td valign="top"><h3><a name="benezet" id="benezet"></a>Anthony Benezet<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=benezet&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"> <img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
      <p>Anthony Benezet (1713-1784) was a native of France who became a Quaker at age fourteen. In 1731 he came to Philadelphia and in 1736 married Joyce Marriott. He was a teacher for most of his life and was active in promoting an end to slavery and the slave trade. He wrote and distributed many papers and tracts dealing with slavery, American Indians and education.</p></td>
    </tr>
	<tr>
	<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11154" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11154&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=0&amp;DMY=30&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Elihu Burritt" title="Elihu Burritt" /></a></td>
	<td valign="top"><h3><a name="burritt" id="burritt"></a>Elihu Burritt <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=burritt&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
	  <p>Elihu Burritt (1810-1879) was born in New Britain, Connecticut. Known as the "Learned Blacksmith" because he was primarily self-taught, Burritt was a social reformer, abolitionist, pacifist, linguist, and internationalist. Although a staunch abolitionist and a believer in complete equality among the races, he opposed the American Civil War on absolute pacifist principles. Burritt proposed a system of "compensated emancipation" to pay Southern slave owners to free their slaves. </p></td>
	</tr>
 	<tr>
		<td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11143" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11143&amp;action=2&amp;DMSCALE=20&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=100&amp;DMY=70&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Thomas Clarkson" title="Thomas Clarkson" /></a></td>
<td valign="top"><h3><a name="clarkson" id="clarkson"></a>Thomas Clarkson <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=thomas%20clarkson&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="clarkson.php"> <img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
  <p>Thomas Clarkson (1760-1846)was born in England. He first became interested in abolitionism in 1785, an Anglican minority in the overwhelmingly Quaker anti-slavery movement. Clarkson devoted the rest of his life to ending slavery in the United Kingdom, and when that was accomplished with the Slavery Abolition Act of 1833, he continued to work towards emancipation in America.</p></td>
	</tr>
 	<tr>
 	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
 	  </tr>	
	<tr>
		<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11140" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11140&amp;action=2&amp;DMSCALE=18&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=20&amp;DMY=40&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Joseph Dugdale" title="Joseph Dugdale" /></a></td>
<td valign="top"><h3><a name="dugdalej" id="dugdalej"></a>Joseph A. Dugdale <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=joseph%20dugdale&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
	<p>Joseph Dugdale (1810-1896) was a Quaker minister, farmer, and reformer, born in Bristol, Pennsylvania in 1810. He lived in Ohio, where he was part of the progressive group at Green Plain that split from Indiana Yearly Meeting; Pennsylvania, where he helped organize Pennsylvania Yearly Meeting of Progressive Friends (also known Longwood Yearly Meeting); and Iowa, where he died in 1896.</p>
	</td>
	</tr>
	<tr>
			<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11138" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11138&amp;action=2&amp;DMSCALE=18&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=20&amp;DMY=20&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Ruth Dugdale" title="Sarah B. Dugdale" /></a></td>
<td valign="top"><h3><a name="dugdaler" id="dugdaler"></a>Ruth Dugdale <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=ruth%20dugdale&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
	<p>Ruth Dugdale (1801-1896) rivaled her husband, Joseph, in her zeal for reform causes. She was a respected Quaker minister, and participated actively in anti-slavery, temperance, women's rights, and other movements in Ohio, Pennsylvania, and Iowa. She survived her husband and died in 1896.</p></td>
	</tr>

	<tr>
				<td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7102" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=7102&amp;action=2&amp;DMSCALE=12&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=215&amp;DMY=320&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Sarah B. Dugdale" title="Sarah B. Dugdale"/></a><p align="right"></p></td>
<td valign="top"><h3><a name="dugdales" id="dugdales"></a>Sarah B. Dugdale <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=sarah%20b.%20dugdale&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a></h3>
	<p>Sarah B. Dugdale (1787-1880) was the mother of Joseph A. Dugdale and the progenitor of his liberal ideals. She was involved in the American Anti-Slavery Society nearly from its founding, continued to participate in Progressive Friends societies and other reform movements until her death in 1880.</p></td>
	</tr>
	<tr>
 	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
	  </tr>
	<tr>
	<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11149" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11149&amp;action=2&amp;DMSCALE=7&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=15&amp;DMY=15&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="George Fox" title="George Fox" /></a></td>
	<td valign="top"><h3><a name="fox" id="fox"></a>George Fox <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=fox&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="../people/fox.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
	  <p>George Fox (1624-1691) was the founder of the Religious Society of Friends. He was an English Dissenter who believed that spiritual truth resided in every person, and that following one's own "inner light" was paramount; he denounced ritualized worship, standardized doctrine, and clerical authority. Fox preached testimonies of peace, equality, integrity, and simplicity. In 1657, his cautionary letter "To Friends Beyond Sea, that Have Blacks and Indian Slaves" expounded on the testimony of equality of men in the eyes of God.</p></td>
</tr>
 <tr>
        	<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11141" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11141&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=0&amp;DMY=40&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Thomas Garrett" title="Thomas Garrett" /></a></td>

      <td valign="top"><h3><a name="garrett" id="garrett"></a>Thomas Garrett <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=thomas%20garrett&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a><a href="garrett.php"> <img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
        <p>Thomas Garrett (1789-1871) was a Quaker and a known conductor of the Underground Railroad. In 1848 he and fellow Quaker John Hunn were brought to trial by two slave-owners on charges of harboring and aiding fugitive slaves. The defendants were found guilty by the U.S. Circuit Court in Delaware, presided over by Chief Justice Roger B. Taney, who ten years later would deliver the landmark 'Dred Scott Decision.' Harriet Beecher Stowe cites Garrett's 1848 trial as inspiration for some scenes in her influential anti-slavery novel 'Uncle Tom's Cabin.'</p></td>
    </tr>
	<tr>
	      <td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11150" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11150&amp;action=2&amp;DMSCALE=10&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=20&amp;DMY=20&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Elias Hicks" title="Elias Hicks" /></a></td>
<td valign="top"><a name="hicks" id="hicks"></a>
<h3>Elias Hicks <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=elias%20hicks&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
<p>Elias Hicks (1748-1830) was an eminent Quaker minister from Jericho, Long Island, N.Y. He was a farmer, partner in a tannery, and had a knowledge of surveying. In 1771, he married Jemima Seaman, daughter of Jonathan and Elizabeth (Willis) Seaman. Beginning in 1776, Hicks served on a committee that visited friends' homes and urged members of Westbury Monthly Meeting to manumit any slaves they owned. He was recognized as a minister in 1779 and during the next fifty years, made sixty-three visits as a traveling Friend to meetings in the United States. In the 1820s, a religious controversy within the Society of Friends which focused on Hicks' ministry led to the so-called Hicksite-Orthodox Separation of 1827-1828.</p></td>
	</tr>
	<tr>
 	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
	  </tr>
	<tr>
		<td valign="top"><h3><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11153" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11153&amp;action=2&amp;DMSCALE=35&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=40&amp;DMY=20&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Isaac Hopper" title="Isaac Hopper" /></a></h3></td>
<td valign="top"><h3><a name="hopper" id="hopper"></a>Isaac T. Hopper <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=hopper&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a> <a href="hopper.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
  <p>Isaac T. Hopper (1771-1852) was a Quaker reformer and abolitionist. Born in 1771, Hopper became a staunch Hicksite. He was active in prison reform and abolition, and was the editor of the National Anti-slavery Standard. Hopper was disowned by New York Yearly Meeting of Friends in 1842 because of an article which appeared in his publication. </p></td>
</tr>
<tr>
<td valign="top"><h3><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11139" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11139&amp;action=2&amp;DMSCALE=25&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=45&amp;DMY=40&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Samuel M. Janney" title="Samuel M. Janney" /></a></h3></td>
<td valign="top"><h3><a name="janney" id="janney"></a>Samuel M. Janney <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=janney&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
  <p>Samuel M. Janney (1801-1880) was a Virginia Quaker minister, author, educator, and reformer. In 1839 he opened a boarding school for girls in Loudoun County. He traveled widely in the ministry, meeting with other denominations as well as being immersed in the contemporary issues facing the Society of Friends. Among his activities were establishing schools for African Americans and women, creating public schools in Virginia, and working for the abolition of slavery. In 1869 he was appointed Superintendent of Indian Affairs in Nebraska. A <a href="http://www.swarthmore.edu/Library/friends/ead/5183jann.xml">detailed inventory</a> of the Samuel M. Janney papers held by the Friends Historical Library is available online.</p></td>
	</tr>
	 <tr>
       <td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,395" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=395&amp;action=2&amp;DMSCALE=11&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=90&amp;DMY=60&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Benjamin Lay" title="Benjamin Lay" /> </a></td>
     <td valign="top"> <h3><a name="lay" id="lay"></a>Benjamin Lay <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=benjamin%20lay&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="lay.php"> </a><a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a> <a href="lay.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
       <p>Benjamin Lay (1677-1757) was born in England and lived in Barbados for 10 years before settling near Philadelphia. He considered himself a Quaker all his life, although he was denounced by many in the Society for his extreme beliefs and eccentric behavior. Lay was a strict vegetarian, wore a very prominent beard, and vehemently denounced the use of any products made with a trace of slave labor. &quot;All Slave-Keepers...&quot; was, in 1737, one of the first antislavery books printed in America. </p>
 </td>
    </tr>
	 <tr>
 	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
	   </tr>
			<tr>	      <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11168" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11168&amp;action=2&amp;DMSCALE=38&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=0&amp;DMY=20&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="J. Miller McKim" title="J. Miller McKim" /></a></td>

			<td valign="top"><h3><a name="mckim" id="mckim"></a>J. Miller McKim <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=mckim&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
              <p>James Miller McKim (1810-1874) also spelled M'Kim, was born in Pennsylvania in 1810. He was a Presbyterian minister, an abolitionist, and a known conductor of the Underground Railroad. He was present at the Anti-Slavery Society's headquarters in Philadelphia when they received a package containing Henry "Box" Brown, a slave from Richmond who literally mailed himself to freedom. </p></td>
</tr>
<tr>
	      <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11166" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11166&amp;action=2&amp;DMSCALE=18&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=75&amp;DMY=75&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="James Mott" title="James Mott" /></a> </td>
<td valign="top"><h3><a name="mottj" id="mottj"></a>James Mott <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=james%20mott&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
  <p>James Mott (1788-1869) was a prominent Philadelphia Quaker minister and a leader in reform movements, especially antislavery, education, peace, and women's rights. He was born in 1788 in Long Island. In 1811, he married Lucretia Coffin and they settled in Philadelphia. Both Motts were active Hicksite Quakers, and James Mott was a founder of the American Slavery Society in 1833. In 1840, the couple went to England to attend the first World's Antislavery Convention and Lucretia met Elizabeth Cady Stanton. They decided to organize a women's rights convention, which was held in Seneca Falls, N. Y. in 1848. James was elected to chair the convention. The Motts were active in the founding of Swarthmore College, a coeducational institution incorporated in 1864, and supported the founding of the nation's first medical school for women, Woman's Medical College of Pennsylvania. James Mott died in 1869.</p></td>
</tr>
<tr>
	      <td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11165" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11165&amp;action=2&amp;DMSCALE=11&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=50&amp;DMY=45&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Lucretia Mott" title="Lucretia Mott" /></a></td>
<td valign="top"><h3><a name="mottl" id="mottl"></a>Lucretia Mott <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=lucretia%20mott&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
  <p>Lucretia Coffin Mott (1793-1880)was a prominent Philadelphia Quaker minister and a leader in reform movements, especially antislavery, education, peace, and women's rights. She was born in 1793 in Nantucket, Massachusetts, and after marrying James Mott in 1811, settled in Philadelphia. The Motts were active Hicksite Quakers, and Lucretia served as clerk of Philadelphia Yearly Meeting and traveled in the ministry. Lucretia was a founder of the Philadelphia Female Antislavery Society. In 1840, she and James went to England to attend the first World's Antislavery Convention and Lucretia met Elizabeth Cady Stanton. In 1848, she and Stanton announced a conference on women's rights to be held at Seneca Falls, N.Y., generally considered to be the first women's rights convention in America. She and her husband were active in the founding of Swarthmore College and supported the founding of the nation's first medical school for women, Woman's Medical College of Pennsylvania, and the School of Design for Women, now Moore College of Art. Lucretia Mott died in Philadelphia in 1880.</p></td>
</tr>
<tr>
 	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>

</tr>
<tr>
	      <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11697" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11697&amp;action=2&amp;DMSCALE=10&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=25&amp;DMY=25&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Daniel Neall Sr." alt="Daniel Neall Sr."/></a></td>
<td valign="top"><h3><a name="nealls" id="nealls"></a>Daniel Neall, Sr. <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=neall&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a> <a href="neall_sr.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
  <p>Daniel Neall (1784-1846) was a Philadelphia Quaker, a dentist, and an abolitionist. He was presiding over the Pennsylvania Hall Association at the time the Hall was destroyed by a mob in 1838&mdash; an event which was also witnessed, in horror, by his 20-year-old son. Several years later, while travelling in Delaware with his wife, Sarah Mifflin, and her cousin Lucretia Mott, Neall was seized by an angry mob of slave-holders. Having heard that Mott and her companions were abolitionists, they decided to tar-and-feather Daniel Neall. After they released him, Neall reputedly forgave the mob and invited any of them to call upon him for hospitality if they ever visited Philadelphia. When Daniel Neall died in 1846, he was eulogized by his friend, the great American poet John G. Whittier.</p></td>
</tr>
<tr>			
<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,12050" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=12050&amp;action=2&amp;DMSCALE=11&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=160&amp;DMY=30&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" title="Daniel Neall Jr." alt="Daniel Neall Jr." /></a></td>
<td valign="top"><h3><a name="neallj" id="neallj"></a>Daniel Neall, Jr. <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=neall&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a><a href="neall_jr.php"> <img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
  <p>Daniel Neall Jr. (1817-1894) was to Daniel and Sarah M. Neall, the younger Daniel Neall was a dentist, abolitionist, and ardent Quaker, as his father had been. In 1838, he watched his father struggle vainly for the anti-slavery cause against the crowd that destroyed Pennsylvania Hall. Daniel Neall junior survived his father to see the end of slavery in America, and in 1883, as secretary of the American Anti-slavery Society, he helped organize the conference that celebrated the society's 50th anniversary. </p></td>
</tr>
<tr>
	      <td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11155" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11155&amp;action=2&amp;DMSCALE=13&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=2&amp;DMY=5&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Theodore Parker" alt="Theodore Parker" /></a></td>
<td valign="top"><h3><a name="parker" id="parker"></a>Theodore Parker <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=theodore%20parker&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
  <p>Theodore Parker (1810-1860) was a Unitarian minister involved in many reform movements, but most active in anti-slavery. Many of his views were congruent with those of the Progressive Friends, with whom he was involved in the years leading to his death.</p></td>
</tr>
<tr>
 	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
</tr>
<tr>
	      <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11147" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11147&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=10&amp;DMY=30&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Dillwyn Parrish" alt="Dillwyn Parrish" /></a></td>
<td valign="top"><h3><a name="parrishd" id="parrishd"></a>Dillwyn Parrish <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=dillwyn%20parrish&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
  <p>Dillwyn Parrish (1809-1886) graduated from the College of Pharmacy in Philadelphia and operated a pharmacy with his brother Edward. The Parrishes were a prominent Quaker family in the Philadelphia area, noted for their philanthropy. An active member of Philadelphia Monthly Meeting, he served as Overseer, Clerk, and Elder. He was also a member of the Pennsylvania Society for Promoting the Abolition of Slavery and Improving the Condition of the African Race from 1832-1886, serving as its President in 1851.</p></td>
</tr>
<tr>
	      <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11151" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11151&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=30&amp;DMY=40&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Edward Parrish" alt="Edward Parrish"/></a></td>
<td valign="top"><h3><a name="parrishe" id="parrishe"></a>Edward Parrish <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=edward%20parrish&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
  <p>Edward Parrish (1822-1872) shared a pharmacy with his brother, Dillwyn. In addition to the pharmacy Edward also taught at the Philadelphia College of Pharmacy. He was active in New York, Philadelphia, and Baltimore Yearly Meetings (Hicksite), and was a primary fundraiser for Swarthmore College, a Quaker educational institution incorporated in 1864. Edward Parrish was the first president of the college, although he resigned in 1871 due to conflicts with the Board of Managers. In 1872 he was appointed to a Commission to negotiate a treaty with the Kiowa and Comanche tribes, and he died of malaria on this mission to Indian Territory in the same year.</p></td>
</tr>
<tr>
			<td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7975" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=7975&amp;action=2&amp;DMSCALE=9&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=48&amp;DMY=40&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="John Parrish" title="John Parrish" /></a></td>
<td valign="top"><h3><a name="parrishj" id="parrishj"></a>John Parrish (1729-1807)<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=all&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=all&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=all&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=all&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=john+parrish&amp;c=all&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a> <a href="parrish_john.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
  <p>John Parrish (1729-1807) is best known for his anti-slavery book 'Remarks on the Slavery of the Black People.' Published in 1806, the book advocated the total abolition of slavery, as opposed to the abolition of just the slave trade. John Parrish died the following year. Edward and Dillwyn Parrish were sons of Susanna Cox and Joseph Parrish, whose father, Isaac, was John Parrish's brother. </p></td>
</tr>
<tr>
 	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
</tr>
<tr>
	      <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11156" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11156&amp;action=2&amp;DMSCALE=12&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=0&amp;DMY=0&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Elijah Pennypacker" alt="Elijah Pennypacker" /></a></td>
<td valign="top"><h3><a name="pennypacker" id="pennypacker"></a>Elijah Pennypacker <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=pennypacker&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
  <p>Elijah F. Pennypacker (1804-1888) a convinced Quaker, was originally of Mennonite descent. He was a politician and activist who labored tirelessly in the anti-masonic, temperance, and anti-slavery movements. Pennypacker's home in Chester County, Pa., was a vital station on the underground railroad. He was a member of Radnor Monthly Meeting and a minister until his death in 1888.</p></td>
</tr>
<tr>
			<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9191" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=9191&amp;action=2&amp;DMSCALE=38&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=170&amp;DMY=550&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Robert Pleasants" title="Robert Pleasants" /></a></td>
<td valign="top"><h3><a name="pleasants" id="pleasants"></a>Robert Pleasants <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=pleasants&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
  <p>Robert Pleasants (1723-1801) was a Quaker plantation-owner who, inspired by Anthony Benezet,  went from slaveholder to abolitionist in a few short years. After deciding to free his slaves in 1782, Pleasants founded the first school for free blacks in Virginia and helped organize the Virginia Abolition Society.</p></td>
</tr>
<tr>
	      <td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11126" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11126&amp;action=2&amp;DMSCALE=25&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=40&amp;DMY=60&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Robert Purvis" title="Robert Purvis"/></a></td>
<td valign="top"><h3><a name="purvis" id="purvis"></a>Robert Purvis <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=purvis&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a></h3>
  <p>Robert Purvis (1810-1898) was an African-American abolitionist, born to a free woman of color and a wealthy white Englishman. Purvis spent the majority of his life in Philadelphia, where he used his wealth and education to forward the cause of African-Americans. He attended the Anti-Slavery Convention of 1833 and was one of the founders of the American Anti-Slavery Society, and he also worked on the Underground Railroad. Purvis died in 1898.</p></td>
</tr>
<tr>
 	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
</tr>
<tr>
			<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,10302" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=10302&amp;action=2&amp;DMSCALE=8&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=90&amp;DMY=75&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Moses Sheppard" title="Moses Sheppard" /></a></td>
<td valign="top"><h3><a name="sheppard" id="sheppard"></a>Moses Sheppard <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=moses%20sheppard&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a> <!--<a href="../themes/colonization.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a>--></h3>
  <p>Moses Sheppard (1775-1857) was a Quaker humanitarian and businessman of Baltimore, Maryland. Born in 1775, he never married, and devoted most of his life to a number of social reforms. As a member of Baltimore Monthly Meeting, he was active in a number of committees, including that of Indian Affairs of Baltimore Yearly Meeting. Sheppard was deeply concerned with the issues of American and Caribbean slavery, and for many years was principally involved in the Maryland Colonization Society&mdash;although his involvement later waned as he became disillusioned with developments in the Anti-Slavery movement, particularly what he perceived as extremism in the North. Sheppard was also committed to improving the conditions of mental health care facilities, and upon his death in 1857 devoted his bequest to founding the Sheppard Asylum. It is still in existence today as the Sheppard Pratt Health System.</p></td>
</tr>
<tr>			<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,953" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=953&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=10&amp;DMY=0&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="George Taylor" title="George Taylor" /></a></td>
<td valign="top"><h3><a name="taylor" id="taylor"></a>George Washington Taylor <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=washington%20taylor&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
  <p> George Washington Taylor (1803-1891) was a pupil of the Quaker educator Enoch Lewis. Taylor was a convinced Friend who devoted his life to social reform, especially anti-slavery, temperance, and the peace movement. He ran a free labor goods store in Philadelphia from 1847-1867; was an agent of the Friends Bible Association; and as a publisher produced the periodicals "The Non-Slaveholder" and the peace-oriented "The Citizen of the World."</p></td>
</tr>
<tr>
	      <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11148" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11148&amp;action=2&amp;DMSCALE=5&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=2&amp;DMY=10&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="John G. Whittier" title="John G. Whittier"/></a></td>
<td valign="top"><h3><a name="whittier" id="whittier"></a>John G. Whittier <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=whittier&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="relationship_map.php"><img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a> <a href="whittier.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
  <p>John Greenleaf Whittier (1807-1892) was a Massachusetts Quaker, an abolitionist, and one of the most well-known poets of the 19th century. He was a founding member of the American Anti-Slavery Society in 1833; the same year he published "Justice and Expediency," a radical pamphlet which called for the immediate abolition of slavery. Many of his poems dealt with themes related to slavery and abolitionism, but today his most well-known work is "Snow-Bound," a long narrative poem about fixing memories of the idyllic past.</p></td>
</tr>
<tr>
	      <td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,12040" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=12040&amp;action=2&amp;DMSCALE=23&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=350&amp;DMY=175&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="John Woolman" /></a></td>

<td valign="top"><h3><a name="woolman" id="woolman"></a>John Woolman <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=john%20woolman&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a> <a href="woolman.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
  <p>John Woolman (1720-1772) was born to Quaker parents in New Jersey and spent his life travelling and preaching against slavery and war. In 1754 he wrote "Some Considerations on the Keeping of Negroes," an anti-slavery tract which was published by Philadelphia Yearly Meeting and distributed to every yearly meeting in America. Woolman kept a journal for over a decade, published in 1774, soon after his death. Woolman's journal is still considered an important document in the fields of religion, history, and literature.</p></td>
</tr>
<tr>
 	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
</tr>
	 </table>
     
     
     
     
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