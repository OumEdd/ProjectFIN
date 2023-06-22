<?php 
namespace App\Providers;
use App\classVille;
use Illuminate\Support\ServiceProvider;
class DynamicVille extends ServiceProvider
{
    public function boot(){
        view()->composer('*',function($view){
            $view->with('nom_ville',classVille::all());

        });
    }
}
