<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('role')->paginate(10);

        return view('admin/user/index', compact('users'));
    }

    public function create()
    {
        $this->authorize('superadmin');
        return view('admin/user/create');
    }

    public function store(Request $request)
    {
        $this->authorize('superadmin');
        $request->validate([
            'email' => ['required', 'unique:users', 'email'],
            'name'  => ['required', 'max:30'],
            'password' => ['required', 'confirmed', Password::min(8)]
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
            'photo'  => "default.png"
        ]);

        return redirect()->route('user.index')->with('success', 'Berhasil menambahkan admin');
    }


    public function edit($id)
    {
        $this->authorize('superadmin');
        $user = User::join('roles', 'roles.id', '=', 'users.role_id')
            ->select('users.*', 'roles.role_name')
            ->where('users.id', $id)
            ->first();

        $role = Role::all();

        return view('admin/user/edit', compact('user', 'role'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('superadmin');
        $request->validate([
            'name'  => ['required', 'max:30'],
        ]);

        $user = User::find($id);

        $user->update([
            'name'      => $request->name,
            'role_id'   => $request->role_id
        ]);

        return redirect()->route('user.index')->with('success', 'Berhasil update user');
    }


    public function deleteUser(Request $request)
    {
        $this->authorize('superadmin');

        $user = User::find($request->id);

        //cek apakah masih ada pesanan yang belum selesai
        $count = Order::where('user_id', $user->id)->where('order_status_id', '<', 5)->count();

        if ($count > 0) {
            return redirect()->route('user.index')->with('failed', 'User tidak bisa dihapus, masih terdapat pesanan yang belum selesai');
        }

        if ($user->photo != 'default.png') {
            Storage::delete('public/users/' . basename($user->photo));
        }

        $user->delete();

        return redirect()->route('user.index')->with('success', 'Berhasil hapus user');
    }
}
