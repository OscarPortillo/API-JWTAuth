<?php

namespace App\Http\Api;

use App\Models\User;
use App\Http\Api\ApiHelper;

class ApiBase {

    public function listaUsuarios() {
        $users = User::all();

        if($users != null) {
            $estado = ApiHelper::STATUS_OK;
            $mensaje = ApiHelper::MSG_OK;
            return response()->json(['estado' => $estado, 'mensaje' => $mensaje, 'datos' => $users]);
        }
        $estado = ApiHelper::STATUS_BAD;
        $mensaje = ApiHelper::MSG_BAD;
        return response()->json(['estado' => $estado, 'mensaje' => $mensaje, ['datos' => $users]]);
    }

    public function showUser($id) {
        $users = User::find($id);

        if($users != null) {
            $estado = ApiHelper::STATUS_OK;
            $mensaje = ApiHelper::MSG_OK;
            return response()->json(['estado' => $estado, 'mensaje' => $mensaje, 'datos' => $users]);
        }
        $estado = ApiHelper::STATUS_NOT_FOUND;
        $mensaje = ApiHelper::MSG_NOT_FOUND;
        return response()->json(['estado' => $estado, 'mensaje' => $mensaje, ['datos' => $users]]);
    }
}
