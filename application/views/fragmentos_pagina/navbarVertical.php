 <div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>
    <div id="sidebar" class="sidebar responsive">
        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>                
        <ul class="nav nav-list">
            <?php

            foreach ($modulo as $datosModulo) {
                if ($datosModulo['nombre'] == 'Inicio') {
                    echo '<li class="active">
                    <a href="../'.$datosModulo['url'].'">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text">'.$datosModulo['nombre'].'</span>
                    </a>
                    <b class="arrow"></b>
                    </li>';
                }else{
                    echo '<li class="">
                    <a href="../'.$datosModulo['url'].'"
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> '.$datosModulo['nombre'].'</span>
                    </a>
                    </li>';
                }                        
            }
            ?>                    
        </ul><!-- /.nav-list -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
    </div>