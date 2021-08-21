<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingFormSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $date;
    private $plan;
    private $woman;
    private $man;
    private $childwoman;
    private $childman;
    private $option1;
    private $name;
    private $email;
    private $zip;
    private $pref;
    private $address;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $entry )
    {
        //
        $this->date = $entry['date'];
        $this->plan = $entry['plan'];

        $this->woman        = $entry['woman'];
        $this->man          = $entry['man'];
        $this->childwoman   = $entry['childwoman'];
        $this->childman     = $entry['childman'];

        $this->option1 = $entry['option1'];

        $this->name     = $entry['name'];
        $this->email    = $entry['email'];
        $this->zip      = $entry['zip'];
        $this->pref     = $entry['pref'];
        $this->address  = $entry['address'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('webmaster@markupnet.jp')
            ->subject('自動送信メール')
            ->view('booking-form-mail')
            ->with([
                'date'      => $this->date,
                'plan'      => $this->plan,
                'woman'     => $this->woman,
                'man'       => $this->man,
                'childwoman'=> $this->childwoman,
                'childman'  => $this->childman,
                'option1'   => $this->option1,
                'name'      => $this->name,
                'email'     => $this->email,
                'zip'       => $this->zip,
                'pref'      => $this->pref,
                'address'   => $this->address,
            ]);
    }
}
