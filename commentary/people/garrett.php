<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Thomas Garrett</title><!-- InstanceEndEditable -->

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
   <a href="garrett.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="garrett.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>
 
    <h2>Jump to Section</h2>
    <h3><a href="#featured">Featured Image </a></h3>
    <h3><a href="#Introduction">General Introduction</a> </h3>
    <h3><a href="#trial">Introduction to the Trial of 1848</a> </h3>
     <h3><a href="#references">References</a> </h3>
     <h3><a href="#sources">Primary Sources</a> </h3>
         <h2>Related Topics</h2>
		 <h3><a href="../organizations/underground_railroad.php">The Underground Railroad</a></h3>
		 <!--<h3><a href="../organizations/progressive_friends.php">Progressive Friends</a></h3>-->
		 <!--<h3><a href="../themes/southern.php">Southern Quakers and Slavery</a></h3>-->
 
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->

	   <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11141" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="thumbs/qs-thumb-11141" alt="Thomas Garrett" title="Thomas Garrett"/></a>
        <h1>Thomas Garrett</h1>
          <h3>By Mariah Parker</h3>
          <p><i>Swarthmore College Class of 2013</i></p>
          <br />
          <br />
          <br />
          <br />
          <br />
      
	  <table style="border: 2px solid #bdb89a; background: #ECE5B6;">
        <tr>
          <td>
		  <h3 align="right"><a name="featured" id="featured"></a>Featured Image:</h3>
		  <p align="right"><i>Uncle Tom's Cabin. George et Elisa Chez les Quakers.</i></p>
		  <div align="right"><i>Thomas Garrett was the model for Simeon Halliday, the benevolent Quaker in </i>Uncle Tom's Cabin<i>. (See </i>A Key to Uncle Tom's Cabin<i> by Harriet Beecher Stowe (Boston: J.P. Jewett &amp; Co, 1853), p. 54.) This French illustration depicts a stereotypical Quaker household with  characteristic broad-brimmed hats worn by the stern-faced men. </i>
		    </div></td>
          <td><a title="Uncle Tom's Cabin" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11712" target="_blank"><img style="padding:10px" src="thumbs/qs-thumb-11712" alt="Uncle Tom's Cabin"/></a></td>
  </tr>
      </table>    
      <br /> 

      <h2><a name="Introduction"></a>General Introduction </h2>
<p>Thomas Garrett is known as one of the most active and most influential stationmasters on the Underground Railroad. Garrett served as a stationmaster for more than four decades, and it has been claimed that Garrett helped 2,700 enslaved people on their journey to freedom. Thomas Garrett even served as the inspiration for the character Simeon Halliday in Harriet Beecher Stowe's influential novel <i>Uncle Tom's Cabin.</i></p>
<p>Thomas Garrett was born in Upper Darby, Pennsylvania on August 21st, 1789. He was the son of Thomas and Sarah Price Garrett, and was a member of the Darby Monthly Meeting of the Religious Society of Friends. </p>
<p>Garrett became dedicated to the antislavery cause in 1813, after rescuing a free African-American servant of the Garrett family who was kidnapped by slave traders. He also married Mary Sharpless in 1813. In 1822, he moved to Wilmington, Delaware and transferred his membership to the Wilmington Monthly Meeting. Wilmington was a growing city that offered Garrett new business opportunities. However, Wilmington was also the northernmost town in the slave state of Delaware, and the last city before the relative security of Pennsylvania. After moving to Wilmington, Garrett went into &quot;the iron and hardware business&quot; and opened his home at 227 Shipley Street as a station on the Underground Railroad (McGowan 38). </p>
<p>Mary Sharpless died in 1828. In 1830, Garrett married Rachel Mendenhall, the daughter of Pennsylvania abolitionist Eli Mendenhall. </p>
<p>In 1848, Thomas Garrett was put on trial for helping the Hawkins Family of Queen Anne's County, Maryland, in their flight from slavery (see <a href="#trial">Introduction to the Trial of 1848</a>). Due to a combination of business reverses and fines, he lost nearly all of his possessions, but he managed to regain his financial standing. </p>
<p>Thomas Garrett died on January 25, 1871. He is buried at the Wilmington Friends Meeting House in Wilmington, Delaware. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="trial"></a>Introduction to the Trial of 1848</h2>
<p>In December, 1845, The Hawkins family escaped from Queen Anne's County, Maryland. The father, Samuel Hawkins, was a free man, but his wife Emeline and six children were enslaved. The two oldest children belonged to Charles Glanding, and Emeline and the other four children belonged to  Elizabeth Turner.  The Hawkins family was captured by slavehunters while hiding at the Underground Railroad Station of John Hunn, and taken to the New Castle County Jail.  The sheriff, Jacob Caulk, told the slavehunters that the commitment that they had obtained to imprison the Hawkins family was not legal, and that they had to get a new commitment.  Meanwhile, Thomas Garrett learned of the family's plight, and brought the fugitives before Judge Booth (Chief Justice of the state of Delaware) on a writ of habeas corpus. Judge Booth ordered the family's release. Garrett ordered a coach for the fugitives, and sent them to Pennsylvania.</p>
<p>In May of 1846, Thomas Garrett and John Hunn received summonses. The owners of the Hawkins family brought the abolitionists to trial under the Fugitive Slave Act of 1793. There were six trials: John Hunn was involved in two and Thomas Garrett was involved in four. The trials took place in the U.S. Circuit Court in Delaware. Roger B. Taney, the Chief Justice of the Supreme Court who would later deliver the majority opinion in the Dred Scott case, presided over the trials.  </p>
<blockquote>
<p>1. Friday, May 26: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8058" target="_blank">Charles Glanding sued Thomas Garrett for debt.</a> The jury ruled in favor of Glanding, and assessed a fine of $1,000.</p>
<p>2. Saturday, May 27: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8054" target="_blank">Elizabeth Turner sued Thomas Garrett for debt,</a> for the amount of $2,500. The jury ruled in favor of Turner.</p>
<p>3. Monday, May 29: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8063" target="_blank">Charles Glanding sued Garrett for trespass,</a> for $2,000. The jury ruled in favor of Glanding, but only assessed damages of $1,000.</p>
<p>4. Monday, May 29: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8063" target="_blank">Elizabeth Turner sued Thomas Garrett for trespass,</a> for the amount of $5,000. The jury ruled in favor of Turner, but only assessed damages of $900.</p>
</blockquote>
<p>Thomas Garrett was fined a total sum of $5,400.</p>

<p>The Friends Historical Library's Collection has a set of <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8053" target="_blank">notes taken at Thomas Garrett's trial</a>. The notes are divided into three sections: witness testimonies in the cases of Turner vs. Garrett and Glanding vs. Garrett, and the final rulings against Garrett. </p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>

<h2><a name="references"></a>References</h2>


<p>McGowan, James A. <i>Station Master on the Underground Railroad: The Life and Letters of Thomas Garrett,</i> rev. ed. Jefferson, N.C.: McFarland &amp; Co., 2004.</p>

<p>&quot;More Slaveholding Law, and Slaveholding Outrages!&quot; <i>Pennsylvania Freeman</i> V:22 (1 June 1848), p. 3.</p>

<p>Still, William. <i>The Underground Railroad.</i> New York: Ayer, 2004. [Reprint of Philadelphia: Porter &amp; Coates, 1872 ed.]</p>

<p>Stowe, Harriet Beecher. <i>The Key to Uncle Tom's Cabin.</i> New York: Arno Press, 1968. [Reprint of 1854 ed.]</p>

<p>&quot;Thomas Garrett and John Hunn.&quot; <i>Pennsylvania Freeman</i> V:23 (8 June 1848), p. 3.</p>

<p>Thomas Garrett Biographical Materials, Friends Historical Library of Swarthmore College, PG7 Garrett. </p>

 <p align="right"><a href="#top" target="_top">TOP</a> </p>
<div id="topBorder">
    <br />
    <a name="sources" id="sources"></a><h2>Related Primary Sources</h2>
    <br />
    <table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a title="Thomas Garrett Trial Notes, 1848" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8053" target="_blank"><img src="thumbs/qs-thumb-8054" alt="Trial Notes, 1848" border="0" title="Trial Notes, 1848" /></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a title="Letter from Garrett to his Children, 1861" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1508" target="_blank"><img src="thumbs/qs-thumb-1508" alt="Letter from Garret, 1861" title="Letter from Garret, 1861" /></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a title="Pennylvania Progressive Friends" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1069" target="_blank"> <img src="thumbs/qs-thumb-1069" alt="Progressive Friends" title="Progressive Friends" /> </a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a title="Elijah F. Pennypacker Correspondence" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4087" target="_blank"><img src="thumbs/qs-thumb-4087" alt="Elijah F. Pennypacker" title="Elijah F. Pennypackers"/></a></div></td>
      </tr>
      <tr>
        <td width="130" valign="top"><div align="left">Garrett Trial Notes, 1848</div></td>
         <td width="70"></td>
        <td width="130" valign="top"><div align="left">Letter from Garrett, 1861</div></td>
         <td width="70"></td>
        <td width="130" valign="top"><div align="left">Progressive Friends, Proceedings</div></td>
         <td width="70"></td>
        <td width="130" valign="top"><div align="left">Elijah F. Pennypacker Correspondence</div></td>
      </tr>
    </table>
    <br />
    <p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=exact&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=exact&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=exact&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=exact&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Garrett%2C+Thomas&amp;c=exact&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">view all documents that mention Thomas Garrett</a>)</p>
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