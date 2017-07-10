<?php

namespace QAlliance\QSendgridBundle\Services;

use QAlliance\QSendgrid as QSendgrid;

/**
* 	QSendgridService
*/
class QSendgridService
{
	private $qsendgrid;
	
	function __construct($noReplyEmail, $sendgridApiKey)
	{
		$this->qsendgrid = new QSendgrid($noReplyEmail, $sendgridApiKey);
	}

	/**
	 * Send email with QSendgridService
	 * 
	 * @param  string $to 			Destination email address
	 * @param  string $subject 		Email subject
	 * @param  string $content 		HTML content
	 * @param  array $attachments	Optional array of attachments (paths to files)
	 * @return bool 				Result
	 */
	public function send($to, $subject, $content, $attachments = null)
	{
		return $this->qsendgrid->send($to, $subject, $content, $attachments);
	}
}