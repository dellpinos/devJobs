<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificacionController extends Controller
{

    public function __invoke(Request $request)
    {

        $notif = auth()->user()->unreadNotifications;

        // Limpiar notificaciones
        auth()->user()->unreadNotifications->markAsRead();

        $antiguas_notif = auth()->user()->notifications;

        return view('notificaciones.index', [
            'notificaciones' => $notif,
            'antiguas_notificaciones' => $antiguas_notif
        ]);
    }
}
