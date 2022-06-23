<?php

namespace App\Repository;

use Illuminate\Http\Request;

interface AdvancedSearchRepositoryInterface
{
    public function index();

    public function searchInfluencer(Request $request);
    public function searchBusiness(Request $request);
    public function searchUsername(Request $request);
}
