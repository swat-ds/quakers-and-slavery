<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : Underground Railroad</title><!-- InstanceEndEditable -->

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
   <a href="underground_railroad.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="underground_railroad.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>

    <h2>Jump to Section</h2>
    <h3><a href="#struggle">The Struggle for the Soul of America</a></h3>
	    <h3><a href="#quakers">Quaker Approaches to Abolitionism</a></h3>
	    <h3><a href="#accountability">Moral Accountability and Slavery</a></h3>
	    <h3><a href="#nonviolence">Violence and Non-Violence</a></h3>
	    <h3><a href="#quakerstory">The Quaker in the Underground Railroad Story</a></h3>
	    <h3><a href="#whosestory">Whose Story Are We Telling?</a></h3>
	    <h3><a href="#networks">Networks of Support: Crossing Racial Boundaries</a></h3>
	    <h3><a href="#mythologies">Mythologies of Tunnels, Quilts and Lawn Jockeys</a></h3>
	    <h3><a href="#summary">Summary: Points to Remember</a></h3>
	    <h3><a href="#references">References</a></h3>
	    <h3><a href="#sources">Primary Sources</a></h3>
	<p></p>
    <h2>Related Topics</h2>
	<h3><a href="../people/garrett.php">Thomas Garrett </a></h3>
		<h3><a href="../people/hopper.php">Isaac T. Hopper</a></h3>
	<h3><a href="../themes/johnson.php">The Rescue of Jane Johnson </a></h3>

  
  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    <a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11712" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="thumbs/qs-thumb-11712" alt="Underground Railroad" title="Underground Railroad"/></a>
          <h1>Quakers and the Underground Railroad: Myths and Realities </h1>
          <h3>By Christopher Densmore </h3>
          <p><i>Curator, Friends Historical Library of Swarthmore College </i></p>
      <br />
      <br /><br />

<h2><a name="struggle"></a>The Struggle for the Soul of America</h2>
    <p>In 1857, the Supreme Court of the United States, in the Dred Scott decision, stated that &quot;[a] person of African descent, whether emancipated or free, has no right which a white man is bound to respect...&quot; The United States Constitution, adopted written in 1787, while avoiding the use of the word &quot;slave&quot; required that &quot;fugitives from labor,&quot; meaning enslaved people, escaping from one state to another, must be returned to their so-called owners. More than a century before Dred Scott, in 1754, Philadelphia Yearly Meeting of the Religious Society of Friends told its members &quot;To live in ease and plenty, by the toil of those whom violence and cruelty have put in our power, is neither consistent with Christianity nor common justice.&quot; By the 1770s, all of the Quaker Yearly Meetings in North America were united on the proposition that the enslaved had a &quot;natural and just right of liberty&quot; and no Quaker should think to claim a human being as property. Slavery was, in Quaker eyes, a &quot;national evil.&quot;</p>
    <p>&quot;[A] house divided against itself shall not stand...&quot; [Matthew 12: 25]. What is to be done? On one side were people who believed slavery to be right and proper, and on the other were those who denied any legitimacy to the institution. In the middle were many people who may have had reservations about slavery but accepted its existence as the law of the land and part of the national compact. Harboring a &quot;fugitive from labor&quot; was a violation of both the United States Constitution and of Federal Law. It wasn't just illegal; it was subversive, even treasonous.</p>
   <p align="right"><a href="#top" target="_top">TOP</a> </p>

    <h2><a name="quakers" id="quakers"></a>Quaker Approaches to Abolitionism</h2>
    <p>The transition from slavery to freedom, particularly within a society where slavery is both legal and normative, raises questions about the position of the newly freed. Since in North America, slavery became almost exclusively connected with race, and people of African descent were therefore considered by many of the 18th and 19th century as &quot;other&quot; what was to be the status of freed people? Were they citizens? Could they vote? Did they have the same rights, including access to the legal system, as whites? Where did they fit in the economy?</p>
    <p>Quakers of the 18th and 19th century were very aware that Quakers had once held slaves, people who had worked for Quakers but had not been paid for their labors. It was not enough to clear the Society of Friends of the sin of slave-holding but to look to the education of the freed people.&nbsp; Philadelphia Quaker John Parrish's will in 1807 left a bequest for &quot;the use of Africans and their descendants...as a reward for the advantages I have received with others from their labors...&quot; Another Quaker former slave-owner, Richard Humphries, left a similar bequest which laid the foundations for what is now Cheyney University.</p>
 <p align="right"><a href="#top" target="_top">TOP</a> </p>

    <h2><a name="accountability" id="accountability"></a>Moral Accountability and Slavery</h2>
    <p>For Quakers, human slavery was not merely wrong; it was incompatible with moral and natural law. According to Jonathan Dymond, an English Quaker:</p>
      <blockquote>
        <p>[A]ny human being who has not forfeited his liberty by his crimes, has a right to be free--and that whosoever forcibly withhold liberty from an innocent man, robs him of his rights and violates the Moral Law...</p>
      </blockquote>
    <p>Quakers had a problem. They had determined that slavery was absolutely wrong, but lived in the United States lived within a society and under a government that held that people could be property. The Bible said, &quot;render, therefore, unto Caesar, the things which are Caesar's; and unto God the things that are of God.&quot; (Matthew 22:21 KJV). What if God and Caesar demanded different things? The Bible laid out the &quot;Golden Rule&quot; -- &quot;whatsoever ye would that men should do unto you, do you so even unto them&quot; (Matthew 7: 12). For Quakers, when religious duty came into conflict with the law of the land, it was the duty of the Christian to suffer rather than obey. Pennsylvania Quaker William Jackson made this point in an 1846 pamphlet:</p>
    <blockquote>
      <p>No one is under any moral obligation to lend himself as a tool to others for the commission of a crime, even when commanded by his government to do the wrong...</p>
    </blockquote>
    <p>If you believe in the Golden Rule, what should you do when the fugitive comes to your door?</p>
  <p align="right"><a href="#top" target="_top">TOP</a> </p>

    <h2><a name="nonviolence" id="nonviolence"></a>Violence and Non-Violence</h2>
    <p>Quakers had a history of going to jail for their beliefs--for not paying church tithes, for refusing to swear oaths, for refusing to bear arms. In the seventeenth century in England, thousands of Quakers spent time in prison--in some cases for years when they could easily have won their freedom by paying fines or swearing oaths. Non-violent civil disobedience did not begin with Martin Luther King in the 1950s or even Henry David Thoreau in the 1840s, but had been a part of Quaker practice since the 1650s.</p>
    <p>In the United States, slavery was ultimately extinguished by blood--the Civil War. There does seem to be an attitude that anyone really serious about abolishing slavery would eventually have to do as John Brown and pick up the carnal sword. This also became a problem for Quakers, whose peace testimony predated its anti-slavery testimony. Quakers were divided on some of the tactics of the Garrisonian anti-slavery movement in the 1830s and 1840s. Some Quakers, like <a href="../people/index.php#mottl">Lucretia Mott</a>, embraced the <a href="index.php#aass">American Anti-Slavery Society</a>, others thought that the rhetoric of the Garrisonians was divisive and would lead to conflict rather than resolution. The abolitionists themselves often disagreed over tactics.</p>
    <p>Some Quakers stood apart from the organized anti-slavery movement. Sunderland P. Gardner, a Hicksite Friends from Farmington, New York, clearly understood that slavery was evil and Friends needed to bear a full and efficient testimony against all evil. Yet Gardner cautioned in 1846 that &quot;wrong may be wrongfully opposed, and war opposed in a warlike spirit.&quot; These Friends were uncomfortable about some of the rhetoric of the Garrisonians even while agreeing with them on the basic principles of anti-slavery.</p>
   <p align="right"><a href="#top" target="_top">TOP</a> </p>

    <h2><a name="quakerstory" id="quakerstory"></a>The Quaker in the Underground Railroad Story</h2>
    <p>Quakers are part of Underground Railroad mythology. Some people seem to think that any house once owned by a Quaker must have been a stop on the Underground Railroad. But mythologies often contain truths. Rev. Samuel R. Ward, a one-time resident of Poughkeepsie, describes in his autobiography the escape of his parents from the Eastern Shore of Maryland to southern New Jersey in 1820. They left with the intention, Ward wrote, &quot;to reach a Free State, and live among Quakers.&quot; They found refuge in Greenwich, New Jersey. There were no slave-holders there, despite New Jersey being at that time a slave state, and, quoting Ward, &quot;when the slave-catchers came prowling about the Quakers placed all manner of peaceful obstacles in their way, while the Negroes made it a little too hot for their comfort.&quot;</p>
    <p>William Wells Brown, who had freed himself from enslavement by escape and later worked on the Underground Railroad as well as becoming a noted lecture and writer for the abolitionist cause, testified that the reputation of Quakers for anti-slavery was well known among the enslaved. No fugitive, Brown wrote, was ever betrayed by a Quaker.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>

    <h2><a name="whosestory" id="whosestory"></a>Whose Story are We Telling?</h2>
    <p>In the days of the abolitionist movement, the story of the Underground Railroad was largely about the freedom seekers themselves. Speakers and writers like Frederick Douglass or William Wells Brown could testify to the evils of slavery from their own experience. They stood as examples that the enslaved were not happy with their lot and were willing risk great dangers to become free. After the Civil War, when having been an abolitionist before the Civil War became respectable, there were a number of recollections and memoirs written by white abolitionists about their activities.</p>
    <p>Somehow the emphasis shifted from the story of the enslaved seeking their own freedom, largely and often exclusively without assistance from an Underground Railroad, to stories of how white people, often Quakers, aided fugitive slaves. By the mid twentieth century, the Underground Railroad story was often told as if the only actors were white, and the freedom seekers themselves were passed from safe house to safe house like so much cargo. I suspect that much of that twentieth century mythology was, perhaps unconsciously, a matter of white Americans trying to convince themselves that in the times of slavery, they had been on the side of freedom. One must be suspicious of &quot;feel good history.&quot;</p>
    <p>More than forty years ago, historian Larry Gara wrote a book entitled <i>The Liberty Line: The Legend of the Underground Railroad</i> (1961). Gara claimed that the story of the Underground Railroad, as told in the mid 20th century, focused almost exclusively on the assistance given freedom seekers by whites, particularly Quakers, and ignored the larger story of African-Americans liberating themselves and the role of African-American institutions and communities in assisting the fugitive. He called for refocusing the story on the freedom seekers and the role of African-American communities and institutions, north and south. Incidentally, Gara is a Quaker.</p>
    <p>Clearly, many of the self-emancipated not only freed themselves but made their way to the north and even to Canada with little or no aid. Others came though largely or exclusively African-American, and likely African-Canadian, networks, sometimes outside the knowledge of white abolitionists and white Underground Railroad workers.</p>
    <p>My reading of the writings of the people who were actively engaged in the Underground Railroad--as self-emancipators or as helpers--is that they clearly understood that it was the fugitives themselves who were the center of the story. It was the fugitive who took the initiative and the major part of the risk. But in re-centering the story on the freedom seeker, and on African-American communities of support, at times we seem to have forgotten the multi-racial aspects of the Underground Railroad. Do we remember the great achievements of the African-American heroes of our story--Frederick Douglass, Harriet Tubman, William Still--only to forget, or at least marginalize the contributions of their white co-workers--<a href="../people/index.php#hopper">Isaac T. Hopper</a>, Levi Coffin, <a href="../people/index.php#garrett">Thomas Garrett</a>? When William T. Still thanked those people who aided him in his work, his list was a virtual who's who of the Quaker families of Philadelphia.</p>
 <p align="right"><a href="#top" target="_top">TOP</a> </p>

    <h2><a name="networks" id="networks"></a>Networks of Support: Crossing Racial Boundaries</h2>
    <p>Fugitives from slavery were not headed to Canada. They were headed to places of safety. My current area of interest is in south-eastern Pennsylvania, specifically Chester and Lancaster Counties. These counties border Maryland, a slave state. There is ample evidence of a Quaker and African-American Underground Railroad network that assisted freedom seekers on their way north, often by way of Philadelphia. What I didn't expect of find was that there were a substantial number of fugitive slaves who crossed into Pennsylvania and stayed. The areas of greatest African-American population in south-eastern Pennsylvania are also the areas of greatest Quaker populations. Where there were no Quaker settlements, there were rarely any significant numbers of African-Americans.</p>
    <p>In one case a man named Thomas Mitchell was recaptured in Chester County where he had been living since escaping from slavery twelve years earlier. At the time of his capture, he was eight miles north of the Mason-Dixon Line and within eighteen miles of the place where he had been enslaved. The goal of the Underground Railroad was not necessarily Canada, but a place of safety. When Thomas Mitchell crossed into Pennsylvania, he was immediately in a region that had both Quakers and free people of color. Within five miles of his home were no less than seven Quaker meetinghouses and five African Union or African Methodist Episcopal (AME) Churches. When the slave catchers came for Thomas Mitchell, they didn&rsquo;t even try to go to the Pennsylvania Courts, but illegally kidnapped him from his home in the dead of night. Mitchell was taken by his captors to the slave market in Baltimore. Mitchell's white neighbors either didn't know, or wouldn't admit to knowing, that Mitchell was a fugitive. I suspect this was part of an intentional &quot;don't ask, don't tell&quot; policy. Ultimately his Chester County neighbors purchased his freedom. It is impossible to know how many of the African-Americans in this region were &quot;fugitives from labor&quot; but I do know that Mitchell was far from the only one in this category remaining in Chester and Lancaster Counties.</p>
    <p>Did Mitchell feel safe because he was living among free people of his own color or because he was living among Quakers? I suspect both. We need more research here but there seem to be numerous examples of related pre-Civil War African-American and Quaker communities--I know of examples in Maryland, New Jersey, Pennsylvania, and Canada. This is not to say that these communities were racially egalitarian. Mitchell worked for a white farmer, a Quaker, and lived in a tenant house. On Sunday, he likely went to one of the nearby African Methodist churches while his employer and family went off to Quaker meeting.</p>
 <p align="right"><a href="#top" target="_top">TOP</a> </p>

    <h2><a name="mythologies" id="mythologies"></a>Mythologies of Tunnels, Quilts and Lawn Jockeys</h2>
    <p>The popular mythology of the Underground Railroad is filled with stories of tunnels, secret hiding places, quilts and lawn jockeys. Let me be clear on this--there is virtually no evidence for any of these elements in the historical record. We have numerous narratives of the self emancipated and their helpers, and no one actually connected with the Underground Railroad ever mentioned tunnels, quilts (as signals) or cast iron statues. Specially built secret hiding places were so rare as to be almost non-existent. It was much easier to hide people, if secrecy was necessary, in the attic, the spring house, the barn or the field than build a hidey-hole. However, my major concern is that this fascination with the mechanisms of the Underground Railroad distracts from understanding the networks that made escape possible.</p>
    <p>When Thomas Mitchell's neighbors set off to rescue him from the slave catchers they used the existing Underground Railroad network. One group went to Wilmington, Delaware to alert Thomas Garrett, who telegraphed John Needles in Baltimore to go to the train station to wait for the kidnappers. Needles and Garrett were in touch with anti-slavery Quakers from Virginia to New York and beyond.</p>
 <p align="right"><a href="#top" target="_top">TOP</a> </p>

    <h2><a name="summary" id="summary"></a>Summary: Points to Remember</h2>
    <p>We have to guard against the attractions of &quot;feel good history.&quot; We want to believe that our nation and our ancestors were good and just people. That the United States, the country that declared in 1776 that &quot;all men are created equal&quot; also embraced human slavery is a cause for unease and perhaps a little guilt. In some of the older popular history, one gets the impression that everyone north of the Mason-Dixon Line was anti-slavery and that aiding fugitives was a popular activity. In effect we are saying that we don't have to feel uneasy about the history of slavery because <i>our</i> ancestors helped the fugitives. Just look at all the tunnels. Increasingly, the story of the Underground Railroad is being placed back into its primary context of African-American history. Where Levi Coffin, a white Quaker, was at one time seen as the great figure in the story, we are now more likely to begin by talking about Harriet Tubman and Frederick Douglass. I'm afraid that we may be replacing some of the old &quot;white people feel good&quot; history where white people are the heroes with a new mythology where every African-American was an Underground Railroad agent and every AME Church was a station. Perhaps, but we need proof, not just assumptions and wishful thinking. We very much need more research into African-American involvement as agents and station masters on the Underground Railroad.</p>
    <p>Did all Quakers participate in the Underground Railroad? There is no official statement from a Quaker body that this was expected. But Quakers rejected the legitimacy of slavery--it was not simply wrong, it was illegitimate and no Federal law could make it right. My judgment on the matter is that any fugitive who had crossed the Mason-Dixon Line and appealed to a Quaker for assistance was either aided or directed to someone who could supply that assistance.</p>
    <p>We often treat the story of the Underground Railroad as a story for children--particularly popular in our grade schools during Black History Month. We tend to focus on the heroism of those who broke the law to do the right thing. I am comfortable with the assertion that there are times when manifest religious duty requires people to follow the law of God rather than the law of men. However, the decision, particularly in a democratic society, to break the law is not something to be taken lightly. And if there has been good done in the service of religious ideals, there have also been great crimes done in the name of God.</p>
    <p>Some Quakers participated in loosely organized Underground Railroad networks. A few made the Underground Railroad their life's work. Others may have been willing to aid a fugitive, but the opportunity to do so seldom or never arose. Some abolitionists, including some Quaker abolitionists, felt as a matter of tactics that efforts to end slavery as a system, freeing millions, was better than providing assistance to the handful of people who freed themselves by escape. These too were likely to aid the individual escaping, but remained apart from the Underground Railroad system.</p>
    <p>Not all Quakers, and probably a minority of Quakers, participated in the organized anti-slavery movement. Some feared that too much association with the &quot;world's people&quot; would compromise Quaker testimonies; others felt that the tactics of some in the anti-slavery movement hindered rather than aided the work of emancipation. This is true. It is equally true that Quakers were represented in the organized anti-slavery movement far in excess of their proportion of the population at large.</p>
    <p>But whatever Quakers did for the anti-slavery movement and the Underground Railroad they did not do it alone. In the Underground Railroad, it was the enslaved, the freedom seekers, who took the initiative and took most of the risk. There was far more assistance to freedom seekers in African-American communities of support than has generally been acknowledged. We need to see the Underground Railroad not as safe houses and tunnels, but as support networks of people. Those networks cut across regions, across religions and across races. The Underground Railroad was a great work of moral imagination--when we remembered those in bonds, as bound with them (Hebrews 13: 3). The dungeon shook and the bonds fell off.</p>
    <p align="right"><a href="#top" target="_top">TOP</a> </p>
<br />  
<h2><a name="references"></a>References</h2>
<p>Gara, Larry. <i>The Liberty Line: the Legend of the Underground Railroad.</i> Lexington: Univ. of Kentucky Press, 1961.</p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
<div id="topBorder">
    <br />
    <a name="sources"></a>
    <h2>Related Primary Sources</h2>
   <br />
    <table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a title="Henry Box Brown" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,11158" target="_blank"><img src="thumbs/qs-thumb-11158" alt="Henry Box Brown" title="Henry Box Brown" /></a></div></td>
         <td width="70"></td>

        <td width="130"><div align="left"><a title="Thomas Garrett Trial Notes, 1848" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8053" target="_blank"><img src="thumbs/qs-thumb-8054" alt="Trial Notes, 1848" title="Trial Notes, 1848" /></a></div></td>
         <td width="70"></td>

        <td width="130"><div align="left"><a title="Elijah F. Pennypacker Correspondence" class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,4087" target="_blank"><img src="thumbs/qs-thumb-4087" alt="Elijah F. Pennypacker" title="Elijah F. Pennypacker"/></a></div></td>
         <td width="70"></td>

        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7946" target="_blank"><img src="thumbs/qs-thumb-7946" title="Isaac T. Hopper Papers" alt="Isaac T. Hopper Papers" /></a></div></td>
      </tr>
      <tr>
         <td width="130" valign="top"><div align="left">Resurrection of Henry &quot;Box&quot; Brown</div></td>
          <td width="70"></td>

       <td width="130" valign="top"><div align="left">Thomas Garrett Trial Notes</div></td>
        <td width="70"></td>

        <td width="130" valign="top"><div align="left">Elijah F. Pennypacker Correspondence</div></td>
         <td width="70"></td>

        <td width="130" valign="top"><div align="left">Isaac T. Hopper Papers </div></td>
      </tr>
    </table>    
    <br />
 	<p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?amp;CISOOP1=all&amp;CISOBOX1=&amp;CISOFIELD1=CISOSEARCHALL&amp;CISOOP2=exact&amp;CISOBOX2=underground%20railroad&amp;CISOFIELD2=CISOSEARCHALL&amp;CISOOP3=any&amp;CISOBOX3=&amp;CISOFIELD3=CISOSEARCHALL&amp;CISOOP4=none&amp;CISOBOX4=&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOROOT=/HC_QuakSlav&amp;t=a" target="_blank">view all documents that mention Underground Railroad</a>)</p>
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