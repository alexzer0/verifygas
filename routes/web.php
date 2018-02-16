<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Use Illuminate\Support\Facades\Storage;
Use App\Company;
Use App\Workshop;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('workshops', 'WorkshopController');
Route::resource('companies', 'CompanyController');
Route::resource('evaluation_economies', 'EvaluationEconomyController');

Route::get('test',function(){

    $disk=Storage::disk('s3');
    $disk->put('myfiles.txt','this is a dummy file with some content','public');
    $storagePath  = Storage::disk('s3')->getDriver()->getAdapter()->getPathPrefix();
  
    $files = $disk->allFiles();
    foreach ($files as $file) {
     echo "<a href=".$disk->url($file).">".$file."</a>";
    }
    echo $storagePath;
});
Route::get('test2',function(){
  /*  $company=new Company;
    $company->ruc='20452524801';
    $company->company_name='ALEXANDER CASAS RAVELLO';
    $company->address='Jr. Barcelona 1549';
    $company->contact_name='alexander casas';
    $company->phone='3892340';
    $company->mobile='944964584';
    $company->save();

   
    $workshop=new Workshop;
    $workshop->full_name='taller 1';
    $workshop->email='taller1@verifygas.com';
    $workshop->phone='3892340';
    $workshop->address='Jr. barcelona 1549';
    $workshop->active=1;
    $workshop->latitude='';
    $workshop->longitude='';
    $workshop->observations='';            
    $workshop->verificacion=0;
    $workshop->company_id=$company->id;
   $workshop->save();
*/

$company = Company::find(1);
        
foreach($company->workshops as $workshop){
    echo $workshop->id."<br>";
    }
    $workshop=Workshop::find(2);
    echo $workshop->company->company_name;

});