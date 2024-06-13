<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
    [
        "title" => "Bloods",
        "slug" => "bloods",
        "body" => "Bloods adalah salah satu brand pakaian lokal yang populer di kalangan anak muda Indonesia. Brand ini dikenal dengan desain yang modern dan stylish, serta mengedepankan kualitas bahan yang baik. Bloods sering mengeluarkan koleksi yang terinspirasi dari budaya streetwear, dengan fokus pada t-shirt, hoodie, dan aksesoris lainnya. Mereka juga sering berkolaborasi dengan artis lokal dan komunitas untuk menciptakan produk yang unik dan eksklusif.",
    ],
    [
        "title" => "Spectrum Distro",
        "slug" => "spectrumDistro",
        "body" => "Spectrum Distro adalah salah satu distro yang menawarkan berbagai macam produk fashion dari berbagai brand lokal maupun internasional. Distro ini menyediakan berbagai jenis pakaian mulai dari kaos, jaket, celana, hingga aksesoris seperti topi dan tas. Spectrum Distro dikenal dengan konsep tokonya yang unik dan nyaman, serta koleksi pakaian yang selalu mengikuti tren terbaru.",
    ],
    [
        "title" => "Platt Mars",
        "slug" => "plattMars",
        "body" => "Platt Mars adalah brand fashion lokal yang juga bergerak di segmen streetwear. Brand ini menawarkan berbagai produk fashion seperti kaos, jaket, dan aksesoris dengan desain yang kreatif dan edgy. Platt Mars sering mengusung tema-tema yang unik dan berbeda dalam setiap koleksinya, menjadikan produk mereka memiliki ciri khas tersendiri di pasar fashion lokal.",
    ],
    [
        "title" => "Eiger",
        "slug" => "eiger",
        "body" => "Eiger adalah salah satu brand terkenal di Indonesia yang berfokus pada produk-produk outdoor dan adventure. Dikenal dengan kualitasnya yang tinggi, Eiger menyediakan berbagai perlengkapan untuk kegiatan outdoor seperti hiking, climbing, dan camping. Produk-produk Eiger meliputi tas, sepatu, jaket, dan berbagai perlengkapan pendukung lainnya. Brand ini sangat populer di kalangan pecinta alam dan petualang karena daya tahannya yang kuat dan fungsionalitasnya.",
    ],
    [
        "title" => "Celcius",
        "slug" => "celcius",
        "body" => "Celcius adalah brand fashion lokal yang menawarkan berbagai produk pakaian dan aksesoris dengan gaya yang kasual dan modern. Produk-produk Celcius mencakup t-shirt, kemeja, celana, jaket, dan aksesoris seperti topi dan tas. Brand ini mengutamakan kenyamanan dan kualitas bahan, serta desain yang mengikuti tren fashion terkini, membuatnya populer di kalangan remaja dan dewasa muda.",
    ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
        
    }

    public static function find($slug)
    {
        $posts = static::all();

            return $posts->firstWhere('slug', $slug);
    }
}
