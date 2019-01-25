<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;


class NewsController extends Controller
{
    /**
     * ニュース新規作成画面を表示する
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.news.create');
    }

    /**
     * ニュースを作成する
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, News::$rules);

        $news = new News;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image']))
        {
            $path = $request->file('image')->store('public/image');
            $news->image_path = basename($path);
        }
        else
        {
            $news->image_path = null;
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $news->fill($form);
        $news->save();

        // admin/news/createにリダイレクトする
        return redirect('admin/news/create');
    }

    /**
     * ニュースを表示する
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '')
        {
            // 検索されたら検索結果を取得する
            $posts = News::where('title', $cond_title)->get();
        }
        else
        {
            // それ以外はすべてのニュースを取得する
            $posts = News::all();
        }

        return view('admin.news.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    /**
     * ニュースの編集画面を表示する
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $news = News::find($request->id);

        return view('admin.news.edit', ['news_form' => $news]);
    }

    /**
     * ニュースを更新する
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, News::$rules);

        // News Modelからデータを取得する
        $news = News::find($request->id);

        // 送信されてきたフォームデータを格納する
        $news_form = $request->all();
        if (isset($news_form['image'])) {
            $path = $request->file('image')->store('public/image');
            $news->image_path = basename($path);
        } else {
            $news->image_path = null;
        }
        // \Debugbar::info(isset($news_form['image']));
        unset($news_form['_token']);
        unset($news_form['image']);

        // 該当するデータを上書きして保存する
        $news->fill($news_form)->save();

        return redirect('admin/news');
    }

    /**
     * ニュースを削除する
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $news = News::find($request->id);

        // 削除する
        $news->delete();

        return redirect('admin/news/');
    }

}
