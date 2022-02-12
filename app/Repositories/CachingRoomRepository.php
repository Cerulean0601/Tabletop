<?php
namespace App\Repositories;

use Cache;
use Hash;
use Carbon\Carbon;
use App\Repositories\RoomRepository;

class CachingRoomRepository implements RoomRepository{

	public function __construct(){
	}

	public function insert($data){
		
		do{
			$key = Hash::make(Carbon::now()->format("Y-m-d-H-i-s"));
		}while(Cache::get($key) == $data);

		Cache::put($key, $data);
		return $key;
	}

	public function delete($key){
		Cache::forget($key);
	}

	public function index($key){
		return Cache::get($key);
	}

	public function update($key, $data){
		Cache::put($key, $data);
	}
}