@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Packages</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="row mb-2 col-md-12">
                    <a href="{{route('admin.package.create')}}" class="btn btn-success mr-2">Add Post</a>
                </div>
                <h4 class="header-title">Packages</h4>
                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Categroy Name</th>
                            <th>Package Name</th>
                            <th>Package Price</th>
                            <th>Package Point</th>
                            <th>Total Visitor</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($packages))
                        @foreach ($packages as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->category->name }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->price }}</td>
                            <td>{{ $data->point }}</td>
                            <td>{{ $data->total_visitor }}</td>
                            <td>{{ $data->duration }}</td>
                            <td>
                                <a href="{{route('admin.package.edit',['id'=>$data->id])}}" class="btn btn-primary btn-sm px-1 py-0" title="Edit">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-sm px-1 py-0"><i class="fa fa-trash"></i></a>
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