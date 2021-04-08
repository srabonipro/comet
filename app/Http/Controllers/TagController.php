<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Show Page
    public function showPage(){
        return view('backend.tag');
    }


    // Store
    public function store(Request $request){
        Tag::create([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
        ]);
        return true;
    }


    // get records
    public function getRecords(){
        $records = Tag::all();
        $output = '';
        $i = 1;

        foreach($records as $record){
            $output .= '<tr>';
            $output .= '<td>'. $i .'</td>';
            $output .= '<td>'. $record->name .'</td>';
            $output .= '<td>'. $record->slug .'</td>';
            $output .= '<td>
                            <div class="status-toggle">
                                <input type="checkbox" tag_id="" id="status_'.$i.'" class="check tag_check" '. ( $record->status == true ? "checked" : "") .'>
                                <label for="status_'.$i.'" class="checktoggle">checkbox</label>
                            </div>
                        </td>';
            $output .= '<td class="text-right">
                            <div class="actions">
                                <a id="edit_role_btn" class="btn btn-sm bg-success-light" href="#">
                                    <i class="fe fe-pencil"></i> Edit
                                </a>
                                <a  data-toggle="modal" href="#delete_modal" class="btn btn-sm bg-danger-light">
                                    <i class="fe fe-trash"></i> Delete
                                </a>
                            </div>
                        </td>';
            $output .= '</tr>';

            $i++;
        }
        return $output;
    }
}
