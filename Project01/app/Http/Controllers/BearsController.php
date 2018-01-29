<?php


namespace App\Http\Controllers;

use App\Bear;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Auth;


class BearsController extends Controller

{
    public function __construct() {
        //$this->middleware('auth', ['only' => 'create']);
        //$this->middleware('auth', ['only' => ['create', 'edit', 'destroy']]);
        //$this->middleware('auth', ['except' => ['index']]);
        $this->middleware('auth');
    }

    public function index()
    {

        //return \Auth::user();
        //$articles = Article::all();
        //$articles = Article::latest()->get();
        //$articles = Article::oldest()->get();
        //$articles = Article::orderBy('published_at', 'desc')->get(); // you can do this too
        //$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();  // not give the articles that published in the future

        $bears = Bear::all();
        return view('bearsview.index', compact('bears'));
    }

    public function show($id)
    {
        return view('bearsview.show', ['bears' => Bear::findOrFail($id)]);
    }


    public function create()
    {
        //return Auth::user();
        return view('bearsview.create');
    }

    public function update($id,Requests\BearRequest $request)
    {
        $bear = Bear::findOrFail($id);
        $bear->update($request->all());

        flash()->success('Bear has been updated!');
        return redirect('bearsview');
    }

    public function destroy($id)
    {
        $bear = Bear::findOrFail($id);
        $bear->delete();
    }

    public function store(Requests\BearRequest $request) {

        /*
          $input = Request::all();
          $input['published_at'] = Carbon::now();
          $input['users_id'] = Auth::id();
          Article::create($input);
         */

        $request['users_id'] = Auth::id();
        Bear::create($request->all());

        //Session::flash('flash_message', 'Article has been created!');
        flash()->success('Bear has been created!');

        return redirect('bearsview');
    }

    public function edit($id) {
        $bear = Bear::findOrFail($id);
        return view('bearsview.edit', compact('bear'));
    }

}