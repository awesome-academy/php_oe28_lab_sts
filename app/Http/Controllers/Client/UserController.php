<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check.role');
    }

    public function index()
    {
        return view('client.show-profile');
    }

    public function update(UserRequest $request)
    {
        $user = Auth::user();
        $user->fill($request->all());

        if ($request->hasFile('avatar')) {
            $filename = $request->avatar->getClientOriginalName();
            $filename = str_replace(' ', '-', $filename);
            $filename = uniqid() . '-' . $filename;
            $path = request()->avatar->move('images/avatar', $filename);

            $user->avatar = asset($path);
        }

        $user->save();

        return redirect()->route('profile.index');
    }
}
