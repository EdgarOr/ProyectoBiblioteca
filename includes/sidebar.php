   
       <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                      Nabu
                    </a>
                </li>
                
                <li>
                    <a href="#"><i class="fa fa-fw fa-home"></i> Inicio</a>
                </li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-book"></i> Libros <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Administrar Libros</li>
                    <li><a href="formularioRegistrarLibro.php">Registrar</a></li>
                    <li><a href="#">Añadir ejemplares</a></li>
                    <li><a href="#">Eliminar</a></li>
                    
                  </ul>
                </li><li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> Usuarios <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Administrar Usuarios</li>
                    <li><a href="formularioAltaUsuario.php">Registrar</a></li>
                    <li><a href="#">Buscar</a></li>
                    <li><a href="#">Eliminar</a></li>
                    
                  </ul>
                </li>
                <li>
                    <a href="contactanos.php"><i class="fa fa-fw fa-bank"></i> Contacto</a>
                </li>
                <li>
                    <a href="login.php" ><i class="fa fa-fw fa-check"></i> Iniciar sesión</a>
                </li>
                <li>
                    <span >
                        <a   href="catalogoLibros.php">
                            <i class="fa fa-fw fa-search" ></i>  
                        </a>
                         <input type="text" class="form-control" placeholder="Libro, autor o categoría"/>
                    </span>                       
                </li>                
            </ul>
            
          
        </nav>
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
           </div>
        <!-- /#sidebar-wrapper -->

        

    </div>
    <!-- /#wrapper -->