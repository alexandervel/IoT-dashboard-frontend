<?php


class Labs
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getLabsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM rooms WHERE id_room=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$labsItem = $result->fetch();

			return $labsItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getLabsList() {
/*		$host = 'localhost';
		$dbname = 'php_base';
		$user = 'root';
		$password = '';
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/

		$db = Db::getConnection();
		$labsItem = array();

		$result = $db->query('SELECT * FROM rooms ORDER BY id_room ASC LIMIT 10');

		$i = 0;
		while($row = $result->fetch()) {
			$labsItem[$i]['id_room'] = $row['id_room'];
			$labsItem[$i]['room_name'] = $row['room_name'];
			$labsItem[$i]['room_name_short'] = $row['room_name_short'];
			$labsItem[$i]['room_name_short'] = $row['room_name_short'];
			$labsItem[$i]['room_description'] = $row['room_description'];
			$labsItem[$i]['room_square'] = $row['room_square'];
			$labsItem[$i]['room_rec_temp'] = $row['room_rec_temp'];
			$labsItem[$i]['room_photo'] = $row['room_photo'];
			$sensorsQuery = $db->query('SELECT * FROM sensors LEFT JOIN models ON (sensors.id_model = models.id_model) WHERE id_room='. $row['id_room']);
			$j = 0;
			while($rowIn = $sensorsQuery->fetch()) {
				$labsItem[$i]['sensor'][$j]['id_sensor'] = $rowIn['id_sensor'];
				$labsItem[$i]['sensor'][$j]['id_model'] = $rowIn['id_model'];
				$labsItem[$i]['sensor'][$j]['model_short_name'] = $rowIn['model_short_name'];
				$labsItem[$i]['sensor'][$j]['sensor_name'] = $rowIn['sensor_name'];
				$j++;
			}

			$i++;
		}

		return $labsItem;
	
}
	public static function getSensorInLabList($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$sensorsInLabList = array();
			$result = $db->query('SELECT * FROM sensors LEFT JOIN models ON (sensors.id_model = models.id_model) WHERE id_room ='. $id.' ORDER BY id_sensor');

			$i = 0;
			while($row = $result->fetch()) {

				$measurementLast = $db->query('SELECT * FROM measurements WHERE id_sensor='. $row['id_sensor'] .' ORDER BY measurement_time DESC LIMIT 1');
				$measurementValue = $measurementLast->fetch();
				if ($measurementValue) {
					$sensorsInLabList[$i]['last_measure_value'] = $measurementValue['measurement_value']."&deg;C";
					$sensorsInLabList[$i]['last_measure_time'] = $measurementValue['measurement_time'];
					if ($measurementValue['measurement_value']<15) $sensorsInLabList[$i]['bg'] = 'text-bg-primary';
					if ($measurementValue['measurement_value']>=15) $sensorsInLabList[$i]['bg'] = 'text-bg-warning';
					if ($measurementValue['measurement_value']>=20) $sensorsInLabList[$i]['bg'] = 'text-bg-danger';
				} else {
					$sensorsInLabList[$i]['last_measure_value'] = 'дані відсутні';
					$sensorsInLabList[$i]['last_measure_time'] = 'дані відсутні';
					$sensorsInLabList[$i]['bg'] = 'text-bg-secondary';
				}


				$sensorsInLabList[$i]['id_sensor'] = $row['id_sensor'];
				$sensorsInLabList[$i]['sensor_name'] = $row['sensor_name'];
				$sensorsInLabList[$i]['id_model'] = $row['id_model'];
				$sensorsInLabList[$i]['model_short_name'] = $row['model_short_name'];
				$i++;
			}

			return $sensorsInLabList;
		}
	}

}