<?php  
function alert($str){}
function FrameworkVersion() {}
define ("_crlf",""); 
define ("_br",""); 
define ("_tab","");  
function p_(){}
function _p(){}
function softlock_get(){}
function softlock_reload(){}
function softlock_check($lock){}
function GeneratePassword($depth=0){}
function Gethost(){}
function _myhost(){}
function _mydomain(){}
function Encode($str){}
function ReloadAgain(){}
function FrameworkPath(){}
function FindExtension($file){}
function FindMimeType($file=""){}
function str_splitter($str,$limit=70,$useHypen=false){}
function count_files($directory){}
function EncryptX($Strg,$password="Password"){}
function DecryptX($Strg,$password="Password"){}
function DeleteRecursively( $dir ){}
function DeleteFolderX( $dir ){}
function Delete( $dir ){}
function DeleteFolder( $dir ){}
function DeleteIf( $dir ,$ext){}
function DeleteFolderIf( $dir ,$ext){}
function Activate_JsCore(){}
function get_facebook_cookie($app_id, $application_secret) {}
function get_facebook_token($APP_ID,$APP_SEC){}
function set_facebook_wallpost($TOKEN , $USER_ID,$TARGET_ID,$Msg,$ATT_name,$ATT_caption,$ATT_desc,$LNK_text,$HREF){}
function Image_Resize($image,$filename='',$toWidth=200,$toHeight=150,$enlarge=false,$optimize=false,$quality=60){}
function Xml2Array($data){}
class zipfile{}
function Format_FileSizeB($bytes,$fr='mb'){}
function Gateway_PaypalBtn($Merchant,$API="",$ipn="",$Success="",$Cancell="",$Invoice,$ItemName,$TOTAL=0,$TAX=0,$Currency="USD",$Header="",$Sandbox=false,$Subscription=false,$incl="",$btn_name="Pay"){}
function IndirectDownload($fn,$ct=""){}
function debug($str){}
function Redirect($url){}
function GenerateFolderName($depth=0){}
function GenerateNumericPassword($depth=0){}
function filter($uf) {}
function filtertxt($uf){}
function r_fil($uf){}
function textbox($uf){}
function strip_fname($uf) {}
function compress($str){}
function printArray($data){}
function date_short($dt=""){}
function date_long($dt=""){}
function date_mysql(){}
function dateonly_mysql(){}
function cur_date(){}
function cur_day(){}
function cur_month(){}
function cur_year(){}
function no_of_days($year=0,$month=0){}
function _mins_morethan($min,$dt){}
function _hours_morethan($hr,$dt){}
function _days_morethan($days,$dt){}
function _adjust_min($min,$dt=""){}
function _adjust_hour($hour,$dt=""){}
function _adjust_days($days,$dt=""){}
function date_calculate_percentage($start_date,$end_date,$cur_date="",$max_count=100){}
function _datetime_morethan($dt=0, $unit='d', $asText=true){}
function date_userfriendly($dt){}
function date_userfriendlyX($dt){}
function getmicrotime(){ }
function fixEncoding($in_str) { }
function fix_language($data,$encode=false){}
function langfix_da($data,$encode=false){}
class PHPMailer {}
function _sendmailz($to,$subject, $message, $from,$fromname="",$websy_maillinks,$rcpt="",$rcptname="",$tags_allowed="<b><br><u><i><strong><H1><H2><H3><H4><H5><H6><P>",$safe=false){}
function _sendmail($to,$subject, $message, $from,$fromname="",$websy_maillinks,$rcpt="",$rcptname="",$tags_allowed="<b><br><u><i><strong><H1><H2><H3><H4><H5><H6><P>",$safe=false){}
function _sendmailplus($to,$subject, $message, $from,$fromname="",$websy_maillinks,$rcpt="",$rcptname="",$tags_allowed="<b><br><u><i><strong><H1><H2><H3><H4><H5><H6><P>",$safe=false){}
function AssignVars(){}
function AssignVarsX(){}
function MergeVars($var1,$var2){}
function show($str){}
function trace($str=""){}
function br($l=1){}
function _AddValidation($formname,$validation){}
function _createform($name="",$method="post",$url="",$attachment=false,$validation=true){}
function _inputbox($label="",$name="",$value="",$error="",$class=""){}
function _password($label="",$name="",$value="",$error="",$class=""){}
function _hidden($name="",$value=""){}
function _textarea($label="",$name="",$value="",$error="",$class=""){}
function _submit($value="",$class=""){}
function _checkbox($name,$value=false,$label="",$class=""){}
function _swithbutton($name,$value=false,$label="",$class=""){} // $class=red or green or blue or black preferred
function _combo($label="",$name,$data1,$default="",$error="",$class=""){}
function _combo_tiny($name,$data1,$default="",$error="",$Tags=""){}
function ifhacked($file){}
function for_filename($uf){}
function for_alphanumeric($uf){}
function for_numeric($uf){}
function html2txt($document){}
function CreateTable($para="cellpadding='0' cellspacing='0' border='1' width=100%"){}
function AddHeader(){}
function AddRow(){}
function CloseTable(){}
function file_get_contents_curl($file, $newfilename=""){}
function start_database(){}
function table_exists($table, $db="") {}
function connect($db_host,$db_name,$db_user,$db_pass){}
function get_records($sql,$Err_No="Unknown Error occured on GTR"){}
function get_recordsArray($sql,$field="",$Err_No="Unknown Error occured on GTR"){}
function execute_queryX($sql){}
function execute_query($sql){}
function set_records($table,$data,$key="",$comit=true){}
function get_record($sql){}
function get_inserted_id(){}
function Load_Registry($Rl=false){}
function Unload_Registry(){}
function _RegChk($path,$key) {  }
function _RegCreateKeyIfNotExists($path,$key) {  }
function _RegCreateKey($path,$key) {  }
function _RegWrite($path,$key,$data) {  }
function RegWrite($key,$data,$HardCopy=true) {  }
function CacheWrite($key,$data) {  }
function CacheRead($key) {  }
function CacheDrop($key) {  }
function CacheClear($key) {}
function RegReadX($key) {  }
function RegRead($key) { }
function RegDrop($key,$HardCopy=true) {  }
function RegClear ($key, $HardCopy=true) {}
function RegInstall($silent=false) { }
function RegListFolders() {  }
function RegListKeys() {  }
function DebugRegistry() { }
function BasePath() { }
 ?> 