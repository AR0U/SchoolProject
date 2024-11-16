<?php
namespace App\Service;

// 引入剛剛寫的todoRepository
use App\Repository\todoRepository;

class todoService
{
  private $todoRepository;
  public function __construct(todoRepository $todoRepository)
  {
    $this->todoRepository = $todoRepository;
  }
  // 查詢所有成員
  public function getAllLists()
  {
    $alllist = $this->todoRepository->getAllLists();
    return $alllist;
  }
  public function insertList($data){
    $insertList=$this->todoRepository->insertList($data);
    if($insertList){
      return "新增成功";
    }
    else{
      return "新增失敗";
    }
  }
  public function updateList($data){
    $updateList=$this->todoRepository->updateList($data);
    if($updateList){
      return "修改成功";
    }
    else{
      return "修改失敗";
    }
  }
  public function deleteList($data){
    $deleteList=$this->todoRepository->deleteList($data);
    if($deleteList){
      return "刪除成功";
    }
    else{
      return "刪除失敗";
    }
  }
  public function finishList($data){
    $finishList=$this->todoRepository->finishList($data);
    if($finishList){
      return "完成！";
    }
    else{
      return "不行";
    }
  }
  public function getDoingList(){
    $getDoingList=$this->todoRepository->getDoingList();
    return $getDoingList;
  }
  public function getDoneList(){
    $getDoneList=$this->todoRepository->getDoneList();
    return $getDoneList;
  }
}  