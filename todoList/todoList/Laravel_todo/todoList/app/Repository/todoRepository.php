<?php
namespace App\Repository;
//use Illuminate\Support\Facades\DB;
use App\Models\Member;

class todoRepository{
    public function getAllLists()
  {
      // 這種方法是Laravel的ORM，簡單來說就是可以更安全的做SQL，缺點就是會影響一點效能
      // 有興趣了解的可以上網查一下ORM是什麼，這邊就是查詢所有成員
        return Member::all();
      // 這種方法可以直接寫原生的SQL語法
      // 不過要在上面加上 use Illuminate\Support\Facades\DB;
    //    $ret = DB::select('SELECT * From list');
    //    return $ret;
  }
    public function insertList($data){
        $bool=Member::create([
            //"id"=>$data->id,
            "name"=>$data->name,
            "fin_name"=>$data->fin_name
        ]);
        return $bool;
    }
    public function updateList($data){
        $request=Member::where("id","=",$data->id)->update([
            "name"=>$data->name,
            "fin_name"=>$data->fin_name
        ]);
        return $data;
    }
    public function deleteList($data){
        $request=Member::where("id","=",$data->id)->delete();
        return $data;
    }
    public function finishList($data){
        $request=Member::where("id","=",$data->id)->update([
             "fin_name"=>"已完成"
        ]);
        return $request;
    }
    public function getDoingList(){
        return Member::where("fin_name","未完成")->get();
    }
    public function getDoneList(){
        return Member::where("fin_name","已完成")->get();
    } 
}
