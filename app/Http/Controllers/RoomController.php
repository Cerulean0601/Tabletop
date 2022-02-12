<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RoomRepository;

class RoomController extends Controller
{
    protected $repository;

    public function __construct(RoomRepository $repository){
        $this->repository = $repository;
    }

    function joinOrCreate($roomId){
        $id = $this->repository->insert(4);
        return $id;
    }
}
