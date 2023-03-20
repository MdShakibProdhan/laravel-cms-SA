<section class="serviceViewIndex" style="padding-top:100px; padding-bottom:300px">
    <div class="container ">
        <div class="row">
            <div class="col-xl-12">
                <h2>Service List</h2>
                <a href="{{ route('service.create') }}" class="btn btn-primary mb-2">Add New Service</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Create Time</th>
                            <th>Last Update</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td style="width:10%;"><img src="{{ asset('images/' . $service->image) }}"
                                        style="width:100%" alt="{{ $service->name }}">
                                    {{-- print_r(asset()); --}}
                                </td>
                                <td>{{ $service->name }}</td>
                                {{-- <td>{{ asset('/public/public/image/16788708994960.pic-3.png') }}</td> --}}
                                <td style=" width:35%; overflow:hidden">
                                    {{ $service->description }}
                                </td>
                                <td>{{ $service->created_at }}</td>
                                <td>{{ $service->updated_at }}</td>
                                <td style="width:12%;">
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
    </div>
</section>
