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
			$result = $db->query('SELECT * FROM sensors WHERE id_room ='. $id.' ORDER BY id_sensor ASC LIMIT 10');

			$i = 0;
			while($row = $result->fetch()) {
				$sensorsInLabList[$i]['id'] = $row['id_sensor'];
				$sensorsInLabList[$i]['name'] = $row['sensor_name'];
				$i++;
			}

			return $sensorsInLabList;
		}
	}

}