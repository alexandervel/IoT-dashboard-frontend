<?php


class Measurements
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getMeasurement($id, $start, $finish)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$measurementList = array();
			
			// echo "SELECT * FROM measurements WHERE (measurement_time BETWEEN '" . $start ."' AND '" . $finish ."') AND id_sensor=" . $id;
			$result = $db->query("SELECT * FROM measurements WHERE (measurement_time BETWEEN '" . $start ."' AND '" . $finish ."') AND id_sensor=" . $id);
			if ($start) {


				$i = 0;
				$dataString = '';
				while($row = $result->fetch()) {
					$measurementList[$i]['id_measurement'] = $row['id_measurement'];
					$measurementList[$i]['measurement_value'] = $row['measurement_value'];
					$measurementList[$i]['measurement_time'] = $row['measurement_time'];
					$dataString = $dataString . "{x: '". $row['measurement_time'] ."'," ."y: ". $row['measurement_value'] ."}, ";  
					$i++;
				}
				$dataString = substr($dataString, 0, -2);
				$measurementList[$i-1]['dataString'] = $dataString;
				print_r($measurementList);

				return $measurementList;
			}
		}

	}



}