<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentMail extends Mailable {


	use Queueable,
	 SerializesModels;
	public $user;
	public $body;

	public function __construct( $user, $body ) {
		$this->user = $user;
		$this->body = $body;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		return $this->view( 'emails.comment' );
	}

}
