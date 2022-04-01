<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\UploadImageTrait;
use DB;
use App\Models\User;
use App\Models\Quiz;
use Auth;

class QuizController extends Controller
{
    use UploadImageTrait;
	
    public function quiz()
    {
		$check=Quiz::where('user_id',Auth::guard('user')->user()->id)->latest()->first();
		if(empty($check))
		{
			$status=0;
			return view('quiz', compact('status'));
		}	else if(!empty($check) && $check->status==0) {
			$status=0;
			return view('quiz', compact('status'));
		}	else {
			$status=1;
			return view('quiz', compact('status'));
		}
    }
	
    public function store(Request $request) 
	{
        
          $request->validate([
              'question_1' => 'required',
              'question_2' => 'required',
              'question_3' => 'required',
              'question_4' => 'required',
              'question_5' => 'required',
              'question_6' => 'required',
              'question_7' => 'required',
              'question_8' => 'required',
              'question_9' => 'required',
              'question_10' => 'required',
              'question_11' => 'required',
              'question_12' => 'required',
              'question_13' => 'required',
              'question_14' => 'required',
              'question_15' => 'required',
              'question_16' => 'required',
              'question_17' => 'required',
          ]);
		  
		  $score=0;
		  $answer_3=array('1','4','5');
		  $answer_5=array('3','5');
		  $answer_6=array('2','7','8','9','10','11','12');
		  $answer_9=array('1','3');
		  $answer_14=array('3','5','9','10');
		  
		  $new_3=array_intersect($answer_3,$request->question_3);
		  $new_5=array_intersect($answer_5,$request->question_5);
		  $new_6=array_intersect($answer_6,$request->question_6);
		  $new_9=array_intersect($answer_9,$request->question_9);
		  $new_14=array_intersect($answer_14,$request->question_14);
		  if(count($request->question_3)<6)	{
			  if(count($new_3)==3 && count($request->question_3)==5)
			  {	$score= $score+1;	}
			  else if(count($new_3)==3 && count($request->question_3)==4)
			  {	$score= $score+2;	}
			  else if(count($new_3)==3 && count($request->question_3)==3)
			  {	$score= $score+3;	}
			  else if(count($new_3)==2 && count($request->question_3)==3)
			  {	$score= $score+1;	}
			  else if(count($new_3)==2 && count($request->question_3)==2)
			  {	$score= $score+2;	}
			  else if(count($new_3)==1 && count($request->question_3)==1)
			  {	$score= $score+1;	}
		  }
		  if(count($request->question_5)<5)	{
			  if(count($new_5)==2 && count($request->question_5)==3)
			  {	$score= $score+1;	}
			  else if(count($new_5)==2 && count($request->question_5)==2)
			  {	$score= $score+2;	}
			  else if(count($new_5)==1 && count($request->question_5)==1)
			  {	$score= $score+1;	}
		  }
		  if(count($request->question_6)<12) {
			  if(count($new_6)==7 && count($request->question_6)==11)
			  {	$score= $score+3;	}
			  else if(count($new_6)==6 && count($request->question_6)==11)
			  {	$score= $score+1;	}
			  else if(count($new_6)==7 && count($request->question_6)==10)
			  {	$score= $score+4;	}
			  else if(count($new_6)==6 && count($request->question_6)==10)
			  {	$score= $score+2;	}
			  else if(count($new_6)==7 && count($request->question_6)==9)
			  {	$score= $score+5;	}
			  else if(count($new_6)==6 && count($request->question_6)==9)
			  {	$score= $score+3;	}
			  else if(count($new_6)==5 && count($request->question_6)==9)
			  {	$score= $score+1;	}
			  else if(count($new_6)==7 && count($request->question_6)==8)
			  {	$score= $score+6;	}
			  else if(count($new_6)==6 && count($request->question_6)==8)
			  {	$score= $score+4;	}
			  else if(count($new_6)==5 && count($request->question_6)==8)
			  {	$score= $score+2;	}
			  else if(count($new_6)==7 && count($request->question_6)==7)
			  {	$score= $score+7;	}
			  else if(count($new_6)==6 && count($request->question_6)==7)
			  {	$score= $score+5;	}
			  else if(count($new_6)==5 && count($request->question_6)==7)
			  {	$score= $score+3;	}
			  else if(count($new_6)==4 && count($request->question_6)==7)
			  {	$score= $score+1;	}
			  else if(count($new_6)==6 && count($request->question_6)==6)
			  {	$score= $score+6;	}
			  else if(count($new_6)==5 && count($request->question_6)==5)
			  {	$score= $score+5;	}
			  else if(count($new_6)==4 && count($request->question_6)==4)
			  {	$score= $score+4;	}
			  else if(count($new_6)==3 && count($request->question_6)==3)
			  {	$score= $score+3;	}
			  else if(count($new_6)==2 && count($request->question_6)==2)
			  {	$score= $score+2;	}
			  else if(count($new_6)==1 && count($request->question_6)==1)
			  {	$score= $score+1;	}
			  else if(count($new_6)==2 && count($request->question_6)==3)
			  {	$score= $score+1;	}
			  else if(count($new_6)==3 && count($request->question_6)==4)
			  {	$score= $score+2;	}
			  else if(count($new_6)==4 && count($request->question_6)==5)
			  {	$score= $score+3;	}
			  else if(count($new_6)==3 && count($request->question_6)==5)
			  {	$score= $score+1;	}
			  else if(count($new_6)==5 && count($request->question_6)==6)
			  {	$score= $score+4;	}
			  else if(count($new_6)==4 && count($request->question_6)==6)
			  {	$score= $score+2;	}
		  }
		  if(count($request->question_9)<5) {
			  if(count($new_9)==2 && count($request->question_9)==3)
			  {	$score= $score+1;	}
			  else if(count($new_9)==2 && count($request->question_9)==2)
			  {	$score= $score+2;	}
			  else if(count($new_9)==1 && count($request->question_9)==1)
			  {	$score= $score+1;	}
		  }
		  if(count($request->question_14)<8) {
			  if(count($new_14)==4 && count($request->question_14)==7)
			  {	$score= $score+1;	}
			  else if(count($new_14)==4 && count($request->question_14)==6)
			  {	$score= $score+2;	}
			  else if(count($new_14)==4 && count($request->question_14)==5)
			  {	$score= $score+3;	}
			  else if(count($new_14)==3 && count($request->question_14)==5)
			  {	$score= $score+1;	}
			  else if(count($new_14)==4 && count($request->question_14)==4)
			  {	$score= $score+4;	}
			  else if(count($new_14)==3 && count($request->question_14)==4)
			  {	$score= $score+2;	}
			  else if(count($new_14)==3 && count($request->question_14)==3)
			  {	$score= $score+3;	}
			  else if(count($new_14)==2 && count($request->question_14)==3)
			  {	$score= $score+1;	}
			  else if(count($new_14)==2 && count($request->question_14)==2)
			  {	$score= $score+2;	}
			  else if(count($new_14)==1 && count($request->question_14)==1)
			  {	$score= $score+1;	}
		  }	  
		  $score=$request->question_1==3 ? $score+1 : $score+0;
		  $score=$request->question_2==2 ? $score+1 : $score+0;
		  $score=$request->question_4==4 ? $score+1 : $score+0;
		  $score=$request->question_7==1 ? $score+1 : $score+0;
		  $score=$request->question_8==3 ? $score+1 : $score+0;
		  $score=$request->question_10==4 ? $score+1 : $score+0;
		  $score=$request->question_11==4 ? $score+1 : $score+0;
		  $score=$request->question_12==3 ? $score+1 : $score+0;
		  $score=$request->question_13==2 ? $score+1 : $score+0;
		  $score=$request->question_15==3 ? $score+1 : $score+0;
		  $score=$request->question_16==2 ? $score+1 : $score+0;
		  $score=$request->question_17==1 ? $score+1 : $score+0;
		  
		  $status=$score>14 ? 1 : 0;
		  $user_id= Auth::guard('user')->user()->id;
		  
          Quiz::create([
              'user_id' => $user_id,
              'question_1' => $request->question_1,
              'question_2' => $request->question_2,
              'question_3' => json_encode($request->question_3),
              'question_4' => $request->question_4,
              'question_5' => json_encode($request->question_5),
              'question_6' => json_encode($request->question_6),
              'question_7' => $request->question_7,
              'question_8' => $request->question_8,
              'question_9' => json_encode($request->question_9),
              'question_10' => $request->question_10,
              'question_11' => $request->question_11,
              'question_12' => $request->question_12,
              'question_13' => $request->question_13,
              'question_14' => json_encode($request->question_14),
              'question_15' => $request->question_15,
              'question_16' => $request->question_16,
              'question_17' => $request->question_17,
              'score' => $score,
              'status' => $status,
          ]); 
		  
      return redirect()->route('quiz')->with('success', 'Quiz submitted');
		  
    }


}
