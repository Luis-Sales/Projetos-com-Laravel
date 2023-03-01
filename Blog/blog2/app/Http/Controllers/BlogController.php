<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Comentario;


class BlogController extends Controller
{
    public function index()
    {

        
        $search = request('search');
        
        //dd($search);

        if ($search)
        {
            $blogs = Blog::Where([
                ['titulo','like','%'.$search.'%']
            ])->get();
        }
        else
        {
            //dd('erro');
            $blogs = Blog::simplePaginate(6);
        }

        //dd($blogs);


            return view('blog.index',[ "blog" => $blogs, "blogs" => $blogs, 'search'=>$search]);
    }

    public function createnoticia()
    {
        return view('blog.formulario');
    }
 
    public function store(Request $request)
    {
        //dd($request);
       
        $data = $request->all();
        //dd($data);
        if($request->hasFile('image') && $request->image->isValid())
        {
          $image = $request->image->store('noticias');
            
          $data['image'] = $image;
        }
        
        Blog::create($data); 

        return redirect ('/')->with('sucesso','Usuario cadastrado');   
    }

    public function edit($id)
    {
        $noticia = Blog::Where('id', $id)->first();


        if(!empty($noticia))
        {
            $comentario = Comentario::all();
            $user = auth()->user();
          
            return View('blog.f',['noticias'=>$noticia, 'comentario'=>$comentario , 'user'=>$user]);
        }
        else{
            return redirect('/');
        }
       
    }

    public function joinBlog($id)
    {
        //dd('ola');
        $user = auth()->user();
        $deujoin = false;
        $user->blogAsParticipante()->attach($id);

        $blog = Blog::findOrFail($id);
        //dd($user);
        
        return redirect()->to(url()->previous())->with('msg', 'Like em '.$blog->titulo);
    }

    public function destroy($id)
    {
        
    
        if(Gate::allows('admin')){
            //echo "Admin";
             Blog::where('id', $id)->delete();
            return redirect ('/')->with('mensagem', 'Post Exluido !');
        }else{
            return redirect ('/');
        }
        
    }


    public function comentario(Request $request)
    {
        //dd($request->all());
        $dados = $request->all();
        Comentario::create($dados);
        return redirect()->to(url()->previous());
    }
}
