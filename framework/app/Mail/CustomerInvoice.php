<?php
namespace App\Mail;

use App\Model\BookingIncome;
use App\Model\Bookings;
use ayoubgr;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerInvoice extends Mailable
{
    use SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $booking;
    public $invoice_id;
    public function __construct(Bookings $booking)
    {
        $this->booking = $booking;
        $this->invoice_id = BookingIncome::where('booking_id', $booking->id)->latest()->first();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(ayoubgr::get("email"))->subject('Generate Invoice. Invoice ID: ' . $this->invoice_id->income_id)->markdown('emails.customer_invoice');
    }
}
