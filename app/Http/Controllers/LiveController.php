<?php

namespace App\Http\Controllers;

use App\Service;
use App\Product;
use App\Slider;
use App\Post;
use App\Event;
use App\Setting;
use App\Gallery;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LiveController extends Controller
{
   public function index()
    {   
        //$today = Carbon::today();
        //$event = Event::where('deleted_at', NULL)->where('date_event', '>=', $today)->orderBy('date_event', 'asc')->get();
        //return $event;
        $setting = Setting::find(1);
        $meta_description = $setting->meta_description;       
        $keywords = $setting->keywords;
        $products = Product::where('deleted_at', NULL)->take(4)->get(); 
        $posts = Post::where('deleted_at', NULL)->orderBy('created_at', 'desc')->take(4)->get(); 
        $events = Event::where('deleted_at', NULL)->orderBy('date_event', 'asc')->take(3)->get();
        //$firstsliders = DB::table('sliders')->first();
        //$title = $firstsliders->title;
        $home = "Home";
        //$sliders = Slider::where('deleted_at', NULL)->where('title', '!=', $title)->get();
        return view('index', compact('meta_description', 'keywords', 'products', 'events', 'posts', 'home'));
    }

    public function service()
    {
        $setting = Setting::find(1);         
        $keywords = $setting->keywords;
        $slug = request('service');
        $services = Service::where('slug', $slug)->first();
        $meta_description =  substr(strip_tags($services->description) , 0, 150);     
       
        return view('service', compact('services', 'meta_description', 'keywords'));
    }

    public function startups()
    {
        $setting = Setting::find(1);         
        $keywords = $setting->keywords;

        $slug = request('startup');
        $services = Product::where('slug', $slug)->first();
        $meta_description =  substr(strip_tags($services->description) , 0, 150);     
       
        return view('service', compact('services', 'meta_description', 'keywords'));
    }

    public function about()
    {
        $setting = Setting::find(1);         
        $meta_description =  substr(strip_tags($setting->about) , 0, 150);     
        $galleries = DB::table('galleries')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->get();
        return view('about', compact('galleries', 'meta_description'));
    }

    public function startup()
    {        
        $meta_description = "Best startups Sponsored";     
        $products = DB::table('products')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->paginate(6);
        return view('startups', compact('products', 'meta_description'));
    }

    public function program()
    {        
        $meta_description = "Best startups Sponsored";     
        $services = DB::table('services')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->paginate(6);
        return view('program', compact('services', 'meta_description'));
    }

    public function event()
    {
        $setting = Setting::find(1);         
        $keywords = $setting->keywords;

        $slug = request('slug');
        $event = Event::where('slug', $slug)->first();

        $meta_description =  substr(strip_tags($event->description) , 0, 150);     
       
        return view('event', compact('event', 'meta_description', 'keywords'));
    }

    public function events()
    {
        $type = request('type');
        $events = Event::where('type', $type)->where('deleted_at', NULL)->paginate(8);
        return view('events', compact('events', 'type'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function serviceview()
    {
        return view('serviceview');
    }

    public function productview()
    {     
        return view('productview');
    }

    public function board()
    {
        return view('board');
    }
    
    public function management()
    {     
        return view('management');
    }

    public function news()
    {
        $cat = request('cat');
        if (isset($cat)) {
            $posts = DB::table('posts')->where('category','LIKE','%'.$cat.'%')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->paginate(6);
            return view('view', compact('posts', 'cat'));
        }
        else
        {
            $posts = DB::table('posts')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->paginate(6);
            return view('view', compact('posts'));
        }
    }
    
    public function activity()
    {
        return view('activity');
    }

    public function newsfeed($slug)
    {   
        $post = Post::where('slug', $slug)->first();
        if (!isset($post)) {
           return back();
        }
        $id = $post->id;
        $posts = DB::table('posts')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->where('id', '!=', $id)->take(4)->get();
        return view('postview', compact('post', 'posts'));
    }

  
    
    public function gallery(Request $request)
    {
        $galleries = DB::table('galleries')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->paginate(9);
        return view('gallery', compact('galleries'));
    }



}
