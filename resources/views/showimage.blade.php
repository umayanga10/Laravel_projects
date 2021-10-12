@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <div align="right">
        <a href="{{ route('home') }}" class="btn btn-info">Back</a>
    </div>
    <br>
    <img src="{{ asset('uploads/register/' . $data->image) }}" width="500px;" height="250px;" class="img-thumbnail"/>
    <br><br>
    <h3>First Name - {{ $data->first_name }}</h3>
    <h3>Last Name - {{ $data->last_name }}</h3>
    <h3>Address - {{ $data->address }}</h3>
    <h3>Phone - {{ $data->phone }}</h3>
</div>
@endsection
