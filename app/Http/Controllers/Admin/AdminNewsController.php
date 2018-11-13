<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Category;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('category')->orderBy('created_at', 'desc')->paginate(5);

        return view('admin\admin_news', ['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin\news_create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:50',
            'short_content' => 'required',
            'news_code' => 'required|unique:news',
            'category' => 'required',
            'text' => 'required',
            'image' => 'file|image'
        ];
        $messages = [
            'required' => 'Все поля формы должны быть заполнены!',
            'unique' => 'ЧПУ-код для новости должен быть уникальным!',
            'max' => 'Размеры полей не должны превышать установленного значения!',
            'image' => 'Файл должен быть изображением с форматом jpeg, png, bmp, gif или svg!'
        ];
        $this->validate($request, $rules, $messages);

        $image = $request->file('image');
        $imageName = time() . $image->getClientOriginalName();
        $imagePath = 'img/news';

        News::create([
            'news_code' => $request->news_code,
            'news_title' => $request->title,
            'news_short_content' => $request->short_content,
            'news_content' => $request->text,
            'news_preview' => '/'.$imagePath .'/'. $imageName,
            'category_id' => $request->category

        ]);

        $image->move($imagePath, $imageName);

        return view('admin.news_store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::with('category')->find($id);

        return view('admin.news_show', ['news'=>$news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::all();

        return view('admin.news_edit', ['news' => $news, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required|max:50',
            'short_content' => 'required',
            'news_code' => 'required|unique:news,id,'. $id,
            'category' => 'required',
            'text' => 'required',
            'image' => 'file|image'
        ];
        $messages = [
            'required' => 'Все поля формы должны быть заполнены!',
            'unique' => 'ЧПУ-код для новости должен быть уникальным!',
            'max' => 'Размеры полей не должны превышать установленного значения!',
            'image' => 'Файл должен быть изображением с форматом jpeg, png, bmp, gif или svg!'
        ];
        $this->validate($request, $rules, $messages);

        $news = News::find($id);

        $news->news_title = $request->title;
        $news->news_short_content = $request->short_content;
        $news->news_code = $request->news_code;
        $news->category_id = $request->category;
        $news->news_content = $request->text;

        if($request->file('image')){
            $image = $request->file('image');
            $imagePath = 'img/news';
            $imageName = time() . $image->getClientOriginalName();
            $news->news_preview = '/'.$imagePath .'/'. $imageName;
            $image->move($imagePath, $imageName);
        }
        $news->save();

        return view('admin.news_updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedNews = News::find($id);
        $deletedNews->delete();

        return back();
    }
}
