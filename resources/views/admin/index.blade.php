@extends('layouts.app')

@section('content')
    <div class="container-fluid row container-fluid justify-content-center align-items-center" style="margin-top:50px;">
        <h1>Admin panel</h1>
    </div>
    <div class="container-fluid row container-fluid justify-content-center align-items-center" style="margin-top:50px;">
        
        <div class="col-lg-4 col-sm-8">
            <a href="/" style="width:100%" class="btn btn-primary">Users</a>
            <hr>
            <a href="/admin/adminCarModels" style="width:100%" class="btn btn-primary">Models</a>
            <hr>
            <a href="/" style="width:100%" class="btn btn-primary">Test Drives</a>

        </div>
    </div>
    <div style="height:300px"></div>
@endsection

