@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center"><h3>User Rgistration</h3></div>
                <div align="right">
                    <a href="{{ route('create') }}" class="btn btn-success btn-sm">Add</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-image text-center">
                            <thead>
                                <tr>
                                <th scope="col">Day</th>
                                <th scope="col">User Image</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registers as $register)
                                <tr>
                                    <th scope="row">{{ $register->id }}</th>
                                    <td class="w-25">
                                        <img src="{{ asset('uploads/register/' . $register->image) }}" class="img-fluid img-thumbnail" alt="Sheep">
                                    </td>
                                    <td>{{ $register->first_name }}</td>
                                    <td>{{ $register->last_name }}</td>
                                    <td>{{ $register->address }}</td>
                                    <td>{{ $register->phone }}</td>
                                    <td><a href="/showimage/{{ $register->id }}" class="btn btn-success">Show</a></td>
                                    <td><a href="/edit/{{ $register->id }}" class="btn btn-warning">Edit</a></td>
                                    <td><a href="/delete/{{ $register->id }}" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
