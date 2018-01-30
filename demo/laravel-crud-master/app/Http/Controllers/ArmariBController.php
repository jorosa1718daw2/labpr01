<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 29/01/2018
 * Time: 1:06
 */

namespace App\Http\Controllers;

use App\ArmariB;
use App\Bear;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Auth;



class ArmariBController extends  Controller
{
    public function __construct() {
        //$this->middleware('auth', ['only' => 'create']);
        //$this->middleware('auth', ['only' => ['create', 'edit', 'destroy']]);
        //$this->middleware('auth', ['except' => ['index']]);
        $this->middleware('auth');
    }

    public function index() {

        //return \Auth::user();
        $armarib = ArmariB::all();
        //$articles = Article::latest()->get();
        //$articles = Article::oldest()->get();
        //$articles = Article::orderBy('published_at', 'desc')->get(); // you can do this too
        //$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();  // not give the articles that published in the future
        //$articles = Article::latest('published_at')->published()->get();

        return view('armaribview.index', compact('armarib'));
    }
    public function show($id) {
//        $article = Article::find($id);
//        if(is_null($article)){
//            abort(404);
//        }
        $armarib = ArmariB::findOrFail($id);

        //dd($article->published_at);
        //dd($article->created_at);
        // dd($article->created_at->year); // you can do that show only year
        // dd($article->created_at->addDays(8)); // i wanna add 8 days to it
        // dd($article->created_at->addDays(8)->format('Y-m')); // you can also formated
        // dd($article->created_at->addDays(8)->diffForHumans()); // you can also formated fifferent way
        //return $article;
        return view('armaribview.show', compact('armarib'));
    }
    public function create() {
        //return Auth::user();
        return view('armaribview.create');
    }

    public function store(Requests\ArmariBRequest $request) {

        /*
          $input = Request::all();
          $input['published_at'] = Carbon::now();
          $input['users_id'] = Auth::id();
          Article::create($input);
         */

        $request['id'] = Auth::id();
        ArmariB::create($request->all());

        //Session::flash('flash_message', 'Article has been created!');
        flash()->success('ArmariB has been created!');

        return redirect('armaribview');
    }

    public function edit($id) {
        $armarib = ArmariB::findOrFail($id);
        return view('armaribview.edit', compact('armarib'));
    }

    public function update($id, Requests\ArmariBRequest $request) {
        $armarib = ArmariB::findOrFail($id);
        $armarib->update($request->all());

        flash()->success('Article has been updated!');
        return redirect('armaribview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $armarib = ArmariB::findOrFail($id);
        $armarib->delete();

        flash()->success('ArmariB has been deleted!');
        return redirect('armaribview');
    }
}