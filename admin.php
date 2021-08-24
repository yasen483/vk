 <?php
ob_start();
define('API_KEY','1721784121:AAGucRqx2vPJejeUjIWaV_6_g8dUtbxdBcQ');
$sudo = 1189284654;
$admin = "1189284654";
$bot_id       = 1721784121;
$botid = $bot_id;
$idbot = $bot_id;
echo "https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/"
     .$method;
     $linkhelp = "https://t.me/thtss";
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
//»»»»»»»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
$SAIEDZip14 = "";
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
$text = $message->text;
$name = $message->from->first_name;
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$ch = file_get_contents("ch.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$hkok = file_get_contents("hkok.txt");
$g = file_get_contents('server.txt');
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$photo = $update->message->photo;
$video = $update->message->video;
$sticker = $update->message->sticker;
$file = $update->message->document;
$music = $update->message->audio;
$voice = $update->message->voice;
$caption = $message->caption;
$photo_id = $update->message->photo[0]->file_id;
$video_id= $update->message->video->file_id;
$sticker_id = $update->message->sticker->file_id;
$file_id = $update->message->document->file_id;
$music_id = $update->message->audio->file_id;
$voice_id = $update->message->voice->file_id;
 $ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
$tv1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$tv&user_id=$from_id");
$tv2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$tv&user_id=".$from_id);
#$export1 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$tv"));
#$linkchannel1 = $export1->result;
#$export2 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$ch"));
#$linkchannel2 = $export2->result;
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
$tvp = str_replace('@','',$tv);
if($message && (strpos($tv1,'"status":"left"') or strpos($tv1,'"Bad Request: USER_ID_INVALID"') or strpos($tv1,'"status":"kicked"') or strpos($tv2,'"status":"left"') or strpos($tv2,'"Bad Request: USER_ID_INVALID"') or strpos($tv2,'"status":"kicked"'))!== false){
$linktv=file_get_contents("linktv.txt");
if($linktv==null){
$linktv="https://t.me/$tvp";
}
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"*👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ *[اضغط هنا للإشتراك في القناة]($linktv)* ،

- بعد الاشتراك اضغط { /start }*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك¹ ✅','url'=>"$linktv"]
],
]])
]);return false;}
$chp = str_replace('@','',$ch);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$linkch=file_get_contents("linkch.txt");
if($linkch==null){
$linkch="https://t.me/$chp";
}
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ *[اضغط هنا للإشتراك في القناة]($linkch)* ،

- بعد الاشتراك اضغط { /start }*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك² ✅' ,'url'=>"$linkch"]
],
]])
]);return false;}
if($user == null){}else{$user5 = $user;}
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
//»»»»»»»»»»»»
$baageel = file_get_contents("baageel.txt");
if($text == "〽️┇› تفعيل البوت" and $chat_id == $admin){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮¦ تم تفعيل البوت بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("baageel.txt","on");
}
if($text == "⚠️┇› تعطيل البوت" and $chat_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦ تم بنجاح تعطيل البوت ✓",
]);
file_put_contents("baageel.txt","off");
} 
if($message and $baageel =="off" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$from_id,
 "text"=>"👨🏻‍💻 ¦ مرحبا بك عزيزي 
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة والتحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة",
 ]);return false;
}
$Ali = "1135411851:AAE9mv6yUgBdJuivNxeB5TX8JhyM9xPWskg";
$channel ="@TH3NK@THTSS"; 
$ch=explode("@",$channel); 
for($i=1;$i<=count($ch);$i++){
$join = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=@$ch[$i]&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$from_id,
'text'=>"*👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ القناة ~⪼ ❪ @$ch[$i] ❫️ ؛
---------------------------
- بعد الاشتراك اضغط { /start }*
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);return false;}}
//»»»»»»»»»»»»»»»»»»
$update=json_decode(file_get_contents('php://input'));
$message=$update->message;
$chat_id=$message->chat->id;
$name=$message->from->first_name; 
$sub=substr($name,0,10)." ..."; 
if($text == '/start' or $text == '🏡┇› الصفحة الرئيسية'){
	$start = str_replace('الاسم',$name,$start);
bot('sendMessage',[
        'chat_id'=>$from_id,
        'text'=>$start,
'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🗒┇› التعـليمات"]
],
[
['text'=>"👨🏻‍💻┇› المطور الرسمي"]
],
],
'resize_keyboard'=>true
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "🗒┇› التعـليمات"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$hkok,
'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🏡┇› الصفحة الرئيسية"] 
],
],
'resize_keyboard'=>true
])
]);
}
if($text == "👨🏻‍💻┇› المطور الرسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*🎭¦ مرحبا بك في معلومات البوت :-
ـ┄─━━━━━━━─┄
👨‍✈️¦ المطور الرسمي للبوت» *[علي محمد](t.me/th3ss)*
🏠️¦ القناة التابعة للمطور» *[THTSS](t.me/thtss)*
📡¦ قناة الدعم » *[بيع وتمويل](t.me/BOT700K)*
🛠*
",'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🏡┇› الصفحة الرئيسية"]
],
],
'resize_keyboard'=>true
])
]);
}
//»»»»»»»»»»»»»»»»»»

if($user == null){}else{$user5 = $user;}
if($message and in_array($user5, $band_user) and $user != null) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
  if($message && in_array($from_id, $band_id)) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
//»»»»»»»»»»»»»»»»»»
if($text == "/admin" or $text == "back 🔙" or $text == "❌┇› الغاء الامر"  or $text == 'رجوع 🔙' or $text =="/ADMIN"){
if($from_id == $admin)
	bot('sendmessage',[
	'chat_id'=>$from_id, 
	'text' =>"🙋🏻‍♂️ ¦› أهلا بك عزيزي الأدمن 🔱
⚙️ ¦› هذه الاعدادات الخاصة بك 🌚
",'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🗃┇› تعيين رسالة /start"]
],
[
['text'=>"🚸┇› وضع قناة الاشتراك¹"],['text'=>"🚸┇› وضع قناة الاشتراك²"]
],
[
['text'=>"🗑┇› حذف قناة الاشتراك¹"],['text'=>"🗑┇› حذف قناة الاشتراك²"]
],
[
['text'=>"🔱┇› تفعيل التنبيه"],['text'=>"⚠️┇› تعطيل التنبيه"]
], 
[
['text'=>"〽️┇› تفعيل البوت"],['text'=>"⚠️┇› تعطيل البوت"]
],
[
['text'=>"🔂┇› تفعيل التوجية"],['text'=>"🔁┇› تعطيل التوجية"]
], 
[
['text'=>"🚷┇› حظر خاص"],['text'=>"🚫┇› الغاء حظر الخاص"]
],
[
['text'=>"🎯┇› قسم الاذاعة"]
],
[
['text'=>"💤┇› حظر بالمعرف"],['text'=>"🌀┇› الغاء الحظر بالمعرف"]
],
[
['text'=>"📊┇› الاحصائيات"],['text'=>"🔍┇› وضع تعليمات"]
],
[
['text'=>"💬┇› تفعيل التواصل"],['text'=>"💬┇› تعطيل التواصل"]
],
[
['text'=>"📮┇› المشتركين"],['text' =>"📁┇› جلب نسخة"]
],
[
['text'=>"〽️┇› الاوامر الاضافية"]
],
], 
])
]);} 
//»»»»»»»»»»»»»»»»»»
if($text == "🚸┇› وضع قناة الاشتراك¹" and $from_id == $admin){
	file_put_contents("sting.txt","knat");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🔰¦ أرسل معرف القناة العام الان
👨🏻‍💻¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="knat" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="knat" and $from_id == $admin){
file_put_contents("sting.txt","link1");
$idchannel= $message->forward_from_chat->id;
file_put_contents("tv.txt","$idchannel"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link1" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linktv.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text!=null and $text != "إلغاء ❌" and $sting =="knat" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("tv.txt","$text"); 
unlink("linktv.txt"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" =>"*- مرحبا بك عزيزي 💁‍♂
🌀 ¦ تم حفظ معرف القناة بنجاح √
🔘 ¦ فضلا تأكد ان البوت أدمن في القناة *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
//********♥*****//
if($text == "🗑┇› حذف قناة الاشتراك¹" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tv.txt");}
//»»»»»»»»»»»»»»»»»»
if ($text == "🚸┇› وضع قناة الاشتراك²" and $from_id == $admin) {
file_put_contents("sting.txt","sting");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*- مرحبا بك عزيزي↯
🌀 ¦ أرسل معرف القناة العام الان
♻️ ¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="sting" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="sting" and $from_id == $admin){
unlink("sting.txt");
$idchannel= $message->forward_from_chat->id;
file_put_contents("ch.txt","$idchannel"); 
file_put_contents("sting.txt","link2"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link2" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linkch.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if( $text !=null and $text != "إلغاء ❌" and $sting =="sting" and $from_id == $admin and !$message->forward_from_chat ){
file_put_contents("ch.txt","$text"); 
unlink("linkch.txt");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*- مرحبا بك عزيزي↯
🌀 ¦ أرسل معرف القناة العام الان
♻️ ¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text =="🗑┇› حذف قناة الاشتراك²" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦ تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("ch.txt") ;
} 
//»»»»»»»»»»»»»»»»»»
if($text == "💤┇› حظر بالمعرف" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💤¦› حسنا ارسل المعرف العضو الذي تريد حظرة من البوت 
"]) ;
file_put_contents("sting.txt","bandu");
} 
if(preg_match('/^(@)(\S{5,32})/i',$text) and $sting == "bandu" and $from_id == $admin){
$tf = str_replace("@","",$text);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🚷 ¦› تم حظر العضو بنجاح
[$text](https://t.me/$tf) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>"$text", 
'text'=>"🚸 ¦› عذرا عزيزي
📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي
"]);$tf = str_replace("@","",$text);
file_put_contents("band_user.txt",$tf."\n",FILE_APPEND);
unlink("sting.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text =="🌀┇› الغاء الحظر بالمعرف" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر
"]);file_put_contents("sting.txt","unkband1");} 

if($text =="$text" and $sting == "unkband1" and $from_id == $admin) {
$tf = str_replace("@","",$text);
	$a = str_replace("$tf","",file_get_contents("band_user.txt"));
        file_put_contents("band_user.txt",$a);
$tf = str_replace("@","",$text);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](https://t.me/$tf) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت
",]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
$rt = $update->message->reply_to_message;
$id = $message->reply_to_message->forward_from->id;
if($tw == "tw" and $from_id != $admin){
	if($text != "/start"){
	bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
	}
	if($tw == "tw" and $rt and $from_id == $admin){
		bot("sendMessage",[
"chat_id"=>$id,
"text"=>"
$text
"
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦› تم الارسال بنجاح √
"]);}
if($text == "💬┇› تعطيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"❎ ¦› تم تعطيل التواصل بنجاح
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tw.txt") ;
	}
if($text == "💬┇› تفعيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💬 ¦› تم تفعيل التواصل بنجاح 
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents('tw.txt','tw');	}
if($text == "📮┇› المشتركين" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>" *📊¦› عدد مشتركين البوت هو $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);} 
if($text == "عدد البوتات 🔰" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>count($ok)
	, 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text =="🔱┇› تفعيل التنبيه" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔔¦› تم تفعيل التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("onstart.txt","start");
} 
if($text =="⚠️┇› تعطيل التنبيه" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔕¦› تم تعطيل ❎ التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])
]);
unlink("onstart.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text == "🎯┇› قسم الاذاعة" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"📝┇› نشر رسالة"],['text'=>"📸┇› نشر صورة"]
],
[
['text'=>"📹┇› نشر فيديو"],['text'=>"🏧┇› نشر ملصق"]
],
[
['text'=>"📂┇› نشر ملف"],['text'=>"🎙┇› نشر صوت"]
],
[
['text'=>"Ⓜ️┇› نشر ماركدوان"],['text'=>"⚜┇› نشر HTML"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text' =>"®┇› اذاعة في القنوات"],['text'=>"↩️┇› اذاعة خاص بالتوجيه"]
],
[
['text'=>"رجوع 🔙"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "❌┇› الغاء الامر"){
	unlink("send.txt");
	}
if($text == "❌┇› الغاء الامر" and $send != null){
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*❎ ¦› تم الإلغاء بنجاح 💯
🔙 ¦› سيتم الرجوع للقائمة الرئيسة بعد 5 ثواني*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
sleep(4);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"نشر رسالة 💌"],['text'=>"نشر صورة 🎑"]
],
[
['text'=>"نشر فيديو 🎥"],['text'=>"نشر ملصق 🎐"]
],
[
['text'=>"نشر ملف 📁"],['text'=>"نشر صوت 🎧"]
],
[
['text'=>"نشر ماركدون 🎐"],['text'=>"نشر HTML 📮"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text'=>"رجوع 🔙"],['text'=>"نشر اعلان في القنوات 💥"]
],
],
])
]);}
//»»»»»»»»»»»»»»»»»»
if($text == "📝┇› نشر رسالة" and $from_id == $admin){
	file_put_contents('send.txt','txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي شيء لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "📸┇› نشر صورة" and $from_id == $admin){
	file_put_contents('send.txt','photo');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌 ¦› الان ارسل اي صورة لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == '📹┇› نشر فيديو' and $from_id == $admin){
		file_put_contents('send.txt','video');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌¦› الان ارسل اي فيديو لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == "🏧┇› نشر ملصق" and $from_id == $admin){
	file_put_contents('send.txt','sticker');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملصق لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "📂┇› نشر ملف" and $from_id == $admin){
	file_put_contents('send.txt','file');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف او صورة gif لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "🎙┇› نشر صوت" and $from_id == $admin){
		file_put_contents('send.txt','music');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف صوتي 🎧 لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "Ⓜ️┇› نشر ماركدوان" and $from_id == $admin){
		file_put_contents('send.txt','Markdown');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص وسيدعم الماركدون لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "⚜┇› نشر HTML" and $from_id == $admin){
		file_put_contents('send.txt','HTML');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص  وسيدعم الHTML لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($from_id == $admin and $text != "❌┇› الغاء الامر"){
if($text != '❌┇› الغاء الامر' and $send == "txt" and $from_id == $admin){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'photo'){
	for($i=0;$i<count($members); $i++){
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'video'){
	for($i=0;$i<count($members); $i++){
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'sticker'){
	for($i=0;$i<count($members); $i++){
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'file'){
	for($i=0;$i<count($members); $i++){
 bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $music){
	for($i=0;$i<count($members); $i++){
 bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $voice){
	for($i=0;$i<count($members); $i++){
 bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'Markdown'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'HTML'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
}
if($text == "❌┇› الغاء الامر" and $from_id == $admin){
unlink("sting.txt") ;
unlink('send.txt');
}
if($text =="🔂┇› تفعيل التوجية" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔄 ¦› تم تفعيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("reply.txt","yhya");
} 
if($from_id == $admin){}else{
if($message and $reply == "yhya" ){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}}
	if($text == "🔁┇› تعطيل التوجية" and $from_id == $admin) {
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔒¦› تم تعطيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("reply.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text == "🚷┇› حظر خاص" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لحظره من البوت"]) ;
file_put_contents("sting.txt","band");} 

if(preg_match('/^()(\S{5,32})/i',$text) and $sting == "band" and $from_id == $admin ){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊 ¦› تم حظره  بنجاح ✔️
[$text](tg://user?id=$text) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
'text'=>"🚸 ¦› عذرا عزيزي📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي"]) ;
file_put_contents("band_id.txt",$text."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($text =="🚫┇› الغاء حظر الخاص" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر"]) ;
file_put_contents("sting.txt","unkband");} 
if($text =="$text" and $sting == "unkband" and $from_id == $admin) {
	$a = str_replace("$text","",file_get_contents("band_id.txt"));
        file_put_contents("band_id.txt",$a);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](tg://user?id=$text) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت", 
]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
if ($text =="🗃┇› تعيين رسالة /start" and $from_id == $admin) {
file_put_contents("sting.txt","start1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📝¦ أرسل نص البدء { /start } 🙋🏻‍♂️
يمكنك وضع الاسم بشرط ان تضعه بين { }
هكذا {الاسم}
"]);
}
if($text and $sting =="start1" and $from_id == $admin ){
file_put_contents("start.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص الترحيب هو 
/start
{ $text }*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
//»»»»»»»»»»»»»»»»»»
if ($text =="🔍┇› وضع تعليمات" and $from_id == $admin) {
file_put_contents("sting.txt","help");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🔰¦ أرسل نص التعليمات 🙋🏻‍♂️
يمكنك وضع اسم المرسل بشرط ان تضعه بين {}
هكذا {الاسم}
"]);
file_put_contents("sting.txt","help");}
if($text and $sting =="help" and $from_id == $admin ){
file_put_contents("help","txt"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص التعليمات بنجاح
/help
{ $hkok } *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);unlink('sting.txt');file_put_contents('hkok.txt',$text);}
//»»»»»»»»»»»»»»»»»»
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;

$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;
mkdir("Fri3nd_s");
$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🔄┇› اذاعة عام بالتوجية" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
     'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📢┇› اذاعة عام للكل" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($text == "اذاعه خاص بالتوجيه" || $text == "↩️┇› اذاعة خاص بالتوجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

//»»»»»»»»»»»»»»»»»»
if($from_id == $sudo){
if($text == "الاحصائيات" || $text == "📊┇› الاحصائيات"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الاحصائيات : 🔰 
┄─━━━━━━━─┄
*📡 ¦ عدد المجموعات المفعله ◄ *[$MoHaMMedd](tg://user?id=$id)*
🤖 ¦ عدد البوتات المصنوعة ◄ $ok ،
👥 ¦ عدد المشترڪين ◄ *[$MOhaMMed](t.me/TH3NK)* ،
⏰ ¦ الوقت ◄ *[$date $aa](t.me/TH3NK)* ،
√*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}}
//»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
function SAIEDZip($SAIEDZip1, $SAIEDZip2){
$SAIEDZip4 = realpath($SAIEDZip1);
$SAIEDZip = new ZipArchive();
$SAIEDZip->open($SAIEDZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$SAIEDZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($SAIEDZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($SAIEDZip3 as $SAIEDZip5 => $SAIEDZip6){
if(!$SAIEDZip6->isDir()){
$SAIEDZip7 = $SAIEDZip6->getRealPath();
$SAIEDZip8 = substr($SAIEDZip7, strlen($SAIEDZip4) + 1);
$SAIEDZip->addFile($SAIEDZip7, $SAIEDZip8);
}}
$SAIEDZip->close();
}
function SAIEDZip1($SAIEDZip9, $SAIEDZip10 = 2){
$SAIEDZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$SAIEDZip12=floor((strlen($SAIEDZip9) - 1) / 3);
return sprintf("%.{$SAIEDZip10}f", $SAIEDZip9 / pow(1024, $SAIEDZip12)) . @$SAIEDZip11[$SAIEDZip12];
}
$SAIEDZip15 = json_decode(file_get_contents('php://input'));
$SAIEDZip16 = $SAIEDZip15->message;
$SAIEDZip17 = $SAIEDZip16->text;
$SAIEDZip18 = $SAIEDZip16->message_id;
if($SAIEDZip17 == "📁┇› جلب نسخة" and $from_id = $admin){
$RSAIED = "$admin";
date_default_timezone_set("Asia/Damascus");
$SAIEDZip13 = date("{h-i-s}");
SAIEDZip('',"Backup-$SAIEDZip13.zip");
bot('senddocument',[
'chat_id'=>$RSAIED,
'document'=>"https://$g/Backup-$SAIEDZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
Team Yemen : ". @THTSS ." ♥
File size : ".SAIEDZip1(filesize("Backup-$SAIEDZip13.zip"))." 🏷",
'reply_to_message_id'=>$SAIEDZip18,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
unlink("Backup-$SAIEDZip13.zip");
}

//»»»»»»»»»»»»»»»»»»
if($text =="/start" and $onstart == "start" and $from_id != $admin) {
	bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"👨‍✈️┊مرحبا بك مطوري 🙋🏽‍♂
⚙┊شخص قام بالدخول الى البوت !
🗃┊معلومات حسابه الشخصي ↯
ـ┄─━━━━━━━─┄
*🎭 ⁞ اسم العضو : ❪ *[$name](tg://user?id=$from_id)* ❫
🎟 ⁞ ايدي معلوماته : ❪ *$from_id* ❫
💤 ⁞ معرف حسابه : ❪ *@$user* ❫
📟 ⁞ عدد المشترڪين : ❪ *$MOhaMMed* ❫
ـ *[$date $aa](t.me/thtss)*
➺ *",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,

  ]);
  }


if($text ==  '/start' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"' ) !== false){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>" • اهلآ بك ،  [$fn](tg://user?id=$chat_id)
♥️⁞ اهلأ بك في بوت اسئله جريئة 📘،.
📶⁞ هنالك 7 مستويات لجرئة الاسئله👙 📝،.
🔖⁞ آختر ما يناسبك وستجد ما تبحث عنه ايضأ 😉 ،.
🗄⁞ ثم آختر جنسك وأبدا ألعب🚬 ،.
📊⁞ إختر مستوى الاسئله وأبدا 🎥،.
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ابدا العب😎💗", 'callback_data'=>'help']],
[['text'=>"🎯سؤبر ماركت البوتات ",'url'=>'T.me/EzZzZz']],
]
])]);}
##
if($data=="home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"• اهلآ بك ،  [$fn](tg://user?id=$chat_id)
♥️⁞ اهلأ بك في بوت اسئله جريئة 📘،.
📶⁞ هنالك 7 مستويات لجرئة الاسئله👙 📝،.
🔖⁞ آختر ما يناسبك وستجد ما تبحث عنه ايضأ 😉 ،.
🗄⁞ ثم آختر جنسك وأبدا ألعب🚬 ،.
📊⁞ إختر مستوى الاسئله وأبدا 🎥،.
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ابدا العب😎💗", 'callback_data'=>'help']],
[['text'=>"🎯سؤبر ماركت البوتات ",'url'=>'T.me/EzZzZz']],
]
])]);}


if($data=="help"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
- أهلاً بك مجدداً [$Name](tg://user?id=$chat_id2)
- اليك قائمة اعدادات البوت اختر ماتريده لتنفيذه ، 
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"~اسئله جريئه 🔞",'callback_data'=>'X1']],
[['text'=>"~اسئله جريئه مستوى ثاني🔞",'callback_data'=>'X2']],
[['text'=>"~اسئله منحرفه👙👙",'callback_data'=>'X3']],
[['text'=>"~اسئله منحرفه مستوى ثاني👙",'callback_data'=>'X4']],
[['text'=>"~كدها عاديةة❤",'callback_data'=>'X5']],
[['text'=>"~اسئله للمتزوجين👩‍❤️‍💋‍👩",'callback_data'=>'X7']],
[['text'=>"-تحديث البوت📌.",'callback_data'=>'X8']],
[['text'=>"🎯سؤبر ماركت البوتات ",'url'=>'T.me/EzZzZz']],
[['text'=>"العودة 🔙",'callback_data'=>"home"]],
]
])
]);
}

if($data=="X1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروج تفركين كدامي لو يم امج 😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"يمك 😹😻",'callback_data'=>'Z1']],
[['text'=>"يم امج😟",'callback_data'=>'Z2']],
]
])
]);
}

if($data=="Z1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وف اذا يمي هنيالي عليج ونبي🤤
#استمري😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S1']],
]
])
]);
}

if($data=="Z2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وف ماكو احلا مـטּ النعال الي راح
يجيج مـטּ امج ءمنوره😹😹😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S1']],
]
])
]);
}

if($data=="S1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروج بين ابو الخيط لو عادي 😉😹👙",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ابو الخيط😹😻👄",'callback_data'=>'F1']],
[['text'=>"العادي😌",'callback_data'=>'F2']],]])]);}


if($data=="F1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
اح ام الخيط خلفيه وفيش مال مص ودفو 🤤😹💋
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S2']],]])]);}

if($data=="F2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
يول ام العادي تراهو صار قـَديـٰـٰم. 🙁💛 ۦٰ #احسه لباس ابوي 😹😹😹😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S2']],]])]);}


if($data=="S2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروج بين الفرك والـ اح اح 😉😹
لو بين الزواج #الراحه 😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"افرك🙊",'callback_data'=>'F3']],
[['text'=>"ازوج💋",'callback_data'=>'F4']],]])]);}


if($data=="F3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
تحب الفرك ام كس عساس متردين تتزوجين 😞😹😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S3']],]])]);}

if($data=="F4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
احح ام الزواج تحبه بل طبيعي 😹😹
#استمري 😹🚶‍♂
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S3']],]])]);}


if($data=="S3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
كم مره جابه او ذابه بل باسج🤤👙
مرتين 😉 » اكثر🙊
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مرتين🙊",'callback_data'=>'F5']],
[['text'=>"اكثر من اثنين🙊😻",'callback_data'=>'F6']],]])]);}


if($data=="F5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
ﻫــﺄﯾﮧ ام المرتين صدفه وكضت 😞😹😹😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S3']],]])]);}

if($data=="F6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
اح مبينه مفوله فول تعي نتزوج 💕😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S4']],]])]);}




if($data=="S4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
اخر مره دخلتي اصبعج بكسج ☹️😹
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اخاف😮",'callback_data'=>'F7']],
[['text'=>'من زمان','callback_data'=>'F8']],
[['text'=>"مصار هواي🙊😻",'callback_data'=>'F9']],]])]);}

if($data=="F7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح تعي خلي البوت يدخل اصبعه ويستكشف 😞😹💕",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S5']],]])]);}

if($data=="F8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"عفيه بالذيبه وشنو جان شعورج؟  💔😹🖕",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S5']],]])]);}

if($data=="F9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح تعي خلي البوت يدخل اصبعه ويستكشف 😞😹💕",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S5']],]])]);}



if($data=="S5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تحبين العير لو الخيار😉👙😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الخيار😻🙊",'callback_data'=>'F23']],
[['text'=>"العير",'callback_data'=>'F24']],]])]);}


if($data=="F23"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح فدوا للتحب الطبيعي تعي مصي
#وستمري 🤤😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S6']],]])]);}

if($data=="F24"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ام الخيار مبينه مجربتها 😹😹😹
#استمري",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S6']],]])]);}

if($data=="S6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اكثر شخص تتنايجين وياه،الموقع حبيبج😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"😢المواقع",'callback_data'=>'F26']],
[['text'=>"😋حبيبي",'callback_data'=>'F27']],
[['text'=>"ولا احد 😌",'callback_data'=>'F28']],]])]);}

if($data=="F26"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خدمات نيجني ؏ سريع • ﺗ؏َـﺂل ،🙌🏼Ֆ انيججج وبلاش دزي رساله نيجني 💕",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S7']],]])]);}

if($data=="F27"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اح بلعافيه عليج مبين شابع بيج 😞😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S7']],]])]);}


if($data=="F28"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ليشـۂ حياتتي 🙄😂✨ متحبين النيج",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S8']],]])]);}


if($data=="S8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شنو لون حلمتج  وشكد حجم ستيانج  😉😻
وردي 35✨🤤
إسمر 35 😻💋",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"وردي 35✨🤤",'callback_data'=>'F30']],
[['text'=>"اسمر35💋",'callback_data'=>'F31']],]])]);}


if($data=="F31"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح يسمره وفف شلون ديوس عليج
مال مص وكتل • مـٰــُِـ̯حہ ،💋 💕🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S9']],]])]);}


if($data=="F30"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اويلي هم ديوس ورديات وهم خلفيه
هنياله حبيبج اني منه اشبعج نيج 🤭😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S9']],]])]);}

if($data=="S9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروج بل نيج وضعيه 69🤤
لو وضعيه 56😻",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"وضعيه69🙊",'callback_data'=>'F32']],
[['text'=>"وضعيه 56😻",'callback_data'=>'F33']],
[['text'=>"ولا وحده",'callback_data'=>'F34']],]])]);}

if($data=="F32"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اححح مبينه متعلمه ؏ مص تتعي
خذيلج مضه ونيجه مني ☹️😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S10']],]])]);}


if($data=="F33"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خاب شكد قديمه بعد حولي ؏ وضعيه البزون وخلص 😑😹تعي انيجج 69",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S10']],]])]);}


if($data=="F34"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لعد ياوضعيه تحبين؟  $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S10']],]])]);}


if($data=="S10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>" لو خيروج تزينين شعرج☹️
لو انيجج منا لما امل 👙🙉😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ازين😟",'callback_data'=>'F54']],
[['text'=>"نيجني👄",'callback_data'=>'F55']],]])]);}

if($data=="F55"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وففف صايره شريفه وختارت ازين وهيه طابه ؏ بوت سكسي عار ونبي 😹😹😹😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ارجوع",'callback_data'=>'home']],]])]);}


if($data=="F54"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وففف بس تعالي واني اخليج تتونسين ؏ مدار ونبي 😞😹😹😹 $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="X2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو خيروج تلبسين لباس وطلعين بشارع لو تلبسين لباس وتجين بحضني",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بحضنك ",'callback_data'=>'F60']],
[['text'=>"بلشارع",'callback_data'=>'F61']],]])]);}

if($data=="F60"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| اوف تجين بلباس بس تروحين بدونه $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S11']],]])]);}

if($data=="F61"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| بشارع كلها شوفج وتتأذين بس يمي اداريج  $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S12']],]])]);}


if($data=="S11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| عندج ستعداد تفركين كدام ابوج لو اجي افركلج وحدنه",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"افركلي",'callback_data'=>'F63']],
[['text'=>"كدام ابويه",'callback_data'=>'F64']],]])]);}

if($data=="F63"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| افركلج صبح وليل وماكو ستراحه $SSK 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S12']],]])]);}

if($data=="F64"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| حتا تاكلين دك قنادر من الوالد 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S12']],]])]);}

if($data=="S12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| تلعبين بصدرج كدام ابوج لو اني العب بي",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"العب بصدري انت",'callback_data'=>'F65']],
[['text'=>"كدام ابويه",'callback_data'=>'F66']],]])]);}

if($data=="F65"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| العب بي وامصمص 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S13']],]])]);}

if($data=="F66"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| حتا تاكلين دك قنادر من الوالد 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S13']],]])]);}

if($data=="S13"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| تحطين اصبعج بلورا لو واحد يرضع بصدرج",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بصدري",'callback_data'=>'F67']],
[['text'=>"بلوره",'callback_data'=>'F68']],]])]);}

if($data=="F67"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| ءوف لو يمج مو بس ارضع الحس 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S14']],]])]);}

if($data=="F68"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| الله يساعدة اذا اصبعج طويل 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S14']],]])]);}


if($data=="S14"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو خيروج تاكلين باجه لو امص شفايفج 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"مص شفايفي",'callback_data'=>'F70']],
[['text'=>"اكل باجه",'callback_data'=>'F71']],]])]);}
if($data=="F70"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| اككل شفايفج ومص لسان وف",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S15']],]])]);}

if($data=="F71"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو متماصصه وياي مو احسن 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S15']],]])]);}

if($data=="S15"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو خيروج تنامين بغرفه كلها فار لو ادخل ايدي بستيانج😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"انام",'callback_data'=>'F72']],
[['text'=>"ادخل ايدك",'callback_data'=>'F73']],]])]);}

if($data=="F72"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| لو مدخل ايدي مو احسلج 😹😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع ",'callback_data'=>'home']],]])]);}

if($data=="F73"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- 🔥| وف ادخل ايدي وراسي هم",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="X3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"💗 اهلأ بك عزيزي في قسم الاسئله المنحرفة قم باختيار جنسك وإبدأ ألعب واستمتع 👅🔞✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بنت👩",'callback_data'=>'A1']],
[['text'=>"ولد??",'callback_data'=>'A2']],
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="A1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"الباسج يالون 👙🙈 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"وردي🙊😻",'callback_data'=>'B1']],
[['text'=>"اسود👍💟",'callback_data'=>'B2']],]])]);}

if($data=="B1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وفف ام الوردي تكتل 😞😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S16']],]])]);}

if($data=="B2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هنياله عليج 😉",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S16']],]])]);}

if($data=="S16"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"جبير",'callback_data'=>'B3']],
[['text'=>"صغير",'callback_data'=>'B4']],
[['text'=>"وسط",'callback_data'=>'B5']],]])]);}

if($data=="B3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بالعافيه ؏ ياخذج 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S17']],]])]);}

if($data=="B4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ووف اححح مال لحس ɵ̷̥̥᷄ˬɵ̷̥̥᷅",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S17']],]])]);}

if($data=="B5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اويلي مال رضع صدرج 💞😍😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S17']],]])]);}

if($data=="S17"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هم احد مـטּ كرايبج نايجج 🥺🤓 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اي🙊",'callback_data'=>'B6']],
[['text'=>"لا💔",'callback_data'=>' B7']],]])]);}


if($data=="B6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"الف ؏ـافيـٓـٰهۃ♥️🙈 عٖعـۤمٰرۤيۨ",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S18']],]])]);}
if($data=="B7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خطيه محرومه😂😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S18']],]])]);}

if($data=="S18"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"زروج كبار لوو صغار 🙄🔥؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"كبار💙",'callback_data'=>'B8']],
[['text'=>"صغار",'callback_data'=>'B9']],]])]);}

if($data=="B8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مال نيج وكتل 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S19']],]])]);}

if($data=="B9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"مال نيج وكتل 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S19']],]])]);}

if($data=="S19"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"من تشتهين تفركين صدرج ٰلـۄ كسج 🤤 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"كسي😻😌",'callback_data'=>'B10']],
[['text'=>"صدري🙈",'callback_data'=>'B11']],]])]);}

if($data=="B10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اويلي مممكن نيجه 🔥🤤 $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S20']],]])]);}

if($data=="B11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احح هسسهہٰ صدرج شكبره مـטּ الفرك ɵ̷̥̥᷄ˬɵ̷̥̥᷅",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S20']],]])]);}



if($data=="S20"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شنو اكثر شي يخدرج بجسمج 🤤😉؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ركبتي💙",'callback_data'=>'B12']],
[['text'=>"صدري😉🙊",'callback_data'=>'B13']],]])]);}

if($data=="B12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بمكن مصه حمبي؟ 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S21']],]])]);}
if($data=="B13"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بمكن مصه حمبي؟ 🔥🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"-المستوى التالي💗",'callback_data'=>'S21']],]])]);}

if($data=="S21"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"كم مرۿ نايجيج من كدام 🤔😂 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"ولامره 😻",'callback_data'=>'B14']],
[['text'=>"هواي😌",'callback_data'=>'B15']],]])]);}

if($data=="B14"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"عمرج خساره😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="B15"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هٰهٖٱ العريضه 🙂😂😂😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع 💗",'callback_data'=>'home']],]])]);}


if($data=="A2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لو خيروك تنيج بنت عمرها 11 😑😹
لو عجوز عمرها 60 سنه 😞💕😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بنت😂",'callback_data'=>'B16']],
[['text'=>"عجوز",'callback_data'=>'B17']],]])]);}

if($data=="B16"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"له له له تالي عمرك تنيج بعجوز 😹😹
`•اللّـہ̣̥` يساعدك يول 😹🚶‍♂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="X4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"🚫 عذرأ عزيزي هذا القسم غير متوفر حاليا تحت الصيانه نتأسف منك عزيزي جدأ وشكرا لك لاستخدامك خدمتنا . $SSK",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="X5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"♥️⁞ اهلأ بك عزيزي في قسم ( ڪدها عاديةة ) قم بأختيار جنسك وأبدا ألعب واستمتع 💘✨.",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بنت 🙊",'callback_data'=>'H1']],
[['text'=>"ولد😹",'callback_data'=>'H2']],
[['text'=>"رجوع",'callback_data'=>'home']],]])]);}

if($data=="H2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"انته زلمه مو مال لعبات
https://www.fuq.com",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}

if($data=="H1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"يا ام الكمـﮧـل😹/ڪدها 🌚💃
【تغسلين شعــرج بنفط🙊🙀/تكمشــين صرصر بأيدج😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"تكمشين صرصر",'callback_data'=>'H3']],
[['text'=>"تغسلين شعرج",'callback_data'=>'H4']],]])]);}

if($data=="H3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"يــلا عيــني💃💃

غنــي وياي🔇🔇
ام الكمل والصيــبان😹💃💃ها ها ام الكمــل والصيــبان😹💃💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S22']],]])]);}

if($data=="H4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"احــم🌚😹

هايــمنو التكمــش صرصر🌚😹
متأكده 🌚😹 هذا ويهج 😹💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S23']],]])]);}

if($data=="S23"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"يابعــد روح البــوت والمطور😹
ڪدها 🙀

【تطلعين بــدون مكياج وكلنا العراق😹/

ترحــين لأمج تكليلــهه اني مزوجه بالسر🙊😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"بدون مكياج",'callback_data'=>'R1']],
[['text'=>"اروح لامي",'callback_data'=>'R2']],]])]);}

if($data=="R1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"والله جــذابه😹
وعــلي جذابه?? والحسين جذابه😹
المصنهــره 😹المزنعــره😴😹
انــتي ويهج ليكول مطــور البوت😏😹
وطلعين بدون مكياج😹💃💃
نكطــع واهس الشباب بالــزواج😹💃💃🌚",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S24']],]])]);}

if($data=="R2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"كــفو🌚💪

وخــلج قويــه حبحياتي😼
ولتبجــين من اول راجــدي😹😹😹😹
💃💃💃💃💃💃",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S24']],]])]);}

if($data=="S24"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ڪدها 🌚😹

【تطلعين بدون ستيان👙/🌚😹/تنطين حلك لـ لوسفير 🌚😹】",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اطلع بدون ستيان",'callback_data'=>'R3']],
[['text'=>"انطي حلك لوسفير",'callback_data'=>'R4']],]])]);}

if($data=="R3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"وف🙊😹

وتعاي يم المطــور لوسفير😹💃
يريد يسولف وياج🌚😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="R4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"جذاااااااااااااااااااابه🌚😹

جذابه هو انتن تدورن حلوين🌚😹النوب تنطين حلك لـ لوسفير وووف😹💋",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="X8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ليله الدخله شونها حبي 😉😂 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"تخبل😍",'callback_data'=>'Q1']],
[['text'=>"تعب😻",'callback_data'=>'Q2']],]])]);}

if($data=="Q1"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هٰهٖٱ حبي لازم ريحج زين لوو نتي متعوده 😂🤤",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S30']],]])]);}


if($data=="Q2"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"يـلا عمري تكبرين وتنسين 😌😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S30']],]])]);}

if($data=="S30"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شكم راس سويتو نتي وزوجج باليله الدخله 😍🙊😂 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اكثر من 5😻",'callback_data'=>'Q3']],
[['text'=>"اقل من 5😟",'callback_data'=>'Q4']],]])]);}


if($data=="Q3"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"ﭑدرِي كس لوو تكسي شعندج 😂😔",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S31']],]])]);}

if($data=="Q4"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"عفية حبي خوش تسوين خوما نتي تكسي 🤤💔😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S31']],]])]);}

if($data=="S31"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"زوجج يحب صدرج 🙄❤️ ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"اي💓",'callback_data'=>'Q5']],
[['text'=>"لاا😧",'callback_data'=>'Q6']],]])]);}

if($data=="Q5"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لازم شابع منه كليوميه تنطي 💘😂😂✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S32']],]])]);}


if($data=="Q6"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"لازم شابع منه كليوميه تنطي 💘😂😂✨",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S32']],]])]);}

if($data=="S32"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"زوجج نايجج من وره لوو لاا 🤦‍♂😂 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"لاا🙊😻",'callback_data'=>'Q7']],
[['text'=>"يب👀❤",'callback_data'=>'Q8']],]])]);}

if($data=="Q7"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"جربي حياتي جربي حلو 😂😔😍",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S33']],]])]);}

if($data=="Q8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"شكد تحبين النيج لععد مممتتت 🔥🤤😂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S33']],]])]);}

if($data=="S33"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"زوجج يريح لو ما يعرف 🖤😪 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"يي كلش🙊😻",'callback_data'=>'Q9']],
[['text'=>"لاا😤😥",'callback_data'=>'Q10']],]])]);}

if($data=="Q9"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"بالعافية عليكم حيااتي 🖤🤓",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S34']],]])]);}



if($data=="Q10"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"تعالي يمي اريحج حبعمري 🖤😹",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"المستوى التالي💗",'callback_data'=>'S34']],]])]);}


if($data=="S34"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"هم خاينه زوجج وي غيره لوو لاا 😂😳 ؟",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"يي😂😂",'callback_data'=>'Q11']],
[['text'=>"لا🙋🙌",'callback_data'=>' Q12']],]])]);}

if($data=="Q11"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"خطيه لازم مايعرف ومايرحج 😂😒🤦‍♂",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="Q12"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اكيد من كسج لان عسل صاير 😍😂🙄",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}


if($data=="X8"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"- تم تحديث البوت بنجاح ، 📌 ",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"الرجوع",'callback_data'=>'home']],]])]);}




include "اذاعة.php";
