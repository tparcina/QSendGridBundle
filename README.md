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
---

### Update ```AppKernel.php```
```
$bundles = [
	...
    new QAlliance\QSendgridBundle\QAllianceQSendgridBundle(),
];
```

### Update ```config.yml```

```
# QSendgrid Configuration
q_alliance_q_sendgrid:
    no_reply_email: NO_REPLY_EMAIL
    sendgrid_api_key: SENDGRID_API_KEY
```



## Basic usage

#### Get QSendgrid mailer service from controller:

```php
$qs = $this->get('qalliance.qsendgrid');

// Send email to given address with subject and content - returns bool
$result = $qs->send('to@example.com', 'My Subject', '<h1>This is a QSendgrid test email.</h1>');
```

#### Sending html email with attachments:

```php
$attachmentUrls = [
	'./assets/attachments/sample1.jpg',
	'./assets/attachments/sample2.jpg'
];


$qs = $this->get('qalliance.qsendgrid');


// Send email to given address with subject, content and attachments - returns bool
$result = $qs->send('to@example.com', 'My Subject', '<h1>This is a QSendgrid test email with attachments.</h1>', $attachmentUrls);
```

## Authors

* *Vicko Franic* - *Initial work* - [Github](https://github.com/vickofranic)