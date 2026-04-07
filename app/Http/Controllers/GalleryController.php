<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    

    public function gallery()
    {
        $scholarships = Gallery::where('category', 'scholarship')
            ->where('status', 'active')
            ->latest()
            ->get();

        $communities = Gallery::where('category', 'community')
            ->where('status', 'active')
            ->latest()
            ->get();

        $educations = Gallery::where('category', 'education')
            ->where('status', 'active')
            ->latest()
            ->get();

        $foods = Gallery::where('category', 'food')
            ->where('status', 'active')
            ->latest()
            ->get();

        return view('gallery', compact(
            'scholarships',
            'communities',
            'educations',
            'foods'
        ));
    }

  
    public function galleryDetail($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Related images (same category)
        $related = Gallery::where('category', $gallery->category)
            ->where('id', '!=', $gallery->id)
            ->where('status', 'active')
            ->latest()
            ->take(6)
            ->get();

        return view('gallery-detail', compact('gallery', 'related'));
    }

    // ✅ List
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    // ✅ Store
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'category' => 'required'
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('gallery'), $imageName);

        Gallery::create([
            'title' => $request->title,
            'image' => 'gallery/'.$imageName,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Gallery added successfully');
    }

    // ✅ Update
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('gallery'), $imageName);

            $gallery->image = 'gallery/'.$imageName;
        }

        $gallery->update([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Gallery updated');
    }

    // ✅ Delete
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // delete image
        if (file_exists(public_path($gallery->image))) {
            unlink(public_path($gallery->image));
        }

        $gallery->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}