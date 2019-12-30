<?php

namespace App\Sms;

interface SmsInterface
{
   public function addPhones(Array $phones);
   public function addMessage(String $message);
}
