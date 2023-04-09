<?php

include_once ROOT. '/models/Rooms.php';

class RoomsController {

	public function actionIndex()
	{
		
		$roomsList = array();
		$roomsList = Rooms::getRoomsList();

		require_once(ROOT . '/views/rooms/index.php');

		return true;
	}

	public function actionView($id)
	{
		if ($id) {
			$roomsItem = Rooms::getRoomsItemByID($id);
			$sensorsInRoomList = array();
			$sensorsInRoomList = Rooms::getSensorInRoomList($id);				

			require_once(ROOT . '/views/rooms/view.php');

/*			echo 'actionView'; */
		}

		return true;

	}

}

