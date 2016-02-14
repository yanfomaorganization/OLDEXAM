@extends('layouts.layout')

@section('box')
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

@endsection
