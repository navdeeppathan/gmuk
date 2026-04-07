@extends('admin.layouts.admin')

@section('title', 'Contact Messages')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Contact Messages</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header">All Messages</div>

        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($messages as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->full_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->subject }}</td>
                        <td style="max-width:200px;">
                            {{ \Illuminate\Support\Str::limit($item->message, 50) }}
                        </td>
                        <td>{{ $item->created_at->format('d M Y') }}</td>

                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal{{ $item->id }}">View</button>

                            <a href="{{ route('admin.contact.delete', $item->id) }}"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Delete this message?')">
                               Delete
                            </a>
                        </td>
                    </tr>

                    <!-- ✅ View Modal -->
                    <div class="modal fade" id="viewModal{{ $item->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <div class="modal-header">
                                    <h5>Message Details</h5>
                                </div>

                                <div class="modal-body">
                                    <p><strong>Name:</strong> {{ $item->full_name }}</p>
                                    <p><strong>Email:</strong> {{ $item->email }}</p>
                                    <p><strong>Subject:</strong> {{ $item->subject }}</p>
                                    <p><strong>Message:</strong><br>{{ $item->message }}</p>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

</div>

@endsection