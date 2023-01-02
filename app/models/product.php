<?php 

Class Product
{

	function get_all()
	{
		$query = "select * from products order by id desc";

		$DB = new Database();
		$data = $DB->read($query);
		if(is_array($data))
		{

			return $data;
		}

		return false;
	}
}

?>