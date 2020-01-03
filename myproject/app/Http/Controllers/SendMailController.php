<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    public function send(){
    	$objDemo = new \stdClass(); #dung model de truy van du lieu
    	$objDemo->nguoi_nhan = 'Cuong HQ';
    	$objDemo->noi_sinh = 'TPHCM';
    	$objDemo->nam_sinh = '1999';
    	$objDemo->nguoi_gui = 'HQC';

    	Mail::to("gau911.ch@gmail.com")->send(new SendMail($objDemo));

    	echo "Da gui mail thanh cong";
    }
}
