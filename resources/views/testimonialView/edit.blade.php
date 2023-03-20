@extends('dashboardNav')
@section('serviceEdit')
    <div class="container mt-4" style="padding-top:100px; padding-bottom:300px">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Service
                    <a href="{{ route('service.index') }}" class="btn btn-secondary float-right">Back to List</a>
            </div>
        </div>
        <div class="col-md-12">
            <form action="{{ route('service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $service->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" required>{{ $service->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
                @if ($service->image)
                    <div class="form-group">
                        {{-- <img src="{{ Storage::url($service->image) }}" class="img-thumbnail" width="200"
                            alt="{{ $service->name }}"> --}}

                        <img src="{{ asset('images/' . $service->image) }}" class="img-thumbnail" width="200"
                            alt="{{ $service->name }}">
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
