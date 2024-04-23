<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class FileDownloadController extends Controller
{
    public function download($filename)
    {
        $path = storage_path('public/' . $filename);
        if (!File::exists($path)) {
            return response()->json(['message' => 'File not found'], 404);
        }

        $headers = [
            'Content-Type' => 'application/pdf',
        ];

        return response()->download($filename, 'Lawrence_Chukwuebuka_Obi_Resume.pdf', $headers);
    }
}
