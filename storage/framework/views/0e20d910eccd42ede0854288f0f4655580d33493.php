
<!DOCTYPE html>
<html lang="pt-br">
     <head>
        <meta charset="utf-8">
        <!-- <link rel="icon" href="img/fav-icon.png" type="image/x-icon" /> -->
        <meta name="description" content="Tudo que você precisa saber sobre o esporte no IFRS - Campus Ibirubá"

        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Site IFRS-Sports - Página Inicial - Home"/>
        <meta property="og:description" content="Tudo que você precisa saber sobre o esporte no IFRS - Campus Ibirubá"/>
        <meta property="og:url" content=""/>
        <meta property="og:image" content=""/>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon.ico">

        <!-- Title Até 70 caracteres -->
        <!-- Description Até 140 caracteres -->
        <title>IFRS Sports</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/responsivo-tablet.css">
        <link rel="stylesheet" type="text/css" href="css/responsivo.css">
        <link rel="stylesheet" type="text/css" href="css/FONTES.css">

    </head>
    <body>

    <div id="app">
        <nav class="nav-bar">
            <div class="container_12 iago">
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    

                    <!-- Right Side Of Navbar -->
                    <ul class="grid_12 ">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item adm">
                                <a class="textd" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                        
                        <?php else: ?>
                                <li class="grid_4" style="margin-top:20px;">
                                <a id="navbarDropdown" class="textd" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" style="font-size:18px;"aria-expanded="false" v-pre>
                                   Bem vindo, <?php echo e(Auth::user()->name); ?> !<span class="caret"></span>
                                </a>
                                </li>

                                <div class="grid_">
                                <li style="margin-top:20px;">    
                                <a class="textd2" style="font-size:15px;margin-top:20px;" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                                </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        
        <!--FIM HORARIOS-->
        <!-- MENU-->
        <header class="menu-area">
            <div class="container_12">
                <div class="grid_4 logo-menu">
                   <a href="home.html"> <img src="img/logoif.png"></a>
                </div>
                <div class="grid_8">
                    <ul class="list-menu">
                       <li class="active"><a href="competicao.html">Competições</a></li>
                        <li><a href="esportes.html">Esportes</a></li>
                        <li><a href="home.html#sobre">Sobre</a></li>
                      
                    </ul>
                </div>
            </div>
        </header>
        <!--FIM MENU-->
        <!-- BANER-->
        <section class="baner-area-contato">
            <div class="container_12 ">
                <div class="grid_5 contatook">
                    <h2>COMPETIÇÕES</h2>
                </div>    
            </div>
        </section>
        <!-- FIMBANER -->

        <?php $__currentLoopData = $eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        

       <section class="evento">
            <div class="container_12">
                <div class="grid_16">

                    <div class="grid_8">
                            <!-- coloca a variavel de nome do evento-->

                            <h1> <a style="color:#fff; font-weight:bold; "href="/eventos/<?php echo e($eventos->id); ?>"><?php echo e($eventos->titulo); ?></a></h1>
                             
                            <h2 style="font-size:23px;"> <img src="img/icone.png" style="widht:30px; height:30px; vertical-align: middle;"><?php echo e($eventos->local); ?></h2>


                            <h4 style="font-size:20px; "><?php echo e(\Carbon\Carbon::parse($eventos->data)->format('d/m/Y h:m')); ?></h4>
                            <button type="submit" value="submit" onclick="location. href='/eventos/<?php echo e($eventos->id); ?>/edit'" class="btn-comp1"style="background:#646464"><strong>EDITAR</strong></button>
                             <button type="submit" value="submit" onclick="location. href='/eventos/<?php echo e($eventos->id); ?>/delete'" class="btn-comp2"><strong>EXCLUIR</strong></button>
                        </div>



                    <div class="grid_4 btns">

                        <h3> Esportes Disputados</h3>
                        <hr/>
                        <?php $__currentLoopData = $eventos->esportes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $esportes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <button type="submit" value="submit" onclick="location. href= '/esportes/<?php echo e($esportes->id); ?>'" class="btn-comp"><strong><?php echo e($esportes->nome); ?></strong></button>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <br><br>
                                   </div>

                </div>
            </div>
       </section>
        <hr/>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   



       <!-- INICIO FOOTER -->
        <footer class="footer-area">
            <div class="container_12">
                <h6>Todos os Direitos Reservados - IFRS Sports - 2019</h6>
            </div>
        </footer>
        <!-- FIM FOOTER -->
    </body>
</html>

<?php /**PATH /home/linuxifrs/Área de Trabalho/Trabalho_Final_Laravel/resources/views/eventos/list.blade.php ENDPATH**/ ?>