<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
class ReviewController extends Controller
{
    public function store(Request $request){
        try {
            $review = new Review();
            $review->user_id = Auth::id();
            $review->film_id = $request->film_id;
            $review->rating = $request->rating;
            $review->komentar = $request->komentar;
            $review->save();

            return redirect()->route('film.show', $request->film_id)->with('success','Review added successfully');
        } catch (QueryException $e) {
            return redirect()->route('film.show', $request->film_id)->with('error','You have already reviewed this film');
        }
    }

    public function destroy($id){
        $review = Review::find($id);
        if($review->delete()){
            return redirect()->route('film.show', $review->film_id)->with('success','Review deleted successfully');
        }
        return redirect()->route('film.show', $review->film_id)->with('error','Review failed to be deleted');
    }
}
