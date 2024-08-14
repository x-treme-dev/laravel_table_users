<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
   private const NEWS = [0 => 'Test'];

    public function index(){
        // лежит в папке view/test
        return view('test.index', [
            'language' => ['HTML', 'CSS', 'SCSS', 'Laravel', 'JavaScript', 'PHP', 'Ruby']
        ]);
    }

    private function getDateRegister($user){
        // получить год регистрации пользователя, записать в массив $mathes
        $regex = '/([0-9]{4})/';
        preg_match($regex, $user, $mathes);
        return $mathes[0];
    }

    public function page(string $id, Request $request){
        $url = 'https://jsonplaceholder.org/users';
        // http - фасад, для получения данных по сети
        // получение с задержкой 5 с.
        $data = Http::timeout(5) -> get($url)->json();
          
         foreach($data as $key => $user){
            // найти в массиве данных дату регистрации каждого пользователя
            // и записать в новое поле каждого элемента массива
            foreach ($user as $userkey => $item){
               if($userkey === 'login') $data[$key]['register'] =  $this-> getDateRegister($item['registered']);
            }
           }
        
        return view('test.page', [
            'id' => $id,
            'data' => $data,
            'url' => $request->url(),
        ]);
    }

}

