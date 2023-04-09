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
			$result = $db->query('SELECT * FROM sensors WHERE id_sensor=' . $id);

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
		$roomsList = array();

		$result = $db->query('SELECT * FROM sensors ORDER BY id_sensor ASC LIMIT 10');

		$i = 0;
		while($row = $result->fetch()) {
			$sensorsList[$i]['id'] = $row['id_sensor'];
			$sensorsList[$i]['name'] = $row['sensor_name'];
			$sensorsList[$i]['id_room'] = $row['id_room'];
			$sensorsList[$i]['id_model'] = $row['id_model'];
			$i++;
		}

		return $sensorsList;
	
}


}