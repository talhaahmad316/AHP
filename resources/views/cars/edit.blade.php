@extends('layout.master')
@section('title')
    <title>Cars detail edit</title>
@stop

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Car detail edit</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-xl-flex">
                                <div class="w-100">
                                    <div class="p-lg-1">
                                        <form method="post" action="{{ route('carsdetail.update',$carsDetail->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputTitle1" class="form-label">Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="Title" value="{{ $carsDetail->title }}">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="exampleInputyearofconstruction1" class="form-label">Year of Construction</label>
                                                    <input type="text" name="yearofconstruction" class="form-control"
                                                        placeholder="Year of Construction" value="{{ $carsDetail->yearofconstruction }}">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="exampleInputFuel1" class="form-label">Fuel</label>
                                                    <input type="text" name="fuel" class="form-control"
                                                        placeholder="Fuel" value="{{ $carsDetail->fuel }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputTransmission1"
                                                        class="form-label">Transmission</label>
                                                    <input type="text" name="transmission" class="form-control"
                                                        placeholder="Transmission" value="{{ $carsDetail->transmission }}">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="exampleInputBodywork1" class="form-label">Bodywork</label>
                                                    <input type="text" name="bodywork" class="form-control"
                                                        placeholder="Bodywork" value="{{ $carsDetail->bodywork }}">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="exampleInputPrice1" class="form-label">Price</label>
                                                    <input type="text" name="price" class="form-control"
                                                        placeholder="Price" value="{{ $carsDetail->price }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="formFile" class="form-label">Image</label>
                                                    <input class="form-control" type="file" name="image" id="formFile">
                                                    <img src="{{ asset('carsDetail/' . $carsDetail->image) }}" style="margin-top: 10px" alt="" width="150px" height="150px">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end padding-->
                                </div>

                                <!-- Start right-side-nav -->

                            </div>
                        </div>
                        <!--end card body-->
                    </div>
                    <!-- end card-->
                </div>
            </div>
            <!-- end row -->

        </div>
    @stop
