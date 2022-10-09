@extends('admin.admin_master')
@section('admin')
 

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Register User </h4><br><br>
            

            @if(count($errors))
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger alert-dismissible fade show"> {{ $error}} </p>
                @endforeach

            @endif


            <form method="post" action="{{ route('register.user') }}" >
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input class="form-control" id="name" type="text" name="name" required="" placeholder="Name">
                </div>
            </div>
            <!-- end row -->


             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">UserName</label>
                <div class="col-sm-10">
                    <input class="form-control" id="username" type="text" name="username" required="" placeholder="UserName">
                </div>
            </div>
            <!-- end row -->

            
        
            <!-- end row -->
             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" id="email" type="email" name="email" required="" placeholder="Email">
                </div>
            </div>




             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input class="form-control" id="password" type="password" name="password" required="" placeholder="Password">
                </div>
            </div>



            <!-- end row -->
             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required="" placeholder="Password Confirmation">
                </div>
            </div>
            <!-- end row -->
 


        
<input type="submit" class="btn btn-info waves-effect waves-light" value="Register">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


 
@endsection 
