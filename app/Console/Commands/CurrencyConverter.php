<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Conversion;

class CurrencyConverter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:converter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
		$conversion=Conversion::first();
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://pro-api.coinmarketcap.com/v1/tools/price-conversion?amount=1&id=5824',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
		'X-CMC_PRO_API_KEY: bc249473-6ec8-4fb3-9d99-a036ba87cd66'
		),
		));
		$response = curl_exec($curl);
		curl_close($curl);
		$rate=json_decode($response);
		$conversion->rate=$rate->data->quote->USD->price;
		$conversion->save();
		
		$this->info('Rate updated successfully');

    }
}
