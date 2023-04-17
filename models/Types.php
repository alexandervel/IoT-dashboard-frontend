<?php


class Types
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	public static function getTypesItemByID($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT * FROM models WHERE id_model=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$typesItem = $result->fetch();

			return $typesItem;
		}

	}

	/**
	* Returns an array of news items
	*/
	public static function getTypesList() {
		$db = Db::getConnection();
		$typesList = array();

		$result = $db->query('SELECT * FROM models ORDER BY id_model ASC LIMIT 10');

		$i = 0;
		while($row = $result->fetch()) {
			$typesList[$i]['id_model'] = $row['id_model'];
			$typesList[$i]['model_name'] = $row['model_name'];
			$typesList[$i]['model_short_name'] = $row['model_short_name'];
			$typesList[$i]['model_description'] = $row['model_description'];
			$typesList[$i]['model_min_value'] = $row['model_min_value'];
			$typesList[$i]['model_max_value'] = $row['model_max_value'];
			$typesList[$i]['model_tolerance'] = $row['model_tolerance'];
			$typesList[$i]['model_tolerance'] = $row['model_tolerance'];
			$typesList[$i]['model_price'] = $row['model_price'];
			$typesList[$i]['model_price'] = $row['model_price'];
			$typesList[$i]['model_photo'] = $row['model_photo'];
			$i++;
		}

		return $typesList;
	
}


}