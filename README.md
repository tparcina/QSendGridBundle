# QSendgridBundle
Symfony bundle implementation of QSendgrid mailer service.

## Prerequisites
You will need to provide:
- Sendgrid API key, which can be created in [Sendgrid user interface](https://app.sendgrid.com/settings/api_keys)
- No Reply email address

> Key example: **SG.QDzWlz_gShWMVi8svP...**

## Installing
Install QSendgridBundle with composer:

```
composer require q-alliance/qsendgridbundle
```

## Setup

#### Update ```AppKernel.php```
```
$bundles = [
	...
    new QAlliance\QSendgridBundle\QAllianceQSendgridBundle(),
];
```

#### Update ```config.yml```

```
# QSendgrid Configuration
q_alliance_q_sendgrid:
    no_reply_email: NO_REPLY_EMAIL
    sendgrid_api_key: SENDGRID_API_KEY
```



## Basic usage

#### Get QSendgrid mailer service from controller and send simple email:

```php
$qs = $this->get('qalliance.qsendgrid');

$result = $qs->send('to@example.com', 'My Subject', '<h1>This is a QSendgrid test email.</h1>');
```

#### Sending html email with attachments:

```php
$attachmentUrls = [
	'./assets/attachments/sample1.jpg',
	'./assets/attachments/sample2.jpg'
];


$qs = $this->get('qalliance.qsendgrid');

$result = $qs->send('to@example.com', 'My Subject', '<h1>This is a QSendgrid test email with attachments.</h1>', $attachmentUrls);
```

#### Add fromName as last parameter (optional):

```php
$qs = $this->get('qalliance.qsendgrid');

$result = $qs->send('to@example.com', 'My Subject', '<h1>This is a QSendgrid test email.</h1>', null, 'From Name');
```

#### Sending email with html and plain text content:

```php 
$qs = $this->get('qalliance.qsendgrid');

$result = $qs->sendWithTextPlain('to@example.com', 'My Subject', '<h1>This is a QSendgrid test email with plain text.</h1>', 'This is a QSendgrid test email with plain text', null, 'From Name');
```

## Authors

* *Vicko Franic* - [Github](https://github.com/vickofranic)