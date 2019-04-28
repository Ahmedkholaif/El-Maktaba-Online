@section('navItems')
<a class="navbar-brand" href="{{ url('/home') }}">
    Home
 </a>
 <a class="navbar-brand" href="{{ url('/contacts') }}">
     Contacts
 </a>
 <a class="navbar-brand" href="{{ url('/posts') }}">
     Posts
 </a>
 <a class="navbar-brand" href="{{ url('/posts/create') }}">
    New Post
 </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
     <span class="navbar-toggler-icon"></span>
 </button>
@endsection

