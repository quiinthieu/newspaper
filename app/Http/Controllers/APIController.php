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
    public function business() {
        $params = [
            'language' => 'en',
            'sortBy' => 'publishedAt',
            'q' => 'business'
        ];
        $articles = $this->newsAPI->everything($params);
        return view('business', compact($articles));
    }
    public function topThumbnail() {
        $params = [
            'country' => 'us',
            'category' => 'technology'
        ];
        return $this->newsAPI->topHeadlines($params);
    }
}
