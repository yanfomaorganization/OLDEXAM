<?php 

session_start();
$pdo = null;
function connectDb(){
  global $pdo;

  try {
      // $pdo = new PDO('mysql:host=localhost;dbname=examen', 'birba255S', 'usyviI0SHZA@');
	   $pdo = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
  } catch (PDOException $e) {
    die('MySQL connection failed! ' . $e->getMessage());
  }
}
connectDb();

function create_user($account, $password,$email) {
connectDb();
  # check if username is already exists
  if (username_exists($account))
    return false;
$password=md5($password);
  # add new user
  global $pdo;
  $stmt =$pdo->prepare('
    INSERT INTO user_table
    (username, password,email)
    values (:username, :password, :email)');

  $stmt->execute( array(
  ':username' => $account, 
  ':password' => $password,
  ':email' => $email,) );

  if ($pdo->lastInsertId()){
  
 header('Location:index.php');
    }
  else
   return false;
   
}

function username_exists($account){
	global $pdo;
	
	$stmt = $pdo->prepare("SELECT * FROM user_table WHERE username=:username");
	$stmt->execute(array(':username' => $account));
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	if(!empty($rows)){
		return true;
	}

	return false;
}

//$pdo = null;
 
//require "db.php";
//$option=array();
 function insert_cour($course,$database) {
global $pdo;
//connectDb();
  
	
$stmt =$pdo->prepare('
    INSERT INTO '. $database.'
    (course)
    values (:course)');
  $stmt->execute( array(
  ':course' => $course, 
  ) );

  if ($pdo->lastInsertId()){
  header('Location:index.php');
    //return true;
}
  else
    return false;
}
function upload_cour($annee,$id,$prof,$exam,$photo,$database) {
global $pdo;
//connectDb();
  
  
$stmt =$pdo->prepare('
    INSERT INTO '. $database.'
    (course_id,annee,prof,examen,)
    values (:course)');
  $stmt->execute( array(
  ':course' => $course, 
  ) );

  if ($pdo->lastInsertId()){
  header('courseLocation:index.php');
    //return true;
}
  else
    return false;
}


function login($account, $password){
  global $pdo;
  
  $stmt = $pdo->prepare('
    SELECT id, username
    FROM user_table
    WHERE username = :username AND password = :password
    LIMIT 1');

  $stmt->execute(array(':username' => $account, 'password' => md5($password)));

  if ($data = $stmt->fetch( PDO::FETCH_OBJ )) {
    # set session
    $_SESSION['username'] = $data->username;
    //return true;
    header('Location:index.php');
  } else {
    return false;
  }
}
?>