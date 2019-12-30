<?php

namespace App\Sms;

use GuzzleHttp\Client;

class SmsMessage implements SmsInterface
{
    protected $phones = [];

    protected $message;



    public function addPhones(Array $phones){
           $this->phones = $phones;
    }
    
    public function addMessage(String $message){
           $this->message = $message;
    }


    public function send()
    {


       $request =  new Client();
       $response = $request->request('POST', env('SMS_API_URL') , [
       'form_params' => [
              'api_key' => env('SMS_API_KEY') ,
              'method' => 'sms' ,
              'sender' => 'ID' ,
              'to' =>   implode(",",$this->phones) ,
              'message' => $this->message
        ]
       ]);
       
       return $response->getBody()->getContents();
    }

}
