@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">EDIT  </h4>

            <form method="post" action="{{ route('update.web') }}" enctype="multipart/form-data">
                @csrf

               <input type="hidden" name="id" value="{{  $web->id }}">

               <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">Product Category </label>
                 <div class="col-sm-10">
                     <input name="product_category" class="form-control" type="text" value="{{ $web->product_category }}" id="example-text-input">
   
                     @error('product_category')
                     <span class="text-danger"> {{ $message }} </span>
                     @enderror
                 </div>
             </div>
             <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input name="product_name" class="form-control" type="text" value="{{ $web->product_name }}" id="example-text-input">
                    @error('product_name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>
            <!-- end row -->




 

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Product Image </label>
                <div class="col-sm-10">
           <input name="product_image" class="form-control" type="file" id="image">
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
  <img id="showImage" class="rounded avatar-lg" src="{{ asset($web->product_image) }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update ">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection 