<?php
namespace App\Services;
use Illuminate\Support\Facades\Config;

class SmtpService
{
    public static function set($smtp)
    {
        Config::set('mail.mailers.smtp', [
            'transport'  => 'smtp',
            'host'       => $smtp->host,
            'port'       => $smtp->port,
            'encryption' => $smtp->encryption,
            'username'   => $smtp->username,
            'password'   => $smtp->password,
        ]);

        Config::set('mail.from.address', $smtp->from_email);
        Config::set('mail.from.name', $smtp->from_name);
    }
}
