<?php
/** Get Unique Values from array Values **/
Class Parser {
	//Url Parser Function
	public function arrayValuesUrlParser($urls) {
		//Create Container
		$parsed = [];
		//Loop Through the Urls
		foreach($urls as $url) {
			$parse = parse_url($url);
			$parsed[] = $parse["host"];
			//Delete Duplicates
			$result = array_unique($parsed);
		}
		//Dump result
		print_r($result);
	}

}

?>