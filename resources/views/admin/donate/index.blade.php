@extends('admin.layouts.admin')

@section('title', 'Donations')

@section('content')

<div class="container mt-4">
    <h3 class="mb-4">Donation List</h3>

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Message</th>
                            <th>Status</th>
                            {{-- <th>Payment Method</th> --}}
                            {{-- <th>Transaction ID</th> --}}
                            <th>Date</th>
                            {{-- <th>Excel</th> --}}
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($all as $key => $donation)
                            <tr>
                                <td>{{ $key + 1 }}</td>

                                <td>
                                    {{ $donation->user->name ?? 'Guest' }}
                                </td>

                                <td>
                                    <span class="badge bg-info text-dark">
                                        {{ ucfirst($donation->type) }}
                                    </span>
                                </td>

                                <td>
                                    £{{ number_format($donation->amount, 2) }}
                                </td>

                                <td>
                                    {{ $donation->message ?? '-' }}
                                </td>

                                <td>
                                    @if($donation->status == 'completed')
                                        <span class="badge bg-success">Completed</span>
                                    @elseif($donation->status == 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @else
                                        <span class="badge bg-danger">Failed</span>
                                    @endif
                                </td>

                                {{-- <td>
                                    {{ ucfirst($donation->payment_method) }}
                                </td>

                                <td>
                                    {{ $donation->transaction_id ?? '-' }}
                                </td> --}}

                                <td>
                                    {{ $donation->created_at->format('d M Y, h:i A') }}
                                </td>
                                {{-- <td>
                                    <!-- Upload Button -->
                                    <form action="{{ route('admin.donations.upload.excel', $donation->id) }}" 
                                        method="POST" enctype="multipart/form-data" style="display:inline;">
                                        @csrf

                                        <input type="file" name="excel_file" accept=".xlsx,.xls" required 
                                            class="form-control form-control-sm mb-1">

                                        <button class="btn btn-sm btn-primary">Upload</button>
                                    </form>

                                    <!-- View Button -->
                                    @if($donation->excel_file)
                                        <a href="{{ asset($donation->excel_file) }}" 
                                        target="_blank" 
                                        class="btn btn-sm btn-success mt-1">
                                            View
                                        </a>
                                    @endif
                                </td> --}}
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">
                                    No Donations Found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>

@endsection