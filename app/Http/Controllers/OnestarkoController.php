<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Article;
class OnestarkoController extends Controller
{



    public function message(Request $request){

       // $messages = Message::paginate(4);

        $messages = new Message();


        if($request->isMethod('POST')){




            $data = $request->input('Message');

            $color = rand(0,255).','.rand(0,255).','.rand(0,255);

            $bool = DB::insert('insert into messages (name,messages,color) values(?,?,?)',[$data['name'],$data['messages'],$color]);

            if($bool){
                return redirect('mess')->with('success','留言成功');
            }else{
                return redirect()->back();
            }
        }

        return view('onestarko.message',[
            'messages' => $messages
        ]);

    }


    public function showmessage(){

        $showmessage = Message::paginate(20);

        return view('onestarko.showmessage',[
            'showmessage' => $showmessage,
        ]);
    }


    public function writearticle(Request $request){


        $article = new Article();

        if($request->isMethod('POST')){


            $data = $request->input('Article');

            $bool = DB::insert('insert into articles (name,content) values(?,?)',[

                $data['name'],
                $data['content']

            ]);

           // $data = $request->input('Article');
            if($bool){
               // echo "11111111111";
                return redirect('mess2')->with('success');
            }else{
                return redirect()->back();
            }
        }
        return view('onestarko.writearticle');

    }



    public function readarticle(){

        $articles = Article::paginate(10);


        return view('onestarko/readarticle',[
            'articles' => $articles,

        ]);
    }


    public function article($id){

        $article = Article::find($id);

        return view('onestarko/article',[
            'article' => $article,
        ]);


    }

    public function music(){

        return view('onestarko/music',[
        ]);
    }


    public function info(){

        return view('onestarko/info');

    }




}