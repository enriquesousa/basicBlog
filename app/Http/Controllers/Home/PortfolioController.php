<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Portfolio;
use Intervention\Image\ImageManager;

class PortfolioController extends Controller
{
    // AllPortfolio
    public function AllPortfolio(){
        $portfolios = Portfolio::latest()->get();
        return view('admin.portfolio.portfolio_all',compact('portfolios'));
    }



}
