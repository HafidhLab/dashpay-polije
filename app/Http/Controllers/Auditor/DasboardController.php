<?php

namespace App\Http\Controllers\Auditor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DasboardController extends Controller
{
    public function index() 
    {

        $merchantRole = Role::where('name' ,'merchant')->first();
        $merchants = $merchantRole ? $merchantRole->users : collect();
        
        return view('auditor.dashboard', compact('merchants'));
    }
}
