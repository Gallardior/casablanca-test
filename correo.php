<?php

        $nombre=$_POST['nombre'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $fecha=$_POST['fecha'];
        $horario=$_POST['horario'];
        $numPersonas=$_POST['numPersonas'];
        $header= "From: " .$correo . "\r\n";

        $mensaje="Este mensaje fue enviado por :".$nombre.",\r\n"."Su telefono es: ".$telefono.",\r\n"."Su correo es: ".$correo.",\r\n"."La fecha para reservar : ".$fecha.",\r\n"."Horario en que se desea reservar : ".$horario.",\r\n"."Cantidad de personas : ".$numPersonas.",\r\n";
        $para="edwinbaltazar1996@gmail.com";
        $asunto="Reserva de : ".$nombre;

        if(mail($para,$asunto,$mensaje,$header)){
            echo("<script language='javascript'>
            alert('Mensaje enviado, muchas gracias.');
            window.location.href = 'http://TUSITIOWEB.COM';
            </script>"); 
            

        }else{ //Si el mensaje no se envía muestra el mensaje de error 

            echo("Error: Su mensaje no pudo ser enviado, intente más tarde");
     }


?>