<?php

include_once ROOT. '/models/Sensors.php';
include_once ROOT. '/models/Labs.php';
include_once ROOT. '/models/Measurements.php';

class SensorsController {

	public function actionIndex()
	{
		
		$sensorsList = array();
		$sensorsList = Sensors::getSensorsList();

		require_once(ROOT . '/views/sensors/index.php');

		return true;
	}

	public function actionView($id)
	{
		if ($id) {
			

			$sensorsItem = Sensors::getSensorsItemByID($id);
			$lab_id = $sensorsItem['id_room'];
			$labsItem = Labs::getLabsItemByID($lab_id);	

			// echo $_GET['start-time'];

			// $startTime = $_GET['start-time'];
			if (!empty($_GET['start-time'])) {
				$startTime = $_GET['start-time'];
			} else {
				$startTime = new DateTime();
				$startTime->modify('-1 day');
				$startTime = $startTime->format('Y-m-d');
			}
			if (!empty($_GET['stop-time'])) {
				$stopTime = $_GET['stop-time'];
			} else {
				$stopTime = new DateTime();
				$stopTime = $stopTime->format('Y-m-d');
			}
			
			// $startTime = (isset($_GET['start-time'])) ? $_GET['start-time'] : CURDATE() - 1 ;
			// $stopTime = (isset($_GET['stop-time'])) ? $_GET['stop-time'] : CURDATE() ;
			// $stopTime =$_GET['stop-time'];
			// $stopTime = '2023-03-22';


			$measurementData = Measurements::getMeasurement($id,$startTime, $stopTime);
			$dataString = end($measurementData);

			require_once(ROOT . '/views/sensors/view.php');

/*			echo 'actionView'; */
		}

		return true;

	}

}

