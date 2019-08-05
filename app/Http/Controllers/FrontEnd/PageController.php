<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\PackageType as Pkg;
use App\IndividualPackage as Ipkgs;
use App\PhotoGallery as Pg;

class PageController extends Controller
{
    private $pkgs; // pkg type {categories}
    private $ipkgs; // individual pkg { individual pkgs }



    public function __construct()
    {
        $this->pkgs = Pkg::paginate(); // all package category list with paginate
        $this->ipkgs = Ipkgs::paginate(); //all indi pkgs list with paginate
    }
    public function home()
    {
        $page = "home";
        $pkgs = $this->pkgs;
        return view('frontend.welcome', compact('pkgs', 'page'));
    }

    public function packages()
    {
        $pkgs = $this->pkgs;
        // return $pkgs;
        return view('frontend.packages.all-pkgs')->with('pkgs', $pkgs);
    }
    public function ipackages($id)
    {
        $pkgs = $this->pkgs;
        $pkg = Pkg::findOrFail($id);
        $ipkgs = $this->ipkgs->where('package_type', $id);
        // return $ipkgs;
        if ($ipkgs->count() > 0 && $pkgs->count() > 0) {
            // return $ipkgs->count();
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs'));
        } else {
            // return "No iPkgs";
            return view('frontend.packages.single-package', compact('ipkgs', 'pkg', 'pkgs'));
        }
    }

    public function tour_details($id)
    {
        $sipkg = Ipkgs::find($id);
        $spkg = Pkg::find($sipkg->package_type);
        $pg = Pg::where('ip_id', $id)->get();

        return view('frontend.tour-details', compact('sipkg', 'spkg', 'pg'));
    }

    public static function showHotelName($id)
    {
        $res = Hotel::find($id);
        if ($res != null) {
            return Hotel::find($id)->title;
        } else {
            return "No Hotel included";
        }
    }

    public static function getImage($ipid)
    {
        $pg = Pg::find('ip_id', $ipid)->get();
        return $pg;
    }

    public function hotels()
    { }

    public function contact()
    { }

    public function singlePkg($id)
    {
        return "pkg id is $id";
    }
}
