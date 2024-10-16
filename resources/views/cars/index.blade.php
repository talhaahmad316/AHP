@extends('layout.master')
@section('title')
    <title>Cars Details</title>
@stop

@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('carsdetail.create') }}" class="btn btn-success">Add Car Detail</a>
                    <div class="card">
                        <div class="card-body">
                            @include('partials.alerts')
                            <div class="d-xl-flex">
                                <div class="w-100">
                                    <div class="p-lg-1">
                                        <table id="myTable" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Year of Construction</th>
                                                    <th>Fuel</th>
                                                    <th>Transmission</th>
                                                    <th>Bodywork</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($carsDetails as $carsDetail)
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset('carsDetail/' . $carsDetail->image) }}"
                                                                alt="" width="50px" height="50px"
                                                                class="rounded-circle">
                                                        </td>
                                                        <td>{{ $carsDetail->title }}</td>
                                                        <td>{{ $carsDetail->yearofconstruction }}</td>
                                                        <td>{{ $carsDetail->fuel }}</td>
                                                        <td>{{ $carsDetail->transmission }}</td>
                                                        <td>{{ $carsDetail->bodywork }}</td>
                                                        <td>{{ $carsDetail->price }}</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="{{ route('carsdetail.edit', $carsDetail->id) }}"
                                                                    class="btn btn-primary btn-sm"
                                                                    style="margin-right: 10px">
                                                                    <i class="bi bi-pencil-fill"></i>
                                                                </a>
                                                                <form
                                                                    action="{{ route('carsdetail.destroy', $carsDetail->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger btn-sm"><i
                                                                            class="bi bi-trash-fill"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                        </table>

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
