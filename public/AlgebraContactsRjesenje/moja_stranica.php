<?php
require "classes/Page.php";

class Moja extends Page {
    
    protected function GetContent()
		{
			
			$output = '';
			
			
			$output .= '<h1>Dobrodošli na Moju Stranicu</h1>';
			$output .= '<p>Pohranite svoje podatke kod nas.</p>';
			
			
			return $output;
		}
                
                protected function PageRequiresAuthenticUser()
		{
			return false;
		}
}
$site = new Moja();
	
$site->Display('Moja Stranica');