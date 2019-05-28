@extends('layouts.app')

@section('content')
    
    <h1>{{$title}}<h1>
    @include('inc.carousel')

    <div class="projects-clean">
      <div class="container">
          <div class="intro">
              <h2 class="text-center">Projects </h2>
              <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
          </div>
          <div class="row projects">
              <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="/images/1.jpg" />
                  <h3 class="name">Project Name</h3>
                  <p class="lead">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
              </div>
              <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="/images/2.jpg" />
                  <h3 class="name">Project Name</h3>
                  <p class="lead">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
              </div>
              <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="/images/3.jpg" />
                  <h3 class="name">Project Name</h3>
                  <p class="lead">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
              </div>
              <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="/images/4.jpg" />
                  <h3 class="name">Project Name</h3>
                  <p class="lead">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
              </div>
              <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="/images/4.jpg" />
                  <h3 class="name">Project Name</h3>
                  <p class="lead">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
              </div>
              <div class="col-sm-6 col-lg-4 item"><img class="img-fluid" src="/images/4.jpg" />
                  <h3 class="name">Project Name</h3>
                  <p class="lead">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p>
              </div>
          </div>
      </div>
  </div>

@endsection


