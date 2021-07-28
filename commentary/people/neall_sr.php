<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Daniel Neall, Sr.</title><!-- InstanceEndEditable -->

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
   <a href="neall_sr.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="neall_sr.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>

    <h2>Jump to Section</h2>
    <p></p>
    <h3><a href="#dentist">What Will Benefit the Patient?</a></h3>
    <h3><a href="#pa_hall">I Shall Do My Duty</a></h3>
	<h3><a href="#tar_feathers">A Dab of Tar and Homeopathic Dose of Feathers</a></h3>
	<h3><a href="#poem">A True and Brave and Downright Honest Man</a></h3>
	<h3><a href="#references">References</a></h3>
	<h3><a href="#sources">Primary Sources</a></h3>
	<p>&nbsp;</p>
    <h2>Related Topics</h2>
	<h3><a href="neall_jr.php">Daniel Neall, Jr.</a></h3>
	<h3><a href="../organizations/pennsylvania_hall.php">Pennsylvania Hall</a></h3>
   
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11697" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="thumbs/qs-thumb-11697" title="Daniel Neall Sr." alt="Daniel Neall Sr."/></a>
        <h1>Daniel Neall, Sr.</h1>
          <h3>By Celia Caust-Ellenbogen</h3>
          <p><i>Swarthmore College, Class of 2009. Quakers &amp; Slavery Digitization Project Intern</i></p>
      <br />
      <br />
      <br />
      <br />
      <br />
    <h2><a name="dentistry" id="dentistry"></a>What Will Benefit the Patient?</h2>
<p>Daniel Neall was born in 1784 to Jonathan and Sarah Neall, both members of the Society of Friends. Although he grew up in Delaware, a slave-owning state until the Civil War, Neall was more influenced by Quaker testimonies of equality and peace. He was a &quot;disciple&quot; of <a name="mifflin" id="mifflin"></a>Warner Mifflin, 1745-1798, an early critic of slaveholding within the Society of Friends, who is credited by Thomas Clarkson as &quot;the first man in America to unconditionally emancipate his slaves&quot; (Whittier 123; Justice 39). In 1810, Neall married Mifflin's daughter Sarah. The couple lived in Delaware, and then in Bucks County, Pennsylvania, before settling in Philadelphia.</p>
<p>Largely self-taught, but eminently gifted, Daniel Neall experimented with many different careers during his life. At times a carriage-maker, a farmer, a watch-repairman, a printer, and an inventor (he received a gold medal from the Franklin Institute at Philadelphia for his patented vertical printing-press), Neall finally settled on dentistry. His talent for extracting teeth was discovered around 1810 by a local doctor, who began referring his patients to Neall for this service. When the doctor died several years later, he bequeathed all his medical instruments to Neall, but it was not until 1828 that Neall began to pursue dentistry in earnest. Over the next 15 years, Neall's innovative techniques, inventions, and improvements, earned him the distinction of &quot;Pioneering American Dentist&quot; (Thorpe). But despite his excellent reputation, Neall never profited much from working as a dentist. As his son,  <a href="index.php#neallj" target="_blank">Daniel Neall junior</a>, wrote later, money was a secondary concern: &quot;his first question, and his last being--<a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8861" target="_blank">What will benefit the patient?&quot;</a> </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="pa_hall" id="pa_hall"></a>I Shall Do My Duty.</h2>
<p>The care and tenderness which Neall demonstrated in treating his patients was yet more apparent in his commitment to social reforms, particularly antislavery. Neall was president of the <a href="../organizations/index.php#pahall">Pennsylvania Hall Association</a>, a group dedicated to establishing a <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8814" target="_blank">&quot;Temple of Free Discussion&quot;</a> where antislavery, women's rights, and other reform lecturers could be heard. Just three nights after Pennsylvania Hall was built in 1838, on the night of May 17, the building was surrounded by an angry crowd of anti-abolitionist Philadelphians. According to his friend John Greenleaf Whittier, Neall stood up to the mob and announced, &quot;I am here, the president of this meeting, and I will be torn in pieces before I leave my place at your dictation. Go back to those who sent you. I shall do my duty&quot; (Whittier 123). Despite the protestations of Daniel Neall and other prominent abolitionists present--including Lucretia Mott, John G. Whittier, and Angelina Grimke Weld--Pennsylvania Hall was completely destroyed.</p>
<p>Immediately after its destruction, the Board of Managers of Pennsylvania Hall became embroiled in a legal and financial struggle to recover damages and pay off debts. Daniel Neall remained President of the Association until poor health compelled him to resign in 1845. Still, it was not until <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4584" target="_blank">1849</a>--over a decade since the dedication of the Hall, and three years after Daniel Neall senior's death--that his son settled the debts his father had incurred on behalf of the Pennsylvania Hall Association.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="tar_feathers" id="tar_feathers"></a>Dab of Tar and Homeopathic Dose of Feathers.</h2>
<p>In 1840, just two years after the destruction of Pennsylvania Hall, Daniel Neall had his second encounter with a crowd of rioting anti-abolitionists. This time, luckily, the only casualty was Neall's coat.</p>
<p>Daniel Neall and his wife were in Delaware, having travelled with her cousin Lucretia Mott on a religious visit. Slaveholders in the area had heard that Mott and her companions were abolitionists, and determined to send them a warning but, unwilling to harm a woman, the angry locals chose Daniel Neall as their target. Extracting the 54-year-old from his host's home, the crowd informed Neall that he would be subjected to tar-and-feathers. Neall calmly agreed to follow them, and the mob, <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8841" target="_blank">&quot;evidently somewhat nonplussed by the nonchalance of their subject,&quot;</a> as Neall's son later wrote, led him away. Neall remained in a good humor as the slaveholders applied a <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8842" target="_blank">&quot;dab of tar and homeopathic dose of feathers&quot;</a> to his coat, and rode him through town on a rail--adjusting it, however, to seat Neall on the flat side. When they finally released their victim, Neall cheerily announced to his tormenters that any of them were welcome to visit his home in Philadelphia and there receive hospitality. According to Daniel Neall junior, several men availed themselves of his father's offer, and visited the Neall residence to apologize for their unruly behavior.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="poem" id="poem"></a>A True and Brave and Downright Honest Man</h2>
<p>Daniel Neall the elder, leaving his legacy in the capable hands of his son, died in Philadelphia on April 15, 1846. He was eulogized by his friend, the great American Quaker poet <a href="index.php#whittier">John Greenleaf Whittier</a>:</p>


<p>
I. 
<br/>
FRIEND of the Slave, and yet the friend of all; <br/>
Lover of peace, yet ever foremost when <br/> 
The need of battling Freedom called for men <br/> 
To plant the banner on the outer wall; <br/> 
Gentle and kindly, ever at distress <br/> 
Melted to more than woman's tenderness, <br/> 
Yet firm and steadfast, at his duty's post <br/>
Fronting the violence of a maddened host, <br/>
Like some gray rock from which the waves are tossed! <br/>
Knowing his deeds of love, men questioned not <br/>
The faith of one whose walk and word were right; <br/>
Who tranquilly in Life's great task-field wrought, <br/>
And, side by side with evil, scarcely caught <br/>
A stain upon his pilgrim garb of white <br/>
Prompt to redress another's wrong, his own <br/>
Leaving to Time and Truth and Penitence alone. <br/><br/>
II.<br/>
Such was our friend. Formed on the good old plan,<br/>
A true and brave and downright honest man<br/>
He blew no trumpet in the market-place,<br/>
Nor in the church with hypocritic face<br/>
Supplied with cant the lack of Christian grace;<br/>
Loathing pretence, he did with cheerful will<br/>
What others talked of while their hands were still;<br/>
And, while &quot;Lord, Lord!&quot; the pious tyrants cried,<br/>
Who, in the poor, their Master crucified,<br/>
 His daily prayer, far better understood<br/>
     In acts than words, was simply doing good.<br/>
    So calm, so constant was his rectitude,<br/>
  That by his loss alone we know its worth,<br/>
    And feel how true a man has walked with us on earth.<br/>
</p>


<p align="right"><a href="#top" target="_top">TOP</a> </p>
<br />  
<h2><a name="references"></a>References</h2>
<p>&quot;Daniel Neall, Sr.: Pioneer Dentist, Inventor and Abolitionist&quot; in <em>History of Dental Surgery</em>, vol. 3: <em>Biographies of Pioneer American Dentists and Their Successors</em>, p. 161-166. Editor of vol. 3: Burton Lee Thorpe; series editor, Charles R. Koch. Ft. Wayne, Ind.: National Art Publishing Co., 1910.</p>
<p>Justice, Hilda. <em>Life and Ancestry of Warner Mifflin: Friend--Philanthropist--Patriot</em>. Philadelphia: Ferris &amp;amp; Leach, 1905, 19-20, 38-40.</p>
<p> Neall, Daniel, 1817-1894.<a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8795" target="_blank"> Daniel Neall Manuscripts</a>, Friends Historical Library of Swarthmore College, SC 086.</p>
<p> Whittier, John Greenleaf. &quot;Daniel Neall.&quot; From <em>The Works of John Greenleaf Whittier</em>, vol. 3: <em>Anti-Slavery Poems, Songs of Labor and Reform</em>, p. 123-124. Boston and New York: Houghton, Mifflin and Company, 1892. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<div id="topBorder">
  
   <a name="sources" id="sources"></a><h2>Related Primary Sources</h2>
   <br />
    <table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8795" target="_blank"><img src="thumbs/qs-thumb-8832" title="Daniel Neall Jr. Papers" alt="Daniel Neall Jr. Papers" /></a></div></td>
            <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4127" target="_blank"><img src="thumbs/qs-thumb-4149" title="Pennsylvania Hall, Board of Managers" alt="Pennsylvania Hall, Board of Managers" /></a></div></td>
            <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4551" target="_blank"><img src="thumbs/qs-thumb-4551" title="Pennsylvania Hall, Legal &amp; Financial" alt="Pennsylvania Hall, Legal &amp; Financial" /></a></div></td>
            <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4594" target="_blank"><img src="thumbs/qs-thumb-4594" title="Pennsylvania Hall Retrospectives" alt="Pennsylvania Hall Retrospectives" /></a></div></td>
     
      </tr>
      <tr>
        <td width="130" valign="top"><div align="left">Daniel Neall Jr. Papers</div></td>
            <td width="70"></td>
        <td width="130" valign="top"><div align="left">Records of the Pennsylvania Hall Association Board of Managers </div></td>
            <td width="70"></td>
        <td width="130" valign="top"><div align="left">Legal and Financial Records of the Pennsylvania Hall Association </div></td>    <td width="70"></td>
        <td width="130" valign="top"><div align="left">Pennsylvania Hall Retrospectives</div></td>
        
      </tr>
    </table>
    <br />
    <p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=all&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=all&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=all&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=all&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=Neall&amp;c=all&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">view all documents that mention Neall</a>)</p>
   
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