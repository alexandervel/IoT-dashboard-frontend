<?php

include_once ROOT. '/models/Sensors.php';
include_once ROOT. '/models/News.php';


class HomeController {

	public function actionIndex()
	{
		
		$newsList = News::getNewsList();
		$sensorsList = Sensors::getSensorsListLastMeasure();

		require_once(ROOT . '/views/home/index.php');
		return true;
	}

	public function actionView($id)
	{

		return true;

	}

}