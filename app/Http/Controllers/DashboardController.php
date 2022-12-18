<?php

namespace App\Http\Controllers;

use App\Models\{Admin, Post};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // 
    }

    public function index()
    {
        $users = Admin::count();
        $posts = Post::count();

        $data = [
            'users' => $users,
            'posts' => $posts
        ];
        return view('dashboard.index', $data);
    }

    public function show($name)
    {
        if ($name == 'profile-abad') {
            return view('team.profile_abad');
        } elseif ($name == 'profile-lana') {
            return view('team.profile_lana');
        } elseif ($name == 'profile-faiq') {
            return view('team.profile_faiq');
        } elseif ($name == 'profile-yudha') {
            return view('team.profile_yudha');
        }
    }
    // pusat bantuan
    public function pusat()
    {
        return view('link_footer.pusat');
    }

    public function pusat_pemilik()
    {
        return view('link_footer.helppemilik');
    }

    public function akun_pemilik()
    {
        return view('link_footer.akunpemilik');
    }

    public function pusat_pencari()
    {
        return view('link_footer.helppencari');
    }

    public function akun_pencari()
    {
        return view('link_footer.akunpencari');
    }

    // help
    public function help()
    {
        return view('link_footer.help');
    }

    // pemesanan
    public function pemesanan()
    {
        return view('pemesanan.pemesanan');
    }

    // Syarat
    public function syarat()
    {
        return view('link_footer.syaratketentuan');
    }

    public function syarat_pemilik()
    {
        return view('link_footer.syaratpemilik');
    }

    public function syarat_pencari()
    {
        return view('link_footer.syaratpenyewa');
    }
}
