<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Service;
use App\Product;
use App\Branch;
use App\Board;
use App\Management;
use App\Slider;
use App\Category;
use App\Subcategory;
use App\Tag;
use App\Post;
use App\Event;
use App\Gallery;
use DB;
use Carbon\Carbon;
use App\Setting;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    //Faculty
    public function service()
    {
        $error= request('error'); 
        $status= request('status');  
        $services = Service::where('deleted_at', NULL)->get();
        return view('admin.services', compact('services', 'error', 'status'));
    }

    public function addservice()
    {
        $status = request('status');
        return view('admin.addservice', compact( 'status'));
    }

    public function storeservice(Request $request)
    {
        $name = $request->name;

        $getservice = DB::table('services')->where('deleted_at', NULL)->where('name', $name)->first();
        if (isset($getservice)) {
            $error = "Service Already Exist";
            return redirect()->route('service', array('error' => $error));
        }
        else{
            $step1 = new Service();
            $slug = str_slug($request->name, '-');
            $step1->slug = $slug;
            $step1->name = $request->name;
            $step1->description = $request->description;

            $file = $request->file('image');
            $path = Storage::disk('public1')->putFile('images', $file);
            $step1->image = $path;

            $step1->save();

            $status = "service Added Successfully";
            return redirect()->route('service', array('status' => $status));
        }
    }

    public function destroyservice($id)
    {
        Service::destroy($id);
        return back();
    }

    public function editservice(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;

        $step1 = Service::findOrFail($id);
        $slug = str_slug($request->name, '-');
        $step1->slug = $slug;
        $step1->name = $request->name;
        $step1->description = $request->description;

        $file = $request->file('image');
        $path = Storage::disk('public1')->putFile('image', $file);
        $step1->image = $path;

        $step1->save();
        return back();
    }
    //Faculty Ends

    public function product()
    {
        $error= request('error'); 
        $status= request('status'); 
        $serviceid = request('service'); 
        $service = Service::findOrFail($serviceid);
        $servicename = $service->name;
        if (isset($serviceid)) {    
            $products = Product::where('deleted_at', NULL)->where('service', $serviceid)->get();
        }
        else
        {
           $products = Product::where('deleted_at', NULL)->get(); 
        }
        return view('admin.products', compact('products', 'error', 'status', 'servicename', 'serviceid'));
    }

    public function startup()
    {
        $products = Product::where('deleted_at', NULL)->get(); 
        return view('admin.products', compact('products', 'error', 'status'));
    }

    public function storeproduct(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $serviceid = $request->service;

        $getproduct = DB::table('products')->where('deleted_at', NULL)->where('name', $name)->first();
        if (isset($getproduct)) {
            $error = "Product Already Exist";
            return redirect()->route('product', array('error' => $error, 'service' => $serviceid));
        }
        else{
            $step1 = new product();
            $slug = str_slug($request->name, '-');
            $step1->slug = $slug;
            $step1->name = $request->name;
            $step1->description = $request->description;
            
            $file = $request->file('image');
            $path = Storage::disk('public1')->putFile('images', $file);
            $step1->image = $path;
            $step1->save();

            $status = "Startup Added Successfully";
            return redirect()->route('startup', array('status' => $status));
        }
    }

    public function destroyproduct($id)
    {
        product::destroy($id);
        return back();
    }

    public function editproduct(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;

        $step1 = Product::findOrFail($id);
        $slug = str_slug($request->name, '-');
        $step1->slug = $slug;
        $step1->name = $request->name;
        $step1->description = $request->description;
        $file = $request->file('image');
        $path = Storage::disk('public1')->putFile('images', $file);
        $step1->image = $path;
        $step1->save();
        return back();
    }

     //Faculty
    public function branch()
    {
        $error= request('error'); 
        $status= request('status');  
        $branches = Branch::where('deleted_at', NULL)->get();
        return view('admin.branch', compact('branches', 'error', 'status'));
    }

    public function storebranch(Request $request)
    {
        $name = $request->name;

        $getbranch = DB::table('branches')->where('deleted_at', NULL)->where('name', $name)->first();
        if (isset($getbranch)) {
            $error = "Branch Already Exist";
            return redirect()->route('branch', array('error' => $error));
        }
        else{
            $step1 = new Branch();
            $step1->name = $request->name;
            $step1->address = $request->address;
            $step1->phone= $request->phone;
            $step1->email = $request->email;
            $step1->save();

            $status = "Branch Added Successfully";
            return redirect()->route('branch', array('status' => $status));
        }
    }

    public function destroybranch($id)
    {
        Branch::destroy($id);
        return back();
    }

    public function editbranch(Request $request)
    {
        $id = $request->id;
        
        $step1 = branch::findOrFail($id);
        $step1->name = $request->name;
        $step1->address = $request->address;
        $step1->phone= $request->phone;
        $step1->email = $request->email;
        $step1->save();
        return back();
    }
    //Branch Ends

    //Slider
    public function slider()
    {
        $error= request('error'); 
        $status= request('status');  
        $sliders = Slider::where('deleted_at', NULL)->get();
        return view('admin.sliders', compact('sliders', 'error', 'status'));
    }

    public function storeslider(Request $request)
    {
        $title = $request->title;

        $getslider = DB::table('sliders')->where('deleted_at', NULL)->where('title', $title)->first();
        if (isset($getslider)) {
            $error = "Slider Already Exist";
            return redirect()->route('slider', array('error' => $error));
        }
        else{
            $step1 = new Slider();
            $step1->title = $request->title;
            $step1->description = $request->description;

            $file = $request->file('image');
            $path = Storage::disk('public1')->putFile('images', $file);
            $step1->image = $path;

            $step1->save();

            $status = "Slider Added Successfully";
            return redirect()->route('slider', array('status' => $status));
        }
    }

    public function destroyslider($id)
    {
        Slider::destroy($id);
        return back();
    }

    public function editslider(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;

        $step1 = slider::findOrFail($id);
        $slug = str_slug($request->name, '-');
        $step1->slug = $slug;
        $step1->name = $request->name;
        $step1->description = $request->description;

        $file = $request->file('image');
        $path = Storage::disk('public1')->putFile('image', $file);
        $step1->image = $path;

        $step1->save();
        return back();
    }
    //Slider Ends


    //board
    public function board()
    {
        $error= request('error'); 
        $status= request('status');  
        $boards = board::where('deleted_at', NULL)->get();
        return view('admin.board', compact('boards', 'error', 'status'));
    }

    public function storeboard(Request $request)
    {
        $name = $request->name;
        $setimage = $request->file('image');
        $getboard = DB::table('boards')->where('deleted_at', NULL)->where('name', $name)->first();
        if (isset($getboard)) {
            $error = "Member Already Exist";
            return redirect()->route('board', array('error' => $error));
        }
        else{
            $step1 = new Board();
            $step1->name = $request->name;
            $step1->post = $request->post;
            $step1->description = $request->description;
            $step1->facebook = $request->facebook;
            $step1->twitter = $request->twitter;
            $step1->linkedin = $request->linkedin;
            $step1->googleplus = $request->googleplus;
            $step1->instagram = $request->instagram;

            if (isset($setimage)) {
                $file = $request->file('image');
                $path = Storage::disk('public1')->putFile('images', $file);
                $step1->image = $path;
            }
            $step1->save();

            $status = "Member Added Successfully";
            return redirect()->route('board', array('status' => $status));
        }
    }

    public function destroyboard($id)
    {
        Board::destroy($id);
        return back();
    }

    public function editboard(Request $request)
    {
        $id = $request->id;

        $step1 = Board::findOrFail($id);
        $step1->name = $request->name;
        $step1->post = $request->post;
        $step1->description = $request->description;
        $step1->facebook = $request->facebook;
        $step1->twitter = $request->twitter;
        $step1->linkedin = $request->linkedin;
        $step1->googleplus = $request->googleplus;
        $step1->instagram = $request->instagram;

        if (isset($setimage)) {
            $file = $request->file('image');
            $path = Storage::disk('public1')->putFile('images', $file);
            $step1->image = $path;
        }
        $step1->save();
        return back();
    }
    //Board Ends

    //Management
    public function management()
    {
        $error= request('error'); 
        $status= request('status');  
        $managements = Management::where('deleted_at', NULL)->get();
        return view('admin.management', compact('managements', 'error', 'status'));
    }

    public function storemanagement(Request $request)
    {
        $name = $request->name;
        $setimage = $request->file('image');
        $getmanagement = DB::table('managements')->where('deleted_at', NULL)->where('name', $name)->first();
        if (isset($getmanagement)) {
            $error = "Member Already Exist";
            return redirect()->route('management', array('error' => $error));
        }
        else{
            $step1 = new Management();
            $step1->name = $request->name;
            $step1->post = $request->post;

            if (isset($setimage)) {
                $file = $request->file('image');
                $path = Storage::disk('public1')->putFile('images', $file);
                $step1->image = $path;
            }
            $step1->save();

            $status = "Member Added Successfully";
            return redirect()->route('management', array('status' => $status));
        }
    }

    public function destroymanagement($id)
    {
        Management::destroy($id);
        return back();
    }

    public function editmanagement(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;

        $step1 = management::findOrFail($id);
        $slug = str_slug($request->name, '-');
        $step1->slug = $slug;
        $step1->name = $request->name;
        $step1->description = $request->description;

        $file = $request->file('image');
        $path = Storage::disk('public1')->putFile('image', $file);
        $step1->image = $path;

        $step1->save();
        return back();
    }
    //management Ends

     //category
    public function category()
    {
        $status = request('status'); 
        $categories = Category::where('deleted_at',  NULL)->get();
        $subs = DB::table('subcategories')->where('deleted_at', NULL)->get();
        return view('admin.category', compact('categories', 'status', 'subs'));
    }

    public function storecategory(Request $request)
    {
        if ($request->parent=='None') {
            $title = $request->title;
            $seecat = DB::table('categories')->where('deleted_at', NULL)->where('title', $title)->first();
            if (isset($seecat)) {
                $status= 'Category Already Exist';
                $categories = DB::table('categories')->where('deleted_at', NULL)->get();
                $subs = DB::table('subcategories')->where('deleted_at', NULL)->get();
                return view('admin.category', compact('categories', 'status', 'subs'));
            }
            else
            {
                $cat = new Category;
                $cat->slug = str_slug($request->title, '-');
                $cat->title = $request->title;
                $cat->parent = $request->parent;
                $cat->description = $request->description;
                $name = $request->title;
                $cat->save();
               
                $status= $name.' '.'added as category';
                $categories = DB::table('categories')->where('deleted_at', NULL)->get();
                $subs = DB::table('subcategories')->where('deleted_at', NULL)->get();
                return view('admin.category', compact('categories', 'status', 'subs'));
            }
            
        }
        else
        {
            $title = $request->title;
            $seecat = DB::table('subcategories')->where('deleted_at', NULL)->where('title', $title)->first();
            if (isset($seecat)) {
                $status= 'Subcategory Already Exist';
                $categories = DB::table('categories')->where('deleted_at', NULL)->get();
                $subs = DB::table('subcategories')->where('deleted_at', NULL)->get();
                return view('admin.category', compact('categories', 'status', 'subs'));
            }
            else
            {
                $cat = new Subcategory;
                $cat->slug = str_slug($request->title, '-');
                $cat->title = $request->title;
                $cat->parent = $request->parent;
                $cat->description = $request->description;
                $name = $request->title;
                $cat->save();
               
                $status= $name.' '.'added as subcategory';
                $categories = DB::table('categories')->where('deleted_at', NULL)->get();
                $subs = DB::table('subcategories')->where('deleted_at', NULL)->get();
                return view('admin.category', compact('categories', 'status', 'subs'));
            }
        }
    }

    public function editcategory($id)
    {
        $category = Category::findOrFail($id);
        return view('editcategory', compact('category'));
    }

    public function updatecategory(Request $request, $id)
    {

        $step1 = Category::findOrFail($id);    
        $step1->title = $request->title;
        $step1->price = $request->price;
        $step1->description = $request->description;
       
        $step1->update();
        return redirect('/category');

    }

    public function destroycategory($id)
    {
        Category::destroy($id);
        return back();
    } 

    public function destroysubcategory($id)
    {
        Subcategory::destroy($id);
        return back();
    } 
    //end of category

    //Tag starts
    public function tag()
    {
        $tags = Tag::where('deleted_at',  NULL)->get();
        return view('admin.tag', compact('tags'));
    }

    public function storetag(Request $request)
    {            
        $title = $request->title;
        $seecat = DB::table('tags')->where('deleted_at', NULL)->where('title', $title)->first();
        if (isset($seecat)) {
            $status= 'Tag Already Exist';
            $tags = Tag::where('deleted_at',  NULL)->get();
            return view('admin.tag', compact('tags', 'status'));
        }
        else
        {
            $cat = new Tag;
            $cat->slug = str_slug($request->title, '-');
            $cat->title = $request->title;
            $cat->description = $request->description;
            $name = $request->title;
            $cat->save();
           
            $status= $name.' '.'added as tag';
            $tags = Tag::where('deleted_at',  NULL)->get();
            return view('admin.tag', compact('tags', 'status'));
        }
    }

    public function destroytag($id)
    {
        Tag::destroy($id);
        return back();
    }

    //End of tags
    //Post Stats
    public function newpost()
    {
        $status = request('status');
        $categories = DB::table('categories')->where('deleted_at', NULL)->get();
        $subs = DB::table('subcategories')->where('deleted_at', NULL)->get();
        $tags = DB::table('tags')->where('deleted_at', NULL)->get();
        return view('admin.newpost', compact('categories','subs', 'tags', 'status'));
    }

    //Store post
    public function storepost(Request $request)
    {
        //return $request;
        if ($request->publish) {
            
            $step1 = new Post();
            if (isset($request->slug)) {
               $step1->slug = $request->slug;
            }
            else{
                $slug = str_slug($request->title, '-');
                $step1->slug = $slug;
            }
            $step1->author = $request->author;
            $step1->title = $request->title;   
            $step1->description = $request->description;
            $step1->comment_status = $request->comment_status;
            $step1->status = $request->publish;
            $step1->tag = $request->tag;
            $step1->category = collect($request->category)->implode(', ');

            if ($request->video) {
                $step1->video = $request->video;
            }

            if ($request->file('pdf')) 
            {
                $file = $request->file('pdf');
                $path = Storage::disk('public1')->putFile('pdf', $file);
                $step1->pdf = $path;
            }

            if ($request->file('featured_image')) 
            {
                $file = $request->file('featured_image');
                $path = Storage::disk('public1')->putFile('featured_image', $file);
                $step1->featured_image = $path;
            }

            $step1->save();

            $status = "Post Published Sucessfully";
            return redirect()->route('newpost', array('status' => $status));
        }

        else{
            $draft = "Draft";
            $step1 = new Post();

            if (isset($request->slug)) {
               $step1->slug = $request->slug;
            }
            else{
                $slug = str_slug($request->title, '-');
                $step1->slug = $slug;
            }

            $step1->author = $request->author;
            $step1->title = $request->title;
            
            $step1->description = $request->description;
            $step1->comment_status = $request->comment_status;
            $step1->status = $draft;
            $step1->tag = $request->tag;
            $step1->category = collect($request->category)->implode(', ');

            if ($request->category1) {
                $cat = new Category();
                $cat->title= $request->category1;
                $cat->slug = str_slug($request->category1, '-');
                $cat->save();
            }

            if ($request->file('featured_image')) {
                $file = $request->file('featured_image');
                $path = Storage::disk('public2')->putFile('featured_image', $file);

                $step1->featured_image = $path;
            }

            $step1->save();

            
            $str = collect($request->tag);
            $etags = explode(" ",$str);

            foreach($etags as $x => $x_value) {
                $tagg = new Tag();
                $tagg->title  = $x_value;
                $tagg->slug = str_slug($x_value, '-');
                $tagg->save();
            }
       
            $status = "Post Saved As Draft";
            return redirect()->route('newpost', array('status' => $status));
        }
        //Setting1::create($request->all());
    }

    public function allpost(Request $request)
    {
        $posts = DB::table('posts')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->get();
        return view('admin.allpost', compact('posts'));
    }

    public function geteditpost()
    {
        $slug = request('slug');
        $post = DB::table('posts')->where('deleted_at', NULL)->where('slug', $slug)->first();
        if (isset($post)) {
            $postcat = $post->category;
            $status = request('status');
            $categories = DB::table('categories')->where('deleted_at', NULL)->get();
            $subs = DB::table('subcategories')->where('deleted_at', NULL)->get();
            $tags = DB::table('tags')->where('deleted_at', NULL)->get();

            $exploded = explode(",",$postcat);

            return view('admin.editpost', compact('post', 'exploded', 'categories', 'subs', 'tags'));
        }
        else
        {
            return redirect('admin/newpost');
        }
    }


    public function editpost(Request $request, $id)
    {
        $step1 = Post::findOrFail($id);

        $step1->author = $request->author;
        $step1->title = $request->title;
        $slug = str_slug($request->title, '-');
        $step1->slug = $slug;
        $step1->description = $request->description;
        $step1->comment_status = $request->comment_status;
        $step1->status = $request->publish;
        $step1->tag = $request->tag;
        $step1->category = collect($request->category)->implode(', ');

        if ($request->file('featured_image')) 
        {
            $file = $request->file('featured_image');


            $path = Storage::disk('public1')->putFile('featured_image', $file);
            $step1->featured_image = $path;
        }
        $step1->update();
           
      
        $status = "Post Edited Sucessfully";
        return redirect()->route('newpost', array('status' => $status));   
    }


    public function destroypost($id)
    {
        Post::destroy($id);
        return back();
    }


 //Event Starts
    public function newevent()
    {
        $status = request('status');
        return view('admin.newevent', compact('status'));
    }

    //Store post
    public function storeevent(Request  $request )
    {
        $step1 = new Event();
        $slug = str_slug($request->title, '-');
        $step1->slug = $slug;
        $step1->title = $request->title;       
        $step1->theme = $request->theme; 
        $step1->description = $request->description;
        $step1->date_event = $request->date_event;
        $step1->end_event = $request->end_event;
        $step1->type = $request->type;
        $step1->venue = $request->venue;      
        if ($request->file('featured_image')) 
        {
            $file = $request->file('featured_image');
            $path = Storage::disk('public1')->putFile('featured_image', $file);
            $step1->featured_image = $path;
        }
        $step1->save();     
        $status = "Event Published";
        return redirect()->route('newevent', array('status' => $status));
    }

    public function editevent(Request $request, $id)
    {
        $step1 = Event::findOrFail($id);
        $slug = str_slug($request->title, '-');
        $step1->slug = $slug;
        $step1->title = $request->title;  
        $step1->theme = $request->theme;      
        $step1->description = $request->description;
        $step1->date_event = $request->date_event;
        $step1->end_event = $request->end_event;
        $step1->type = $request->type;
        $step1->venue = $request->venue;  

        if ($request->file('featured_image')) 
        {
            $file = $request->file('featured_image');


            $path = Storage::disk('public1')->putFile('featured_image', $file);
            $step1->featured_image = $path;
        }
        else{
            $step1->featured_image = $request->image;
        }
        $step1->update();
           
      
        $status = "Event Edited Sucessfully";
        return redirect()->route('newevent', array('status' => $status));   
    }


    public function allevent(Request $request)
    {
        $events = DB::table('events')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->get();
        return view('admin.allevent', compact('events'));
    }

    public function destroyevent($id)
    {
        Event::destroy($id);
        return back();
    }

    public function geteditevent()
    {
        $slug = request('slug');
        $event = DB::table('events')->where('deleted_at', NULL)->where('slug', $slug)->first();
        if (isset($event)) {
            return view('admin.editevent', compact('event'));
        }
        else
        {
            return redirect('admin/newevent');
        }
    }
    //Events Ends

    public function gallery(Request $request)
    {
        $galleries = DB::table('galleries')->where('deleted_at', NULL)->orderBy('created_at', 'desc')->get();
        return view('admin.gallery', compact('galleries'));
    }

    public function storegallery(Request $request)
    {     
        $step1 = new Gallery();
        $step1->name = $request->name;

        $file = $request->file('image');
        $path = Storage::disk('public1')->putFile('images', $file);
        $step1->image = $path;

        $step1->save();

        $status = "Gallery Added Successfully";
        return redirect()->route('gallery', array('status' => $status));       
    }

    public function destroygallery($id)
    {
        Gallery::destroy($id);
        return back();
    }

    //Site Settings
    public function settings()
    {   
        $status = request('status'); 
        $error = request('error'); 
        return view('admin.settings', compact('status', 'error'));      
    }

    public function storesettings(Request $request)
    {
        Setting::create($request->all());
        return back();
    }

    public function updatesettings(Request $request)
    {

        $settings = Setting::findOrFail(1);
        $set = $settings->update($request->all());
        if ($set) {
            $status = "Success";
            return redirect()->route('settings', array('status' => $status));
        }
        else{
            $error = "Error, Try Again";
            return redirect()->route('settings', array('error' => $error));
        }   
    }

    public function addadmin()
    {
        $agents = User::where('deleted_at', NULL)->get();
        return view('admin.addadmin', compact('agents'));
    }

    public function addadmins(Request $request)
    {
        //Admin::create($request->all());
        $email = $request->email;
        $agents = User::where('deleted_at', '!=', NULL)->first();
        if (isset($agents)) {
            return redirect('admin/admin');
        }
        else
        {
            $admin = new User;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->role = $request->role;
            $admin->password =  bcrypt($request['password']);
            $admin->save();
            //$admins = Admin::where('deleted_at', NULL)->get();
            return redirect('admin/admin');
        }
    }


    public function destroyadmin($id)
    {
        User::destroy($id);
        return back();
    }
    //Site Settings End

     public function logo()
    {
        return view('admin.logo');     
    }

    public function logo1(Request $request)
    {
        $settings = Setting::findOrFail(1);

        $file = $request->file('logo');
        $path = Storage::disk('public1')->putFile('logo', $file);
        $settings->logo = $path;
        $settings->save();
        return back();
    }

    public function favicon()
    {
        return view('favicon');     
    }

    public function favicon1(Request $request, $id)
    {
        $settings = Setting::findOrFail($id);
        $file = $request->file('favicon');
        $path = Storage::disk('public1')->putFile('favicon', $file);
        $settings->favicon = $path;
        $settings->update();
        $setting = Setting::findOrFail(1);
        return view('settings', compact('setting'));
     }
}
