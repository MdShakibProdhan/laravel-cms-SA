@extends('dashboardNav')
@section('testimonialCreate')
    <div class="container mt-4" style="padding-top:100px; padding-bottom:300px">
        <div class="row">
            <div class="col-md-12">
                <h2>Add New Testimonial</h2>


                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <textarea name="title" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href={{ route('testimonial.index') }} aria-expanded="false" type="submit" class="btn btn-danger">
                        Go Back to Testimonial List
                    </a>
                </form>
            </div>
        </div>
    </div>
@endsection
