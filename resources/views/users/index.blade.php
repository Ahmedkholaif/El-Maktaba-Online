@extends('layouts.app')

@section('content')
<div class='container'>
<h2> Users </h2>
{{-- <a href="{{ url('/contacts/create') }}"><button class='btn btn-success'> Add Contact </button> </a> --}}

@include('components.messages')
@include('users.create')
<table class="table striped high-light centered">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">User Name</th>
            <th scope="col">Phone</th>
            <th scope="col">National ID</th>
            <th scope="col">Admin</th>
            <th scope="col">Active</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>

        <tbody>
    @foreach ($users as $user)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->user_name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->national_id}}</td>
        <td><input type="radio"  {{$user->is_admin == 1 ? 'checked' : '' }} /> </td>
        <td><input type="checkbox" checked {{$user->is_active == 1 ? 'checked' : '' }} /> </td>
        <td style="width:20%">
            {{-- @can('update',$user ) --}}
            {{-- <a href="{{ route('users.edit',['user'=> $user]) }}"><button class='btn btn-warning'> Edit </button> </a> --}}
           {{-- @endcan --}}
            <form style="display:inline" action='{{route('users.destroy',['user'=> $user])}}' method='POST'>
              @csrf
              @method('delete')
              {{-- <input type='Submit' class='btn btn-danger' href="{{ $url = route('users', ['user' => $loop->index ]) }}" value= 'Delete' />  --}}
            </form>
            {{-- <a href="{{ route('users.show',['user'=> $user]) }}"><button class='btn btn-info'> View </button> </a> --}}
            </td>
    </tr>
    @endforeach  
    
        </tbody>  
</table>
{{$users->links()}}
</div>
@endsection
@include('components.navItems')