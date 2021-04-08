<?php

namespace App\Entity;

// The UrlType field is a text field that prepends the submitted value with a given protocol (e.g. http://) if the submitted value doesn’t already have a protocol.
// https://symfony.com/doc/4.4/reference/forms/types/url.html

class LongUrl
{
    protected $longUrl;
    protected $shortUrl;

    public function getLongUrl(): string
    {
        return $this->longUrl;
    }

    public function setLongUrl(string $longUrl): void
    {
        $this->longUrl = $longUrl;
    }

    public function getShortUrl(): ?\DateTime
    {
        return $this->shortUrl;
    }

    // shortify function is in UrlFormController.php
}
