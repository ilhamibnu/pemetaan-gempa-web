<?php

namespace App\Http\Controllers;

use App\Models\Gempa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_gempa = Gempa::count();
        return view('admin.pages.dashboard', [
            'jumlah_gempa' => $jumlah_gempa
        ]);
    }
}
