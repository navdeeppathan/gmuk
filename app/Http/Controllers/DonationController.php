<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    // Show Donate Page
    public function index()
    {
        return view('donate');
    }
    public function adminindex()
    {
        $all = Donation::with('user')->latest()->get();
        return view('admin.donate.index', compact('all'));
    }

    // Store Donation
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:zakat,sadaqah,monthly',
            'amount' => 'required|numeric|min:1',
            'message' => 'nullable|string'
        ]);

        Donation::create([
            'user_id' => Auth::id(),
            'type' => $request->type,
            'amount' => $request->amount,
            'message' => $request->message,
            'status' => 'completed', // later connect with payment gateway
        ]);

        return back()->with('success', 'Donation submitted successfully!');
    }


   public function uploadExcel(Request $request, $id)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls|max:2048'
        ]);

        $donation = Donation::findOrFail($id);

        if ($request->hasFile('excel_file')) {
            $file = $request->file('excel_file');

            // Create folder if not exists
            $folder = public_path('donations_excel');
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            // Generate unique name
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move file to public folder
            $file->move($folder, $filename);

            // Save path in DB (relative path)
            $donation->excel_file = 'donations_excel/' . $filename;
            $donation->save();
        }

        return back()->with('success', 'Excel uploaded successfully');
    }
}