<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use App\Models\ScholarDetail;
use App\Models\ScholarTracker;
use App\Models\DailySLP;
use App\Models\WinRate;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function curlRes($url,$type,$ronin,$postData,$header)
    {
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => $url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => $type,
			  CURLOPT_POSTFIELDS =>$postData,
				CURLOPT_HTTPHEADER => array(
				$header
				),
		));
		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
    }
	
	public function getAxieDetails($ronin,$managerPer,$name)
	{
		$finalData=array();
		$url = 'https://game-api.axie.technology/slp/v2/'.$ronin;
		$slp = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$url = 'https://game-api.axie.technology/mmr/v2/'.$ronin;
		$mmr = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$url = 'https://graphql-gateway.axieinfinity.com/graphql';
		$postData='{
			"operationName": "GetAxieBriefList",
			"variables": {
			"owner":"'.$ronin.'",
			"criteria": {}
			},
			"query": "query GetAxieBriefList($auctionType: AuctionType, $criteria: AxieSearchCriteria, $from: Int, $sort: SortBy, $size: Int, $owner: String) {\\n  axies(auctionType: $auctionType, criteria: $criteria, from: $from, sort: $sort, size: $size, owner: $owner) {\\n    total\\n    results {\\n      ...AxieBrief\\n      __typename\\n    }\\n    __typename\\n  }\\n}\\n\\nfragment AxieBrief on Axie {\\n  id\\n  name\\n  stage\\n  class\\n  breedCount\\n  image\\n  title\\n  battleInfo {\\n    banned\\n    __typename\\n  }\\n  auction {\\n    currentPrice\\n    currentPriceUSD\\n    __typename\\n  }\\n  parts {\\n    id\\n    name\\n    class\\n    type\\n    specialGenes\\n    __typename\\n  }\\n  __typename\\n}\\n"
			}';
		$axie = $this->curlRes($url,'POST',$ronin,$postData,'Content-Type: application/json');
		
		$mmr=json_decode($mmr);
		$slp=json_decode($slp);
		$axie=json_decode($axie);
		
		$finalData['ronin']=$ronin;
			$roninID=explode('x',$mmr[0]->items[1]->client_id);
			$roninAdd='ronin:'.$roninID[1];
		$finalData['name']=$name;
		$finalData['roninAdd']=$roninAdd;
		$finalData['winTotal']=$mmr[0]->items[1]->win_total;
		$finalData['drawTotal']=$mmr[0]->items[1]->draw_total;
		$finalData['loseTotal']=$mmr[0]->items[1]->lose_total;
		$finalData['elo']=$mmr[0]->items[1]->elo;
		$finalData['rank']=$mmr[0]->items[1]->rank;
		
		$daiSLP=DailySlp::selectRaw("Sum(CASE WHEN (date = '".date('Y-m-d')."') THEN slp ELSE 0 END) as todaySlp,Sum(CASE WHEN (date = '".date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))))."') THEN slp ELSE 0 END) as yesterdaySlp,AVG(slp) as avgSLP")
		->where('ronin',$mmrSingle->items[1]->client_id)
		->first();	

		$finalData['todaySlp']=$daiSLP->todaySlp ;
		$finalData['yesterdaySlp']=$daiSLP->yesterdaySlp;
		$finalData['avgSLP']=$daiSLP->avgSLP;
		$finalData['axietotal']=$axie->data->axies->total;;
		
		$finalData['total']=$slp[0]->total;
		$finalData['claimableTotal']=$slp[0]->claimable_total;
		$date1=date_create(date('Y-m-d'));
		$date2=date_create(date('Y-m-d',$slp[0]->last_claimed_item_at));
		$diff=date_diff($date2,$date1);
		$dif=$diff->format("%R%a");
		$next=$dif>14 ? 'Claim is ready' : 'In '.(14-$dif).' days';
		$finalData['lastClaimedItemAt']=$dif;
		$finalData['rawTotal']=$slp[0]->raw_total;
		$finalData['rawClaimableTotal']=$slp[0]->raw_claimable_total;
		$scholarPer=100-$managerPer;
		$finalData['manager']=round(($slp[0]->total*$managerPer)/100);
		$finalData['scholar']=$finalData['total']-$finalData['manager'];
		
		return $finalData;
	}
	
	public function getMultiAxieDetails($ronin)
	{
		$axie=array();
		$finalData=array();
		$url = 'https://game-api.axie.technology/slp/v2/'.$ronin;
		$slp = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$url = 'https://game-api.axie.technology/mmr/v2/'.$ronin;
		$mmr = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$roninAfter=explode(',',$ronin);
		foreach($roninAfter as $roninSingle)	{
			if(!empty($roninSingle)) {
		$url = 'https://graphql-gateway.axieinfinity.com/graphql';
		$postData='{
			"operationName": "GetAxieBriefList",
			"variables": {
			"owner":"'.$roninSingle.'",
			"criteria": {}
			},
			"query": "query GetAxieBriefList($auctionType: AuctionType, $criteria: AxieSearchCriteria, $from: Int, $sort: SortBy, $size: Int, $owner: String) {\\n  axies(auctionType: $auctionType, criteria: $criteria, from: $from, sort: $sort, size: $size, owner: $owner) {\\n    total\\n    results {\\n      ...AxieBrief\\n      __typename\\n    }\\n    __typename\\n  }\\n}\\n\\nfragment AxieBrief on Axie {\\n  id\\n  name\\n  stage\\n  class\\n  breedCount\\n  image\\n  title\\n  battleInfo {\\n    banned\\n    __typename\\n  }\\n  auction {\\n    currentPrice\\n    currentPriceUSD\\n    __typename\\n  }\\n  parts {\\n    id\\n    name\\n    class\\n    type\\n    specialGenes\\n    __typename\\n  }\\n  __typename\\n}\\n"
			}';
		$axie[$roninSingle] = json_decode($this->curlRes($url,'POST',$roninSingle,$postData,'Content-Type: application/json'));
		}	}
		$mmr=json_decode($mmr);
		$slp=json_decode($slp);
		$sr=0;
		foreach($mmr as $mmrSingle) {
		if(!empty($mmrSingle))	{
		if(isset($mmrSingle->items[1]))	{
			$roninID=explode('x',$mmrSingle->items[1]->client_id);
			$roninAdd='ronin:'.$roninID[1];
			
		$info = ScholarTracker::getInformation($roninAdd);
		$finalData[$sr]['ronin']=$mmrSingle->items[1]->client_id;
		$finalData[$sr]['roninAdd']=$roninAdd;
		$finalData[$sr]['name']=$info[0]->name;
		$finalData[$sr]['winTotal']=$mmrSingle->items[1]->win_total;
		$finalData[$sr]['drawTotal']=$mmrSingle->items[1]->draw_total;
		$finalData[$sr]['loseTotal']=$mmrSingle->items[1]->lose_total;
		$finalData[$sr]['elo']=$mmrSingle->items[1]->elo;
		$finalData[$sr]['rank']=$mmrSingle->items[1]->rank;

		$daiSLP=DailySlp::selectRaw("Sum(CASE WHEN (date = '".date('Y-m-d')."') THEN slp ELSE 0 END) as todaySlp,Sum(CASE WHEN (date = '".date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))))."') THEN slp ELSE 0 END) as yesterdaySlp,AVG(slp) as avgSLP")
		->where('ronin',$mmrSingle->items[1]->client_id)
		->first();	

		$finalData[$sr]['todaySlp']=$daiSLP->todaySlp ;
		$finalData[$sr]['yesterdaySlp']=$daiSLP->yesterdaySlp;
		$finalData[$sr]['avgSLP']=$daiSLP->avgSLP;
		
		if(isset($axie[$mmrSingle->items[1]->client_id]->data->axies->total))
		{
		$finalData[$sr]['axietotal']=$axie[$mmrSingle->items[1]->client_id]->data->axies->total;
		}	else {
		$finalData[$sr]['axietotal']=0;
		}
		$sr++;
		}	}	}

		$sr=0;
		foreach($slp as $slpSingle) {
		if(!empty($slpSingle))	{
		if(isset($slpSingle->total))	{
		$finalData[$sr]['total']=$slpSingle->total;
		$finalData[$sr]['claimableTotal']=$slpSingle->claimable_total;
		$date1=date_create(date('Y-m-d'));
		$date2=date_create(date('Y-m-d',$slpSingle->last_claimed_item_at));
		$diff=date_diff($date2,$date1);
		$dif=$diff->format("%R%a");
		$next=$dif>14 ? 'Claim is ready' : 'In '.(14-$dif).' days';
		$finalData[$sr]['lastClaimedItemAt']=$dif;
		$finalData[$sr]['rawTotal']=$slpSingle->raw_total;
		$finalData[$sr]['rawClaimableTotal']=$slpSingle->raw_claimable_total;
		
		$roninID=explode('x',$slpSingle->client_id);
		$roninAdd='ronin:'.$roninID[1];
		$info = ScholarTracker::getInformation($roninAdd);
		$scholarPer=100-$info[0]->manager_percentage;
		$finalData[$sr]['manager']=round(($slpSingle->total*$info[0]->manager_percentage)/100);
		$finalData[$sr]['scholar']=$slpSingle->total-round(($slpSingle->total*$info[0]->manager_percentage)/100);
		$sr++;
		}	}	}
		return $finalData;
	}

	public function getMultiAxies($ronins)
	{
		$finalData=array();
		
		$sr=0;
		$roninAfter=explode(',',$ronins);
		foreach($roninAfter as $roninSingle)	{
			if(!empty($roninSingle)) {
		$url = 'https://graphql-gateway.axieinfinity.com/graphql';
		$postData='{
		"operationName": "GetAxieBriefList",
		"variables": {
		"from": 0,
		"size": 100,
		"sort": "IdDesc",
		"auctionType": "All",
		"owner":"'.$roninSingle.'",
		"criteria": {
		"region": null,
		"parts": null,
		"bodyShapes": null,
		"classes": null,
		"stages": null,
		"numMystic": null,
		"pureness": null,
		"title": null,
		"breedable": null,
		"breedCount": null,
		"hp": [],
		"skill": [],
		"speed": [],
		"morale": []
		}
		},
		"query": "query GetAxieBriefList(\n        $auctionType: AuctionType,\n        $criteria: AxieSearchCriteria,\n        $from: Int,\n        $sort: SortBy,\n        $size: Int,\n        $owner: String\n      ) {\n  \n      axies(\n        auctionType: $auctionType,\n        criteria: $criteria,\n        from: $from,\n        sort: $sort,\n        size: $size,\n        owner: $owner\n      ) {\n        \n    total\n        \n    results \n        {\n      ...AxieBrief\n      __typename\n    }\n\n        __typename\n  \n      }\n      \n}\n      \n\n \n      \n      fragment AxieStats on AxieStats {\n        hp\n        speed\n        skill\n        morale\n        __typename\n      }\n      \n      fragment AxieBrief on Axie {\n        \n  id\n        \n  name\n        \n  stage\n        \n  class\n        \n birthDate\n        \n breedCount\n        \n stats {\n        \n  ...AxieStats\n        \n  __typename\n        \n }\n        \n image\n        \n  genes\n        \n  battleInfo {\n    banned\n    __typename\n  }\n        \n  parts {\n          \n    id\n          \n    name\n          \n    class\n          \n    type\n          \n    specialGenes\n          \n    __typename\n        \n  }\n        \n  __typename\n        \n}\n      \n"
		}';
		$finalData[$sr]['axie'] = json_decode($this->curlRes($url,'POST',$roninSingle,$postData,'Content-Type: application/json'));
		$roninSin=explode('x',$roninSingle);
		$ronin='ronin:'.$roninSin[1];
		
		$finalData[$sr]['info'] = ScholarTracker::getInformation($ronin); 
		$sr++;
		}	}
		return $finalData;
	}

	public function getSingleAxieDetail($ronin,$managerPer,$name)
	{
		//$this->insertDailySLP();
		$finalData=array();
		$url = 'https://game-api.axie.technology/slp/v2/'.$ronin;
		$slp = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$url = 'https://game-api.axie.technology/mmr/v2/'.$ronin;
		$mmr = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$url = 'https://game-api.axie.technology/logs/v2/pvp/'.$ronin;
		$battles1 = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$url = 'https://game-api.axie.technology/logs/pve/'.$ronin;
		//$battles2 = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$url = 'https://graphql-gateway.axieinfinity.com/graphql';
		$postData='{
		"operationName": "GetAxieBriefList",
		"variables": {
		"from": 0,
		"size": 100,
		"sort": "IdDesc",
		"auctionType": "All",
		"owner": "'.$ronin.'",
		"criteria": {
		"region": null,
		"parts": null,
		"bodyShapes": null,
		"classes": null,
		"stages": null,
		"numMystic": null,
		"pureness": null,
		"title": null,
		"breedable": null,
		"breedCount": null,
		"hp": [],
		"skill": [],
		"speed": [],
		"morale": []
		}
		},
		"query": "query GetAxieBriefList(\n        $auctionType: AuctionType,\n        $criteria: AxieSearchCriteria,\n        $from: Int,\n        $sort: SortBy,\n        $size: Int,\n        $owner: String\n      ) {\n  \n      axies(\n        auctionType: $auctionType,\n        criteria: $criteria,\n        from: $from,\n        sort: $sort,\n        size: $size,\n        owner: $owner\n      ) {\n        \n    total\n        \n    results \n        {\n      ...AxieBrief\n      __typename\n    }\n\n        __typename\n  \n      }\n      \n}\n      \n\n \n      \n      fragment AxieStats on AxieStats {\n        hp\n        speed\n        skill\n        morale\n        __typename\n      }\n      \n      fragment AxieBrief on Axie {\n        \n  id\n        \n  name\n        \n  stage\n        \n  class\n        \n birthDate\n        \n breedCount\n        \n stats {\n        \n  ...AxieStats\n        \n  __typename\n        \n }\n        \n image\n        \n  genes\n        \n  battleInfo {\n    banned\n    __typename\n  }\n        \n  parts {\n          \n    id\n          \n    name\n          \n    class\n          \n    type\n          \n    specialGenes\n          \n    __typename\n        \n  }\n        \n  __typename\n        \n}\n      \n"
		}';
		$axie = $this->curlRes($url,'POST',$ronin,$postData,'Content-Type: application/json');
		
		$mmr=json_decode($mmr);
		$slp=json_decode($slp);
		
		$finalData['ronin']=$ronin;
		$finalData['name']=$name;
		//$finalData['winTotal']=$mmr[0]->items[1]->win_total;
		//$finalData['drawTotal']=$mmr[0]->items[1]->draw_total;
		//$finalData['loseTotal']=$mmr[0]->items[1]->lose_total;
		$finalData['elo']=$mmr[0]->items[0]->elo;
		$finalData['rank']=$mmr[0]->items[0]->rank;
		
		$finalData['axietotal']=json_decode($axie);
		$finalData['battles1']=json_decode($battles1);
		//dd(json_decode($battles1));
		$finalData['daiSLP']=DailySlp::select(
		DB::raw("(sum(slp)) as amount"),"date as ddate")
		->where('ronin',$ronin)
		->groupBy(DB::raw("date"))->orderBy('date','desc')->limit(15)->get();
		
		
		$dalySlp=DailySlp::selectRaw("Sum(CASE WHEN (date = '".date('Y-m-d')."') THEN slp ELSE 0 END) as todaySlp,Sum(CASE WHEN (date = '".date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))))."') THEN slp ELSE 0 END) as yesterdaySlp")
		->where('ronin',$ronin)
		->first();	
		$finalData['todaySlp']=$dalySlp->todaySlp ;
		$finalData['yesterdaySlp']=$dalySlp->yesterdaySlp;
		
		$winRate=WinRate::leftJoin('win_percentages','win_rates.ronin','=','win_percentages.ronin')->selectRaw("count(CASE WHEN (win_rates.type = 'win') THEN 1 ELSE NULL END)+win_percentages.wins as wincount,count(CASE WHEN (win_rates.type = 'lose') THEN 1 ELSE NULL END)+win_percentages.loses as losecount,count(CASE WHEN (win_rates.type = 'draw') THEN 1 ELSE NULL END) as drawcount,count(win_rates.id)+win_percentages.total as cnt")
		->where('win_rates.ronin',$ronin)
		->groupBy('win_percentages.total')
		->groupBy('win_percentages.wins')
		->groupBy('win_percentages.loses')
		->first();
		if(isset($winRate->cnt))	{
		$totalCount=$winRate->cnt==0 ? 1 : $winRate->cnt;
		$finalData['winrate']=($winRate->wincount/$totalCount)*100;
		}	else {
		$finalData['winrate']=0;
		}
		
		$firstBattle = DailySLP::select('slp')->where('ronin',$ronin)->where('slp','>','0')->orderBy('created_at','desc')->first();
		if(isset($firstBattle->slp))	{
		$finalData['perwin']=$firstBattle->slp;
		}	else {
		$finalData['perwin']=0;
		}
		
		$finalData['total']=$slp[0]->total;
		$finalData['claimableTotal']=$slp[0]->claimable_total;
		$date1=date_create(date('Y-m-d'));
		$date2=date_create(date('Y-m-d',$slp[0]->last_claimed_item_at));
		$diff=date_diff($date2,$date1);
		$dif=$diff->format("%R%a");
		$next=$dif>14 ? 'Claim is ready' : 'In '.(14-$dif).' days';
		$finalData['lastClaimedItemAt']=$dif;
		$finalData['rawTotal']=$slp[0]->raw_total;
		$finalData['rawClaimableTotal']=$slp[0]->raw_claimable_total;
		$scholarPer=100-$managerPer;
		$finalData['manager']=round(($slp[0]->total*$managerPer)/100);
		$finalData['scholar']=$finalData['total']-$finalData['manager'];
		
		return $finalData;
	}
	
	public function getSLPRate()
	{
		$url = 'https://pro-api.coinmarketcap.com/v1/tools/price-conversion?amount=1&id=5824';
		$rate = json_decode($this->curlRes($url,'GET','','','X-CMC_PRO_API_KEY: bc249473-6ec8-4fb3-9d99-a036ba87cd66'));
		return $rate->data->quote->USD->price;
	}
	
	public function insertDailySLP()
	{
		$scholar=ScholarTracker::where('user_id',Auth::guard('user')->user()->id)->get();
		foreach($scholar as $scholars)
		{
			$roninAdd=explode(':',$scholars->ronin_address);
			$ronin='0x'.$roninAdd[1];
			$url = 'https://game-api.axie.technology/logs/v2/pvp/'.$ronin;
			$battles1 = $this->curlRes($url,'GET','','','Content-Type: application/json');
			$finalData['battles1']=json_decode($battles1);
			if(isset($finalData['battles1']->battles))
			{
			foreach($finalData['battles1']->battles as $battles){
				if($battles->winner==$ronin)
				{
					$date=explode('T',$battles->game_started);
					if(isset($battles->eloAndItem))	{
					foreach($battles->eloAndItem as $eloAndItem)
					{
						if($eloAndItem->player_id==$ronin)
						{
							if(isset($eloAndItem->_items[0]->amount))	{
							$amount=$eloAndItem->_items[0]->amount;
							}	else {	$amount=0;	}
							$SLP=DailySlp::where('battle_uuid',$battles->battle_uuid)->first();
							if(empty($SLP))	{
								DailySlp::create([
								  'battle_uuid' => $battles->battle_uuid,
								  'ronin' => $ronin,
								  'date' => $date[0],
								  'slp' => $amount,
							]);
							}
						}
					}	}
				}
			}	}
		}
	}
	
	public function getSLP($ronin,$managerPer,$name)
	{
		$finalData=array();
		$url = 'https://game-api.axie.technology/slp/v2/'.$ronin;
		$slp = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$slp=json_decode($slp);
		$finalData['ronin']=$ronin;
		$roninID=explode('x',$ronin);
		$roninAdd='ronin:'.$roninID[1];
		$finalData['roninAdd']=$roninAdd;
		$finalData['name']=$name;
		$finalData['total']=$slp[0]->total;
		$finalData['claimableTotal']=$slp[0]->claimable_total;
		if($slp[0]->last_claimed_item_at!='0')	{
		$date1=date_create(date('Y-m-d'));
		$date2=date_create(date('Y-m-d',$slp[0]->last_claimed_item_at));
		$diff=date_diff($date2,$date1);
		$dif=$diff->format("%R%a");
		$next=$dif>14 ? 'Claim is ready' : 'In '.(14-$dif).' days';
		$finalData['lastClaimedItemAt']=$next;
		}	else {
		$finalData['lastClaimedItemAt']='Never';
		}
		
		$finalData['rawTotal']=$slp[0]->raw_total;
		$finalData['rawClaimableTotal']=$slp[0]->raw_claimable_total;
		$scholarPer=100-$managerPer;
		$finalData['manager']=round(($slp[0]->total*$managerPer)/100);
		$finalData['scholar']=$finalData['total']-$finalData['manager'];
		
		return $finalData;
	}
	
	public function getMMR($ronin)
	{
		$finalData=array();
		
		$url = 'https://graphql-gateway.axieinfinity.com/graphql';
		$postData='{
			"operationName": "GetAxieBriefList",
			"variables": {
			"owner":"'.$ronin.'",
			"criteria": {}
			},
			"query": "query GetAxieBriefList($auctionType: AuctionType, $criteria: AxieSearchCriteria, $from: Int, $sort: SortBy, $size: Int, $owner: String) {\\n  axies(auctionType: $auctionType, criteria: $criteria, from: $from, sort: $sort, size: $size, owner: $owner) {\\n    total\\n    results {\\n      ...AxieBrief\\n      __typename\\n    }\\n    __typename\\n  }\\n}\\n\\nfragment AxieBrief on Axie {\\n  id\\n  name\\n  stage\\n  class\\n  breedCount\\n  image\\n  title\\n  battleInfo {\\n    banned\\n    __typename\\n  }\\n  auction {\\n    currentPrice\\n    currentPriceUSD\\n    __typename\\n  }\\n  parts {\\n    id\\n    name\\n    class\\n    type\\n    specialGenes\\n    __typename\\n  }\\n  __typename\\n}\\n"
			}';
		$axie = $this->curlRes($url,'POST',$ronin,$postData,'Content-Type: application/json');
		$axie=json_decode($axie);
		
		$url = 'https://game-api.axie.technology/mmr/v2/'.$ronin;
		$mmr = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$mmr=json_decode($mmr);
		//$finalData['winTotal']=$mmr[0]->items[1]->win_total;
		//$finalData['drawTotal']=$mmr[0]->items[1]->draw_total;
		//$finalData['loseTotal']=$mmr[0]->items[1]->lose_total;
		$finalData['elo']=$mmr[0]->items[1]->elo;
		$finalData['rank']=$mmr[0]->items[1]->rank;
		$finalData['axietotal']=$axie->data->axies->total;
		
		$firstBattle = DailySLP::select('slp')->where('ronin',$ronin)->where('slp','>','0')->orderBy('created_at','desc')->first();
		if(isset($firstBattle->slp))	{
		$finalData['perwin']=$firstBattle->slp;
		}	else {
		$finalData['perwin']=0;
		}
		
		$roninID=explode('x',$ronin);
		$roninAdd='ronin:'.$roninID[1];
		//$detail=ScholarDetail::where('ronin_address',$roninAdd)->first();
		
		$avgSLP=DB::select("update scholar_details set elo='".$mmr[0]->items[1]->elo."',rank='".$mmr[0]->items[1]->rank."',axies='".$axie->data->axies->total."' where ronin_address = '$roninAdd' ");
		
		return $finalData;
	}
	
	public function getBattle($ronin)
	{
		$finalData=array();
		$url = 'https://game-api.axie.technology/logs/v2/pvp/'.$ronin;
		$battles = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$finalData['battles']=json_decode($battles);
		if(isset($finalData['battles']->battles))
			{
			foreach($finalData['battles']->battles as $battles){
				if($battles->winner==$ronin || $battles->winner=="draw")
				{
					$date=explode('T',$battles->game_started);
					if(isset($battles->eloAndItem))	{
					foreach($battles->eloAndItem as $eloAndItem)
					{
						if($eloAndItem->player_id==$ronin)
						{
							if(isset($eloAndItem->_items[0]->amount))	{
							$amount=$eloAndItem->_items[0]->amount;
							}	else {	$amount=0;	}
							$SLP=DailySlp::where('battle_uuid',$battles->battle_uuid)->first();
							if(empty($SLP))	{
								DailySlp::create([
								  'battle_uuid' => $battles->battle_uuid,
								  'ronin' => $ronin,
								  'date' => $date[0],
								  'slp' => $amount,
							]);
							}
						}
					}	}
					$Rate=WinRate::where('battle_uuid',$battles->battle_uuid)->first();
					if(empty($Rate))	{
						if($battles->winner==$ronin){
							WinRate::create([
							'battle_uuid' => $battles->battle_uuid,
							'ronin' => $ronin,
							'type' => 'win',
							'date' => $date[0],
							]);
						}	else if($battles->winner=='draw')	{
							WinRate::create([
							'battle_uuid' => $battles->battle_uuid,
							'ronin' => $ronin,
							'type' => 'draw',
							'date' => $date[0],
							]);
						}
					}
				}	else {
					$date=explode('T',$battles->game_started);
					$Rate=WinRate::where('battle_uuid',$battles->battle_uuid)->first();
					if(empty($Rate))	{
						WinRate::create([
						'battle_uuid' => $battles->battle_uuid,
						'ronin' => $ronin,
						'type' => 'lose',
						'date' => $date[0],
						]);
				}	}
			}	}
					
		$daiSLP=DailySlp::selectRaw("Sum(CASE WHEN (date = '".date('Y-m-d')."') THEN slp ELSE 0 END) as todaySlp,Sum(CASE WHEN (date = '".date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))))."') THEN slp ELSE 0 END) as yesterdaySlp")
		->where('ronin',$ronin)
		->first();	
		
		$avgSLP=DB::select("select AVG(slp) slp from ( SELECT sum(slp) as slp,date FROM `daily_slps` WHERE ronin='$ronin' group by date ) t");

		$roninID=explode('x',$ronin);
		$roninAdd='ronin:'.$roninID[1];
		$detail=ScholarDetail::where('ronin_address',$roninAdd)->first();
		
		$finalData['todaySlp']=$daiSLP->todaySlp ?? 0 ;
		$finalData['yesterdaySlp']=$daiSLP->yesterdaySlp ?? 0 ;
		$finalData['avgSLP']=$avgSLP[0]->slp ?? 0 ;
		
		$detail_today=$daiSLP->todaySlp ?? 0 ;
		$detail_yesterday=$daiSLP->yesterdaySlp ?? 0 ;
		$detail_average=$avgSLP[0]->slp ?? 0 ;
		
		$avgSLP=DB::select("update scholar_details set today='".$detail_today."',yesterday='".$detail_yesterday."',average='$detail_average' where ronin_address = '$roninAdd' ");
		
		return $finalData;
	}
	
	public function getMultiSLP($ronin)
	{
		$finalData=array();
		$url = 'https://game-api.axie.technology/slp/v2/'.$ronin;
		$slp = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$slp=json_decode($slp);
		
		$sr=0;
		foreach($slp as $slpSingle) {
		if(!empty($slpSingle))	{
		if(isset($slpSingle->total))	{
		$finalData[$sr]['total']=$slpSingle->total;
		$finalData[$sr]['claimableTotal']=$slpSingle->claimable_total;
		
		$roninID=explode('x',$slpSingle->client_id);
		$roninAdd='ronin:'.$roninID[1];
		//$detail=ScholarDetail::where('ronin_address',$roninAdd)->get();
		
		if($slpSingle->last_claimed_item_at!='0')	{
		$date1=date_create(date('Y-m-d'));
		$date2=date_create(date('Y-m-d',$slpSingle->last_claimed_item_at));
		$diff=date_diff($date2,$date1);
		$dif=$diff->format("%R%a");
		$next=$dif>14 ? 'Claim is ready' : 'In '.(14-$dif).' days';
		$next_claim=$next;
		$finalData[$sr]['lastClaimedItemAt']=$next;
		}	else {
		$next_claim='Never';
		$finalData[$sr]['lastClaimedItemAt']='Never';
		}
		$finalData[$sr]['rawTotal']=$slpSingle->raw_total;
		$finalData[$sr]['rawClaimableTotal']=$slpSingle->raw_claimable_total;
		
		$info = ScholarTracker::getInformation($roninAdd);
		$finalData[$sr]['name']=$info[0]->name;
		$scholarPer=100-$info[0]->manager_percentage;
		$finalData[$sr]['manager']=round(($slpSingle->total*$info[0]->manager_percentage)/100);
		$finalData[$sr]['scholar']=$slpSingle->total-round(($slpSingle->total*$info[0]->manager_percentage)/100);
		$sr++;
		
		$scholarr=$slpSingle->total-round(($slpSingle->total*$info[0]->manager_percentage)/100);
		
		$avgSLP=DB::select("update scholar_details set total='".$slpSingle->total."',lifetime='".$slpSingle->raw_total."',manager='".round(($slpSingle->total*$info[0]->manager_percentage)/100)."',scholar='".$scholarr."',next_claim='$next_claim' where ronin_address = '$roninAdd' ");
		
		}	}	}
		
		return $finalData;
	}
	
	public function getMultiMMR($ronin)
	{
		$finalData=array();
		
		$roninAfter=explode(',',$ronin);
		foreach($roninAfter as $roninSingle)	{
			if(!empty($roninSingle)) {
		$url = 'https://graphql-gateway.axieinfinity.com/graphql';
		$postData='{
			"operationName": "GetAxieBriefList",
			"variables": {
			"owner":"'.$roninSingle.'",
			"criteria": {}
			},
			"query": "query GetAxieBriefList($auctionType: AuctionType, $criteria: AxieSearchCriteria, $from: Int, $sort: SortBy, $size: Int, $owner: String) {\\n  axies(auctionType: $auctionType, criteria: $criteria, from: $from, sort: $sort, size: $size, owner: $owner) {\\n    total\\n    results {\\n      ...AxieBrief\\n      __typename\\n    }\\n    __typename\\n  }\\n}\\n\\nfragment AxieBrief on Axie {\\n  id\\n  name\\n  stage\\n  class\\n  breedCount\\n  image\\n  title\\n  battleInfo {\\n    banned\\n    __typename\\n  }\\n  auction {\\n    currentPrice\\n    currentPriceUSD\\n    __typename\\n  }\\n  parts {\\n    id\\n    name\\n    class\\n    type\\n    specialGenes\\n    __typename\\n  }\\n  __typename\\n}\\n"
			}';
		$axie[$roninSingle] = json_decode($this->curlRes($url,'POST',$roninSingle,$postData,'Content-Type: application/json'));
		}	}
		
		$url = 'https://game-api.axie.technology/mmr/v2/'.$ronin;
		$mmr = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$mmr=json_decode($mmr);
		
		$sr=0;
		foreach($mmr as $mmrSingle) {
		if(!empty($mmrSingle))	{
		if(isset($mmrSingle->items[0]))	{
			$roninID=explode('x',$mmrSingle->items[0]->client_id);
			$roninAdd='ronin:'.$roninID[1];
			
		$info = ScholarTracker::getInformation($roninAdd);
		//$detail=ScholarDetail::where('ronin_address',$roninAdd)->first();
		$finalData[$sr]['name']=$info[0]->name;
		//$finalData[$sr]['winTotal']=$mmrSingle->items[1]->win_total;
		//$finalData[$sr]['drawTotal']=$mmrSingle->items[1]->draw_total;
		//$finalData[$sr]['loseTotal']=$mmrSingle->items[1]->lose_total;
		$finalData[$sr]['elo']=$mmrSingle->items[0]->elo;
		$finalData[$sr]['rank']=$mmrSingle->items[0]->rank;
		
		$firstBattle = DailySLP::select('slp')->where('ronin',$mmrSingle->items[0]->client_id)->where('slp','>','0')->orderBy('created_at','desc')->first();
		if(isset($firstBattle->slp))	{
		$finalData[$sr]['perwin']=$firstBattle->slp;
		}	else {
		$finalData[$sr]['perwin']=0;
		}

		if(isset($axie[$mmrSingle->items[0]->client_id]->data->axies->total))
		{
		$detail_axies=$axie[$mmrSingle->items[0]->client_id]->data->axies->total;
		$finalData[$sr]['axietotal']=$axie[$mmrSingle->items[0]->client_id]->data->axies->total;
		}	else {
		$detail_axies=0;
		$finalData[$sr]['axietotal']=0;
		}
		
		$sr++;
		
		$avgSLP=DB::select("update scholar_details set elo='".$mmrSingle->items[0]->elo."',rank='".$mmrSingle->items[0]->rank."',axies='$detail_axies' where ronin_address = '$roninAdd' ");
		
		}	}	}
		
		return $finalData;
	}
	
	public function getMultiBattle($ronin)
	{
		$finalData=array();
		$roninAfter=explode(',',$ronin);
		foreach($roninAfter as $roninSingle)	{
		if(!empty($roninSingle)) {
		$url = 'https://game-api.axie.technology/logs/v2/pvp/'.$roninSingle;
		$battles = $this->curlRes($url,'GET','','','Content-Type: application/json');
		$finalData['battles']=json_decode($battles);
		if(isset($finalData['battles']->battles))
			{
			foreach($finalData['battles']->battles as $battles){
				if($battles->winner==$roninSingle || $battles->winner=="draw")
				{
					$date=explode('T',$battles->game_started);
					if(isset($battles->eloAndItem))	{
					foreach($battles->eloAndItem as $eloAndItem)
					{
						if($eloAndItem->player_id==$roninSingle)
						{
							if(isset($eloAndItem->_items[0]->amount))	{
							$amount=$eloAndItem->_items[0]->amount;
							}	else {	$amount=0;	}
							$SLP=DailySlp::where('battle_uuid',$battles->battle_uuid)->first();
							if(empty($SLP))	{
								DailySlp::create([
								  'battle_uuid' => $battles->battle_uuid,
								  'ronin' => $roninSingle,
								  'date' => $date[0],
								  'slp' => $amount,
							]);
							}
						}
					}	}
					$Rate=WinRate::where('battle_uuid',$battles->battle_uuid)->first();
					if(empty($Rate))	{
						if($battles->winner==$roninSingle){
							WinRate::create([
							'battle_uuid' => $battles->battle_uuid,
							'ronin' => $roninSingle,
							'type' => 'win',
							'date' => $date[0],
							]);
						}	else if($battles->winner=='draw')	{
							WinRate::create([
							'battle_uuid' => $battles->battle_uuid,
							'ronin' => $roninSingle,
							'type' => 'draw',
							'date' => $date[0],
							]);
						}
					}
				}	else {
					$date=explode('T',$battles->game_started);
					$Rate=WinRate::where('battle_uuid',$battles->battle_uuid)->first();
					if(empty($Rate))	{
						WinRate::create([
						'battle_uuid' => $battles->battle_uuid,
						'ronin' => $roninSingle,
						'type' => 'lose',
						'date' => $date[0],
						]);
				}	}
		}	}	}	}
					
		$daiSLP=DailySlp::selectRaw("Sum(CASE WHEN (date = '".date('Y-m-d')."') THEN slp ELSE 0 END) as todaySlp,Sum(CASE WHEN (date = '".date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))))."') THEN slp ELSE 0 END) as yesterdaySlp,AVG(slp) as avgSLP,ronin")->groupBy('ronin')
		->get();
		$sr=0;
		foreach($daiSLP as $dSLP)	{
		$roninID=explode('x',$dSLP->ronin);
		$roninAdd='ronin:'.$roninID[1];
		
		$avgSLP=DB::select("select AVG(slp) slp from ( SELECT sum(slp) as slp,date FROM `daily_slps` WHERE ronin='".$dSLP->ronin."' group by date ) t");

		//$detail=ScholarDetail::where('ronin_address',$roninAdd)->first();
		$info = ScholarTracker::getInformation($roninAdd);
		if(isset($info[0]->name))	{
		$finalData[$sr]['name']=$info[0]->name;	}	else 	{
		$finalData[$sr]['name']='';	}
		$finalData[$sr]['todaySlp']=$dSLP->todaySlp ?? 0 ;
		$finalData[$sr]['yesterdaySlp']=$dSLP->yesterdaySlp ?? 0 ;
		$finalData[$sr]['avgSLP']=$avgSLP[0]->slp ?? 0 ;
		$sr++;
		
		$detail_today=$dSLP->todaySlp ?? 0 ;
		$detail_yesterday=$dSLP->yesterdaySlp ?? 0 ;
		$detail_average=$avgSLP[0]->slp ?? 0 ;
		
		$avgSLP=DB::select("update scholar_details set today='".$detail_today."',yesterday='".$detail_yesterday."',average='$detail_average' where ronin_address = '$roninAdd' ");
				
		}
		return $finalData;
	}
	
}

