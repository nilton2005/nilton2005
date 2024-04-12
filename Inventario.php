<?php
class ArtefactoAutomotriz {
    protected $modelo;
    protected $precio;

    public function __construct($modelo, $precio) {
        $this->modelo = $modelo;
        $this->precio = $precio;
    }

    public function mostrarDetalle() {
        return "Modelo: " . $this->modelo . " - Precio: $" . $this->precio;
    }
}

class Radio extends ArtefactoAutomotriz {
    private $bandas;
    private $nombre;

    public function __construct($modelo, $precio, $bandas, $nombre) {
        parent::__construct($modelo, $precio);
        $this->bandas = $bandas;
        $this->nombre = $nombre;
    }

    public function mostrarDetalle() {
        return parent::mostrarDetalle() ." - Nombre: " . $this->nombre ." - Bandas: " . $this->bandas ;
    }
}

class Llanta extends ArtefactoAutomotriz {
    private $tamaño;
    private $nombre;
    public function __construct($modelo, $precio, $tamaño, $nombre) {
        parent::__construct($modelo, $precio);
        $this->tamaño = $tamaño;
        $this->nombre = $nombre;
    }

    public function mostrarDetalle() {
        return parent::mostrarDetalle() . " - Nombre: ".$this->nombre." - Tamaño: " . $this->tamaño;
    }
}

// Crear instancias y mostrar detalles
$radio = new Radio("Pioneer X-123", 150, "AM/FM", "RADIO");
$llanta = new Llanta("Michelin XZ", 100, "17 pulgadas", "LLANTA");
echo $radio->mostrarDetalle() . "</br>";
echo $llanta->mostrarDetalle() . "</br>";







?>



