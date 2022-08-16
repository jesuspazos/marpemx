       <br>
     <div class="container">         
          <ul class="nav nav-tabs">
               <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Alta Productos</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#menu1">Lista Productos</a>
               </li>
          </ul>               

              
          <div class="col-lg-12" id='contents'>
               @if(isset($mensaje))
                    {!!$mensaje!!}
               @endif        


               

               <div class="tab-content"><br>
                    <div class="tab-pane container active" id="home">  
                         @if(\Session::has('exito'))
                              {!!\Session::get('exito')!!}                       
                         @endif                         
                      <form action="{{url('envio_alta')}}" enctype="multipart/form-data" id="form_prod2" class="col-12" method="POST">
                         {{ csrf_field() }} 
                         <h3>Alta de Producto</h3>
                         <div class="row" >                              
                              <div class="col">                                   
                                   <label for="name_prod">Nombre:</label>
                                   @if($errors->has('name_prod'))
                                        <div class="alert alert-danger" role="alert">
                                             <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
                                             <p>{{$errors->first('name_prod')}}</p>
                                        </div>
                                   @endif
                                   <input type="text" maxlength="70" name="name_prod" id="name_prod" value="{{old('name_prod')}}" required placeholder="Nombre" class="form-control">
                              </div>
                         </div>

                         <div class="row" >                              
                              <div class="col">                                   
                                   <label for="desc_prod">Descripción:</label>
                                    @if($errors->has('desc_prod'))
                                        <div class="alert alert-danger" role="alert">
                                             <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
                                             <p>{{$errors->first('desc_prod')}}</p>
                                        </div>
                                   @endif
                                   <textarea name="desc_prod" maxlength="255" id="desc_prod" required class="form-control" cols="30" rows="3">{{old('desc_prod')}}</textarea>
                              </div>
                         </div>

                         <div class="row" >                              
                              <div class="col">
                                   <label for="codigoInterno">Código interno:</label>
                                   @if($errors->has('codigoInterno'))
                                        <div class="alert alert-danger" role="alert">
                                             <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
                                             <p>{{$errors->first('codigoInterno')}}</p>
                                        </div>
                                   @endif
                                   <input type="text" name="codigoInterno" id="codigoInterno" maxlength="25" value="{{old('codigoInterno')}}" required class="form-control">
                              </div>
                         </div>

                         <div class="row" >                              
                              <div class="col">                                   
                                   <label for="precio_prod">Precio:</label>
                                   
                                   @if($errors->has('precio_prod'))
                                        <div class="alert alert-danger" role="alert">
                                             <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
                                             <p>{{$errors->first('precio_prod')}}</p>
                                        </div>
                                   @endif
                                   <input type="text" name="precio_prod" id="precio_prod" value="{{old('precio_prod')}}" required class="form-control">
                              </div>
                         </div>

                         <!--<div class="row" >                              
                              <div class="col">
                                   <label for="seccion_prod">Seccion:</label>
                                   <select name="seccion_prod" id="seccion_prod" class="form-control" required>
                                        <option value="">Seleccione una seccion</option>
                                        <option value="HOMBRE" {{old('seccion_prod') == 'HOMBRE' ? 'selected' : ''}}>Hombre</option>
                                        <option value="MUJER" {{old('seccion_prod') == 'MUJER' ? 'selected' : ''}}>Mujer</option>
                                   </select>
                              </div>                                                       
                         </div>-->

                                                
                         <!--<div class="row">
                              <div class="col-md-12">
                                  <div class="card" style="margin:50px 0">                              
                                        <div class="card-header">Disponibilidad de tallas</div>                                     
                                             <ul class="list-group list-group-flush">
                                                  <li class="list-group-item">
                                                       Talla Extra Chica
                                                            <label class="switch ">
                                                                 <input type="checkbox" class="success" {{old('txCh') ? 'checked' : ''}} name="txCh">
                                                                      <span class="slider"></span>
                                                            </label>
                                                  </li>
                                                  <li class="list-group-item">
                                                       Talla Chica
                                                            <label class="switch ">
                                                                 <input type="checkbox" class="success" {{old('tCh') ? 'checked' : ''}} name="tCh">
                                                                      <span class="slider"></span>
                                                            </label>
                                                  </li>
                                                  <li class="list-group-item">
                                                       Talla Mediana
                                                            <label class="switch ">
                                                                 <input type="checkbox" class="success" {{old('tM') ? 'checked' : ''}} name="tM">
                                                                      <span class="slider"></span>
                                                            </label>
                                                  </li>
                                                  <li class="list-group-item">
                                                       Talla Grande
                                                            <label class="switch ">
                                                                 <input type="checkbox" class="success" {{old('tG') ? 'checked' : ''}} name="tG">
                                                                      <span class="slider"></span>
                                                            </label>
                                                  </li>
                                                  <li class="list-group-item">
                                                       Talla Extra Grande
                                                            <label class="switch ">
                                                                 <input type="checkbox" class="success" {{old('txG') ? 'checked' : ''}} name="txG">
                                                                      <span class="slider"></span>
                                                                 </label>
                                                  </li>
                                             </ul>
                                        </div> 
                                   </div>
                              </div>-->
                         <br>

                         <div class="row">
                              <div class="col">                                  
                                   @if($errors->has('imagen.0'))
                                        <div class="alert alert-danger" role="alert">
                                             <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
                                             <p>{{$errors->first('imagen.0')}}</p>
                                        </div>
                                   @endif
                                   <input multiple="true" name="imagen[]" type="file" class="form-control" required value="{{old('imagen')}} ">
                              </div>
                         </div>      

                         <br>                                            

                         <div class="row" >                              
                              <div class="col-md-12">
                                   <!--<div class="form-check form-check-inline">
                                        <label class="form-check-label" for="estatus_prod">Activo: <input type="checkbox" name="estatus_prod" id="estatus_prod" class="form-check-input"></label>
                                   </div>-->
                              <ul class="list-group list-group-flush">
                                   <li class="list-group-item">
                                        Activo
                                             <label class="switch" for="estatus_prod">
                                                  <input type="checkbox" class="info" name="estatus_prod" id="estatus_prod">
                                                       <span class="slider"></span>
                                             </label>
                                   </li>
                              </ul>
                              </div>
                         </div>                      

                         <br>
                         <input type="submit" id="send" class="btn btn-outline-danger" value="Guardar">
                       </form>
                    </div><!--finhome-->
                    <br><br><br>

                    <div class="tab-pane container fade" id="menu1">
                         <div class="table-responsive">
                              @if(isset($conten))

                                   {!!$conten!!}
          
                              @endif
                         </div>
                         <br>
                         <br>
                         <br>
                    </div>
          </div>
     </div>