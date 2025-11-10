<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(config('pagination.counter'));
        return view('admin.testimonials.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {

        // 1. Capture and store the validated data
        $data = $request->validated();
        // 2. Assign a default image filename
        $defaultImage = "default.jpg";

        // 3. Execute this block only when an image has been submitted
        if (request()->has('image') && request()->file('image')->isValid()) {
            // Define the expected directory path for storing images
            // $imgDir = public_path('assets-front/img');
            $imgDir = public_path('assets-front/img');
            // Call the helper function to process the uploaded image and return its new filename
            // $generatedImage = uploadImage('testimonial-', $imgDir, $storedImage, request()->file('image'));
            $generatedImage = uploadImage(imgPrefix: 'testimonial-', imgDir: $imgDir, uploadedImageName: request()->file('image'), storedImageName: '');
            // Update the image field with the generated image name
            $data['image'] = $generatedImage;
        } else {
            // or use the default image if no new image was uploaded
            $data['image'] = $defaultImage;
        }

        // 4. create new testimonial record and return to index page
        Testimonial::create($data);
        return to_route('admin.testimonials.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        // 1. Capture and store the validated data
        $data = $request->validated();
        // 2. Assign a default image filename
        $defaultImage = "default.jpg";
        // 3. Assign the recorded image filename
        $storedImage = $testimonial->image;

        // 4. Execute this block only when an image has been submitted
        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            // Define the expected directory path for storing images
            $imgDir = public_path('assets-front/img');
            // Call the helper function to process the uploaded image and return its new filename
            $generatedImage = uploadImage(imgPrefix: 'testimonial-', imgDir: $imgDir, storedImageName: $storedImage, uploadedImageName: request()->file('image'));
            // Update the image field with the generated image name,
            $data['image'] = $generatedImage;
        } else {
            // or keep the image stored in database, or use the default image if no image was still in the database
            $data['image'] = $storedImage ?: $defaultImage;
        }
        // 5. update the testimonial record and return to index page
        $testimonial->update($data);
        return to_route('admin.testimonials.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Define the expected directory path for storing images
        $imgDir = public_path('assets-front/img');
        // Delete the previously stored image file from the storage directory
        File::delete($imgDir . DIRECTORY_SEPARATOR . $testimonial->image);

        // Delete the stored testimonial record from the database
        $testimonial->delete();
        return to_route('admin.testimonials.index')->with('success', __('keywords.deleted_successfully'));
    }
}
