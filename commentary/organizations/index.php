<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_nosidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Organizations</title><!-- InstanceEndEditable -->

<!--Style Sheet -->
<link href="/speccoll/quakersandslavery/QuakersSlavery_nosidebar.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/speccoll/quakersandslavery/scripts/common.js"></script>

<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style1 {color: #000000}
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
  <h1>Organizations</h1>

  <p>This page features brief descriptions of some important antislavery groups that existed in antebellum American, with a special focus on organizations based in the Philadelphia area with substantial Quaker membership.</p> 
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
       <option value="#aass">American Anti-Slavery Soc.</option>
       <option value="#acs">American Colonization Soc.</option>
       <option value="#fps">Free Produce Soc.</option>
       <option value="#faaef">Friends Assoc. for the Aid...</option>
       <option value="#nyaf">NY Assoc. of Friends...</option>
       <option value="#manumission">NY Manumission Soc.</option>
       <option value="#pass">Penna. Anti-Slavery Soc.</option>
       <option value="#pahall">Pennsylvania Hall Assoc.</option>
       <option value="#pas">Pennsylvania Abolition Soc.</option>
       <option value="#prog">Progressive Friends</option>
       <option value="#pfpaf">Free Produce Assoc. of Frds</option>
       <option value="#ugrr">Underground Railroad</option>
       <option value="#cong">Congregational Friends</option>

          
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
	<td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8646" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=8646&amp;action=2&amp;DMSCALE=11&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=60&amp;DMY=40&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="American Anti-Slavery Society" title="American Anti-Slavery Society" /> </a></td>
      <td valign="top"><h3><a name="aass" id="aass"></a>American Anti-Slavery Society <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=american%20anti-slavery%20society&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
<p>Founded in Philadelphia in 1833, the American Anti-Slavery Society was a more radical alternative to the <a href="#pas">Pennsylvania Abolition Society</a>. The Anti-Slavery Society advocated a broadly based anti-slavery movement, and insisted upon immediate and complete emancipation without compensation for slaveholders. It published an official weekly newspaper, the National Anti-Slavery Standard. Auxiliary groups included the <a href="#pass">Pennsyvlania Anti-Slavery Society</a>, the Philadelphia Female Anti-Slavery Society, and the Young Men's Anti-Slavery
Society.</p></td>
    </tr>
	<tr>
		 <td valign="top"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11008" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11008&amp;action=2&amp;DMSCALE=7&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=0&amp;DMY=0&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="American Colonization Society" alt="American Colonization Society" /></a></td>
<td valign="top"><h3><a name="acs" id="acs"></a>American Colonization Society<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=american%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=colonization%20society&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"> <img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
	<p>In December 1816, delegates met in Washington, D.C. and organized the American Colonization Society. They voted to begin seeking voluntary removal of U.S. blacks to Africa. That same year, thirty-eight African-American passengers were taken to Sierra Leone by a merchant named Paul Cuffee, a free black member of the Society of Friends. The Colonization Movement was controversial within the Society of Friends.</p></td>
	</tr>
		
	<tr>	
	 <td rowspan="2" valign="top"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4635" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=4635&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=55&amp;DMY=20&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Free Produce Society" alt="Free Produce Society" /></a></td>
<td valign="top"><h3><a name="fps" id="fps"></a>Free Produce Society of Pennsylvania <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=sewing%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=Free%20Produce%20Society%20of%20Pennsylvania&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20"  alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
	  <p>The free-produce movement was a boycott against goods produced by slave labor. In 1826, Friends in Wilmington, Delaware, drew up a charter for a formal free-produce organization and Baltimore Quaker Benjamin Lundy opened a store that sold only goods obtained by labor from free people. In 1827, the movement expanded with the formation in Philadelphia, Pennsylvania of the "Free Produce Society" founded by Thomas M'Clintock and others. Though the free-produce movement was not intended as a sectarian response to slavery, most of the free-produce society were comprised of Quakers. See also <a href="#pfpaf">Philadelphia Free Produce Association of Friends</a>. </p></td>
	</tr>
	<tr>
		<td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
	  </tr>
    <tr>
         <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7282" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=7282&amp;action=2&amp;DMSCALE=8&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=15&amp;DMY=50&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Friends Association for the Aid and Elevation of the Freedmen" title="Friends Association for the Aid and Elevation of the Freedmen" /> </a></td>
      <td valign="top"> <h3><a name="faaef" id="faaef"></a>Friends Association for the Aid and Elevation of the Freedmen  <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=american%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=colonization%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=sewing%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=aid%20and%20elevation&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
<p>Established by Hicksite Quakers in 1864, this association provided charitable assistance to recently freed slaves. It opened around the same time as an equivalent Orthodox Quaker group (Friends' Freedmen's Association), and about two years after the Women's Association of Philadelphia for the Relief of the Freedmen&mdash;a largely but not exclusively Quaker group. The <a href="#nyaf">New York Association of Friends for the Relief of Those Held in Slavery and the Improvement of the Free People of Color</a> also existed at the same time. </p>
 </td>
    </tr>
   	   <tr>
          <td valign="top"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7152" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=7152&amp;action=2&amp;DMSCALE=15&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=285&amp;DMY=382&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="NY Assocation of Friends for the Relief of those Held in Slavery" alt="NY Assocation of Friends for the Relief of those Held in Slavery" /></a></td>

	  <td valign="top"> <h3><a name="nyaf" id="nyaf"></a>New York Association of Friends for the Relief of Those Held in Slavery and the Improvement of the Free People of Color   <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=american%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=colonization%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=sewing%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=aid%20and%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=relief%20of%20those%20held%20in%20slavery&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
<p>A Quaker society in New York City, organized in 1839. Its purpose was to support the abolition of slavery and educational charities for blacks. Similar organizations, including the <a href="#faaef">Friends Association for the Aid and Elevation of the Freedmen</a>, were founded in Philadelphia 25 years later.</p></td>
    </tr>

	<tr>
         <td valign="top"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4605" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=4605&amp;action=2&amp;DMSCALE=10&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=60&amp;DMY=0&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Manumission Society Members" alt="Manumission Society Members" /></a></td>

      <td valign="top"> <h3><a name="manumission" id="manumission"></a>The New-York Society for Promoting the Manumission of Slaves,and Protecting Such of Them as Have Been, or May Be Liberated    <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=american%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=colonization%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=sewing%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=aid%20and%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=relief%20of%20those%20held%20in%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=new%20york%20manumission&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
<p>Formed in 1785&mdash; about a decade after the first American antislavery society, the <a href="#pas">Pennsyvlania Society for Promoting the Abolition of Slavery</a>&mdash;the New York society opened the African Free School two years afterwards. Its original members included John Jay and Alexander Hamilton. Later, many members of the Society of Friends, including Isaac T. Hopper, joined the society.</p>
 </td>
    </tr>
     <tr>
		 <td rowspan="2" valign="top"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11159" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11159&amp;action=2&amp;DMSCALE=7&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=60&amp;DMY=0&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Pennsylvania Anti-Slavery Society" alt="Pennsylvania Anti-Slavery Society" /></a></td>

	 <td valign="top"><h3><a name="pass" id="pass"></a>Pennsylvania Anti-Slavery Society    <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=american%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=colonization%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=sewing%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=aid%20and%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=relief%20of%20those%20held%20in%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=new%20york%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=pennsylvania%20anti-slavery%20society&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
	 <p>The <a href="#aass">American Anti-Slavery Society</a> was organized in Philadelphia in 1833, but the separate Pennsylvania branch of the society was not opened until 1837.</p></td>
	 </tr>
     <tr>
       <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
     </tr>
	 
	 <tr>
        <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11163" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11163&amp;action=2&amp;DMSCALE=20&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=180&amp;DMY=90&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Pennsylvania Hall Association" title="Pennsylvania Hall Association" /> </a></td>

      <td valign="top"> <h3><a name="pahall" id="pahall"></a>Pennsylvania Hall Association     <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=american%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=colonization%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=sewing%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=aid%20and%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=relief%20of%20those%20held%20in%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=new%20york%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=pennsylvania%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=pennsylvania%20hall&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /> </a><a href="pennsylvania_hall.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
<p>The Pennsylvania Hall Association was a stockholders association formed in 1837 to erect a building in Philadelphia, Pennsylvania, dedicated "to Liberty and the Rights of Man." The Hall was erected on 6th Street, between Cherry and Race Streets. Many of the primary movers behind the Association were Quakers involved in the anti-slavery movement. The building was opened on May 14, 1838, but, as a symbol of the abolitionist movement, it was destroyed by an angry mob on May 17, 1838.</p></td>
    </tr>
	<tr>
         <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1046" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=1046&amp;action=2&amp;DMSCALE=9&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=9&amp;DMY=60&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Pennsylvania Society for Promoting the Abolition of Slavery" title="Pennsylvania Society for Promoting the Abolition of Slavery" /> </a></td>

      <td valign="top"> <h3><a name="pas" id="pas"></a>Pennsylvania Society for Promoting the Abolition of Slavery      <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=american%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=colonization%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=sewing%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=aid%20and%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=relief%20of%20those%20held%20in%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=new%20york%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=pennsylvania%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=pennsylvania%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=Pennsylvania%20Society%20for%20Promoting%20the%20Abolition%20of%20Slavery&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
<p>Commonly known as the Pennsylvania Abolition Society, this was the first anti-slavery organization in the United States. Begun in Philadelphia in 1774 by the Quaker Anthony Benezet, its membership was substantially composed of Friends. It was reorganized in 1784, and again in 1787, when it was renamed the Pennsylvania Society for Promoting the Abolition of Slavery, the Relief of Free Negroes Unlawfully Held in Bondage, and for Improving the Condition of the African Race. In 1833, abolitionists frustrated with the slow pace and compromising attitude of the Pennsylvania Abolition Society founded the more radical <a href="#aass">American Anti-Slavery Society</a> and its subsidiary <a href="#pass">Pennsylvania Anti-Slavery Society</a>.</p>
 </td>
    </tr>
	
   <tr>
          <td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1069" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=1069&amp;action=2&amp;DMSCALE=5&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=40&amp;DMY=60&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Pennsylvania Yearly Meeting of Progressive Friends" title="Pennsylvania Yearly Meeting of Progressive Friends" /> </a></td>

	  <td valign="top"> <h3><a name="prog" id="prog"></a>Pennsylvania Yearly Meeting of Progressive Friends <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=american%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=colonization%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=sewing%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=aid%20and%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=relief%20of%20those%20held%20in%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=new%20york%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=pennsylvania%20anti-slavery%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=pennsylvania%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=Pennsylvania%20Society%20for%20Promoting%20the%20Abolition%20of%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=progressive%20friends&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /> </a>
      
      <!--<a href="progressive_friends.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a>--> </h3>
      
<p>Opened at Old Kennett, Chester County, Pennsylvania, in 1853 as a separation from meetings in the Western Quarterly Meeting of Philadelphia Yearly Meeting (Hicksite). Progressive Friends were part of a reform movement which developed among Hicksite Friends in the 1840s, but also included many non-Quaker liberals and radicals. The largest group became formally organized as the Pennsylvania Yearly Meeting of Progressive Friends, which met at Longwood in Chester County, Pennsylvania, from 1853 to 1940. Progressive Friends advocated a religion of humanity which stressed the inherent goodness and perfectibility of humankind and promoted such reform causes as abolition of slavery, temperance, women's rights, opposition to capital punishment, prison reform, homestead legislation, pacifism, Indian rights, economic regulation, and practical and co-educational schooling. A similar group organized in Waterloo, N.Y. as the <a href="#cong">Yearly Meeting of Congregational Friends</a>.</p>
 </td>
    </tr>
   
	<tr>
	  <td valign="bottom"><p align="right"><a href="#top" target="_top">TOP</a></p></td>
	  </tr>
	<tr>
        <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11661" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11661&amp;action=2&amp;DMSCALE=10&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=31&amp;DMY=60&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Philadelphia Free Produce Association of Friends" title="Philadelphia Free Produce Association of Friends" /> </a></td>

      <td valign="top"> <h3><a name="pfpaf" id="pfpaf"></a>Philadelphia Free Produce Association of Friends <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=Free%20Produce%20Society%20of%20http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=Philadelphia%20Free%20Produce%20Association%20of%20Friends&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a></h3>
<p>The free-produce movement was a boycott against goods produced by slave labor. Though the free-produce movement was not intended as a sectarian response to slavery, most of the free-produce associations were Quakers: the idea of a boycott of slave produce dates from at least the mid 18th century when it was advocated by John Woolman, Joshua Evans and others. The Philadelphia Free Produce Association of Friends, founded in 1846, was a specificially Quaker organization.</p></td>
    </tr>

		<tr>
        <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11712" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11712&amp;action=2&amp;DMSCALE=4&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=60&amp;DMY=30&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Underground Railroad" title="Underground Railroad" /> </a></td>

      <td valign="top"> <h3><a name="ugrr" id="ugrr"></a>Underground Railroad <a href="http://triptych.brynmawr.edu/cdm4/results.php?amp;CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=underground%20railroad&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a><a href="../people/relationship_map.php"> <img src="../../images/relationshipmap_dc.png" height="20" width="20" alt="relationships"  border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Explore Relationship Map" /></a> <a href="underground_railroad.php"><img src="../../images/commentary_dc.png" height="20" width="20" alt="info" border="0" class="floatleft" style="padding: 0px 0px 0px 0px" title="Read Scholarly Commentary" /></a></h3>
        <p>The Underground Railroad was not a formal society, but a loosely-organized network of abolitionists dedicated to helping slaves escape to freedom. These &quot;conductors&quot; of the Underground Railroad hid runaways in safehouses along the route north, formed vigilance committees in major cities, and provided legal advice to runaways who were captured. It is impossible to pin down a precise start date, but one of the eariest references to runaway slaves receiving organized assistance comes from a letter written by George Washington in 1786. When a neighbor's slave escaped, Washington wrote to Robert Morris that &quot;a society of Quakers, formed for such purposes, have attempted to liberate him...acting repugnant to justice...[and] in my opinion extremely impoliticly with respect to the State.&quot; Quakers remained a dominant presence in the Underground Railroad network for almost two centuries, and many prominent Friends&mdash;including <a href="../people/index.php#hopper">Isaac T. Hopper</a>, <a href="../people/index.php#garrett">Thomas Garrett</a>, and <a href="../people/index.php#pennypacker">Elijah F. Pennypacker</a>&mdash;were known to be involved. </p> </td>
    </tr>
		<tr>
        <td rowspan="2" valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,10009" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=10009&amp;action=2&amp;DMSCALE=9&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=0&amp;DMY=40&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Yearly Meeting of Congregational Friends" title="Yearly Meeting of Congregational Friends" /> </a></td>

      <td valign="top"> <h3><a name="cong" id="cong"></a>Yearly Meeting of Congregational Friends <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=congregational%20friends&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank"><img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a></h3>
      <p>Progressive Friends in the Scipio, Farmington and Michigan Quarterly Meetings separated in 1848 from Genesee Yearly Meeting: Waterloo Yearly Meeting of opened in 1849 under the Basis of Religious Association (1848). It was composed of the former Junius Monthly Meeting and other Friends separating from the Scipio Quarterly Meeting. It became the Annual Meeting of the Friends of Human Progress in 1854, and continued until approximately 1884. See also <a href="#prog">Pennsylvania Yearly Meeting of Progressive Friends</a>.</p>
 </td>
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