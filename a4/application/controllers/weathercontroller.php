<?php

class WeatherController extends Controller{

	public function index(){
		$this->set(result,false);

	}
	public function getresults() {
	$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=dc8ed9c3e07048a1a14165418181811&q=".$_POST['zip']."&format=xml&num_of_days=2");
	$this->set('result', true);
			$this->set('weather', $xml);
			}
}
?>
