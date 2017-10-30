<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

  </head>

<body class="fixed-nav" id="page-top">
    <div id="app">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

            <a class="navbar-brand" href="{{ url('/dashboard') }}">Cms News Feed</a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav">

                    <li class="nav-item {{ (Request::is('dashboard') ? 'active' : '') }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="{{url('/dashboard')}}">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item {{ (Request::is('media') ? 'active' : '') }}" data-toggle="tooltip" data-placement="right" title="Media">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMedia">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                            <span class="nav-link-text">Media</span>
                        </a>
                        
                        <ul class="sidenav-second-level collapse" id="collapseMedia">
                            <li>
                                <a href="{{url('/media')}}">Biblioteka</a>
                            </li>
                            <li>
                                <a href="{{url('/media/create')}}">Dodaj nowe</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {{ (Request::is('match') ? 'active' : '') }}" data-toggle="tooltip" data-placement="right" title="Mecze piłkarskie">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMatch">
                            <i class="fa fa-futbol-o" aria-hidden="true"></i>
                            <span class="nav-link-text">Mecze piłkarskie</span>
                        </a>
                        
                        <ul class="sidenav-second-level collapse" id="collapseMatch">
                            <li>
                                <a href="{{url('/match')}}">Mecze</a>
                            </li>
                            <li>
                                <a href="{{url('/match/create')}}">Dodaj nowy</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {{ (Request::is('posts') ? 'active' : '') }}" data-toggle="tooltip" data-placement="right" title="Wpisy">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseWpisy">
                            <i class="fa fa-folder-open" aria-hidden="true"></i>
                            <span class="nav-link-text">Wpisy</span>
                        </a>
                        
                        <ul class="sidenav-second-level collapse" id="collapseWpisy">
                            <li>
                                <a href="{{url('/posts')}}">Wszystkie wpisy</a>
                            </li>
                            <li>
                                <a href="{{url('/posts/create')}}">Dodaj nowy</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {{ (Request::is('categories') ? 'active' : '') }}" data-toggle="tooltip" data-placement="right" title="Kategorie">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseKategorie">
                            <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                            <span class="nav-link-text">Kategorie</span>
                        </a>
                        
                        <ul class="sidenav-second-level collapse" id="collapseKategorie">
                            <li>
                                <a href="{{url('/categories')}}">Wszystkie kategorie</a>
                            </li>
                            <li>
                                <a href="{{url('/categories/create')}}">Dodaj nową</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {{ (Request::is('top-five') ? 'active' : '') }}" data-toggle="tooltip" data-placement="right" title="Top 5">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseTop5">
                            <i class="fa fa-child" aria-hidden="true"></i>
                            <span class="nav-link-text">Top 5</span>
                        </a>
                        
                        <ul class="sidenav-second-level collapse" id="collapseTop5">
                            <li>
                                <a href="{{url('/top-five')}}">Top 5 zawodnicy</a>
                            </li>
                            <li>
                                <a href="{{url('/top-five/create')}}">Dodaj nowego</a>
                            </li>
                        </ul>
                    </li>

                    @if ( Auth::check() && is_admin())
                        <li class="nav-item {{ (Request::is('social') ? 'active' : '') }}" data-toggle="tooltip" data-placement="right" title="Social">
                            <a class="nav-link" href="{{url('/social/1/edit')}}">
                                <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                <span class="nav-link-text">Social</span>
                            </a>
                        </li>
                    @endif

                    @if ( Auth::check() && is_admin())
                        <li class="nav-item {{ (Request::is('get-newsletter') ? 'active' : '') }}" data-toggle="tooltip" data-placement="right" title="Newsletter">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNewsletter">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span class="nav-link-text">Newsletter</span>
                            </a>
                            
                            <ul class="sidenav-second-level collapse" id="collapseNewsletter">
                                <li>
                                    <a href="{{url('/get-newsletter')}}">Zapisani subskrybenci</a>
                                </li>
                                <li>
                                    <a href="{{url('/get-newsletter/viewsend')}}">Wyślij wiadomość</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    @if ( Auth::check() && is_admin())
                        <li class="nav-item {{ (Request::is('users') ? 'active' : '') }}" data-toggle="tooltip" data-placement="right" title="Użytkownicy">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUzytkownicy">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="nav-link-text">Użytkownicy</span>
                            </a>
                            
                            <ul class="sidenav-second-level collapse" id="collapseUzytkownicy">
                                <li>
                                    <a href="{{url('users')}}">Wszyscy użytkownicy</a>
                                </li>
                                <li>
                                    <a href="{{url('users/add')}}">Dodaj nowego</a>
                                </li>
                            </ul>
                        </li>
                    @endif

                    {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                        <a class="nav-link" href="#">
                            <i class="fa fa-fw fa-area-chart"></i>
                            <span class="nav-link-text">Charts</span>
                        </a>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                        <a class="nav-link" href="#">
                            <i class="fa fa-fw fa-table"></i>
                            <span class="nav-link-text">Tables</span>
                        </a>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">Components</span>
                        </a>
                        
                        <ul class="sidenav-second-level collapse" id="collapseComponents">
                            <li>
                                <a href="#">Static Navigation</a>
                            </li>
                            <li>
                                <a href="#">Custom Card Examples</a>
                            </li>
                            <li>
                                <a href="#">Blank Page</a>
                            </li>
                            <li>
                                <a href="#">Login Page</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti">
                            <i class="fa fa-fw fa-sitemap"></i>
                            <span class="nav-link-text">Menu Levels</span>
                        </a> 

                        <ul class="sidenav-second-level collapse" id="collapseMulti">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                                <ul class="sidenav-third-level collapse" id="collapseMulti2">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}

                </ul>

                <ul class="navbar-nav sidenav-toggler">

                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>

                </ul>

                <ul class="navbar-nav ml-auto">

                    {{-- <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-envelope"></i>
                            <span class="d-lg-none">Messages
                                <span class="badge badge-pill badge-primary">12 New</span>
                            </span>
                            <span class="new-indicator text-primary d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                                <span class="number">12</span>
                            </span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">New Messages:</h6>
                            
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">
                                <strong>David Miller</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">
                                    Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">
                                <strong>Jane Smith</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">
                                    I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">
                                <strong>John Doe</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">
                                    I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item small" href="#">
                                View all messages
                            </a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Alerts
                                <span class="badge badge-pill badge-warning">6 New</span>
                            </span>
                            <span class="new-indicator text-warning d-none d-lg-block">
                                <i class="fa fa-fw fa-circle"></i>
                                <span class="number">6</span>
                            </span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">New Alerts:</h6>

                            <div class="dropdown-divider"></div>
                    
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up"></i>
                                        Status Update
                                    </strong>
                                </span>

                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">
                                <span class="text-danger">
                                    <strong>
                                        <i class="fa fa-long-arrow-down"></i>
                                        Status Update
                                    </strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">
                                    This is an automated server response message. All systems are online.
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up"></i>
                                        Status Update
                                    </strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">
                                    This is an automated server response message. All systems are online.
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item small" href="#">
                                View all alerts
                            </a>
                        </div>
                    </li> --}}


                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="{{ url('/') }}">
                            <i class="fa fa-tv" aria-hidden="true"></i>
                            Przejdź do strony
                        </a>
                    </li>

                    @if ( Auth::check() && is_admin() )
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/settings/1') }}">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                                Ustawienia
                            </a>
                        </li>
                    @endif

                    @if (Auth::check() && Auth::user()->role->type === 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                Witaj Super Admin
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            
                        </li>
                    
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                Wyloguj się {{ Auth::user()->name }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            
                        </li>
                    @endif

                </ul>
            </div>
        </nav>

    @yield('content')

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    
    {{-- clipboard --}}
    <script src="{{ asset('js/clipboard.min.js') }}"></script>
    <script>
        var clipboard = new Clipboard('.btn');
    </script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable( {
                "sorting": false,
                "lengthMenu": [ 25, 50 ],
                "language": {
                    "search": "Szukaj:"
                }
            } );
        } );
    </script>

    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
          selector: 'textarea',
          height: 500,
          menubar: false,
          plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
          ],
          toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
          content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
        });
    </script>

    <script src="{{ asset('js/sb-admin.min.js') }}"></script>

    <script>
        $(".alert-message").fadeIn(200).delay(1500).fadeOut(1000);
    </script>

    <script>
        var expanded = false;

        function showCheckboxes() {
          var checkboxes = document.getElementById("checkboxes");
          if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
          } else {
            checkboxes.style.display = "none";
            expanded = false;
          }
        }
    </script>

  </body>

</html>