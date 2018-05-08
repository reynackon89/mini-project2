<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class gmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {

        $address = 'reynackon@gmail.com';

        $name = 'Reyn Ackon';

        $subject = 'Laravel Email - Test';

        return $this->view('emails.mailme')

            ->from($address, $name)

            ->subject($subject);

    }
}
