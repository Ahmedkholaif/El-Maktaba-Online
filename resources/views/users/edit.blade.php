<button 
   type="button" 
   class="btn btn-primary " 
   data-toggle="modal" 
   data-target="#EditModal-{{$user->id}}">
  Edit
</button>
<div class="modal fade" id="EditModal-{{$user->id}}" 
     tabindex="-1" role="dialog" 
     aria-labelledby="EditModalLabel-{{$user->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{-- <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">The Sun Also Rises</h4>
      </div>
      <div class="modal-body">
        <p>
        Please confirm you would like to add 
        <b><span id="fav-title">The Sun Also Rises</span></b> 
        to your favorites list.
        </p> --}}
        <div class="card">
          <div class="card-header"> Edit User </div>

        
          <div class="card-body">
              <form method="POST" action="{{ route('users.update',['user'=>$user]) }}">
                  @csrf
                  @method('put')
                  
                  <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                      <div class="col-md-6">
                          <input  type="text"
                          
                          class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" 
                          value="{{ old('name' , $user->name) }}" required autofocus>

                          @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User name') }}</label>

                      <div class="col-md-6">
                          <input  
                          type="text" class="form-control{{ $errors->has('user_name') ? ' is-invalid' : '' }}" 
                          name="user_name" value="{{ old('user_name',$user->user_name) }}" required autofocus>

                          @if ($errors->has('user_name'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('user_name') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="national_id" class="col-md-4 col-form-label text-md-right">{{ __('National ID') }}</label>

                      <div class="col-md-6">
                          <input  type="text" 
                          class="form-control{{ $errors->has('national_id') ? ' is-invalid' : '' }}" 
                          name="national_id" value="{{ old('national_id',$user->national_id) }}" required autofocus>

                          @if ($errors->has('national_id'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('national_id') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                      <div class="col-md-6">
                          <input  type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" 
                          name="phone" value="{{ old('phone',$user->phone) }}" required autofocus>

                          @if ($errors->has('phone'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('phone') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                      <div class="col-md-6">
                          <input  type="email"
                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" 
                           value="{{ old('email',$user->email) }}" required>

                          @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group row">
                        <label for="is_admin" class="col-md-4 col-form-label text-md-right">{{ __('Admin') }}</label>
  
                        <div class="col-md-6">
                            <input  type="checkbox" name="is_admin" {{$user->is_admin == 1 ? 'checked' : '' }} >
                            
                        </div>
                        <label for="is_active" class="col-md-4 col-form-label text-md-right">{{ __('Active') }}</label>
  
                        <div class="col-md-6">
                            
                            <input  type="checkbox" name="is_active" {{$user->is_active == 1 ? 'checked' : '' }} >
                            
                        </div>
                    </div>
{{-- 
                  <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" >

                          @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                      <div class="col-md-6">
                          <input id="password-confirm" type="password" class="form-control" 
                          name="password_confirmation">
                      </div>
                  </div> --}}

                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-4">
                            <button type="button" 
                            class="btn btn-default" 
                            data-dismiss="modal">Close</button>
                            <span class="pull-right">
                            <button type="submit" type="button" class="btn btn-primary">
                                Edit User
                            </button>
                            </span>  
                        
                        {{-- <button  class="btn btn-primary">
                              {{ __('Register') }}
                          </button> --}}
                      </div>
                  </div>
              </form>
          </div>
      </div>

      </div>
    </div>
  </div>
</div>