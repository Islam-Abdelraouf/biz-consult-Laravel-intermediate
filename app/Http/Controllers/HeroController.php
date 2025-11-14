<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Http\Requests\UpdateHeroRequest;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::findOrFail(1);
        return view('admin.heroes.index', get_defined_vars());
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        // 0. image prefix here is the image name
        $imgPrefix = 'hero';
        // 1. Capture and store the validated data
        $data = $request->validated();
        // 2. Assign a default image filename
        $defaultImage = "hero.png";
        // 3. Assign the recorded image filename
        $storedImage = $hero->image ?: '';

        // 4. Execute this block only when an image has been submitted
        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            // Define the expected directory path for storing images
            $imgDir = public_path('assets-front/img');
            // Call the helper function to process the uploaded image and return its new filename
            $generatedImage = uploadImage(imgPrefix: $imgPrefix, imgDir: $imgDir, storedImageName: $storedImage, uploadedImageName: request()->file('image'));
            // Update the image field with the generated image name,
            // dd('generatedImage:' . $generatedImage);
            $data['image'] = $generatedImage;
        } else {
            // or keep the image stored in database, or use the default image if no image was still in the database
            $data['image'] = $storedImage ?: $defaultImage;
        }


        // 5. update the hero record and return to index page
        $hero->update($data);
        return to_route('admin.heroes.index')->with('success', __('keywords.updated_successfully'));
    }
}
