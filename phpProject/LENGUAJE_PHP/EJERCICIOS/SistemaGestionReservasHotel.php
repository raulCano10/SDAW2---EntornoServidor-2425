<!DOCTYPE html>

<html>
<head> 
    <title> SISTEMA GESTION RESERVAS DE HOTEL </title>
</head>
<body>
    <?php
        $reservas = [];

        function registrarReserva(&$reservas, $habitacion, $nombreHuespued, $checkin, $checkout, $numPersonas, $estado = "pediente")
        {
            //EJERCICIO 1
            //Validar que la fecha de checKout sea posterior a la fecha de checkin
            if(strtotime($checkout) <= strtotime($checkin)){
              return  "ERROR LA fecha de checkout es posterior a la fecha de checkin";
            }

            //Validar que el numero de personas sea al menos 1
            if($numPersonas < 1){
                return  "ERROR El numero de personas debe ser al menos 1";
            }

            $reservas[] = 
            [
                "habitacion" => $habitacion,
                "nombreHuespued" => strtoupper($nombreHuespued),
                "checkin" => date("d-m-Y",strtotime($checkin)),
                "checkout" => date("d-m-Y",strtotime($checkout)),
                "numPersonas" => $numPersonas,
                "estado" => $estado

            ];

            return "Reserva registrada con exito";
        }

        //EJERCICIO 2
        function buscarReservaPorHabitacionRecursiva($reservas, $numeroHabitacion, $posicion = 0){

            //validar si llegas a la ultima posicion
            if($posicion >= count($reservas)){
                return null;
            }

            //Validar si has encontrado la habitación
            if($reservas[$posicion]['habitacion'] === $numeroHabitacion){
                echo "Habitacion encontrada";
                return $reservas[$posicion];
            }
            return buscarReservaPorHabitacionRecursiva($reservas, $numeroHabitacion,$posicion +1 );
        }

        //Buscar reserva por criterio
        function buscarReserva($reservas, $criterio, $valor){
            $reservasEncontradas = [];
            $encontrada = false;
            foreach($reservas as $reserva){
                //CONDICIONES
                if(
                   ($criterio === "habitacion" && $reserva['habitacion'] === (int)$valor)
                || ($criterio === "huesped" && strtoupper($reserva['nombreHuespued']) === strtoupper($valor))
                || ($criterio === "checkin" && $reserva['checkin'] === $valor)
                || ($criterio === "checkout" && $reserva['checkout'] === $valor)
                || ($criterio === "numPersonas" && $reserva['numPersonas'] === (int)$valor)
                || ($criterio === "estado" && strtoupper($reserva['estado']) === strtoupper($valor))
                )
                {
                    $reservasEncontradas[]=$reserva;
                    $encontrada = true;
                }
            }

            if($encontrada){
                print_r($reservasEncontradas);
            }else{
                echo "NO HEMOS ENCONTRADO NINGUNA HABITACION CON EL CRITERIO SOLICITADO";
            }
            
        }

        //CANCELAR RESERVA
        function cancelarReserva(&$reservas, $numeroHabitacion){
            foreach($reservas as $reserva){
                if($reserva['habitacion'] === $numeroHabitacion){
                    //si ya está cancelada pues que no cancele de nuevo
                    if($reserva['estado'] === "cancelada"){
                        echo "La habitacion {$numeroHabitacion} ya esta cancelada no es necesario cancelarla de nuevo";
                    }else{
                        $reserva['estado'] = "cancelada";
                        echo "Reserva cancelada correctamente";
                    }
                    
                }
            }
        }
        
        //Ordenar reservas por habitación
        function ordenarReservaPorHabitacion(&$reservas, $ordenASC_DESC){
            $reservasPorHabitacion = [];
            foreach ($reservas as $reserva) {
                $reservasPorHabitacion[$reserva['habitacion']] =  $reserva;
            }
            
            if($ordenASC_DESC){
                ksort($reservasPorHabitacion);
            }else{
                krsort($reservasPorHabitacion);
            }
            $reservas = [];
            //Recontruir el array reservas original
            foreach($reservasPorHabitacion as $reservaAux){
                $reservas[] = $reservaAux;
            }

            return $reservas;

        }

        //Mostrar reservas próximas
        function mostrarReservasProximas($reservas){
            $fecha_hoy = strtotime(date("d-m-Y"));
            $fecha_dentro_de_tres_dias = strtotime("+3 days");

            foreach($reservas as $reserva){
                $fecha_de_checkin = strtotime($reserva['checkin']);
                if($fecha_de_checkin >= $fecha_hoy && $fecha_de_checkin <= $fecha_dentro_de_tres_dias)
                {
                    echo "<pre>";
                    print_r($reserva);
                    echo "</pre>";

                }
            }

        }

        //Fusionar reservas
        function fusionarReservas(&$reservas, $nuevasReservas){
           
           foreach($nuevasReservas as $reservaNueva){
            $exite = false;

                foreach($reservas as $reserva){
                    if($reservaNueva['habitacion'] === $reserva['habitacion']){
                        $exite = true;
                        break;
                    }
                }

                if(!$exite){
                    $reservas[] = $reservaNueva;
                }
            }
        }

        //Eliminar reserva
        function eliminarReserva(&$reservas, $numeroHabitacion){
            $existe = false;
                 foreach($reservas as $key => $reserva){
                     if($reserva['habitacion'] === $numeroHabitacion){
                        unset($reservas[$key]);
                         $exite = true;
                         break;
                     }
                 }
 
                 if(!$exite){
                     echo "No se encontro habitacion";
                 }

         }

         //mostrar estadisticas
         function mostrarEstadisticas($reservas){

            $totalReservas = count($reservas);
            $confirmadas = 0;
            $Ocupadas = 0;
            $personasConfirmadas = 0;

            foreach($reservas as $reserva){
                if($reserva['estado'] === 'confirmada'){
                    $confirmadas++;
                    $Ocupada++;
                    $personasConfirmadas +=   $reserva['personas'];     
                }
            }

            $porcentajeOcupacion = ($confirmadas / $totalReservas) * 100;

            echo "totalReservas: {$totalReservas} <br>";
            echo "confirmadas: {$confirmadas} <br>";
            echo "Ocupadas: {$Ocupadas} <br>";
            echo "porcentajeOcupacion: {$porcentajeOcupacion} %<br>";
            echo "personasConfirmadas: {$personasConfirmadas} <br>";
         }

    ?>
</body>
</html>