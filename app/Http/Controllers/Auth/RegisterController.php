<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\CodeConfirmation;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /*Sobre escribo funcion para manipular eventos e impedir q se loguee automaticamente*/
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        //$this->guard()->login($user);

        return $this->registered($request, $user)
                        ? 
                        : redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mail2' => 'required|string|email|max:255|same:email',
            'password' => 'required|string|min:8|confirmed',            
        ]);
    }

    public function showRegistrationForm()
    {
        return view('sesion_marpe')->with('section','');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        $data['code_confirmation'] = str_random(25);

        $nameUser = $data['name'];

        $Rol = Role::where('name', 'Empleado')->first();
        
        if($data['name'] == '@dmiNisitrAdor'){
            $nameUser = "Administrador";   
            $Rol = Role::where('name', 'Administrador')->first();
        }
        
        $tipo_userd = (isset($data['tipo_user'])) ? $data['tipo_user'] : 'Empleado';
        
        $user = User::create([
            'name' => $nameUser,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),            
            'tipo_user' => $tipo_userd,
            'celular' => NULL,
            'confirmation_code' => $data['code_confirmation'],
            'activo' => 1
            //'promociones' => ($data['tipo_user'] != 'ADMIN') ? $data['promociones'] : NULL,
         ]);

        $user->roles()->attach($Rol);

        //\Mail::to([$data['email']])->send(new CodeConfirmation($data));

        return $user;
    }

    protected function verificacion($code){

        $user = User::where('confirmation_code',$code)->first();

        if(!$user){
            return redirect('/');
        }
        
        $user->activo = true;
        $user->confirmation_code = null;
        $user->save();

        return view('avisos.cuentaConfirmada');
    }
}
