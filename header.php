<?php 
    function header(){
        echo '
        <header id="main-menu">
        <a href="index.html" class="hover"><img src="src/logo-edulab.png" alt="logo" width="120"></a>
        <div class="box-pesquisa">
           <input type="text" id="pesquisa" placeholder="pesquisar..." />
           <i class="bx bx-search"></i>
        </div>
        <a href="login.html">
           <button id="login">
              LOGIN <i class="bx bxs-user-circle"></i>
           </button>
        </a>
        </header>
  
        <header id="header2">
            <ul>
            <li>
                <button class="botao"><a href="informatica.html">Informática</a></button>
            </li>
            <li class="dropdown">
                <button class="botao"><a href="portugues.html">Português</a></button>
                <div class="dd-menu">
                    <a href="portugues.html">Tudo</a>
                    <a href="#">1° ano</a>
                    <a href="#">2° ano</a>
                    <a href="#">3° ano</a>
                    <a href="#">4° ano</a>
                    <a href="#">5° ano</a>
                </div>
            </li>
            <li class="dropdown">
                <button class="botao"><a href="matematica.html">Matemática</a></button>
                <div class="dd-menu">
                    <a href="matematica.html">Tudo</a>
                    <a href="#">1° ano</a>
                    <a href="#">2° ano</a>
                    <a href="#">3° ano</a>
                    <a href="#">4° ano</a>
                    <a href="#">5° ano</a>
                </div>
            </li>
            <li class="dropdown">
                <button class="botao"><a href="ciencias.html">Ciências</a></button>
                <div class="dd-menu">
                    <a href="ciencias.html">Tudo</a>
                    <a href="#">1° ano</a>
                    <a href="#">2° ano</a>
                    <a href="#">3° ano</a>
                    <a href="#">4° ano</a>
                    <a href="#">5° ano</a>
                </div>
            </li>
            <li class="dropdown">
                <button class="botao"><a href="historia.html">História</a></button>
                <div class="dd-menu">
                    <a href="historia.html">Tudo</a>
                    <a href="#">3° ano</a>
                    <a href="#">4° ano</a>
                    <a href="#">5° ano</a>
                </div>
            </li>
            <!-- <li class="dropdown">
                <button class="botao"><a href="geografia.html">Geografia</a></button>
                <div class="dd-menu">
                    <a href="geografia.html">Tudo</a>
                    <a href="#">3° ano</a>
                    <a href="#">4° ano</a>
                    <a href="#">5° ano</a>
                </div>
            </li> -->
            <li>
                <button class="botao"><a href="artes.html">Artes</a></button>
            </li>
            </ul>
        </header>
        '
    }
?>