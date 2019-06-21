<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ModelController extends Controller
{
    public function index(Article $articleModel)
    {
        $data = $articleModel->get();


        dump($data);
    }

    public function get()
    {
        $data = Article::select('category_id', 'title', 'content')
            ->where('title', '<>', '文章1')
            ->groupBy('category_id')
            ->orderBy('id', 'desc')
            ->get();

        // 查询数据的时候带上被软删除的 Article::withTrashed()->get();
        // 只查已经软被删除 Article::onlyTrashed()->get();
        // 恢复删除 $articleModel->where('id', $id)->restore();
        // 彻底删除 $articleModel->where('id', $id)->forceDelete();
//        $data = Article::onlyTrashed()->get();

        dump($data->toArray());
    }
    public function store(Article $articleModel)
    {
        $data = [
            'category_id' => 6,
            'title' => '文章6',
            'content' => '内容6'
        ];
        $articleModel->create($data);
    }

    public function update(Article $articleModel)
    {
        $id = 3;
        $data = [
            'category_id' => 2,
            'title' => '文章6',
            'content' => '内容666'
        ];
        $result = $articleModel->where('id', $id)->update($data);
        dump($result);
    }

    public function delete(Article $articleModel)
    {
        $id = 5;
        $result = $articleModel->where('id', $id)->delete();
        dump($result);
    }
}
