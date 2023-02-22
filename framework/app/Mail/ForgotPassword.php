<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Lang;
use ayoubgr;

class ForgotPassword extends Mailable {
	use Queueable, SerializesModels;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public $email;
	public $token;
	public function __construct($email, $token) {
		$this->email = $email;
		$this->token = $token;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {

		return $this->from(ayoubgr::get("email"))->subject(Lang::get('passwords.Reset your Password'). " - " . ayoubgr::get("app_name"))->markdown('emails.forget_password');

	}
}
