@extends('layouts.app')

@section('content')

<div class="container">
<h2>{{$book->name}}</h2>

<p>
{{$book->description}}
</p>

<h3>{{$book->created_at}}</h3>

</div>


@endsection