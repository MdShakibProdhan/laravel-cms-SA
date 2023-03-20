@extends('dashboardNav')
@section('serviceCreate')
    <div class="container mt-4" style="padding-top:100px; padding-bottom:300px">
        <div class="row">
            <div class="col-md-12">
                <h2>Add New Service</h2>
                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href={{ url('/service') }} aria-expanded="false" type="submit" class="btn btn-danger">
                        Go Back to Service List
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
