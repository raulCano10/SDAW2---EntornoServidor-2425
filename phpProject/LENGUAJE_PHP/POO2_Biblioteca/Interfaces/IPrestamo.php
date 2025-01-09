<?php

interface IPrestamo{
    public function prestarLibro($libro);
    public function devolverLibro($libro);
}
?>