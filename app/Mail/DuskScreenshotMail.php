<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DuskScreenshotMail extends Mailable
{
    use Queueable, SerializesModels;

    private $files;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($files)
    {
        $this->files = $files;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        foreach ($this->files as $file) {
            $this->attach((string) $file);
        }

        return $this->subject('Travis-CI Dusk Screenshots')->markdown('mails.dusk-screenshots-mail', [
            'preheader' => 'We have some errors!',
        ]);
    }
}
