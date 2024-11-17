<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Film;
use App\Models\Certificate;

class CertificateController extends Controller
{
    function index()
    {
        $certificates = Certificate::all();
        return view('certificates.index', ['certificates' => $certificates]);
    }
}
