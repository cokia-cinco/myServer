<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculationController extends Controller
{
//    出行基数
    private $num;
    private $money = 0;
    private $grade;

    public function vip(Request $request){

        $vip = (int)($request->get('vip'));
        $ordinary = (int)($request->get('ordinary'));
        $itinerary = $this->itinerary((int)($vip+$ordinary));

        if ($vip<11){
            $this->money = (int)($vip)* 10;
            $this->grade = 'v1';
            $commission = 10;
        }else{
            $this->money = (int)($vip)* 30;
            $this->grade = 'v2';
            $commission = 30;
        }
        $data = [
                'grade'=>$this->grade,
                'money'=>$this->money,
                're_num'=>$vip,
                'commission'=>$commission,
                'itinerary'=>$itinerary,
                ];

        return $data;
    }


    public function experience(Request $request){

        $ordinary = (int)($request->get('ordinary'));
        $vip = (int)($request->get('vip'));
        $experience = (int)($request->get('experience'));
        $travel_basic = (float)($request->get('travel_basic'));

        if ($vip<=30){
            $this->money = (int)($vip)* 99;
        }else{
            $this->money += 99 * 30;
            $this->money += (int)($vip-30)*(99-59);
        }

            $experience_money = $experience*999;

        if ($experience<=3){
            $this->grade = 't1';
            $proportion = 0.4;
        }elseif ($experience<=10){
            $this->grade = 't2';
            $proportion = 0.45;
        }else{
            $this->grade = 't3';
            $proportion = 0.5;
        }
        $commission = 99;

        $my_commission = ((int)$ordinary + (int)$vip)*20*(float)$proportion*(float)$travel_basic;

        if ($experience<3){
            $indirect = ($my_commission/$proportion)*0.02*(int)$experience;
            $t1 ='';
            $t2 ='';
            $t3 ='';
        }else if ($experience<6){
            $indirect = ($my_commission/$proportion)*0.05*(int)$experience;
            $t1 ='';
            $t2 ='';
            $t3 ='';
        }else if ($experience<=10){
            $basic_number = floor($experience/6);
            $t1 = ($basic_number*4)+($experience%6);
            $t2 = ($basic_number*2);
            $t3 = '';
            $indirect = ($my_commission/$proportion)*0.05*(int)$t1+($my_commission/$proportion)*0.02*(int)$t2;
        }else{
            $basic_number = floor($experience/6);
            $t1 = ($basic_number*3)+($experience%6);
            $t2 = $basic_number*2;
            $t3 = $basic_number*1;
            $indirect = ($my_commission/$proportion)*0.1*(int)$t1+($my_commission/$proportion)*0.02*((int)$t2+(int)$t3);
        }

        $data = [
            'grade'=>$this->grade,
            'money'=>$this->money,
            're_num'=>$vip,
            'commission'=>$commission,
            'experience_money'=>$experience_money,
            'proportion'=>$proportion,
            'my_commission'=>$my_commission,
            'indirect'=>$indirect,
            't1'=>$t1,
            't2'=>$t2,
            't3'=>$t3
        ];

        return $data;
    }



    public function itinerary($number){
        $data = [];
        for ($i=3;$i<10;$i+=2){
            $data[] = ['basic'=>$i,'text'=>$number.' X '.($i/10).' X 5 = '.$number*$i/10*5];
        }
        return $data;
    }

    public function partnership(Request $request){
        $ordinary = (int)($request->get('ordinary'));
        $vip = (int)($request->get('vip'));
        $experience = (int)($request->get('experience'));
        $travel_basic = (float)($request->get('travel_basic'));
        $partnership=(int)($request->get('partnership'));

        if ($vip<=200){
            $this->money = (int)($vip)* 99;
        }else{
            $this->money += 99 * 200;
            $this->money += (int)($vip-200)*(99-39);
        }
        $commission = 99;

        if ($partnership<=3){
            $this->grade = 'h1';
            $proportion = 0.7;
        }elseif ($partnership<=10){
            $this->grade = 'h2';
            $proportion = 0.75;
        }else{
            $this->grade = 'h3';
            $proportion = 0.8;
        }
        $my_commission = ((int)$ordinary + (int)$vip)*200*(float)$proportion*(float)$travel_basic/10;
        if ($partnership<3){
            $indirect = ($my_commission/$proportion)*0.02*(int)$partnership*(int)$experience;
            $t1 ='';
            $t2 ='';
            $t3 ='';
        }else if ($partnership<6){
            $indirect = ($my_commission/$proportion)*0.05*(int)$partnership*(int)$experience;
            $t1 ='';
            $t2 ='';
            $t3 ='';
        }else if ($partnership<=10){
            $basic_number = floor($partnership/6);
            $t1 = ($basic_number*4)+($partnership%6);
            $t2 = ($basic_number*2);
            $t3 = '';
            $indirect = ($my_commission/$proportion)*0.05*(int)$t1*(int)$experience+($my_commission/$proportion)*0.02*(int)$t2*(int)$experience;
        }else{
            $basic_number = floor($partnership/6);
            $t1 = ($basic_number*3)+($partnership%6);
            $t2 = $basic_number*2;
            $t3 = $basic_number*1;
            $indirect = ($my_commission/$proportion)*0.1*(int)$t1*(int)$experience+($my_commission/$proportion)*0.02*((int)$t2*(int)$experience+(int)$t3*(int)$experience);
        }

        $experience_money = $experience*999;
        $partnership_money = $partnership*10000;
        $data = [
            'grade'=>$this->grade,
            'money'=>$this->money,
            're_num'=>$vip,
            'commission'=>$commission,
            'experience_money'=>$experience_money,
            'partnership_money'=>$partnership_money,
            'proportion'=>$proportion,
            'my_commission'=>$my_commission,
            'indirect'=>$indirect,
            't1'=>$t1,
            't2'=>$t2,
            't3'=>$t3
        ];

        return $data;
    }
}
