@extends('admin.layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Update Packages</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <span>{{ $message }}</span>
                </div>
                @elseif ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <span>{{ $message }}</span>
                </div>
                @endif
                <form method="POST" action="{{route('admin.package.update')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$package->id}}">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Categories<small style="color: red">*</small></label>
                            <select class="form-control" name="category_id" required>
                                @if (!empty($package->category_id))
                                <option value="{{ $package->category_id }}" selected>
                                    {{ $package->category_id ? $package->category->name : '' }}
                                </option>
                                @endif
                                <option value="" disabled>Select Category ...</option>
                                @if (!empty($categories))
                                @foreach ($categories as $data)
                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Name<small style="color: red">*</small></label>
                            <input type="text" class="form-control" required value="{{ $package->name }}" name="name">
                            @error('name')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Price<small style="color: red">*</small></label>
                            <input type="number" class="form-control" required value="{{ $package->price }}" name="price" placeholder="Price in doller">
                            @error('price')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Points<small style="color: red">*</small></label>
                            <input type="number" class="form-control" required value="{{ $package->point }}" name="point">
                            @error('point')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Total Visitor<small style="color: red">*</small></label>
                            <input type="number" class="form-control" required value="{{ $package->total_visitor }}" name="total_visitor">
                            @error('total_visitor')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name">Duration</label>
                            <input type="number" class="form-control" required value="{{ $package->duration }}" name="duration">
                            @error('total_visitor')
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