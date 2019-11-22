<?php


namespace App\Http\Controllers;


use App\Article;
use App\Tools\Archive;

class ArchiveController extends Controller
{
    public function index()
    {
        $data = Article::checkAuth()->get();
//        dd($data);
        $articles =  (new Archive())->ArchivesDocument($data);
//        $articles =  [];
//        dd($articles);
//        foreach ($articles as $article){
//            foreach ($article as $list){
//                foreach ($list as $data){
//                    dd($data);
//                }
//            }
//        }
        return view('archive.index', compact('articles'));
    }
}