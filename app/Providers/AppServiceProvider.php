<?php

namespace App\Providers;

use View;
use App\Providers;
use App\Product;
use App\Service;
use App\Branch;
use App\Board;
use App\Management;
use App\Event;
use App\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Auth;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('*', function($view){
            $view->with('setting', Setting::find(1));
        });

        View::composer('*', function($view){
            $view->with('services1', Service::where('deleted_at', NULL)->get());
        });
        View::composer('*', function($view){
            $view->with('product1', Product::where('deleted_at', NULL)->get());
        });
        View::composer('*', function($view){
            $view->with('theevents', Event::where('deleted_at', NULL)->orderBy('date_event', 'asc')->take(3)->get());
        });

        View::composer('*', function($view){
            $view->with('board1', Board::where('deleted_at', NULL)->orderBy('created_at', 'asc')->take(4)->get());
        });

        View::composer('*', function($view){
            $view->with('management1', Management::where('deleted_at', NULL)->orderBy('created_at', 'asc')->get());
        });

        View::composer('*', function($view){
            $today = Carbon::today();
            $view->with('event1', Event::where('deleted_at', NULL)->where('date_event', '>=', $today)->where('type', 'Event')->orderBy('date_event', 'asc')->take(5)->get());
        });

        View::composer('*', function($view){
            $today = Carbon::today();
            $view->with('conference1', Event::where('deleted_at', NULL)->where('date_event', '>=', $today)->where('type', 'Conference')->orderBy('date_event', 'asc')->take(5)->get());
        });

        View::composer('*', function($view){
            $today = Carbon::today();
            $view->with('events', Event::where('deleted_at', NULL)->where('date_event', '>=', $today)->orderBy('date_event', 'asc')->paginate(8));
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
