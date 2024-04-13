<?php

class ImagenColoreada {
    public $imagen;
    public $tono;
    public $tamano;
    public $ubicacion;

    public function __construct($imagen, $tono, $tamano, $ubicacion) {
        $this->imagen = $imagen;
        $this->tono = $tono;
        $this->tamano = $tamano;
        $this->ubicacion = $ubicacion;
    }
    
    public function agregarEfecto($efecto) {
        $this->efecto = $efecto;
        echo "Se ha agregado el efecto: $efecto\n";
    }
    
    public function cambiarTono($nuevoTono) {
        $this->tono = $nuevoTono;
        echo "El tono de la imagen ha sido cambiado.\n";
    }
    
    public function mostrarInformacion() {
        echo "Información de la imagen:\n";
        echo "Imagen: $this->imagen\n";
        echo "Tono: $this->tono\n";
        echo "Tamaño: $this->tamano\n";
        echo "Ubicación: $this->ubicacion\n";
    }
}

$imagen1 = new ImagenColoreada("Niño en bicicleta", "Cálido", "Grande", "Parque");
$imagen2 = new ImagenColoreada("Niña en bicicleta", "Frío", "Pequeño", "Jardín");

$imagen1->mostrarInformacion();

$imagen2->agregarEfecto("Brillo");
