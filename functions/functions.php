<?php
function CreateUser(){
    $data["tid"]="1";
    $data["name"]=  GenerateFolderName(6);
    $data["pass"]=  GenerateFolderName(12);
    $data["email"]=  GenerateFolderName(4) . '@' . GenerateFolderName(6) .  '.com';
    $data["status"]="ACTIVE";
    $data["ts"]=  date_mysql();
    
    set_records("tbl_usr", $data);
}


function CreateSnippet(){
    $data["uid"]="1";
    $data["tid"]="1";
    
    $data["cid"]=GenerateNumericPassword(1);
    
    $data["tags"]=  GenerateFolderName(3) . ',' . GenerateFolderName(3) . ',' . GenerateFolderName(3);
    $data["subject"]=  GenerateFolderName(15);
    $data["description"]=  GenerateFolderName(30);
    $data["code"]=GenerateFolderName(30);
    
    $a = GenerateNumericPassword(1);
    if($a<5){
        $data["access"]="SELF";
    }elseif($a <7){
        $data["access"]="TEAM";
    }else{
        $data["access"]="PUBLIC";
    }
    
    if(GenerateNumericPassword(1)<5){
        $data["readonly"]="YES";
    }else{
        $data["readonly"]="NO";
    }
    $data["ts"]=  date_mysql();
    $data["status"]="ACTIVE";

    
    set_records("tbl_snippets", $data);
}


?>