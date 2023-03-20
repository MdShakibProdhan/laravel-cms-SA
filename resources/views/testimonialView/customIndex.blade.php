<section class="serviceViewIndex" style="padding-top:100px; padding-bottom:300px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>List Of Testimonial</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('testimonial.create') }}"> Create New Testimonial</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Title</th>
                <th>About</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/images/testimonialImg/{{ $testimonial->image }}" width="100px"></td>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->title }}</td>
                    <td>{{ $testimonial->about }}</td>
                    <td>
                        <form action="{{ route('testimonialView.destroy', $testimonial->id) }}" method="POST">

                            {{-- <a class="btn btn-info" href="{{ route('products.show', $testimonial->id) }}">Show</a> --}}
                            <a class="btn btn-info" href="#">Show</a>

                            <a class="btn btn-primary"
                                href="{{ route('testimonialView.edit', $testimonial->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</section>
