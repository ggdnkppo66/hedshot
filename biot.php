<?php
$API_KEY = "1587445608:AAEwud84ZqE9td5MWhVKIV-9ehEPZPkAnbo"; // التوكن البوت
$Dev = 936125166; //ايدي المطور 
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
date_default_timezone_set('Asia/Baghdad');
$url_info = file_get_contents("https://api.telegram.org/bot$get_token[0]/getMe");
$json_info = json_decode($url_info);
$user = $json_info->result->username;
$bot_id = $json_info->result->id;
define('API_KEY',$API_KEY);
echo "https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/"
 .$method;
 $linkhelp = "https://t.me/joinchat/AAAAAE9uOxYP0uZmcIw1Zw";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$url_info = file_get_contents("https://api.telegram.org/bot$token/getMe");
$json_info = json_decode($url_info,true);

$usernamebot = $json_info['result']['username'];

$bot_id = $json_info['result']['id'];

@$channel = "joker_alhila98";
@$token = API_KEY;
$sudo = 936125166;
$update = json_decode(file_get_contents('php://input'));
@$php->aba = $update->message;
@$from_id = $php->aba->from->id;
@$chat_id = $php->aba->chat->id;
@$php->aba_id = $php->aba->message_id;
@$first_name = $php->aba->from->first_name;
@$last_name = $php->aba->from->last_name;
@$username = $php->aba->from->username;
@$u_nss  = $php->aba->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @ArMoF =====*/
@$data = $update->callback_query->data;
@$php->abaid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
/*===== dev ~ @ArMoF =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$php->aba_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;

$php->aba_id = $update->message->message_id;
$user = $update->message->from->username;
mkdir("data");
mkdir("data/addzr");
$opption = file_get_contents("data/addzr/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addzr/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addzr/getrd.txt");
$opption_ = file_get_contents("data/addzr/opption.txt");
$get_from_id1_ = file_get_contents("data/addzr/from_id.txt");
$I_get_rd = file_get_contents("data/addzr/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);
if($u_nss == '/start' and $from_id == $Dev){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'
اهلا معالي المطور قائمة البوت
', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'الازرار'],['text'=>'اضف زر']
],
[
['text'=>'مسح زر'],['text'=>'مسح الازرار']
], 
] 
]) 
]); 
}
$php->aba_id = $update->message->message_id;
$user = $update->message->from->username;

mkdir("data");
mkdir("data/addzr");
$opption = file_get_contents("data/addzr/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addzr/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addzr/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addzr/opption.txt");
$get_from_id1_ = file_get_contents("data/addzr/from_id.txt");
$I_get_rd = file_get_contents("data/addzr/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);
if($u_nss == "اضف زر" and $from_id == $Dev){
mkdir("data/addzr/media");
mkdir("data/addzr/$chat_id/media");
mkdir("data/addzr/media/sticker");
mkdir("data/addzr/media/video");
mkdir("data/addzr/media/videonote");
mkdir("data/addzr/media/document");
mkdir("data/addzr/media/photo");
mkdir("data/addzr/media/audio");
mkdir("data/addzr/media/contact");
mkdir("data/addzr/media/caption");
 file_put_contents("data/addzr/from_id.txt",$from_id);
 file_put_contents("data/addzr/opption.txt","I_GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الزر 
-",'parse_mode'=>"markdown",
 'reply_to_message_id'=>$php->aba->message_id, 
 ]);
 }
 if($u_nss and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
 file_put_contents("data/addzr/opption.txt","I_BADLZ");
 file_put_contents("data/addzr/mod.txt",$u_nss);
 file_put_contents("data/addzr/media/media.txt",$u_nss);
 file_put_contents("data/addzr/getrd.txt", "". $u_nss . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📜¦ جيد , يمكنك الان ارسال جواب الزر 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
-",'parse_mode'=>"markdown",
 'reply_to_message_id'=>$php->aba->message_id, 
 ]);
 }
 
 
 if($php->aba and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
  file_put_contents("data/addzr/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addzr/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addzr/media/media.txt");

  $IB_2ADLZ = fopen("data/addzr/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addzr/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addzr/$IB_3ADLZ.txt",$u_nss);
   file_put_contents("data/addzr/mod.txt","");
   file_put_contents("data/addzr/media/media.txt","");
   file_put_contents("data/addzr/media/$IB_4ADLZ.txt",$php->aba->voice->file_id);
   file_put_contents("data/addzr/media/sticker/$IB_4ADLZ.txt",$php->aba->sticker->file_id );
   file_put_contents("data/addzr/media/document/$IB_4ADLZ.txt",$php->aba->document->file_id);
   file_put_contents("data/addzr/media/videonote/$IB_4ADLZ.txt",$php->aba->video_note->file_id);
   file_put_contents("data/addzr/media/contact/$IB_4ADLZ.txt",$php->aba->contact->phone_number);
   file_put_contents("data/addzr/media/video/$IB_4ADLZ.txt",$php->aba->video->file_id);
   file_put_contents("data/addzr/media/photo/$IB_4ADLZ.txt",$php->aba->photo[0]->file_id);
   file_put_contents("data/addzr/media/audio/$IB_4ADLZ.txt",$php->aba->audio->file_id);
file_put_contents("data/addzr/media/audio/$IB_4ADLZ.txt",$php->aba->caption->file_id);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الزر بنجٱح ،*",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$php->aba->message_id, 
 ]);
 }
 
 if($u_nss == "مسح زر" and $from_id == $Dev){
 file_put_contents("data/addzr/from_id.txt",$from_id);
 file_put_contents("data/addzr/opption.txt","I_delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الزر لمسحها من  البوت 🍃*",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$php->aba->message_id, 
 ]);
 }
 if(file_exists("data/addzr/$u_nss.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
 $str = str_replace("- $u_nss","",$I_get_rd);
     file_put_contents("data/addzr/getrd.txt",$str);
      file_put_contents("data/addzr/from_id.txt","");
      file_put_contents("data/addzr/opption.txt","");
 	unlink("data/addzr/$u_nss.txt");
     unlink("data/addzr/media/$u_nss.txt");
     unlink("data/addzr/media/sticker/$u_nss.txt");
     unlink("data/addzr/media/video/$u_nss.txt");
     unlink("data/addzr/media/videonote/$u_nss.txt");
     unlink("data/addzr/media/document/$u_nss.txt");
     unlink("data/addzr/media/photo/$u_nss.txt");
     unlink("data/addzr/media/audio/$u_nss.txt");
     unlink("data/addzr/media/contact/$u_nss.txt");
unlink("data/addzr/media/caption/$u_nss.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*($u_nss)
  ✓ تم مسح الزر 🔙* ",
 'parse_mode'=>"markdown",
 'reply_to_message_id'=>$php->aba->message_id, 
 ]);
 }
if($u_nss == "مسح الازرار"  and $from_id == $Dev){
$links = __DIR__ . "/data/addzr";
$media = __DIR__ . "/data/addzr/media";
$media_contact = __DIR__ . "/data/addzr/media/contact";
$media_document = __DIR__ . "/data/addzr/media/document";
$media_video = __DIR__ . "/data/addzr/media/video";
$media_videonote = __DIR__ . "/data/addzr/media/videonote";
$media_photo = __DIR__ . "/data/addzr/media/photo";
$media_sticker = __DIR__ . "/data/addzr/media/sticker";
$media_audio = __DIR__ . "/data/addzr/media/audio";
$media_caption = __DIR__ . "/data/addzr/media/caption";
$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);
$files_media_caption = scandir($media_caption);
foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
foreach ($files_media_caption as $file_media_caption) {
if(is_file($media_caption . "/" . $file_media_caption)){
	unlink ($media_caption . "/" . $file_media_caption);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الازرار 🚶‍♂️*",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$php->aba->message_id,
]);
file_put_contents("data/addzr/getrd.txt", "");
}
$opption = file_get_contents("data/addzr/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addzr/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addzr/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addzr/opption.txt");
$get_from_id1_ = file_get_contents("data/addzr/from_id.txt");
$I_get_rd = file_get_contents("data/addzr/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);
$io=explode("\n",file_get_contents("data/addzr/getrd.txt")); 
$keyboard["inline_keyboard"]=[];
for ($i=0; $i < count($io); $i++) { 
$keyboard['keyboard'][] = [['text' =>$io[$i]]];
}
$reply_markup = json_encode($keyboard);
if($u_nss == "/start" and $from_id !== $Dev){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*اهلا بك اختر من الازرار في الاسفل
➖➖➖*",
'parse_mode'=>"markdown",
'reply_markup'=>$reply_markup,
]);
}
if($u_nss == "الازرار" and $from_id == $Dev){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*اهلا بك اختر من الازرار في الاسفل
/start
➖➖➖*",
'parse_mode'=>"markdown",
'reply_markup'=>$reply_markup,
]);
}

if($php->aba->text and file_exists("data/addzr/$u_nss.txt")) {
    $ArMoF = file_get_contents("data/addzr/$u_nss.txt");
    bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$ArMoF,
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$php->aba->message_id,
 ]);
 }
 if($php->aba->text and file_exists("data/addzr/media/$u_nss.txt")) {
  $ArMoF = file_get_contents("data/addzr/media/$u_nss.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$ArMoF,
'caption'=>$php->aba->caption,
    'reply_to_message_id'=>$php->aba->message_id,
 ]);
 }
 if($php->aba->text and file_exists("data/addzr/media/audio/$u_nss.txt")) {
  $ArMoF = file_get_contents("data/addzr/media/audio/$u_nss.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$ArMoF,
'caption'=>$php->aba->caption,
    'reply_to_message_id'=>$php->aba->message_id,
 ]);
 }
 if($php->aba->text and file_exists("data/addzr/media/sticker/$u_nss.txt")) {
  $ArMoF = file_get_contents("data/addzr/media/sticker/$u_nss.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$ArMoF,
'reply_to_message_id'=>$php->aba->message_id,
]);
}
if($php->aba->text and file_exists("data/addzr/media/video/$u_nss.txt")) {
  $ArMoF = file_get_contents("data/addzr/media/video/$u_nss.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$ArMoF,
'caption'=>$php->aba->caption,
'caption'=>$php->aba->caption,
'reply_to_message_id'=>$php->aba->message_id,
]);
}
if($php->aba->text and file_exists("data/addzr/media/photo/$u_nss.txt")) {
  $ArMoF = file_get_contents("data/addzr/media/photo/$u_nss.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$ArMoF,
'caption'=>$php->aba->caption,
'caption'=>$php->aba->caption,
'reply_to_message_id'=>$php->aba->message_id,
]);
}
if($php->aba->text and file_exists("data/addzr/media/videonote/$u_nss.txt")) {
  $ArMoF = file_get_contents("data/addzr/media/videonote/$u_nss.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$ArMoF,
'reply_to_message_id'=>$php->aba->message_id,
]);
}
if($php->aba->text and file_exists("data/addzr/media/document/$u_nss.txt")) {
  $ArMoF = file_get_contents("data/addzr/media/document/$u_nss.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$ArMoF,
'caption'=>$php->aba->caption,
'reply_to_message_id'=>$php->aba->message_id,
]);
}
if($php->aba->text and file_exists("data/addzr/media/contact/$u_nss.txt")) {
 $ArMoF = file_get_contents("data/addzr/media/contact/$u_nss.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$ArMoF,
'first_name'=>$php->aba->from->first_name,
'last_name'=>$php->aba->from->last_name,
'reply_to_message_id'=>$php->aba->message_id,
]);
 }
 