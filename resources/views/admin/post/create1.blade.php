@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Create Posts</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="name">Channel Id<small style="color: red">*</small></label>
                            <input type="text" class="form-control" required value="{{ old('name') }}" name="name">
                            @error('name')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Name<small style="color: red">*</small></label>
                            <input type="text" class="form-control" required value="{{ old('name') }}" name="name">
                            @error('name')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-end col-12">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection