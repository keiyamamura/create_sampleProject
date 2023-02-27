<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicantMail extends Mailable
{
    use Queueable, SerializesModels;

    public $owner;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($owner)
    {
        $this->owner = $owner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('求人応募のお知らせ')
            ->view('emails.applicant')
            ->with([
                'owner' => $this->owner
            ]);
    }
}
