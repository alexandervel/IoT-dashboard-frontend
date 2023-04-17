<?php

include_once ROOT. '/models/Labs.php';

class LabsController {

	public function actionIndex()
	{
		
		$labsList = array();
		$labsList = Labs::getLabsList();

		require_once(ROOT . '/views/labs/index.php');

		return true;
	}

	public function actionView($id)
	{
		if ($id) {
			$labsItem = Labs::getLabsItemByID($id);
			$sensorsInLabsList = array();
			$sensorsInLabsList = Labs::getSensorInLabList($id);				

			require_once(ROOT . '/views/labs/view.php');

/*			echo 'actionView'; */
		}

		return true;

	}

}

