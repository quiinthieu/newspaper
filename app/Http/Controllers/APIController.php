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

    protected function getTopThumbnailArticles() {
        $params = [
            'sources' => 'cbs-news',
            'language' => 'en',
            'pageSize' => 100,
            'q' => 'book'
        ];
        return array_slice(array_filter($this->newsAPI->everything($params), function ($article) {
            return strlen($article['title']) < 50;
        }), 0, 4);

    }
    protected function getOwlCarouselArticles() {
        $params = [
            'sources' => 'ars-technica',
            'pageSize' => 100
        ];
        return array_slice(array_filter($this->newsAPI->everything($params), function ($article) {
            return strlen($article['title']) < 50;
        }), 0, 4);
    }
    protected function getTopSideBarArticles() {
        $params = [
            'sources' => 'entertainment-weekly',
            'pageSize' => 100
        ];
        return array_slice(array_filter($this->newsAPI->everything($params), function($article) {
            return strlen($article['title']) < 50 && strlen($article['author']) < 20;
        }), 0, 6);
    }

    public function home() {
        $topThumbnailArticles = $this->getTopThumbnailArticles();
        $owlCarouselArticles = $this->getOwlCarouselArticles();
        $topSideBarArticles = $this->getTopSideBarArticles();
        return view('home', compact('topThumbnailArticles', 'owlCarouselArticles', 'topSideBarArticles'));
    }
}
