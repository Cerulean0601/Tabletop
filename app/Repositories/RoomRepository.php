<?php
namespace App\Repositories;

interface RoomRepository{
	public function insert($data);
	public function delete($id);
	public function index($id);
	public function update($id, $data);
}
