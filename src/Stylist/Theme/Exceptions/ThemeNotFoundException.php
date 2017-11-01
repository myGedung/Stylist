<?php

namespace myGedung\Stylist\Theme\Exceptions;

class ThemeNotFoundException extends \Exception
{
	public function __construct($themeName)
    {
        $this->message = "Theme [$themeName] is not registered with Stylist.";
    }
}