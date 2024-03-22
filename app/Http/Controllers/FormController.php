<?php

namespace App\Http\Controllers;

use App\Models\form;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;



class FormController extends Controller
{
    public function register(Request $request) {

        /**
         * Validate form by rules
         * automatic redirect to home when validation is true
         */
        $formfields = $request->validate([
            'name' => 'required|string|max:50',
            'gender' => 'required|max:50',
            'age' => 'Digitsbetween:0,100',
            'address' => 'required|string|max:100', 
            'id_person' => 'required|string|max:100',
            'district' => 'required|max:50',
            'city' => 'required|max:50',
            'number_id' => 'int|min:15',
            'province' =>'required|string|max:100',
            'religion' => 'required|max:50',
            'date_of_birth' =>'Date',
            "work"=> 'max:100',
            'work_location' => 'max:100',
            'monthly_salary' => 'required|digitsbetween:0,100000',
            'cellphone_no' => 'int|min:12',
            'section_department' => 'max:100',
            'condition_of_health' => 'string',
            'benepisyaryo_ng_UCT' => 'string',
            'benepisyaro_ng_4Ps' => 'string',
            'Katutubo_(Grupo)' => 'string',
            'Others' => 'string',

        

          
        ]);

        /**
         * Instantiate code insert db
         */
       
        $data = form::create($formfields);
        //echo "Success registration";
        //return redirect()-back('message','Register Successfully');
        Alert::success('Fill-up Successfully');
        return redirect()->back();
        ;
        
        
        // echo  'Hi from Controller';

        // return;
             
  
    }
}

       
