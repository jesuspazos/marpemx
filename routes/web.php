<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rutas para vistas -- MARPE
Route::get('/', 'Direccionador@index');
Route::get('catalogo','Direccionador@catalogo');
Route::get('nosotros/{section?}', 'Direccionador@nosotros');
Route::get('contacto', 'Direccionador@contacto');
Route::get('registro', 'Direccionador@registro');

Route::post('sendMail','ControladorHome@enviarMail');

//Rutas Panel control
Route::get('menuinicio', 'ControladorHome@menu_inicio');
Route::post('GuardarInformacion', 'ControladorHome@guardarInformacion');
Route::post('guardarContacto','ControladorHome@GuardaInformacionContacto');
Route::get('categoria','ControladorHome@Categoria');
Route::get('Archivos', 'ControladorHome@Archivos');

Route::post('GuardarArchivo', 'ControladorHome@SaveArchivo');

Route::get('altaProducto','ControladorHome@VistaProductos');
Route::post('productoSave','ControladorHome@productoSave');

Route::post('portada','ControladorHome@InformacionPortada');
Route::post('GuardarInicio','ControladorHome@GuardarSettings');
Route::post('display','ControladorHome@GetCategorias');
Route::post('displaysub','ControladorHome@GetSubCategorias');
Route::get('CategoriaCombo','ControladorHome@GetCategoriaCombo');
Route::get('SubcategoriaCombo/{id}','ControladorHome@GetSubcategoriaCombo');
Route::post('getitems','ControladorHome@GetItemsProductos');
Route::post('setImg','ControladorHome@procesaImagen');
Route::post('getbrand','ControladorHome@GetItemsMarca');
Route::post('getfiles','ControladorHome@GetItemsFiles');

Route::post('GuardarCategoria','ControladorHome@GuardarCategoria');
Route::post('GuardarSubategoria','ControladorHome@GuardarSubcategoria');

Route::post('VerifyCat','ControladorHome@ComprobarCategoria');
Route::post('DeleteCate','ControladorHome@EliminarCategoria');

Route::post('VerifySubCat','ControladorHome@ComprobarSubCategoria');
Route::post('DeleteSubCate','ControladorHome@EliminarSubCategoria');



Route::post('DeleteProd','ControladorHome@EliminarProducto');
Route::post('DeleteFile','ControladorHome@EliminarArchivo');


Route::get('resetear', 'Direccionador@resetPass');


Route::get('admin', function () {
    
    if(\Auth::user() != null && \Auth::user()->hasRole('Administrador')){
        return view('panel.panelcontrol');
    }

    return redirect('/');
});

Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    return "Cache is cleared";
});

//Rutas para Registro/Inicio de Usuario

/*Route::group(['prefix'=> 'ruta'],function(){
	Route::resource('enlace','ControlRegistro');
});*/

Route::post('altaUser', 'ControlRegistro@store');

/* JPJ Route::post('login', 'Auth\LoginController@credentiales');
Route::get('logout', 'Auth\LoginController@doLogout');*/

Route::get('cargarCompras', 'Auth\LoginController@cargacompras');

Route::get('miperfil','Auth\LoginController@vistaPerfil');
Route::get('uploadperfil','Auth\LoginController@vistaPerfil');


Route::post('updatePerfil','ControlRegistro@updatePerfil');
Route::get('upload', 'Direccionador@cargaChangeUpload');
Route::post('change', 'ControlRegistro@uploadMail');


//Rutas para area de productos
Route::get('altaprod', 'Productos_1@vistaaltaProducto');
Route::post('envio_alta', 'Productos_1@alta_prod');
Route::post('envio_edicion', 'Productos_1@update_prod');

Route::get('mujer', 'Productos_1@productosPrincipal');

Route::get('hombre', 'Productos_1@productosmen');

Route::get('detalle/{idprod} ', 'Productos_1@detalle_prod');
Route::get('vista_producto/{id_producto}', 'Productos_1@detalle_producto');
Route::get('remove/{idimg}/{idprod}', 'Productos_1@deleteimg');
Route::get('eliminar_prod/{idprod}', 'Productos_1@deleteitem');


//Rutas para usuarios_clientes

Route::get('all_user', 'UsuariosController@clientes_activos');
Route::post('alta_usuario', 'UsuariosController@alta_usuario');
Route::get('perfilCliente/{idUser?}', 'UsuariosController@vistaPerfil_panel');
Route::get('eliminar_user/{idUser?}', 'UsuariosController@eliminar_perfil');

Route::post('helpsend','UsuariosController@envioAyuda');


//Rutas vista pedidos

Route::get('viewPedido', 'VistaPedido@verPedidos');
Route::get('detallePedido/{idpedido?}', 'VistaPedido@vistaDetallePedido');
Route::post('cambio_status', 'VistaPedido@cambio_status');


Route::get('viewPedido2', function(){
	return view('pedidos.ventaRechaza');
});

Route::get('prueba', function()
{
    return view('pruebas');
});

//------------Ruta añadir al carrito

Route::post('add_carrito', 'Adicion_carrito@agregarcarrito');
Route::get('vista_carrito', 'Adicion_carrito@vistaCarrito');
Route::get('quitar/{index}', 'Adicion_carrito@quitarProducto');
Route::get('continuar', 'Adicion_carrito@llenarDatos');
Route::post('updateCar', 'Adicion_carrito@updateCarrito');
Route::post('comprobacionServices', 'Adicion_carrito@updateCosto');

//Route::post('terminarPedido', 'Adicion_carrito@finalizaPedido');

Route::post('terminarPedido', 'Adicion_carrito@getCreatePreference');

Route::get('succesBuy/{id}', 'Adicion_carrito@compraSatisfactoria');
Route::get('denegBuy', 'Adicion_carrito@compraDenegada');
Route::get('failBuy', 'Adicion_carrito@falloCompra');

//Ruta Para los Servicios de Fletes

Route::get('fletes', 'ControllerFlete@index');
Route::get('re/{id}', 'ControllerFlete@removeFlete');
Route::post('guarda_servicio','ControllerFlete@guardaServicio');


/*Route::get('vista_carrito', function(){
	return view('vista_carrito.micarrito');
});*/

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

/********************************************************************************************************************/
 // Authentication Routes...

        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::get('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
        

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register/verify/{code}', 'Auth\RegisterController@verificacion');


//RUTAS DE LA NUEVA APARENCIA OSEA CERVEZAS

Route::get('dynamicModal/{id_producto}/{cantidad?}','Productos_1@detalle_producto_modal');

Route::get('/', 'Direccionador@index');
Route::get('catalogo','Direccionador@catalogo');
Route::get('nosotros/{section?}', 'Direccionador@nosotros');
Route::get('contacto', 'Direccionador@contacto');
Route::get('registro', 'Direccionador@registro');



/********************************Rutas NewFront*********************************************/
Route::get('/beta', function(){
    return view('cuerpo.home');
});


Route::get('/nosotros_mar', function(){
    return view('cuerpo.nosotros_mar');
});


Route::get('/catalogo_mar', function(){
    return view('cuerpo.productos_mar');
});


//Route::get('nosotros/{section?}', 'Direccionador@nosotros');