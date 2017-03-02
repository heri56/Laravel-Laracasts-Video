<?php
use App\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------tugassaya-------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {

  $name='Lee_Shoung';
  $umur = 23;

  //$tasks = DB::table('tasks')->get();
  $tasks = DB::table('tugas_sayas')->latest()->get();


  //});;

return view('welcome', compact('tasks'));
  /*$pekerjaansaya= ['Buat proposal',
'Buat program web',
'Testing'];*/
  //$array= array("Sj");
    //return view('welcome', compact('name', 'umur'));
    //return view('welcome', compact('pekerjaansaya'));
    //$result = compact($array);
//});

//Route::get('/','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/',function(){
  return view('layouts.master');
});



Route::get('/tasks/{task}', function($id){
  //$task=DB::table('tasks')->find($id);
    //dd($id);
    //dd($task);

    $task = App\TugasSaya::find($id);

  return view('tasks.show', compact('task'));

});

Route::get('/tasks', function(){
  //$tasks=DB::table('tasks')->latest()->get();
    //dd($id);
    //dd($task);
    $tasks= App\TugasSaya::all();

  return view('tasks.index', compact('tasks'));
});

Route::get('/tugassaya', 'Tugas_Saya@index');

Route::get('/tugassaya/{tugassaya}', 'Tugas_Saya@show');

Route::get('helo', function(){
  return view('coba');
});

Route::get('abc', function(){
  return view('abc');
});

Route::get('greet', function(){
  $timeOfDay = date('a');
  return view('greeet')->with('timeOfDay', $timeOfDay);
});

Route::get('users', function(){
  $user = array('User 1', 'User 2', 'User 3', 'User 4');
  $user = array('User 1', 'User 2', 'User 3', 'User 4');
return view('users')->with('users' , $user);
});

Route::get('login','LoginController@ShowLogin');
Route::post('login','LoginController@ProcesLogin');

//Route::get('/', 'HitungController@menuHitung');
Route::get('tambah', 'HitungController@viewTambah');
Route::post('tambah', 'HitungController@ProcessTambah');

Route::get('useform', 'BuatController@register');
Route::post('useform', 'BuatController@prosesInput');

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::group(['middleware' =>['web']], function () {
    //Route:resource('blog','BlogController');
//});
