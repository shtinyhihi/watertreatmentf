<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Models\News;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class WebController extends Controller
{
    public function solutioncategory()
    {
        $categ_slts = Solution::all();
        return view('web_watertreatment.solution', compact('categ_slts'));
    }

    public function solution($id)
    {
        $sltdetail = DB::table('solutions')->where('solution_id', $id)->first();
        return view('web_watertreatment.solution-detail', compact('sltdetail'));
    }

    public function solutioncategbytag($tag)
    {
        $categ_slts = DB::table('solutions')->where('solution_tag', 'like', '%' . $tag . '%')->get();
        return view('web_watertreatment.solution', compact('categ_slts'));
    }

    public function newscategory()
    {
        $categ_news = News::all();
        return view('web_watertreatment.news', compact('categ_news'));
    }

    public function news($id)
    {
        $newsdetail = DB::table('news')->where('news_id', $id)->first();
        return view('web_watertreatment.news-detail', compact('newsdetail'));
    }
}
