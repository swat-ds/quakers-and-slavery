<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_nosidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Themes </title><!-- InstanceEndEditable -->

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
  <h1>Themes</h1>

  <p>This page features brief descriptions of themes related to Quakers and Slavery. Take the opportunity to learn more about Quakers &amp; Slavery by browsing documents and reading scholarly commentary related to each of the following themes. </p> <br /> 
 
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
          <option value="#1754">1754</option>
       <!-- <option value="#18thcent">18th Century Abolition</option>-->
<!--<option value="#women">Ant-Slavery &amp; Women's Rights</option>-->
          <option value="#earlyprotests">Early Protests</option>
<!--  <option value="#produce">The Free Produce Movement</option>-->
<!--<option value="#progressive">Progressive Friends</option>-->
<option value="#Rwomen">Radical Quaker Women</option>
<option value="#rescue">Rescue of Jane Johnson</option>
<!--<option value="#southern">Southern Quakers &amp; Slavery</option>-->
<option value="#whiteslaves">The White Slaves</option>

          
     </select>
 
</p>
</div>
 <div class="column2">
 <div align="center" style="border: 2px solid #bdb89a; background: #ECE5B6; padding:0px 0px 0px 0px; margin-bottom: 10px;"> 
 <table> <tr>
 <td> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" />&nbsp;<strong>SEARCH primary sources</strong></td>
 <td><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" />&nbsp;<strong>READ scholarly commentary</strong></td>
 <td><img src="../../images/relationshipmap_dc.png" height="25" width="25" border="0" alt="Relationship Map Icon Icon" title="Realtionship Map" />&nbsp;<strong>EXPLORE relationship maps</strong></td>
 </tr></table>
 </div>
</div> </div>
</div>
<div id="lower">

   <table border="0" cellpadding="20px" cellspacing="10px">
<tr><td></td></tr>
    <tr>    <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,497" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=497&amp;action=2&amp;DMSCALE=16&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=15&amp;DMY=2&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" border="0" alt="Some Considerations..." title="Some Considerations..." /></a></td>
      <td valign="top"> <h3><a name="1754"></a>1754&nbsp;&nbsp; <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=1754&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="1754.php"><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
      <p>In 1754 the Society of Friends began to take a clear stance on the issue of slavery. The Philadelphia Yearly Meeting approved the publication of John Woolman's essay against slavery <i>&quot;Some Considerations on the Keeping of Negroes&quot;</i>. Woolman's essay protests slavery on religious grounds. Later in the same year Philadelphia Yearly Meeting wrote AN EPISTLE of Caution and Advice, to the Quarterly Meetings urging against the buying and keeping of slaves. </p>
    <br />
    <br />
       </td>
  </tr>
  
   
 
<!--
      <tr> <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11157" target="_blank"> <img class="floatleft" align="left" height="130" width="130" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11157&amp;action=2&amp;DMSCALE=11&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=30&amp;DMY=100&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt=""/> </a>
      </td>
      
      
    <td valign="top"><h3><a name="18thcent"></a>18th Century Abolition &nbsp;&nbsp;<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=all&amp;CISOFIELD1=date&amp;CISOBOX1=17**&amp;CISOOP2=all&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=all&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=all&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=&amp;c=all&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="18thcent.php">  <img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /> </a> </h3>
      
      &nbsp;
      &nbsp;
      
    </td>
     
    </tr>
-->

 <!--
   
    <tr>    <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11173" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11173&amp;action=2&amp;DMSCALE=27&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=0&amp;DMY=2&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" border="0" alt="Women's Rights Medal" title="Women's Rights Medal" /></a></td>
      <td valign="top"> <h3><a name="Women"></a>Anti-Slavery &amp; Women's Rights&nbsp;&nbsp; 
      <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=0&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Women%27s+Rights&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="women.php"><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
      <p></p>
    <br />
    <br />
       </td>
  </tr>
   
 -->
   
    <tr> <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,5837" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=5837&amp;action=2&amp;DMSCALE=27&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=118&amp;DMY=110&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Germantown Protest" /></a></td>
      <td valign="top"> <h3><a name="earlyprotests"></a>Early Protests&nbsp;&nbsp; <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=all&amp;CISOFIELD1=geogra&amp;CISOBOX1=&amp;CISOOP2=all&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=all&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=all&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=protest&amp;c=all&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="earlyprotests.php"><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
      <p>Some members of the Society of Friends in Philadelphia took an anti-slavery stance as early as the late 17th century. Their position on the issue of slavery was written in protests and presented to various meetings up the hierarchical chain finally reaching the Philadelphia Yearly Meeting. Learn more about these early protests and the Philadelphia Yearly Meeting's response.  </p>
    <br />
    <br />
       </td>
  </tr>
  
   
   
    
<!--
  <tr>    <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,986" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=986&amp;action=2&amp;DMSCALE=14&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=45&amp;DMY=55&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Free Produce" title="Free Produce" /></a></td>
      <td valign="top"> <h3><a name="produce.php"></a>The Free Produce Movement&nbsp;&nbsp; <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Free+Produce&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="free_produce.php"><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
      <p>The free-produce movement was a boycott against goods produced by slave labor. In 1826, Friends in Wilmington, Delaware, drew up a charter for a formal free-produce organization and Baltimore Quaker Benjamin Lundy opened a store that sold only goods obtained by labor from free people. In 1827, the movement expanded with the formation in Philadelphia, Pennsylvania of the &quot;Free Produce Society&quot; founded by Thomas M'Clintock and others. </p>
    <br />
    <br />
       </td>
  </tr>
-->



<!--
  <tr>    <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1069" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=1069&amp;action=2&amp;DMSCALE=5&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=40&amp;DMY=70&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Progressive Friends" /></a></td>
      <td valign="top"> <h3><a name="progressive"></a>Progressive Friends&nbsp;&nbsp; <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Progressive+Friends&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="progressive.php"><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
      <p>Progressive Friends (also called &quot;Congregational Friends&quot;) A reform movement which developed among Hicksite Friends in the 1840s, but also included many non-Quaker liberals and radicals. Progressive Friends advocated a religion of humanity which stressed the inherent goodness and perfectibility of humankind and promoted such reform causes as abolition of slavery, temperance, women's rights, opposition to capital punishment, prison reform, homestead legislation, pacifism, Indian rights, economic regulation, and practical and co-educational schooling.      </p>
    <br />
    <br />
       </td>
  </tr>
  
-->

 <tr>    <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1564" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=1564&amp;action=2&amp;DMSCALE=10&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=25&amp;DMY=60&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Female Teachers of FFA" title="Female Teachers of FFA" /></a></td>
     
     
     <td valign="top"> <h3><a name="Rwomen"></a>Radical Quaker Women&nbsp;&nbsp; <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&CISOBOX1=&CISOFIELD1=CISOSEARCHALL&CISOOP2=exact&CISOBOX2=women%27s%20rights&CISOFIELD2=CISOSEARCHALL&CISOOP3=any&CISOBOX3=&CISOFIELD3=CISOSEARCHALL&CISOOP4=none&CISOBOX4=&CISOFIELD4=CISOSEARCHALL&CISOROOT=/HC_QuakSlav&t=a" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="radical_quaker_women.php"><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
      <p>Learn about radical Quaker women by exploring their role abolition in Pennsylvania and the early Women’s rights movement.  Topics discussed include the American Anti-Slavery Society, rural Quaker women, and the first Women’s Rights Convention held at Seneca Falls, New York, 1848. </p>
    <br />
    <br />
       </td>
  </tr>


  <tr>    <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11727" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11727&amp;action=2&amp;DMSCALE=20&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=30&amp;DMY=60&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="Williamson" /></a></td>
     
     
      <td valign="top"> <h3><a name="rescue"></a>Rescue of Jane Johnson&nbsp;&nbsp; 
      <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Jane+Johnson&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="johnson.php"> <img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
       <p> In 1855, the slave Jane Johnson and her two children travelled through Philadelphia with their master, John Hill Wheeler. Johnson sent a message to the Pennsylvania Anti-Slavery Society that she wished to escape, and on July 18, Passmore Williamson, William Still, and five other free blacks confronted Wheeler and escorted Johnson and her children to freedom. The event was one of the first challenges to the 1850 Fugitive Slave Law. Passmore Williamson, William Still and the other free blacks were charged for their role in Johnson's 'abduction;' Lucretia and James Mott sheltered Johnson during the trial so that she could testify on her rescuers' behalf. </p>
    <br />
    <br />
       </td>
  </tr>




<!--  <tr>    <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8024" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=8024&amp;action=2&amp;DMSCALE=21&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=125&amp;DMY=435&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" border="0" alt="Notes on Abolition" /></a></td>
      <td valign="top"> <h3><a name="colonization"></a>Sheppard &amp; Colonization&nbsp;&nbsp; <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=all&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=all&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=all&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=all&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=colonization&amp;c=all&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="colonization.php"><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
      <p></p>
    <br />
    <br />
       </td>
  </tr> 
  -->
  <!--
 <tr>
  <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11721" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11721&amp;action=2&amp;DMSCALE=5&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=75&amp;DMY=130&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="US Map" /> </a></td>
 <td valign="top"> <h3><a name="southern"></a>Southern Quakers &amp; Slavery&nbsp;&nbsp;<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=all&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=all&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=all&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=all&amp;CISOFIELD4=geogra&amp;CISOBOX4=southern&amp;c=all&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="southern.php"><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
 
      <p> </p>
    <br />
    <br />
       </td>
  </tr>
  
  
  
    -->


   
 <tr>    <td valign="top"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11521" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11521&amp;action=2&amp;DMSCALE=5&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=45&amp;DMY=20&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" alt="White Slaves" /></a></td>
      <td valign="top"> <h3><a name="whiteslaves"></a>The White Slaves&nbsp;&nbsp; <a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=thumb&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=0&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=subjec&amp;CISOBOX1=national+freedman%27s+relief+association&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank"> <img src="../../images/primarysources_dc.png" height="25" width="25" border="0" alt="Primary Sources Icon" title="Primary Sources" /></a>&nbsp;&nbsp;<a href="white_slaves.php"><img src="../../images/commentary_dc.png" height="25" width="25" border="0" alt="Commentary Icon" title="Scholarly Commentary" /></a></h3>  
      <p>In 1863, the National Freedman's Association, in collaboration with the American Missionary Association and interested officers of the Union Army, launched a propaganda campaign to raise money to keep schools running in Louisiana. Five children and three adults, all former slaves from New Orleans, were sent to the North on a publicity tour. The authors of this campaign aroused sympathy for blacks by portraying them as white. The portraits were sold for 25 cents each. The proceeds of the sale were directed to Maj. Gen. Nathaniel P. Banks in Louisiana, where the money would be &quot;devoted to the education of colored people.&quot; </p>
    <br />
    <br />
       </td>
  </tr>
  
   


   
    
 <!--  <tr> <td valign="top"><p align="right"><a href="#top" target="_top">TOP</a> </p></td></tr> -->
 
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