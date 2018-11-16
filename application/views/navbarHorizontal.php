 <div id="navbar" class="navbar navbar-default">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>
    <div class="navbar-container" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header pull-left">
            <a   href="<?=base_url()?>index.php/controlador" class="navbar-brand">                        
                Accces Control                       
            </a>
        </div>
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">  
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img alt="image" class="img-circle" src="<?=base_url()?>recursos/img/44188856_2129703183728151_5226147524674322432_n.jpg" width="40" height="40" />
                        <span class="user-info">
                            <small>Bienvenido,</small>
                            <?php echo $_SESSION['datosUsuario']['nombre']; ?>
                        </span>
                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>
                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="<?=base_url()?>index.php/controlador/perfil_usuario">
                                <i class="ace-icon fa fa-user"></i>
                                Perfil de Usuario
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>                                    
                            <a href="<?php echo site_url('controlador/logout');?>">
                                <i class="ace-icon fa fa-power-off"></i>
                                Salir
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
