<?php
class Usuario extends Persona {
    public string $alias;
    private string $contraseña;

    public function __construct() {
        parent::__construct();
    }

    /**
     * Metodo para generar contraseñas utilizando el algoritmo de encriptación bcrypt
     */
    public function generarConstraseña(string $cadena) {
        $this->contraseña = password_hash($cadena, PASSWORD_DEFAULT);
        return $this->contraseña;
    }
}
