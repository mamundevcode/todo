<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My ToDo App</title>
    <link rel="stylesheet" href="{{asset('contents/admin')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/css/style.css">
  </head>
  <body>
    <header>
  
    </header>
    <section>
        <div class="container-fluid content_part">
            <div class="row">
                <div class="col-md-2 sidebar_part">
                   
                    <div class="menu">
                        <ul>
                            <li><a href="{{url('dashboard')}}"><i class="fas fa-home"></i>Home</a></li>
                            <li><a href="{{url('dashboard/todo')}}"><i class="fas fa-solid fa-child"></i>MY Todo</a></li>
                            <li><a href="{{url('dashboard/user')}}"><i class="fas fa-user-circle"></i>Todo User</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> Logout</a>
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 content">
                    <div class="row">
                        <div class="col-md-12 breadcumb_part"> 
                        </div>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid footer_part">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10 copyright">
                    <p>Copyright &copy; 2024 | All rights reserved by Dashboard</p>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </footer>
    <script src="{{asset('contents/admin')}}/js/bootstrap.bundle.min.{{asset('contents/admin')}}/js"></script>
    <script src="{{asset('contents/admin')}}/js/custom.{{asset('contents/admin')}}/js"></script>
  </body>
</html>