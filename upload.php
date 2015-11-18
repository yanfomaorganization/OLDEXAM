<?php
$pdo = null;
function connectDb(){
  global $pdo;

  try {
    $pdo = new PDO('mysql:host=localhost;dbname=examen', 'root', '');
  } catch (PDOException $e) {
    die('MySQL connection failed! ' . $e->getMessage());
  }
}
connectDb();
if(isset($_FILES['files'])){
    $errors= array();
    $req="";
  $req=" select USER_ID from ";
     $req.=$_POST['level'].' ';
     $req.=" where course_id= ";
     $req.=$_POST['Sn'];
     $req.=" ORDER BY id DESC LIMIT 1";
  $query = $pdo->prepare($req);
  $query->execute();
  $list = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($list as $key => $value) {
   $user_id=$value['USER_ID'];  }
    $user_id+=1;
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['files']['name'][$key];
		//$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	

		
        /*if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
        }	*/
       
      $date= date("Y-m-d");
global $pdo;
  $stmt =$pdo->prepare('    
    INSERT INTO'.' '.$_POST['level']. ' 
    (course_id,annee,prof,examen,date,USER_ID, file, type,size)
    values (:course_id,:annee,:prof,:examen,:date,:USER_ID, :file, :type, :size)');

  $stmt->execute( array(
    ':course_id'=>$_POST['Sn'],
  ':annee'=>$_POST['date'],
  ':prof'=>$_POST['prof'],
  ':examen'=>$_POST['exam'],
  ':date'=>$date,
  ':USER_ID' => $user_id, 
  ':file' => $file_name,
  ':type' => $file_type,
  ':size' => $file_size,) );
		
         $desired_dir="user_data";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
		 //mysql_query($query);			
        }else{
                print_r($errors);
        }
    }
	/*if(empty($error)){
		echo "Success";
	}*/
  if ($pdo->lastInsertId() && empty($error)){
  
 header('Location:index.php?level='.$_POST['level'].'&Sn='.$_POST['Sn']);
    }
    else {?>
      <script>
    alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
<?php } 
}?>