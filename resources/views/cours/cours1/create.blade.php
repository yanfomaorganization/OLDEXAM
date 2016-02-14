@extends('layouts.layout')
@section('title', 'Ajouter Cours 1ere annee')

@section('box')
<div class="courses_box1">
  <div class="col-md-9">
      <div class="panel-body">
          <div class="col-md-6 admission_right">
            <h3>ajouter</h3>
            {!! Form::open(array('url' => '/cours1')) !!}
            <div class="input-group input-group1">
              <input class="form-control has-dark-background" name="course" id="slider-name" placeholder="nom du cour" type="text" required="" value="">
              <input class="form-control has-dark-background" name="Sn" id="slider-name" placeholder="nom du cour" type="hidden" value=''>
            </div>

            <input type="submit" value="submit" class="course-submit" name="add">
            {!! Form::close() !!}

          </div>
      </div>
    </div>
    <div class="clearfix"> </div>
</div>
@endsection
