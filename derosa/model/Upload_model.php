<?php 

class Upload_model
{
	
	public function insertImage($img, $name)
	{
		global $db;
		if (is_null($db)) {
			require('./config/db.php');
			$img = mysqli_real_escape_string($db, $img);
			$sql = 'insert into uploads values(null, "'.$img.'", "'.$name.'")';
			$res = $db->query($sql);
			return $res;

		}
	}
	public function listImg()
	{
		global $db;
		if (is_null($db)) {
			require('./config/db.php');
			$sql = 'select * from uploads';
			$res = $db->query($sql);
			return $res;

		}
	}
}
