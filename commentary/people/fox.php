<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : George Fox</title><!-- InstanceEndEditable -->

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
   <a href="fox.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="fox.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>

    <h2>Jump to Section</h2>
    <h3><a href="#foxattitudes">Fox's Attitudes to Slavery</a></h3>
	<h3><a href="#otherattitudes">Other Early Quakers' Attitudes to Slavery</a></h3>
	<h3><a href="#pym">Policy Decisions of Philadelphia Yearly Meeting</a></h3>
  	<h3><a href="#references">References</a></h3>
	<h3><a href="#sources">Primary Sources</a></h3>
	<p></p>
    <h2>Related Topics</h2>
	<h3><a href="../themes/earlyprotests.php">Early Protests</a></h3>
 	<h3><a href="../themes/1754.php">1754</a></h3> 
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    <a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8832" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11149&amp;action=2&amp;DMSCALE=7&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=15&amp;DMY=15&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" alt="George Fox" title="George Fox" /></a>
          <h1>George Fox's Ambiguous Anti-slavery Legacy<a href="#note1">*</a> <a href="#note2">**</a></h1>
          <h3>By J. William Frost </h3>
          <p><i>Emeritus Howard M. and Charles F. Jenkins Professor of Quaker History and Research, Swarthmore College.</i></p>
      <br />
      <br />
      <br />
      <br />

<h3>Introduction</h3>
<p>Friends have long been somewhat puzzled, perhaps even embarrassed, that the two most prominent 17th-century Quakers, George Fox and William Penn, made so slight a contribution to the Quaker-led early antislavery movement. Penn's reputation for fair treatment of the Indians is well deserved; his lack of interest in anti-slavery is equally prominent. When in 1700 Penn suggested to Philadelphia Monthly Meeting the need for special meetings for worship with blacks and with Indians, he volunteered to help only with those for Indians.<sup><a href="#one">1</a></sup> The editors of the <i>Papers of William Penn</i>, and Alison Hirsch in her dissertation on Hannah Penn, have discovered that the Penns bought and sold slaves and hired the labour of other slaves for use in the manor at Pennsbury.<sup><a href="#two">2</a></sup></p> 
<p>In comparison with Penn, George Fox has appeared much more enlightened.<sup><a href="#three">3</a></sup> After all, his <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,574" target="_blank">Gospel Family-Order</a>, based upon a sermon taken down when he preached at Barbados, advocated freeing slaves after a period of years, using an analogy to a similar practice of the jubilee year discussed in the books of Exodus and Jeremiah. Fox also advocated the humane treatment of slaves, proclaimed that Christ died for all people--whites, blacks, and Indians--and insisted upon the necessity of treating the marriages of blacks like those of whites. Fox's <i>To the Ministers, Teachers, and Priests . . . in Barbados</i> influenced the Anglican clergyman Morgan Godwyn to take an interest in converting blacks.<sup><a href="#four">4</a></sup> Fox's attitudes appear very progressive as compared to virtually all other Quaker and non-Quaker visitors to the West Indies.</p> 
<p>This article has three foci: <a href="#foxattitudes">Fox's attitudes to slavery</a>, <a href="#otherattitudes">the reasons a few early Quakers opposed slavery</a>, and <a href="#pym">the policy decisions of Philadelphia Yearly Meeting</a> between 1696 and 1701 on the Quaker responsibility to black slaves. The thesis is that an omission in Fox's epistles, journals, sermons, and manifestos--of which the most famous is the Barbados declaration of faith--made the condemnation of slavery as an institution more difficult. Because Fox never addressed the morality of slavery <i>per se</i>,<sup><a href="#five">5</a></sup> his writings on slavery could be used by conservative slave-owning Friends in Philadelphia Yearly Meeting in 1701 to silence the abolitionists. A recently discovered [as of 1991] document by the Barbados Quaker minister, George Gray, who migrated to Philadelphia in 1696, shows how Fox's emphases could undermine anti-slavery. Gray's document also illuminates why Philadelphia Friends in 1701 decided to republish Fox's <i>Gospel Family-Order</i>. At a time when a considerable number of Pennsylvania Quakers questioned the morality of slavery, the conservatives in control of the press saw in Fox's acceptance of slavery a means of neutralising the nascent anti-slavery movement.</p>
<p>Because of the scattered nature of the documents, interpretations of the lack of success of the 17th-century Quaker anti-slavery movement cannot be proven beyond a reasonable doubt. To build my case, I shall first describe Fox's surviving writings concerning slavery, then compare his arguments with other 17th-century anti-slavery advocates,<sup><a href="#six">6</a></sup> notably: William Edmundson, <a href="../themes/earlyprotests.php#Germantown">the Germantown protesters</a>, Cadwalader Morgan, Robert Piles, George Keith, and Richard Hill. An analysis of George Gray's letter to Friends on slavery will be used to show the similarity between his approach and Fox's. Gray was the only member of Philadelphia Yearly Meeting whose writing defending slavery has survived. Neither the Hill nor Gray document has ever been published or even cited; together they provide significant new evidence to incorporate into our understanding of early anti-slavery. In conclusion, I shall speculate about why on the issue of slavery Fox's leading by the light did not result in purity of judgment. Fox often claimed that perfection allowed for growth in insight. Unfortunately, on slavery Fox stood still after 1671 while his peers went forward.</p> 

<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="foxattitudes" id="foxattitudes"></a>Fox's Attitudes to Slavery</h2>
<h3>Visit to Barbados</h3>
<p>Fox's 1657 epistle 'To Friends beyond Sea, that have Blacks and Indian Slaves' established a theme that he would repeat consistently: the Gospel was to be preached to 'every creature' and 'is the Power that giveth <i>Liberty</i> and <i>Freedom</i>, and is <i>Glad Tidings</i> to every Captivated Creature under the whole Heavens'.<sup><a href="#seven">7</a></sup> Other epistles, 'For Friends in Barbadoes, Virginia, New England, and all the Islands about' and 'To Friends in Barbadoes' made no mention of slavery.<sup><a href="#eight">8</a></sup> Fox's first and only prolonged exposure to slave culture came when he spent three months on Barbados in 1671 and later travelled to Jamaica and the American mainland. His initial reaction to Barbados was judgmental; he experienced a 'sore Burden' and was greatly troubled, but his letters indicate he saw his depression not as a result of the severe illness which confined him to Thomas Rous's house for three weeks or his direct encounter with slavery, but because 'Families were not brought into order'.<sup><a href="#nine">9</a></sup></p> 
<p>The sources for knowledge of Fox's attitudes about slavery while in Barbados were eyewitnesses, Fox's epistles, the <i>Gospel Family-Order</i>, and the 1694 edition of the <i>Journal</i>. In creating a narrative for the published version of George Fox's <i>Journal</i>, Thomas Ellwood exercised considerable editorial freedom in reconstructing Fox's activities in Barbados from several accounts written by other Friends. He used a letter from Elizabeth Meeres to Margaret Fell telling of Fox's preaching to masters 'about trayneing up their Neigors in ye feare of god bought with theire money &amp; such as were borne in theire familyes so yt all may Come to ye knowledge of ye Lord . . . and yt theire overseers might deale mildely &amp; gentley with ym &amp; not use cruelty as ye maner of some is &amp; hath beene &amp; to make ym free after 30 years servitude'.<sup><a href="#l0">10</a></sup> Ellwood in Fox's <i>Journal</i> puts this letter into the first person, quoting Fox as saying, 'I desired them also that they would cause their <i>Overseers</i> to deal <i>mildly</i> and <i>gently</i> with their <i>Negros</i>, and not use <i>Cruelty</i> towards them, as the manner of some hath been and is; And that after certain Years of Servitude, they would make them free.'<sup><a href="#l1">11</a></sup> Ellwood may have made the change from 30 years to an indefinite period because the published version (but not the manuscript)<sup><a href="#l2">12</a></sup> of Fox's sermon titled <i>Gospel Family-Order</i> also listed no specific period. We do not know whether Fox changed his mind, forgot what he had said in Barbados, or later thought the 30 years too long or too short a period of servitude. But the final effect was that Philadelphia Friends who read the <i>Journal</i> received a less specific indication that Fox did not approve of perpetual slavery.</p> 
<p>Fox's <i>Journal</i> also reprints his paper to the governor and assembly at Barbados in 1671. Here Fox was more circumspect than in his preaching. To the authorities Fox insisted that opponents had slandered and lied in asserting that Friends taught the negroes to rebel. Rather, Fox and his companions exhorted the blacks 'to be sober &amp; to fear God and to Love their masters and mistresses, and to be faithful and diligent in their masters service &amp; business &amp; that then their masters &amp; Overseers will love them and deal kindly &amp; gently with them'. The negroes were not to beat their wives, steal, drink, swear, lie, or commit fornication. Whites and blacks had the same path to heaven, and masters had a responsibility for religious training of their families. There was no mention of eventual freedom for the black servants.<sup><a href="#l3">13</a></sup></p> 
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3><i>Gospel Family-Order</i></h3>
<p>The best source for understanding Fox's reaction to slavery in Barbados is <i>Gospel Family-Order</i> which is an account of what Fox preached at a men's meeting at the home of Thomas Rous. Rous was a wealthy slaveholder whose son married a daughter of Margaret Fell. The pamphlet claims the sermon was taken 'from the Mouth of George Fox', but the publication took place in London five years later. English Friends regularly used the Second Day Morning Meeting to read over, make corrections, and issue all Quaker publications. Following his trip to Barbados, Fox had journeyed to the English colonies on the mainland of North America and encountered slavery primarily in Maryland and Virginia. Considering the intense opposition and persecution of Friends by Anglicans in England and in the West Indies, either he or the Morning Meeting could have taken time to reflect on the exact wordings to make sure there were no untoward expressions.<sup><a href="#l4">14</a></sup> Still, the <i>Gospel Family-Order</i> shows expansion rather than change of emphasis of other accounts of Fox's preaching in Barbados.</p>
<p>Fox's reaction to slavery stemmed from his patriarchal views of the family. He cited Scriptural texts from Exodus, Leviticus, Deuteronomy, and Joshua showing the responsibility of the father/master to call together his family/household for worship and to enforce right order. All--whether strangers, heathen, servants (Fox did not apply the term slaves to blacks in <i>Gospel Family-Order</i>--were in Israel's covenant and must stand before God's judgment. The New Testament dispensation reinforced the fathers' duty to control family behaviour and gave responsibility to them to preach the gospel. Christ, proclaimed Fox, died for 'Tawnes', blacks, Turks, barbarians and whites and freed all from spiritual bondage. Fox may have been distressed at the moral failures brought about by slavery, but he did not see them as intrinsic to the institution.<sup><a href="#l5">15</a></sup></p> 
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3>Fox's Insights and their Impact</h3>
<p>Fox's most original insight occurred in the middle of his sermon and is essentially buried in the middle of a long paragraph. Here he focused on the Jewish jubilee described in Exodus and Deuteronomy and announced that the Jews released 'such as were of their own nation, and indeed this will very well become Christians . . . who should outstrip the jews to deal so . . . with their Servants and Apprentices, than of their own Nation of People'. Taken literally, such a practice would apply only to those servants who became Christians, since only they had become part of Israel/Christendom's 'own nation'. However, Fox extended the release to apply to all servants 'after a considerable Term of Years, if they have served them faithfully'.<sup><a href="#l6">16</a></sup> The sermon closed by again reminding masters of their responsibility to obey the law of God, and threatened judgment for failure.</p> 
<p>Fox's attitudes remain puzzling. It is possible that he misunderstood the nature of slavery and conceived of it as a kind of indentured servitude, since he did not refer specifically to black slavery and wanted freedom after a period of years. Yet Fox mentioned those born into servitude and warned whites that their children could become slaves--the only time he mentioned slavery. The most likely explanation is that Fox's language closely paralleled that of the Scriptures, and the biblical terms were strangers, heathen, bondsmen, servants, but not slaves. (Yet he used the term 'slaves' in a 1657 epistle.) Fox assumed that converting both masters and slaves would end the immorality and abuses that he found in both parties. He condemned the lack of marriage and frequency of adultery in slavery, holding the masters and the blacks responsible, but never mentioned the pervasive physical cruelty and near-starvation of the slaves. Fox's <i>Gospel Family-Order</i> shows little moral indignation about the treatment of slaves in the West Indies.</p>
<p>Of Fox's companions in 1671, William Edmundson, John Burnyeat, and Elizabeth Hooten left information on their reaction to Barbados. Burnyeat, who joined Fox on the mainland and had visited the island for seven weeks in 1664, during the summer in 1667, and for six months in 1670, wrote epistles to the white Quaker inhabitants which never mentioned the slave population.<sup><a href="#l7">17</a></sup> The closest Burnyeat came to anti-slavery was in an epistle written in 1670 condemning holding a fast day to end an epidemic: 'And such who instead of setting the oppressed free, of undoing the heavy Burthens, and make Yokes instead of breaking them, such are not the People the Lord will accept in their Fasts.'<sup><a href="#l8">18</a></sup> Edmundson said only that in Barbados 'we had many large precious Meetings . . . and many were brought into the way of Life &amp; Peace with God'.<sup><a href="#l9">19</a></sup> Elizabeth Hooten, in an epistle to the 'Rulers and Magestrats', demanded 'Justice and Judgment, for if one goe vp into the Countrey, there is A great Cry of the Poore being Robbed by Rich mens Negroes, Soe that they cannot with out great Troble, keep any thing from being Stolen'. Her solution was for each man to make sure his 'family have Suffitient food and any thing else the stand in need of'.<sup><a href="#20">20</a></sup> Here meeting the needs of slaves served only to help the small white planters. Hooten was more indignant about Anglican persecution of Friends on the island than over the treatment of Negroes. Lydia Fell's tract to the inhabitants of Barbados, published in 1676, denounced persecution of Quakers and exhorted Friends to hold to the purity of the light. She did not discuss the slave population.<sup><a href="#21">21</a></sup></p> 
<p>Between 1671 and 1682 George Fox sent several epistles to Friends in areas with significant slave populations, including Barbados.<sup><a href="#22">22</a></sup> He remained concerned with the religious training of black servants but never addressed their eventual freedom. He does not appear to have ever questioned the legitimacy of slavery.</p> 
<p align="right"><a href="#top" target="_top">TOP</a> </p>

<a name="otherattitudes"></a><h2>Other Early Quakers' Attitudes to Slavery</h2>
<h3>William Edmundson</h3>
<p>William Edmundson returned to Barbados in 1675. Edmundson on this journey to the colonies began to question the treatment of black servants and the justice of the institution. Perhaps it was the effect of encountering a slave ship short of drinking water with 300 Africans bound for Barbados. Edmundson also visited Rhode Island where, in the aftermath of King Philip's War, Friends opposed enslaving Indians. He extended their concern to include blacks. Alternatively, he could have realised that Fox's preaching had not resulted in improved conditions for the enslaved Africans and, therefore, concluded that the flaw lay in lifetime chattel slavery. Edmundson spent five months on Barbados and claimed successes in converting settlers, establishing discipline in meetings, and in countering Anglican charges that making slaves Christians was to make them rebels. Edmundson told the governor that to bring the negroes 'to the Knowledge of God and Christ Jesus . . . would keep them from Rebelling, or Cutting any Man's Throat: but if they did rebel, and cut their Throats . . . it would be through their own Doings, in keeping them in Ignorance, and under Oppression, giving them Liberty to be common with Women (like Beasts) and on the other hand starve them for want of Meat and Cloaths convenient: so giving them Liberty in that which God restrain'd, and restraining them in that which God allow'd and afforded to all Men, which was Meat and Cloaths'.<sup><a href="#23">23</a></sup></p>
<p>Edmundson, in epistles addressed to slaveholders, like Fox cited the Old Testament patriarchs, sought to evangelise the slaves, and stressed the jubilee year practice. Going beyond Fox, he used the non-observance of jubilee to condemn the institution of slavery. He saw sin as integral to a 'perpetual Slavery' which was an 'Agrivasion and Oppression upon the Mind'. Slavery for black and for Indian was 'unlawful'. Masters who kept their negroes in conditions of intellectual ignorance and physical deprivation should instead empathetically make the slaves' condition their own.<sup><a href="#24">24</a></sup> Edmundson realised that slavery retarded evangelisation of blacks even when Quaker masters brought them to meetings. A true Christianity would bring both spiritual and physical freedom.</p> 
<p>The Barbados planters saw Edmundson's preaching as a threat. The next year the assembly passed laws forbidding itinerant Quakers from holding meetings for worship and stopping masters from bringing slaves to religious gatherings.<sup><a href="#25">25</a></sup></p> 
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3>The Germantown Protest of 1688</h3>
<p>Travellers going to the West Indies from England generally sailed south before going west. Off the coast of Spain and North Africa they risked being captured by North African pirates and sold into slavery, practices universally condemned by Europeans. Fox's <i>Journal</i> recorded that on the way to Barbados his ship had been chased by what the captain and crew feared was a Turkish vessel attempting to capture them. Fox's advice on which way to sail had allegedly saved the ship from capture and the crew and passengers from slavery.<sup><a href="#26">26</a></sup> The Germantown Protest of 1688 began with a protest against the Ottomans' selling Christians into slavery.</p>
<p>Unlike Fox and Edmundson, the Germantown Quakers in 1688 concentrated upon the slave trade, which they described using the commandment in Exodus against 'man-stealing'.<sup><a href="#27">27</a></sup> Such man-stealing separated husbands from wives and from children. Slavery also threatened the peace testimony, for unhappy slaves could rebel. Fox and Edmundson believed in preaching the Gospel to all races because they were of one blood; the Germantown Protest jumped one step further and insisted that liberty did not stop at the colour line. In England and in Europe Quakers protested against oppression of conscience; but in Pennsylvania, supposed to be a land of freedom, Friends treated men like cattle because they were black. The Germantown Protest echoed the 'holy experiment' and 'land of the free' themes espoused by Penn and the first settlers.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3>The Keithians</h3>
<p>The 1688 Germantown Protest, submitted through regular channels, was not endorsed by any meeting, but--after being referred from monthly, to quarterly, to the yearly meeting--was shelved. So the honour of having a meeting endorse anti-slavery belongs to the Keithian Quakers of Philadelphia who in 1693 published the most eloquent early Quaker protest against slavery.<sup><a href="#28">28</a></sup> The Keithians, or 'Christian Quakers', began with the same framework as Fox: Christ's ransom for all, the golden rule, and the need to spread the Gospel. Unlike Fox, the Keithians did not divorce spiritual and physical bondage. Christ came to bring 'ease and deliver the Oppressed and Distressed, and bring into Liberty both inward and outward'. Slavery was wrong because it was man-stealing, because it contradicted the golden rule and the year of jubilee, and because there was no greater oppression in any institution anywhere. Even Turkish slavery was mild compared to practices in Barbados. Slavery retarded the preaching of the Gospel in Africa, where it caused wars, and in America where it brought violence, cruelty, and theft. Its whole purpose was to make men rich by depriving others. Those who were true Christians would buy no slaves except to free them; those who already owned slaves should teach them to read and obtain a knowledge of Christianity and then, after a 'reasonable time of moderate Service', which would cover the cost of purchase or child rearing, set them free.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3>Cadwalader Morgan, Robert Piles and Richard Hill</h3>
<p>There were three anti-slavery declarations between 1696 and 1698, two originating in Pennsylvania and one in England. The two Pennsylvania protests are intensely personal: Cadwalader Morgan and Robert Piles presented to the meeting their internal debate over whether to buy a slave. Cadwalader Morgan discussed the issue with Friends: 'some advised me to buy and others to forbear'.<sup><a href="#29">29</a></sup> Though his need for an additional labourer was strong, Morgan refrained because the ground of his concern was worldly gain. Citing the example of Abraham, who willingly offered as a sacrifice his son Isaac because of the command of God, Morgan--while refusing to condemn those who bought slaves--wished all Friends considering the purchase of slaves to lay the matter before the Lord for guidance.</p> 
<p>Piles's main contribution to anti-slavery literature was his telling of his dream of picking up a black pot and then attempting to climb a ladder to heaven.<sup><a href="#30">30</a></sup> So long as he carried the black pot, he could not ascend. The analogy to Jacob's struggle with the angel and dream of a ladder to heaven would have been clear to Friends. Piles concluded that slavery negated the golden rule, required a militia to defend against a rebellion, caused wars in Africa, and hindered the spread of the Christian religion. He argued that during the gospel dispensation, it was not lawful to buy negroes for lifetime service. Those who already owned slaves should convert them and then set them free. Quarterly meetings could judge whether a slave was truly converted and should become free. Clearly, Pile drew upon the Scriptural verses distinguishing between the treatment of Hebrew bondsmen and strangers. Those who argued that the justification for bondage was to bring 'Ethiopians' to Christ had to explain lifetime servitude.</p> 
<p>Richard Hill, a Maryland ship captain and merchant, traded with Pennsylvania and London from 1690. He also corresponded with William Penn.<sup><a href="#31">31</a></sup> In 1700 Hill moved to Philadelphia and married Hannah Delavall, a widow who was the daughter of Thomas Lloyd. Hill, like Isaac Norris and Samuel Carpenter, became a confidant of Penn and supporter of most proprietary policies. Before his death in 1729, Hill became a wealthy and prominent Pennsylvanian--member of the governor's council, speaker of the assembly, commissioner of property, and provincial judge. His wife was a minister, and Richard Hill paid for the publication of their daughter Hannah Hill's dying sayings in 1717. Hill's Maryland origin, later career in trade, and conservative politics mark him as a most unlikely anti-slavery Friend.<sup><a href="#32">32</a></sup></p> 
<p>In 1698 Hill sent a letter to James Dickinson, an English Quaker minister who visited Barbados and also Philadelphia in 1696 and played a significant role in limiting the effects of the Keithian schism.<sup><a href="#33">33</a></sup> Hill wrote down a 15 line anti-slavery poem on the letter. [Copy printed with original publication of this article.] Unlike Piles's and Morgan's statements, Hill's poem is impersonal and is based upon a comparison of African slavery with Pharoah's oppression of the Israelites. The poem begins with the images of Egyptians trampling on God's people, whose groans rose to God; now Africa's groans ascend. How could Christians practise a slavery worse than 'Israells bonds' and seize a people who, unlike the ancient Jews who fled to Egypt for food, did not willingly come to America to escape a famine? The failure of masters to practise Christianity and the cruelties of slavery excluded the 'Ethiopians' from future bliss: 'What Cruell heart so hard them to deny the Enjoying temporall felicity, whom God posses'd with rights and liberty'.</p>

<p align="right"><a href="#top" target="_top">TOP</a> </p>
<a name="pym"></a><h2>Policy Decisions of Philadelphia Yearly Meeting</h2>
<h3>George Gray's <i>Testimony</i></h3>
<p>Considering the eloquent statements of Friends like Hill, the frequency of papers presented to the Yearly Meeting, and the number of Friends who opposed slavery, why did Philadelphia Yearly Meeting in 1701 decide to reprint Fox's <i>Gospel Family-Order</i>? An answer is found in an undated treatise presented to the meeting by the Quaker minister George Gray entitled <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,12045" target="_blank">'A Testimony for Family Meeting and keeping Nigro as Servants'</a>. [Copy printed with original publication of this article.] Gray, like Fox, never referred to the negroes as slaves, and he clearly knew the differences between an indentured servant and a slave. Gray, born in Scotland or England, became a small, slave-holding planter and shopkeeper in Barbados after 1666.<sup><a href="#34">34</a></sup> While continuing to own a plantation, he moved to Philadelphia in 1692, although twice before 1700 he asked for a certificate to visit Barbados. Gray, an infrequent attender of the meeting for ministers, signed a testimonial against George Keith. He also did a wide variety of tasks for Philadelphia Monthly Meeting: sought to persuade Thomas Fitzwater and his wife to live together, stopped Walter Long from selling Jews' harps, investigated 'clearness' for marriage, arbitrated business disputes, visited Friends who neglected to attend meeting for worship, and read aloud epistles of Philadelphia Yearly Meeting at the conclusion of meeting for worship. He was also a representative to the quarterly and yearly meetings.<sup><a href="#35">35</a></sup> Gray became an associate of Penn, who allegedly gave him a compass, and friend and relative through marriage (he survived four wives) of many prominent Philadelphia Quakers. His will, made in 1715, asked his family's old friend Isaac Norris to 'divide all the Negroes that are now living severally to my three sons'. After becoming infirm, Gray returned to Barbados, where he died in 1718.</p> 
<p>The title of Gray's <i>Testimony</i> paraphrases John 8:36: 'If the Son therefore shall make you free, ye shall be free indeed'. The wording and tone resemble a Fox epistle of 1668 which also begins by citing John 8:36 and contrasts heavenly freedom with death. 'So, they are not Captives, they are not Bondmen; they are not Servants, nor Slaves. But <i>(Mark) Free-Men</i> and <i>Free-Women</i>. And what hath made them Free-Men, and Free-Women, but <i>Truth</i>? For if the <i>Truth</i> hath made you free, then you are free indeed. So, free to worship God in the <i>Spirit</i> and in <i>Truth</i>.'<sup><a href="#36">36</a></sup> Fox's epistle, one of his more difficult writings to interpret, was clearly not about slavery or any form of physical bondage. Rather, he exalted God's grace which made Friends free from persecution even though it outwardly continued. The recent history of the rise and fall of Independents and Presbyterians, and of the national Church, showed God's triumph over outward religion.</p> <p>Gray took from the verse in John and from Fox's 1668 epistle the distinction between outward/physical/false and inward/spiritual/true freedom and applied it to slavery. Gray's Testimony resembles Fox's <i>Gospel Family-Order</i> more than any of the intervening works about slavery. Like Fox, Gray used extensive Old Testament citations, did not question the morality of slavery, and required Christian masters and mistresses to bring their slaves to family meetings to convert them. Their conversion would end with making the slaves free in will and in deed; that is, free from the bondage of sin; but there is no implication in Gray that such freedom required manumission. One verse prominent in <i>Gospel Family-Order</i> which Gray did not cite was the Exodus description of freeing Hebrew slaves after seven years, although he did quote the Jeremiah verse on the jubilee. Instead, Gray called blacks 'heathens by nature', and argued that instructing them, as Abraham and Joshua did their households, would make Friends 'clear of their blood'. A master who ordered his family according to God's will would facilitate the servants' experience of the Light, but 'to Sett any of them free in our own Will and Time we may brin[g] them into greater bondage to Sin and Satan'.</p> 
<p>Unlike Penn, who advocated special meetings for blacks, Gray wanted the servants brought to Quaker meeting on Sundays rather than be allowed 'Liberty' to 'go in Companyes neer the Town to Daunce &amp; drink &amp; have Merry Meetings'. Such meetings allowed evil to flourish and might result in the plotting of mischief.</p> 
<p>Unlike all the other writers cited in this paper, Gray wrapped himself in the mantle of weighty Friends. He quoted George Fox's advice to 'have &amp; keep Meetings with them', and cited--but did not quote--Edmundson on family meetings, though without mentioning Edmundson's opposition to slavery. Weighty Friends whom Gray quoted include William Penn, William Dewsbury and Christopher and Francis Taylor. His quotations were accurate, though often taken out of context, because most of these Quakers discussed families and servants but not the treatment of slaves. Some of the Scriptural quotations also did not specifically refer to the treatment of servants or slaves, and the manner in which the verses are intermingled with the text would have made it very difficult for a reader (or listener) to distinguish the biblical passages from Gray's contributions. All Gray's quotations of Quaker authors come from publications first issued before 1700. We cannot be sure that Gray's <i>Testimony</i> pre-dated the Philadelphia publication of <i>Gospel Family-Order</i>, although it is likely Gray could have heard Fox preach in Barbados or read earlier the 1676 edition of Fox's tract. Neither Fox's sense of divine judgment nor most of the verses used in Fox's <i>Gospel Family-Order</i> reappear.</p>
<p>Still, most striking is the similarity in subjects discussed and those not mentioned. Neither Fox nor Gray reflects upon the morality of slavery. Both utilise biblical quotations to show the necessity of converting blacks to Christianity and insist upon the masters' responsibility to enforce moral living. Both confuse the categories of slave and servant, even though they were well aware of the difference. Neither writer cites Leviticus 25:43 : 'Thou shalt not rule over him with rigour, but shalt fear thy God', or Exodus 21:20 : 'If a man smite his servant, or his maid, with a rod and he die under his hand, he shall be surely punished', or Colossians 4:1 : 'Masters give unto your servants that which is just and equal.' Gray could praise and quote Fox and Penn because they did not question the institution of slavery.</p> 
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3>Compromise of Philadelphia Yearly Meeting</h3>
<p>In 1700 the conservative members of Philadelphia Yearly Meeting who controlled the press had a problem: how to achieve a sense of unity on the slave trade and slavery? Thanks to the editors of a biographical dictionary of early Pennsylvania legislators, we now have detailed information about the members of Philadelphia Yearly Meeting's Overseers of the Press.<sup><a href="#37">37</a></sup> Each of the Overseers was prominent outside as well as in the meeting. All were either members of the council or assembly, all were wealthy, most had substantial trading interests and extensive lands. Several were close associates of William Penn, who was in the colony in 1701. Records show that Penn was consulted on other publications. All the Overseers were weighty Friends; several were ministers who engaged in extensive travel. All had been active in the condemnation of George Keith. Penn and one of the three Overseers owned slaves.</p> 
<p>In the aftermath of the Keithian controversy, Philadelphia Quakers feared disunity. The conservatives might have hoped that Keith's embracing of anti-slavery would have discredited the sentiments in favour of abolition. The narratives of Morgan, Piles and Hill showed the continued strength of anti-slavery agitation. Morgan recounted that he discussed his plight with many who advised against purchasing slaves. In 1696 'Several Papers' relating to negroes were read during the sessions of Philadelphia Yearly Meeting. In 1698 Pentecost Teague read to Philadelphia Monthly Meeting a paper about the selling of negroes in the public slave markets. The Gray <i>Testimony</i> shows that those who opposed abolition also presented papers. So Friends had to choose among weighty members claiming guidance of the Light for contradictory policies. The result was a 'sense of the meeting' perhaps best described as a compromise. In 1696 the Yearly Meeting advised Friends not to 'encourage' importing more slaves, to restrain those already present from 'Lewd living', and to bring them to meeting.<sup><a href="#38">38</a></sup> In response to Teague's complaint, Philadelphia Monthly Meeting advised Quakers 'not to sell them after this manner'.<sup><a href="#39">39</a></sup> One month later, nine weighty Friends--four of whom are known to have been slaveholders--asked Barbados Friends to refrain themselves and to request their neighbours to send no more negroes to the Delaware River Valley.<sup><a href="#40">40</a></sup> The Meeting of Ministers in 1697 picked five weighty Friends to read in advance all papers which might be read publicly. Although the minutes do not tell its contents, the ministers in 1699 stopped a paper of William Southeby--known to be a strong opponent of slavery--from being published.<sup><a href="#41">41</a></sup> The final part of the compromise, I suggest, was reprinting Fox's <i>Gospel Family-Order.</i></p> 
<p>Before 1701 Philadelphia Friends published only one tract of Fox; the minutes refer to the printing in 1686 of some papers of George Fox. The contents are unknown because there is no extant copy of the tract.<sup><a href="#42">42</a></sup> Of all the epistles and tracts written by Fox, why did the Overseers in 1701 decide to reprint <i>Gospel Family-Order</i>? The answer is that it offended no one and had something for everyone. For the abolitionist there was the suggestion that it would be pleasing to the Lord if slaves were freed after an indeterminate period. For the slaveholders there was no condemnation of the slave trade or slavery. Even conservative Philadelphia Friends believed in the sanctity of slave marriage and observance of the moral law. Abolition was strictly voluntary and there was no condemnation for postponement. There were also no specifics on treatment. George Gray and the slaveholding Overseers could live with <i>Gospel Family-Order</i>. And they could use the prestige of Fox to counter the radicals. Under the practices advocated by Fox, a Christian patriarchal master could continue to utilise slave labour under the guise of preaching the Gospel and family nurture. The strategy of publishing Fox's <i>Gospel Family-Order</i> to quell dissent was temporarily successful. There was no mention of slavery in the minutes of Philadelphia Yearly Meeting for 11 years, and the policy of official silence except on the importing and purchasing of slaves remained normative until 1754.</p> 
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3>Conclusion</h3>
<p>For the tercentenary commemoration of Fox's death [1991], the question rises as to why Edmundson was more perspicacious. There are a variety of answers, none of which can be proven. Perhaps Fox saw goodness in his Barbados host and relative-through-marriage, Thomas Rous. Fox arrived on the island very ill and spent the first week convalescing at the home of Rous. It would not be easy even for Fox to discern that a devout Quaker relative providing hospitality was making a living from an immoral institution. Also, Rous might have treated his 100 slaves in a manner which persuaded Fox that slavery, like indentured servitude, was a means to Christianise blacks. Edmundson's <i>Journal</i> makes clear that during Fox's visit and his own visit five years later many Quaker masters brought slaves to meeting.</p> 
<p>Although it is difficult to generalise about the social thoughts of a man who wrote so much on so many topics over many years, Fox most often concentrated upon an individual's responsibility in causing and ending sin. In the 1660s, for example, he did not denounce the institutions of monarchy, capitalism, and private property as causing the ills of English society. Rather he focused on Charles II, or greedy merchants, or extravagant wastrels and told them to follow the Light. Except in denouncing churches--whether Presbyterian, Roman Catholic, Anglican, or Independent--Fox did not focus on the collective dimensions of evil. So when he encountered slavery, he responded by preaching to masters rather than analysing the institution.</p> 
<p>Fox's perspective on slavery stemmed from his devotion to Scripture, from distinctions between outward and inward freedom, and from growing conservatism. The Bible verses utilised by Fox clearly assumed that God's blessing worked within a system of bondage. The only two documents discussed in this article that consist of proof texts were by Fox and Gray. Those who opposed slavery had to rely on the spirit of the golden rule as contrasted with the worldly purposes of slavery. Fox was already accustomed to separating physical from spiritual bondage. Lewis Benson's index of Fox's writings under the category of 'Truth' lists as definitions: freedom, liberty, God's free men and women.<sup><a href="#43">43</a></sup> Invariably, the citation in Fox's writing refers to spiritual freedom and liberty from the bondage of sin. Whatever social radicalism Fox had stood for in the 1650s had been toned down by the 1670s, except on those matters, like oaths, tithes, and liberty of conscience, enshrined in the faith. The journal of his trip to Barbados and America makes clear how much Friends relished the approval and the patronage of wealthy, important individuals. Converting these men and thereby improving the moral tone of their lives and those of their 'servants' was more important than freeing slaves. If Fox had advocated abolition, he would have doomed the spread of Quakerism in the South and the West Indies. Like Francis Asbury and the Methodists 125 years later, George Fox in 1671 subordinated the social Gospel to the evangelical Gospel. In retrospect, we can argue that Fox made a bad choice, for its anti-slavery impulse did ultimately destroy Quakerism in the West Indies and much of the South. So as we celebrate George Fox's many positive contributions, let us also remember that on slavery he was wrong while Edmundson and George Keith were right in claiming that true Christianity brought 'Liberty both inward and outward'. American Quakers would struggle with George Fox's ambiguous legacy until 1758 when Philadelphia Yearly Meeting unanimously pronounced against 'the practice of Importing, buying, selling or keeping Slaves'.<sup><a href="#44">44</a></sup></p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<br />  
<h2><a name="references"></a>References</h2>
<p><a name="note1"></a>* This article was originally delivered at Lancaster University in 1991, at an international conference commemorating the tercentenary of the death of George Fox. It is reprinted with the author's permission from <i>New Light on George Fox (1624-1691)</i>, edited by Michael Mullett (York, England: William Sessions, [1994]), pp. 69-88.</p> 

<p><a name="note2"></a>** The author wishes to thank Edwin Bronner, Kenneth Carroll, Craig Horle, and Jean Soderlund for their comments on an early draft of this article.</p>



<p><a name="one"></a><sup>1</sup> Philadelphia Monthly Meeting, Minutes, 1/29/1700 quoted in J. W. Frost, ed., <i>The Quaker Origins ofAntislavery</i> (Norwood, PA.: Norwood Editions, 1980), p. 73.</p>
 
<p><a name="two"></a><sup>2</sup> Alison Hirsch, <i>'Instructions from a Woman': Hannah Penn and the Pennsylvania Proprietorship</i> (Ph.D. diss., Columbia University, 1991); Mary Dunn and Richard Dunn, eds., <i>The Papers of William Penn</i> (Philadelphia: University of Pennsylvania Press, 1986), II, pp. 66-67, 256. Penn made a will in 1701 freeing his black slaves; a later will did not mention the slaves, although he still owned some. His financial status had deteriorated and it is possible that the slaves might have been seized to cover his debts.</p>

<p><a name="three"></a><sup>3</sup> Thomas Drake, <i>Quakers and Slavery in America</i> (New Haven, CN.: Yale University Press, 1950; reprinted in Gloucester, MA.: Peter Smith, 1965) remains the best treatment of early Quaker anti-slavery.</p>
 
<p><a name="four"></a><sup>4</sup> Winnifred Winkelman, <i>Barbadian Gross-Currents: Church-State Confrontation with Quaker and Negro 1660-1689</i> (Ph.D. diss., Loyola University of Chicago, 1976), pp. 214, 228-260.</p>

<p><a name="five"></a><sup>5</sup> Fox requested in 1674 that Barbados send him 'a black boy of your instructing, that I may see some of your fruits, and as I shall see, I shall make him a free man, or send him to you again'. Even if Fox, as he later said, suggested this only as a trial of faith, it certainly does not show moral revulsion to slavery. (Drake, <i>Quakers and Slavery</i>, p. 7.)</p>
 
<p><a name="six"></a><sup>6</sup> Alice Curween, who wrote an anti-slavery letter in 1676 to a Barbados widow, might be included since she clearly distinguished between servants and slaves, advocated allowing slaves to attend meeting, and talked about God's setting them Free in a way that thou knowest not: Edwin Bronner, 'An Early Antislavery Statement: 1676', <i>Quaker History</i>, 62, no. 1 (1973), pp. 47-50.</p> 
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3>Notes to 'Fox's Attitudes to Slavery'</h3>
<p><a name="seven"></a><sup>7</sup> George Fox, <i>A Collection of Many and Select Christian Epistles of . . . George Fox</i> (London: T. Sowle, 1698), p. 117.</p>
 
<p><a name="eight"></a><sup>8</sup> <i>Ibid.</i>, pp. 138, 140, 143.</p>
 
<p><a name="nine"></a><sup>9</sup> Fox, <i><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,574" target="_blank">Gospel Family-Order</a></i> (London, 1676), reprinted in Frost, <i>The Quaker Origins of Antislavery</i>, pp. 35-55.</p>
 
<p><a name="l0"></a><sup>10</sup> <i>The Journal of George Fox</i>, ed. Norman Penney (Cambridge: Cambridge University Press, 1911), p. 195.</p>
 
<p><a name="l1"></a><sup>11</sup> <i>A Journal . . . of . . . George Fox</i> (London: Northcott, 1694), p. 354.</p>

<p><a name="l2"></a><sup>12</sup>12 Microfilm of Miscellaneous Mss. along with Half-Yearly Meeting of Friends in Maryland, Women's Friends Minutes, 1677-1790 (Baltimore Yearly Meeting), 'What G:ff declared at ye women's meeting at Thomas Rouses, 28 Oct. 1671': Friends Historical Library of Swarthmore College.</p>
 
<p><a name="l3"></a><sup>13</sup> George Fox, <i>A Journal</i> (1694), pp. 360-61; <i>The Journal of George Fox</i> (1911), pp. 200-202.</p>
 
<p><a name="l4"></a><sup>14</sup> Morning Meeting, Minutes, Transcript vol. I, p. 14, 'At a Meeting at Gerrard Roberts the 24 5th Mo, 1676 . . . A paper of G. Foxes read and ordered to be printed by Ben: Clark. Memorandum. that G.F.s book entituled Gospell Family &amp;c all that hath Errours in printing be Corrected particularly page 10 line the 28 read not to worshipp Line the 30 not the feast--not of Christ--And that for the future he take Care to make Errata's to all the bookes he prints for friends for errors escaped the press.' I am indebted to Malcolm Thomas for this reference.</p>
 
<p><a name="l5"></a><sup>15</sup> Fox, <i><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,574" target="_blank">Gospel Family-Order</a></i> (London, 1676), reprinted in Frost, <i>The Quaker Origins of Antislavery</i>, pp. 35-55.</p> 

<p><a name="l6"></a><sup>16</sup> <i>Ibid.</i>, p. 51.</p>
 
<p><a name="l7"></a><sup>17</sup> <i>Truth Exalted in the Writings of . . . John Burnyeat</i> (London: Northcott, 1691), pp. 107-9, 113-121, 192-193, 254-64.</p>
 
<p><a name="l8"></a><sup>18</sup> <i>Ibid.</i>, p. 117. The oppressed are likely Quakers suffering religious persecution rather than slaves.</p> 
<p><a name="l9"></a><sup>19</sup> William Edmundson, <i>A Journal of the Life of William Edmundson</i> (Dublin: Fairbrother, 1715), p. 56.</p> 

<p><a name="20"></a><sup>20</sup> Emily Manners, 'Elizabeth Hooten', <i> Journal of the Friends Historical Society</i>, Supplement no. 2 (1914), p. 71.</p>
 
<p><a name="21"></a><sup>21</sup> Lydia Fell, <i>A Testimony and Warning Given forth in the love of Truth</i> (London: no publ., 1676).</p>
 
<p><a name="22"></a><sup>22</sup> Fox, <i>Epistles</i> (1698), pp. 153, 178-80, 226-28, 253-55, 324-27, 329-33, 335-36, 353-54, 363-68, 395-97, 470-73, 488-89. The most important epistle dealing with negroes is no. 355 (1679), pp. 426-28.</p>
 <p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3>Notes to 'Other Early Quakers' Attitudes to Slavery'</h3>
<p><a name="23"></a><sup>23</sup> Edmundson, <i>Journal</i> and letters are reprinted in Frost, <i>The Quaker Origins of Antislavery</i>, pp. 62-3; <i><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3661" target="_blank">A Collection of the Sufferings of the People Called Quakers</a></i>, ed. Joseph Besse (London: Luke Hinde, 1753), II, pp. 306-307. Even though Keith wrote many tracts attacking Friends, he mentioned anti-slavery only once. Abraham up Den Graef, a signer of the Germantown Protest against slavery, became a supporter of Keith. Perhaps Keith was seeking adherents among other anti-slavery Pennsylvanians. Anti-slavery was not the only issue Keith raised in early stages of his schism that he later neglected. Some Keithians owned slaves; others were among the first to free slaves: Gary Nash and Jean Soderlund, <i>Freedom by Degrees: Emancipation in Pennsylvania and Its Aftermath</i> (New York: Oxford University Press, 1991), pp. 44, 58-60.</p>
 
<p><a name="24"></a><sup>24</sup> <i>Ibid.</i>, pp. 66-68.</p>
 
<p><a name="25"></a><sup>25</sup> <i><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3663" target="_blank">A Collection of . . . the Sufferings</a></i>, II, pp. 308-311, 325-29.</p>
 
<p><a name="26"></a><sup>26</sup> Fox, <i>Journal</i>, ed. John L. Nickalls (London: Religious Society of Friends, 1975). Even in his address to the Sultan, Fox did not condemn the institution of slavery. George Fox, <i>To The Great Turk</i> (London: Ben Clark, 1680).</p>
 
<p><a name="27"></a><sup>27</sup> <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,5837" target="_blank">Germantown Protest</a>, reprinted in Frost, <i>The Quaker Origins of Antislavery</i>, p. 69.</p>
 
<p><a name="28"></a><sup>28</sup> <i>An Exhortation and Caution to Friends, Concerning buying or keeping of Negroes</i> (New York: Thomas Bradford, 1693), reprinted in J. W. Frost, <i>The Keithian Controversy in Early Pennsylvania</i> (Norwood, PA.: Norwood Editions, 1980), pp. 213-18.</p>
 
<p><a name="29"></a><sup>29</sup> The Morgan and Piles documents are really directed against the slave trade, but can be interpreted as against slavery too. Morgan is reprinted in Frost, <i>The Quaker Origins of Antislavery</i>, p. 70.</p>
 
<p><a name="30"></a><sup>30</sup> Piles is reprinted in Frost, <i>Quaker Origins of Antislavery</i>, pp. 71-2.</p>
 
<p><a name="31"></a><sup>31</sup> Richard Hill to William Penn, 18th Nov, 1690 contained in 'Some Letters and Abstracts of Letters from Pennsylvania' reprinted in <i>Pennsylvania Magazine of History and Biography IV</i> (1880), p. 197. John Jay Smith, <i>Letters of Doctor Richard Hill and His Children</i> (Philadelphia: Privately Printed, 1854), fn. xi-xiv.</p>
 
<p><a name="32"></a><sup>32</sup> Hill's will, dated 28th August, 1729, left to his wife Mary a Negro woman and girl. There is no inventory so it is not certain, but certainly likely, that these were slaves. I am indebted to Craig Horle for this information.</p> 

<p><a name="33"></a><sup>33</sup> The business part of the letter is reprinted in <i>Pennsylvania Magazine of History and Biography XIV</i> (1890), p. 215. The handwriting of both sections is identical and, clearly, written by Hill. Whether Hill actually sent the poem to Dickinson cannot be determined: <i>Journals of the Lives, Travels and Gospel Labours of Thomas Wilson and James Dickinson</i> (London: C. Gilpin, 1847), pp. 19-47.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h3>Notes to 'Policy Decisions of Philadelphia Yearly Meeting'</h3>
<p><a name="34"></a><sup>34</sup> Norma Adams Price, <i>From Meetinghouse to Statehouse 1683-1783 . . . with Descendants of George Gray</i> (Wallingford, PA. : Historic Delaware County, Inc., 1976), pp. 7-13.</p>
 
<p><a name="35"></a><sup>35</sup> Philadelphia Yearly Meeting of Ministers and Elders, Minutes, pp. 26, 71, 81, 117. Philadelphia Monthly Meeting, Minutes, I, pp. 130-31, 142-44, 147, 151, 169.</p>

<p><a name="36"></a><sup>36</sup> George Fox, <i>Epistles</i>, p. 259.</p>
 
<p><a name="37"></a><sup>37</sup> <i>Lawmaking and Legislators in Pennsylvania: A Biographical Dictionary</i>, eds. Craig Horle and Marianne Wokeck (Philadelphia: University of Pennsylvania, 1991) contains sketches of Overseers Alexander Beardsley (d. 1697), John Delavall (d. 1693), James Fox (d. 1699), Anthony Morris (d. 1721) and Griffith Owen (d. 1717). The one Overseer of the Press who was not a Pennsylvania assemblyman was Samuel Jennings (d. 1708), who had been a West Jersey governor and assemblyman. The wills of Beardsley, Fox, and Morris indicate slaves. Information on Jennings is in John Stevenson, <i>Thomas Stevenson . . . and His Descendants</i> (Flemington, N.J. : Hiram Deats, 1902), pp. 23-29. Since the information on slavery comes from wills or inventories of estate, it is possible that in 1700 either more or fewer of the three living Overseers owned slaves. The minutes of the Meeting for Ministers indicate that sometimes the ministers also read over manuscripts: Philadelphia Yearly Meeting for Ministers and Elders, Minutes, pp. 55, 65. Minutes reprinted in Frost, <i>The Quaker Origins of Antislavery</i>, p. 73.</p>
 
<p><a name="38"></a><sup>38</sup> <i>Ibid.</i>, p. 74.</p>
 
<p><a name="39"></a><sup>39</sup> <i>Ibid.</i>, p. 73. Slaveholders were Anthony Morris, James Fox, Samuel Carpenter: Thomas Masters, <i>Lawmakers and Legislators.</i></p> 

<p><a name="40"></a><sup>40</sup> <i>Ibid.</i>, p. 72.</p> 

<p><a name="41"></a><sup>41</sup> Philadelphia Yearly Meeting for Ministers, Minutes, pp. 55, 60-61. Kenneth Carroll, 'William Southeby, Early Quaker Antislavery Writer', <i>Pennsylvania Magazine of History and Biography</i>, 89 (October, 1965), pp. 416-427.</p>
 
<p><a name="42"></a><sup>42</sup> The tract may not have been published. William Bradford, the only printer in Pennsylvania, had supported Keith. After the schism, he moved to New York. Quakers again began issuing books in Pennsylvania in 1699, after the arrival of Reinier Jansen. English Friends published volumes of George Fox&rsquo;s <i>Journal</i> (1694) and <i>Epistles</i> (1698). The doctrinal books, entitled <i>Gospel Truth Demonstrated</i>, appeared in 1706. Philadelphia Friends could have subscribed to these volumes and a few copies of the <i>Journal</i> and <i>Epistles</i> would have been available.</p>
 
<p><a name="43"></a><sup>43</sup> Lewis Benson, 'Notes on George Fox', typescript at Friends Historical Library, Swarthmore College.</p>
 
<p><a name="44"></a><sup>44</sup> Philadelphia Yearly Meeting Minutes, printed in Frost, <i>The Quaker Origins of Antislavery</i>, p. 170.</p>

<p align="right"><a href="#top" target="_top">TOP</a> </p>
<div id="topBorder">
    <br />
    <a name="sources"></a>
    <h2>Related Primary Sources</h2>
   <br />
    <table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,574" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=574&amp;action=2&amp;DMSCALE=8&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=8&amp;DMY=18&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Gospel Family-Order" alt="Gospel Family-Order" /></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,2600" target="_blank"> <img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=2489&amp;action=2&amp;DMSCALE=10&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=15&amp;DMY=65&amp;DMTEXT=&amp;REC=1&amp;DMTHUMB=1&amp;DMROTATE=0" title="Clarkson on Quakers" alt="Clarkson on Quakers" /> </a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11267" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=11267&amp;action=2&amp;DMSCALE=50&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=0&amp;DMY=680&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Pleasants on Fox" alt="Pleasants on Fox" /></a></div></td>
         <td width="70"></td>
          <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8406" target="_blank"><img src="http://triptych.brynmawr.edu/utils/ajaxhelper/?CISOROOT=/HC_QuakSlav&amp;CISOPTR=8406&amp;action=2&amp;DMSCALE=25&amp;DMWIDTH=130&amp;DMHEIGHT=130&amp;DMX=300&amp;DMY=680&amp;DMTEXT=&amp;REC=2&amp;DMTHUMB=1&amp;DMROTATE=0" title="Samuel M. Janney Correspondence" alt="Samuel M. Janney Correspondence" /></a></div></td>
    </tr>
      <tr>
        <td width="130" valign="top"><div align="left">Fox's 'Gospel Family-Order'</div></td>
         <td width="70"></td>
        <td width="130" valign="top"><div align="left">Thomas Clarkson's chapter about Quaker Anti-Slavery before 1787 </div></td> <td width="70"></td>
        <td width="130" valign="top"><div align="left">Robert Pleasants letter about Fox's anti-slavery advice</div></td>
         <td width="70"></td>
         <td width="130" valign="top"><div align="left">Correspondence of Samuel M. Janney, Fox's biographer</div></td>
     </tr>
    </table> 
    <br />  
    <p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Fox&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">view all documents that mention Fox</a>)</p>


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