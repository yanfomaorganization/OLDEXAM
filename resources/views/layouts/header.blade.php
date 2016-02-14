<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Anciens Sujets</a>
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

                @foreach ($list1 as $cours)
                  <li><a href="#">{{$cours->cours}}</a></li>
                @endforeach



                 <li><a href="/cours1/create">Ajouter un cours</a></li>
               </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" action="annee2">2eme annee<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                 <li><a href="#"></a></li>
                <li><a href="#">Ajouter un cours</a></li>

              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" action="annee3">3eme annee<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

                 <li><a href="#"></a></li>

                <li><a href="#">Ajouter un cours</a></li>

              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

                 <li><a href="#"></a></li>

                <li><a href="#">Ajouter un cours</a></li>

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
