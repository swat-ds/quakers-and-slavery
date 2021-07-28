<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : John Greenleaf Whittier</title><!-- InstanceEndEditable -->

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
 * @copyright Copyright � 2004, Baskettcase Web Development
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
   <a href="whittier.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="whittier.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>

    <h2>Jump to Section</h2>
	<h3><a href="#featured">Featured Image</a></h3>
	<h3><a href="#essay">Essay</a></h3>
	<h3><a href="#references">References</a></h3>
	<h3><a href="#sources">Primary Sources</a></h3>
	<p>&nbsp;</p>
    <h2>Related Topics</h2>
	<h3><a href="../organizations/pennsylvania_hall.php">Pennsylvania Hall</a></h3>
	<h3><a href="neall_sr.php">Daniel Neall Sr.</a></h3>
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11148" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="thumbs/qs-thumb-11148" title="John G. Whittier" alt="John G. Whittier"/></a>
        <h1>John Greenleaf Whittier </h1>
          <h3>By Patricia O'Donnell </h3>
          <p><i>Archivist, Friends Historical Library</i></p>
          <br />
      <br />
      <br />
      <br />
	  	  <table style="border: 2px solid #bdb89a; background: #ECE5B6;">
        <tr>
          <td rowspan="2">
		  <h3 align="right"><a name="featured" id="featured"></a>Featured Image:</h3>
		  <p align="right" ><i>Virtuous Harry, or Set a Thief to Catch a Thief!</i></p>
		  <div align="right" ><i>Henry Clay was a controversial figure in the Society of Friends. As a leading statesman and compelling orator, Clay initially commanded a large Quaker following--especially among the Orthodox--but his support gradually waned (Ryan P. Jordan, </i>Slavery and the Meetinghouse<i>. Bloomington: Indiana Univ. Press, 2007. p. 51). He presented himself as a moderate antislavery advocate--he was president of the <a href="../organizations/index.php#acs">American Colonization Society</a>, and, as this political cartoon shows, he opposed admitting slave territories like Texas into the Union. Nevertheless, Clay owned slaves himself. As the cartoon further demonstrates, this earned him a reputation for hypocrisy in the eyes of certain Quakers. John Greenleaf Whittier was one such Friend. He supported Clay's Presidential bid at the 1831 Republican National Convention, but later opposed Clay when he  ran as the Whig candidate.&quot;[O]ur Henry Clay,&quot; a disillusioned Whittier wrote in 1838, &quot;the man we have all loved and honored and </i>forgiven<i>--will he stoop to meanness so ineffable?&quot; (qtd. in <a href="#references">Pickard, vol. I, pp. 237-238</a>). Shortly after Henry Clay spoke at Indiana Yearly Meeting during a campaign tour in 1844, a schism in the group resulted in the formation of the Indiana Yearly Meeting of Anti-Slavery Friends. Whittier publicly denounced the group of Indiana Quakers who sided with Clay against the abolitionists (Jordan, p. 54-55).</i>
		    </div></td>
          <td width="300" height="200"><a title="Virtuous Harry" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11161" target="_blank"><img style="padding:10px" src="thumbs/qs-thumb-11161" alt="Virtuous Harry"/></a></td>
  </tr>
        <tr>
          <td width="300" valign="top">&nbsp;&nbsp;TEXAS (woman, left): &quot;Shall the slanders that have been &nbsp;&nbsp;urged against your sister, sever those whose blood &nbsp;&nbsp;flows from the same fountain?&quot;<br /><br />

&nbsp;&nbsp;CLAY (center): &quot;Stand back Madam Texas! for we are &nbsp;&nbsp;more holy than thou! Do you think we will have &nbsp;&nbsp;anything to do with gamblers, horse-racers, and &nbsp;&nbsp;licentious profligates?&quot; <br /><br />

&nbsp;&nbsp;QUAKER (right): &quot;Softly, Softly, friend Harry. Thou hast &nbsp;&nbsp;mentioned the very reason that we cannot Vote for &nbsp;&nbsp;<strong>thee</strong>!&quot;</td>
        </tr>
      </table>    
	  <br />
	  <p align="right"><a href="#top" target="_top">TOP</a> </p>
<p><a name="essay" id="essay"></a>On September 7, 1892, the <i>Kansas City Star</i> announced the death of John Greenleaf Whittier by proclaiming &quot;Freedom's Poet at Rest.&quot; Although he did enjoy widespread fame as a poet during his own lifetime, it is Whittier's work as an abolitionist that earns him the most scholarly attention in the modern era. </p>
    <p> He was born on December 17, 1807, in Haverhill, Massachusetts. The son of John and Abigail Hussey Whittier, poor Quaker farmers, he began to write poetry at the age of fourteen. William Lloyd Garrison published Whittier's first poem in 1826 and persuaded his parents to send him to Haverhill Academy for two terms. Whittier's early poetry was well-received on the local level, but he himself was dissatisfied with much of the work from this period, including his first book, <i>Legends of New-England</i>, which was published in Hartford by Hanmer &amp; Phelps in 1831. </p>
    <p> For several years Whittier supported himself as a newspaper editor. In 1829 he obtained a position at <i>The American Manufacturer</i>, a political weekly in Boston owned by moral reformer Rev. William Collier. Although he only served as its editor for less than a year, he moved on to similar jobs with the <i>Haverhill Essex Gazette</i> and the Hartford, Connecticut, <i>New England Review</i>. His newspaper work both whetted his appetite for politics and exposed his opinions to the populace. Editorial support for the Whig, <a href="#featured">Henry Clay</a>, earned him acclaim. Whittier was chosen as a delegate to the Republican National Convention in 1830, campaigned unsuccessfully for a Congressional seat in 1832, and served one term in the Massachusetts legislature a few years later. </p>
    <p> By most accounts, in 1833 Whittier renewed his friendship with William Lloyd Garrison, the publisher of his first poem back in 1826. By this time Garrison had become a radical abolitionist, and sought to enlist Whittier in the cause. The latter served as a delegate to the first meeting of the <a href="../organizations/index.php#aass">American Anti-Slavery Convention</a>. In 1833, Whittier published a tract, <i>Justice and Expediency: or, Slavery considered with a view to its rightful and effectual remedy, abolition</i>, proposing immediate and unconditional emancipation of slaves. He became known as a leading abolitionist, active in lecturing, editing newspapers, and writing poems and essays supporting anti-slavery. In general, much of his poetry from this period was hastily written and of middling quality, but it was effective in promoting the cause. He was stoned by an anti-abolitionist mob in Concord, New Hampshire in 1835, but was undeterred by the incident--a collection of his abolitionist verse, <i>Poems Written during the Progress of the Abolition Question in the United States</i>, appeared in print in 1838. </p>
    <p> That same year, Whittier accepted the editorship of the <i>Pennsylvania Freeman</i>. Its offices were located in the ill-fated Pennsylvania Hall, which was shortly destroyed during an anti-abolitionist riot on May 17, 1838. In the midst of the attack, Whittier bravely donned a disguise and entered the burning hall in order to save his galleys. Soon after the Pennsylvania Hall incident, Whittier broke with Garrison over radical abolitionist tactics in 1839. Believing that the anti-slavery movement needed a political vehicle, he helped found the Liberty Party. </p>
    <p> Poor health forced Whittier's  retirement after 1840 to Amesbury, Massachusetts, where his poetry focused on New England rural life and traditions. Although he published <i>Voices of Freedom</i> in 1846, the '40s saw his gradual withdrawal from political activism. His poems &quot;Snow Bound&quot; and &quot;Tent on the Beach&quot; were critical and financial successes, and after the Civil War he was widely acclaimed as a major American poet. His later poetry focused on religious and moral themes, combining Quaker quietism with a respect for the Bible.</p>
  <p align="right"><a href="#top" target="_top">TOP</a> </p>
    <h2><a name="references"></a>References</h2>
<p>Jarvis, Charles A. &quot;Admission to Abolition: The Case of John Greenleaf Whittier.&quot; <i>Journal of the Early Republic</i> 4:2 (Summer 1984), 161-176.</p>
<p>Pickard, Samuel T., editor. <i>Life and Letters of John Greenleaf Whittier</i>. Boston: Houghton, Mifflin &amp; Co., 1894.</p>
<p>Whittier, John Greenleaf, 1807-1896. John G. Whittier Manuscript Collection, Friends Historical Library of Swarthmore College, MSS 063.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<div id="topBorder">
    <br />
<a name="sources" id="sources"></a><h2>Related Primary Sources</h2>
<br />
    <table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11137" target="_blank"><img src="thumbs/qs-thumb-11137" title="Our Countrymen in Chains!" alt="Our Countrymen in Chains!" /></a></div></td>
           <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8646" target="_blank"> <img src="thumbs/qs-thumb-8646" title="American Anti-Slavery Society" alt="American Anti-Slavery Society" /></a></div></td>
           <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3691" target="_blank"><img src="thumbs/qs-thumb-3691" title="Letter to Grimke Sisters" alt="Letter to Grimke Sisters" /></a></div></td>
           <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4594" target="_blank"><img src="thumbs/qs-thumb-4594" title="Pennsylvania Hall Retrospectives" alt="Pennsylvania Hall Retrospectives" /></a></div></td>
      </tr>
      <tr>
        <td width="130" valign="top"><div align="left">'Our Countrymen in Chains!' broadside with poem</div></td>
           <td width="70"></td>
        <td width="130" valign="top"><div align="left">American Anti-Slavery Society 50th Anniversary Celebration </div></td>
           <td width="70"></td>
        <td width="130" valign="top"><div align="left">Letter to Angelina and Sarah Moore Grimke</div></td>
           <td width="70"></td>
        <td width="130" valign="top"><div align="left">Pennsylvania Hall Retrospectives</div></td>
      </tr>
    </table>
    <br />
    <p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=whittier&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank">view all documents that mention Whittier</a>)</p>
    
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