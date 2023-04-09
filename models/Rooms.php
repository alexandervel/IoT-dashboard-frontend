<?php


class Rooms
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getRoomsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
/*			$host = 'localhost';
			$dbname = 'php_base';
			$user = 'root';
			$password = '';
			$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM rooms WHERE id_room=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$roomsItem = $result->fetch();

			return $roomsItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getRoomsList() {
/*		$host = 'localhost';
		$dbname = 'php_base';
		$user = 'root';
		$password = '';
		$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);*/

		$db = Db::getConnection();
		$roomsList = array();

		$result = $db->query('SELECT * FROM rooms ORDER BY id_room ASC LIMIT 10');

		$i = 0;
		while($row = $result->fetch()) {
			$roomsList[$i]['id'] = $row['id_room'];
			$roomsList[$i]['name'] = $row['room_name'];
			$roomsList[$i]['square'] = $row['room_square'];
			$roomsList[$i]['rec_temp'] = $row['room_rec_temp'];
			$i++;
		}

		return $roomsList;
	
}
	public static function getSensorInRoomList($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$sensorsInRoomList = array();
			$result = $db->query('SELECT * FROM sensors WHERE id_room ='. $id.' ORDER BY id_sensor ASC LIMIT 10');

			$i = 0;
			while($row = $result->fetch()) {
				$sensorsInRoomList[$i]['id'] = $row['id_sensor'];
				$sensorsInRoomList[$i]['name'] = $row['sensor_name'];
				$i++;
			}

			return $sensorsInRoomList;
		}
	}

}