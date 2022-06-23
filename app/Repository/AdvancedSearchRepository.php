<?php

namespace App\Repository;

use App\Models\Business;
use App\Models\Category;
use App\Models\Country;
use App\Models\Gender;
use App\Models\Influencer;
use Illuminate\Http\Request;

class AdvancedSearchRepository implements AdvancedSearchRepositoryInterface
{
    public function index()
    {
        return view('businesses.advanced-search-business', [
            'Genders' => Gender::all(),
            'Countries' => Country::all(),
            'Categories' => Category::all(),
        ]);
    }

    public function searchInfluencer(Request $request)
    {
        $category = $_GET['value1'];
        $country = $_GET['value2'];

        if (empty($category) && !empty($country)) {
            $influencers = Influencer::where('country_id', $country)->get();

            foreach ($influencers as $influencer) {
                echo '

                    <div class="col-md-4" style="margin-top: 30px; ">
                        <div class="card">
                            <div class="card-image">
                                <img src="' . asset("https://influence.co/assets/unclaimed-profile-header-images/austin-smart-70350-unsplash-a50beabe16bc3068b098291fc41594a8fe0e25f45732e2200384a6b001d52ba5.jpg") . '">

                            </div>
                            <div class="profile-image" style="margin:auto">
                                <img src="' . asset("storage/influencer_images/" . $influencer->name . "/" . $influencer->profile_picture . "") . '">
                            </div>
                            <div class="card-content">
                                        <h3>' . $influencer->full_name . '</h3>
                                        <p style="text-align: center">' . $influencer->headline . '</p>
                            </div>
                            <div class="icons">
                                        <a href="#" class="fab fa-facebook-f"></a>
                                        <a href="#" class="fab fa-instagram"></a>
                            </div>
                            <div class="card-buttons">
                                        <a href="http://localhost:8000/en/user/' . $influencer->name . '"><button > View Profile</button></a>
                            </div>
                        </div>
                    </div>

                        ';
            }

        } elseif (!empty($category) && empty($country)) {
            $influencers = Influencer::where('category_id', $category)->get();
            foreach ($influencers as $influencer) {
                echo '
                     <div class="col-md-4" style="margin-top: 30px; ">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="' . asset("https://influence.co/assets/unclaimed-profile-header-images/austin-smart-70350-unsplash-a50beabe16bc3068b098291fc41594a8fe0e25f45732e2200384a6b001d52ba5.jpg") . '">

                                    </div>
                                    <div class="profile-image" style="margin:auto">
                                        <img src="' . asset("storage/influencer_images/" . $influencer->name . "/" . $influencer->profile_picture . "") . '">
                                    </div>
                                    <div class="card-content">
                                                <h3>' . $influencer->full_name . '</h3>
                                                <p style="text-align: center">' . $influencer->headline . '</p>
                                    </div>
                                    <div class="icons">
                                                <a href="#" class="fab fa-facebook-f"></a>
                                                <a href="#" class="fab fa-instagram"></a>
                                    </div>
                                    <div class="card-buttons">
                                                <a href="http://localhost:8000/en/user/' . $influencer->name . '"><button > View Profile</button></a>
                                    </div>
                                </div>
                            </div>
                    ';
            }

        } elseif (!empty($category) && !empty($country)) {
            $influencers = Influencer::where('category_id', $category)->where('country_id', $country)->get();
            foreach ($influencers as $influencer) {
                echo '
                 <div class="col-md-4" style="margin-top: 30px; ">
                        <div class="card">
                            <div class="card-image">
                                <img src="' . asset("assets/images/icons/cover-img.jpg") . '">
                            </div>
                            <div class="profile-image" style="margin:auto">
                                <img src="' . asset("https://influence.co/assets/unclaimed-profile-header-images/austin-smart-70350-unsplash-a50beabe16bc3068b098291fc41594a8fe0e25f45732e2200384a6b001d52ba5.jpg") . '">
                             </div>
                            <div class="card-content">
                                        <h3>' . $influencer->full_name . '</h3>
                                        <p style="text-align: center">' . $influencer->headline . '</p>
                            </div>
                            <div class="icons">
                                        <a href="#" class="fab fa-facebook-f"></a>
                                        <a href="#" class="fab fa-instagram"></a>
                            </div>
                            <div class="card-buttons">
                                        <a href="http://localhost:8000/en/user/' . $influencer->name . '"><button > View Profile</button></a>
                            </div>
                        </div>
                    </div>
                    ';
            }
        }
    }

    public function searchBusiness(Request $request)
    {
        $category = $_GET['value3'];
        $country = $_GET['value4'];

        if (empty($category) && !empty($country)) {
            $businesses = Business::where('country_id', $country)->get();
            foreach ($businesses as $business) {
                echo '

                <div class="col-md-4" style="margin-top: 30px; ">
                  <div class="card">
                      <div class="card-image">
                       <img src="' . asset("https://influence.co/assets/unclaimed-profile-header-images/austin-smart-70350-unsplash-a50beabe16bc3068b098291fc41594a8fe0e25f45732e2200384a6b001d52ba5.jpg") . '">

                      </div>
                      <div class="profile-image" style="margin:auto">
                      <img src="' . asset("storage/business_images/" . $business->name . "/" . $business->profile_picture . "") . '">

                      </div>
                      <div class="card-content">
                                        <h3>' . $business->first_name . '</h3>

                      </div>
                      <div class="icons">

                                        <a href="#" class="fab fa-instagram"></a>
                                        </div>
                       <div class="card-buttons">
                                        <button> View Profile</button>
                                    </div>
                                </div>
                        </div>
                        ';
            }

        } elseif (!empty($category) && empty($country)) {
            $businesses = Business::where('category_id', $category)->get();
            foreach ($businesses as $business) {
                echo '

                <div class="col-md-4" style="margin-top: 30px; ">
                  <div class="card">
                      <div class="card-image">
                        <img src="' . asset("https://influence.co/assets/unclaimed-profile-header-images/austin-smart-70350-unsplash-a50beabe16bc3068b098291fc41594a8fe0e25f45732e2200384a6b001d52ba5.jpg") . '">
                      </div>
                      <div class="profile-image" style="margin:auto">
                      <img src="' . asset("storage/business_images/" . $business->name . "/" . $business->profile_picture . "") . '">

                      </div>
                      <div class="card-content">
                                        <h3>' . $business->first_name . '</h3>

                      </div>
                      <div class="icons">

                                        <a href="#" class="fab fa-instagram"></a>

                                        </div>
                       <div class="card-buttons">
                                        <a href="http://localhost:8000/en/user/' . $business->name . '"><button > View Profile</button></a>
                                    </div>
                                </div>
                        </div>
                      ';
            }

        } elseif (!empty($category) && !empty($country)) {
            $businesses = Business::where('category_id', $category)->where('country_id', $country)->get();
            foreach ($businesses as $business) {
                echo '

                <div class="col-md-4" style="margin-top: 30px; ">
                  <div class="card">
                      <div class="card-image">
                        <img src="' . asset("https://influence.co/assets/unclaimed-profile-header-images/austin-smart-70350-unsplash-a50beabe16bc3068b098291fc41594a8fe0e25f45732e2200384a6b001d52ba5.jpg") . '">

                      </div>
                      <div class="profile-image" style="margin:auto">
                      <img src="' . asset("storage/business_images/" . $business->name . "/" . $business->profile_picture . "") . '">

                      </div>
                      <div class="card-content">
                                        <h3>' . $business->first_name . '</h3>

                      </div>
                      <div class="icons">
                                        <a href="#" class="fab fa-instagram"></a>

                                        </div>
                       <div class="card-buttons">
                                        <button> View Profile</button>
                                    </div>
                                </div>
                        </div>
                        ';
            }
        }
    }

    public function searchUsername(Request $request)
    {
        $category = $_GET['value5'];
        dd($category);


    }


//        $influencers =Influencer::where('category_id', $category)->get();

//            echo '<table>';
//            echo '
//              <tr style="background-color:pink;">
//                <td style="font-size:18px;">'. $influencer->name .'</td>
//              </tr>';
//            echo '</table>';


//        $category = $request->get('category');
//        $country = $request->get('country');

//        if(empty($category) && !empty($country)){
//            $influencers =Influencer::where('country_id', $country)->get();

////            if($influencers){
////                return response() -> json([
////                    'status' =>true,
////                    'msg' =>'influencers found successfully',
////                ]);
////            }
////               else response() -> json([
////                   'status' =>false,
////                   'msg' =>'influencers not found successfully',
////               ]);
//        }
//        elseif (!empty($category) && empty($country)){
//            $influencers =Influencer::where('category_id', $category)->get();
//            return response()->json($influencers);
//
//        }
//        elseif (!empty($category) && !empty($country)){
//            $influencers =Influencer::where('category_id', $category)->where('country_id', $country)->get();
//            return response()->json($influencers);
//
//        }
//        elseif (empty($category) && empty($country)){
//
//                echo "error";
//
//        }


}
