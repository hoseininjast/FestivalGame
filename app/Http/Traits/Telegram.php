<?php

namespace App\Http\Traits;

use Carbon\Carbon;

trait Telegram
{

    private $api = 'https://api.telegram.org/bot5388000802:AAFmKaDaHs1RRGQllJlD2I0J3-Bl2pjhAwg';
    private $userid = [
//        '108206197',
        '5259927721',
        '76203510',
    ];
    public $Message = '';

    public function SendMessage($Message , $Receiver = null)
    {
        $this->Message = urlencode($Message);

        if ($Receiver && in_array($Receiver , $this->userid)){
            $this->CallApi($Receiver);
        }else{
            foreach ($this->userid as $user) {
                $this->CallApi($user);
            }
        }


    }

    private function CallApi($ChatID)
    {
        return file_get_contents("https://api.telegram.org/bot5388000802:AAFmKaDaHs1RRGQllJlD2I0J3-Bl2pjhAwg/sendMessage?chat_id=$ChatID&text=$this->Message&parse_mode=html");


    }
}
