@extends('admin.layouts.admin')

@section('title', 'Gallery Management')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Gallery Management</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- ✅ Add Form -->
    <div class="card mb-4">
        <div class="card-header">Add Gallery</div>
        <div class="card-body">
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>

                    <div class="col-md-3">
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <div class="col-md-3">
                        <select name="category" class="form-control">
                            <option value="scholarship">Scholarship</option>
                            <option value="community">Community</option>
                            <option value="education">Education</option>
                            <option value="food">Food</option>
                            {{-- <option value="events">Events</option> --}}
                        </select>
                    </div>

                    <div class="col-md-3">
                        <button class="btn btn-primary w-100">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- ✅ Table -->
    <div class="card">
        <div class="card-header">All Gallery</div>
        <div class="card-body">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($galleries as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset($item->image) }}" width="60">
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>{{ ucfirst($item->category) }}</td>
                        <td>{{ $item->status }}</td>

                        <td>
                            <!-- Delete -->
                            <a href="{{ route('admin.gallery.delete', $item->id) }}" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete?')">Delete</a>

                            <!-- Edit Button -->
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">Edit</button>
                        </td>
                    </tr>

                    <!-- ✅ Edit Modal -->
                    <div class="modal fade" id="editModal{{ $item->id }}">
                        <div class="modal-dialog">
                            <form action="{{ route('admin.gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>Edit Gallery</h5>
                                    </div>

                                    <div class="modal-body">

                                        <input type="text" name="title" value="{{ $item->title }}" class="form-control mb-2">

                                        <input type="file" name="image" class="form-control mb-2">

                                        <select name="category" class="form-control mb-2">
                                            <option value="scholarship" {{ $item->category=='scholarship'?'selected':'' }}>Scholarship</option>
                                            <option value="community" {{ $item->category=='community'?'selected':'' }}>Community</option>
                                            <option value="education" {{ $item->category=='education'?'selected':'' }}>Education</option>
                                            <option value="food" {{ $item->category=='food'?'selected':'' }}>Food</option>
                                            {{-- <option value="events" {{ $item->category=='events'?'selected':'' }}>Events</option> --}}
                                        </select>

                                        <select name="status" class="form-control">
                                            <option value="active" {{ $item->status=='active'?'selected':'' }}>Active</option>
                                            <option value="inactive" {{ $item->status=='inactive'?'selected':'' }}>Inactive</option>
                                        </select>

                                    </div>

                                    <div class="modal-footer">
                                        <button class="btn btn-success">Update</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection