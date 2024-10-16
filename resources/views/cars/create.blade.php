@extends('layout.master')
@section('title')
    <title>Cars detail add</title>
@stop

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('carsdetail.index') }}" class="btn btn-success">Cars Details</a>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-xl-flex">
                                <div class="w-100">
                                    <div class="p-lg-1">
                                        <form method="post" action="{{ route('carsdetail.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputTitle1" class="form-label">Title</label>
                                                    <input type="text" name="title" class="form-control"
                                                        placeholder="Title">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="exampleInputyearofconstruction1" class="form-label">Year of
                                                        Construction</label>
                                                    <input type="text" name="yearofconstruction" class="form-control"
                                                        placeholder="Year of Construction">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="exampleInputFuel1" class="form-label">Fuel</label>
                                                    <input type="text" name="fuel" class="form-control"
                                                        placeholder="Fuel">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="exampleInputTransmission1"
                                                        class="form-label">Transmission</label>
                                                    <input type="text" name="transmission" class="form-control"
                                                        placeholder="Transmission">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="exampleInputBodywork1" class="form-label">Bodywork</label>
                                                    <input type="text" name="bodywork" class="form-control"
                                                        placeholder="Bodywork">
                                                </div>

                                                <div class="col-md-4">
                                                    <label for="exampleInputPrice1" class="form-label">Price</label>
                                                    <input type="text" name="price" class="form-control"
                                                        placeholder="Price">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="formFile" class="form-label">Image</label>
                                                    <input class="form-control" type="file" name="image"
                                                        id="formFile">
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
