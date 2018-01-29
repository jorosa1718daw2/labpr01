<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 29/01/2018
 * Time: 1:06
 */

namespace App\Http\Controllers;

use App\Armari_A;
use App\Bear;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Auth;



class ArmariController extends  Controller
{
    public function __construct() {
        //$this->middleware('auth', ['only' => 'create']);
        //$this->middleware('auth', ['only' => ['create', 'edit', 'destroy']]);
        //$this->middleware('auth', ['except' => ['index']]);
        $this->middleware('auth');
    }

    public function index() {

        //return \Auth::user();
        $armaris = Armari_A::all();
        //$articles = Article::latest()->get();
        //$articles = Article::oldest()->get();
        //$articles = Article::orderBy('published_at', 'desc')->get(); // you can do this too
        //$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();  // not give the articles that published in the future
        //$articles = Article::latest('published_at')->published()->get();

        return view('armarisview.index', compact('armaris'));
    }
    public function show($id) {
//        $article = Article::find($id);
//        if(is_null($article)){
//            abort(404);
//        }
        $armaris = Armari::findOrFail($id);

        //dd($article->published_at);
        //dd($article->created_at);
        // dd($article->created_at->year); // you can do that show only year
        // dd($article->created_at->addDays(8)); // i wanna add 8 days to it
        // dd($article->created_at->addDays(8)->format('Y-m')); // you can also formated
        // dd($article->created_at->addDays(8)->diffForHumans()); // you can also formated fifferent way
        //return $article;
        return view('armarisview.show', compact('armaris'));
    }
    public function create() {
        //return Auth::user();
        return view('armarisview.create');
    }

    public function store(Requests\ArmariRequest $request) {

        /*
          $input = Request::all();
          $input['published_at'] = Carbon::now();
          $input['users_id'] = Auth::id();
          Article::create($input);
         */

        $request['id'] = Auth::id();
        Armari_A::create($request->all());

        //Session::flash('flash_message', 'Article has been created!');
        flash()->success('ArmariA has been created!');

        return redirect('armarisview');
    }

    public function edit($id) {
        $armaris = Armari_A::findOrFail($id);
        return view('armarisview.edit', compact('armaris'));
    }

    public function update($id, Requests\ArmariRequest $request) {
        $armaris = Armari_A::findOrFail($id);
        $armaris->update($request->all());

        flash()->success('Article has been updated!');
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $armaris = Armari_A::findOrFail($id);
        $armaris->delete();

        flash()->success('ArmariA has been deleted!');
        return redirect('armarisviews');
    }
}