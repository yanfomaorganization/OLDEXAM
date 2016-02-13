<!DOCTYPE html>
<html>
<head>
<title>Anciens sujets de l'URF SVT et SEA</title>
<meta name="viewport" content="width=320px, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{{ asset('/css/style.css') }}}" rel="stylesheet">
<link rel="stylesheet" href="{{{ asset('/css/jquery.countdown.css') }}}" />
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{{ asset('/css/jquery.modal1.css') }}}" type="text/css" media="screen" />
<link rel="stylesheet" href="{{{ asset('/css/github.css') }}}" type="text/css" media="screen" />
<link href="//fonts.googleapis.com/css?family=Roboto:300,700' rel='stylesheet" type='text/css'>
<link href="{{{ asset('/css/flexslider.css') }}}" rel='stylesheet' type='text/css' />
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
	        <a class="navbar-brand" href="#">Anciens Sujets</a>
	    </div>
  	  <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
  	        <ul class="nav navbar-nav">
  		       <li class="dropdown">
  		            <a href="https://www.facebook.com/Burkina-fasoAncien-sujet-examenTDdevoir-ufrsvtsea-1635108976753633/" target="_blank"><i class="fa fa-user"></i><span>facebook</span></a>
  		        </li>
  		     </ul>
  	  </div>
  	    <div class="clearfix"> </div>
  	  </div>
  </nav>


  <nav class="navbar nav_bottom" role="navigation">
   <div class="container">
      <div class="navbar-header nav_2">
        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
      </div>
      <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
          <ul class="nav navbar-nav nav_1">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"action="annee1">1ere annee<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">

                   <li><a href="#"></a></li>


                   <li><a href="#">Ajouter un titre</a></li></ul>
              </li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" action="annee2">2eme annee<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                   <li><a href="#"></a></li>
                  <li><a href="#">Ajouter un titre</a></li>

                </ul>
              </li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" action="annee3">3eme annee<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">

                   <li><a href="#"></a></li>

                  <li><a href="#">Ajouter un titre</a></li>

                </ul>
              </li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">

                   <li><a href="#"></a></li>

                  <li><a href="#">Ajouter un titre</a></li>

                </ul>
              </li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctorat<span class="caret"></span></a>

              </li>
          </ul>
        </div>

     </div>

  </nav>

  <div class="courses_banner">
  	<div class="container">
  		<h3>Anciens Sujets</h3>
  		<p class="description">
            Sur ce site vous pouvez retrouver les anciens sujets de toutes les matieres de l'UFR SVT ET SEA que vous pouvez telecharger gratuitement
        </p>
        <div class="breadcrumb1">
            <ul>

            </ul>
        </div>
  	</div>
   </div>
	<div class="courses_box1">
	   <div class="container">
	   	 <div id="ulpoad">

<a href="#">upload</a>
  </div>

		<div class="col-md-9">

     <h2> </h2>
    <div class="panel-body">

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
                    <tr></tr>
                  </tbody>
              </table>
          </div>

  <div class="col-md-6 admission_right">
    {!! Form::open(array('url' => '/upload', 'enctype' => 'multipart/form-data')) !!}
          <div class="input-group input-group1">
             {!! Form::text('date', null, array('class' => 'form-control has-dark-background', 'id' => 'slider-name', 'placeholder' => 'ANNEE ex:2014')) !!}
          </div>
          <div class="input-group input-group1">
            {!! Form::text('prof', null, array('class' => 'form-control has-dark-background', 'id' => 'slider-name', 'placeholder' => 'Nom du professeur')) !!}
          </div>
          <div class="form-group col-md-12 form-group1">
            {!! Form::label('sex', 'type d\'examen: ', array('class' => 'col-md-7 control-lable')) !!}
            <div class="col-md-5">
                <div class="radios">
                  {!! Form::macro('radios', function($for, $value){
                    $html = '<label for="';
                    $html .= $for;
                    $html .= '" class="label_radio">
                       <input type="radio" name="exam" value="';
                    $html .= $value;
                    $html .= '" />';
                    $html .= $value;
                    $html .= '</label>';
                    return $html;
                  }) !!}
                  {!! Form::radios('radio-01', 'exam') !!}
                  {!! Form::radios('radio-02', 'devoir') !!}
                  {!! Form::radios('radio-02', 'TD') !!}
                  {!! Form::radios('radio-02', 'QUIZ') !!}
                </div>
              </div>
              {!! Form::hidden('Sn', null, array('class' => 'form-control has-dark-background', 'id' => 'slider-name', 'placeholder' => 'nom du cour')) !!}
              {!! Form::hidden('level', null, array('class' => 'form-control has-dark-background', 'id' => 'slider-name', 'placeholder' => 'nom du cour')) !!}
              <div class="form-field">
                <div class="col-md-7 photo">
                  {!! Form::macro('fichier', function(){
                    return '<label>fichier <em>*</em> :&nbsp;&nbsp;&nbsp;
                    </label>';
                  }) !!}
                  {!! Form::fichier() !!}
                </div>
                <div class="col-md-5">
                  <input type="file" name="files[]" multiple/>
                </div>
                <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                 </div>
                  <input type="submit" value="submit" name="upload"class="course-submit" />
    {!! Form::close() !!}
    <h3>ajouter</h3>
    {!! Form::open(array('url' => 'foo/bar')) !!}
    <div class="input-group input-group1">

     <input class="form-control has-dark-background" name="course" id="slider-name" placeholder="nom du cour" type="text" required="" value="">
   <input class="form-control has-dark-background" name="Sn" id="slider-name" placeholder="nom du cour" type="hidden" value=''>


    </div>

   <input type="submit" value="submit" class="course-submit" name="add">
    {!! Form::close() !!}

  </div>
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

</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="application/x-javascript">
  addEventListener("load", function(){
    setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){
      window.scrollTo(0,1);
    }
</script>

<script src="{{{ asset('/js/jquery.modal.js') }}}" type="text/javascript" charset="utf-8"></script>
<script src="{{{ asset('/js/highlight.pack.js') }}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
  hljs.initHighlightingOnLoad();
</script>

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
<script defer src="{{{ asset('/js/jquery.flexslider.js') }}}"></script>
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
</html>
