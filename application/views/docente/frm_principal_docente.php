<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title><?php echo $this->config->item('tituloPagina');?></title>
    <meta name="description" content="Static &amp; Dynamic Tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/recursos_plantilla_general/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/recursos_plantilla_general/assets/font-awesome/4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/recursos_plantilla_general/assets/fonts/fonts.googleapis.com.css" />
    <link rel="stylesheet" href="<?=base_url()?>recursos/recursos_plantilla_general/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
    <script src="<?=base_url()?>recursos/recursos_plantilla_general/assets/js/ace-extra.min.js"></script>
    </head>
    <body class="no-skin">
    <?php include("application/views/fragmentos_pagina/navbarHorizontal.php");?>
    <?php include("application/views/fragmentos_pagina/navbarVertical.php");?>
    <div class="main-content">
                <div class="main-content-inner">   
                    <div class="page-header">
                        <br>
                        <h1>
                            <?php echo $this->config->item('tituloPagina');?>
                        </h1>
                    </div><!-- Cabecera del Contenido -->
                    <div class="page-content">  
                         
                    </div><!-- Contenido Pagina Principal -->
                </div>
    </div><!-- Contenido Principal -->
    <!-- Scripts Necesarios -->  
    <?php include("application/views/fragmentos_pagina/footer.php");?>      
    <script src="<?=base_url()?>recursos/recursos_plantilla_general/assets/js/jquery.2.1.1.min.js"></script>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='<?=base_url()?>recursos/recursos_plantilla_general/assets/js/jquery.min.js'>"+"<"+"/script>");
    </script>
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='<?=base_url()?>recursos/recursos_plantilla_general/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="<?=base_url()?>recursos/recursos_plantilla_general/assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>recursos/recursos_plantilla_general/assets/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>recursos/recursos_plantilla_general/assets/js/jquery.dataTables.bootstrap.min.js"></script>
    <script src="<?=base_url()?>recursos/recursos_plantilla_general/assets/js/dataTables.tableTools.min.js"></script>
    <script src="<?=base_url()?>recursos/recursos_plantilla_general/assets/js/dataTables.colVis.min.js"></script>
    <script src="<?=base_url()?>recursos/recursos_plantilla_general/assets/js/ace-elements.min.js"></script>
    <script src="<?=base_url()?>recursos/recursos_plantilla_general/assets/js/ace.min.js"></script>
    </body>
</html>