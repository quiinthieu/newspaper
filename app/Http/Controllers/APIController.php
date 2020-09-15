<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\NewsAPI;

class APIController extends Controller {
    protected $newsAPI;

    public function __construct(NewsAPI $newsAPI)
    {
        $this->newsAPI = $newsAPI;
    }

    public function home() {
        $params = [
            'language' => 'en',
            'q' => 'business',
            'pageSize' => 100
        ];
        $articles = array_filter($this->newsAPI->everything($params), function ($article) {
            return strlen($article['title']) < 50;
        });
        $topThumbnailArticles = array_slice($articles, 0, 4);
        return view('home', compact('topThumbnailArticles'));
    }
}
