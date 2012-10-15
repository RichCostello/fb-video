<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
<link href="https://www.stationcasinos.com/css/main-layout.css" rel="stylesheet" type="text/css" />
<style>
.promoticker{width:512px; height:150px}
.wintext-wht{font: 14px Arial, Helvetica, sans-serif; color: #fff; text-decoration: none; text-transform: uppercase; font-weight:bold }
.wintext-red{color: #F00;}
.ticker{margin:10px auto 0 auto}
.title-tick{ font-size:14px}
.disp{width:150px; height:33px; background-color:#F00; font-size:28px; padding-top:15px; color:#FFF; font-family:Arial, Helvetica, sans-serif}
.mid{width:25px}
</style>

</head>

<body>
<div class="promoticker">
<span class="wintext-wht">People Are Winning <span class="wintext-red">Right Now</span> at Station Casinos!</span>

<?php  
// load SimpleXML
$royalflush = new SimpleXMLElement('http://jumbojackpots.stationcasinos.com/service.asmx/GetJackpot?ID=75', null, true);

$fourofkind = new SimpleXMLElement('http://jumbojackpots.stationcasinos.com/service.asmx/GetJackpot?ID=87', null, true);




echo <<<EOF
<table class="ticker">
 

 
        <tr>
                <td><p class="title-tick">Four Of A Kinds Today:</p></td>
			    <td></td>
                <td><p class="title-tick">Royal Flushes This Month:</p></td>
        </tr>

EOF;
foreach($royalflush  as $flush) // loop through our books
foreach($fourofkind  as $four)


{
	//Display with dollar sign and decimal
	  
	 /*  $fourdisp = "$" . number_format($four->JackpotTotal,2);
	   $flushdisp = "$" . number_format($flush->JackpotTotal,2);*/
	
//var_dump("$" . number_format($flush->JackpotTotal,2));
	  //var_dump("$" . number_format($four->JackpotTotal,2));
	  
	   $fourdisp = number_format($four->JackpotTotal,0);
	   $flushdisp = number_format($flush->JackpotTotal,0);
	  
	  //var_dump($fourdisp);
	  //var_dump($flushdisp);
	  
        print <<<EOF
		

        <tr>
                <td><div class="disp">{$fourdisp}</div></td>
				<td><div class="mid"></div></td>
				<td><div class="disp">{$flushdisp}</div></td>
        </tr>

EOF;
}
echo '</table>';
?> 

</div>


</body>
</html>
