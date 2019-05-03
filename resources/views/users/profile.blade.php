{{-- <head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homePage.css') }}" >    
</head> --}}
{{-- <body class="profile-page"> --}}
@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('{{ asset('images/userbg.jpg') }}');"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                       <div class="profile">
                            {{-- <div class="avatar">
                                <img src='{{ asset("images/user.jpg") }}' alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div> --}}
                            @component('users.profile_edit',['user'=>$user])

                            {{-- @slot(['user'=>$user]) --}}
                            @endcomponent
                            @include('components.messages')

                            {{-- @component('components.messages') --}}

                            {{-- <ul class="list-group">
                                <li class='list-group-item'>   <h1 class="title">{{$users->user_name}}</h1>  </li>
                                <li class='list-group-item'> <h4 class="userinfo"> National ID: {{$users->national_id}}</h4>  </li>
                                <li class='list-group-item'> <h4 class="userinfo padding10">Phone: {{$users->phone}}</h4> </li>
                                <li class='list-group-item'>  </li>
                                <li class='list-group-item'>  </li>
                               
                                
                                 
                            </ul> --}}

                            <div class="card">
                                    <div class="card-header"> Edit User </div>
                          
                                  
                                    <div class="card-body">
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                                <div class="col-md-6">
                                                    <h2>{{$user->name}}</h2>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User name') }}</label>
                                                <div class="col-md-6">
                                                        <h2>{{$user->user_name}}</h2>
                                                    </div>
                                            </div>
                          
                                            <div class="form-group row">
                                                <label for="national_id" class="col-md-4 col-form-label text-md-right">{{ __('National ID') }}</label>
                                                <div class="col-md-6">
                                                        <h2>{{$user->national_id}}</h2>
                                                    </div>
                                            </div>
                          
                                            <div class="form-group row">
                                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                                                <div class="col-md-6">
                                                        <h2>{{$user->phone}}</h2>
                                                    </div>
                                            </div>
                          
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                                <div class="col-md-6">
                                                        <h2>{{$user->email}}</h2>
                                                    </div>
                                            </div>
                                            
                          {{-- 
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                          
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                     name="password" >
                          
                                                    
                                                </div>
                                            </div>
                          
                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                          
                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" 
                                                    name="password_confirmation">
                                                </div>
                                            </div> --}}
                          
                                    </div>
                                </div>
                          
                                </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    </div>
{{-- </body> --}}

@endsection