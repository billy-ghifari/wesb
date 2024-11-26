<?php

namespace App\Http\Controllers;

use App\Models\Bannerslide;
use App\Models\Datakegiatan;
use App\Models\DataPaket;
use App\Models\Penggunainform;
use App\Models\Post;
use App\Models\Produk;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
	{
		$data_galery = Datakegiatan::get();
		$data_paket = DataPaket::get();
		$data_banner = Bannerslide::get();
		$data_artikel = Post::latest()->take(3)->get();
		// dd($data_banner );
		return view('landing/index',compact('data_artikel','data_paket','data_banner','data_galery'));
	}

	public function artikelall()
	{
		$data_artikel = Post::latest()->paginate(9);
		return view('landing/artikelall',compact('data_artikel'));
	}

	public function tentang()
	{
		return view('landing/about');
	}
	public function produk()
	{
		$data_produk = Produk::get();
		return view('landing/product',compact('data_produk'));
	}
	public function kontak()
	{
		return view('landing/contact');
	}

	public function Actaddpengguna(Request $request)
	{
		$request->validate([
			'nama_pengguna' => 'required',
			'email_pengguna' => 'required',
            'nomor_pengguna' => 'required',
		]);
		$input = $request->all();
		// dd($input);
		
			try {
				Penggunainform::create($input)->with('success','Post created successfully.');;
			} catch (Throwable $e) {
				dd($e);
			}
		
		return redirect()->route('landing.kontak');
	}

}
