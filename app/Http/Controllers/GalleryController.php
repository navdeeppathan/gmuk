<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{
    

    public function gallery()
    {
        $scholarships = Gallery::with('images')
            ->where('category', 'scholarship')
            ->where('status', 'active')
            ->latest()
            ->get();

        $communities = Gallery::with('images')
            ->where('category', 'community')
            ->where('status', 'active')
            ->latest()
            ->get();

        $educations = Gallery::with('images')
            ->where('category', 'education')
            ->where('status', 'active')
            ->latest()
            ->get();

        $foods = Gallery::with('images')
            ->where('category', 'food')
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
        $related = Gallery::with('images')->where('category', $gallery->category)
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
        $galleries = Gallery::with('images')->latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    // ✅ Store
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'image' => 'required|image',
    //         'category' => 'required'
    //     ]);

    //     $imageName = time().'.'.$request->image->extension();
    //     $request->image->move(public_path('gallery'), $imageName);

    //     Gallery::create([
    //         'title' => $request->title,
    //         'image' => 'gallery/'.$imageName,
    //         'category' => $request->category,
    //         'description' => $request->description,
    //     ]);

    //     return redirect()->back()->with('success', 'Gallery added successfully');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'images' => 'required',
            'images.*' => 'image',
            'category' => 'required'
        ]);

        // ✅ Create Gallery First
        $gallery = Gallery::create([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
        ]);

        // ✅ Upload Multiple Images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                $imageName = time().'_'.uniqid().'.'.$image->extension();
                $image->move(public_path('gallery'), $imageName);

                // Save in gallery_images table
                GalleryImage::create([
                    'image' => 'gallery/'.$imageName,
                    'gallary_id' => $gallery->id
                ]);
            }
        }

        return redirect()->back()->with('success', 'Gallery with multiple images added');
    }

    // ✅ Update
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'images.*' => 'image'
        ]);

        // ✅ Update gallery data
        $gallery->update([
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'status' => $request->status
        ]);

        // ✅ Upload NEW multiple images (append)
        if ($request->hasFile('images')) {

            // ❌ delete old images
            foreach ($gallery->images as $img) {
                if (File::exists(public_path($img->image))) {
                    File::delete(public_path($img->image));
                }
                $img->delete();
            }

            // ✅ upload new ones
            foreach ($request->file('images') as $image) {
                $imageName = time().'_'.uniqid().'.'.$image->extension();
                $image->move(public_path('gallery'), $imageName);

                GalleryImage::create([
                    'image' => 'gallery/'.$imageName,
                    'gallary_id' => $gallery->id
                ]);
            }
        }

        return redirect()->back()->with('success', 'Gallery updated successfully');
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