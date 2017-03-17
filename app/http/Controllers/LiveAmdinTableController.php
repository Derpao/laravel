<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LiveTable;

class LiveAmdinTableController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth:admin');
    }



        public function AdminTableEdit()
        {
            return view('table_live');
        }

        public function AdminTableEditInsert(Request $request)
         {
          //  \Log::error('testtest');
          //    $LiveTable = LiveTable::create($request->all());
            //  return response()->json($create);
            return  response()->json("success");
         }


         public function index(Request $request)
            {

                      $items =  LiveTable::latest()->paginate(5);
                      return response()->json($items);
            }

            /**
             * Store a newly created resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @return \Illuminate\Http\Response
             */
            public function store(Request $request)
            {
                \Log::error('testtest');
                $LiveTable = LiveTable::create($request->all());
                return response()->json("success");
            }

            /**
             * Update the specified resource in storage.
             *
             * @param  \Illuminate\Http\Request  $request
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function update(Request $request, $id)
            {
                return true;
            }

            /**
             * Remove the specified resource from storage.
             *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
                return true;
            }

}
