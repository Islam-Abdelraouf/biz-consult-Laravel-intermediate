<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(config('pagination.counter'));
        return view('admin.companies.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        // image prefix
        $imgPrefix = 'company-';

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
            $generatedImage = uploadImage(imgPrefix: $imgPrefix, imgDir: $imgDir, uploadedImageName: request()->file('image'), storedImageName: '');
            // Update the image field with the generated image name
            $data['image'] = $generatedImage;
        } else {
            // or use the default image if no new image was uploaded
            $data['image'] = $defaultImage;
        }

        // 4. create new testimonial record and return to index page
        Company::create($data);
        return to_route('admin.companies.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('admin.companies.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        // image prefix
        $imgPrefix = 'company-';

        // 1. Capture and store the validated data
        $data = $request->validated();
        // 2. Assign a default image filename
        $defaultImage = "default.jpg";
        // 3. Assign the recorded image filename
        $storedImage = $company->image;

        // 4. Execute this block only when an image has been submitted
        if (request()->hasFile('image') && request()->file('image')->isValid()) {
            // Define the expected directory path for storing images
            $imgDir = public_path('assets-front/img');
            // Call the helper function to process the uploaded image and return its new filename
            $generatedImage = uploadImage(imgPrefix: $imgPrefix, imgDir: $imgDir, storedImageName: $storedImage, uploadedImageName: request()->file('image'));
            // Update the image field with the generated image name,
            $data['image'] = $generatedImage;
        } else {
            // or keep the image stored in database, or use the default image if no image was still in the database
            $data['image'] = $storedImage ?: $defaultImage;
        }
        // 5. update the company record and return to index page
        $company->update($data);
        return to_route('admin.companies.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        // Define the expected directory path for storing images
        $imgDir = public_path('assets-front/img');
        // Delete the previously stored image file from the storage directory
        File::delete($imgDir . DIRECTORY_SEPARATOR . $company->image);

        // Delete the stored company record from the database
        $company->delete();
        return to_route('admin.companies.index')->with('success', __('keywords.deleted_successfully'));
    }
}
