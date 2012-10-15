<?

//setup facebook app
$app_id = "100529490059656";

require_once("../facebook.php");

$config['appid'] = $app_id;
$config['secret'] = "ac7699529d1b308ccfd9f3dc2b2a4cbb";

$facebook = new Facebook(array(
				'appId'  => $config['appid'],
				'secret' => $config['secret'],
				'cookie' => true,
			));

$signed_request = $facebook->getSignedRequest();

$page_admin = $signed_request["page"]["admin"];
$like_status = $signed_request["page"]["liked"];

$properties = array(
		'64061651400' => array('name' => "Station Casino", 'url' => 'http://www.facebook.com/stationcasinos?sk=app_100529490059656', 'img' => 'room2.jpg'),
		'165106597073' => array('name' => "Texas Station", 'url' => 'http://www.facebook.com/texasstation?sk=app_100529490059656', 'img' => 'room_texasstation.jpg'),
		'53201180527' => array('name' => "Sunset Station", 'url' => 'http://www.facebook.com/sunsetstation?sk=app_100529490059656', 'img' => 'room_sunsetstation.jpg'),
		'157108104327456' => array('name' => "Santa Fe Station", 'url' => 'http://www.facebook.com/SantaFeStation?sk=app_100529490059656', 'img' => 'room_santafe.jpg'),
		'52412782331' => array('name' => "Palace Station", 'url' => 'http://www.facebook.com/palacestation?sk=app_100529490059656', 'img' => 'room_palace.jpg'),
		'165791767689' => array('name' => "Boulder Station", 'url' => 'http://www.facebook.com/boulderstation?sk=app_100529490059656', 'img' => 'room_boulder.jpg'),
		'47094012308' => array('name' => "Aliante Station", 'url' => 'http://www.facebook.com/aliantestation?sk=app_100529490059656', 'img' => 'room_aliante.jpg'),
		'44758789266' => array('name' => "Green Valley Ranch", 'url' => 'http://www.facebook.com/greenvalleyranch?sk=app_100529490059656', 'img' => 'room_greenvalley.jpg'),
		'119039581451551' => array('name' => "Fiesta Casino", 'url' => 'http://www.facebook.com/fiestacasinos?sk=app_100529490059656', 'img' => 'room_henderson.jpg'),
		'54202046498' => array('name' => "Red Rock", 'url' => 'http://www.facebook.com/RedRock?sk=app_100529490059656', 'img' => 'room_redrock.jpg'),
		'216381761722875' => array('name' => 'DR Apps', 'url' => 'http://www.facebook.com/pages/Digital-Royalty-Apps/216381761722875?sk=app_100529490059656', 'img' => '')
	);
	
/*$tweetText = array(
						'The slot progressives @StationCasions are growing fast. Take a look for yourself',
						'I just played #VideoPoker Online for #Free on ' . $properties[$signed_request['page']['id']]['name'] . '\'s #Facebook page @StationCasinos'
				);
$rand = rand(0, count($tweetText)-1);*/

$tweetData = 'I just played #VideoPoker Online for #Free on ' . $properties[$signed_request['page']['id']]['name'] . '\'s #Facebook page @StationCasinos';

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" language="javascript" type="text/javascript"></script>
<script src="/clients/common/js/cufon-yui.js" language="javascript" type="text/javascript"></script>
<script src="/clients/common/js/fonts/altGothic2_400.font.js" language="javascript" type="text/javascript"></script>
<script src="/common/js/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('.gothic', {hover: true});
	
	$(document).ready(function() {
		
		$('.fbshare').click(function() {
			FB.ui(
			   {
				 method: 'feed',
				 name: 'Play Free Online Video Poker Games with <?=$properties[$signed_request['page']['id']]['name']?>',
				 link: '<?=$properties[$signed_request['page']['id']]['url']?>',
				 picture: 'http://digitalroyaltyapps.com/clients/stations/gameplay/share2.gif',
				 caption: 'Station Casinos',
				 description: 'I just played Video Poker Online for Free on <?=$properties[$signed_request['page']['id']]['name']?>\'s Facebook page. Play now!',
				 message: ''
			   },
			   function(response) {
				 if (response && response.post_id) {
				   //alert('Post was published.');
				 } else {
				   //alert('Post was not published.');
				 }
			   }
			 );
		});
		
	});

	
</script>
<style>
* {
	padding: 0;
	margin: 0;
}
body {
	width: 520px;
	background-color: #000;
	color: #fff;
	font-size: 12px;
	overflow: hidden;
	font-family: Verdana, Geneva, sans-serif;
}
div {
	position: relative;
}
img {
	border: 0;
}
#container {
	position: relative;
	width: 520px;
	margin: 0px auto;
	overflow: hidden;
	text-align: center;
	padding-top: 10px;
}
div.score {
	background-color: red;
	width: 150px;
	text-align: center;
	font-size: 38px;
	line-height: 38px;
	color: #fff;
}
#social {
	width: 180px;
	margin: 10px auto;
}

h1 {
	font-size: 27px;
}
p {
	margin-bottom: 16px;
	text-transform: uppercase;
}
.clear {
	display: block;
	height: 0px;
	min-height: 0px;
	zoom: 1;
	clear: both;
}
a, a:visited, a:active {
	color: #ccc;
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
</style>
</head>

<body>

<? if(!$like_status): ?>
<img src="likegate.jpg" height="800" width="520" alt="Like us to play free online video poker" />
<? else: ?>
<div id="container">

	<img src="header2.gif" height="209" width="418" alt="Boarding Pass" usemap="#Map" />
    
    <div style="width:410px;margin:15px auto;display:none;">
   	  	<div class="score gothic" style="float:left;">
        	<div style="font-size:17px;color:#999;background-color:#000;line-height:24px;">ROYAL FLUSHES THIS MONTH:</div>
        	0,000,000
        </div>
    	<div class="score gothic" style="float:right;">
        	<div style="font-size:17px;color:#999;background-color:#000;line-height:24px;">FOUR OF A KINDS TODAY:</div>
        	0,000
        </div>
    	<br class="clear" />
    </div>
    
    <div id="social">
    	<img src="../../common/images/share.png" height="20" width="57" class="fbshare" style="cursor:pointer;float:left;" />
        <a href="http://twitter.com/share" style="float:right;" class="twitter-share-button" data-url="<?=$properties[$signed_request['page']['id']]['url']?>" data-text="<?=$tweetData?>" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    </div>
    
    <img src="footer.gif" height="46" width="449" alt="Play video poker for free" />

	<iframe src="http://www.videopoker.com/r/station/" name="playVP" id="playVP" frameborder="0" scrolling="no" width="520" height="456" style="margin-top:15px;"></iframe>
    
    <br /><br />
    <p style="text-align:center;text-transform:uppercase;">
    	<strong>GET THE BEST DEALS IN LAS VEGAS</strong><br /><br />
    	<a href="http://www.stationcasinos.com/2011/stations/" target="_blank">Hotel Deals</a> &nbsp; 
    	<a href="http://www.stationcasinos.com/promos/promos-dining.php" target="_blank">Dining Deals</a> &nbsp; 
    	<a href="http://www.stationcasinos.com/promos/email/" target="_blank">Email Deals</a> &nbsp; 
    	<a href="http://www.stationcasinos.com/gaming/slots/" target="_blank">Gaming</a> &nbsp; 
    	<a href="https://www.mystation.com/" target="_blank">MyStation.com</a> &nbsp; 
    </p>

</div>
<? endif; ?>

<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
	FB.init({
		appId: '100529490059656', 
		status: true, 
		cookie: true,
		xfbml: true
	});
	FB.Canvas.setAutoResize(100);
};
(function() {
	var e = document.createElement('script'); e.async = true;
	e.src = document.location.protocol +
	'//connect.facebook.net/en_US/all.js';
	document.getElementById('fb-root').appendChild(e);
}());
</script>

<map name="Map" id="Map">
  <area shape="rect" coords="159,178,261,214" href="https://www.mystation.com/?utm_source=Facebook&amp;utm_medium=Tab&amp;utm_campaign=MyStation" target="_blank" alt="" />
</map>

</body>
</html>