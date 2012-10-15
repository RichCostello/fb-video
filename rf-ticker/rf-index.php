<?php  
// load SimpleXML


$fourofkind = new SimpleXMLElement('http://jumbojackpots.stationcasinos.com/service.asmx/GetJackpot?ID=87', null, true);




echo <<<EOF
<table class="ticker">
 

 
        <tr>
                <td><p class="title-tick">Four Of A Kinds Today:</p></td>
			    <td></td>
             
        </tr>

EOF;
 // loop through our books
foreach($fourofkind  as $four)


{
	//Display with dollar sign and decimal
	  
	 /*  $fourdisp = "$" . number_format($four->JackpotTotal,2);
	   $flushdisp = "$" . number_format($flush->JackpotTotal,2);*/
	
//var_dump("$" . number_format($flush->JackpotTotal,2));
	  //var_dump("$" . number_format($four->JackpotTotal,2));
	  
	   $fourdisp = number_format($four->JackpotTotal,0);

	  
	  //var_dump($fourdisp);
	  //var_dump($flushdisp);
	  
        print <<<EOF
		

        <tr>
                <td><div class="disp">{$fourdisp}</div></td>
				<td><div class="mid"></div></td>
		
        </tr>

EOF;
}
echo '</table>';
?> 