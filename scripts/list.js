
function fillCategory(){ 
 // this function is used to fill the category list on load
addOption(document.drop_list.Category, "People", "People", "");
addOption(document.drop_list.Category, "Organizations", "Organizations", "");
addOption(document.drop_list.Category, "Subjects", "Subjects", "");
}

function SelectSubCat(){
// ON selection of category this function will work

removeAllOptions(document.drop_list.SubCat);
if(document.drop_list.Category.value == 'People'){
addOption(document.drop_list.SubCat, "", "Choose Person", "");
showStuff("toggle");
}
else if(document.drop_list.Category.value == 'Organizations'){
addOption(document.drop_list.SubCat, "", "Choose Organization", "");
showStuff("toggle");
}
else if(document.drop_list.Category.value == 'Subjects'){
addOption(document.drop_list.SubCat, "", "Choose Subject", "");
showStuff("toggle");
}
else {
    hideStuff("toggle");
}

if(document.drop_list.Category.value == 'People'){
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:benezet", "Benezet, Anthony, 1713-1784");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:burritt", "Burritt, Elihu, 1810-1879");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:clarkson, thomas", "Clarkson, Thomas, 1760-1846");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:dugdale", "Dugdale, Joseph A. (1810-1896), Ruth, and Sarah B.");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:fox", "Fox, George, 1624-1691");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:thomas garrett", "Garrett, Thomas, 1789-1871");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:elias hicks", "Hicks, Elias, 1748-1830");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:hopper", "Hopper, Isaac T. (Isaac Tatem), 1771-1852");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:janney, samuel", "Janney, Samuel M. (Samuel Mcpherson), 1801-1880");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:benjamin lay", "Lay, Benjamin, 1677-1759");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:mckim", "McKim, J. Miller (James Miller), 1810-1874");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:mott", "Mott, Lucretia (1793-1880) and James (1788-1868)");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:neall", "Neall, Daniel Sr. (1784-1846) and Jr. (1817-1894)");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:theodore parker", "Parker, Theodore, 1810-1860");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:parrish", "Parrish, Dillwyn, Edward, and John");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:pennypacker", "Pennypacker, E. F. (Elijah Funk), 1804-1888");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:pleasants", "Pleasants, Robert, 1723-1801");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:purvis", "Purvis, Robert, 1810-1898");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:moses sheppard", "Sheppard, Moses, 1775-1857");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:washington taylor", "Taylor, George W, 1803-1891");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:whittier", "Whittier, John Greenleaf, 1807-1892");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:john woolman", "Woolman, John, 1720-1772");

}
if(document.drop_list.Category.value == 'Organizations'){
addOption(document.drop_list.SubCat,"/HC_QuakSlav :transc:american anti-slavery society", "American Anti-Slavery Society");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:colonization society", "American Colonization Society and its auxiliaries (i.e. Maryland Col. Soc.)");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:female anti-slavery sewing society", "Female Anti-Slavery Sewing Society");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:association for the aid", "Friends Association for the Aid and Elevation of the Freedmen (Phila.)");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:new jersey society", "New Jersey Society for Promoting the Abolition of Slavery");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :title:new york association", "New York Association of Friends for the Relief of Those Held in Slavery...");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:new-york society for promoting the manumission", "New-York Society for Promoting the Manumission of Slaves...");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:pennsylvania hall", "Pennsylvania Hall Association");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:pennsylvania society", "Pennsylvania Society for Promoting the Abolition of Slavery");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:philadelphia free produce", "Philadelphia Free Produce Association of Friends");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :creato:chesterfield", "Chesterfield Monthly Meeting");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:congregational friends", "Congregational Friends (Waterloo, N.Y.)");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:indiana yearly meeting", "Indiana Yearly Meeeting");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:london yearly meeting", "London Yearly Meeting");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:philadelphia monthly meeting", "Philadelphia Monthly Meeting");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :title:philadelphia yearly meeting", "Philadelphia Yearly Meeting");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:pennsylvania yearly meeting of progressive friends", "Progressive Friends (Chester County, Pa.)");


}
if(document.drop_list.Category.value == 'Subjects'){
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:colonization", "Colonization");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :subjec:education", "Education");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :subjec:free african americans", "Free African Americans");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:free produce", "Free Produce Movement");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :subjec:fugitive slaves", "Fugitive slaves");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:meeting for sufferings", "Meetings for Sufferings");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :subjec:peace", "Peace");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :subjec:slave trade", "Slave trade");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :subjec:slaveholders", "Slaveholders");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :subjec:Slavery -- Law and Legislation", "Slavery law and legislation");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :CISOSEARCHALL:temperance", "Temperance");
addOption(document.drop_list.SubCat,"/HC_QuakSlav :subjec:women's rights", "Women's Rights");


}

}
////////////////// 

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}


/* these two fns from
 * http://www.tutorialtastic.co.uk/tutorial/showhide_elements_with_javascript
 */
function showStuff(id) {
    document.getElementById(id).style.display = 'inline';
}

function hideStuff(id) {
    document.getElementById(id).style.display = 'none';
}

