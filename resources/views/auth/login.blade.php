{{-- @extends('welcome')

@section('login') --}}
{{-- @section('content')  --}}
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-6 mt-5">
            <div style="opacity:.8" class="card  bg-light content-center  mt-5">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                <h3 class="text-center mt-2"> Welcome To The Library</h3>
                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="login" type="text" class="text-center form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" 
                                name="login" value="{{ old('login','') }}" 
                                placeholder="E-Mail Or User Name"
                                required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" 
                                class="text-center form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                placeholder="Password"
                                name="password" required>

                                @if ($errors->has('password'))
                                    <span class="alert-danger alert text-center" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            
                          

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" 
                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        @if ($errors->has('user_name') )
                        <div class=" alert-danger col-12 text-center alert" role="alert">
                            <strong>{{ $errors->first('user_name') }}</strong>
                        </div>
                        @endif
                        <hr/>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
