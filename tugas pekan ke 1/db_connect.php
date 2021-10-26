<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "database_user";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}


	function register($username,$password,$nama,$kelas,$nis,$nisn,$jeniskelamin,$tanggallahir,$alamat)
	{	
		$insert = mysqli_query($this->koneksi,"insert into tb_user values ('','$username','$password','$nama','$kelas','$nis','$nisn','$jeniskelamin','$tanggallahir','$alamat')");
		return $insert;
	}

	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['kelas'] = $data_user['kelas'];
			$_SESSION['nis'] = $data_user['nis'];
			$_SESSION['nisn'] = $data_user['nisn'];
			$_SESSION['jeniskelamin'] = $data_user['jeniskelamin'];
			$_SESSION['tanggallahir'] = $data_user['tanggallahir'];
			$_SESSION['alamat'] = $data_user['alamat'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}

} 


?>