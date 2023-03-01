<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\Http\Requests\storeUpadatePost;
use App\Models\Event;
use App\Models\User;




class EventController extends Controller
{
    public function index()
    {
        $search = request('search');

        if($search)
        {
            $eventos = Event::where([
                ['title', 'like', '%'. $search.'%']
            ])->get();
        }else
        {
            $eventos = Event::all(); // pegando todos os eventos do banco e passando para a view
        }
            

        //var_dump($eventos);
        return view('welcome', ['eventos'=>$eventos , 'search'=>$search]);
    }

    public function  create()
    {

        return view ('events.create');
    }

    public function store(storeUpadatePost $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->cidade = $request->cidade;
        $event->private = $request->private;
        $event->descricao = $request->descricao;
        $event->itens = $request->itens;

        //IMAGE UPLOAD 

        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;            

            $requestImage->move(public_path('img/events'), $imageName) ;

            $event->image = $imageName;
            
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso !'); 

    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        $eventOwner = User::Where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event , 'eventOwner' => $eventOwner]);
    }

    public function dashboard()
    {
        $user = auth()->user();

        $events = $user->events;

        $eventsParticipantes = $user->eventsParticipantes;

        return view('events.dashboard', ['events' => $events, 'eventsParticipantes' => $eventsParticipantes] );
    }

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluido com sucesso');
    }

    public function edit($id)
    {
        $edit = Event::findOrfail($id);

        return view('events.edit', ['event' => $edit]);
    }

    public function update(Request $request)
    
    {
        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid())
        {
            

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;            

            $requestImage->move(public_path('img/events'), $imageName) ;

            $data['image'] = $imageName;
            
        }

        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento editado com sucesso');
    }

    public function joinEvent($id)
    {
        $user = auth()->user();
         
        //Inserindo atraves do model Event
        $user->eventsParticipantes()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua presença foi confirmada ! ' . $event->title);
    }

    public function leaveEvent($id) // id do evento
    {
        $user = auth()->user();

        $user->eventsParticipantes()->detach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Você saiu com sucesso do  ! ' . $event->title . ' seu vacilão');


    }



}
