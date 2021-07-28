<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><!-- InstanceBegin template="/Templates/template_QuakersSlavery_sidebar.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>

<!-- InstanceBeginEditable name="doctitle" --><title>Quakers &amp; Slavery : John Parrish</title><!-- InstanceEndEditable -->

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
   <a href="parrish_john.pdf" target="_blank"> <img class= "floatleft" src="../../images/printPDF_icon2.png" border="0" alt="" title="PDF" /></a> <a href="parrish_john.pdf" target="_blank">Printer Friendly PDF</a>
   </h3>
 
      <h2>Jump to Section</h2>
      <h3><a href="#parrish">John Parrish, 1729-1807</a></h3>
	     <h3><a href="#evolution">From "Notes" to "Remarks": The Evolution of Parrish's Ideas</a></h3>
      <h3><a href="#moderate">Radical Rhetoric versus Moderate Discourse</a></h3>
	    <h3><a href="#conclusion">Conclusion: Quaker Visionary</a></h3>
      <h3><a href="#references">References</a></h3>
      <h3><a href="#sources">Primary Sources</a></h3>

  <!-- InstanceEndEditable --></div></div>
          <div id="content"> 
    <div id="pagecontent"> 
  <!-- InstanceBeginEditable name="pagecontent" -->
    <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7975" target="_blank"><img class="floatleft" align="left" height="130" width="130" style="padding: 5px 15px 10px 0px" src="thumbs/qs-thumb-7975" border="0" alt="Page 1" title="Page 1" /></a>
        <h1>John Parrish, "Notes On Abolition" (circa 1805)</h1>
          <h3>By Richard S. Newman</h3>
          <p><i>Rochester Institute of Technology</i></p>
      <br />
      <br />
      <br />
      <br />
      <br />
	<h2><a name="parrish" id="parrish"></a>John Parrish, 1729-1807</h2>
    <p>John Parrish remains one of the most underrated Quaker abolitionists of the early national period. A tireless and fearless advocate of oppressed people of color, Parrish did everything he could to destroy slavery and racial injustice in the new United States, from presenting antislavery petitions to various governing bodies to monitoring the activities of domestic and international slave traders. As one family member recalled, Parrish had witnessed such awful &quot;scenes of degradation&quot; as a youngster in Maryland that he dedicated the rest of his life to serving as a &quot;zealous and useful advocate for [blacks'] emancipation.&quot;</p>
<p>Parrish is best remembered for authoring &quot;Remarks on the Slavery of the Black People.&quot; Published in 1806, Parrish's pamphlet ran to nearly 70 pages and ranged over such issues as Biblical antislavery, constitutional rationales for emancipation, colonization, and African-American political protest. In an era when gradual abolitionism stalled and the institution of slavery expanded both demographically and geographically, he believed that Americans needed to redouble their antislavery efforts to avert either eternal damnation or massive slave rebellion--or both. &quot;Remarks on Slavery&quot; became Parrish's valedictory address, for he died just a year later. Nevertheless, as David Brion Davis has remarked, Parrish's pamphlet prefigured subsequent antislavery writers' warnings that bondage had stained the American experiment in liberty and might fatally divide the republic at some future date. </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
 <h2><a name="evolution" id="evolution"></a>From "Notes" to "Remarks": The Evolution of Parrish's Ideas</h2>
    <p>As a recently discovered draft version of the pamphlet from around 1805 illustrates, Parrish had been thinking about these matters for some time. Entitled &quot;Notes on Abolition,&quot; Parrish's draft manuscript is a true working document, containing bits and fragments of material he considered using in the final pamphlet. Here, Parrish gathers stinging anti-slavery quotes from the Bible, conjures encounters with masters and slaves, and copies newspaper items about the alarming rise of slave trading. As if to indicate his own heightened sense of anxiety about slavery's demographic, geographic, and economic growth, Parrish's draft is written in a hurried, anxious manner. Indeed, though years away from both sectional crisis and the fire and brimstone preaching of antislavery firebrands like David Walker and William Lloyd Garrison, &quot;Notes on Abolition&quot; offers a glimpse into a more confrontational era of American abolitionism. </p>
    <p>In fact, while &quot;Notes on Abolition&quot; contains many of the same general ideas Parrish would present in &quot;Remarks on the Slavery of the Black People&quot;--particularly the theme of moral declension between the American Revolution and the presidency of slaveholder Thomas Jefferson and Divine judgment of slaveholding people and nations--&quot;Notes on Abolition&quot; offers even more radical antislavery declarations. For instance, where &quot;Remarks on Slavery&quot; begins with the theme of brotherly love as a way to build support for abolitionism, Parrish's draft essay opens by defining slavery and slave trading as &quot;crimes&quot; punishable by death. He uses an epigram from Exodus to show that both slavery and slaveholders are abominations in a moral universe: <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7979" target="_blank">&quot;He that stealeth a man and sell him, or if he be found in his hand, he shall surely be put to death&quot;</a> (<a href="" target="_blank">see page on Triptych</a>. Though he revisited this idea in the finished pamphlet, Parrish did so via rhetorical questions that reduced the strident nature of his attack. &quot;Will not the cries of this deeply afflicted people [slaves] reach the ears of the Lord of Sabbath,&quot; he asked in one section of &quot;Remarks on Slavery.&quot; &quot;What will it do for you in the day of retribution, when the servant shall be free from his master and both shall appear before an impartial judge, who's no respect or persons?&quot; In the draft essay, conversely, Parrish did not hesitate to lambast slaveholders as pariahs. (In the draft, he labeled slaveholders the <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7994" target="_blank">&quot;bastard son of liberty&quot;</a> he made no such assertion in the finished pamphlet).</p>
    <p>Perhaps more strikingly, Parrish's draft essay flirted with the idea that enslaved people might be justified in challenging bondage, even if only in an intellectual sense. In marginal notes inside the front cover of the rough manuscript, he noted that the <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7976" target="_blank">&quot;people of color ought not to acknowledge themselves slaves to any person but to assert their just rights&quot;</a>. In other parts of the draft, Parrish stated that enslaved people were being held illegitimately, either because American law enshrined universal liberty or because <a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,8005" target="_blank">&quot;the laws of God... and right reason prohibits slavery&quot;</a>. While he picked up these themes in &quot;Remarks on Slavery&quot;--by asserting that the Declaration of Independence had technically liberated oppressed people of color in 1776--Parrish did not counsel open black resistance. Why not? </p>
<p align="right"><a href="#top" target="_top">TOP</a> </p>
   <h2><a name="moderate" id="moderate"></a>Radical Rhetoric versus Moderate Discourse</h2>
    <p>Even if he was concerned about slavery's growth, Parrish still belonged to a generation of abolitionists who believed in gradual emancipation and thus in the idea that the antislavery movement would succeed through reasoned discourse and moderate action. By condemning slaveholders outright, and sympathizing above all else with African-Americans' struggle for freedom, Parrish's draft essay threatened to break with this tradition. More ominously, it would place him on the side of black revolutionaries in both St. Domingue and the United States, whose uprisings during the 1790s and early 1800s had instilled a pervasive fear among masters that people of color wanted nothing more than revenge for the wrongs of bondage. Though outraged by slavery, most gradual abolitionists were horrified by slave revolution in St. Domingue. Indeed, they often used it as a counter example of abolitionism, telling masters in the Atlantic world that unrepentant slaveholding would sooner or later result in slave rebellion. This is precisely how Parrish framed &quot;Remarks on Slavery&quot;--by showing that Quakers had adopted abolitionist programs amidst the growing prospect of slave uprising. &quot;Notes on Abolition&quot; pushes beyond mere warnings to masters; rather, Parrish seems to tolerate the idea that black uprising could be rationalized. In this sense, Parrish's draft looks forward to black abolitionist Henry Highland Garnet's famous &quot;Appeal to the Slaves&quot; (1843), which advised enslaved people to declare their freedom to masters, come what may. Realizing that such an admonition might lead to violence and harm the abolitionist cause, Parrish removed it from &quot;Remarks on Slavery.&quot;</p>
    <p>Parrish's support of colonization in both documents offers another window into early abolitionist's thinking. Though the formation of the American Colonization Society was a decade away, both black and white figures had long flirted with schemes that would remove people of color from slave societies. The British colony of Sierra Leone (established in 1787 along the West African coast) remained the leading example of colonization in Parrish's day. By the early 1800s, various writers considered using newly acquired parts of the North American landscape to create a colony of freed people. Parrish evidently saw colonization as a way to build abolitionist support among slaveholders and non-slaveholders alike. For he emphasized in both the rough draft and the final pamphlet that colonization might secure not just universal emancipation but racial separation. Like many other members of the Society of Friends in the late 18th and early 19th centuries, Parrish was unsure about social integration of black and white people. More importantly, perhaps, he realized that many white Northerners feared emancipation in the South because it might produce competition between black and white workers in urban labor markets. Either way, Parrish saw colonization as a potentially beneficial route to emancipation, providing liberated blacks with their own polity and masters a way to wash their hands of bondage.</p>
    <p>Nevertheless, as Parrish indicated in &quot;Notes on Abolition,&quot; colonization must not be mandatory. Indeed, the United States very much remained African Americans' homeland, if people of color chose to remain. In &quot;Remarks on Slavery,&quot; Parrish emphasized blacks' claim to citizenship most strongly in the appendices, not the body of the text. He hoped the effect would be the same, however. Indeed, by reprinting black petitions for freedom, Parrish showed that African Americans had learned the art of reasoned political discourse and could therefore be counted among an enlightened citizenry.</p>
 <p align="right"><a href="#top" target="_top">TOP</a> </p>
  <h2><a name="conclusion" id="conclusion"></a>Conclusion: Quaker Visionary</h2>
    <p>Though more polished than &quot;Notes on Abolition,&quot; &quot;Remarks on Slavery&quot; remains one of the boldest attacks on bondage in the early 19th century. Indeed, it is a model early abolitionist Jeremaid. But as &quot;Notes on Abolition&quot; now makes clear, Parrish was frustrated enough with slavery's resurgence that he entertained even harsher attacks on masters and their political allies north and south. Paired together, Parrish rough and final drafts indicate that some abolitionists were already reaching a tactical crossroads by the early 1800s. Had he reappeared in the 1860s, Parrish surely would have been horrified to learn that it took a bloody civil war to finally emancipate enslaved Americans--though, as both &quot;Notes on Abolition&quot; and &quot;Remarks on Slavery&quot; show, he feared such a possibility all along.</p>
    <p align="right"><a href="#top" target="_top">TOP</a> </p>
	<h2><a name="references"></a>References</h2>
    <p>Parrish, John, 1729-1804. <em><a href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7975" target="_blank">Notes on Abolition</a>,</em> ca. 1805. Friends Historical Library of Swarthmore Colege, MSS 003/176.</p>
    <p>Parrish, John, 1729-1804. <em>Remarks on the slavery of the black people: addressed to the citizens of the United States, particularly to those who are in legislative or executive stations in the general or state governments; and also to such individuals as hold them in bondage</em>. Philadelphia: Kimber, Conrad, &amp; Co., 1806.</p>
    <div id="topBorder">
    <br />
<a name="sources" id="sources"></a>
    <h2>Related Primary Sources</h2>
    <br />
    <center>    
	<table border="0" cellpadding="0" cellspacing="1">
      <tr>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,7975" target="_blank"><img src="thumbs/qs-thumb-7975" title="Notes on Abolition" alt="Notes on Abolition" /></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9657" target="_blank"><img src="thumbs/qs-thumb-9657" title="Anthony Benezet to George Dillwyn" alt="Anthony Benezet to George Dillwyn" /></a></div></td>
         <td width="70"></td>
        <td width="130"><div align="left"><a class="body_con" href="http://triptych.brynmawr.edu/u?/HC_QuakSlav,9969" target="_blank"><img src="thumbs/qs-thumb-9969" title="Notices of David Cooper" alt="Notices of David Cooper"/></a></div></td>
      </tr>
      <tr>
        <td width="130"><div align="left">Notes on Abolition by John Parrish </div></td>
         <td width="70"></td>
        <td width="130"><div align="left">Letter from Anthony Benezet to George Dillwyn </div></td>
         <td width="70"></td>
        <td width="130"><div align="left">Notices of David Cooper </div></td>
      </tr>
    </table>
    <br />
    </center>
    </div>
    
    
  <p align="right">(<a href="http://triptych.brynmawr.edu/cdm4/results.php?CISORESTMP=results.php&amp;CISOVIEWTMP=item_viewer.php&amp;CISOMODE=grid&amp;CISOGRID=thumbnail,A,1;title,A,1;altern,A,0;creato,200,0;none,A,0;20;relevancy,none,none,none,none&amp;CISOBIB=title,A,1,N;altern,A,0,N;creato,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none&amp;CISOTHUMB=20%20(4x5);relevancy,none,none,none,none&amp;CISOTITLE=20;title,none,none,none,none&amp;CISOHIERA=20;altern,title,none,none,none&amp;CISOSUPPRESS=1&amp;CISOTYPE=link&amp;CISOOP1=all&amp;CISOFIELD1=title&amp;CISOBOX1=&amp;CISOOP2=all&amp;CISOFIELD2=altern&amp;CISOBOX2=&amp;CISOOP3=all&amp;CISOFIELD3=creato&amp;CISOBOX3=&amp;CISOOP4=all&amp;CISOFIELD4=CISOSEARCHALL&amp;CISOBOX4=john+parrish&amp;c=all&amp;CISOROOT=%2FHC_QuakSlav" target="_blank">view all documents that mention John Parrish</a>)</p>


    
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