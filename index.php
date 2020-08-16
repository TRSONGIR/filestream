<?php 
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
ob_start();
error_reporting(0);
$Source_Home = '1311251685:AAHJBFA1n3g5BwHbT5r1o5loA7pWfvPOWRU';
$Mehdi = "Turk_cyber"; //ایدی پشتیبان
$botid = "filetolinkyzbot"; //ایدی ربات
//===================(Function)===========================//
define('API_KEY',$Source_Home);
function MEhdiYousefi($method,$datas=[]){$url = "https://api.telegram.org/bot".API_KEY."/".$method;$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);$res = curl_exec($ch);
if(curl_error($ch)){var_dump(curl_error($ch));}else{
return json_decode($res);}}
function sendmessage($chat_id, $text, $model){MEhdiYousefi('sendMessage',[
'chat_id'=>$chat_id,'text'=>$text,'parse_mode'=>$mode]);}
function senddocument($chat_id,$document,$caption){MEhdiYousefi('senddocument',[
'chat_id'=>$chat_id,'document'=>$document,
'caption'=>$caption]);}
function edit($chat_id,$meesage_id,$text,$reply_markup){MEhdiYousefi('editMessageText',[
'chat_id'=>$chat_id,'message_id'=>$message_id,
'text'=>$text,'reply_markup'=>$reply_markup]);}
//===================(Variables)===========================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $message->message_id;
$first_name = $update->message->from->first_name;
$first = $update->callback_query->from->first_name;
$data = $update->callback_query->data;
$query=$update->callback_query;
$inline=$update->inline_query;
//===================(Start)===========================//
if(preg_match('/^\/([Ss]tart)/',$text)){
MEhdiYousefi('sendmessage', [
'chat_id' => $chat_id,
'text' =>"✨ Hello, $first_name !
Just forward me a Telegram file and i will get You the Direct link to that file, so that you can download the file using EXTERNAL download manager, like IDM,ADM etc.
  

 
  Watch How to use Video: https://youtu.be/vi1oBXx2Vmk 
  


  If you have any new issues, Please Forward the Telegram file & link to @$Mehdi",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"☁️ PCloud"],['text'=>"💁🏻 Help"]],
[['text'=>"📠 Send Feedback"],['text'=>"🌟 Rate This Bot"]],],
'resize_keyboard'=>true])]);}
elseif(isset($message->photo)){
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
$get = MEhdiYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
MEhdiYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ Creating download link ...",]);
sleep(2);
MEhdiYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"The file was successfully saved ✅

📥 File name : $patch

🏷 Size File : $siz

ℹ️Use Instant Download Links for Small Files!

❌ Use the vpn to download ❌

📍The file download link was successfully created 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$Source_Home/$patch"]],
[['text'=>"♻️ Restart",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->sticker)){
$sticker = $message->sticker;
$file = $sticker->file_id;
$get = MEhdiYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
MEhdiYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ Creating download link ...",]);
sleep(2);
MEhdiYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"The file was successfully saved ✅

📥 File name : $patch

🏷 Size File : $siz

ℹ️Use Instant Download Links for Small Files!

❌ Use the vpn to download ❌

📍The file download link was successfully created 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$Source_Home/$patch"]],
[['text'=>"♻️ Restart",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->voice)){
$voice = $message->voice;
$file = $voice->file_id;
$get = MEhdiYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
MEhdiYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ Creating download link ...",]);
sleep(2);
MEhdiYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"The file was successfully saved ✅

📥 File name : $patch

🏷 Size File : $siz

ℹ️Use Instant Download Links for Small Files!

❌  Use the vpn to download ❌

📍The file download link was successfully created 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$Source_Home/$patch"]],
[['text'=>"♻️ Restart",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->audio)){
$audio = $message->audio;
$file = $audio->file_id;
$get = MEhdiYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
MEhdiYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ Creating download link ...",]);
sleep(2);
MEhdiYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"The file was successfully saved ✅

📥 File name : $patch

🏷 Size File : $siz

ℹ️Use Instant Download Links for Small Files!

❌ Use the vpn to download ❌

📍The file download link was successfully created 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$Source_Home/$patch"]],
[['text'=>"♻️ Restart",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->video)){
$video = $message->video;
$file = $video->file_id;
$get = MEhdiYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
MEhdiYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ Creating download link ...",]);
sleep(2);
MEhdiYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"The file was successfully saved ✅

📥 File name : $patch

🏷 Size File : $siz

ℹ️Use Instant Download Links for Small Files!

❌ Use the vpn to download ❌

📍The file download link was successfully created 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$Source_Home/$patch"]],
[['text'=>"♻️ Restart",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif(isset($message->document)){
$document = $message->document;
$file = $document->file_id;
$get = MEhdiYousefi('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$siz = $get->result->file_size;
MEhdiYousefi('sendmessage',['chat_id'=>$chat_id,
'text'=>"♻️⌛️ Creating download link ...",]);
sleep(2);
MEhdiYousefi('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
'text'=>"The file was successfully saved ✅

📥 File name : $patch

🏷 Size File : $siz

ℹ️Use Instant Download Links for Small Files!

❌ Use the vpn to download ❌

📍The file download link was successfully created 👇🏼",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"📥 Download File",'url'=>"https://api.telegram.org/file/bot$Source_Home/$patch"]],
[['text'=>"♻️ Restart",'url'=>"https://Telegram.me/$botid?start=$from_id"]],
],'resize_keyboard'=>true])]);}	
elseif($text == "☁️ PCloud"){
MEhdiYousefi('SendMessage',['chat_id'=>$chat_id,
'text'=>"Save to PCloud! New Feature Comeing Soon!",
'reply_markup'=>json_encode(
['inline_keyboard'=>[[['text'=>"Join PCloud 10GB Free",'url'=>"https://www.pcloud.com/welcome-to-pcloud/?discountcode=MpNehdERdVf8Y4eyShmQu7ZV"]],
],'resize_keyboard'=>true])]);}	  
elseif($text == "💁🏻 Help"){
MEhdiYousefi('sendmessage', ['chat_id' => $chat_id,
'text' =>"✨ Hello, $first_name !
Just forward me a Telegram file and i will get You the Direct link to that file, so that you can download the file using EXTERNAL download manager, like IDM,ADM etc.
  

 
  Watch How to use Video: https://youtu.be/vi1oBXx2Vmk 
  


  If you have any new issues, Please Forward the Telegram file & link to @$Mehdi",]);}
elseif($text == "📠 Send Feedback"){
MEhdiYousefi('sendmessage', ['chat_id' => $chat_id,
'text' =>"Hope You liked this Bot, Send Your FeedBack/Suggestions to @$Mehdi 

Also, Share it with Your Friends 

  
Project leader
🇮🇳@$Mehdi
------------
Our other works 
t.me/@titanteams
@Source_Home",]);}  
elseif($text == "🌟 Rate This Bot"){ 
MEhdiYousefi('sendmessage', ['chat_id' => $chat_id,
'text' =>"Please Spend Few Seconds,
To Rate This Bot at: 
https://telegram.me/storebot?start=$botid
Please Rate this Bot 5 Stars.


Thanks
@$Mehdi",]);} 
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
if (is_file("error_log")){
unlink("error_log");}
?>
