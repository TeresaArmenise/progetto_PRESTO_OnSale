<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();

        $categs = 
        [
            [
                "name"=>"Arredamento", "img1" => "oggarrmus\armadio.jpg", "img2" => "oggarrmus\gu1_82sfwo_oa_frontlow_default.webp", "img3"=> "oggarrmus\Chair.jpg", "img4" => "oggarrmus\Closet.jpg",
            ],

            [
                "name" => "Oggettistica", "img1" => "oggarrmus\orologio.webp", "img2" => "oggarrmus\swarovski.jpg", "img3"=> "oggarrmus\bottles.jpg", "img4" => "oggarrmus\Oggettistica_vasi4-1024x683.jpg"
            ],

            [
                "name" => "Musica, Film e TV", "img1" => "oggarrmus\pexels-photo-27573377.webp", "img2" => "oggarrmus\musica.jpg", "img3"=> "oggarrmus\breaking.webp", "img4" => "oggarrmus\schinderlist.jpg"
            ],

            [
                "name" => "Elettronica e Smartphone", "img1" => "elebicsport\phone.jpg", "img2" => "elebicsport\pc.jpg", "img3"=> "elebicsport\pad.jpg", "img4" => "elebicsport\camera.jpg"
            ],

            [
                "name" => "Biciclette e Monopattini", "img1" => "elebicsport/bici.jpg", "img2" => "elebicsport/mono.jpg", "img3"=> "elebicsport/bici.webp", "img4" => "elebicsport/monop.jpg"
            ],

            [
                "name" => "Sport e Tempo Libero", "img1" => "elebicsport/racc.jpg", "img2" => "elebicsport/panca.jpg", "img3"=> "elebicsport\pesi.jpg", "img4" => "elebicsport/guanti.jpg"
            ],

            [
                "name" => "Abbigliamento e second-hand", "img1" => "abblibvincollez/jeans.jpg", "img2" => "abblibvincollez/felpa.webp", "img3"=> "abblibvincollez/jeans.webp", "img4" => "abblibvincollez/maglia.webp"
            ],

            [
                "name" => "Vini", "img1" => "abblibvincollez/champ.jpg", "img2" => "abblibvincollez\grandcuv.webp", "img3"=> "abblibvincollez/unnamed.jpg", "img4" => "abblibvincollez/vino.jpg"
            ],

            [
                "name" => "Collezionismo", "img1" => "abblibvincollez\moneta.jpg", "img2" => "abblibvincollez/coin.jpg", "img3"=> "abblibvincollez\immagini-di-fumetti-cds1l17hk2sbckt4.jpg", "img4" => "abblibvincollez/collection.jpg"
            ],

            [
                "name" => "Libri e Fumetti", "img1" => "abblibvincollez/book.jpg", "img2" => "abblibvincollez\diabolik.jpg", "img3"=> "abblibvincollez\lirbo.jpg", "img4" => "abblibvincollez\libri.jpg"
            ],
            
        ];

        return view('welcome' , compact('articles', 'categs'));
    }

    public function search(Request $request) {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);

        return view('search', ['articles' => $articles, 'query' => $query]);
    }
}