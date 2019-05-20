<?php

class Common {
    public static function getTimezone($time = "", $format = "") {
        // timezone by php friendly values
        $date = new DateTime($time, new DateTimeZone('UTC'));
        if(isset($_COOKIE['Timezone'])){
            $date->setTimezone(new DateTimeZone($_COOKIE['Timezone']));
        }else{
            $date->setTimezone(new DateTimeZone('IST'));
        }
        $time= $date->format($format);
        return $time;
        //set the timezone here
        
    }
    public static function activityLog($user_id,$type,$message,$created_on){
        $Activity = new ActivityLog();
        $Activity->login_id=$user_id;
        $Activity->type=$type;
        $Activity->message=$message;
        $Activity->created_on=$created_on;
        $Activity->save();
    }
    public static function backend_url(){
        if($_SERVER['HTTP_HOST']=="localhost"){
            return "http://localhost/app.noqnri/";
        }else{
            return "http://app.noqnri/";
        }
    }
    public static function partner_customer_name($user_id,$type){
        if($type=="1"){
            $partnerDetails = Partner::model()->findByPk($user_id);
            if($partnerDetails){
                echo $partnerDetails->name;
            }else{
                echo "Partner";
            }
        }else{
            $customerDetails = Customer::model()->findByPk($user_id);
            if($customerDetails){
                echo $customerDetails->first_name." ".$customerDetails->last_name;
            }else{
                echo "Customer";
            }
        }
    }
    public static function partner_customer_profile_image($user_id,$type){
        if($type=="1"){
            $partnerDetails = Partner::model()->findByPk($user_id);
            if($partnerDetails){
                echo (dirname(dirname(dirname(__FILE__)))).'/uploads/partner/'.$partnerDetails->id.'/logo/'.$partnerDetails->logo;
            }else{
                echo Yii::app()->request->baseUrl."/vendor/images/user.png";
            }
        }else{
            $customerDetails = Customer::model()->findByPk($user_id);
            if($customerDetails){
                echo (dirname(dirname(dirname(__FILE__)))).'/uploads/customer/profile_image/'.$customerDetails->image;
            }else{
                echo Yii::app()->request->baseUrl."/vendor/images/user.png";
            }
        }
    }
}

?>
