<!--A Design by W3layouts
Author: eliane
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "db.php";
$show = true;
$req="";
if(empty($_GET['Sn']))$_GET['Sn']=-11;
if(empty($_GET['level']))$_GET['level']="annee1";
if(isset($_SESSION['username'])){

    $employer = $_SESSION['username'];

    if (username_exists($employer)) {
           $show = true;
    }else{
        $show = false;
    }

}
if(isset($_POST['add'])){
  insert_cour($_POST['course'],$_POST['Sn']);
}
if($show==true){
  $req=" select * from course1";
  $query = $pdo->prepare($req);
  $query->execute();
  $course1 = $query->fetchAll(PDO::FETCH_ASSOC);

  $req=" select * from course2";
  $query = $pdo->prepare($req);
  $query->execute();
  $course2 = $query->fetchAll(PDO::FETCH_ASSOC);

  $req=" select * from course3";
  $query = $pdo->prepare($req);
  $query->execute();
  $course3 = $query->fetchAll(PDO::FETCH_ASSOC);

  $req=" select * from course4";
  $query = $pdo->prepare($req);
  $query->execute();
  $course4 = $query->fetchAll(PDO::FETCH_ASSOC);
  if(isset($_GET['level'])&&isset($_GET['Sn'])){
     $req=" select * from ";
     $req.=$_GET['level'].' ';
     $req.=" where course_id= ";
     $req.=$_GET['Sn'];
  $query = $pdo->prepare($req);
  $query->execute();
  $list = $query->fetchAll(PDO::FETCH_ASSOC);
  if($_GET['level']=="annee1"){
    $req=" select * from ";
     $req.="course1".' ';
     $req.=" where id= ";
     $req.=$_GET['Sn'];
  $query = $pdo->prepare($req);
  $query->execute();
  $list1 = $query->fetchAll(PDO::FETCH_ASSOC);
  }
  }
  if(isset($_POST['upload']) ){
  if(!empty($_POST['date']) &&!empty($_POST['prof']) &&!empty($_POST['exam'])
    &&!empty($_POST['file'])){
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";

 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$file','$file_type','$file_size')";
 mysql_query($sql);
   if( !upload_cour($_POST['date'],$_GET['Sn'],$_POST['prof'],$_POST['exam'],$_POST['photo'],$_GET['level']))
    $message="Nom d'utilisateur exist deja.";
  }
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>ancien sujet de l ufr svt et sea</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript" charset="utf-8"></script>

  <script src="jquery.modal.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" href="jquery.modal1.css" type="text/css" media="screen" />

  <script src="highlight/highlight.pack.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8"> hljs.initHighlightingOnLoad(); </script>
  <link rel="stylesheet" href="highlight/github.css" type="text/css" media="screen" />
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,700' rel='stylesheet' type='text/css'>


<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet">
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
</script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.php">Ancien sujet</a>
	    </div>
	    <!--/.navbar-header-->

	   <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		       <li class="dropdown">
		            <a href="https://www.facebook.com/Burkina-fasoAncien-sujet-examenTDdevoir-ufrsvtsea-1635108976753633/" target="_blank"><i class="fa fa-user"></i><span>facebook</span></a>
		        </li>




		     </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"action="annee1">1ere annee<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              <?php foreach ($course1 as $key => $value) {?>
                 <li><a href="index.php?<?php echo "level=annee1&Sn=$value[id]";?>"><?php echo $value['course'];?></a></li>

              <?php }?>


                 <li><a href="index.php?<?php echo "action=add&Sn=course1";?>">Ajouter un titre</a></li>        </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" action="annee2">2eme annee<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <?php foreach ($course2 as $key => $value) {?>
                 <li><a href="index.php?<?php echo "level=annee2&Sn=$value[id]";?>"><?php echo $value['course'];?></a></li>
              <?php }?>
                <li><a href="index.php?<?php echo "action=add&Sn=course2";?>">Ajouter un titre</a></li>

              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" action="annee3">3eme annee<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                 <?php foreach ($course3 as $key => $value) {?>
                 <li><a href="index.php?<?php echo "level=annee3&Sn=$value[id]";?>"><?php echo $value['course'];?></a></li>
              <?php }?>
                <li><a href="index.php?<?php echo "action=add&Sn=course3";?>">Ajouter un titre</a></li>

              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                 <?php foreach ($course4 as $key => $value) {?>
                 <li><a href="index.php?<?php echo "level=annee4&Sn=$value[id]";?>"><?php echo $value['course'];?></a></li>
              <?php }?>
                <li><a href="index.php?<?php echo "action=add&Sn=course4";?>">Ajouter un titre</a></li>

              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctorat<span class="caret"></span></a>
              <!--<ul class="dropdown-menu" role="menu">
                <li><a href="terms.html">Terms of use</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="faq.html">Faq</a></li>
              </ul>-->
            </li>
        </ul>
      </div><!-- /.navbar-collapse -->

   </div>

</nav>




<!-- banner -->
  <div class="courses_banner">

  	<div class="container">
  		<h3>Ancient Sujet</h3>
  		<p class="description">
            sur ce site vous pouvez retrouver les anciens sujet de tout les matieres de l'UFR SVT ET SEA que vous pouvez telecharger gratuitement
        </p>
        <div class="breadcrumb1">
            <ul>

            </ul>
        </div>
  	</div>
   </div>
    <!-- //banner -->
	<div class="courses_box1">
	   <div class="container">
	   	 <div id="ulpoad">
  <!--<a href="">telecharger</a>
<span>|</span>-->
<?php if($_GET['Sn']!=-11){?>
<a href="index.php?<?php echo "action=upload&Sn=$_GET[Sn]&level=$_GET[level]";?>">upload</a>

<?php }?>
<!--<a href="">telecharger zip archive</a>
<span>|</span>-->

  </div>

		<div class="col-md-9">

     <h2> <?php foreach ($list1 as $key => $value) { echo $value['course']; }?></h2>
    <div class="panel-body">
    <?php if(empty($_GET['action'])){?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Annee</th>
                                            <th>Nom du prof</th>
                                            <th>Type d'examen</th>
                                            <th>Nom du fichier</th>
                                             <th>DATE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($list as $key => $value) {?>
                                      <tr>
                                            <td><?php echo $value['annee'];?></td>
                                            <td><?php echo $value['prof'];?></td>
                                            <td><?php echo $value['examen'];?></td>

                                             <td><a href="download.php?filename=<?php echo $value['file'];?>"><?php echo $value['file'];?></a></td>
                                            <td><?php echo $value['date'];?></td>
                                        </tr>
                                   <?php }?>


                                    </tbody>
                                </table>
                            </div>
                            <?php }
  if(isset($_GET['action'])&&$_GET['action']=='upload'){?>
  <div class="col-md-6 admission_right">

              <form   action="upload.php" method="post" enctype="multipart/form-data">
               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="date" id="slider-name" placeholder="ANNEE ex:2014" type="text" required="">
               </div>
               <div class="input-group input-group1">
                  <input class="form-control has-dark-background" name="prof" id="slider-name" placeholder="Nom du professeur: " type="text" required="">
               </div>
               <div class="form-group col-md-12 form-group1">
                <label class="col-md-7 control-lable" for="sex">type d'examen:  </label>
                <div class="col-md-5">
                    <div class="radios">
                <label for="radio-01" class="label_radio">
                   <input type="radio" name="exam" value="exam" />exam
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio" name="exam" value="devoir" />devoir
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio" name="exam" value="TD" />TD
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio" name="exam" value="QUIZ" />QUIZ
                </label>
                  </div>
                </div>
                 <input class="form-control has-dark-background" name="Sn" id="slider-name" placeholder="nom du cour" type="hidden" value=<?php echO $_GET['Sn'];?>>

               <input class="form-control has-dark-background" name="level" id="slider-name" placeholder="nom du cour" type="hidden" value=<?php echO $_GET['level'];?>>


                <div class="form-field">
         <div class="col-md-7 photo"><label>fichier <em>*</em> :&nbsp;&nbsp;&nbsp;</label></div>
         <div class="col-md-5"><input type="file" name="files[]" multiple/></div>
         <div class="clearfix"> </div>
             </div>
                <div class="clearfix"> </div>
             </div>
              <input type="submit" value="submit" name="upload"class="course-submit">
             </form>
             <!-- Modal HTML embedded directly into document -->
  <?php }
if(isset($_GET['action'])&&$_GET['action']=='add'){?>
<form  method="POST" action="">
 <h3>ajouter</h3>
            <form  method="POST" action="" >
               <div class="input-group input-group1">

                <input class="form-control has-dark-background" name="course" id="slider-name" placeholder="nom du cour" type="text" required="" value="">
              <input class="form-control has-dark-background" name="Sn" id="slider-name" placeholder="nom du cour" type="hidden" value=<?php echO $_GET['Sn'];?>>


               </div>

              <input type="submit" value="submit" class="course-submit" name="add">
             </form>
  </div> <?php }?>
         </div>

       </div>

		    </div>

		    <div class="clearfix"> </div>
	   </div>
	</div>
    <div class="footer">
    	<div class="container">


    		<div class="clearfix"> </div>
    		<div class="copy">
		       <p>Copyright © 2015 ancient sujet. All Rights Reserved  | Design by <a href="" target="_blank">Holyngcom</a> </p>
	        </div>
    	</div>
    </div>
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
	$(function(){
	  SyntaxHighlighter.all();
	});
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
  </script>
<!-- FlexSlider -->
</body>
</html>	<?php //}
if($show==false){
 header('Location:login.php');
  } ?>
