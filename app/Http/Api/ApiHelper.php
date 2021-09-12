<?php

namespace App\Http\Api;

class ApiHelper {
    const STATUS_OK = 200;
    const STATUS_BAD = 400;
    const STATUS_NOT_FOUND = 404;

    const MSG_OK = "La llamada a la API se ha completado correctamente";
    const MSG_BAD = "El servidor no ha podido procesar la solicitud";
    const MSG_NOT_FOUND = "No se ha encontrado nada";
}
