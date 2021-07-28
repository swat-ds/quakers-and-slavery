<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Radical Quaker Women</title><!-- InstanceEndEditable -->

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
   <a href="radical_quaker_women.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="radical_quaker_women.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>

    <h2>Jump to Section</h2>
    <h3><a href="#introduction">Introduction</a></h3>
	    <h3><a href="#fox">George Fox, 1647 </a></h3>
  	    <h3><a href="#independence">The Independence of Quaker Women</a></h3>
  	    <h3><a href="#chandler">Elizabeth Margaret Chandler (1807-1834) </a></h3>
	    <h3><a href="#founding">Founding of the American Anti-Slavery Society, 1833</a></h3>
		<h3><a href="#rural">Rural (Quaker) Women Lead the Way</a></h3>
		<h3><a href="#mixed">The American Anti-Slavery Society Becomes Mixed</a></h3>
		<h3><a href="#dissenting">Dissenting Views</a></h3>
	    <h3><a href="#seneca">Quakers and the Seneca Falls Convention of 1848</a></h3>
		<h3><a href="#genesee">Genesee Yearly Meeting, 1834-1848</a></h3>
		<h3><a href="#split">Abolition Splits the Meeting</a></h3>
		<h3><a href="#longwood">Green Plain, Ohio -- Salem, Ohio -- Longwood, Pennsylvania</a></h3>
		<h3><a href="#conclusions">Conclusions</a></h3>
		<h3><a href="#sources">Primary Sources</a></h3>
    <h2>Related Topics</h2>
	<h3><a href="../organizations/pennsylvania_hall.php">Pennsylvania Hall</a></h3>
  
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    <a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,1564" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="thumbs/qs-thumb-1564" alt="Female Teachers of FFA" title="Female Teachers of FFA"/></a>
          <h1>Radical Quaker Women and the Early Women's Rights Movement</h1>
          <h3>By Christopher Densmore </h3>
          <p><i>Curator, Friends Historical Library of Swarthmore College </i></p>
      <br />
      <br /><br />
<h2><a name="introduction" id="introduction"></a>Introduction</h2>
<p>When did the women's rights movement begin?  I will take as a benchmark the First Woman's Rights Convention, held at Seneca Falls, New York, July 19-20, 1848 as the formal beginning of the women's movement. However, I will begin my story more than two centuries earlier in 1647 when a young man, <a href="../people/index.php#fox">George Fox</a>, was traveling through England.  I will then jump forward in time to the 19th century to focus on the connection of Quaker women and abolition in Pennsylvania and New York State before coming back to Seneca Falls. I cannot claim to be an expert on Midwestern Quakers, and hope to explore with you during the course of this conference how similar or dissimilar was the experiences in this region.</p>
   
<h2><a name="fox" id="fox"></a>George Fox, 1647</h2>
<p>The commonly accepted date for the beginning of the Quaker movement is 1652, when George Fox had his vision on Pendle Hill of &quot;a great people to be gathered.&quot;  Five years earlier, in 1647, Fox was both a seeker and a finder.  He met with various people and groups, but none spoke to his condition. One group, &quot;held [that] women have no souls...no more than a goose.&quot;  Fox responded by quoting Scripture, where Mary, the mother of Jesus, said, &quot;My soul doth magnify the Lord, and my spirit hath rejoiced in God my savior.&quot;  [Luke 1:46-47]  </p>
<p>Later that year he encountered people more to his liking. In Nottinghamshire he &quot;met with a tender people&quot; and &quot;a very tender woman, whose name was Elizabeth Hooten, and with these I had some meetings and discourses.&quot; This encounter is not described as Fox attempting to convince or convert, but as a meeting among equals, and the foremost among those equals was a woman. By 1650, if not before, Elizabeth Hooten was preaching in public.</p>
<p>In the Society of Friends, the practice of acknowledging women as ministers, seems to have predated the theory. Women writing and speaking on par with men had been the practice for a number of years before Friends felt called to defend the practice in Margaret Fell's <i>Women's Speaking Justified, Proved and Allowed by the Scriptures</i> (1666) and Robert Barclay's <i>Apology For True Christian Divinity</i> (1676).</p>
<p>The acknowledgement of women in the Society of Friends as ministers continued into the 19th century. As the unrefined Vermont Quaker, Refine Weekes, versified in the 1820s:</p>

<p>In Jesus Christ, are male and female one,<br/>
When she is sent, pray let woman run:<br/>
When rightly call'd and qualified to preach:<br/>
Let her the gospel of glad tidings preach:<br/>
'Tis not for man the Spirit to control,<br/>
Nor stop the heav'nly bodies when they roll.  </p>           

<p>Among Friends, Women's ministry was not unusual. In Pennsylvania and New York in the 1830s, and probably elsewhere in the Quaker world, slightly more women than men were acknowledged as ministers, and the vocal ministry in meeting for worship was likewise like to come from a woman.</p>
    <p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="independence" id="independence"></a>The Independence of Quaker Women</h2>
<p>The traditional Quaker defense of women's preaching was focused on women's role in the church, and did not necessarily infer a similar role in secular society. However, contemporary observers did note Quaker women's independence within the family and community. <a href="../people/index.php#clarkson">Thomas Clarkson</a>, an outside observer of Quakers in England in the early 19th century observed unmatched involvement of Quaker women in the affairs of the Society, &quot;[G]ives them, in fact, a new cast of character. It produces in them, a considerable knowledge of human nature. It produces in them thought, and foresight, and judgment... It elevates in them a sense of their own dignity and importance...&quot; Lydia Maria Child, author and editor of the <i>National Anti-Slavery Standard</i>, lived among New York Quakers in the 1830s and 40s. She wrote approvingly of the independence of Quaker women who did not feel the need to defer to their husbands, and attributed their self-reliance to sharing &quot;equally with men in the management of all the business of the society.&quot;</p>             
<p>Child may have idealized Quakers. In the 1820s and 1830s there were still inequities between the men's and the women's meetings; cases where the men's meeting could act without the approval of the women's meeting. In 1820, <a href="../people/index.php#mottl">Lucretia Mott</a>'s husband <a href="../people/index.php#mottj">James</a> learned that a men's meeting had gone so far as to appoint a committee without consulting the women's meeting. James called this &quot;strange,&quot; and &quot;doubted the rectitude&quot; of the action. The inequality between the men's and women's meeting, he wrote, must have resulted from Quakers heeding the opinion of the &quot;people of the world.&quot;  It was entirely inconsistent with the Quaker understanding that &quot;male and female are one in Christ.&quot;</p>
  
<h2><a name="chandler" id="chandler"></a>Elizabeth Margaret Chandler (1807-1834)</h2>
<p>Elizabeth Margaret Chandler (1807-1834) was one of the earliest women Friends to speak out publicly against slavery in her essays and poems published in Benjamin Lundy's <i>Genius of Universal Emancipation</i>. Slavery becomes a woman's issue:</p>

<p>Shall we behold, unheeding,<br/>
Life's holiest feelings crush'd?--<br/>
When woman's heart is bleeding,<br/>
Shall woman's voice be hush'd?<br/></p>

<p>Women had the responsibility to speak out on the moral injustice of slavery.  But Chandler, writing in 1820s in an essay on &quot;Female Education&quot; says that the goal of educating women is &quot;to qualify women to discharge her duties...to make her ambition to merit and display character of the most amiable and intelligent of her sex, rather than to emulate the conduct and capacity of men ... Women may hope to take their true, their most dignified stations, as the helpers, the companions of educated and independent men.&quot;</p>
<p>Chandler, with Laura Smith Haviland, helped to organize the Logan Female Anti-Slavery Society in Michigan in 1832.</p>
    <p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="founding" id="founding"></a>Founding of the American Anti-Slavery Society, 1833</h2>
<p>When the <a href="../organizations/index.php#aass">American Anti-Slavery Society</a> was organized at Philadelphia on December 5th and 6th, 1833,  no women's names were listed as delegates or participants, and no women signed the declaration of sentiments. Yet there were women present at the meeting, and at least one, Lucretia Mott, spoke to the issues before the convention. As Samuel J. May recalled thirty years later, Mott &quot;spoke in a manner which satisfied every one present, that she was authorized by Him from all power of utterance comes, to speak as she had done.&quot; It did not seem to have occurred to anyone that women could be members in a &quot;mixed&quot; gender organization. Mott and others promptly organized the Philadelphia Female Anti-Slavery Society.</p>
 
<h2><a name="rural" id="rural"></a>Rural (Quaker) Women Lead the Way</h2>
<p>When did women and men begin to act in concert in the cause of abolition?  The conventional wisdom is that women began by organizing female anti-slavery societies and their participation in bi-gendered organizations came later amid much controversy. However, a full year before the foundation of the American Anti-Slavery Society, in December 1832, in a rural school house in Sadsbury Township, Lancaster County, Pennsylvania, near the border with Chester County, local residents, mostly Quakers, founded the Clarkson Anti-Slavery Society.  Its constitution, published the following year in the <i>Genius of Universal Emancipation</i> included a specific provision that &quot;all persons shall be eligible for membership, without distinction of sex or color.&quot;  It is perhaps significant that the gentleman who invited the ladies to attend the organizational meeting of the American Anti-Slavery Society in Philadelphia in 1833 was Thomas Whitson, a founder of the Clarkson Society.</p>
<p>But membership is not the same as full or equal participation. Would women members speak or hold office or otherwise work with men on the formulation of organizational policy? The original officers of the Clarkson Anti-Slavery Society were all men.  Unfortunately, I have to rely on scattered newspaper reports so my data is incomplete, but at their meeting held in August 1834, the society appointed a committee of three men and three women to prepare petitions--one for men and another for women--on the abolition of slavery in the District of Columbia. Another committee, four men and two women, was appointed to procure and circulate anti-slavery literature.  The following year, 1835, a local society was organized in nearby East Fallowfield, Chester County, composed of thirty-four individuals &quot;of both sexes.&quot;  In their first annual report, issued in 1836, they noted that the men and women of the society &quot;appear to be equally anxious to promote the cause of emancipation, and...equally active in their endeavors to do so.&quot;  The report of their next meeting, in March 1837, began: &quot;The following resolutions were offered (the first three by ladies)...&quot; and particularly noted the participation of females in the discussion at the meeting. By the spring of 1837, if not for several years previous, the Clarkson, East Fallowfield, Uwchlan and Kennett Anti-Slavery Societies in Chester County all had women officers--a unique distinction at this time.  I have not found any evidence, among the many local anti-slavery societies in Chester County of an exclusively female anti-slavery society.</p>
<p>But was the experience of Chester County relevant to the wider world? The Clarkson Anti-Slavery Society played a leading role in 1836 in the call for a state anti-slavery society, but there were no female names among the organizers or in the lists of delegates to the inaugural meeting of the Pennsylvania Anti-Slavery Society in Harrisburg in January 1837.   We know that female participation was considered in the initial planning. At their annual meeting on January 12, 1837 the Philadelphia Female Anti-Slavery Society appointed delegates to attend the meeting at Harrisburg. However, in February, the Female Anti-Slavery Society had to report that &quot;owing to a variety of circumstances&quot; not one of the eleven delegates attended.  A number of these women who were unable to attend were married to men who did attend.  One wonders what words passed between Lucretia Mott and her husband James when he left for Harrisburg.  The next annual meeting of the Pennsylvania Anti-Slavery Society held in January 1838 was scarcely an improvement. Five of the twenty-one delegates from Chester County were women; only one other woman was present as a delegate. No women were officers and there is no evidence that women spoke at that meeting.</p>
<p>But the words that passed between our Lucretia and James may have been those of strategic planning rather than disagreement on principle. In response to a letter from the Philadelphia Female Anti-Slavery Society about possible national action, Lindley Coates responded in February 1837 on behalf of the Clarkson Anti-Slavery Society  that perhaps it was now time for women to form their own national society, but also expressing the hope that there would be in men and women would join together in national organization in due time.</p>
<p>If the nation at large was not ready for men and women acting together, Chester County abolitionists most definitely were. In April 1837, the Clarkson and East Fallowfield Anti-Slavery Societies called for the creation of a Chester County Anti-Slavery Society with women heading the names appended to the invitation and also to the separate &quot;Address to the Female Citizens of Chester County and Parts Adjacent&quot; bore the names of twenty-five women. While the President, Vice Presidents, Treasurer and Secretary elected at the opening convention of the Chester County Anti-Slavery Society in May 1837 were men, but six of the twelve members of the Board of Managers were women. </p>
<p>Three Chester County women with experience in mixed societies were among the delegates at the First Anti-Slavery Convention of American Women in New York City in May 1837, but otherwise the Pennsylvania delegation, like those from other states, represented female anti-slavery societies. </p>
<p>The next Anti-Slavery Convention of American Women was held in Philadelphia in May 1838 at the newly opened <a href="../organizations/index.php#pahall">Pennsylvania Hall</a>. Also being held at the same locale was the founding convention of the American Free Produce Association, under the name of the Requited Labor Convention.  The mixed societies of Chester County sent dual delegations: females to the Anti-Slavery Convention of American Woman and mixed-sex delegations to the Requited Labor Convention.</p>
<p>Pennsylvania Hall opened on Monday, May 14, 1838, with a series of anti-slavery lectures to be followed in the next several days by meetings of the Anti-Slavery Convention of American Women, the Requited Labor Convention, the Eastern District of the Pennsylvania Anti-Slavery Society and the Philadelphia Lyceum. By Wednesday, May 16, a mob was collecting outside. That evening featured public addresses by William Lloyd Garrison, Angelina Grimke Weld and Abby Kelley. Kelley told the audience that she had never before addressed a mixed assembly. At the close of the evening session, Lucretia Mott made a few remarks, explaining that contrary to the beliefs of some, the speeches just delivered had not been sponsored by the Anti-Slavery Convention of American Women whose meetings were confined to females, and many of whose members &quot;considered it improper for women to address promiscuous assemblies.&quot;  Mott ended with the &quot;hope that such false notions of delicacy and propriety would not long obtain in this enlightened country.&quot;   Outside Pennsylvania Hall, the mob was becoming more restive.</p>
<p>The next day, Thursday, May 16, 1838, the Requited Labor Convention opened. The call had specifically invited both men and women. The names of the representatives of the Clarkson Society, eight women and nine men, headed the list of delegates. In all, twenty-three societies had sent delegates. Three societies--from Philadelphia, Buckingham, Pennsylvania and Lynn, Massachusetts--were female. Seven were either all male or at least  sent only male delegates.  The remainder, representing anti-slavery societies in Lancaster, Chester, Delaware, Bucks and Philadelphia counties in Pennsylvania, were mixed societies.  Women, including Abby Kelley, were appointed to committees with men and women spoke to business on the floor of the meeting. That evening, the mob burned Pennsylvania Hall to the ground.  The Requited Labor Convention reconvened on the ruins of the Hall the next day, adjourned to the home of James and Lucretia Mott, and then adjourned to November, when they convened to complete the formation of the American Free Produce Association. The committee to nominate officers, consisting of two women and three men, may have selected a male President and male Vice Presidents, but the Executive Committee was equal divided between men and women. As far as I know, this is the first national body organized with men and women as (nearly) equal participants.</p>
<p>The radical notion of women's rights that so troubled the American Anti-Slavery Society in 1839 and 1840 and the World's Convention in 1840, and appeared unthinkable outside the radical abolition networks, seem not to have bothered at all the radical abolitionists of Chester and nearby Lancaster County, Pennsylvania, who had explicitly invited both men and women into their organizations in 1832.  Perhaps the birthplace of woman's rights� in the sense of having a co-equal involvement of men and women with matters of public policy--isn't Seneca Falls, New York, in 1848 but Sadsbury, Pennsylvania,  in 1832, sixteen years earlier.</p>
<p>The chronology of what happened is in the documents. The why is more elusive.  Quaker attitudes seem only a partial explanation. I suspect also a certain rural and Quaker, pragmatism:  where if there is work do be done, the work doesn't care who does it. If the old man is in bed and can't get in the hay, the old woman must.  Perhaps it was something in the water, or perhaps simply the initiative of a particularly feisty person, like Friend Thomas Whitson. Perhaps the important point is not who proposed that the Clarkson Anti-Slavery Society was open alike to men and women, but that once proposed, the idea made perfect sense.</p>
    <p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="mixed" id="mixed"></a>The American Anti-Slavery Society becomes Mixed</h2>
<p>The notion of men and women acting jointly in the same organizations seemed a radical idea even to many reformers. As late as May 1839 annual meeting of the American Anti-Slavery Society, the decision to seat women delegates, though approved by a comfortable majority, was controversial.  One conservative delegate asked that this act not be interpreted to mean that women were entitled to &quot;sit, speak, vote, hold office&quot; or otherwise have the rights of &quot;persons of the other sex.&quot;  The World Anti-Slavery Convention in London in 1840 had a similar reaction to the appearance of female delegates from Pennsylvania. It was on this occasion that the young Elizabeth Stanton met the veteran Lucretia Mott, and, by Stanton's account, resolved someday to have a convention on woman's rights.</p>
  
<h2><a name="dissenting" id="dissenting"></a>Dissenting Views</h2>
<p>Both Quakers and abolitionists in the first half of the 19th century were a fairly cantankerous bunch. While the Discipline asked Friends to regularly respond to the query, &quot;Is love and unity maintained...And when difference arise, are endeavors used to speedily end them?&quot; Friends split into Hicksite and Orthodox, Gurneyite and Wilburite, Progressive, Conservative, Maulite and Primitive branches. Likewise,  abolitionists were divided into immediatist and gradualist, non-resistants and political action,  pro- and anti-colonizationist.   While not minimizing the differences between factions, I am increasingly of the opinion that such distinctions may obscure more than they reveal. In Philadelphia, a number of the prominent members of the supposedly gradualist <a href="../organizations/index.php#pas">Pennsylvania Abolition Society</a> were also members of the supposedly immediatist American Anti-Slavery Society. In rural Chester County, Pennsylvania, Liberty Party men and Garrisonians co-existed in the same local anti-slavery societies. If Frederick Douglass broke with the Garrisonians, he continued to attend the  annual meetings of the predominately Garrisonian Progressive Friends at Junius.</p>
<p>Likewise on the issue of women's participation in mixed assemblies.  When Quaker Abraham L. Pennock resigned as Vice President of the American Anti-Slavery Society in 1841 over the issue of women in the Anti-Slavery Society, his letter explaining his differences begins &quot;Believing in the intellectual equality of the sexes, I go fully for women's rights and duties...&quot; Pennock's opposition to women mixing with men was apparently not based on any notion of female weakness or innate difference, but a feeling that anti-slavery societies needed to get on with the work of abolition, and not become saddled with additional unpopular causes such as women's rights. </p>
  
<h2><a name="seneca" id="seneca"></a>Quakers and the Seneca Falls Convention of 1848</h2>
<p>In July 1848, a group of women gathered socially at the home of Jane and Richard Hunt in Waterloo, New York. The group consisted of Lucretia Mott from Philadelphia, her sister, Martha Coffin Wright of Auburn, New York, Mott's friend, Elizabeth Stanton from Seneca Falls, Mary Ann M'Clintock of Waterloo, and Jane Hunt. Mary Ann M'Clintock and Jane Hunt were Quakers, and members of Junius Friends Meeting; Lucretia Mott was a Quaker; Martha Coffin Wright had been raised as a Friend but had been disowned for marrying out of meeting. These were the women who organized the First Woman's Rights Convention at Seneca Falls. The public sessions at the Convention itself were chaired by men: James Mott, Lucretia's Quaker husband, and Thomas M'Clintock, Mary Ann's husband and former clerk of Genesee Yearly Meeting. All the organizers were Quakers--a former Quaker in the case of Martha Wright--except Stanton.</p>
<p>The First Woman's Rights Convention, held July 19th and 20th, 1848, was conceived, organized and carried to a successful conclusion within eleven days. Three hundred people attended from as far away as Rochester and Syracuse, and at the end one hundred were willing to sign the Declaration of Sentiments. The rapid and successful organization of the Convention was possible because of the availability of a preexisting network of radical reformers.</p>
    <p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="genesee" id="genesee"></a>Genesee Yearly Meeting, 1834-1848</h2>
<p>The historical attitude of Quakers toward women has been used to explain the disproportionate representation of Quakers in the ranks of the abolition and woman's rights movements in the mid 19th century. There is, however, a more immediate background that helps explain the presence of Quaker women at the Seneca Falls Convention. In 1834, Hicksite Quakers in western New York, Canada and Michigan, formerly part of New York Yearly Meeting, established Genesee Yearly Meeting.  Among the first orders of business was to review and alter the book of discipline inherited from New York Yearly Meeting.</p>
<p>One change, and a change that seems to have been adopted with little discussion and no apparent controversy, was to revise the section concerning men's and women's meetings. While Quaker women did have an unprecedented degree of autonomy and authority within the Society of Friends, a careful reading of the New York Yearly Meeting Discipline of 1826 shows that they did not have equality in meetings for business. The women's meeting could not receive or disown members without the "concurrence" of the men's meeting. Cases involving the joint care of the men's and women's meeting required the approval of the men's meeting, but only the &quot;approbation&quot; of the women's meeting. The inequity of the two meetings did not go unnoticed. James Mott, Lucretia's husband, writing in 1820, likened the situation to a body trying to operate with only half a head.</p>
<p>Where did the proposal to remove the inequity between the men's and women's meeting originate? From Junius Monthly Meeting at Waterloo in 1836. The proposal &quot;that the discipline be so altered that men's and women's meetings shall stand on the same footing in all matters in which they are equally interested&quot; was forwarded to Farmington Quarterly Meeting in January 1837, quickly considered and improved by them, and forwarded to Genesee Yearly meeting. The recommendation is considered by the yearly meeting in 1837, held over to the next yearly meeting to allow time for consideration, and then approved in 1838. When Genesee Yearly Meeting printed its Discipline in 1842, the separate sections explaining the functions of the men's and women's movement were replaced by a single section with the following explanation:</p>

  <p align="center"> <i>In accordance with the declaration of the apostle, that male and female are one in Christ Jesus, <br />
  the following rules of  Discipline are to be understood as alike applicable to both sexes... <br />men's and women's meetings stand on the equal footing of common interest and common right.</i></p>


<p>And who were the members of Junius Monthly Meeting who initiated this change? Thomas and Mary Ann M'Clintock, Jane and (possibly) Richard P. Hunt, Margaret and George Pryor, Margaret and Azaliah Schooley, and others whose names appear on the declaration of sentiments. Other Declaration signers, including Amy Post and Rhoda DeGarmo, were on the committee of Farmington Quarterly Meeting that first considered the proposal from Junius.</p>
<p>The change, though radical in its implications, was a matter of Quakers making minor adjustments to their internal procedures. However, those same Friends who were initiating this and other changes to the discipline were also the Quakers who were actively involved in the abolitionist movement. In examining the network of reformers in the immediate vicinity of Waterloo and Seneca Falls, it is difficult and, I believe, impossible to disentangle the  radical Quakers from the Garrisonian abolitionist network. In the decade prior to Seneca Falls, the M'Clintock house and to a lesser extent the Hunt house had been the focus of abolitionist activities in the region.</p>
<p>The relative equality of the men's and women's meetings was only one issue--and apparently the least controversial issues--that concerned Genesee Friends in the 1830s and the 1840s. The other issues concerned authority among Friends, and were not so easily resolved. What was the role of the ministers and elders of the Society of Friends in defining acceptable Quaker behavior? Two different viewpoints on authority were expressed by visitors to Genesee Yearly Meeting. Priscilla Hunt Cadwallader from Indiana, visiting Genesee Yearly Meeting in 1835 when Friends were beginning to think of revising the discipline, cautioned  Friends to take great care and seek divine guidance, &quot;lest they should inadvertently put it in the power of some to oppress others and thereby obstruct that growth which Truth would sanction.&quot; John Comly of Byberry, Pennsylvania, who visited Genesee Yearly Meeting in 1842, was distressed. Behind what he characterized as a &quot;superficial spirit that would throw off all restraint, and order, and discipline&quot; he saw &quot;creaturely activity&quot; rather than divine guidance and the growth of &quot;lecturing, worldly spirit of the times.&quot;</p>
<p>The Discipline of Genesee Yearly Meeting, in common with those of the other yearly meetings, contained explicit prohibitions about any Quaker complicity in slavery, and indeed &quot;any act by which the right of slavery is acknowledged.&quot;  The same Discipline also advised Friends to &quot;demean themselves circumspectly towards all men, in the peaceable spirit of the gospel&quot; and to &quot;avoid all political controversies.&quot;  Yet Quakers had been actively writing, speaking and organizing against slavery for more than a century.</p>
    <p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="split" id="split"></a>Abolition Splits the Meeting</h2>
<p>For the M'Clintocks and the other activists, active engagement in the abolitionist movement was a continuation of long-standing Quaker tradition as well as manifest religious duty. But for more conservative Friends, who were beginning to dominate the Genesee Yearly Meeting in the mid 1840s, Friends were in danger of seriously compromising their principles by mixing with the controversies and doubtful disputations of the world's people.</p>
<p>Radical Friends were not only involved in the abolitionist movement of central New York, but they were frequently the key organizers, lecturers and the officers of the local anti-slavery societies. The annual reports of the American Anti-Slavery Society in 1839 and 1840 record an abolition society at Waterloo, though none in Seneca Falls.  These reports list the names of four contacts: Richard P. Hunt, at whose house the Seneca Falls Convention will be initiated; Thomas M'Clintock, at whose house the Declaration of Sentiments will be written; George Pryor, a signer of the Declaration; and a Charles Freebody, the only one of the four who is not identifiable as both a Quaker and Declaration signer.</p>
<p>All names of men. What of the women? When the Western New York Anti-Slavery Society was established in 1840, its constitution emphasized that &quot;All persons, male and female, may join the society, and be entitled to all the privileges of membership.&quot; Women and men met together and shared offices in the society.  By the way, the officers of the society were predominately Quaker.</p>
<p>In July 1841, Jacob Ferris, a member of Junius Monthly Meeting and a lecturer for the American Anti-Slavery Society wrote to the National Anti-Slavery Standard about a recent meeting of the Galen Anti-Slavery Society. The issue was not slavery, but moral agency and the status of women. The conclusion? That &quot;Woman's duty and accountability to God are the same as those of man; therefore, they are both equal in religious rights. In the sight of God there is neither male nor female.&quot;  While the context is abolition, the argument is a continuation of the Quaker argument made by Barclay in 1676 and in the Genesee Yearly Meeting Discipline.</p>
<p>Mary Ann M'Clintock was a key organizer of the Anti-Slavery Fairs in Waterloo and Rochester from 1843 onward. I am therefore somewhat skeptical of the assertion, apparently by Elizabeth Cady Stanton, in the History of Woman's Suffrage that the women who organized the Seneca Falls Convention had &quot;no experience in the modus operandi of getting up conventions.&quot; Mary Ann M'Clintock and her co-workers had a life-time of experience in holding meetings within the Society of Friends, and a more immediate and more relevant experience in organizing anti-slavery fairs, conventions and lectures in the region.</p>
<p>The involvement of the radical Quakers of Waterloo and Rochester in the abolition movement created a major controversy among Quakers. Should paid lecturers be permitted to use Quaker meeting houses? Were the abolitionists relying on mere human knowledge and reason rather than waiting for divine guidance? Were the opponents of war and slavery guilty of promoting a &quot;warlike spirit&quot; in the country? Were the radicals turning Quaker meetings into debating clubs rather than religious assemblies?</p>
<p>The issue that finally divided the Friends of Genesee Yearly Meeting in the 1840s was not slavery. Friends were clear that slavery was sinful. It was not strictly speaking the abolition movement, though abolitionism was clearly a causal factor. The issue was whether the corporate authority of the meeting, as centered in the Meetings of Ministers and Elders, had the religious and moral mandate to hinder the individual conscience. What right had an elder to caution a Friend, when that Friend thought his or her activities were the consequence of manifest religious duty?</p>
<p>By 1841, the issue about Quaker involvement with the abolition movement had transformed to a radical critique of Quaker polity. What right did ministers and elders have to caution Friends not to do what some Friends conscientiously believed to be manifest religious duty?  How could an elder determine that anti-slavery statements made in a Quaker meeting were motivated by human will and politics rather than religiously motivated? Should Quaker meetings have the authority to discipline or disown members for matters of belief and principle?   The radical response, supported by Thomas M'Clintock, Amy Post and others, was to call for the abolition of the &quot;select meetings&quot; of ministers and elders. It was, in essence, a call to dismantle the individual and corporate authority structure of the Society of Friends.</p>
<p>Proposals were made to Genesee Yearly Meeting to discontinue the meetings of ministers and elders as no longer useful. After much discussion in yearly meeting, and after several committees visited the meetings in Michigan, Genesee Yearly Meeting forced the issue in 1847-1848 by requiring the reestablishment of the select meetings in Michigan Quarter. In June 1848, Genesee Yearly Meeting was held in the meeting house at Farmington, New York. Lucretia and James Mott were present. The controversy widened into an actual separation, and the radicals, including many who would sign the Declaration of Sentiments at the Woman's Rights Convention six weeks later, walked out.</p>
<p>In explaining their actions in withdrawing, the radicals did not mention the status of women as an issue. The general issue of equality had in fact been settled by Friends a decade earlier. There was, however, a common question of external authority. The radicals saw a sisterhood of reforms: just as no slaveowner should have mastery over slaves, and no church structure should limit the spiritual growth of its members, men should not deny to women their natural rights. The Seneca Falls Convention, was, however, a radical departure. The Quaker-Garrisonian network of central New York was hostile to political action but now, presumably at the urging of Stanton, was claiming the right of suffrage.</p>
<p>The radicals met again at Farmington in October 1848, and adopted a &quot;Basis of Religious Association&quot; written largely by Thomas M'Clintock. The new organization, the Yearly Meeting of Congregational Friends, abolished the old system of separate meetings for men and women:  &quot;Not only will the equality of women be recognized, but so perfectly, that in our meetings...men and women will met together and transact business jointly.&quot;</p>
    <p align="right"><a href="#top" target="_top">TOP</a> </p>
<h2><a name="longwood" id="longwood"></a>Green Plain, Ohio -- Salem, Ohio -- Longwood, Pennsylvania</h2>
<p>The troubles in Genesee Yearly Meeting were also mirrored by similar conflicts in Ohio Yearly Meeting (Hicksite) and Indiana Yearly Meeting (Hicksite) and related to the anti-slavery split in Indiana Yearly Meeting (Orthodox).  Also in October 1848, Friends from parts of Ohio and Indiana &quot;who have adopted the Congregational Order&quot; met at Green Plain, Clark County, Ohio. Men and women met together, though the Quaker practice of one female and one male clerk was continued. Green Plain issued memorials against human slavery, capital punishment and the &quot;Black Laws&quot; of Ohio. That men and women could meet and act together in the same organization and ought to work together for progressive causes was not argued but assumed. The Ohio Yearly Meeting of Progressive Friends was formed in 1852 and the <a href="../organizations/index.php#prog">Pennsylvania Yearly Meeting of Progressive Friends</a> (also known as Longwood) was established in 1853. </p>
 
<h2><a name="conclusions" id="conclusions"></a>Conclusions</h2>
<p>The radical witness of Quakers for the equality of women dates from the 1640s, but that equality not perfect and was described primarily in religious rather than social terms. However, we do have evidence that the autonomy, although limited, and authority of women in meeting for business extended into social and family relationships among Friends.  The involvement of Quaker women with anti-slavery reform in the early 19th century seems to have transformed what was a sectarian peculiarity--allowing women to speak and to act politically--into first a hand-maiden of reform and then to an engine of reform. Likewise, the moral imperatives of reform challenged the insularity of Friends who were wary about engagement with the world. The experience of the abolition movement, with women (many of them Quaker) acting with men on common goals, seems to have also operated on Friends themselves to rethink gender relations.  The conflict between those radical Friends who felt called to &quot;practical righteousness&quot; to seek the ending of slavery, war, and all forms of social inequality, ultimately divided the Hicksite meetings though some have argued that the roots of modern liberal &quot;Friends General Conference&quot; Quakerism owes a good deal to the Progressive Friends.</p>
    <p align="right"><a href="#top" target="_top">TOP</a> </p>
<div id="topBorder">
    <br />
    <a name="sources"></a>
    <h2>Related Primary Sources</h2>
<br />
    <table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8646" target="_blank"> <img src="thumbs/qs-thumb-8646" title="American Anti-Slavery Society" alt="American Anti-Slavery Society" /> </a></div></td>
         <td width="70"></td>
      <td width="130"><div align="left"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,5843" target="_blank"> <img src="thumbs/qs-thumb-5843" alt="Pennsylvania Yearly Meeting of Progressive Friends" title="Progressive Friends, Printed Proceedings 1853-1873"/></a></div></td>
       <td width="70"></td>
      <td width="130"><div align="left"><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,10009" target="_blank"> <img src="thumbs/qs-thumb-10009" alt="Yearly Meeting of Congregational Friends" title="Yearly Meeting of Congregational Friends" /> </a></div></td>
       <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,3689" target="_blank"><img src="thumbs/qs-thumb-3689" title="Whittier to Grimkes" alt="Whittier to Grimkes" /></a></div></td>
      </tr>
      <tr>
        <td width="130" valign="top"><div align="left">American Anti-Slavery Society 50th Anniversary Celebration </div></td>
         <td width="70"></td>
        <td width="130"  valign="top"><div align="left">Progressive Friends Printed Proceedings, 1853-1873</div></td>
         <td width="70"></td>
	     <td width="130"  valign="top"><div align="left">Congregational Friends (Waterloo, N.Y.) Printed Proceedings, 1849-61</div></td>
          <td width="70"></td>
        <td width="130"  valign="top"><div align="left">Letter from John G. Whittier to the Grimke Sisters</div></td>
      </tr>
    </table>    
    <br />
	<p align="right"><a href="http://triptych.brynmawr.edu/cdm4/results.php?CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=women%27s%20rights&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank">Search primary sources for Women's Rights <img class="floatleft" style="padding: 0px 0px 0px 0px" src="../../images/primarysources_dc.png" height="20" width="20" alt="magnifier" border="0" title="Search for Primary Documents" /></a></p>
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