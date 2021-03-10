@extends('admin.layouts.master')
@section('pageCss')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" />
@endsection
@section('main')
    <div class="page-content-wrapper">

        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible shadow-sm p-3 mb-5 rounded" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible shadow-sm p-3 mb-5 rounded" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <button class="btn btn-purple" data-toggle="modal" data-target="#addEmployee"><i
                                    class="ti-plus mr-2"></i>Add Employee</button>

                            </p>

                            <table id="myTable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->




        </div><!-- container -->

    </div> <!-- Page content Wrapper -->


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="" method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <div>
                                <input type="text" name="name" class="form-control" placeholder="Enter a employee name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>E-Mail</label>
                            <div>
                                <input type="email" name="email" class="form-control" placeholder="Enter a valid e-mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <div>
                                <input type="text" name="phone" class="form-control"
                                    placeholder="Enter a employee phone number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <div>
                                <input type="file" data-height="300" class="form-control dropify" name="photo" id="photo">
                            </div>
                        </div>



                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-pink waves-effect waves-light">
                                    Submit
                                </button>
                                {{-- <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button> --}}
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('pageScripts')
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"
        integrity="sha512-hJsxoiLoVRkwHNvA5alz/GVA+eWtVxdQ48iy4sFRQLpDrBPn6BFZeUcW4R4kU+Rj2ljM9wHwekwVtsb0RY/46Q=="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $('.dropify').dropify();

    </script>
@endsection
