<?php

namespace QAlliance\QSendgridBundle\Services;

use QAlliance\QSendgrid;

/**
* 	QSendgridService
*/
class QSendgridService
{
	private $qsendgrid;

    /**
     * QSendgridService constructor.
     *
     * @param $noReplyEmail
     * @param $sendgridApiKey
     * @throws \Exception
     */
	public function __construct($noReplyEmail, $sendgridApiKey)
	{
		$this->qsendgrid = new QSendgrid($noReplyEmail, $sendgridApiKey);
	}

    /**
     * Send email with QSendgridService
     *
     * @param string $to Destination email address
     * @param string $subject Email subject
     * @param string $content HTML content
     * @param array $attachments Optional array of attachments (paths to files)
     * @param string $fromName
     * @return bool                Result
     */
	public function send($to, $subject, $content, $attachments = null, $fromName = 'No Reply')
	{
		return $this->qsendgrid->send($to, $subject, $content, $attachments, $fromName);
	}

    /**
     * Send email with QSendgridService, html and text plain content required
     *
     * @param string $to Destination email address
     * @param string $subject Email subject
     * @param string $content HTML content
     * @param $plainTextContent Plain text content
     * @param array $attachments Optional array of attachments (paths to files)
     * @param string $fromName
     * @return bool                Result
     */
    public function sendWithTextPlain($to, $subject, $content, $plainTextContent, $attachments = null, $fromName = 'No Reply')
    {
        return $this->qsendgrid->sendWithTextPlain($to, $subject, $content, $plainTextContent, $attachments, $fromName);
    }
}