<?php
    class Usuario{
    public $Nombre;
    public $Email;
    public $Tipo;
    private $Clave;
    protected $FechaRegistro;
    static $Estado = "Activo";

    function __construct(string $nombre, string $email, string $tipo)
    {
        $this->Nombre = $nombre;
        $this->Email = $email;
        $this->Tipo = $tipo;
        $this->Clave = rand();
    }
    }
?>