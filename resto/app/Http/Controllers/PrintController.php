<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cart;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Session;
use function PHPSTORM_META\map;


class PrintController extends Controller
{
    public function getPrinten($id)
    {
        $bestelling = session()->get('bestelling')->find($id);
        $items = $bestelling->cart->items;
        $dompdf = new Dompdf();
        $html = '';

        foreach ($items as $item=>$value) {
            //dd($bestelling);
        $html .=  $value['item']['naam'] . " | ";
        $html .=" Aantal: ". $value['qty'] . " | ";
        $html .=" Prijs: €".$value['prijs'] . " | ";

        $html .= "<br>";
        }
        $dompdf->loadHtml("<html><body>
        <h2>Tafelnummer: {$bestelling->tafelnummer} </h2>
        {$html}<br><hr><br>
        Totaalprijs = €{$bestelling->cart->totalPrice}
        </body></html>");
        $dompdf->render();
        $dompdf->stream();
    }

}
