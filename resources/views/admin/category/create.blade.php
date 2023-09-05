@extends('user.layout.app')
@section('title', 'Create Category')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Create Category</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('stockcategory.store', ['RolePrefix' => RolePrefix()]) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label>To Project<small style="color: red">*</small></label>
                                            <select class="form-control" id="selectProject" name="project_id" required>
                                                <option value="" selected hidden>Select Project ...</option>
                                                @if (!empty($projects))
                                                    @foreach ($projects as $data)
                                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Name<small style="color: red">*</small></label>
                                            <input type="text" class="form-control" required value="{{ old('name') }}"
                                                name="name">
                                            @error('name')
                                                <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row justify-content-end col-12">
                                        <button type="submit" class="btn btn-gene">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
