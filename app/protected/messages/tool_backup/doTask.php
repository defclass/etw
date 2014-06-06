<?php
#执行文件的目录
$base_dir  =  dirname(__FILE__);

#需要转换的文件基本目录
$message_dir = $base_dir."/../";

$dir_raw = $base_dir."/dir_raw";
#文件的头部
$file_header = $base_dir."/header";
#文件的尾部
$file_footer = $base_dir."/footer";


#读入三个文件
$files = file($dir_raw);
$header = file_get_contents($file_header);
$footer = file_get_contents($file_footer);



foreach($files as $file){
    #去掉文件的换行
    $file = str_replace("\n", "", $file);
    
    $arr = explode("/",$file);
    #要保存的文件名
    $file_name = $message_dir.'/'.$file.".php";

    #google翻译的raw文件
    $trans_name = $message_dir."/".$file."_translate";

    
    #原英文
    $raw_name = $base_dir."/".$arr[1]."_raw";
    
    //$command = "awk  '{printf \"\\047%s\\047=>\",$0 ;getline < \"$trans_name\"; printf \"\\047%s\\047,\\n\", $0; }' $raw_name ";
    $command = <<<EOF
awk -F"'" '{printf "\\047%s\\047=>",$0;getline < "$trans_name";printf " \\047%s\\047,\\n ",$0}' $raw_name
EOF;
    
    $body = shell_exec($command) ;
    
    #压入头部
    file_put_contents($file_name,$header);
    
    #追加body
    file_put_contents($file_name,"\n",FILE_APPEND);
    file_put_contents($file_name,$body,FILE_APPEND);

    #追加footer
    file_put_contents($file_name,$footer,FILE_APPEND);

    echo $file_name;
    echo "\n";
}
