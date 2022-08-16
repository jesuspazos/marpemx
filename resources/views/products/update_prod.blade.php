

     <div class="row" style="z-index: 2;">
          <div class="col-lg-6" id='contents'>
                
                <form action="{{url('envio_edicion')}}" enctype="multipart/form-data"  id="form_prod2" class="col-lg-12" method="POST">
                    {{ csrf_field() }} 
                         <h3>Editar Producto</h3>
                         <div class="row" >                              
                              <div class="col">
                                   <label for="name_prod">Nombre:</label>
                                   @if($errors->has('name_prod'))
                                        <div class="alert alert-danger" role="alert">
                                             <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
                                             <p>{{$errors->first('name_prod')}}</p>
                                        </div>
                                   @endif
                                   <input type="text" value="{{$oneproduct[0]->producto_nombre}}" name="name_prod" id="name_prod" placeholder="Nombre" class="form-control">
                                   <input type="hidden" name="idregistro" id="idregistro" value="{{$oneproduct[0]->identifica_prod}}">
                              </div>
                         </div>

                         <div class="row" >                              
                              <div class="col">
                                   <label for="desc_prod">Descripcion:</label>
                                   @if($errors->has('desc_prod'))
                                        <div class="alert alert-danger" role="alert">
                                             <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
                                             <p>{{$errors->first('desc_prod')}}</p>
                                        </div>
                                   @endif
                                   <textarea name="desc_prod" id="desc_prod" class="form-control" cols="30" rows="3">{{$oneproduct[0]->descripcion}}</textarea>
                              </div>
                         </div>

                         <div class="row" >                              
                              <div class="col">
                                   <label for="codigoInterno">Código interno:</label> 
                                   <input type="text" name="codigoInterno" id="codigoInterno" maxlength="25" value="{{$oneproduct[0]->codigoInterno}}" required class="form-control">
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
                                   <input type="text" value="{{$oneproduct[0]->precio}}" name="precio_prod" id="precio_prod" class="form-control">
                              </div>
                         </div>
                         <br>

                         <!--<div class="row" >                              
                              <div class="col">
                                   <label for="seccion_prod">Seccion:</label>
                                   <select name="seccion_prod" id="seccion_prod" class="form-control">
                                        <option value="{{$oneproduct[0]->seccion}}">{{$oneproduct[0]->seccion}}</option>
                                        <--<option value="">Seleccione una seccion</option>---
                                        <option value="HOMBRE">Hombre</option>
                                        <option value="MUJER">Mujer</option>
                                   </select>
                              </div>
                         </div>
                         
                         <div class="row">
                              <div class="col-md-12">
                                  <div class="card" style="margin:50px 0">
                                         <-- Default panel contents --
                                        <div class="card-header">Disponibilidad de tallas</div>
                                     
                                             <ul class="list-group list-group-flush">
                                                  <li class="list-group-item">
                                                       Talla Extra Chica
                                                            <label class="switch ">
                                                                 <input type="checkbox" {{($oneproduct[0]->txCh) ? "checked" : ""}} class="success" name="txCh">
                                                                      <span class="slider"></span>
                                                            </label>
                                                  </li>
                                                  <li class="list-group-item">
                                                       Talla Chica
                                                            <label class="switch ">
                                                                 <input type="checkbox" {{($oneproduct[0]->tCh) ? "checked" : ""}} class="success" name="tCh">
                                                                      <span class="slider"></span>
                                                            </label>
                                                  </li>
                                                  <li class="list-group-item">
                                                       Talla Mediana
                                                            <label class="switch ">
                                                                 <input type="checkbox" {{($oneproduct[0]->tM) ? "checked" : ""}} class="success" name="tM">
                                                                      <span class="slider"></span>
                                                            </label>
                                                  </li>
                                                  <li class="list-group-item">
                                                       Talla Grande
                                                            <label class="switch ">
                                                                 <input type="checkbox" {{($oneproduct[0]->tG) ? "checked" : ""}} class="success" name="tG">
                                                                      <span class="slider"></span>
                                                            </label>
                                                  </li>
                                                  <li class="list-group-item">
                                                       Talla Extra Grande
                                                            <label class="switch ">
                                                                 <input type="checkbox" {{($oneproduct[0]->txG) ? "checked" : ""}} class="success" name="txG">
                                                                      <span class="slider"></span>
                                                                 </label>
                                                  </li>
                                             </ul>
                                        </div> 
                                   </div>
                              </div>
                         -->

                         
                         
                         <div class="row">
                              <div class="col">
                                   @if($errors->has('imagen.0'))
                                        <div class="alert alert-danger" role="alert">
                                             <buton type="button" class='close' data-dismiss="alert"> &times;</buton>
                                             <p>{{$errors->first('imagen.0')}}</p>
                                        </div>
                                   @endif
                                   <input multiple="true" name="imagen[]" type="file" class="form-control">
                              </div>
                         </div>   

                         <div class="row" >                              
                              <div class="col-md-12">
                                   <!--<div class="form-check form-check-inline">
                                        <label class="form-check-label" for="estatus_prod">Activo: <input type="checkbox" name="estatus_prod" id="estatus_prod" class="form-check-input"></label>
                                   </div>-->
                              <ul class="list-group list-group-flush">
                                   <li class="list-group-item">
                                        Activo
                                             <label class="switch" for="estatus_prod">
                                                  <input type="checkbox" class="info" {{($oneproduct[0]->activo) ? "checked" : ""}} name="estatus_prod" id="estatus_prod">
                                                       <span class="slider"></span>
                                             </label>
                                   </li>
                              </ul>
                              </div>
                         </div>                      

                         <br>
                         <input type="submit" id="send" class="btn btn-outline-danger" value="Actualizar">
                         <a href="{{url('eliminar_prod',$oneproduct[0]->identifica_prod)}}" class="btn btn-danger">Eliminar</a>
                         <a href="{{url('altaprod')}}" class="btn btn-warning">Cancelar</a>
               </form>
               <br><br>

          </div>
          <div class="col-lg-6" id="areablack">
               <br>
               @if(isset($conten))

                    {!!$conten!!}
     
               @endif
          </div>
     </div>    