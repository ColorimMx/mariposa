<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;


class GuiaIReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $datos = $this->msg ;
        $subject = 'Guia de Referencia I - '. $datos['empleado'].' '.$datos['nombres'] .' '. $datos['a_paterno'].' '. $datos['a_materno'];
        $from = 'mariposa@colorim.com.mx';
        $fromname = 'GuiaReferenciaI@Mariposa';
        $reply = $datos['email'];
        $replyname = $datos['nombres'];
        $pdf = PDF::loadView('pdf.guiaReferenciaI',$datos);

        return $this->view('emails.guiaIReceived')->subject($subject)->from($from, $fromname)->replyTo($reply, $replyname)
            ->attachData($pdf->output(), $subject.'.pdf')
            ;
    }
}
