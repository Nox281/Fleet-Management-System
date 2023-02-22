<?php
namespace App\Mail;

use App\Model\Bookings;
use ayoubgr;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DriverBooked extends Mailable
{
    use SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $booking;
    public function __construct(Bookings $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(ayoubgr::get("email"))->subject('Your Vehicle is Booked. Booking ID: ' . $this->booking->id)->markdown('emails.booked_driver');
    }
}
