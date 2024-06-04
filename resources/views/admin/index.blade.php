@extends('admin.layouts.main')

@section('main-container')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Datatable</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="{{count($booking) > 0 ? 'datatable' : ''}}" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Full Name</th>
                                                <th>City</th>
                                                <th>Gender</th>
                                                <th>Country</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if(count($booking) > 0)
                                            @foreach($booking as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->username}}</td>
                                                <td>{{$user->fullName}}</td>
                                                <td>{{$user->city}}</td>
                                                <td>{{$user->gender}}</td>
                                                <td>{{$user->country}}</td>
                                                <td class="actions">
                                                    <a href="deleteRecord/{{$user->id}}" class="on-default remove-row"><i
                                                            class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <tr>
                                                <td colspan="7" class="text-center">No Data!</td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->


        </div> <!-- container -->

    </div> <!-- content -->

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

@endsection