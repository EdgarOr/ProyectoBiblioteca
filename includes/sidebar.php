   
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
                    <a href="index.php"><i class="fa fa-fw fa-home"></i> Inicio</a>
                </li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-book"></i> Libros <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Administrar Libros</li>
                    <li><a href="formularioRegistrarLibro.php">Registrar</a></li>
                    <li><a href="anadirEjemplar.php">Añadir ejemplares</a></li>
                    <li><a href="#">Eliminar</a></li>
                    
                  </ul>                  
                </li>
                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-share"></i> Préstamo <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">Administrar Préstamos</li>
                        <li><a href="formularioAltaPrestamo.php">Nuevo</a></li>
                        <li><a href="formularioPrestamoBuscar.php">Buscar</a></li>                        
                    </ul>        
                </li>
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-user"></i> Usuarios <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Administrar Usuarios</li>
                    <li><a href="formularioAltaUsuario.php">Registrar</a></li>
                    <li><a href="buscarUsuario.php">Buscar</a></li>
                    <li><a href="#">Eliminar</a></li>
                    
                  </ul>
                </li>
                <li>
                    <a href="contactanos.php"><i class="fa fa-fw fa-bank"></i> Contacto</a>
                </li>
                <li id="sesion" name="sesion">
                    <a href="login.php" ><i class="fa fa-fw fa-check"></i> Iniciar sesión</a>
                </li>
                <li>
                    <a href="catalogoLibros.php"><i class="fa fa-fw fa-search" ></i> Buscar</a>
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
    
    
    
    
