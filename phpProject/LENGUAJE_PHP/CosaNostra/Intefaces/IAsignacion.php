<?php

//Interface de AsignacionController
interface IAsignacion {
    public function asignarOperacion($id_miembro, $id_operacion);
    public function procesarTraidores($traidores);
}

?>