<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function productThumbnail(Request $request)
    {
        $validated = $request->validate([
            'path' => 'string'
        ]);

        if (empty($validated['path'])) {
            abort(404);
        }


        $filePath = Crypt::decryptString($validated['path']);
        // dd($filePath);

        if (Storage::exists($filePath)) {
            $content = Storage::get($filePath);
            if ($content != null) {
                $mime = Storage::mimeType($content);
                $response = Response::make($content, 200);
                $response->header("Content-Type", $mime);
                return $response;
            }
            abort(404);
        } else {
            abort(404);
        }
    }
}
