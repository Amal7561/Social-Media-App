<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{asset ('css/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="search1 form-inline ml-md-5 my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <ul class="navbar-nav ml-auto">

                <li class="ml-3">
                
                    <img  src="img/profile/{{ Auth::user()->profilepic }}" height="40px" width="40px" style="border-radius: 50%;" alt="">
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
              </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a onclick="showHome()" class="dropdown-item" href="#">Home</a>
                        <a onclick="showFriends()" class="dropdown-item" href="#">Friends</a>
                        <div class="dropdown-divider"></div>
                        <a class="btn btn-default ml-1"style="width: 150px;"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <form class="search2 form-inline mr-5 my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
    </nav>

    <main>
        <section id="hero">
            <div class="container">
                <div class="row">
                    <!-- Left -->
                    <div class="col-lg-9 mt-4">
                        <div class="hero-main shadow">
                            <div class="hero-cover-img">
                                <img src="http://placehold.it/900x300" class="img-fluid" alt="img">
                                <img class="img-2" src="img/profile/{{ Auth::user()->profilepic }}" alt="">
                            </div>
                            <div class="hero-main-navbar">
                                <div class="row">
                                    <div class="menu-list">
                                        <ul>
                                            <li><a onclick="showHome()" href="#">Home</a></li>
                                            <li><a onclick="showFriends()" href="#">Friends</a></li>
                                            <li><a onclick="showRequest()" href="#">Requests</a></li>
                                            <li><a onclick="showEditProfile()" href="#">Edit Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-main-body d-flex justify-content-center">
                                <div class="row">
                                    <div id="home" class="home pl-5 pr-5">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <span>{{ Auth::user()->name }}</span><br>
                                                <span>{{ Auth::user()->email }}</span><br>
                                                <span>{{ Auth::user()->gender }}</span><br>
                                                <span class="d-none">{{ Auth::user()->id }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="friends" class="friends pl-5 pr-5">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <ul>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle" src="/img/pic.png" height="50px" alt=""> Bail K Raju</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><img class="rounded-circle" src="/img/pic.png" height="50px" alt=""> Toms</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="editprofile" class="edit-profile  pl-5 pr-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <form method="POST" action="/user-update" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleFormControlFile1">Upload Profie Picture</label>
                                                        <input type="file" class="form-control-file" name="pic" id="exampleFormControlFile1">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" id="username" name="username" class="form-control" placeholder="Your Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" id="email" name="email" class="form-control" placeholder="Your Email">
                                                    </div>

                                                    <fieldset class="form-group">
                                                        <div class="row">
                                                            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                                            <div class="col-sm-8 d-flex">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                                                    <label class="form-check-label" for="male">
                                                                Male
                                                              </label>
                                                                </div>
                                                                <div class="form-check pl-5">
                                                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                                                    <label class="form-check-label" for="femail">
                                                                Female
                                                              </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <div class="form-group">
                                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password"><br>
                                                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="request"  class="request pl-5 pr-5">
                                        <div class="card">
                                            <div class="card-body">                                                
                                                <form action="">
                                                    <div class="friends-lists mb-5">
                                                        <img class="rounded-circle" src="img/pic.png" height="50px" alt=""> Basil K Raju <br>
                                                        <div class="sub-btn float-right">
                                                            <!-- <a class="btn-confirm" href="#">Confirm</a> <a class="btn-reject" href="#">Reject</a> -->
                                                            <button class="btn-confirm">Confirm</button> <button class="btn-reject">Reject</button>
                                                        </div>
                                                    </div> 
                                                </form>   
                                                <form action="">
                                                    <div class="friends-requiest mb-5">
                                                        <img class="rounded-circle" src="img/pic.png" height="50px" alt=""> Toms <br>
                                                        <div class="sub-btn float-right">
                                                            <!-- <a class="btn-confirm" href="#">Confirm</a> <a class="btn-reject" href="#">Reject</a> -->
                                                            <button class="btn-confirm">Confirm</button> <button class="btn-reject">Reject</button>
                                                        </div>
                                                    </div> 
                                                </form>                                               
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right col-lg-3 mt-4 pl-2 shadow">
                        <div class="hero-right mt-3">
                            @foreach($users as $user)
                            <div class="friends-lists mb-5">
                                <img class="rounded-circle" src="img/profile/{{$user->profilepic}}" height="50px" width="50px" alt=""> {{$user->name}} <br>
                                <div class="sub-btn float-right">
                                    
                                    <a class="btn btn-confirm" href="/add/{{$user->id}}">Add</a>                                    
                                    <a class="btn btn-reject" href="/view/{{$user->id}}">Profile</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Custom js -->
    <script src="{{asset ('js/app.js') }}"></script>
</body>

</html>