<?php
function select_bg($bg_color){
    $result="";
    switch ($bg_color){
        case 'red':
            $result="#C00";
            break;
            case 'blue':
            $result="#00C";
            break;
            case 'green':
            $result="#0C0";
            break;
    }
        return $result;
}
function get_users(){
    return [
        ["id"=>"234","name"=>"ali","email"=>"ali@gmail.com"],
        ["id"=>"12","name"=>"reza","email"=>"reza@gmail.com"],
        ["id"=>"1345","name"=>"zahra","email"=>"zahra@gmail.com"],
        ["id"=>"1345","name"=>"akbar","email"=>"zahra@gmail.com"],
        ["id"=>"1345","name"=>"sahar","email"=>"zahra@gmail.com"],

    ];
}