@extends('layouts.app')

@section('content')


<div class="min-h-screen bg-[#FDF8F3] py-16 px-4">

    
    <div class="max-w-5xl mx-auto mt-20">

        <h1 class="text-3xl font-serif font-bold text-[#0F2E26] mb-6">
            Welcome, {{ $user->name }}
        </h1>

        <!-- Profile Card -->
        <div class="bg-white rounded-2xl p-6 shadow mb-8">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
        </div>

        <!-- Donations -->
        <div class="bg-white rounded-2xl p-6 shadow">
            <h2 class="text-xl font-bold mb-4 text-[#1B4D3E]">Your Donations</h2>

            <table class="w-full text-left">
                <thead>
                    <tr class="border-b">
                        <th class="py-2">Type</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Date</th>
                        {{-- <th>Excel</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse($donations as $donation)
                        <tr class="border-b">
                            <td class="py-2">{{ ucfirst($donation->type) }}</td>
                            <td>£{{ $donation->amount }}</td>
                            <td>{{ $donation->status }}</td>
                            <td>{{ $donation->created_at->format('d M Y') }}</td>
                            {{-- <td>
                                @if($donation->excel_file)
                                    <a href="{{ asset($donation->excel_file) }}" 
                                    target="_blank" 
                                    class="bg-[#1B4D3E] text-white py-2 px-4 rounded">
                                        View
                                    </a>
                                @else
                                    <span class="text-gray-500">No Excel file</span>
                                @endif
                            </td> --}}
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-4 text-center text-gray-500">
                                No donations yet
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</div>

@endsection