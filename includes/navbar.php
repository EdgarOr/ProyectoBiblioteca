
        <nav class="navbar navbar-inverse " role="navigation" width="100%">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only" >Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> 
                    <a class="navbar-brand" href="#">Nabu</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left navegar">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Libros<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="formularioRegistrarLibro.php">Registrar</a>
                                </li>
                                <li>
                                    <a href="#">Eliminar</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Usuarios<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Registrar</a>
                                </li>
                                <li>
                                    <a href>Buscar</a>
                                </li>
                                <li>
                                    <a href="#">Eliminar</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="round-about.php">Contacto</a>
                        </li>

                    </ul>

                    <form class="navbar-form navbar-left busqueda" role="search" >
                        <div class="form-group">
                            <span >
                                <a  class="btn btn-default" href="portafolio-libros.php">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    
                                    Buscar
                                </a>
                          </span>
                          <input type="text" class="form-control" placeholder="Libro, autor o categoría"/>   
                        </div> 
                    </form>

                     <ul class="nav navbar-nav navbar-right navegar">
                        <li class="dropdown">
                            <!-- Button trigger modal -->
                            <a href="" data-toggle="modal" data-target="#myModal">
                              Inicio sesión
                            </a>
                            
             
                        </li>
                    </ul>   
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              <h4 class="modal-title">Iniciar sesión</h4>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="form-control" id="email" placeholder="ejemplo@correo.com" type="email">
                              </div>
                              <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input class="form-control" id="password" placeholder="********" type="password">
                              </div>
                              <p class="text-right"><a href="#">¿Olvidó su contraseña?</a></p>
                            </div>
                            <div class="modal-footer">
                              <a href="#" data-dismiss="modal" class="btn">Cancelar</a>
                              <a href="#" class="btn btn-primary">Aceptar</a>
                            </div>
                          </div>
                        </div>
                    </div> 

                </div>    
            </div>
            
        </nav>
        <div class="container-fluid">
