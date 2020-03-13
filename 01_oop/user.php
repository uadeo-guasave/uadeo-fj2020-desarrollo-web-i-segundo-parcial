<?php
class User {
    // propiedades o atributos
    private $id;
    private $name;
    private $passwd;
    private $email;
    private $firstname;
    private $lastname;

    // getters y setters
    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }
}

// crear un objeto (instanciar la clase User)
$usuario = new User();
$usuario->setId(1);
echo $usuario->getId();