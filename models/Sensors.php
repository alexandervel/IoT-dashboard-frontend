<?php


class Sensors
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getSensorsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM sensors LEFT JOIN models ON (sensors.id_model = models.id_model) WHERE id_sensor=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$sensorsItem = $result->fetch();

			return $sensorsItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getSensorsList() {
		$db = Db::getConnection();
		$sensorsList = array();

		$result = $db->query('SELECT * FROM sensors LEFT JOIN models ON (sensors.id_model = models.id_model) LEFT JOIN rooms ON sensors.id_room = rooms.id_room ORDER BY id_sensor ASC LIMIT 10');
// SELECT * FROM sensors LEFT JOIN models ON (sensors.id_model = models.id_model) LEFT JOIN rooms ON sensors.id_room = rooms.id_room;		

		$i = 0;
		while($row = $result->fetch()) {
			$sensorsList[$i]['id_sensor'] = $row['id_sensor'];
			$sensorsList[$i]['id_room'] = $row['id_room'];
			$sensorsList[$i]['id_model'] = $row['id_model'];
			$sensorsList[$i]['sensor_name'] = $row['sensor_name'];
			$sensorsList[$i]['model_name'] = $row['model_name'];
			$sensorsList[$i]['model_short_name'] = $row['model_short_name'];
			$sensorsList[$i]['room_name'] = $row['room_name'];
			$sensorsList[$i]['room_name_short'] = $row['room_name_short'];
			$i++;
		}

		return $sensorsList;
	
	}

	public static function getSensorsListLastMeasure()
	{
		$db = Db::getConnection();
		$sensorsList = array();

		$result = $db->query('SELECT * FROM sensors LEFT JOIN models ON (sensors.id_model = models.id_model) LEFT JOIN rooms ON sensors.id_room = rooms.id_room ORDER BY id_sensor ASC');

		$i = 0;
		while($row = $result->fetch()) {
			$measurementLast = $db->query('SELECT * FROM measurements WHERE id_sensor='. $row['id_sensor'] .' ORDER BY measurement_time DESC LIMIT 1');
			$measurementValue = $measurementLast->fetch();
			if ($measurementValue) {
				$sensorsList[$i]['last_measure_value'] = $measurementValue['measurement_value']."&deg;C";
				$sensorsList[$i]['last_measure_time'] = $measurementValue['measurement_time'];
				if ($measurementValue['measurement_value']<15) $sensorsList[$i]['bg'] = 'text-bg-primary';
				if ($measurementValue['measurement_value']>=15) $sensorsList[$i]['bg'] = 'text-bg-warning';
				if ($measurementValue['measurement_value']>=20) $sensorsList[$i]['bg'] = 'text-bg-danger';
			} else {
				$sensorsList[$i]['last_measure_value'] = 'дані відсутні';
				$sensorsList[$i]['last_measure_time'] = 'дані відсутні';
				$sensorsList[$i]['bg'] = 'text-bg-secondary';
			}


			$sensorsList[$i]['id_sensor'] = $row['id_sensor'];
			$sensorsList[$i]['id_room'] = $row['id_room'];
			$sensorsList[$i]['id_model'] = $row['id_model'];
			$sensorsList[$i]['sensor_name'] = $row['sensor_name'];
			$sensorsList[$i]['model_name'] = $row['model_name'];
			$sensorsList[$i]['model_short_name'] = $row['model_short_name'];
			$sensorsList[$i]['room_name'] = $row['room_name'];
			$sensorsList[$i]['room_name_short'] = $row['room_name_short'];
			$i++;
		}

		return $sensorsList;



	}


}