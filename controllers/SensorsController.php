<?php

include_once ROOT. '/models/Sensors.php';
include_once ROOT. '/models/Rooms.php';

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
			$room_id = $sensorsItem['id_room'];
			$roomsItem = Rooms::getRoomsItemByID($room_id);				

			require_once(ROOT . '/views/sensors/view.php');

/*			echo 'actionView'; */
		}

		return true;

	}

}

