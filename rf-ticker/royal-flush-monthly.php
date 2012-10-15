
<style>
body {background-color:#000}
.ticker{
	width:400px;
	height:110px;
	background-color:#000;
	background-image:url(ticker-image/right-now.jpg);
	background-position: center top;
	background-repeat: no-repeat;
	padding:25px 0 0 0;
}

.red {width:150px; height:35px; padding-top:5px; background-color:#F00; color:#fff; font-size:30px; text-align:center; font-family:Helvetica, sans-serif}
.mid {width:50px}
</style>

<body>
<?php
// load SimpleXML
$royalflush = new SimpleXMLElement('http://jumbojackpots.stationcasinos.com/service.asmx/GetJackpot?ID=75', null, true);

$fourofkind = new SimpleXMLElement('http://jumbojackpots.stationcasinos.com/service.asmx/GetJackpot?ID=87', null, true);




echo <<<EOF
<table class="ticker">
 

 
        <tr>
                <td><img src="ticker-image/flushes-month.jpg" height="27" /></td>
			    <td></td>
                <td><img src="ticker-image/four-kinds-today.jpg" height="27" /></td>
                
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
                <td><div class="red">{$flushdisp}</div></td>
				<td><div class="mid"></div></td>
                <td><div class="red">{$fourdisp}</div></td>
        </tr>

EOF;
}
echo '</table>';
?>
</body>