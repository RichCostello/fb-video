<?php

class tickers {
	
	public function getJackpot87(){
		$setUrl = simplexml_load_file('http://jumbojackpots.stationcasinos.com/service.asmx/GetJackpot?ID=87');
		return $setUrl;
		
		}
	
	public function getJackpot75(){
		$setUrl = simplexml_load_file('http://jumbojackpots.stationcasinos.com/service.asmx/GetJackpot?ID=75');
		return $setUrl;
		
		}
		
	public function getAmount87() {
		return $this->getJackpot87()->JackpotTotal;
	}
	
	public function getAmount75() {
		return $this->getJackpot75()->JackpotTotal; 
	}
}

$tickers = new tickers();

?>