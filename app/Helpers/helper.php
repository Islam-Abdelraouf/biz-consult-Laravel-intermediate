<?php


/* =============================================================================
 | Project:
 | Function: uploadImage()
 | Author: Eng. Islam Abdelraouf
 | Updated: 2025-11-10
 ================================================================================
 | Description:
 |   A utility function responsible for handling image uploads within the system.
 |   It manages both *new record creation* and *existing record updates*, ensuring
 |   proper naming conventions, safe file overwriting, and directory validation.
 |
 |   Key responsibilities:
 |     1. Create the target directory if it does not exist.
 |     2. Auto-generate unique image filenames based on a given prefix.
 |     3. Manage deletion and replacement of old files during updates.
 |     4. Maintain consistent naming structure for stored images.
 |
 | Parameters:
 |   @param string $imgPrefix        → The naming prefix used to identify image groups
 |                                     (e.g. "testimonial-", "client-", etc.).
 |   @param string $imgDir           → The destination directory for storing images.
 |   @param string $storedImageName  → The previously saved image name (if updating a record).
 |   @param object $uploadedImageName    → The uploaded file instance from the request.
 |   @param string $defaultImageName     → (Optional) Default fallback image name.
 |
 | Returns:
 |   @return string|null → Returns the stored image filename on success, or null if
 |                         no image was uploaded.
 |
 | Function Logic:
 |   - NEW RECORDS:
 |       1. Check if the target directory exists; if not, create it (permissions 755).
 |       2. Count existing images in the folder starting with the specified prefix.
 |       3. Extract file extension from uploaded image.
 |       4. Incrementally generate a new image name (e.g. testimonial-5.jpg)
 |          to prevent overwriting existing files.
 |       5. Move the uploaded file to the destination folder.
 |
 |   - EXISTING RECORDS:
 |       1. Retain the old filename to maintain reference consistency.
 |       2. Delete the previously stored image from storage.
 |       3. Move the newly uploaded file to the same directory with the same name.
 |
 | Example Usage:
 |   $newImage = uploadImage(
 |       imgPrefix: 'testimonial-',
 |       imgDir: public_path('assets-front/img/testimonials'),
 |       storedImageName: $request->old_image,
 |       uploadedImageName: $request->file('image'),
 |       defaultImageName: 'default.jpg'
 |   );
 |
 | Dependencies:
 |   - Illuminate\Support\Facades\File
 |   - Illuminate\Support\Facades\Storage
 |   - Illuminate\Support\Str
 |
 | Notes:
 |   - The function assumes a writable directory under 'public/' or equivalent.
 |   - For better reliability, ensure uploaded images are validated before calling
 |     this function (e.g., size, mime-type, dimensions).
 |   - The function does not handle the default image assignment if no upload occurs;
 |     this should be handled externally (e.g., in controller logic).
 =============================================================================== */


use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

//  Handle image upload logic-------------------------->>>>>
function uploadImage($imgDir, $imgPrefix, $uploadedImageName, $storedImageName): string|null
{
    if ($uploadedImageName) {

        //  when creating new record
        if (!$storedImageName) {
            // 1. if the directory doesn't exist || make the directory
            if (!File::exists($imgDir)) {
                File::makeDirectory($imgDir, 755);
            }

            // 2. Extract the image extension
            $ext = $uploadedImageName->getClientOriginalExtension();
            $n = 1;
            do {
                // Generate a new image filename by appending "1" to the current file count
                $newImageName = "{$imgPrefix}{$n}.{$ext}"; // example: " testminial-5.jpg "
                $n++;
            } while (File::exists($imgDir . DIRECTORY_SEPARATOR . $newImageName));
            // 3. Move the uploaded image to the 'img' folder
            $uploadedImageName->move($imgDir, $newImageName);
        } else {

            // When updating an existing record:
            // 1. Assign the old filename to the new image
            $newImageName = $storedImageName;
            // 2. Delete the previously stored image file
            File::delete($imgDir . DIRECTORY_SEPARATOR . $storedImageName);
            // 3. Move the newly uploaded image to the 'img' folder
            $uploadedImageName->move($imgDir, $newImageName);
        }
        // return the new image filename
        return $newImageName;
    }


}// Handle image upload logic----------->>>>>
