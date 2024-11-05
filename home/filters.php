<?php 

//SORT
if(isset($_REQUEST["sort"]))
{
	$sort_x=$_REQUEST["sort"];
	if($_REQUEST["sort"]==1)
	{
		$sort="ORDER BY advertisement.aid DESC";
	}
	else if($_REQUEST["sort"]==2)
	{
		$sort="ORDER BY advertisement.aid ASC";
	}
	else if($_REQUEST["sort"]==3)
	{
		$sort="ORDER BY price DESC";
	}
	else if($_REQUEST["sort"]==4)
	{
		$sort="ORDER BY price ASC";
	}
}
else
{
	$sort_x="";
	$sort="ORDER BY advertisement.aid DESC";
}


//City
if(isset($_REQUEST["city"]) AND $_REQUEST["city"]!="")
{
	$city=$_REQUEST["city"];
	$city_filter="AND city='".$_REQUEST["city"]."'";
}
else
{
	$city="";
	$city_filter="";
}


//Size
if(isset($_REQUEST["min_size"]) AND $_REQUEST["min_size"]!="")
{
	$min=$_REQUEST["min_size"];
	$min_size="AND size>='".$_REQUEST["min_size"]."'";
}
else
{
	$min="";
	$min_size="";
}

if(isset($_REQUEST["max_size"]) AND $_REQUEST["max_size"]!="")
{
	$max=$_REQUEST["max_size"];
	$max_size="AND size<='".$_REQUEST["max_size"]."'";
}
else
{
	$max="";
	$max_size="";
}


//Search
if(isset($_REQUEST["search"]) AND $_REQUEST["search"]!="")
{
	$search=$_REQUEST["search"];
	$search_fil="AND (title LIKE '%".$_REQUEST["search"]."%' OR city LIKE '%".$_REQUEST["search"]."%')";
}
else
{
	$search="";
	$search_fil="";
}


?>