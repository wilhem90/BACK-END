<?php
    require_once('ClassUsuario.php');
    $objUsuarioUno = new Usuario("Wilhem Wundt Maxime", "wilhemmaxime90@gmail.com", "Administrador");

    $objUsuarioDos = new Usuario("Adventia hyppolite", "adventiahyppolite94@gmail.com", "Vendedora");

    
    echo $objUsuarioUno -> getperfil();
    echo $objUsuarioDos -> getperfil();
    $objUsuarioDos-> seteditarDatos("1234"); //Realizamos a troca da clave por aqui
    print "<br><br><br>";
    echo $objUsuarioDos -> getperfil();
?>