<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{


    public function index()
    {
        $mailData = [
            "title" => "Üdvözlés a Királytól",
            "body" => "Átvirrasztott éjszakák, száz el nem mondott szó",

            "image1" => "https://i.ytimg.com/vi/oqB5iUKAqDk/hqdefault.jpg?sqp=-oaymwEmCOADEOgC8quKqQMa8AEB-AHeA4AC4AOKAgwIABABGCMgWyh_MA8=&rs=AOn4CLB-IiOwjb2nwRQfGYr5ecKWbpJ5mg",
            "image2" => "https://images1-hu-secure.gs-static.com/products/4096x4096/2025/07/22/76bf471638534f7741a0d9face6673ef-zambo-jimmy-zambo-jimmy-a-budapest-sportcsarnokban-audio-kazetta.jpg",

            "jimmy_text" => "
        <h2>Kedves Barátaim, Drága Rajongóim!</h2>

        <p>
            Engedjétek meg, hogy most is a szívemből szóljak Hozzátok. 
            Mindig azt mondtam: <em>az ember addig él, amíg a dalát hallgatják</em>. 
            És Ti vagytok azok, akik miatt minden hangnak értelme van.
        </p>

        <p>
            Fogadjátok szeretettel, tisztelettel és azzal a szeretettel, amit én is 
            éreztem minden alkalommal, amikor felétek énekeltem. 
            Ti vagytok az én igazi családom a színpad előtt.
        </p>

        <p>
            <strong>Örökké a szívetekben:<br>Zámbó Jimmy</strong>
        </p>

        <hr>
        <p><em>„A zene ott kezdődik, ahol a szavak már kevesek.”</em></p>
    "
        ];



        Mail::to('zambojimmycsepelking@gmail.com')
            /* ->cc($moreUsers)
        ->bcc($evenMoreUsers) */
            ->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
    }
}
