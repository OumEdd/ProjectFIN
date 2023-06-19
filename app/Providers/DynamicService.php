<?php 
namespace App\Providers;
use App\classService;
use Illuminate\Support\ServiceProvider;
class DynamicService extends ServiceProvider
{
    public function boot(){
        view()->composer('*',function($view){
            $view->with('nom_serv',classService::all());

        });
    }
}