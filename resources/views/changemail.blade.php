        <div id="total">
            <div class="contenedor">
                <h1><div id="tittleSesion">Cambio de correo</div><div id="tittleRegistre">&nbsp;&nbsp;&nbsp;</div></h1>
            </div>
        </div>
        <div class="cuerpoacerca">
            <div class="contenedor">
                <div class="medio">
                    <div class="row">
                        <div class="col-lg-12 formulario">
                            <div id="test"></div>
                            <form method="post" enctype="multipart/form-data" id="form_correo">
                                {{ csrf_field() }} 
                                <br><br>
                                <div class="wrap">
                                    @include('errorUser')
                                        @if(\Session::has('exito'))
                                            {!!\Session::get('exito')!!}
                                            @unset($mensaje)
                                        @endif
                                    <div class="mat-div">
                                        <label for="correo" class="mat-label">Correo</label>
                                        <input type="email" class="mat-input" name="email" id="email" value="{{Auth::user()->email}}">
                                    </div>
                                <!--<br>
                                    <div class="mat-div">
                                        <label for="password" class="mat-label">Contraseña</label>
                                        <input type="password" class="mat-input" name="password" id="password">
                                    </div>-->                                                                    
                                </div>

                                <!--<br><br>
                                <label for="correo">E-mail</label>
                                <input type="text" name="correo" required id="correo" class="form-control" placeholder="E-mail"><br>
                                
                                <label for="password">Contraseña:</label>
                                <input type="password" name="password" required id="password" class="form-control" placeholder="Contraseña">-->

                                <br>
                                <div class="sum" style="text-align: center;">
                                    <div class="row">
                                        <div class="col align-self-center">
                                            <input id="send" onclick="changeMail();" class="form-control btn btn-outline-danger form_correo" value="Cambiar" style="width:150px;">
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
  