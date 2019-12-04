<!DOCTYPE html>
<html lang="en">

<head>
    @section('header')
    <link rel="stylesheet" href="{{ asset('css/main_layout.css') }}" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>The Fashion House - @yield('title')</title>
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="title.png">
    @show
</head>
<body style="background: url('main_bg.jpg') no-repeat center center fixed;
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!------------------------------------MENU BAR--------------------------->
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper"  style="background-color:#343957">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Menu</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar">
                            <a href="/home">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>

                        </li>
                        <li class="header-menu">
                            <span>View</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-shopping-bag"></i>
                                <span>Boutique</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="/boutique/add/purchase">Add Purchases</a>
                                    </li>
                                    <li>
                                        <a href="/boutique/view/purchase">View Purchases</a>
                                    </li>
                                    <li>
                                        <a href="/boutique/add/products">Add Products</a>
                                    </li>
                                    <li>
                                        <a href="/boutique/view/reports">Boutique Reports</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-dumbbell"></i>
                                <span>Gym</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="/gym/add/member">Add Member</a>
                                    </li>
                                    <li>
                                        <a href="/gym/view/member">View Member</a>
                                    </li>
                                    <li>
                                        <a href="/gym/view/reports">Gym Reports</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fas fa-hotel"></i>
                                <span>Parlor</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="/parlor/add/appointment">Add Apointment</a>
                                    </li>
                                    <li>
                                        <a href="/parlor/view/bookings">View Bookings</a>
                                    </li>
                                    <li>
                                        <a href="/parlor/view/reports">Parlor Reports</a>
                                    </li>
                                </ul>
                            </div>
                        <li class="header-menu">
                            <span>Extra</span>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-allergies"></i>
                                <span>Credits</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>

        </nav>
        <!-- sidebar-wrapper  -->




        <!----------------------------------MENU BAR ENDED----------------------------------------------->


        <!-----------------------MAIN PAGE CONTENT-->
        <main class="page-content">
            <div class="container-fluid">
                <h2>The Fashion House - @yield('page_description')</h2>
                <hr>
                @section('dashboard_content')

                @show
            </div>

        </main>

        <!------------Main Page-->
    </div>

    <!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>


<script type="text/javascript" src="{{ asset('js/main_layout.js') }}"></script>

@section('scriptFiles')

@show
</html>