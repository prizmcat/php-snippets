<?php 

//start a session like this. I just put some dummy stuff

session_start();

	if(isset($_GET['ad_id'])) $_SESSION['ad_id'] = $_GET['ad_id']; 
	if(isset($_GET['offer_id'])) $_SESSION['offer_id'] = $_GET['offer_id']; 
	if(isset($_GET['aff_id'])) $_SESSION['aff_id'] = $_GET['aff_id']; 
	if(isset($_GET['merch_id'])) $_SESSION['merch_id'] = $_GET['merch_id'];  


//this one replaces offer_id content with that from ad_id.

    if (isset($_SESSION["offer_id"])) { 
		if (empty($_SESSION["offer_id"]))  
				{ $_SESSION["offer_id"] = $_SESSION['ad_id']; }  
		}
		else 	{ $_SESSION["offer_id"]= $_SESSION['ad_id']; }


/*Envision the following scenario for an H1*/
/*cray cray stuff. Basically replace some of the weird shit from the url into different values */
/*so as an example, change ';3' from the url into other text/html elements */ 
$str = $_GET['msg1']; // so $str is whatever the msg1= in the url
$str = str_replace(";0", "", $str);
$str = str_replace(";1", "", $str);
$str = str_replace(";3", "<span class='text-color-red'>", $str);
$str = str_replace(";4", "</span>", $str); 
$str = str_replace(";5", "<span class='text-color-white'>", $str);
$str = str_replace(";6", "<img src='images/new/edit-type-text.png' class='float-edit-txt' alt='img' /></span>", $str); 
$msg1b = $str;
if(empty($msg1b)) {$msg1b = 'All-In-One <span class="">COOL<img src="images/img.png" class="" alt="img" /></span> Software';} 
 // msg1b is what we'll echo in the h1. this basically shows the $str, which shows the msg1. lol.

 ///////////////////

/* Feel like adding it to an H2? Use the same above but chante the get to a diff name so it doesn't conflict */
$str = $_GET['msg2']; // so $str is whatever the btn1= in the url
$str = str_replace(";0", "<strong>", $str);
$str = str_replace(";1", "</strong>", $str); 
$str = str_replace(";2", "", $str); 
$str = str_replace(";3", "", $str); 
$str = str_replace(";4", "", $str); 
$str = str_replace(";5", "", $str); 
$str = str_replace(";6", "", $str); 
$msg2b = $str;  
if(empty($msg2b)) {$msg2b = 'Over 50 easy-to-use PDF tools for PC & Mobile';} 




/* The following format is good for $_GET stuff rather than sessions. Notice above (line 13) the 'if empty' statement is inside the isset and not using && instead */

$l1 = $_GET['l1'];
if(empty($l1)) {$l1 = "1st list tag default text";}

$l2 = $_GET['l2'];
if(empty($l2)) {$l2 = "2nd list tag default text";}

$l3 = $_GET['l3'];
if(empty($l3)) {$l3 = "3rd list tag default text";}

$l4 = $_GET['l4'];
if(empty($l4)) {$l4 = "4th list tag default text";}

/*You can even change multiple objects via 1 url parameter*/
$l5 = $_GET['l5'];
if (empty($l5)) {  
}
else { $l5;
    $l6 = "6th list tag default text";
    $l7 = "7th list tag default text";};
/*use this to test above: */
/*echo ($l5.'....'.$l6.$l7); */


/*If your buttons have 2 lines, you can have the second line empty and only appear when you add &bnt3=something in the url*/
/*Just make sure you set up your button to print $btn2*/
$btn2 = $_GET['btn2'];
if(empty($btn2)) {$btn2 = "";} 



















/*A better way to detect and print/echo user agents for browsers and OS stuff */
$opera = stripos ($user_agent, 'Opera') || strpos($user_agent, 'OPR/');
$ie    = stripos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7');
$Edge    = stripos($_SERVER['HTTP_USER_AGENT'],"Edge");
$Edg    = stripos($_SERVER['HTTP_USER_AGENT'],"Edg");
$Chrome    = stripos($_SERVER['HTTP_USER_AGENT'],"Chrome");
$Safari    = stripos($_SERVER['HTTP_USER_AGENT'],"Safari");
$Firefox    = stripos($_SERVER['HTTP_USER_AGENT'],"Firefox"); 
 

 
$iOS  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone") || stripos($_SERVER['HTTP_USER_AGENT'],"iPod") || stripos($_SERVER['HTTP_USER_AGENT'],"iPad"); 
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");  
$Windows = stripos($_SERVER['HTTP_USER_AGENT'],"Windows"); 
$Mac	 = stripos($_SERVER['HTTP_USER_AGENT'],"Macintosh"); 
$Linux	 = stripos($_SERVER['HTTP_USER_AGENT'],"Linux"); 
$Chromebook = stripos($_SERVER['HTTP_USER_AGENT'],"Chromebook") || stripos($_SERVER['HTTP_USER_AGENT'],"CrOS"); 
$webOS = stripos($_SERVER['HTTP_USER_AGENT'],"webOS"); 



/*This a neat way to use the above */
//NICE AND CLEAN - NAH MEAN?
if($Android){
    echo '<meta http-equiv="refresh" content="0; url=https://www.google.com"/>'; 
}elseif( $ie || $Edge || $Edg ){
    echo '<meta http-equiv="refresh" content="0; url=https://microsoft.com';
 
} elseif( $iOS ){
    echo '<meta http-equiv="refresh" content="0; url=https://apple.com"/>';
} elseif( $Chromebook ){
    echo '<meta http-equiv="refresh" content="0; url=https://play.google.com"/>';
}elseif( $Mac ){
    echo '<meta http-equiv="refresh" content="0; url=https://apple.com"/>';
}else {
    //  do something here
}
















/*Let's create a cool way for building a structured url with wacky parameters an print/echo them into a url on any page */
$dynamicParams =""; 
$dynamicParams=$dynamicParams."parameter1=statictext"; 
$dynamicParams=$dynamicParams."&parameter2=morestatictext";
/*echo the following $url1 into the html page and it will spit out the shit you put above*/
$url1 = 'https://google.com/?'.$dynamicParams;

//------

/*Now let's try the above, but mix it up with the user agent detection*/
    $dynamicParams =""; 
	$dynamicParams=$dynamicParams."parameter1=statictext"; 
	$dynamicParams=$dynamicParams."parameter2=morestatictext";
	if 		($Chrome)  
			{$dynamicParams=$dynamicParams."&ch";}
	elseif 	($Firefox)  
			{$dynamicParams=$dynamicParams."&ff";} 
	elseif 	($ie)  
			{$dynamicParams=$dynamicParams."&ie";} 
	elseif 	($Edge || $Edg)  
			{$dynamicParams=$dynamicParams."&ed";}
	else {  } 
	$dynamicParams=$dynamicParams."&campaign=".$_SESSION['campaign'];
    $url2 = 'https://google.com/?'.$dynamicParams;


/*Let's say you just wanna build a url manually with some session tags, or 'GET' tags, or whatever... do it like this*/
$urlkey = 'https://domain.com?param1=11111&param2=22222&param3='.$_SESSION["param3"].'&param4='.$_SESSION["param4"]; 






//////////////////////////////////
//////////////////////////////////
//////////////////////////////////

/*-----25463143/dynamically-ordering-html-output-from-php-----*/ 

/*Let's say you wanna make a modular-like landing page where sections appear/disappear based on the url parameter. Do it like this:*/
/*First establish the main url parameter ppl will send to the domain from an ad or whatever. This will deliver the tailored layout design */
$layout = $_GET['layout'];

/*Next, let's build a few sections. Give each a simple name and put the html inside it */
$sct_1 = '<section>Section 1</section>';
$sct_2 = '<section>Section 2</section>';
$sct_3 = '<section>Section 3</section>';
    /*IF you have to put some php inside the html shit above, do it like this: */
    $sct_4 = '<section>Section 4'.$urlkey.'</section>';
    /*IF you have an apostrophe in the html above, you can fix it using a backslash */
    $sct_4 = '<section>Section\'s 4'.$urlkey.'</section>';


/*Next, if a user types in the url: &layout=layout_1, he'll get a custom layout. Look below for diff options.*/
if 		($layout == 'layout_1') {
	echo $sct_1.$sct_2.$sct_3;
} 	
elseif	($layout == 'layout_2') {
	echo $sct_3.$sct_2.$sct_1;
} 	
else {
	echo $sct_2.$sct_1.$sct_3;
}
/*Cool shit right?*/

/*YOU'RE DONE ---- You can basically take the above, pop it in an html doc and run with it. BUT, There's 1 more cool thing you can do:*/
/*Let's say you have an ad that you wanna show for each layout above, but only activate it when the user adds it in the url too. Do this: */
/*First, let's build the top banner div */
$sct_top_banner = '<div>TOP BANNER</div>';
/*Next let's make it show when a person types in '&showtopbanner=show' in the url. When there's nothing in the url, this banner won't show up*/ 
if ($_GET['showtopbanner'] == 'show') {$sct_top_banner;}
else {$sct_top_banner =' ';}
/*Next, you just pop in the $sct_top_banner within the layout if/else controls and you're done:*/
if 		($layout == 'layout_1') {
	echo $sct_top_banner.$sct_1.$sct_2.$sct_3;
} 	
elseif	($layout == 'layout_2') {
	echo $sct_top_banner.$sct_3.$sct_2.$sct_1;
} 	
else {
	echo $sct_top_banner.$sct_2.$sct_1.$sct_3;
}

//////////////////////////////////
//////////////////////////////////
//////////////////////////////////










/*Here's a way to change some text on a page based on different types of GET parameters*/ 
if (isset($_GET['culture']) && $_GET['culture'] == 'en') {  
    $culture_h1 = 'Thank you <span>for installing this</span>.'; 
    $culture_p = 'hope you like it.'; 
}
elseif (isset($_GET['culture']) && $_GET['culture'] == 'de') {  
    $culture_h1 = 'Vielen Dank, dass Sie <span class="text-color-red">installiert haben</span> '; 
    $culture_p = 'Die PDF-Komplettlösung für alle, die mit Dokumenten arbeiten.';
}
else  {
    $culture_h1 = 'Thank you'; 
    $culture_p = 'Yep'; 
}
/*then just print/echo it into the html*/







/*Build the url query as a session*/
$url = http_build_query($_SESSION); 
/*then just print/echo in html document*/
echo (urldecode($url));







 




echo ('<div style="height:200px; display:block;"><hr /></div>');

$rando = rand(3333,77777);
echo number_format($rando, 0, ',', ','); 










//////////////////////////////////
//////////////////////////////////
//////////////////////////////////








/*basically, if you want to capture specific text or anything in the url string, then redirect them to a specific lp, do the following: */
/*example url that would hit our lp: domain.com/?campaign=12345/ca/v2 */
/*We want to capture the '/ca/v2' text and redirect users */ 
$customURL = $_SERVER['REQUEST_URI']; 
if (strpos($customURL,'/ca/v2') !== false) {
    echo Header('Location:'.'https://otherdomain.com/?&campaign='.$_SESSION['campaign']);
	//echo Header('Location:'.'https://otherdomain.com/?'.$dynamicParams); //use $dynamicParams too if you want
} else {
    echo 'Some text to know everything is ok. Usually you leave this part empty.';
}










?> 