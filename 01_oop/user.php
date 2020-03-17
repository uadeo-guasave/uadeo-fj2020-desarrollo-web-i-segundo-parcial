<?php
class User {
    // propiedades o atributos
    private $id;
    private $fields;

    // Constructor
    public function __construct() {
        $this->id = null;
        $this->fields = [
            'name' => '',
            'passwd' => '',
            'email' => '',
            'firstname' => '',
            'lastname' => ''
        ];
    }

    // __get() y __set()
    public function __get($name) {
        if ($name == 'id') {
            return $this->id;
        }

        if (array_key_exists($name, $this->fields)) {
            return $this->fields[$name];
        } else {
            return null;
        }
    }

    public function __set($name, $value) {
        if ($name == 'id') {
            $this->id = $value;
        }

        if (array_key_exists($name, $this->fields)) {
            $this->fields[$name] = $value;
        }
    }
}

// crear un objeto (instanciar la clase User)
$usuario = new User();
$usuario->id = 1;
echo $usuario->id;