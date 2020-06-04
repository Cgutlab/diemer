<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class solicitudMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->data["archivo"] != null){
            $path = storage_path('app/'.$this->data["archivo"]);
            return $this->view('page.presupuesto.mail')
            ->with(['data' => $this->data])
            ->attach($path)
            ->subject('Mensaje de Presupuesto del Sitio WEB');
        }
        else{
            return $this->view('page.presupuesto.mail')
            ->with(['data' => $this->data])
            ->subject('Mensaje de Presupuesto del Sitio WEB');
        }
    }
}
