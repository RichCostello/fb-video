<?php

//setup facebook app
$app_id = "246717852036642";

require_once("facebook.php");

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
		'64061651400' => array('name' => "Station Casinos", 'url' => 'http://www.facebook.com/stationcasinos?sk=app_246717852036642', 'img' => 'room2.jpg'),
		'165106597073' => array('name' => "Texas Station", 'url' => 'http://www.facebook.com/texasstation?sk=app_246717852036642', 'img' => 'room_texasstation.jpg'),
		'53201180527' => array('name' => "Sunset Station", 'url' => 'http://www.facebook.com/sunsetstation?sk=app_246717852036642', 'img' => 'room_sunsetstation.jpg'),
		'157108104327456' => array('name' => "Santa Fe Station", 'url' => 'http://www.facebook.com/SantaFeStation?sk=app_246717852036642', 'img' => 'room_santafe.jpg'),
		'52412782331' => array('name' => "Palace Station", 'url' => 'http://www.facebook.com/palacestation?sk=app_246717852036642', 'img' => 'room_palace.jpg'),
		'165791767689' => array('name' => "Boulder Station", 'url' => 'http://www.facebook.com/boulderstation?sk=app_246717852036642', 'img' => 'room_boulder.jpg'),
		'47094012308' => array('name' => "Aliante Station", 'url' => 'http://www.facebook.com/aliantestation?sk=app_246717852036642', 'img' => 'room_aliante.jpg'),
		'44758789266' => array('name' => "Green Valley Ranch", 'url' => 'http://www.facebook.com/greenvalleyranch?sk=app_246717852036642', 'img' => 'room_greenvalley.jpg'),
		'119039581451551' => array('name' => "Fiesta Casinos", 'url' => 'http://www.facebook.com/fiestacasinos?sk=app_246717852036642', 'img' => 'room_henderson.jpg'),
		'54202046498' => array('name' => "Red Rock", 'url' => 'http://www.facebook.com/RedRock?sk=app_246717852036642', 'img' => 'room_redrock.jpg'),
		'216381761722875' => array('name' => 'DR Apps', 'url' => 'http://www.facebook.com/pages/Digital-Royalty-Apps/216381761722875?sk=app_246717852036642', 'img' => ''),
		'135695783160356' => array('name' => 'Station\'s Testing', 'url' => 'http://www.facebook.com/pages/Bingo-Poker-Palace/135695783160356?sk=app_271815649504090', 'img' => '')
	);
	
$tweetText = array(
						'The slot progressives @StationCasions are growing fast. Take a look for yourself',
						'I just played #VideoPoker Online for #Free on ' . $properties[$signed_request['page']['id']]['name'] . '\'s #Facebook page @StationCasinos'
				);
$rand = rand(0, count($tweetText)-1);

$tweetData = $tweetText[$rand];

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" language="javascript" type="text/javascript"></script>
<script src="cufon-yui.js" language="javascript" type="text/javascript"></script>
<script src="altGothic2_400.font.js" language="javascript" type="text/javascript"></script>
<script src="swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon.replace('.gothic', {hover: true});
	
	$(document).ready(function() {
		
		$('.fbshare').click(function() {
			FB.ui(
			   {
				 method: 'feed',
				 name: 'MyStations and Free Online Video Poker',
				 link: '<?php echo $properties[$signed_request['page']['id']]['url']; ?>',
				 picture: 'http://digitalroyaltyapps.com/clients/stations/gameplay/share2.gif',
				 caption: 'Station Casinos',
				 description: 'I just played Video Poker Online for Free on <?php echo $properties[$signed_request['page']['id']]['name']; ?>\'s Facebook page. Play now!',
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
#tickers {
	width: 410px;
	margin: 15px auto;
	display: none; /*change this to display: block to make visible*/
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
</style>
</head>

<body>

<div id="container">

	<img src="header2.gif" height="209" width="418" alt="Boarding Pass" />
    
    <div id="tickers" style="">
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
    	<img src="share.png" height="20" width="57" class="fbshare" style="cursor:pointer;float:left;" />
        <!-- other text: The slot progressives @StationCasions are growing fast. Take a look for yourself -->
        <a href="http://twitter.com/share" style="float:right;" class="twitter-share-button" data-url="<?php echo $properties[$signed_request['page']['id']]['url']; ?>" data-text="<?php echo $tweetData; ?>" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    </div>
    
    <img src="footer.gif" height="46" width="449" alt="Play video poker for free" />

	<iframe src="http://www.videopoker.com/r/_swf/3/DoubleSuperTimesPay_v3_nsl_secure.swf?wmode=transparent" height="390" width="520" frameborder="0" style="margin-top:15px;" ></iframe>

</div>

<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
	FB.init({
		appId: '<?php echo $app_id; ?>', 
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

</body>
</html>