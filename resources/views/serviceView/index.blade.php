{{-- Service Index Page --}}
@extends('dashboardNav')
@section('serviceIndex')
    {{-- <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2>Service List</h2>
                <a href="{{ route('service.create') }}" class="btn btn-primary mb-2">Add New Service</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td><img src="{{ $service->getImageAttribute() }}" width="50" height="50"
                                        alt="{{ $service->name }}"></td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <a href="{{ route('service.edit', $service->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ route('service.destroy', $service->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
    @include('serviceView.customIndex')
@endsection
