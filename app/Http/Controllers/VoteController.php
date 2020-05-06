<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicate = Vote::where([
            ['question_id', '=', $request->question_id],
        ])->first();

        if ($duplicate) {
            
            if((gettype($duplicate->user_id) != "array")){
                $newUsers = array($duplicate->user_id);
            }else{
                $newUsers = $duplicate->user_id;
            }

            if(in_array($request->user_id, $newUsers)){
                return response()->json([
                    "message" => "You cannot Vote again!"
                ]);
            }
            array_push($newUsers, $request->user_id);
            $update = $duplicate->update([
                "user_id" => $newUsers,
                "vote" => $request->vote == 1 ? $duplicate->vote + 1 : $duplicate->vote - 1,
            ]);

            if($update){
                return response()->json([
                    "message" => "Updated !"
                ]);  
            }
        }else{
            $vote = Vote::create($request->all());

            if ($vote) {
                return response()->json([
                    "message" => "Your Vote have been Casted !"
                ]);
            } else {
                return response()->json([
                    "message" => "There was a problem while casting your vote"
                ], 500);
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
