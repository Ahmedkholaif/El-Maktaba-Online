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
            <th scope="col">Status</th>
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
        <td><p>  {{$user->is_admin == 1 ? 'Admin' : '-' }} </p> </td>
        <td><p> {{$user->is_active == 1 ? 'Active' : 'InActive' }} </p> </td>
        <td class="flex flex-row" style="display:flex;flex-direction:row" >
            {{-- @can('update',$user ) --}}
            {{-- @include('users.edit',['user'=>$user]) --}}
            @component('users.edit',['user'=>$user])

              {{-- @slot(['user'=>$user]) --}}
            @endcomponent
            {{-- {{$user->is_admin}} {{$user->is_active}} --}}
            {{-- <a href="{{ route('users.edit',['user'=> $user]) }}"><button class='btn btn-warning'> Edit </button> </a> --}}
           {{-- @endcan --}}
           <button 
            type="button" 
            class="btn btn-danger " 
            data-toggle="modal" 
            data-target="#DeleteModal">
            Delete
          </button>
          <div class="modal fade" id="DeleteModal" 
            tabindex="-1" role="dialog" 
            aria-labelledby="EditModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">

            <form id='del_form{{$user->id}}' style="display:inline" action='{{route('users.destroy',['user'=> $user])}}' method='POST'>
              @csrf
              @method('delete')
              {{-- <input type='Submit' class='btn btn-danger' value= 'Delete' />  --}}
            
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                      <button type="button" 
                      class="btn btn-default" 
                      data-dismiss="modal">Cancel</button>
                      <span class="pull-right">
                      <button type="submit" type="button" class="btn btn-danger">
                          Delete User
                      </button>
                      </span>  
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<div class="modal-footer">
  
</div>
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