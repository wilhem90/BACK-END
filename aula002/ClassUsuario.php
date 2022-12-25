<?php
    class Usuario{
    private $Nombre; //Neste caso quando e private devemos trabalhar com get e set
    private $Email;
    private $Tipo;
    private $Clave;
    protected $FechaRegistro;
    static $Estado = "Activado";

    function __construct(string $nombre, string $email, string $tipo)
    {
        $this->Nombre = $nombre;
        $this->Email = $email;
        $this->Tipo = $tipo;
        $this->Clave = rand();
        $this->FechaRegistro = date('d/m/y H:m:s');
        // $this->Estado = $estado;
    }

    public function getperfil(){
        echo "<br><br><hr>O seu nombre é: ".$this->Nombre;
        echo "<br><br><hr>O seu email é: ".$this->Email;
        echo "<br><br><hr>A sua função é: ".$this->Tipo;
        echo "<br><br><hr>A sua chave é: ".$this->Clave;
        echo "<br><br><hr>O seu estado: ".self::$Estado;
        echo "<br><br><hr>A sua da de inscrito: " . $this->FechaRegistro."<br><br>";
    }

    public function seteditarDatos(string $pass){
        $this->Clave = $pass;
    }


    }//Fim da classUsuario
 
?>