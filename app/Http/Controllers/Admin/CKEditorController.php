<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'upload' => 'required|file|mimes:jpg,jpeg,png,gif,svg,webp,pdf|max:2048',
        ]);


        if ($request->hasFile('upload')) {
            $image = $request->file('upload');
            $uploadPath = 'uploads';
            if (!Storage::exists($uploadPath)) {
                Storage::makeDirectory($uploadPath);
            }
            $originalName = $image->getClientOriginalName();
            $extension = $image->getClientOriginalExtension();
            $cleanFileName = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '-' . time() . '.' . $extension;
            $destinationPath = public_path($uploadPath);
            $filePaths = $image->move($destinationPath, $cleanFileName);
            $fileName = $filePaths->getFilename();
            $imagePath = $uploadPath . '/' . $fileName;
        }

        return response()->json([
            'uploaded' => true,
            'url' => $imagePath
        ]);
    }

    public function list()
    {
        $files = File::files(public_path('uploads'));
        $files = array_map(function ($file) {
            return asset('uploads/' . $file->getFilename());
        }, $files);

        return response()->json($files);
    }
    
    public function delete($filename)
    {
        $path = public_path('uploads/' . $filename);
        if (File::exists($path)) {
            File::delete($path);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
}
