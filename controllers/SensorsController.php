<?php

include_once ROOT. '/models/Sensors.php';
include_once ROOT. '/models/Labs.php';

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

			require_once(ROOT . '/views/sensors/view.php');

/*			echo 'actionView'; */
		}

		return true;

	}

}

