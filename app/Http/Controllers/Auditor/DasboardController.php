<?php

namespace App\Http\Controllers\Auditor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DasboardController extends Controller
{
    public function index() 
    {

        $merchants = Role::where('name', 'merchant')->first()->users ?? collect();
        
        return view('auditor.dashboard', compact('merchants'));
    }
}
