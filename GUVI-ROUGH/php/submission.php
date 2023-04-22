<!-- <?php -->
 
	/*
	* Write your logic to manage the data
	* like storing data in database
	*/

	// class MyDB extends SQLite3 {
	// 	function __construct() {
	// 	   $this->open('guvidb.sqlite3');
	// 	}
	// }
	 
	// $db = new MyDB();
	// if(!$db){
	// 	echo $db->lastErrorMsg();
	// } else {
	// 	echo "Opened database successfully\n";
	// }

	// $email = $_REQUEST['email'];
	// $password = $_REQUEST['password'];

	// $sql=<<<EOF
	//   INSERT INTO user (email, password) VALUES ($email, $password);
	// EOF;

	// $ret = $db->exec($sql);
    // if(!$ret) {
    //   echo $db->lastErrorMsg();
    // } else {
    //   	echo "Records created successfully\n";
	// 	$data['email'] = $_REQUEST['email'];
	// 	$data['password'] = $_REQUEST['password'];
	// 	echo json_encode($data);
    // }
    // $db->close();

<?php	 
	// POST Data
	$data['email'] = $_REQUEST['email'];
	$data['password'] = $_REQUEST['password'];
	echo json_encode($data);
	exit;
 
?>