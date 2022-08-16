<?php

namespace App\Http\Controllers;


use Auth;
//use App\ContenidoPagina;
use App\Categoria;
use App\Productos;
use App\Configuraciones;
use App\Subcategoria;
use Illuminate\Http\Request;


class Direccionador extends Controller
{    
    public $Arreglo = array();

    public function __construct(){                
        
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

        if(!empty($DatosInicio)){

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

            if(isset($this->Arreglo['diasFin']) && $this->Arreglo['diasFin'] != ''){
                $Semana = explode(',', $this->Arreglo['diasFin']); 
                $ContadorSemana = count($Semana);
                $Inicio = $Semana[0];
                $Fin = $Semana[$ContadorSemana-1];
                $this->Arreglo['diasFin'] = $DiasSemana[$Inicio]." - ".$DiasSemana[$Fin];  
            }
        }            
    }

    public function index(){
        

        $Contenido = array();
        $DatosInicio = Configuraciones::get()->toArray();

        $DatosMarcas = Productos::where('categoria', '=',0)->get()->toArray();
        
        foreach ($DatosInicio as $Index => $Valor) {

            if($Valor['cClave'] == 'titulo'){
                $Contenido['TituloPrincipal'] = $Valor['cValor'];                
            }
            if($Valor['cClave'] == 'subtitulo'){
                $Contenido['DescripcionPrincipal'] = $Valor['cValor'];
            }          
            if($Valor['cClave'] == 'tituSeccion1'){
                $Contenido['TituloContenido1'] = $Valor['cValor'];
            }  
            if($Valor['cClave'] == 'ContentSeccion1'){
                $Contenido['DescripcionContenido1'] = $Valor['cValor'];
            }  
            if($Valor['cClave'] == 'tituSeccion2'){
                $Contenido['TituloContenido2'] = $Valor['cValor'];
            } 
            if($Valor['cClave'] == 'ContentSeccion2'){
                $Contenido['DescripcionContenido2'] = $Valor['cValor'];
            } 
            if($Valor['cClave'] == 'tituSeccion3'){
                $Contenido['TituloContenido3'] = $Valor['cValor'];
            } 
            if($Valor['cClave'] == 'ContentSeccion3'){
                $Contenido['DescripcionContenido3'] = $Valor['cValor'];
            }     
        }
        
        $Contenido['section'] = 'Inicio';
        
    	return view('inicio')->with('Contenido',$Contenido)->with('RRSS',$this->Arreglo)->with('Marcas',$DatosMarcas);
    }

    public function hombre(){
    	return view('hombre-mujer');
    }

    public function mujer(){
    	//return view('mujer');
        return view('auth.passwords.reset')->with(['token' => '', 'email' => '']);
    }

    public function detalle(){
    	return view('detalle');
    }


     public function nosotros(){
        
        //$DatosInicio = ContenidoPagina::where('menu','Nosotros')->get()->toArray();

        $DataImg = Configuraciones::where('cClave','imagenNosotros')->get()->toArray();
        
        $Contenido['UrlImagen'] = (!empty($DataImg)) ? $DataImg[0]['cValor'] :'';        

        $DataTitulo = Configuraciones::where('cClave','tituloNosotros')->get()->toArray();
        //dd($DataTitulo);
        if(!empty($DataTitulo)){
            $Contenido['TituloNosotros']    = $DataTitulo[0]['cValor'];
            $Contenido['HistoriaNosotros']  = $DataTitulo[0]['cDescripcion'];
        }

        $DataTitulo = Configuraciones::where('cClave','infoMision')->get()->toArray();

        if(!empty($DataTitulo)){
            $Contenido['TituloMision']    = $DataTitulo[0]['cValor'];
            $Contenido['Mision']            = $DataTitulo[0]['cDescripcion'];
        }

        $DataTitulo = Configuraciones::where('cClave','infoVision')->get()->toArray();

        if(!empty($DataTitulo)){
            $Contenido['TituloVision']    = $DataTitulo[0]['cValor'];
            $Contenido['Vision']            = $DataTitulo[0]['cDescripcion'];
        }

        $DataTitulo = Configuraciones::where('cClave','infoValores')->get()->toArray();

        if(!empty($DataTitulo)){
            $Contenido['TituloValores']    = $DataTitulo[0]['cValor'];
            $Contenido['Valores']            = $DataTitulo[0]['cDescripcion'];
        }

        $Contenido['section'] = 'Nosotros';

    	return view('nosotros_marpe')->with('Contenido',$Contenido)->with('RRSS',$this->Arreglo);
    }

    public function contacto(){
        

        $Contenido = array();
        $DatosInicio = Configuraciones::get()->toArray();

        foreach ($DatosInicio as $Index => $Valor) {

            if($Valor['cClave'] == 'DireccionInfo'){
                $Contenido['DireccionInfo'] = $Valor['cValor'];                
            }
            if($Valor['cClave'] == 'TelefonoInfo'){
                $Contenido['TelefonoInfo'] = $Valor['cValor'];
            }            

            if($Valor['cClave'] == 'CorreoInfo'){
                $Contenido['CorreoInfo'] = $Valor['cValor'];
            }  
            if($Valor['cClave'] == 'WebInfo'){
                $Contenido['WebInfo'] = $Valor['cValor'];
            }  

            if($Valor['cClave'] == 'CorreoMail'){
                $Contenido['CorreoMail'] = $Valor['cValor'];
            } 
        }
                                                
        $Contenido['section'] = 'Contacto';        
        return view('contacto_marpe')->with('Contenido',$Contenido)->with('RRSS',$this->Arreglo);
    }

    public function catalogo(){

        
        $Contenido['section'] = 'Productos';
        //$QueryCategoria->select('producto.idProducto','producto.nombre as nombreProd','producto.descripcion','producto.categoria','categoria.nombre as nombreCate');
        //$QueryCategoria->leftJoin("categoria","categoria.idCategoria","=","producto.categoria");
        

        //Obtengo todas las categorias
        $DataCategorias = Categoria::select('categoria.idCategoria','categoria.nombre as nombreCate')//,'subcategorias.cNombre as nombreSubcategoria')
                        //->leftJoin("subcategorias","categoria.idCategoria","=","subcategorias.idcategoria")                           
                        ->where('activo',1)
                        ->get()
                        ->toArray();

        //Recorro para obtener si la categoria tiene subcategorias
        foreach($DataCategorias as $indice => $balor){            
            $DataCategorias[$indice]['subcategorias'] = Subcategoria::where('idcategoria', intval($balor['idCategoria']))->get()->toArray();           
        }                        
        //dd($DataCategorias);
        $DataProductos = array();
        //dd(Productos::get()->toArray());

        //Recorro las categorias y si tienen subcategorias
        foreach ($DataCategorias as $index => $Valor) {
            
            $tempProductos = Productos::select('producto.idProducto','producto.nombre as nombreProd','producto.descripcion','producto.categoria','producto.subcategoria')
                             ->where('categoria', $Valor['idCategoria'])
                             //->where('subcategoria',0)
                             ->get()
                             ->toArray();
            //dd($tempProductos);
            if(!empty($tempProductos)){
                $DataProductos[$index] = $tempProductos;
                $DataCategorias[$index]['categoria_productos'] = $tempProductos;
            }    

            $productosSubcategoriaTemporal = [];
            if(!empty($Valor['subcategorias'])){
                foreach($Valor['subcategorias'] as $indices => $contenido){
                    $ProductosSubcategoria = Productos::select('producto.idProducto','producto.nombre as nombreProd','producto.descripcion','producto.subcategoria')
                             ->where('subcategoria', $contenido['idsubcategoria'])
                             ->get()
                             ->toArray();
                    
                    if(!empty($ProductosSubcategoria)){
                        $productosSubcategoriaTemporal[] = $ProductosSubcategoria;
                    }
                    //$ProductoSub                             
                }
                $DataCategorias[$index]['subcategorias_productos'] = $productosSubcategoriaTemporal;
            } 
            /*$tempProd = Productos::select('producto.idProducto','producto.nombre as nombreProd','producto.descripcion','producto.categoria')
                             ->where('subcategoria', $Valor['subcategoria'])
                             ->get()
                             ->toArray();  */

                  
        }
        
        //dd($DataProductos);
        //dd($DataCategorias);

        /*echo "<pre>";
        print_r($DataProductos);
        echo "</pre>";*/
        //exit();
        return view('productos_marpe')
                ->with('Contenido',$Contenido)
                ->with('Categorias',$DataCategorias)
                ->with('Productos',$DataProductos)
                ->with('RRSS',$this->Arreglo);
    }

    public function registro(){
        $Contenido['section'] = '';
        return view('sesion_marpe')->with('Contenido',$Contenido)->with('RRSS',$this->Arreglo);
    }

    public function guia(){
    	return view('guia');
    }
    

    

    public function sesion(){
    	return view('sesion')->with('RRSS',$this->Arreglo);
    }

    public function resetPass(){
        return view('resetPassword');
    }

    public function inspiracion(){
    	return view('inspiracion');
    }

    public function vistaperfil(){
        return view('usuarios_cliente.miPerfil');
    }

    public function cargaChangeUpload(){

        if(!Auth::check()){
            redirect('/');
        }

        return view('changemail');
    }

}
