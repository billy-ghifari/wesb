<?php

namespace App\Http\Controllers;

use App\Models\Bannerslide;
use App\Models\Datakegiatan;
use App\Models\DataPaket;
use Illuminate\Support\Facades\Hash;
use App\Models\Penggunainform;
use App\Models\Post;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

	//--------------------//
	//------Artikel------//
	//--------------------//
	//--------------------//
	//--------------------//
	//--------------------//
	//--------------------//

    public function dtpost()
	{
		$posts = Post::latest()->paginate(5);
		return view('dashboard.artikeldt', compact('posts'));
	}

    public function addpost()
	{
		return view('dashboard.artikelact');
	}
	public function Actaddpost(Request $request)
	{
		$request->validate([
			'judul_post' => 'required',
			'isi_post' => 'required',
            'img_post' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
			'kategori' => 'required'
		]);
		$input = $request->all();
		
		if ($image = $request->file('img_post')) {
            $destinationPath = 'images_artikel/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_post'] = "$profileImage";
        }

			try {
				Post::create($input)->with('success','Post created successfully.');;
			} catch (Throwable $e) {
				dd($e);
			}
		
		return redirect()->route('post.addpost');
	}
	public function deletepost($id)
	{
		Post::find($id)->delete();

		return redirect()->route('post.dtpost');
	}
	public function editpostview($id)
	{
		$data_post = Post::where('id', '=', $id)->first();
		return view('dashboard.artikelact', compact('data_post'));
	}
	public function editpostupdate($id, Request $request)
	{
		$input = $request->all();
		
		if ($image = $request->file('img_post')) {
            $destinationPath = 'images_artikel/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_post'] = "$profileImage";
        }
		try {
			Post::find($id)->update($input);
		} catch (Throwable $e) {
			dd($e);
		}
		
		return redirect()->route('post.dtpost');
	}

	public function detailpostview($id)
	{
		$data_post = Post::where('id', '=', $id)->first();
// dd($data_post);
		return view('landing.artikeldetail', compact('data_post'));
	}


	//--------------------//
	//------Produk--------//
	//--------------------//
	//--------------------//
	//--------------------//
	//--------------------//

    public function dtproduk()
	{
		$produks = Produk::latest()->paginate(10);
		return view('dashboard.produkdt',compact('produks'));
	}
	public function addproduk()
	{
		return view('dashboard.produkact');
	}
	public function Actaddproduk(Request $request)
	{
		$data = $request->validate([
			'nama_produk' => 'required',
			'deskripsi_produk' => 'required',
            'img_produk' => 'required|array',
		]);

		$img_produk = [];
		if($image = $request->file('img_produk')){
			foreach ($data['img_produk'] as $image) {
				$destinationPath = 'images_produk/';
				$fileName = 'Produk'.uniqid() . '.' . $image->getClientOriginalExtension();
				$image_path =  $image->storeAs( $fileName);
				$image->move($destinationPath, $fileName);
	
				array_push($img_produk, $image_path);
			}
	
			$data['img_produk'] = $img_produk;
			
	
				try {
					Produk::create($data)->with('success','Post created successfully.');;
				} catch (Throwable $e) {
					dd($e);
				}
				return redirect()->route('post.addproduk');
		}else{
			return  "error";
		}
		
		
		
	}
	public function deleteproduk($id)
	{
		Produk::find($id)->delete();

		return redirect()->route('post.dtproduk');
	}
	public function editprodukview($id)
	{
		
		$data_produk = Produk::where('id', '=', $id)->first();
		return view('dashboard.produkact', compact('data_produk'));
	}
	public function editprodukupdate($id, Request $request)
	{
		$data = $request->all();
		if(isset($data['img_produk'])){
		    $img_produk = [];
			if($image = $request->file('img_produk')){
				foreach ($data['img_produk'] as $image) {
					$destinationPath = 'images_produk/';
					$fileName = 'Produk'.uniqid() . '.' . $image->getClientOriginalExtension();
					$image_path =  $image->storeAs( $fileName);
					$image->move($destinationPath, $fileName);
		
					array_push($img_produk, $image_path);
				}
				$data['img_produk'] = $img_produk;
			}else{
				return  "error";
			}
		}else{
		    return  "error gambar";
		}
			try {
				Produk::find($id)->update($data);
			} catch (Throwable $e) {
				dd($e);
			}
			
			return redirect()->route('post.dtproduk');
		
	}

	//--------------------//
	//------Paket--------//
	//--------------------//
	//--------------------//
	//--------------------//
	//--------------------//

    public function dtpaket()
	{
		$pakets = DataPaket::latest()->paginate(10);
		return view('dashboard.paketdt',compact('pakets'));
	}
	public function addpaket()
	{
		return view('dashboard.paketact');
	}
	public function Actaddpaket(Request $request)
	{
		$request->validate([
			'nama_paket' => 'required',
			'deskripsi_paket' => 'required',
            'img_paket' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
		]);
		$input = $request->all();
		
		if ($image = $request->file('img_paket')) {
            $destinationPath = 'images_paket/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_paket'] = "$profileImage";
        }

			try {
				DataPaket::create($input)->with('success','Post created successfully.');;
			} catch (Throwable $e) {
				dd($e);
			}
		
		return redirect()->route('post.addpaket');
	}
	public function deletepaket($id)
	{
		DataPaket::find($id)->delete();

		return redirect()->route('post.dtpaket');
	}
	public function editpaketview($id)
	{
		
		$data_paket = DataPaket::where('id', '=', $id)->first();

		return view('dashboard.paketact', compact('data_paket'));
	}
	public function editpaketupdate($id, Request $request)
	{
		$input = $request->all();

		if ($image = $request->file('img_paket')) {
            $destinationPath = 'images_paket/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_paket'] = "$profileImage";
        }


		try {
			DataPaket::find($id)->update($input);;
		} catch (Throwable $e) {
			dd($e);
		}
		
		return redirect()->route('post.dtpaket');
	}
	

	//--------------------//
	//----Banner Slide----//
	//--------------------//
	//--------------------//
	//--------------------//
	//--------------------//


	public function dtbanner()
	{
		$banner = Bannerslide::orderBy('id', 'asc')->paginate(10);
		return view('dashboard.bannerdt',compact('banner'));
	}
	public function addbanner()
	{
		return view('dashboard.banneract');
	}
	public function Actaddbanner(Request $request)
	{
		$request->validate([
            'img_banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
		]);
		$input = $request->all();
		
		if ($image = $request->file('img_banner')) {
            $destinationPath = 'images_banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_banner'] = "$profileImage";
        }

			try {
				Bannerslide::create($input)->with('success','Post created successfully.');;
			} catch (Throwable $e) {
				dd($e);
			}
		
		return redirect()->route('post.addbanner');
	}
	public function deletebanner($id)
	{
		Bannerslide::find($id)->delete();

		return redirect()->route('post.dtbanner');
	}
	public function editbannerview($id)
	{
		
		$data_banner = Bannerslide::where('id', '=', $id)->first();

		return view('dashboard.banneract', compact('data_banner'));
	}
	public function editbannerupdate($id, Request $request)
	{
		$input = $request->all();

		if ($image = $request->file('img_banner')) {
            $destinationPath = 'images_banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_banner'] = "$profileImage";
        }


		try {
			Bannerslide::find($id)->update($input);;
		} catch (Throwable $e) {
			dd($e);
		}
		
		return redirect()->route('post.dtbanner');
	}

	//--------------------//
	//----Kegiatan----//
	//--------------------//
	//--------------------//
	//--------------------//
	//--------------------//


	public function dtkegiatan()
	{
		$kegiatans = Datakegiatan::orderBy('id', 'asc')->paginate(10);
		return view('dashboard.kegiatandt',compact('kegiatans'));
	}
	public function addkegiatan()
	{
		return view('dashboard.kegiatanact');
	}
	public function Actaddkegiatan(Request $request)
	{
		$request->validate([
            'img_kegiatan' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
		]);
		$input = $request->all();
		if ($image = $request->file('img_kegiatan')) {
            $destinationPath = 'images_kegiatan/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_kegiatan'] = "$profileImage";
        }
			try {
				Datakegiatan::create($input)->with('success','Post created successfully.');;
			} catch (Throwable $e) {
				dd($e);
			}
		
		return redirect()->route('post.addkegiatan');
	}
	public function deletekegiatan($id)
	{
		Datakegiatan::find($id)->delete();

		return redirect()->route('post.dtkegiatan');
	}
	public function editkegiatanview($id)
	{
		
		$data_kegiatan = Datakegiatan::where('id', '=', $id)->first();

		return view('dashboard.kegiatanact', compact('data_kegiatan'));
	}
	public function editkegiatanupdate($id, Request $request)
	{
		$input = $request->all();

		if ($image = $request->file('img_kegiatan')) {
            $destinationPath = 'images_kegiatan/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['img_kegiatan'] = "$profileImage";
        }


		try {
			Datakegiatan::find($id)->update($input);;
		} catch (Throwable $e) {
			dd($e);
		}
		
		return redirect()->route('post.dtkegiatan');
	}

	//--------------------//
	//------Buku Tamu------//
	//--------------------//
	//--------------------//
	//--------------------//
	//--------------------//

	public function dtpengguna()
	{
		$penggunas = Penggunainform::latest()->paginate(10);
		return view('dashboard.penggunadt', compact('penggunas'));
	}
	public function actaddpengguna( Request $request)
	{
		$input = $request->all();

		dd($input);

		try {
			Penggunainform::create($input)->with('success','Post created successfully.');;
		} catch (Throwable $e) {
			dd($e);
		}
		
		return redirect()->route('landing.kontak');
	}

	
	//--------------------//
	//------Profile------//
	//--------------------//
	//--------------------//
	//--------------------//
	//--------------------//
	public function actviewuser()
	{
		return view('dashboard.profile');
	}
	public function actupdateuser( $id, Request $request)
	{
		$input = $request->all();
		if($input['password'] == null){
			$input['password'] = auth()->user()->password;
		}else{
			$input['password'] = Hash::make($request->password);
		}
		
		try {
			User::find($id)->update($input);
		} catch (Throwable $e) {
			dd($e);
		}
		
		return redirect()->route('post.actviewuser');
	}

	
	
	//--------------------//
	//------Sitemap------//
	//--------------------//
	//--------------------//
	//--------------------//
	//--------------------//

	public function sitemaps() {
        $posts = DataPaket::all();
        $products = Produk::all();
        return response()->view('landing.sitemap', 
		[
            'posts' => $posts,
            'products' => $products
        ])->header('Content-Type', 'text/xml');
      }
	
	

	

	
	
	

}
