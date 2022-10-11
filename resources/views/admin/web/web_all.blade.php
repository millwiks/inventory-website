@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Store products</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('add.items') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add  </i></a> <br>  <br>  

                    <h4 class="card-title">All products </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Product Category</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Action</th>

                        </thead>


                        <tbody>
                        	@php($i = 1)
                        	@foreach($web as $item)
                        <tr>
                            <td> {{ $i++}} </td>
                            <td> {{ $item->product_category }} </td>
                            <td> {{ $item->product_name	 }} </td>
                            <td> <img src="{{ asset($item->product_image) }}" style="width: 60px; height: 50px;"> </td>

                            <td>
   <a href="{{ route('edit.web',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

     <a href="{{ route('delete.web',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection