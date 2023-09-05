@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Users</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">users</h4>
                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($users))
                        @foreach($users as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email }}</td>
                            <td>{{$value->status}}</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm px-1 py-0" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button type="button" data-id="" data-toggle="modal" data-target="#delete_approve" title="Delete" data-url="" data-token="{!! csrf_token() !!}" class="btn btn-danger btn-sm px-1 py-0 leadDelete">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <a href="" class="btn btn-info btn-sm px-1 py-0"><i class="fa fa-comments"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection