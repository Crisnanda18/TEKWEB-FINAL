<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\KategoriFilm;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(){
        return view('film.search');
    }

    public function search(Request $request)
    {
    if($request->ajax())
    {
        $output = '';
        $query = $request->get('query');

        if($query != ''){
            $data = DB::table('film')
                ->where('judul', 'LIKE', "%{$query}%")
                ->get();
            }
        else{
            $data = DB::table('film') ->orderBy('judul', 'asc')
                ->get();
        }

        $total_row = $data->count();
        if($total_row > 0)
        {
            foreach($data as $row)
            {
                $output .= '
                <tr>
                    <td>'.$row->judul.'</td>
                    <td>'.$row->tahun.'</td>
                    <td>'.$row->sutradara.'</td>
                    <td>
                        <a href="'.route('film.show', $row->id).'" class="btn btn-sm btn-secondary">Watch</a>
                </tr>
                ';
            }
        }
        else
        {
            $output = '
            <tr>
                <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
        }

        $data = array(
            'table_data'  => $output,
            'total_data'  => $total_row
        );

        echo json_encode($data);
       }
    
    }
}

