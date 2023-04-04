<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function download(Request $request, $dokumen)
    {
        return response()->download(public_path('dokumen'. $dokumen));
    }
}
