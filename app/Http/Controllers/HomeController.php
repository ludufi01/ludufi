<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ScholarTracker;
use App\Models\ScholarDetail;
use App\Models\DailySlp;
use App\Models\WinRate;
use App\Models\Conversion;
use Illuminate\Support\Str;
use DB;
use Mail;
use Carbon\Carbon;
use Auth;
use Illuminate\Validation\Rule; 

class HomeController extends Controller
{
	public function __construct()
    {
		$this->conversion=Conversion::select('rate')->first();
	}
	
    public function home()
    {
		//return view('dashboard2');
		$conversion=Conversion::first();
		$rate=$conversion->rate;
		$finalData=array();
		$finalData=ScholarTracker::join('scholar_details','scholar_details.scholar_tracker_id','=','scholar_trackers.id')
		->select('scholar_details.*','scholar_trackers.name','scholar_trackers.id')->where('user_id',Auth::guard('user')->user()->id)->get();
		
		$allSLP=DB::select("SELECT a3.username,sum(a2.slp) as slp,a2.date FROM scholar_trackers a1 left join daily_slps a2 on SUBSTRING_INDEX(a1.ronin_address,':',-1)=SUBSTRING_INDEX(a2.ronin,'x',-1) LEFT join users a3 on a1.user_id=a3.id where a1.user_id='".Auth::guard('user')->user()->id."' group by a3.username,a2.date order by a2.date desc limit 15");
		
		return view('dashboard', compact('finalData','rate','allSLP'));
    }
	
    public function overview()
    {
		$finalData=array();
		$scholar=ScholarTracker::where('user_id',Auth::guard('user')->user()->id)->get();
		$roninAdd='';
		foreach($scholar as $scholars)
		{
			$ronin=explode(':',$scholars->ronin_address);
			$roninAdd=$roninAdd.'0x'.$ronin[1].',';
		}
			$finalData=$this->getMultiAxieDetails($roninAdd);
		  return view('overview', compact('finalData'));
    }
	
    public function addTracker(Request $request)
    {        
          $validator = \Validator::make($request->all(), [
              'ronin_address' => 'required|unique:scholar_trackers,ronin_address,NULL,id,user_id,'.Auth::guard('user')->user()->id,
              'name' => 'required|unique:scholar_trackers,name,NULL,id,user_id,'.Auth::guard('user')->user()->id
          ]);
			if ($validator->fails())
			{
			return response()->json(['errors' => $validator->errors()->all()]);
			}
       ScholarTracker::create([
              'name' => $request->name,
              'user_id' => Auth::guard('user')->user()->id,
              'ronin_address' => $request->ronin_address,
              'manager_percentage' => $request->manager_percentage,
              'scholar_percentage' => $request->scholar_percentage,
              'scholar_ronin_address' => $request->scholar_ronin_address,
              'trainee_percentage' => $request->trainee_percentage,
              'trainee_ronin_address' => $request->trainee_ronin_address	
			  ]);
		
		$ronin=explode(':',$request->ronin_address);
		$roninAdd='0x'.$ronin[1];
		
		//$data=$this->getAxieDetails($roninAdd,$request->manager_percentage,$request->name);
		$data=$this->getSLP($roninAdd,$request->manager_percentage,$request->name);
		
		$scholar_tracker_id = ScholarTracker::latest()->first()->id;

		ScholarDetail::create([
              'scholar_tracker_id' => $scholar_tracker_id,
              'ronin_address' => $request->ronin_address,
              'today' => 0,
              'yesterday' => 0,
              'average' => 0,
              'adventure' => 0,
              'elo' => 0,
              'rank' => 0,
              'axies' => 0,
              'next_claim' => $data['lastClaimedItemAt'],
              'manager' => $data['manager'],
              'scholar' => $data['scholar'],
              'total' => $data['total'],
              'lifetime' => $data['rawTotal']	
			  ]);

		return response()->json(['success'=>'Data is successfully added','data'=>$data,'rate'=>$this->conversion,'id'=>$scholar_tracker_id]);

    }

    public function addMultiSLP()
    {        
		$scholar=ScholarTracker::where('user_id',Auth::guard('user')->user()->id)->get();
		$roninAdd='';
		foreach($scholar as $scholars)
		{
			$ronin=explode(':',$scholars->ronin_address);
			$roninAdd=$roninAdd.'0x'.$ronin[1].',';
		}
		
		$data=$this->getMultiSLP($roninAdd);

		return response()->json(['success'=>'Data is successfully added','row'=>$data,'rate'=>$this->conversion]);

    }

    public function addmmr(Request $request)
    {
		$ronin=explode(':',$request->ronin_address);
		$roninAdd='0x'.$ronin[1];
		
		$data=$this->getMMR($roninAdd);
		
		$scholarId=ScholarTracker::where('ronin_address',$request->ronin_address)->first();
		$scholar=ScholarDetail::where('scholar_tracker_id',$scholarId->id)->first();
		$scholar->elo=$data['elo'];
		$scholar->save();
		
		return response()->json(['success'=>'Data is successfully added','data'=>$data,'rate'=>$this->conversion]);

    }

    public function addMultimmr()
    {
		
		$scholar=ScholarTracker::where('user_id',Auth::guard('user')->user()->id)->get();
		$roninAdd='';
		foreach($scholar as $scholars)
		{
			$ronin=explode(':',$scholars->ronin_address);
			$roninAdd=$roninAdd.'0x'.$ronin[1].',';
		}
		$data=$this->getMultiMMR($roninAdd);
		
		return response()->json(['success'=>'Data is successfully added','row'=>$data,'rate'=>$this->conversion]);

    }

    public function addBattle(Request $request)
    {
		$ronin=explode(':',$request->ronin_address);
		$roninAdd='0x'.$ronin[1];
		
		$data=$this->getBattle($roninAdd);
		
		$scholarId=ScholarTracker::where('ronin_address',$request->ronin_address)->first();
		$scholar=ScholarDetail::where('scholar_tracker_id',$scholarId->id)->first();
		$scholar->today=$data['todaySlp'];
		$scholar->yesterday=$data['yesterdaySlp'];
		$scholar->average=$data['avgSLP'];
		$scholar->save();
		
		return response()->json(['success'=>'Data is successfully added','data'=>$data,'rate'=>$this->conversion]);

    }

    public function addMultiBattle(Request $request)
    {
		$scholar=ScholarTracker::where('user_id',Auth::guard('user')->user()->id)->get();
		$roninAdd='';
		foreach($scholar as $scholars)
		{
			$ronin=explode(':',$scholars->ronin_address);
			$roninAdd=$roninAdd.'0x'.$ronin[1].',';
		}
		$data=$this->getMultiBattle($roninAdd);
		
		return response()->json(['success'=>'Data is successfully added','row'=>$data,'rate'=>$this->conversion]);
    }

    public function updateTracker(Request $request)
    {
          $validator = \Validator::make($request->all(), [
              'name' => 'required',
              'manager_percentage' => 'required',
          ]);
			if ($validator->fails())
			{
			return response()->json(['errors' => $validator->errors()->all()]);
			}
		$scholar=ScholarTracker::where('id',$request->id)->first();
		
        $scholar->name = $request->name;
        $scholar->manager_percentage = $request->manager_percentage;
        $scholar->scholar_percentage = 100-$request->manager_percentage;
        $scholar->scholar_ronin_address = $request->scholar_ronin_address;
        $scholar->trainee_percentage = $request->trainee_percentage;
        $scholar->trainee_ronin_address = $request->trainee_ronin_address;
        $scholar->save();				

		return response()->json(['success'=>'Data is successfully added','data'=>$scholar]);

    }

    public function editTracker(Request $request)
    {
			$scholar=ScholarTracker::where('id',$request->id)->first();
			return $scholar;
    }

    public function updateNotification(Request $request)
    {
			$user=User::where('id',Auth::guard('user')->user()->id)->first();
			if(!empty($user))
			{
				$user->notification=$request->notification;
				$user->save();
			}
			return 'Updated';
    }

    public function deleteTracker(Request $request)
    {
			$scholarT=ScholarTracker::where('id',$request->id)->first();
			$scholarT->delete();
			$scholarD=ScholarDetail::where('scholar_tracker_id',$request->id)->first();
			$scholarD->delete();
			
			return response()->json(['success'=>'Data is deleted successfully']);
    }

    public function search($roninId)
    {
			header('Access-Control-Allow-Origin: *');
			$scholar=ScholarTracker::where('ronin_address',$roninId)->where('user_id',Auth::guard('user')->user()->id)->first();
			$ronin=explode(':',$roninId);
			$roninAdd='0x'.$ronin[1];
			if(!empty($scholar))	{
			$data=$this->getSingleAxieDetail($roninAdd,$scholar->manager_percentage,$scholar->name);
			$conversion=Conversion::first();
			$rate=$conversion->rate;
			
			$avgSLP=DB::select("select AVG(slp) slp from ( SELECT sum(slp) as slp,date FROM `daily_slps` WHERE ronin='$roninAdd' group by date ) t");		
			return view('search',compact('roninId','data','rate','avgSLP'));
			}	else {
			return redirect()->intended('home');
			}
    }
	
    public function axies()
    {
		$scholar=ScholarTracker::where('user_id',Auth::guard('user')->user()->id)->get();
		$roninAdd='';
		foreach($scholar as $scholars)
		{
			$ronin=explode(':',$scholars->ronin_address);
			$roninAdd=$roninAdd.'0x'.$ronin[1].',';
		}
		$data=$this->getMultiAxies($roninAdd);
		//dd($data);
		
	  return view('axies',compact('data'));
    }
	
    public function dailySLP()
    {
		//$this->insertDailySLP();
    }
	
}
//ningengu_ludufi
//$%r0_D*;KF0i