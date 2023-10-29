{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <div class="container">
        <h2>Items List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($farmers as $farmer)
                <tr>
                    <td>{{ $farmer->id }}</td>
                    <td>{{ $farmer->name }}</td>
                    <td>{{ $farmer->description }}</td>
                    <td>
                        <a href="{{ route('farmerindex.show', $farmer->id) }}" class="btn btn-primary">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
{{-- @endsection --}}
