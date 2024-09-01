<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Page;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', function () {
    return view('beranda');
});
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/prestasi', function () {
    return view('prestasi');
});
// Route::get('/articles', function () {
//     return view('articles', ['title' => 'Blog', 'pages' => Page::all()]);
// });
// Route::get('/articles', function () {
//     $pages = Page::paginate(10); // 10 adalah jumlah item per halaman, sesuaikan sesuai kebutuhan
//     dd($pages);
//     return view('articles', ['title' => 'Blog', 'pages' => $pages]);
// });
Route::get('{categorySlug}/{postSlug}', [PostController::class, 'showByCategoryAndTitle'])
     ->name('category.post.show');


// Route::get('tentang/{postTitle}', [PostController::class, 'showByCategoryAndTitle'])
//     ->name('category.post.show');
// Route::get('paket-wisata/{postTitle}', [PostController::class, 'showByCategoryAndTitle'])
//     ->name('category.post.show');
// Route::get('produk/{postTitle}', [PostController::class, 'showByCategoryAndTitle'])
//     ->name('category.post.show');
// // Route for 'Tentang' dropdown items
// Route::get('tentang/pariwisata', function () {
//     return view('tentang.pariwisata', ['title' => 'Pariwisata', 'posts' => Post::all()]);
// });
// Route::get('tentang/sejarah', function () {

//     return view('tentang.sejarah', ['title' => 'Sejarah']);
// });

// // Route for 'Paket Wisata' dropdown items
// Route::get('paket-wisata/live-in', function () {
//     return view('paket-wisata.live-in', ['title' => 'Live In']);
// });
// Route::get('paket-wisata/education', function () {
//     return view('paket-wisata.education',['title' => 'Education']);
// });
// Route::get('paket-wisata/outbond', function () {
//     return view('paket-wisata.outbond',['title' => 'Outbond']);
// });
// Route::get('paket-wisata/camping', function () {
//     return view('paket-wisata.camping', ['title' => 'Camping']);
// });
// Route::get('paket-wisata/tracking', function () {
//     return view('paket-wisata.tracking', ['title' => 'Tracking']);
// });
// Route::get('paket-wisata/ldk', function () {
//     return view('paket-wisata.ldk', ['title' => 'Latihan Dasar Kepemimpinan']);
// });
// Route::get('paket-wisata/susur-sungai', function () {
//     return view('paket-wisata.susur-sungai', ['title' => 'Susur Sungai']);
// });
// Route::get('paket-wisata/jeep-tour', function () {
//     return view('paket-wisata.jeep-tour', ['title' => 'Jeep Tour']);
// });

// // Route for 'Seni Budaya' dropdown items
// Route::get('seni-budaya/saparan', function () {
//     return view('seni-budaya.saparan', ['title' => 'Saparan']);
// });
// Route::get('seni-budaya/suronan', function () {
//     return view('seni-budaya.suronan', ['title' => 'Suronan']);
// });
// Route::get('seni-budaya/takbiran', function () {
//     return view('seni-budaya.takbiran', ['title' => 'Takbiran']);
// });
// Route::get('seni-budaya/mocopatan', function () {
//     return view('seni-budaya.mocopatan', ['title' => 'Mocopatan']);
// });
// Route::get('seni-budaya/ketoprak', function () {
//     return view('seni-budaya.ketoprak', ['title' => 'Ketoprak']);
// });
// Route::get('seni-budaya/wayang-kulit', function () {
//     return view('seni-budaya.wayang-kulit', ['title' => 'Wayang Kulit']);
// });
// Route::get('seni-budaya/incling', function () {
//     return view('seni-budaya.incling', ['title' => 'Incling']);
// });
// Route::get('seni-budaya/karawitan', function () {
//     return view('seni-budaya.karawitan', ['title' => 'Karawitan']);
// });

// // Route for 'Produk' dropdown items
// Route::get('produk/kuliner', function () {
//     return view('produk.kuliner', ['title' => 'Kuliner']);
// });
// Route::get('produk/kriya', function () {
//     return view('produk.kriya', ['title' => 'Kriya']);
// });
// Route::get('produk/fashion', function () {
//     return view('produk.fashion', ['title' => 'Fashion']);
// });

// // Route for 'Akomodasi' dropdown items
// Route::get('akomodasi/penginapan', function () {
//     return view('akomodasi.penginapan', ['title' => 'Penginapan']);
// });
// Route::get('akomodasi/transportasi', function () {
//     return view('akomodasi.transportasi', ['title' => 'Transportasi']);
// });
// Route::get('akomodasi/rumah-makan', function () {
//     return view('akomodasi.rumah-makan', ['title' => 'Rumah Makan']);
// });

// // Route for 'Artikel'
// Route::get('/artikel', function () {
//     return view('artikel', ['posts' => Post::all(), ['title' => 'Artikel']]);
// });

// // Route for 'Prestasi'
// Route::get('/prestasi', function () {
//     return view('prestasi', ['title' => 'Prestasi Desa']);
// });

// // Route for 'Kontak'
// Route::get('/contact', function () {
//     return view('contact');
// });

