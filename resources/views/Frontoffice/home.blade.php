@extends('Frontoffice.my')

@section('content')
<br><br>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top container">
    <a class="navbar-brand" href="#">Centrale Risque Sectorielle</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#1">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#2">Tarifs</a>
        </li>
      </ul>
      <span class="navbar-text">
        <button type="button" onclick="myMoon()"  class="btn " >
          <i class="fa fa-moon"  style="font-size:22px;color:grey"></i>
        </button>
        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
          <i class="fa fa-user" style="font-size:22px;color:grey"></i>
        </button>
      

{{--   
       <button>register</button> --}}

      </span>
    </div>
  </nav>

<div class="bd-example " >
  <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner  ">
      <div class="carousel-item active" style="max-height: 550px">
        <img src={{asset('img/slide2.jpg')}}  class="d-block w-100" alt="...">
        <div  class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div >
      </div>
      <div class="carousel-item" style="max-height: 550px">
        <img src={{asset('img/slide4.jpg')}}   class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item" style="max-height: 550px">
        <img src={{asset('img/slide5.jpg')}}  class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div >
</div >
<br id="1"><br>
<h1 class="text-center" id="textmoon"> {{Auth::user()}} Nos Services</h1>
<br>
<div  class="container">
<div class="card-group">
    <div class="card text-center">
     
      <div class="card-body">
        <div style="height: 20px"></div>
        <i class="fa fa-calculator" style="font-size:62px;color:skyblue"></i>
        <div style="height: 20px"></div>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
<div class="" style="height: 20px"></div>
      </div>
    </div>
    <div class="card text-center">
     
      <div class="card-body">
        <div style="height: 20px"></div>
        <i class="fa fa-calculator" style="font-size:62px;color:skyblue"></i>
        <div style="height: 20px"></div>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
<div class="" style="height: 20px"></div>
      </div>
    </div>
    <div class="card text-center">
     
      <div class="card-body">
        <div style="height: 20px"></div>
        <i class="fa fa-calculator" style="font-size:62px;color:skyblue"></i>
        <div style="height: 20px"></div>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
<div class="" style="height: 20px"></div>
      </div>
    </div>
  </div>
  <div class="card-group">
    <div class="card text-center">
     
      <div class="card-body">
        <div style="height: 20px"></div>
        <i class="fa fa-calculator" style="font-size:62px;color:skyblue"></i>
        <div style="height: 20px"></div>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
<div class="" style="height: 20px"></div>
      </div>
    </div>
    <div class="card text-center">
     
      <div class="card-body">
        <div style="height: 20px"></div>
        <i class="fa fa-calculator" style="font-size:62px;color:skyblue"></i>
        <div style="height: 20px"></div>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
<div class="" style="height: 20px"></div>
      </div>
    </div>
    <div class="card text-center">
     
      <div class="card-body">
        <div style="height: 20px"></div>
        <i class="fa fa-calculator" style="font-size:62px;color:skyblue"></i>
        <div style="height: 20px"></div>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
<div class="" style="height: 20px"></div>
      </div>
    </div>
  </div>
  <br id="2"><br>
  <h1 class="text-center" id="textmoon2"> Nos Tarifs</h1>
  <br><br>
  <div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Free</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>10 users included</li>
            <li>2 GB of storage</li>
            <li>Email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Pro</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Enterprise</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>30 users included</li>
            <li>15 GB of storage</li>
            <li>Phone and email support</li>
            <li>Help center access</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
        </div>
      </div>
    </div>

  
  </div>
  <hr>

</div>
<div class="">
  <h1 class="text-center" id="textmoon3"> Nos Sponsors</h1>
  <br><br><br>
  <div class="container ml-5">
  <div class="row">
    <div class="col">
      <img src="https://scontent.fnbe1-2.fna.fbcdn.net/v/t1.15752-9/175327579_744639232890180_914275421797066431_n.png?_nc_cat=104&ccb=1-3&_nc_sid=58c789&efg=eyJpIjoidCJ9&_nc_ohc=I2hSOK9_kbgAX_BGzQO&_nc_ht=scontent.fnbe1-2.fna&oh=373c0e6c14be6d829021bc214edc31f0&oe=60ACAEAA" width="170px" alt="">
    </div>
    <div class="col">
      <img src="https://scontent.fnbe1-2.fna.fbcdn.net/v/t1.15752-9/175327579_744639232890180_914275421797066431_n.png?_nc_cat=104&ccb=1-3&_nc_sid=58c789&efg=eyJpIjoidCJ9&_nc_ohc=I2hSOK9_kbgAX_BGzQO&_nc_ht=scontent.fnbe1-2.fna&oh=373c0e6c14be6d829021bc214edc31f0&oe=60ACAEAA" width="170px" alt="">

    </div>
    <div class="col">
      <img src="https://scontent.fnbe1-2.fna.fbcdn.net/v/t1.15752-9/175327579_744639232890180_914275421797066431_n.png?_nc_cat=104&ccb=1-3&_nc_sid=58c789&efg=eyJpIjoidCJ9&_nc_ohc=I2hSOK9_kbgAX_BGzQO&_nc_ht=scontent.fnbe1-2.fna&oh=373c0e6c14be6d829021bc214edc31f0&oe=60ACAEAA" width="170px" alt="">

    </div>
  </div>
</div>
</div>
</div>
</div>



<!-- Modal -->








<!--Modal: Login / Register Form-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->




            <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
              <div class="bg-white w-96 shadow-xl rounded p-5">
                <h1 class="text-3xl font-medium text-center">Login</h1>
                {{-- <p class="text-sm">Minimal login page for day to day use</p> --}}
                
                <form  action="{{route('handleClientLogin')}}" method="POST"  class="space-y-5 mt-5">
                  @csrf
                  <input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Email" />
                  <div class="w-full flex items-center border border-gray-800 rounded px-3">
                    <input name="password" type="password" class="w-4/5 h-12" placeholder="Password" />
                    {{-- <span class="text-blue-700 hover:bg-blue-400 rounded-md px-3">Show</span> --}}
                  </div>
            
                  {{-- <div class="">
                    <a href="#!" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Forgot Password ?</a>
                  </div> --}}
            
                  <input type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium" value="Login" >
                </form>
              </div>
            </div>
         <!-- This is an example component -->
 {{-- <div class="font-sans">
  <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
      <div class="relative sm:max-w-sm w-full">
          <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
          <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
          <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
              <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                  Login
              </label>
              <form method="#" action="#" class="mt-10">
                                 
                  <div>
                      <input type="email" placeholder="Correo electronico" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                  </div>
      
                  <div class="mt-7">                
                      <input type="password" placeholder="Contraseña" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                  </div>

                  <div class="mt-7 flex">
                      <label for="remember_me" class="inline-flex items-center w-full cursor-pointer">
                          <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                          <span class="ml-2 text-sm text-gray-600">
                              Recuerdame
                          </span>
                      </label>
      
                     <div class="w-full text-right">     
                          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">
                              ¿Olvidó su contraseña?
                          </a>                                  
                     </div>
                  </div>
      
                  <div class="mt-7">
                      <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                          Login
                      </button>
                  </div>
      
                  <div class="flex mt-7 items-center text-center">
                      <hr class="border-gray-300 border-1 w-full rounded-md">
                      <label class="block font-medium text-sm text-gray-600 w-full">
                          Accede con
                      </label>
                      <hr class="border-gray-300 border-1 w-full rounded-md">
                  </div>
      
                  <div class="flex mt-7 justify-center w-full">
                      <button class="mr-5 bg-blue-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                          
                          Facebook
                      </button>
      
                      <button class="bg-red-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                          
                          Google
                      </button>
                  </div>
      
                   <div class="mt-7">
                      <div class="flex justify-center items-center">
                          <label class="mr-2" >¿Eres nuevo?</label>
                          <a href="#" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                              Crea una cuenta
                          </a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  
</div> --}}
            <!--Footer-->
            {{-- <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div> --}}

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
           <!-- This is an example component -->

           <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
            <div class="bg-white w-96 shadow-xl rounded p-5">
              <h1 class="text-3xl font-medium text-center">Register</h1>
              {{-- <p class="text-sm">Minimal login page for day to day use</p> --}}
              
              <form action="{{route('handleClientRegister')}}" method="POST" class="space-y-5 mt-5">
                @csrf
                <input type="text" name="nom" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Nom" />
                <input type="text" name="prenom" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Prenom" />
                <input type="email" name="email" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Email" />
                {{-- <input type="date" name="" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="date de naissance" /> --}}
                <input type="number" name="cin" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="CIN" />
                <input type="number" name="num_telephone" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Numero Telephone" />
                {{-- <input type="text" name="" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Nom d'entreprise" /> --}}
                <div class="w-full flex items-center border border-gray-800 rounded px-3">
                  <input type="password" class="w-4/5 h-12" placeholder="Password" />
                  {{-- <span class="text-blue-700 hover:bg-blue-400 rounded-md px-3">Show</span> --}}
                </div>
          
                {{-- <div class="">
                  <a href="#!" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Forgot Password ?</a>
                </div> --}}
          
                <input type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium" value="Register">
              </form>
            </div>
          </div>
 {{-- <div class="font-sans">
  <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
      <div class="relative sm:max-w-sm w-full">
          <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
          <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
          <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
              <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                  Login
              </label>
              <form method="#" action="#" class="mt-10">
                                 
                  <div>
                      <input type="email" placeholder="Correo electronico" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                  </div>
      
                  <div class="mt-7">                
                      <input type="password" placeholder="Contraseña" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                           
                  </div>

                  <div class="mt-7 flex">
                      <label for="remember_me" class="inline-flex items-center w-full cursor-pointer">
                          <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                          <span class="ml-2 text-sm text-gray-600">
                              Recuerdame
                          </span>
                      </label>
      
                     <div class="w-full text-right">     
                          <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">
                              ¿Olvidó su contraseña?
                          </a>                                  
                     </div>
                  </div>
      
                  <div class="mt-7">
                      <button class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                          Login
                      </button>
                  </div>
      
                  <div class="flex mt-7 items-center text-center">
                      <hr class="border-gray-300 border-1 w-full rounded-md">
                      <label class="block font-medium text-sm text-gray-600 w-full">
                          Accede con
                      </label>
                      <hr class="border-gray-300 border-1 w-full rounded-md">
                  </div>
      
                  <div class="flex mt-7 justify-center w-full">
                      <button class="mr-5 bg-blue-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                          
                          Facebook
                      </button>
      
                      <button class="bg-red-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                          
                          Google
                      </button>
                  </div>
      
                   <div class="mt-7">
                      <div class="flex justify-center items-center">
                          <label class="mr-2" >¿Eres nuevo?</label>
                          <a href="#" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                              Crea una cuenta
                          </a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
  
</div> --}}
            <!--Footer-->
            {{-- <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div> --}}
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->








{{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="text-center">
            <div class="form-group row text-center"> --}}
              {{-- <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label> --}}
              {{-- <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
            </div>
            <div class="form-group row text-center"> --}}
              {{-- <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label> --}}
              {{-- <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
            
  
            <div class="form-group row text-center">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}

@endsection