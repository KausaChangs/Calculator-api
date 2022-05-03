<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
use Response;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;


class ApiController extends Controller
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


    public function sum(Request $request)
    {
        
        $validated = $request->validate([
            "n1" => "required|numeric",
            "n2" => "required|numeric",
        ]);

        DB::statement("UPDATE backs SET backCount = 0 WHERE id = 1");

        $row = DB::table("posts")->get();
        
        foreach ($row as $record){
           if ($record->post_id == 1){
                DB::table('posts')
                     ->where("id", $record->id)
                     ->update(['post_id' => 2]);
            }
            elseif($record->post_id == 2){
                DB::table('posts')
                ->where("id", $record->id)
                ->update(['post_id' => 3]);
            }
            elseif($record->post_id == 3){
                DB::table('posts')
                ->where('id', $record->id)
                ->update(['post_id' => 4]);
            }
            else{
               // DB::table('posts')->where('post_id', '>', 3)->delete();
            }
        }
            DB::table('posts')->where('post_id', '>', 3)->delete();
       
        $post = new Post();
        $post->n1=$request->input("n1");
        $post->n2=$request->input("n2");
        $post->answer=$request->input('n1') + $request->input('n2');
        $post->post_id = 1;
        $post-> save();

        return response()->json([
            'n1' => $request->input('n1'),
            'n2' => $request->input('n2'),
            'answer'=> $request->input('n1') + $request->input('n2')

        ]);
    }

   
    
    public function subtract(Request $request)
    {
        $validated = $request->validate([
            "n1" => "required|numeric",
            "n2" => "required|numeric",
        ]);

        DB::statement("UPDATE backs SET backCount = 0 WHERE id = 1");

        $row = DB::table("posts")->get();
        /*
        foreach ($row as $record){
            if ($record->post_id == 1){
                 
                 DB::table('posts')
                        ->where("id", $record->id)
                        ->update(['post_id' => 2]);
             }
             elseif($record->post_id == 2){
                 
                 DB::table('posts')
                 ->where("id", $record->id)
                 ->update(['post_id' => 3]);
                     
             }
             elseif($record->post_id == 3){
                 DB::table('posts')
                 ->where('id', $record->id)
                 ->update(['post_id' => 4]);
             }
             else{
                // DB::table('posts')->where('post_id', '>', 3)->delete();
             }
         }
             DB::table('posts')->where('post_id', '>', 3)->delete();
 



        $post = new Post();
        $post->n1= $request->input("n1");
        $post->n2=$request->input("n2");
        */
       // $post->operand = $request->input("operand");
        operate();
        $post->answer=$request->input('n1') - $request->input('n2');
        $post->post_id = 1;
        $post-> save();

        return response()->json([
            'n1' => $request->input('n1'),
            'n2' => $request->input('n2'),
            'answer'=> $request->input('n1') - $request->input('n2')

        ]);
         
    }
    private function operate(Request &$row, &$post){
      
        foreach ($row as $record){
            if ($record->post_id == 1){
                 DB::table('posts')
                    ->where("id", $record->id)
                    ->update(['post_id' => 2]);
             }
             elseif($record->post_id == 2){
                 
                 DB::table('posts')
                 ->where("id", $record->id)
                 ->update(['post_id' => 3]);
                     
             }
             elseif($record->post_id == 3){
                 DB::table('posts')
                 ->where('id', $record->id)
                 ->update(['post_id' => 4]);
             }
             else{
                // DB::table('posts')->where('post_id', '>', 3)->delete();
             }
         }
             DB::table('posts')->where('post_id', '>', 3)->delete();

        $post = new Post();
        $post->n1= $request->input("n1");
        $post->n2=$request->input("n2");
    }
    public function multiply(Request $request)
    {

        $validated = $request->validate([
            "n1" => "required|numeric",
            "n2" => "required|numeric",
        ]);

        DB::statement("UPDATE backs SET backCount = 0 WHERE id = 1");

        $row = DB::table("posts")
        ->get();

        foreach ($row as $record){

            if ($record->post_id == 1){
                 
                 DB::table('posts')
                        ->where("id", $record->id)
                        ->update(['post_id' => 2]);
                     
             }
             elseif($record->post_id == 2){
                 
                 DB::table('posts')
                 ->where("id", $record->id)
                 ->update(['post_id' => 3]);
                     
             }
             elseif($record->post_id == 3){
                 DB::table('posts')
                 ->where('id', $record->id)
                 ->update(['post_id' => 4]);
             }
             else{
                // DB::table('posts')->where('post_id', '>', 3)->delete();
             }
         }
             DB::table('posts')->where('post_id', '>', 3)->delete();
 

        $post = new Post();
        $post->n1= $request->input("n1");
        $post->n2=$request->input("n2");
        $post->answer=$request->input('n1') * $request->input('n2');
        $post->post_id = 1;
        $post-> save();


        return response()->json([
            'n1' => $request->input('n1'),
            'n2' => $request->input('n2'),
            'answer'=> $request->input('n1') * $request->input('n2')

        ]);
         
    }

    public function divide(Request $request)
    {

        $validated = $request->validate([
            "n1" => "required|numeric",
            "n2" => "required|numeric",
        ]);

        DB::statement("UPDATE backs SET backCount = 0 WHERE id = 1");

        $row = DB::table("posts")
        ->get();

        foreach ($row as $record){

            if ($record->post_id == 1){
                 
                 DB::table('posts')
                        ->where("id", $record->id)
                        ->update(['post_id' => 2]);
                     
             }
             elseif($record->post_id == 2){
                 
                 DB::table('posts')
                 ->where("id", $record->id)
                 ->update(['post_id' => 3]);
                     
             }
             elseif($record->post_id == 3){
                 DB::table('posts')
                 ->where('id', $record->id)
                 ->update(['post_id' => 4]);
             }
             else{
                // DB::table('posts')->where('post_id', '>', 3)->delete();
             }
         }
             DB::table('posts')->where('post_id', '>', 3)->delete();
 

        $post = new Post();
        $post->n1= $request->input("n1");
        $post->n2=$request->input("n2");
        $post->answer=$request->input('n1') / $request->input('n2');
        $post->post_id = 1;
        $post-> save();

        return response()->json([
            'n1' => $request->input('n1'),
            'n2' => $request->input('n2'),
            'answer'=> $request->input('n1') / $request->input('n2')

        ]);
    }
    
    public function back()
    { 

        $row = DB::table("posts")->get();
        
        $backs = DB::table("backs")->get();

        foreach($backs as $record ){
            
            foreach($row as $rows){
                if($record->backCount == 0 && $rows->post_id == 1 ){
                    DB::statement("UPDATE backs SET backCount = 1 WHERE id = 1");
                    return $rows  ;
                        //->where("id", $rows->post_id);
                }
                elseif($record->backCount == 1 && $rows->post_id ==2){
                    DB::statement("UPDATE backs SET backCount = 2 WHERE id = 1");
                    return $rows;
                }
                elseif($record->backCount == 2 && $rows->post_id == 3){
                    DB::statement("UPDATE backs SET backCount = 0 WHERE id = 1");
                    return $rows;
                }
                else{
                    //DB::statement("UPDATE backs SET backCount = 0 WHERE id = 1");
                }
            }
        }
    }
}
