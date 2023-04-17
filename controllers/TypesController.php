<?php
echo "string";
include_once ROOT. '/models/Types.php';

class TypesController {

	public function actionIndex()
	{

		$typesList = array();
		$typesList = Types::getTypesList();
		
		require_once(ROOT . '/views/types/index.php');
		return true;
	}

	public function actionView($id)
	{
		if ($id) {
			$typesItem = Types::getTypesItemByID($id);

			require_once(ROOT . '/views/types/view.php');
		}
		return true;

	}

}