<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Usuario_cliente;
use App\Domicilio;
use App\Pedido;
use App\User;
use App\Configuraciones;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\LoginValidator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $Arreglo = array();
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        $DatosInicio = Configuraciones::where('cClave','fbInput')
                                        ->orWhere('cClave','twInput')
                                        ->orWhere('cClave','igInput')
                                        ->orWhere('cClave','ytInput')
                                        ->orWhere('cClave','CorreoInfo')
                                        ->orWhere('cClave','TelefonoInfo')
                                        ->orWhere('cClave','DireccionInfo')
                                        ->orWhere('cClave','WebInfo')
                                        ->orWhere('cClave','HorariosSemana')
                                        ->orWhere('cClave','diasSemana')
                                        ->orWhere('cClave','diasFin')
                                        ->orWhere('cClave','HorariosFinSemana')
                                        ->get()->toArray();        
        $DiasSemana = [
            1 => 'Lunes',
            2 => 'Martes',
            3 => 'Miercoles',
            4 => 'Jueves',
            5 => 'Viernes',
            6 => 'Sabado',
            7 => 'Domingo',
        ];                



        if(!empty($DataImg)){

            $Matriz = ['fbInput', 'twInput', 'igInput', 'ytInput', 'CorreoInfo','TelefonoInfo','DireccionInfo','WebInfo','HorariosSemana','diasSemana','diasFin','HorariosFinSemana'];        
            foreach ($DatosInicio as $key => $Valor) {                       
                if(in_array($Valor['cClave'], $Matriz)){                
                    if($Valor['cValor'] != null){                                                      
                        $this->Arreglo[$Valor['cClave']] = $Valor['cValor'];
                    }
                    else{                     
                        unset($this->Arreglo[$Valor['cClave']]);                                    
                    }                                                             
                } 
            } 


            $Semana = explode(',', $this->Arreglo['diasSemana']); 
            $ContadorSemana = count($Semana);
            $Inicio = $Semana[0];
            $Fin = $Semana[$ContadorSemana-1];
            $this->Arreglo['DiasSemana'] = $DiasSemana[$Inicio]." - ".$DiasSemana[$Fin];

            $Semana = explode(',', $this->Arreglo['diasFin']); 
            $ContadorSemana = count($Semana);
            $Inicio = $Semana[0];
            $Fin = $Semana[$ContadorSemana-1];
            $this->Arreglo['diasFin'] = $DiasSemana[$Inicio]." - ".$DiasSemana[$Fin];  
        }  

    }

    public function showLoginForm()
    {
        //retorno la vista de inicio de sesion
        $Contenido['section'] = 'Ingresar';
        return view('login_marpe')->with('Contenido', $Contenido)->with('RRSS',$this->Arreglo);
        
    }

    public function login(Request $request)
    {
        
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        
        
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function credentiales(Request $request){
        
        dd('entre');
        \Session::flash('allLogin',$request->all());
        if(Usuario_cliente::where('correo',$request->email)->exists()) {
            
            $user = Usuario_cliente::where('correo', $request->email)->get();
            
            foreach ($user as $users) {}
             //dd($users->perfil);
                if (\Hash::check($request->password, $users->contrasena)){//$users->contrasena == $request->password) {
                    # code...
                    //echo "tiene igual su contraseña <br>";
                    $request->session()->put('id_usuario', $users->idCliente);
                    
                    $nombreAp = $users->nombre." ".$users->appaterno;

                    $request->session()->put('nombre_usuario', $nombreAp);

                    $request->session()->put('perfil', $users->perfil);

                    $request->session()->put('correo', $users->correo);

                    /*Este IF demuestra que inicie sesion con el modal*/
                    if($request->modalInicio == 'modalInicio'){
                        
                        if(Domicilio::where('idCliente',$users->idCliente)->exists()){
                            $objectDireccion = Domicilio::where('idCliente',$users->idCliente)->get();
                            foreach ($objectDireccion as $Direccion) {}
                            $articulosCompra = \Session::get('pedido_virtual');
                            return  view('vista_carrito.micarrito')->with('datosDomicilio', $objectDireccion[0])->with('articulos_compra',$articulosCompra);
                        }
                        else{
                            foreach ($this->datosPerfil($users->idCliente) as $usuario){}
                            return view('usuarios_cliente.miPerfil')->with("id_usuario",$usuario);
                        }
                    }
                    /*Termina logue con el modal*/
                    
                    /*Si no entro al modal entro a uno de ellos*/
                    if(\Session::has('perfil') && $users->perfil != 'ADMIN'){ 
                        exit();                 
                        return view('inicio');
                    }
                    elseif ($users->perfil == 'ADMIN') {
                        //return view('panel.panelcontrol');
                        return redirect('admin');
                    }
                }
                else{

                    //$existo = "<div class='alert alert-danger'><buton type='button' class='close' data-dismiss='alert'> &times;</buton>¡La contraseña ingresada no esta correcta!</div>";
                    $existo = "<div class='alert alert-danger' id='success-alert'><buton type='button' class='close' data-dismiss='alert'> &times;</buton>La contraseña ingresada no es la correcta. <br>Intente nuevamente</div>";
                    \Session::flash('exito',$existo);
                    return back()->withInput();
                    //return view('sesion')->with('mensaje',$existo);
                }           
        }
        else{
            $existo = "<div class='alert alert-danger' id='success-alert'><buton type='button' class='close' data-dismiss='alert'> &times;</buton>¡El Correo ingresado no esta registrado!</div>";
            \Session::flash('exito',$existo);
                    return back()->withInput();
            //return view('sesion')->with('mensaje',$existo);
        }
    }

    public function datosPerfil($idCliente){

        $pefilUsuario = User::leftJoin('domicilio','users.id','=','domicilio.id')->where('users.id','=',$idCliente)->select('users.id as identi_cliente',
                                                                                                                                'users.name','users.email','users.celular','users.appaterno','users.apmaterno',
                                                                                                                                'domicilio.calle','domicilio.cruzamientos','domicilio.numero_ext',
                                                                                                                                'domicilio.numero_int','domicilio.colonia_fracc','domicilio.ciudad',
                                                                                                                                'domicilio.estado','domicilio.cp')->limit(1)->get();

        
        return $pefilUsuario;
        //exit();
    }

    public function vistaPerfil(){

        dd(Auth::user()->hasRole('Administrador'));

        if(!Auth::check()){
            return redirect('login');
        }
        //idCliente se cambia por id de la tabla users
        $datosProfile = $this->datosPerfil(Auth::user()->id);
        $miscompras = Pedido::where('id', $datosProfile[0]->identi_cliente)->orderby('fecha_levantada','desc')->paginate(5);

        //dd($datosProfile);
        

        $content = view('usuarios_cliente.miPerfil')->with("id_usuario",$datosProfile)->with('aviso','')->with('compras',$miscompras);
        return $content;
        /*if(\Session::get('id_usuario') != "" || \Session::has('id_usuario')){
            //dd($this->datosPerfil(\Session::get('id_usuario')));
            $miscompras = Pedido::where('idcliente', $this->datosPerfil(\Session::get('id_usuario'))[0]->identi_cliente)->orderby('fecha_levantada','desc')->paginate(5);
            //dd($miscompras);

            return view('usuarios_cliente.miPerfil')->with("id_usuario",$this->datosPerfil(\Session::get('id_usuario')))->with('aviso',$alerta)->with('compras',$miscompras);
        }
        else{
            return view('inicio');
        }*/
        //dd($usuario);                  
        
    }


    public function Logout(){
        //Desconctamos al usuario

        // JPJ$request->session()->flush();
 
        //Redireccionamos al inicio de la app con un mensaje
        //JPJ $mensaje = "<script> alert('Gracias por visitarnos!.'); </script>";
        //JPJ return view('inicio')->with('msg', $mensaje);
        Auth::logout();
        \Session::forget('pedido_virtual');
        \Session::forget('productos_carrito');
        return redirect('/');
    }

    public function cargacompras(Request $request){
        
        $miscompras = Pedido::where('idcliente', $this->datosPerfil(\Session::get('id_usuario'))[0]->identi_cliente)->orderby('fecha_levantada','desc')->paginate(5);

        if($request->ajax()){
            return view('usuarios_cliente.vista_parcial')->with('compras',$miscompras);
        }

       // return view('usuarios_cliente.vista_parcial',compact('compras'));
    }
}
