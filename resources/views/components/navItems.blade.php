@section('navItems')
<a class="navbar-brand" href="{{ url('/users') }}">
    Users
 </a>
 <a class="navbar-brand" href="{{ url('/books') }}">
     Books
 </a>
 <a class="navbar-brand" href="{{ url('/category') }}">
     Categories
 </a>
 <a class="navbar-brand" href="{{ url('/borrowed_books') }}">
    Books Stat
 </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
     <span class="navbar-toggler-icon"></span>
 </button>
@endsection

