@extends('layouts.app')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="col-md-12">
      <div class="form-container">
                <div class="form-container-in">
        </div>
        <div class="log-container">
          <img id="logo" src="https://assets-cdn.github.com/images/modules/logos_page/GitHub-Logo.png" alt="">
          <div class="para">
            <p class="lead mg text-center">Update User Register</p>
          </div>
      </div>
        
        <div class="row">
            <div class="container">
            <div align="right">
                    <a href="{{ route('home') }}" class="btn btn-success btn-sm">Back</a>
                </div>
                <div class="col-md-10">
                        <form action="/update/{{ $data->id  }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input id="fname" name="fname" type="hidden" value="{{ $data->id }}" class="form-control">
                            <div class="form-group">
                                <label for="fname">First Name :</label>
                                <input id="fname" name="fname" type="text" value="{{ $data->first_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name :</label>
                                <input id="lname" name="lname" type="text" value="{{ $data->last_name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Address">Address :</label>
                                <input id="Address" name="address" type="text" value="{{ $data->address }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone No :</label>
                                <input id="phone" name="phone" type="text" value="{{ $data->phone }}" class="form-control">
                            </div>
                            <div class="w-25">
                                <label for="image">Image :</label>
                                <img src="{{ asset('uploads/register/' . $data->image) }}" class="img-fluid img-thumbnail" alt="Sheep">
                                <input id="image" name="image" type="file" value="{{ $data->image }}" class="form-control">
                            </div><br>
                            <div class="form-group">
                                <input type="submit" value="UPDATE" name="add" class="btn-primary btnn form-submit"></input>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
                
        </div>
    </div>

@endsection
