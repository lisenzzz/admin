<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerceptionController extends Controller
{
    //
    public function perception(Request $request){
        $info=json_decode($request->info,true);
        $result=[];
        $i=1;
        $j=1;
        $k=0;
        while (1){
            $temp=$info['w'.$i.'s'.$j]['one']*$info['W']['one']+$info['w'.$i.'s'.$j]['two']*$info['W']['two']+
                $info['w'.$i.'s'.$j]['three']*$info['W']['three']+$info['W']['four'];
            if($info['w'.$i.'s'.$j]['type']==1){
                if($temp<=0){
                    $info['W']['one']=$info['W']['one']+$info['w'.$i.'s'.$j]['one'];
                    $info['W']['two']=$info['W']['two']+$info['w'.$i.'s'.$j]['two'];
                    $info['W']['three']=$info['W']['three']+$info['w'.$i.'s'.$j]['three'];
                    $info['W']['four']=$info['W']['four']+1;
                    array_push($result,[
                        'sample'=>'('.$info['w'.$i.'s'.$j]['one'].' '.$info['w'.$i.'s'.$j]['two'].' '.$info['w'.$i.'s'.$j]['three'].')t',
                        'W'=>'('.$info['W']['one'].' '.$info['W']['two'].' '.$info['W']['three'].' '.$info['W']['four'].')t',
                        'action'=>'惩罚'
                    ]);
                    $k=0;
                }else{
                    array_push($result,[
                        'sample'=>'('.$info['w'.$i.'s'.$j]['one'].' '.$info['w'.$i.'s'.$j]['two'].' '.$info['w'.$i.'s'.$j]['three'].')t',
                        'W'=>'('.$info['W']['one'].' '.$info['W']['two'].' '.$info['W']['three'].' '.$info['W']['four'].')t',
                        'action'=>'不惩罚'
                    ]);
                    $k++;
                }
            }else{
                if($temp>=0){
                    $info['W']['one']=$info['W']['one']-$info['w'.$i.'s'.$j]['one'];
                    $info['W']['two']=$info['W']['two']-$info['w'.$i.'s'.$j]['two'];
                    $info['W']['three']=$info['W']['three']-$info['w'.$i.'s'.$j]['three'];
                    $info['W']['four']=$info['W']['four']-1;
                    array_push($result,[
                        'sample'=>'('.$info['w'.$i.'s'.$j]['one'].' '.$info['w'.$i.'s'.$j]['two'].' '.$info['w'.$i.'s'.$j]['three'].')t',
                        'W'=>'('.$info['W']['one'].' '.$info['W']['two'].' '.$info['W']['three'].' '.$info['W']['four'].')t',
                        'action'=>'惩罚'
                    ]);
                    $k=0;
                }else{
                    array_push($result,[
                        'sample'=>'('.$info['w'.$i.'s'.$j]['one'].' '.$info['w'.$i.'s'.$j]['two'].' '.$info['w'.$i.'s'.$j]['three'].')t',
                        'W'=>'('.$info['W']['one'].' '.$info['W']['two'].' '.$info['W']['three'].' '.$info['W']['four'].')t',
                        'action'=>'不惩罚'
                    ]);
                    $k++;
                }
            }
            $j++;
            if($j==5){
                $i++;
                if($i==3){
                    $i=1;
                }
                $j=1;
            }
            if($k==8){
                break;
            }
        }
        return [
            "code"=>0,
            'msg'=>'',
            'count'=>1,
            'data'=>$result,
        ];
    }
}
