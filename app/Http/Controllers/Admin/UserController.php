<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.users.index')->only('index');

        $this->middleware('can:admin.users.edit')->only('edit', 'update');
 
    }
    public function index()
    { 
        $users = User::all()->count();
        
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
            // 'password_confirmation' => 'required'
        ]);

        // $user = User::create($request->all());
        $user = new User();
        $user->name = $request->name;    
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Se encripta la contraseña usando la función bcrypt().
        $user->save(); // Se guarda el registro en la base de datos.
    

        return redirect()->route('admin.users.edit', $user)->with('info', 'El usuario se creo con éxito');
    }

    public function edit(User $user)
    {
    // return $user; esto es para ver en array
        
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles') );
    } 
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index', compact('user'))->with('info', 'Se asigno');

    } 
}
