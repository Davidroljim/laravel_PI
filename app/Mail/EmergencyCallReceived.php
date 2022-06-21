<?php

namespace App\Mail;

use App\Models\Incidencias;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmergencyCallReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $incidencias;
    public $receivers;

    public function __construct(Incidencias $incidencias)
    {
        $this->incidencias = $incidencias;
    }

    public function build()
    {
        return $this->view('mails.emergency_call');
    }

//$receivers = Incidencias::pluck('email');
//Mail::to($receivers)->send(new EmergencyCallReceived($incidencia));

}
