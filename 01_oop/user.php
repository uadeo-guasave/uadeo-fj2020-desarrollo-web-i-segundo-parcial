<?php
class User {
    // propiedades o atributos
    private $data = [
        'id' => '',
        'name' => '',
        'passwd' => '',
        'email' => '',
        'firstname' => '',
        'lastname' => ''
    ];

    // __get() y __set()
    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else {
            return null;
        }
    }

    public function __set($name, $value) {
        if (array_key_exists($name, $this->data)) {
            $this->data[$name] = $value;
        }
    }
}

// crear un objeto (instanciar la clase User)
$usuario = new User();
$usuario->id = 1;
echo $usuario->id;