<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\Product;
use App\Models\Team;
use App\Models\Logo;
use App\Models\Client;
use App\Models\HeroImage;
class NewController extends Controller
{
    //
    //
    
    function index(){
        $heroimages = HeroImage::all();
            $clients = Client::where('is_active', true)
                ->get();
            return view('frontend.pages.index', [
                                'heroimages' => $heroimages,
                'clients' => $clients,

            ]);
    }
    function about()
    {
        {
            $teams = Team::where('is_active', true)
                ->get();
            return view('frontend.pages.about', compact('teams'));
        }
    }
    function product()
    {
        {
            $products = Product::where('is_active', true)
                ->get();
            return view('frontend.pages.product', compact('products'));
        }
    }

    function contact()
    {
        $logo = Logo::first();
        return view("frontend.pages.contact", compact('logo'));
    }
    function project()
    {
        {
            $projects = Project::where('is_active', true)
                ->get();
            return view('frontend.pages.project', compact('projects'));
        }
    }
    function service()
    {
        $services = Service::where('is_active', true)
            ->get();
        return view('frontend.pages.service', compact('services'));
    }

}
