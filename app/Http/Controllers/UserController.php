<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Events\UserWasCreated;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Flash;
use Caffeinated\Shinobi\Models\Role;

class UserController extends Controller
{


    /*Constructor de la clase hacemos las validaciones correspondientes */
    public function __construct()
    {
        $this->middleware('permission:users.create')->only(['create','store']);
        $this->middleware('permission:users.index')->only('index');
        $this->middleware('permission:users.edit')->only(['edit','update']);
        $this->middleware('permission:users.show')->only('show');
        $this->middleware('permission:users.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('permission:users.store');
        $user = new User();
        $roles = Role::get();
        return view('usuarios.create', compact('user','roles'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        //Crea el Usuario y le Asigna la contraseña
       $user =  User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
           // Enviar Email
        // UserWasCreated::dispatch($user, $data['password']);
           // Regresamos al usuario
        Flash::success('User created successfully.');
       return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->middleware('permission:users.show');
        return view('usuarios.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->middleware('permission:users.edit');
        $roles = Role::get();
        return view('usuarios.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $this->middleware('permission:users.update');
         $input = "";
        //Realizamos la actulizacion de la contraseña si exite el campo
        if ($request->filled('password'))
        {
            $input = $request->all();
           
        }else{
            $input = $request->except('password');
        }
        $user->update($input);
        
        //Actulizar roles
        $user->roles()->sync($request->get('roles'));

        Flash::success('User update successfully.');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->middleware('permission:users.destroy');
        $user->delete();
        return redirect()->route('users.index')->withFlash('El usuario: ' . $user->name . ' eliminado');
    }
}
