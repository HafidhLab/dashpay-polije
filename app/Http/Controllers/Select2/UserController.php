<?php

namespace App\Http\Controllers\Select2;

use App\Http\Controllers\Controller;
use App\Http\Resources\Select2\UserResource;
use App\Traits\Select2Responser;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use Select2Responser;

    public function userRole(Request $request)
    {
        $users = $this->getUserData('user', $request->q ?? '');
        return $this->response(UserResource::class, $users->simplePaginate());
    }

    private function getUserData(string $role, string $query)
    {
        return Role::where('name', $role)->first()->users()
            ->where('username', 'like', "%{$query}%");
    }
}
