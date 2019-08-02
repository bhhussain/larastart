@extends('layouts.app')

@section('content')
<div class="container">
<h2> Add New Book</h2>

{!! Form::open(['method' => 'POST', 'route' => 'book.store'])!!}
<div Class="form-group">
{!! Form::text('name',null,['class' =>'form-control','placeholder' => 'Please Enter The Book Name'])!!}
</div>

<div Class="form-group">
{!! Form::textarea('description',null,['class' =>'form-control','placeholder' => 'Please Enter The Book Description'])!!}
</div>

<div Class="form-group">
<input type="submit" class="btn btn-primary" value = "Add">
</div>
{{Form::close()}}

</div>

@endsection