@extends('layouts.nav')
@section('content')
<div class="profile-page">
	<div class="page-header header-filter" data-parallax="true" style="background-image:url('{{ asset('images/userbg.jpg') }}');"></div>
		<div class="main main-raised">
			<div class="profile-content">
				<div class="container">
					<div class="row">
						<div class="col-md-6 ml-auto mr-auto">
							<div class="profile">
								<div class="avatar">
									<img src='{{ asset("images/user.jpg") }}' alt="Circle Image" class="img-raised rounded-circle img-fluid">
								</div>
								<div class="name">
									
									<h1 class="title">{{$user->name}}</h1>
									<h2 class="title">{{$user->user_name}}</h2>
									<h4 class="userinfo"> National ID: {{$user->national_id}}</h4>
									<h4 class="userinfo padding10">Phone: {{$user->phone}}</h4>
									<h4 class="userinfo padding10">{{$user->email}}</h4>
									@component('users.profile_edit',['user'=>$user])
									@endcomponent
									@include('components.messages')
								
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection