<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newLaravelTips extends Mailable
{
    use Queueable, SerializesModels;

    public $date;

    public function __construct($date)
    {
        $this->date = $date;
    }

    public function build()
    {
        return $this
        // ->from(config('mail.from.address'))
        ->from('ajtomo@eliteteclda.com', $this->date['email'])
        ->subject($this->date['assunto'])
        ->view('elementos.message')
        ->with('date', $this->date);
    }
}
