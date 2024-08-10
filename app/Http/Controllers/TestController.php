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
/*
    private function getAge($user){
        $diff = date( 'Ymd' ) - date( 'Ymd', strtotime($user['birthDate']) );
        return substr( $diff, 0, -4 );
    }
*/
    public function page(string $id, Request $request){
        $url = 'https://jsonplaceholder.org/users';
        // http - фасад, для получения данных по сети
        // получение с задержкой 5 с.
        $data = Http::timeout(5) -> get($url)->json();
        //echo '<pre>';
        // print_r($data);
        //echo '</pre>';
       /* 
        foreach($data as $nu => $user){
            $data[$nu]['age'] = $this -> getAge($user);
            
        }*/
        return view('test.page', [
            'id' => $id,
            'data' => $data,
            'url' => $request->url(),
            
        ]);
    }

}

