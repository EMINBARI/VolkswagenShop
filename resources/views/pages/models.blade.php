@extends('layouts.app')

@section('content')
    <div class="projects-clean">
      <div class="container" style="width:100%">

        <div class="row projects justify-content-center align-items-center" style="height:30px">
              
        </div>
        <div class="row projects justify-content-center align-items-center">
              <h2 class="text-center">Hatchback</h2>
        </div>

        <div class="row projects justify-content-center align-items-center">
            <div class="col-sm-6 col-lg-6 item">
                <img class="img-fluid" src="/images/models/golf.png"/>
                <h3 class="name">Volkswagen Golf</h3>
                <p class="description">20 000$</p>
            </div>
        </div>

        <hr>

        <div class="row projects justify-content-center align-items-center">
            <h2 class="text-center">Sedan</h2>
        </div>

        <div class="row projects justify-content-center align-items-center">
            <div class="col-sm-6 col-lg-4 item">
                <img class="img-fluid" src="/images/models/jetta.png" />
                <h3 class="name">Volkswagen Jetta</h3>
                <p class="description">22 000$</p>
            </div>
            <div class="col-sm-6 col-lg-4 item">
                <img class="img-fluid" src="/images/models/passat.png" />
                <h3 class="name">Volkswagen Passat</h3>
                <p class="description">25 000$</p>
            </div>
            <div class="col-sm-6 col-lg-4 item">
                <img class="img-fluid" src="/images/models/polo.png" />
                <h3 class="name">Volkswagen Polo</h3>
                <p class="description">40 000$</p>
            </div>
        </div>

        <hr>

        <div name="suv" class="row projects justify-content-center align-items-center">
            <h2 class="text-center">SUV</h2>
        </div>

        <div class="row projects justify-content-center align-items-center">
            <div class="col-sm-6 col-lg-4 item">
                <img class="img-fluid" src="/images/models/teramont.png" />
                <h3 class="name">Volkswagen Teramont</h3>

                <div class=" row container-fluid justify-content-center align-items-center">
                    <div class="col-lg-6 col-sm-12"><p class="description">30 000$</p></div>
                    <div class="col-lg-6 col-sm-12"><a href="/" class="btn btn-dark" style="width:100%">More</a></div>
                
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 item">
                <img class="img-fluid" src="/images/models/tiguan.png" />
                <h3 class="name">Volkswagen Tiguan</h3>
                <p class="description">25 000$</p>
            </div>
            <div class="col-sm-6 col-lg-4 item">
                <img class="img-fluid" src="/images/models/touareg.png" />
                <h3 class="name">Volkswagen Touareg</h3>
                <p class="description">30 000$</p>
            </div>
        </div>



      </div>
  </div>

@endsection