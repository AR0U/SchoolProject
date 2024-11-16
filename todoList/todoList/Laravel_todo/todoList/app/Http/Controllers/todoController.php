<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\todoService;

class todoController extends Controller
{
    private $todoService;

    // 建構子
    public function __construct(todoService $todoService)
    {
        $this->todoService = $todoService;
    }

    // 查詢所有成員
    public function getAllLists(){
        return $this->todoService->getAllLists();
    }
    public function insertList(Request $data){
        return $this->todoService->insertList(Json_decode($data->getContent()));
    }
    public function updateList(Request $data){
        return $this->todoService->updateList(Json_decode($data->getContent()));
    }
    public function deleteList(Request $data){
        return $this->todoService->deleteList(Json_decode($data->getContent()));
    }
    public function finishList(Request $data){
        return $this->todoService->finishList(Json_decode($data->getContent()));
    }
    public function getDoingList(){
        return $this->todoService->getDoingList();
    }
    public function getDoneList(){
        return $this->todoService->getDoneList();
    }
}
