@extends('layout')
@section('content')
<div class ="container"><h2>Registrasi</h2>
{{Form::open(array('action'=>'BuatController@prosesInput'))}}
{{Form::label('firstname','First Name')}}
{{Form::text('firstname','',array('class' => 'form-control'))}}
{{Form::close()}}</div> @stop
