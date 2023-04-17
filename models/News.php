<?php


class News
{

	/** Returns single news items with specified id
	* @rapam integer &id
	*/

	/**
	* Returns an array of news items
	*/
	public static function getNewsList() {
		$db = Db::getConnection();
		$newsList = array();

		$result = $db->query('SELECT * FROM news ORDER BY id DESC LIMIT 3');
// SELECT * FROM sensors LEFT JOIN models ON (sensors.id_model = models.id_model) LEFT JOIN rooms ON sensors.id_room = rooms.id_room;		

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['short_content'] = $row['short_content'];
			$newsList[$i]['content'] = $row['content'];
			$newsList[$i]['author_name'] = $row['author_name'];
			$newsList[$i]['preview'] = $row['preview'];
			$newsList[$i]['type'] = $row['type'];
			$i++;
		}

		return $newsList;
	
}


}