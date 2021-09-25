@extends('layout')
@section('content')

<p class="fs-5 fw-bold text-start">Listado Area</p>
<div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2">
        <a href="{{route('areas.form')}}" class="btn btn-primary">Nueva Area</a>
    </div>
</div>
@if(Session::has('message'))
<p class="alert alert-success">
    {{Session::get('message')}}
</p>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>            
        </tr>
    </thead>
   <tbody>
       @foreach($areas as $area)
       <tr>
           <td>{{$area->ID}}</td>
           <td>{{$area->name}}</td> 
           <td>
           <a href="{{route('areas.form',['id'=>$area->id])}}" class="btn btn-warning">Editar</a>
               <a href="{{route('areas.delete', ['id'=>$area->id])}}" class="btn btn-danger">Borrar</a>
           </td>
       </tr>
   
           @endforeach
   </tbody> 

</table>
@endsection