
<?php

error_reporting(0);

ob_start();

$get_toke = file_get_contents('info.php');

$get_token = explode("\n", $get_toke);

$url_info = file_get_contents("https://api.telegram.org/bot$get_token[0]/getMe");

$json_info = json_decode($url_info);

$userr = $json_info->result->username;

$bot_id = $json_info->result->id;

$admmm = $get_token[1];

$tbbots = $get_token[2];

$API_KEY = $get_token[0];
//--------------------------------------------//
// تم كتابة هاذا الملف بواسطة سمير التميمي //
// يرجى نشر الملف مع الحقوق قدرو تعبي //
// قناتي » @EITHON151 //
// معرفي » @SEMO151 //
//--------------------------------------------//
//=========DEV » @SEMO151=========//
define('API_KEY',$API_KEY);
function samir($method,$datas=[]){$TTKTT = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$TTKTT";
$TBBOTS = file_get_contents($url); return json_decode($TBBOTS);}
//=========DEV » @xr_3r=========//
function SendMessage($chat_id, $text){
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
 function Forward($berekoja,$azchejaei,$kodompayam)
{
Mostafa('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
function  getUserProfilePhotos($token,$from_id) {
  @$url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  @$result = file_get_contents($url);
  @$result = json_decode ($result);
  @$result = $result->result;
  return $result;
}
function check_filter($str){
	global $filterget;
	foreach($filterget as $d){
		if (mb_strpos($str, $d) !== false) {
			return true;
		}
	}
}
function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
if ($tc == 'private'){  
$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
//=========DEV » @xr_3r=========//
$sudo = $admmm; 
@$usernamebot = "$userr"; // دقیق وارد کنید
@$channel = "Allm_Telegram";
@$token = $API_KEY;
//=========DEV » @xr_r3=========//
@$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$from_ud = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
$text = $message->text;
@$textmassage = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$texxt = $update->inline_qurey->qurey;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$re = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$hj = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$you = $hj['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$yyou = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
$new        = $message->new_chat_member;
$nbot = file_get_contents("namebot.txt");
$kdeveloper = file_get_contents("kdeveloper.txt");
$zhrr = file_get_contents("zhrr.txt");
$namebot = file_get_contents("namebot.txt");
$sett = file_get_contents("sett.txt");
mkdir("data/$chat_id");
$owners = file_get_contents("data/$chat_id/owner.txt");
$devlist = file_get_contents("data/$chat_id/devlist.txt");
$Dev = explode("\n", $devlist);
$devs = file_get_contents("data/$chat_id/devslist.txt");
$admins = file_get_contents("data/$chat_id/admins.txt");
$adminlist= file_get_contents("data/$chat_id/adminlist.txt");
$getCCadmins = explode("\n", $admins);
$grouplinks = file_get_contents("groupslink.txt");
$edar = file_get_contents("data/$chat_id/edary.txt");
$edarylist = file_get_contents("data/$chat_id/edarylist.txt");
$edary = explode("\n", $edar);
$mmyyz = file_get_contents("data/$chat_id/mmyz.txt");
$mmyzlist = file_get_contents("data/$chat_id/mmyzlist.txt");
$mmyz = explode("\n", $mmyyz);
$chatid3=$update->message->chat->id;
$fromid3=$update->message->from->id;
$textt =$update->message->text;
//===========DEV » @xr_3r===========//
@$helo = json_encode([
    'inline_keyboard'=>[
           [
        ['text'=>"اظغط هنا للصنع بوتك ™",'url'=>"https://t.me/hmai5Bot"]
     ],
   ]
   ]);

if($text != 'start'){
if($tc == 'private'){
$locktwasl = $settings["lock"]["twasl"];
if ($locktwasl == "☑️ معطل ☑️") {
    Mostafa('forwardMessage',[
        'chat_id'=>$sudo,
        'from_chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
    ]);
    Mostafa('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
🗯¦ تم آرسـآل رسـآلتگ آلى آلمـطـور
📬¦ سـآرد عليگ في آقرب وقت
🏌 @$tbbots",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'• اصنع بوت ، لك 🔱','url'=>'https://t.me/hmai5Bot']],
               ]
        ])
    ]);
}
}
}
if($message->reply_to_message->forward_from->id and $from_id == $sudo){
$locktwasl = $settings["lock"]["twasl"];
if ($locktwasl == "☑️ معطل ☑️") {
    Mostafa('sendMessage',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
}
}
if( $text =="/start" &&  $tc == "private" or $text  =="🔙  رجوع" &&  $tc == "private" ){
if($from_id == $sudo || in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
🎖¦ آهہ‌‏لآ عزيزي آلمـطـور 🍃
💰¦ آنتهہ‌‏ آلمـطـور آلآسـآسـي هہ‌‏نآ 🛠
...
🚸¦ تسـتطـيع‌‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‌‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‌‏
",
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"اسم للبوت 🤖"],['text'=>"تفعيل التواصل 🔱"]
],
[
['text'=>""],['text'=>"عدد الكروبات المفعله ✅"]
],
[
['text'=>"اضف مطور ➕"],['text'=>"حذف مطور ➖"]
],
[
['text'=>""],['text'=>"روابط الجروبات 🔗"]
],
[
['text'=>"المطورين 🗳"],['text'=>"تعطيل التواصل 🔱"]
],
[
['text'=>""],['text'=>"وضع قناة 📡"]
],
[
['text'=>"اضف رد عام ➕"],['text'=>"حذف رد عام ➖"]
],
[
['text'=>"الردود العامه 🗳"],['text'=>"مسح الردود العامه 🗑"]
],
[
['text'=>""],['text'=>"عدد المشتركين 👥"]
],
[
['text'=>"كليشة مطور 👮"],['text'=>"حظر عام ➕"]
],
[
['text'=>"الغاء حظر عام ➖"],['text'=>"المحظورين عام 🗳"]
],
[
['text'=>"❗️حظر مجموعة❗️"],['text'=>"💥 الاحصائيات"]
],
[
['text'=>"🔅 نشر كروبات"],['text'=>"👤 نشر مستخدم"]
],
[
['text'=>"📌 توجية كروبات"],['text'=>"📍 توجية مستخدم"]                            
],
[
['text'=>""],['text'=>"مميزات الاصدار المدفوع 🔱"]
],
],
  'resize_keyboard'=>true
])
]);
}
}
$settt = file_get_contents("settt.txt");
$chh = file_get_contents("qwq.txt");
if ($text == "وضع قناة 📡" and $from_id == $sudo || in_array($from_id,$Dev)){
file_put_contents("settt.txt","ch");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"
ارسل معرف قناتك الان ، 📡
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}
if($text && $settt =="ch" and $from_id == $sudo ||  in_array($from_id,$Dev)){
file_put_contents("qwq.txt",$text); 
file_put_contents("settt.txt","");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text" => "
تم اضافة القناة @$text
 -",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,
]);
}
elseif($textmassage=="💥 الاحصائيات" and $from_id == $sudo ||  in_array($from_id,$Dev)){
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
				Mostafa('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"الاحصائيات : 📈 

👥¦ عدد المجموعات المفعله : $group
👤¦ عدد المشتركين في البوت : $users
📡
",
                'hide_keyboard'=>true,
		]);
		}
elseif ($textmassage == '👤 نشر مستخدم' and $from_id == $sudo ||  in_array($from_id,$Dev)){
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"قم بإرسال رسالتك 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="senduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
if ($textmassage == '🔅 نشر كروبات' and $from_id == $sudo ||  in_array($from_id,$Dev)){
	if($tc == "private"){
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"ارسل رسالتك لنشرها في مجموعات 🚀",
	  'reply_to_message_id'=>$message_id,
 ]);
$user["userjop"]["$from_id"]["file"]="sendgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
if ($textmassage == '📌 توجية كروبات' && $from_id == $sudo ||  in_array($from_id,$Dev)){
if($tc == "private"){
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"قم بتوجيه رسالتك لنشرها في المجموعات 🚀",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forwardgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
if ($textmassage == '📍 توجية مستخدم' and $from_id == $sudo ||  in_array($from_id,$Dev)){
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"قم بتوجيه رسالتك لنشرها للمستخدمين 🚀",
				  'reply_to_message_id'=>$message_id,
				   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
    		]);
$user["userjop"]["$from_id"]["file"]="forwarduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
if ($user["userjop"]["$from_id"]["file"] == 'forwarduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "رجوع  🔙") {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال الرسالة بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
if ($user["userjop"]["$from_id"]["file"] == 'forwardgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "رجوع  🔙") {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>" تم ارسال الرسالة بنجاح✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
if ($user["userjop"]["$from_id"]["file"] == 'sendgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "رجوع  🔙") {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     Mostafa('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$textmassage",
        ]);
}
}
}
if ($user["userjop"]["$from_id"]["file"] == 'senduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($textmassage != "رجوع  🔙") {
         Mostafa('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     Mostafa('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$textmassage",
        ]);
}
}
}


if($text =="تفعيل التواصل 🔱" ){
if($from_id == $sudo){
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم تفعيل التواصل",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["twasl"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
// video note
if($text =="تعطيل التواصل 🔱"){
if($from_id == $sudo ){
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم تعطيل التواصل",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["twasl"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if ($text == "اضف مطور ➕" and $from_id == $sudo ||  in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
- تستطيع اضافه مطورين في الجروب من خلال الرد على رساله العضو الذي تريد رفعه مطور وارسال رفع مطور
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}
if($text == "مميزات الاصدار المدفوع 🔱"){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"
• الاصدار المدفوع ، 💯
- مميزاته، ↓↓
*----------------------*
• اضافة اوامر تعيين للاتي ↓↓
*----------------------*
#الستارت » رسالة البدء ✅
#رد_التواصل » رسالة استلام الرسائل #الترحيب » عند اضافة البوت لاي مجموعة مباشرة { يقبل بالصورة او نص عادي } ✅
#ردود_للمطور » وضع ردود معينه للمطور ✅
*----------------------*
#تفعيل_البوت_متاح » يستطيع اي واحد تفعيل بوتك في جروبه ✅
#تعطيل_البوت_متاح » تستطيع انت فقط تفعيل بوتك في الجروبات ✅
#اذاعة_عام » لنشر للكروبات+مشتركين رساله عاديه ✅
#توجيه_عام » لنشر للجروبات+مشتركين بالتوجيه ✅
#تصحيح_اوامر_الوضع » لتصحيح جميع اوامر الوضع مثل وضع قوانين + القوانين ستكون كالتالي :
- وضع قوانين ثم ارسل القوانين وهكذا مع بقية اوامر الوضع  ✅
#تعيين_الايدي » لتعيين رساله لامر ايدي ✅
#تعيين_الاوامر » لتغيير كلايش › الاوامر + م1 + م2 + م3 + م المطور  ✅
*-----------------------*
#تنزيل_المنشئ » بحيث تقدر تنزل مدير الكروب وتكون انت اللي تتحكم بالبوت ✅
#تصحيح_جميع_الكلايش_مثل_سورس_الزعيم_بالضبط ✅
 #ازاله_جميع _الحقوق » بحيث تكون انت المطور الاساسيوازاله اي معرفات او قنوات في بوتك ✅
*----------------------*
#ملاحظة » ملف الالعاب اضيفه لك 3 العاب بـ 1$ » 500 ر.ي ✅
- تريد اضيفلك اي لعبه تريدها بـ 1$ » 500 ر.ي
- مع الاصدار المدفوع لن تحتاج للسورسات 🙃
- شبيه جدا للسورس الزعيم 98% 📛
- مع امكانيه تفعيل 3500 مجموعة 🔱
- مع امكانية تخزين كبيرة 300MB ♻
- اوامر خاصة ومميزه ايضا غير متوفرة بالسورس ✅
*----------------------*
• لشراء الاصدار المدفوع بـ 3$ » 1500 ريال يمني ✅
• لشراء ملف الالعاب مع تطبيقه في بوتك بـ 3000 ر.ي {9} العاب ✅
• لن يتم فقد بيانات بوتك الحالي ✅
• للشراء الرجاء التواصل معنا ✅
*----------------------*
• للتواصل مع المطور » @xr_3r
• بوت التواصل » @EL_HAKEM_1BOT
• قناة السورس » @EITHON151

√",
 'reply_to_message_id'=>$message_id
,]);
}
if ($text == "عدد الكروبات المفعله ✅" and $from_id == $sudo ||  in_array($from_id,$Dev)){
$cg = count($user["grouplist"]);
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📮¦ عدد المجموعات المفعلة » $cg  ➼
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}
if ($text == "عدد المشتركين 👥" and $from_id == $sudo ||  in_array($from_id,$Dev)){
$cu = count($user["userlist"]);
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"*💯¦ عدد مشتركين البوت :- { $cu }*
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}
if ($text == "روابط الجروبات 🔗" and $from_id == $sudo ||  in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📭¦ حسننا عزيزي اليك الروابط

$grouplinks
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}
if ($text == "حذف مطور ➖" and $from_id == $sudo ||  in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
- تستطيع حذف من خلال الرد على رساله العضو وارسال تنزيل مطور او حذف مطور
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}
if ($text == "المطورين 🗳" and $from_id == $sudo ||  in_array($from_id,$Dev)){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
"text"=>"📭¦ حسننا عزيزي المطور،
- ارسل المطورين في المجموعة لعرضهم
√",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);
}

$iBadlz       = $message->message_id;
$setn = file_get_contents("setn.txt");
$namebot = file_get_contents("namebot.txt");
if ($text == "اسم للبوت 🤖" and $from_id == $sudo){
if($tc == "private"){
 file_put_contents("setn.txt","nam");
 Mostafa("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
 *📭¦ حسننا عزيزي  المطور،
🗯¦ الان ارسل الاسم  للبوت ⚜*
 ",
 'parse_mode'=>"MARKDOWN",
 "reply_to_message_id"=>$iBadlz,
 ]);
 }
 }
 if($text && $setn =="nam"){
 	if($tc == "private"){
  file_put_contents("namebot.txt",$text);
  file_put_contents("setn.txt","");
  Mostafa("sendmessage",[
  "chat_id"=>$chat_id,
  "text" => "
  *📭¦ تم تغير اسم البوت  ✋🏿*
  ",
  'parse_mode'=>"MARKDOWN",
  "reply_to_message_id"=>$iBadlz,
  ]);
  }
  }
  if($text == "بوت" || $text == "شسمك"){
 $arr = array('اجيت اجيت كافي لتصيح 🌚👌','خليلي حالي 😕 ماتشتي"
',"*اسمي $namebot 🌺🌚*");
$arr1 = array_rand($arr,true);
Mostafa('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$arr[$arr1]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تتاللبببلاا" or $text == "$nbot"){
$arr = array('هلا بيك اتفضل 🙃','ايش تشتي 😶','خليلي حالي قبل ما... 😡');
$arr1 = array_rand($arr,true);
Mostafa('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$arr[$arr1]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
//Welcome In to new group
if($new and $new->id == $bot_id) {
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي $nbot 🎖
      
💰¦ آختصـآصـي حمـآيهہ‏‏ آلمـجمـوعآت

📛¦ مـن آلسـبآم وآلتوجيهہ‏‏ وآلتگرآر وآلخ...

⚖️¦ مـعرف آلمـطـور  : @$tbbots 🌿
👨🏽‍🔧",
]);
}

//ban all and unban all
if($rt && $text=="حظر عام"){
if ( $status != 'creator' or $from_id == $sudo){
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$textt&user_id=".$re_id);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$re_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
if($rt && $text =="الغاء حظر عام"){
if ( $status != 'creator' or $from_id == $sudo){
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$textt&user_id=".$re_id);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
Mostafa('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم الغاء حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}

$idleft = $update->message->left_chat_member->id;
$idbot = $bot_id;

if($update->message->left_chat_member and $idleft==$idbot){
Mostafa("sendMessage",[
"chat_id"=>$sudo,
"text"=>"
📛| قام شخص بطرد البوت من المجموعه الاتيه :
🏷| ألايدي : $chat_id
🗯| الـمجموعه : $namegruop

📮| تـم مسح كل بيانات المجموعه بنـجاح
",
'reply_to_message_id'=>$mid,
  'parse_mode'=>'html',
'disable_web_page_preview'=>true,
]);
}

$mid = $message->message_id;

if($message->new_chat_members){
Mostafa('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

if($message->left_chat_member){
Mostafa('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}

//admin «» By @xr_r3 
if($text == "رفع ادمن"){
if ($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح ادمن 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("data/$chat_id/edary.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/$chat_id/edarylist.txt","➺ @" . $re_user . " » " . $re_id . "«" . "\n" , FILE_APPEND);
}
}
elseif($re and $text == "رفع ادمن" and in_array($re_id,$edary)){
if ($status == 'creator' or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح ادمن مسبقا
✓️
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
  ]);
}
}
if($textmassage=="تنزيل ادمن" or $textmassage=="حذف ادمن" or $textmassage=="تنزيل الادمن"){
if ($status == 'creator' or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تم تنزيله من الادمنيه
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
$str = str_replace($re_id,"",$edar);
$str2 = str_replace("➺ @" . $re_user . " » " . $re_id . " « ","",$edar);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/$chat_id/edary.txt",$ex);
file_put_contents("data/$chat_id/edarylist.txt",$ex2);
}
}
if($text == "مسح الادمنيه" and $edar != NULL){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
file_put_contents("data/$chat_id/edary.txt","");
file_put_contents("data/$chat_id/edarylist.txt","");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🥠¦ تم حذف جميع الادمنية",
'parse_mode'=>'MARKDOWN',
'reply_to_message_id'=>$message->message_id,
]);
}
}
elseif($text == "مسح الادمنيه" and $edar == NULL){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
file_put_contents("data/$chat_id/edary.txt","");
file_put_contents("data/$chat_id/edarylist.txt","");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🔱¦ لايوجد ادمنية لحذفها 📛",
'parse_mode'=>'MARKDOWN',
    'reply_to_message_id'=>$message->message_id,
  ]);
         }
}
if($text =="الادمنيه" and $edar != null){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📛¦ قائمة الادمنية ➣

$edarylist
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
'parse_mode'=>"htmil",
 ]);
	}
}
elseif($text =="الادمنيه" and $edar == null){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📛¦ قائمة الادمنية ➣

لايوجد ادمنية هنا
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
'parse_mode'=>"htmil",
 ]);
	}
}
//Devlopers
if($rt && $text =="رفع مطور"){
if($from_id == $sudo){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مطور 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
file_put_contents("data/$chat_id/devlist.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/$chat_id/devslist.txt","➺ @" . $re_user . " ✺ " . $re_id . "✺" . "\n" , FILE_APPEND);
}
}
elseif($rt && $text =="رفع مطور" and in_array($re_id,$Dev)){
if($from_id == $sudo){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ انه مطور بالفعل 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}
}
if($rt && $text =="تنزيل مطور" or $text =="حذف ادمن" or $text =="تنزيل الادمن"){
if ( $status != 'creator' or $from_id == $sudo) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تم ازالته من المطورين 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$str = str_replace($re_id,"",$devlist);
$str2 = str_replace("➺ @" . $re_user . " ✺ " . $re_id . " ✺ ","",$devs);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/$chat_id/devlist.txt",$ex);
file_put_contents("data/$chat_id/devslist.txt",$ex2);
	}
}

// Creators «» By @xr_3r 
if($rt &&$textmassage=="رفع مدير"){
if ($status == 'creator' or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مدير 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
file_put_contents("data/$chat_id/admins.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/$chat_id/adminlist.txt","➺ @" . $re_user . " ✺ " . $re_id . "✺" . "\n" , FILE_APPEND);
	}
}
elseif($rt && $text =="رفع مدير" and in_array($re_id,$getCCadmins)){
if ($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ انه مدير بالفعل 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}
}
if($rt && $textmassage=="تنزيل مدير"){
if ($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تم حذفه من المدراء 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 ]);
$str = str_replace($re_id,"",$admins);
$str2 = str_replace("➺ @" . $re_user . " ✺ " . $re_id . " ✺ ","",$adminlist);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/$chat_id/admins.txt",$ex);
file_put_contents("data/$chat_id/adminlist.txt",$ex2);
	}
}

//------------Lists «» By @TTKTT -----------//
if($textmassage=="المطورين" and $devlist == NULL){
if( $from_id == $sudo){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🛠¦ لايوجد مطورين هنا ",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 ]);
}
}
if($textmassage=="المطورين" and $devlist != NULL){
if( $from_id == $sudo){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📛¦ قائمة المطورين ➣

$devs
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
if($textmassage=="المدراء" and $admins == NULL){
if ($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🛠¦ لايوجد مدراء هنا ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
if($textmassage=="المدراء" and $admins != NULL){
if ($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📛¦ قائمة المدراء ➣

$adminlist
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}

// mmyz «» By @xr_3r 
if($rt && $textmassage=="/proرززmote" or $textmassage=="prوombbbote" or $textmassage=="رفع مميز"){
if ( $status != 'creator' or $from_id == $sudo or in_array($from_id,$Dev)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تمت ترقيته ليصبح مميز 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
]);
file_put_contents("data/$chat_id/mmyz.txt",$re_id ."\n",FILE_APPEND);
file_put_contents("data/$chat_id/mmyzlist.txt","➺ @" . $re_user . " ✺ " . $re_id . "✺" . "\n" , FILE_APPEND);
	}
}
if($rt && $text =="رفع مميز" and in_array($re_id,$mmyz)){
if ($from_id == $owners or $from_id == $sudo or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ انه مميز بالفعل 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);
}
}
if($rt && $textmassage=="تنزيل مميز" or $textmassage=="حذف مميز" or $textmassage=="تنزيل المميز"){
if ( $status != 'creator' or $from_id == $sudo or in_array($from_id,$Dev)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » [$re_name](tg://user?id=$re_id) 
🎫¦ الايدي » {`$re_id`}
🛠¦ تم حذفه من المميزين 
✓️",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
 ]);
$str = str_replace($re_id,"",$mmyyz);
$str2 = str_replace("➺ @" . $re_user . " ✺ " . $re_id . " ✺ ","",$mmyzlist);
$ex = explode("\n",$str);
$ex2 = explode("\n",$str2);
file_put_contents("data/$chat_id/mmyz.txt",$ex);
file_put_contents("data/$chat_id/mmyzlist.txt",$ex2);
	}
}
if($text =="المميزين" and $mmyyz == null){
if($from_id == $owners  or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🛠¦ لايوجد مميزين هنا ",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
if($text =="المميزين" and $mmyyz != null){
if($from_id == $owners  or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📛¦ قائمة المميزين ➣

$mmyzlist
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
if($text =="مسح المميزين" and $mmyyz != NULL){
if($from_id == $owners  or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🗑¦ تم مسح المميزين بنجاح
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("data/$chat_id/mmyz.txt","");
file_put_contents("data/$chat_id/mmyzlist.txt","");
}
}
if($text =="مسح المميزين" and $mmyyz == null){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📛¦ لايوجد مميزين لحذفهم
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
if($text =="مسح المدراء" and $admins != null){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🗑¦ تم مسح المدراء بنجاح
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("data/$chat_id/admins.txt","");
file_put_contents("data/$chat_id/adminlist.txt","");
}
}
if($text =="مسح المدراء" and $admins == null){  
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🗑¦ لايوجد مدراء لحذفهم
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
if($textmassage=="مسح المطورين" and $devlist == null){
if($from_id == $sudo){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
لايوجد مطورين عزيزي المطور 📡
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
if($text =="مسح المطورين" and $devlist != null){
if($from_id == $sudo){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🗑¦ تم مسح المطورين بنجاح
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("data/$chat_id/devlist.txt","");
file_put_contents("data/$chat_id/devslist.txt","");
}
}

if($text =="مسح المطورين" or $text == "رفع مطور" or $text == "تنزيل مطور" or $text == "المطورين"){
if($from_id != $sudo){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
♦️┇هذا الامر يخص المطور فقط  
❕
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}

if($text =="مسح المدراء" or $text == "رفع مدير" or $text == "تنزيل مدير" or $text == "المدراء"){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev)){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
♦️┇هذا الامر يخص المنشئ فقط  
❕
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}

if($text =="مسح الادمنيه" or $text == "رفع ادمن" or $text == "تنزيل ادمن" or $text == "الادمنيه"){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
♦️┇هذا الامر يخص المطور ، المدير ، المطورين ، المنشئ فقط  
❕
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}

if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
if($rt and $text=="تقيد" || $text == "تقييد"){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text =="الغاء تقيد" || $text =="الغاء التقيد" || $text =="الغاء التقييد" || $text =="الغاء تقييد"){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text =="رفع ادمن"){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if( $rt and $text =="تنزيل ادمن"){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
// Orders «» By @xr_3r 
if($text=="الاوامر"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if ($tc == 'group' | $tc == 'supergroup'){  
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❂

 ‌‌‏❋¦ مـسـآرت آلآوآمـر آلعآمـهہ‌‏ ⇊

🛡¦ م1 » آوآمـر آلحمـآيهہ‌‏

📟¦ م2 » آوآمـر آعدآدآت آلمـجمـوعهہ‌‏

👨‍⚖️¦ م3 » آوآمـر آلآدآرهہ‌‏

🕹¦ م المطور »  آوآمـر آلمـطـور

⚡️¦ اوامر الرد » لآضـآفهہ‌‏ رد مـعين

⚖️¦ مـعرف آلمـطـور @$tbbots

",
'reply_to_message_id'=>$message_id,
  	]);
  	}
 }
 }
if($from_id == $sudo || in_array($from_id,$dev)){
if($text == "م المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*📌¦ اوامر المطــہور 

🔅¦ عزيزي المطور ، ارسل /admin
🔅¦ في خاص البوت لعرض اوامرك ،!

🔅¦ تحديث: لتحديث ملفات البوت
🔅¦ رفع او تنزيل : مطور { بالرد }
🔅¦ المطورين او /d : لعرض المطورين ، 
🔅¦ الادمنيه : لعرض مشرفين الكروب ،!
🔅¦ روابط الجروبات » لاعطائك ليستة روابط للجروبات المفعله


🔅¦ الاحصائيات : لعرض احصائيات البوت ،
🔅¦ مسح المطورين او /n : لمسح المطورين ،! 
🔅¦ـ➖➖➖➖➖
[⚖️¦ مـعرف آلمـطـور  :](t.me/$tbbots)
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	if($text=="الاوامر" || $text =="/help"){
  	bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	if($text == "م1"){
	bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	if($text == "م2"){
	bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	if($text == "م3"){
	Mostafa("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	if($text == "اوامر الرد"){
	Mostafa("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"📡¦ هذا الامر يخص الادمنيه فقط  🚶",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	}
	if($from_id != $sudo and !in_array($from_id,$Dev)){
	if($text == "م المطور"){
	bot("sendmessage",[
	'chat_id'=>$chat_id,
	'text'=>"♦️┇هذا الامر يخص {المطور} فقط  
❕",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	]);
	}
	}
$message_id = $update->message->message_id;
$user          = $update->message->from->username;

/*
الاوامر كتٱلي : 
- اضف رد ، مسح رد ، الردود ، مسح الردود 
- اضف رد عام ، مسح رد عام ، الردود العامه ، مسح الردود العامه
*/

mkdir("data");
mkdir("data/addrd");

$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);


if($textmassage == "اضف رد"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
 	file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$textmassage);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$textmassage);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $textmassage . "\n" , FILE_APPEND);
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"
📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
- 
",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"* تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage == "مسح رد"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if(file_exists("data/addrd/$chat_id/$textmassage.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 	if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
 	$str = str_replace("- $textmassage","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
 	unlink("data/addrd/$chat_id/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/sticker/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/video/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/videonote/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/document/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/photo/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/audio/$textmassage.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*($textmassage)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
elseif(!file_exists("data/addrd/$chat_id/$textmassage.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
	if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
	file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*💬¦ هذا الرد ليس مضاف في قائمه الردود 📛*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
}
if($text == "مسح الردود"){
	if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

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
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}
}
if($textmassage== "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
	if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ ردود البوت في المجموعه  :

$get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($textmassage == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
	if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*🚸¦ لا يوجد ردود مضافه حاليا 
❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}

if($textmassage == "اضف رد عام ➕" || $text == "اضف رد عام"){
if ( $status != 'creator' or $from_id == $sudo or in_array($from_id,$Dev)) {
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
if ( $status != 'creator' or $from_id == $sudo or in_array($from_id,$Dev)) {
 	file_put_contents("data/addrd/opption.txt","I_BADLZ");
     file_put_contents("data/addrd/mod.txt",$text);
     file_put_contents("data/addrd/media/media.txt",$text);
     file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($message and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
if ( $status != 'creator' or $from_id == $sudo or in_array($from_id,$Dev)) {
  file_put_contents("data/addrd/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/mod.txt","");
   file_put_contents("data/addrd/media/media.txt","");
   file_put_contents("data/addrd/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage == "حذف رد عام ➖" or $textmassage == "مسح رد عام ➖" ){
if ( $status != 'creator' or $from_id == $sudo or in_array($from_id,$Dev)) {
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_delete");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if(file_exists("data/addrd/$textmassage.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
 	if(in_array($from_id,$Dev)){
 	$str = str_replace("- $text","",$I_get_rd);
     file_put_contents("data/addrd/getrd.txt",$str);
      file_put_contents("data/addrd/from_id.txt","");
      file_put_contents("data/addrd/opption.txt","");
 	unlink("data/addrd/$textmassage.txt");
     unlink("data/addrd/media/$textmassage.txt");
     unlink("data/addrd/media/sticker/$textmassage.txt");
     unlink("data/addrd/media/video/$textmassage.txt");
     unlink("data/addrd/media/videonote/$textmassage.txt");
     unlink("data/addrd/media/document/$textmassage.txt");
     unlink("data/addrd/media/photo/$textmassage.txt");
     unlink("data/addrd/media/audio/$textmassage.txt");
     unlink("data/addrd/media/contact/$text.txt");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*($textmassage)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 elseif(!file_exists("data/addrd/$textmassage.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
 	if(in_array($from_id,$Dev)){
	file_put_contents("data/addrd/from_id.txt","");
    file_put_contents("data/addrd/opption.txt","");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
 "text"=>"*🚸¦ لا يوجد ردود مضافه حاليا *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 }
 if($textmassage == "مسح الردود العامه" or $textmassage == "مسح الردود العامه 🗑"){
if ( $status != 'creator' or $from_id == $sudo or in_array($from_id,$Dev)) {
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

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
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/getrd.txt", "");
}
}
if($textmassage == "الردود العامه 🗳" or $textmassage == "الردود العامه" and $I_get_rd != NULL and $I_get_rd != "" and $I_get_rd != " " and $I_get_rd != "\n\n" and $I_get_rd != "\n" and $I_get_rd != "\n\n\n" and $I_get_rd != "\n\n\n\n" and $I_get_rd != "\n\n\n\n\n" and $I_get_rd != "\n\n\n\n\n\n"){
	if ( $status != 'creator' or $from_id == $sudo or in_array($from_id,$Dev)) {
	Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ الردود العامه في البوت :

$I_get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($textmassage == "الردود العامه 🗳" or $text == "الردود العامه" and $I_get_rd == NULL || $I_get_rd == "" || $I_get_rd == " " || $I_get_rd == "\n\n" || $I_get_rd == "\n" || $I_get_rd == "\n\n\n" || $I_get_rd == "\n\n\n\n" || $I_get_rd == "\n\n\n\n\n" || $I_get_rd == "\n\n\n\n\n\n"){
if ($from_id == $sudo or in_array($from_id,$Dev)) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🚸¦ لا يوجد ردود مضافه حاليا ❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}


if($message->text and file_exists("data/addrd/$textmassage.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$textmassage.txt");
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/$textmassage.txt");
   Mostafa('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/audio/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/audio/$textmassage.txt");
 Mostafa('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/sticker/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/sticker/$textmassage.txt");
 Mostafa('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/video/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/video/$textmassage.txt");
Mostafa('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/photo/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/photo/$textmassage.txt");
Mostafa('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/videonote/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/videonote/$textmassage.txt");
 Mostafa('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/document/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/media/document/$textmassage.txt");
 Mostafa('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/contact/$textmassage.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/media/contact/$textmassage.txt");
Mostafa('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/$textmassage.txt")) {
    $MoHaMMed = file_get_contents("data/addrd/$chat_id/$textmassage.txt");
   Mostafa('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoHaMMed,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/$textmassage.txt");
   Mostafa('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/audio/$textmassage.txt");
 Mostafa('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoHaMMed,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/sticker/$textmassage.txt");
 Mostafa('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/video/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/video/$textmassage.txt");
Mostafa('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/photo/$textmassage.txt");
Mostafa('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoHaMMed,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/videonote/$textmassage.txt");
 Mostafa('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/document/$textmassage.txt")) {
  $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/document/$textmassage.txt");
 Mostafa('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoHaMMed,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$textmassage.txt")) {
 $MoHaMMed = file_get_contents("data/addrd/$chat_id/media/contact/$textmassage.txt");
Mostafa('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoHaMMed,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 // Games «» By @xr_3r 
if($text == "الالعاب" or $text == "قائمه العاب"){
 Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"🎮¦  اهلا بك اليك قائمه الالعاب
 
💘¦ $first_name

💬¦ الاسرع - لعبهہ‏‏ سمايلات 
🏈¦ الترتيب - لعبهہ‏‏ ترتيب كلمات
🎺¦ معاني - لعبهہ‏‏ معاني السمايلات

📕¦ رسائلي - لعرض رسائلك
",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
$ali = array(' العبارة ، 🌛 :- [ ل س ا ق ت ب ا ] '
,' العبارة ، 🌜 :- [ ه ا ر س ي ]'
,'العبارة ، 🌛 :- [ ر و ح س ]'
,'العبارة ، 🌜 :- [ ن ف ه ق ]'
,'العبارة ، 🌛 :- [ و ن ي ا ف  ]'
,'العبارة ، 🌜 :- [  ن و ه ب ز  ]'
,'العبارة ، 🌛 : [ر ك و س ت ن ا ي ]'
,'العبارة ، 🌜:- [ ا ع ل ق ا ر ]'
,'العبارة ، 🌛 :- [ و هـ ك ه ]'
,'العبارة ، 🌜- [ ف ي س ه ن ]'
,'العبارة ، 🌛 :- [ ج ا د ج  ه ]'
,' العبارة ، 🌜 - [ س م ر د ه ]'
,'العبارة ، 🌛 :- [ ا ن ا و ل ]'
,'العبارة ، 🌜 :- [ ه غ ف ر ]'
,' العبارة ، 🌛 :- [ ج ه ث ل ا ]'
,' العبارة ، 🌜 :- [ خ م ب ط ]'
,'العبارة ، 🌛 : [ ع ا ل ي و ]'
,'العبارة ، 🌜 [ ك ا م ل ]'
,'العبارة ، 🌛 [ ح ا و ي ن ]'
,'العبارة ، 🌜 : [ ا د س ]'
,'العبارة ، 🌛 : [ ل ب ك ]'
,'العبارة ، 🌜 : [ ف ش ة ]'
);
$tttitt = array_rand($ali, 1);
if($text =="ترتيب" or $text =="عبارة"or $text =="كلمه"or $text =="عباره"){
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ali[$tttitt],
'reply_to_message_id'=>$message->message_id
]);
}
if($text == 'سحور' or $text == 'سياره' or $text == 'شفة' or $text == 'كلب' or $text == 'اسد' or $text == 'حيوان' or $text == 'علاوي' or $text == 'كلام'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'كهوه' or $text == 'سفينه' or $text == 'العراق'){
$alaw = array('هاذي اجابه صح ، ♥️
ارسل كلمه { ترتيب }',
'اجابتك صحيحة ، 💛
ارسل كلمه { ترتيب}',
'جوابك صح ، 😍
ارسل كلمه { ترتيب }',
'جوابك صح صح صح ، ⭐️
اارسل كلمه { ترتيب }',);
$php = array_rand($alaw, true);
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$alaw[$php],
'reply_to_message_id'=>$message->message_id
]);
}
// «» By @xr_3r 
//الاسرع
$alis = array('اسرع واحد يدز { 😜 }'
,'اسرع واحد يدز { 🏦 }'
,'اسرع واحد يدز { 🏥 }'
,'اسرع واحد يدز { 🐢 }'
,'اسرع واحد يدز { 🐀 }'
,'اسرع واحد يدز { 🐁 }'
,'اسرع واحد يدز { 🐱 }'
,'اسرع واحد يدز { 🐩 }'
,'اسرع واحد يدز { 😨 }'
,'اسرع واحد يدز { 😴 }'
,'اسرع واحد يدز { 🔧 }'
,'اسرع واحد يدز { 🏇 }'
,'اسرع واحد يدز { 🗼 }'
,'اسرع واحد يدز { 🔨 }'
,'اسرع واحد يدز { 🎈 }'
,'اسرع واحد يدز { 🔛 }'
,'اسرع واحد يدز { ⏳ }'
,'اسرع واحد يدز { 🚰 }'
,'اسرع واحد يدز { ⛎ }'
,'اسرع واحد يدز { 💮 }'
,'اسرع واحد يدز { ➿ }'
,'اسرع واحد يدز { 🗿 }'
,'اسرع واحد يدز { 💙 }'
,'اسرع واحد يدز { 🍖 }'
,'اسرع واحد يدز { 🍕 }'
,'اسرع واحد يدز { 🍟 }'
,'اسرع واحد يدز { 🍄 }'
,'اسرع واحد يدز { 🌜 }'
,'اسرع واحد يدز { 🌛 }'
,'اسرع واحد يدز { 🌎 }'
,'اسرع واحد يدز { 💧 }'
,'اسرع واحد يدز { ⚡ }'
);
$tttit = array_rand($alis, true);
if($text =="الاسرع" or $text =="الٲسرع"or $text =="اسرع"or $text =="سرعه"){
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$alis[$tttit],
'reply_to_message_id'=>$message->message_id
]);
}
if($text == '😈'or $text == '😜' or $text == '🐩' or $text == '🐱' or $text == '🐁' or $text == '🐀' or $text == '🐢' or $text == '🏥' or $text == '🏦'  or $text == '😨'  or $text == '😴'  or $text == '🔧'  or $text == '🏇' or  $text == '🗼' or $text == '🔨' or $text == '🎈' or $text == '🔛' or $text == '⏳' or $text == '🚰' or $text == '⛎' or $text == '💮' or $text == '➿' or $text == '🗿' or $text == '🍖' or $text == '💙' or $text == '🍕' or $text == '🍟' or $text == '🍄' or $text == '🌜' or $text == '🌛' or $text == '🌎' or $text == '💧' or $text == '⚡'){
$alawi = array('حسننا عزيزي انته الاسرع، ♥️
ارسل كلمه { الاسرع }',
'لقد فزت انت الاسرع  ، 💛
ارسل كلمه { الاسرع }',
' شهل سرعه لك ، 😍
ارسل كلمه { الاسرع }',
'جوابك صح صح صح ، ⭐️
اارسل كلمه { الاسرع }',);
$php = array_rand($alawi, true);
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$alawi[$php],
'reply_to_message_id'=>$message->message_id
]);
}
//معاني
$alit = array('اسرع واحد يدز { 😜 }'
,'ما اسم هاذ الشئ :- ~ 🚀 ~'
,'ما اسم هاذ الشئ :- ~ ⚽ ~'
,'ما اسم هاذ الشئ :- ~ ?? ~'
,'ما اسم هاذ الشئ :- ~ 📙 ~'
,'ما اسم هاذ الشئ :- ~ ⌚ ~'
,'ما اسم هاذ الشئ :- ~ 🗼 ~'
,'ما اسم هاذ الشئ :- ~ 🐍 ~'
,'ما اسم هاذ الشئ :- ~ 🐈 ~'
,'ما اسم هاذ الشئ :- ~ 🐒 ~'
,'ما اسم هاذ الشئ :- ~ 💜 ~'
,'ما اسم هاذ الشئ :- ~ 🐄 ~'
,'ما اسم هاذ الشئ :- ~ 💰 ~'
,'ما اسم هاذ الشئ :- ~ 🚇 ~'
,'ما اسم هاذ الشئ :- ~ 🐇 ~'
,'ما اسم هاذ الشئ :- ~ 🐟 ~'
,'كم يساوي : - 55 - 12 = ？'
,'كم يساوي : -  7 × 4 + 25 = ? '
,'كم يساوي : -  37 × 4 = ？'
,'كم يساوي : - 2 ÷ 40 = ? '
,'كم يساوي : - 32 + 90 = ? '
);
$ttti = array_rand($alit,true);
if($text =="معاني" or $text =="معانى"or $text =="معأني"or $text =="معنة"){
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$alit[$ttti],
'reply_to_message_id'=>$message->message_id
]);
}
if($text == 'قمر'or $text == 'حافله' or $text == 'قرد' or $text == 'قط' or $text == 'ثعبان' or $text == 'قطه' or $text == 'برج' or $text == '..' or $text == 'ساعه'  or $text == 'ساعة'  or $text == 'كتاب'  or $text == 'نمله'  or $text == 'نملة' or  $text == 'كره قدم' or $text == 'كرة قدم' or $text == 'صاروخ' or $text == '43' or $text == '122' or $text == '20' or $text == '148' or $text == '47' or $text == 'قلب' or $text == 'بقره' or $text == 'بقرة' or $text == 'مال' or $text == 'قطار' or $text == 'ارنب' or $text == 'سمكه' or $text == 'سمكة'){
$ala = array('حسننا عزيزي انته هاذ معنه صحيح، ♥️
ارسل كلمه { معاني }',
'لقد فزت هاذ معنه صحيح  ، 💛
ارسل كلمه { معاني }',
' شهل ذكاء هاذ معنه,صحيح   ، 😍
ارسل كلمه { معاني }',
'جوابك صح صح صح ، ⭐️
اارسل كلمه { معاني }',);
$php = array_rand($ala, true);
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ala[$php],
'reply_to_message_id'=>$message->message_id
]);
}
if($message){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
if($text == "msg" or $text == "رسائلي"){
 Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"* 💬¦ رسائلك • { ".$msgs['msgs'][$chat_id][$from_id]." } •*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
// status «» By @xr_3r 
if($text=="رتبتي" and $from_id == $owners){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » المنشىء 🏌🏻
🌿
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and in_array($from_id, $edary)){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » ادمن في البوت 🎖
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  in_array($from_id,$Dev)){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » مطور 🎖
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and  $from_id == "799273845"){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » حبيب قلبي 💙
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text== "رتبتي" and $from_id == $sudo){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » مطور اساسي 🎖
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and in_array($from_id, $mmyz)){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » عضو مميز  🙆
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="رتبتي" and $from_id != $owners  and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$mmyz) and !in_array($from_id,$getCCadmins)) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » فقط عضو 🙍🏼‍♂️
🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}

// command
if($text == "معلوماتي" or $text == "موقعي" and $from_id == $owners){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » المنشىء 🏌🏻

- اسمك » $first_name
- معرفك » $username
- ايدي » $from_id
- رسائلك » ".$msgs['msgs'][$chat_id][$from_id]." 
- صورك » $e

🌿
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "معلوماتي" or $text == "موقعي" and in_array($from_id,$edary)){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » ادمن في البوت 🎖

- اسمك » $first_name
- معرفك » $username
- ايدي » $from_id
- رسائلك » ".$msgs['msgs'][$chat_id][$from_id]." 
- صورك » $e

🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text  =="معلوماتي" and $from_id == $sudo and in_array($from_id, $Dev)){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » مطور اساسي 🎖
 
- اسمك » $first_name
- معرفك » $username
- ايدي » $from_id
- رسائلك » ".$msgs['msgs'][$chat_id][$from_id]." 
- صورك » $e

🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="معلوماتي" and in_array($from_id, $mmyz)){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » عضو مميز  🙆

- اسمك » $first_name
- معرفك » $username
- ايدي » $from_id
- رسائلك » ".$msgs['msgs'][$chat_id][$from_id]." 
- صورك » $e

🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="معلوماتي" and $from_id != $owners  and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$mmyz) and !in_array($from_id,$getCCadmins)) {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ رتبتك » فقط عضو ??🏼‍♂️

- اسمك » $first_name
- معرفك » $username
- ايدي » $from_id
- رسائلك » ".$msgs['msgs'][$chat_id][$from_id]." 
- صورك » $e

🌿",
'reply_to_message_id'=>$message->message_id, 
]);
}

// command «» By @xr_r3 
if($text=="ايديي" ){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
🧟‍♂¦ آضـغط على آلآيدي ليتم آلنسـخ

 @$username ~⪼ ( `$from_id` )
 ",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="اسمي" ){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ › اسمك ›› ❲ $first_name ❳

*For Create Bot* » @hmai5Bot",
 'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
$ap = array("متضحكش ياهبل 😐",'😐😑😒','😟 اووو على خطير','🙄 هههه زباج');
$ap1 = array_rand($ap,true);
if($text=="رجلي" or $text == "لقفي" or $text == "عيني"){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"$ap[$ap1]", 
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text=="معرفي" ){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ › معرفك ›› ❲ @$username ❳

*For Create Bot* » @GRT16BOT",
 'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('غير متفاعل ✘', 'ضعيف 🥀 ',);
$JJ119 = array_rand($active,1);
}
if($text=="تفاعلي" ){
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
",
 'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}
// Group info «» By @xr_3r 
if($text=="المجموعة" || $text == "المجموعه" || $text == "معلومات المجموعه"){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
Mostafa('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🎫¦ › ايدي » `$chat_id`

- اسم » $namegroup
- رابط » $getlinkde
- عدد الرسائل » $tedadmsg

*For Create Bot* » @hmai5Bot",
 'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}

// ID «» By @xr_3r 
if($text == "ايدي" and $status == "member"){
$lockiduser = $settings["lock"]["iduser"];
if ($lockiduser == "☑️ معطل ☑️") {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
	Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://tako-line.ru/upload/iblock/d57/d57f2c1b1a2fc0e47f3e6fd7b7015683.jpg",
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱ عضو 👷🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$msgs['msgs'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
else{
Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱ عضو 👷🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$msgs['msgs'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
}
}
if($text == "ايدي" || $text == "ايدي" and $from_id == $owners){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
	Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://tako-line.ru/upload/iblock/d57/d57f2c1b1a2fc0e47f3e6fd7b7015683.jpg",
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱مدير البوت 👷🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$msgs['msgs'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
else{
Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱ مدير البوت 🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$msgs['msgs'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
}
if($text == "ايدي" and $from_id == $sudo ){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
	Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://tako-line.ru/upload/iblock/d57/d57f2c1b1a2fc0e47f3e6fd7b7015683.jpg",
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱ مطور اساسي 🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$game['game'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
else{
Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱ مطور اساسي 🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$msgs['msgs'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
}
if($text == "ايدي" and in_array($from_id,$edary)){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
	Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://tako-line.ru/upload/iblock/d57/d57f2c1b1a2fc0e47f3e6fd7b7015683.jpg",
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱ ادمن 🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$msgs['msgs'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
else{
Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱ادمن 👷🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$msgs['msgs'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
}
if($text == "ايدي" and in_array($from_id, $mmyz)){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
	Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://tako-line.ru/upload/iblock/d57/d57f2c1b1a2fc0e47f3e6fd7b7015683.jpg",
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱ مميز 🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$msgs['msgs'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
else{
Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
'caption'=>"
👤¦ أســمـك •⊱ { $first_name } ⊰•
🎟¦ ايديــك •⊱ {$from_ud} ⊰•
🎫¦ مـعرفك •⊱ @$username ⊰•
📡¦ رتبتـــك •⊱ مميز 🏽 ⊰•
⭐️¦ رسائلك •⊱  ".$msgs['msgs'][$chat_id][$from_id]."⊰•
⭐️¦ تفاعـلك •⊱ $active[$JJ119] ⊰•
➖",
]);
}
}

// my pic «» By @xr_3r 
if(strpos($text, "صورتي") !== false){
$n = str_replace("صورتي ", "", $text);
$lockmypic = $settings["lock"]["mypic"];
if ($lockmypic == "☑️ معطل ☑️") {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][$n-1][0]["file_id"];
if($e == 0){
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛┇› لايوجد لديك اي صورة ✓",
]);
}
else{
if($n <= $e){
Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
]);
}
else{
		Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"You Don't Have $n Photos!"
]);
}
}
}
}
if(strpos($text, "جلب صوره") !== false){
$n = str_replace("جلب صوره ", "", $text);
$lockmypic = $settings["lock"]["mypic"];
if ($lockmypic == "☑️ معطل ☑️") {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][$n-1][0]["file_id"];
if($e == 0){
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛┇› لايوجد لديك اي صورة ✓",
]);
}
else{
if($n <= $e){
Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
]);
}
else{
		Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"You Don't Have $n Photos!"
]);
}
}
}
}
if(strpos($text, "جلب صورة") !== false){
$n = str_replace("جلب صورة ", "", $text);
$lockmypic = $settings["lock"]["mypic"];
if ($lockmypic == "☑️ معطل ☑️") {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][$n-1][0]["file_id"];
if($e == 0){
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛┇› لايوجد لديك اي صورة ✓",
]);
}
else{
if($n <= $e){
Mostafa('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
]);
}
else{
		Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"You Don't Have $n Photos!"
]);
}
}
}
}

// panel admin 2 «» By @xr_r3 
$Reply = $message->message_id;
$kdev = file_get_contents("kdev.txt");
$kd = file_get_contents("kd.txt");
if ($text == "كليشة مطور 👮" and $from_id == $sudo || in_array($from_id,$Dev)){
if($tc == "private"){
 file_put_contents("kdev.txt","kd");
 Mostafa("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
 *📭¦ حسننا عزيزي  المطور ارسل الكليشة ✅
 ",
 'parse_mode'=>"MARKDOWN",
 "reply_to_message_id"=>$Reply,
 ]);
 }
 }
 if($text && $kdev =="kd"){
  if($tc == "private"){
  file_put_contents("kd.txt",$text); file_put_contents("kdev.txt","");
  Mostafa("sendmessage",[
  "chat_id"=>$chat_id,
  "text" => "
  📭¦ تم تغير كليشة المطور. ✅
  ", 'parse_mode'=>"htmel",
  "reply_to_message_id"=>$Reply,
  ]);
  }
  }
if($text == "المطور" || $text == "مطور"){
Mostafa('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$kd",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, 
]);
}

// ban all { id } «» By @TTKTT 
if($text =="حظر عام ➕" && $tc == "private" ){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل حظر عام + الايدي
√
",
]);}
elseif( strpos($text , "حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$texxt = str_replace(['حظر عام'],'',$text);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$textt&user_id=".$texxt);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
if($text =="الغاء حظر عام ➖" && $tc == "private" ){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل الغاء حظر عام + الايدي
√
",
]);}
elseif ( strpos($text , "الغاء حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$texxt = str_replace(['الغاء حظر عام'],'',$text);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$textt&user_id=".$texxt);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
Mostafa('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
🙋🏼‍♂️¦ العضو @$username
📡¦ الايدي `$id`
💯¦ تم الغاء حظره عام
✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif( $text == "المحظورين عام 🗳" or $text == "المحظورين عام") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📛¦ قائمة المحظورين عام ➣

$result
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}

// ban group «» By @xr_r3 
elseif($text =="❗️حظر مجموعة❗️" ){
if ($tc == "private") {
if (in_array($from_id,$Dev)) {
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ الان ارسل غادر + ايدي مجموعة
√
",
'reply_to_message_id'=>$message_id,
 ]);
}
}
}
elseif(strpos($text , "غادر" ) !== false ) {
$textmassage = str_replace(['غادر'],'',$text);
if ($tc == "private") {
if ($from_id == $sudo){
Mostafa("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
📭¦ حسننا عزيزي المطور،
🗯¦ تم مغادرة المجموعة بنجاح
√
",
  ]);
Mostafa('LeaveChat',[
  'chat_id'=>$textmassage,
  ]);
unlink("data/$textmassage.json");
}
}
}

// add to group «» By @xr_r3 
if($textmassage == "تفعيل الاعضاء" or $textmassage == "تفعيل الاضافة" or $textmassage == "تفعيل الاضافه"){
if ($tc == 'group' | $tc == 'supergroup'){  
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"📌￤تم تفعيل الاضافة الاجبارية ، ✅ •

- سيتم الان حذف كل من لم يضف العدد $code من الاعضاء ، ✅ •

- تستطيع تغيير عدد الاعضاء من خلال ارسال { /setadd + العدد المطلوب } مثل :-
- /setadd 11

#ملاحظة :- تستطيع فرض الاضافة من 1 الى 20 عضو فقط ❌",
'parse_mode'=>"markdown"
	,	 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["add"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}   
}
	}
}

// Replys Order «» By @xr_3r 
if($textmassage == "اوامر الردود" or $textmassage == "اوامر الرد" or $textmassage == "gztjzgjlxdjkh"){
if ($tc == 'group' | $tc == 'supergroup'){  
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🗯¦ جميع اوامر الردود 
🔅¦ـ➖➖➖➖➖
🔅¦ الردود : لعرض الردود المثبته
🔅¦ اضف رد : لأضافه رد جديد
🔅¦ مسح رد  الرد المراد مسحه
🔅¦ مسح الردود : لمسح كل الردود
🔅¦ اضف رد عام : لاضافه رد لكل المجموعات
🔅¦ مسح رد عام : لمسح الرد العام 
🔅¦ مسح الردود العامه : لمسح كل ردود العامه
🔅¦ـ➖➖➖➖➖
??¦ راسلني للاستفسار 💡↭ @$tbbots",
'parse_mode'=>"markdown"
	,	 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}   
}
	}
}

//------------------------//
elseif($textmassage == "تعطيل الاعضاء" or $textmassage == "تعطيل الاضافة" or $textmassage == "تعطيل الاضافه"){
if ($tc == 'group' | $tc == 'supergroup'){  
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"☑️┇تم تعطيل الاضافة الاجبارية ، 📌 •

- يستطيع اي عضو الدردشة بدون اضافة اعضاء ، 📌 •
",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["add"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
	}
}

//--------------set add to group «» By @xr_r3----------//
elseif (strpos($textmassage , '/setadd ') !== false or strpos($textmassage , 'الاضافة الاجبارية') !== false ) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setadd ','الاضافة الاجبارية'],'',$textmassage);
if($code <= 20 && $code >= 1){
 Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم وضع العدد {$code} من الاعضاء ، 👏 •

- لن يستطيع احد الدردشة بدون اضافة $code من الاعضاء ، 👥 •

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇يجب ان يكون العدد بين 1 إلى 20",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);  
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
}
// get info «» By @xr_3r 
if($rt and $text == "كشف" || $text == "/كشف" and $re_id == $sudo){
Mostafa('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $namesaeedh }
🎫¦ الايدي » { $idsaeedh  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مطور اساسي 👨🏻‍⚕
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖
",'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text == "كشف" || $text == "/كشف" and $re_id == $owners){
Mostafa('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $re_name }
🎫¦ الايدي » { $re_id  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » منشئ مجموعه 🔱
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖
",'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text == "كشف" || $text == "/كشف" and in_array($re_id,$Dev)){
Mostafa('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $re_name }
🎫¦ الايدي » { $re_id  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مطور 👨🏻‍⚕
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖
",'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text == "كشف" || $text == "/كشف" and in_array($re_id,$edary)){
Mostafa('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $re_name }
🎫¦ الايدي » { $re_id  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » ادمن 💂
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖
",'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text == "كشف" || $text == "/كشف" and in_array($re_id,$getCCadmins)){
Mostafa('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $re_name }
🎫¦ الايدي » { $re_id  }
🎟¦ المعرف »{ @$usersaeedh }
📮¦ الرتبه » مدير 👮
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖
",'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text == "كشف" || $text == "/كشف" and in_array($re_id,$mmyz)){
Mostafa('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $re_name }
🎫¦ الايدي » { $re_id  }
🎟¦ المعرف »{ @$re_user }
📮¦ الرتبه » عضو مميز 👷
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖
",'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text == "كشف" || $text == "/كشف" and $re_id != $sudo and $re_id != $owners and !in_array($re_id,$Dev) and !in_array($re_id,$getCCadmins) and !in_array($re_id,$edary) and !in_array($re_id,$mmyz)){
Mostafa('sendmessage',['chat_id'=>$chat_id,'text'=>"🤵🏼¦ الاسم » { $re_name }
🎫¦ الايدي » { $re_id  }
🎟¦ المعرف »{ @$re_user }
📮¦ الرتبه » عضو فقط 👤
🕵🏻️‍♀️¦ نوع الكشف » بالرد
➖
",'reply_to_message_id'=>$message->message_id,
]);
}
// get status «» By @xr_3r 
if($rt and $text ==  "الرتبه" and $from_id == $sudo){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 👤¦ العضو » @$re_name
ـ⠀•⊱ { رتـبـه الشخص } ⊰•
 
💬¦ في المجموعة » مطور اساسي .
✓
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text ==  "الرتبه" and in_array($re_id,$Dev)){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 👤¦ العضو » @$re_name
ـ⠀•⊱ { رتـبـه الشخص } ⊰•
 
💬¦ في المجموعه » مطور عادي .
✓
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text ==  "الرتبه" and in_array($re_id,$edary)){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 👤¦ العضو » @$re_name
ـ⠀•⊱ { رتـبـه الشخص } ⊰•
 
💬¦ في المجموعه » ادمن .
✓
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text ==  "الرتبه" and in_array($re_id,$getCCadmins)){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 👤¦ العضو » @$re_name
ـ⠀•⊱ { رتـبـه الشخص } ⊰•
 
💬¦ في المجموعه » مدير .
✓
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text ==  "الرتبه" and in_array($re_id,$mmyz)){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 👤¦ العضو » @$re_name
ـ⠀•⊱ { رتـبـه الشخص } ⊰•
 
💬¦ في المجموعه » عضو مميز .
✓
",
'reply_to_message_id'=>$message->message_id,
]);
}
if($rt and $text ==  "الرتبه" and $re_id != $sudo and $re_id != $owners and !in_array($re_id,$Dev) and !in_array($re_id,$getCCadmins) and !in_array($re_id,$edary) and !in_array($re_id,$mmyz)){
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 👤¦ العضو » @$re_name
ـ⠀•⊱ { رتـبـه الشخص } ⊰•
 
💬¦ في المجموعه » عضو فقط .
✓
",
'reply_to_message_id'=>$message->message_id,
]);
}

if($text == "السورس" or $text == "سورس"){ Mostafa('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"
 📮┊اهلا بك في سورس روكي🎅 
 
💍┊هاذا السورس تم تصميمه مثل سورس الزعيم ولكن بلغة php
 📮┊تستطيع صنع بوت مثل هاذا من خلال صانع البوتات » @hmai5Bot
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــــ 
📡┊[قناة السورس](https://t.me/Allm_Telegram/)",
'reply_to_message_id'=>$message_id, 
'disable_web_page_preview'=>'true', 
'parse_mode'=>"markdown", 
]);}
// delall «» By @xr_3r 
elseif($textmassage == "مسح الدردشة" or $textmassage == "حذف الدردشة"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$time = $settings["information"]["timermsg"];
date_default_timezone_set('Asia/Damascus');
$date1 = date("H:i:s");
if($date1 > $time){
$msg_id = $settings["information"]["msg_id"];	
$manha = $message_id - $msg_id ;
if($manha < 1000){
for($i=$update->message->message_id; $i>= $msg_id; $i--){
Mostafa('deletemessage',[
 'chat_id' =>$update->message->chat->id,
 'message_id' =>$i,
              ]);
}
Mostafa('sendmessage',[
 'chat_id' =>$update->message->chat->id,
 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم مسح جميع الرسائل بنجاح ، ✅

- عدد الرسائل المحذوفة $manha ، 🗑 •
✓",
]);
date_default_timezone_set('Asia/baghdad');
$date1 = date("H:i:s");
$date2 = isset($_GET['date']) ? $_GET['date'] : date("H:i:s");;
$next_date = date('H:i:s', strtotime($date2 ."+120 Minutes"));
$settings["information"]["timermsg"]="$next_date";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
$plus = $message_id - 500 ;
for($i=$update->message->message_id; $i>= $plus; $i--){
Mostafa('deletemessage',[
 'chat_id' =>$update->message->chat->id,
 'message_id' =>$i,
              ]);
}
date_default_timezone_set('Asia/Damascus');
$date1 = date("H:i:s");
$date2 = isset($_GET['date']) ? $_GET['date'] : date("H:i:s");;
$next_date = date('H:i:s', strtotime($date2 ."+60 Minutes"));
$settings["information"]["timermsg"]="$next_date";
$settings["information"]["msg_id"]="$message_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
Mostafa('sendmessage',[
 'chat_id' =>$update->message->chat->id,
 'text' =>"☑️┇تم حذف جميع الرسائل بالفعل 

⏰┇اخر عملية حذف $time ",
   ]);
}
}	
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
$idBot = $bot_id;
$info = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $info['result']['status'];
if($text == "كشف البوت" && $tc != "private"){
if($bot == "administrator" ){ $r = "📡¦ جيد , الـبــوت ادمــن الان"; }
else{ $r = "📡¦ كلا البوت ليس ادمن في المجموعة 📛"; }
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>$r,
'parse_mode' => "markdown",
 ]);
}

// Update «» By @xr_3r 
$message_idd = $update->message->message_id;
if($text == "تحديث البوت"  || $text == "📎⎮تحديث السورس" || $text == "تحديث السورس" || $text == "تحديث" and $from_id == $sudo || in_array($from_id,$Dev)){
$boooot = file_get_contents("https://azadeen.cf/Ahmed/boooot.php");
file_put_contents("boooot.php",$boooot);
 Mostafa('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 Mostafa('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>"*🔘¦  تم تحديث البوت بنجاح
🗂¦ تم تحديث ملفات البوت
☑️¦ تم التسريع والتخلص من الشحطات*",
  'parse_mode'=>"MARKDOWN",
  'reply_to_message_id'=>$message->message_id, 

 ]);
 } 
// filters «» By @xr_r3 
if($text =="قائمة المنع" or $text=="الممنوعات" or $textmassage=="قائمة الممنوعات"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" - هذه قائمة الكلمات التي تم منعها من الارسال في المجموعة ، 📌 •

- $result",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($text , "/filter ") !== false or strpos($text , "منع") !== false) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = str_replace(['/filter ','منع'],'',$textmassage);
Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم اضافة {$text} الى قائمة المنع ، ✅ •",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔘┋لم يتم تفعيل البوت في مجموعتك⁉️┋ يرجى تفعيل البوت في المجموعة
☑️┋يمكنك تفعيل البوت مجانا م̷ـــِْن خلال ارسال كلمة { • تفعيل • }",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text , "/unfilter " ) !== false or strpos($text , "الغاء منع") !== false) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$text = str_replace(['/unfilter ','الغاء منع'],'',$textmassage);
Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"- تم ازالة {$text} من قائمة المنع ، ✅ •",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif($text =="/clean filterlist" or $text =="مسح الممنوعات" or $textmassage=="مسح قائمة المنع"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي  👷🏽   
🔖¦ تم مسح كلمات المنع ✓
",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

// lock and unlock
if($textmassage=="قفل الروابط" or $textmassage=="قفل روابط"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الروابط 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الروابط" or $textmassage=="فتح روابط"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الروابط 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["link"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($textmassage=="تعطيل اطردني" or $textmassage=="تعطيل المغادره"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم تعطيل اطردني 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["kickme"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="تفعيل اطردني" or $textmassage=="تفعيل المغادره"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم تفعيل المغادرة 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["kickme"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($textmassage=="تعطيل الايدي" or $textmassage=="تعطيل ايدي"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم تعطيل الايدي
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="تفعيل الايدي" or $textmassage=="تفعيل ايدي"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم تفعيل الايدي
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock photo
elseif($textmassage=="قفل الصور" or $textmassage=="قفل صور"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الصور 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الصور" or $textmassage=="فتح صور"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الصور 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// gif
elseif($textmassage=="قفل المتحركة" or $textmassage=="قفل المتحركه"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل المتحركة 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح المتحركة" or $textmassage=="فتح المتحركه"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح المتحركه 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// document
elseif($textmassage=="قفل الملفات" or $textmassage=="قفل ملفات،"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الملفات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الملفات" or $textmassage=="فتح ملفات"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الملفات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video
elseif($textmassage=="قفل الفيديو" or $textmassage=="قفل فيديو"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الفيديو 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الفيديو" or $textmassage=="فتح فيديو"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الفيديو 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// edit
elseif($textmassage=="قفل التعديل" or $textmassage=="قفل تعديل"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل التعديل 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح التعديل" or $textmassage=="فتح تعديل"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح التعديل 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// game
elseif($textmassage=="قفل الالعاب" or $textmassage=="قفل العاب"){
if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم قفل الالعاب بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الالعاب" or $textmassage=="فتح العاب"){
if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح الالعاب بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $settings["lock"]["game"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// location
elseif($textmassage=="قفل المواقع" or $textmassage=="قفل الموقع"){
if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم قفل الموقع بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح المواقع" or $textmassage=="فتح الموقع"){
if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح الموقع بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// contact
elseif($textmassage=="قفل الجهات" or $textmassage=="قفل جهات"){
if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم قفل الجهات بنجاح
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الجهات" or $textmassage=="فتح جهات"){
if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم فتح الجهات بنجاح
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tag
elseif($textmassage=="قفل التاك" or $textmassage=="قفل الهاشتاك"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل التاك 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح التاك" or $textmassage=="فتح الهاش تاك"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح التاك 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// username 
elseif($textmassage=="قفل المعرفات" or $textmassage=="قفل اليوزرات"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل المعرفات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح المعرفات" or $textmassage=="فتح المعرف"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح المعرفات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// audio
elseif($textmassage=="قفل الصوت" or $textmassage=="قفل البصمة"){
	if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الصوت 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الصوت" or $textmassage=="فتح صوت"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الصوت 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
  
  

if($textmassage == "تفعيل الاشتراك الاجباري" or $textmassage == "/addyes" or $textmassage == "تفعيل الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم تفعيل الاشتراك الاجباري
✓",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
elseif ( strpos($textmassage , 'وضع قناة ') !== false or strpos($textmassage , 'ضع القناة ') !== false) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['ضع القناة ','وضع قناة'],'',$textmassage);
 Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم وضع القناة { $code } في قائمة الاشتراك الاجباري بنجاح
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setchannel"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }  
 // m1 «» By @xr_r3 
if($text=="م1" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
⚡️ اوامر حماية المجموعه ⚡️
🗯¦ـ➖➖➖➖
🗯¦ قفل «» فتح •⊱ التعديل  ⊰•
🗯¦️ قفل «» فتح •⊱ البصمات ⊰•
🗯¦ قفل «» فتح •⊱ الفيديو ⊰•
🗯¦ قفل «» فتح •⊱ الـصــور ⊰•
🗯¦ قفل «» فتح •⊱ الملصقات ⊰•
🗯¦ قفل «» فتح •⊱ المتحركه ⊰•
🗯¦ قفل «» فتح •⊱ الدردشه ⊰•
🗯¦ قفل «» فتح •⊱ الروابط ⊰•
🗯¦ قفل «» فتح •⊱ التاك ⊰•
🗯¦ قفل «» فتح •⊱ السيئات ⊰•
??¦ ️قفل «» فتح •⊱ المعرفات ⊰•
🗯¦ قفل «» فتح •⊱ البوتات ⊰•
🗯¦ قفل «» فتح •⊱ الكلايش ⊰•
🗯¦️ قفل «» فتح •⊱ التكرار ⊰•
🗯¦ قفل «» فتح •⊱ التوجيه ⊰•
🗯¦ قفل «» فتح •⊱ الجهات ⊰•
🗯¦ قفل «» فتح •⊱ الــكـــل ⊰•
🔅¦ـ➖➖➖➖➖
📛¦ تفعيل «» تعطيل •⊱ الاضافه الاجباريه ⊰•
📛¦ تفعيل «» تعطيل •⊱ الايدي ⊰•
📛¦ تفعيل «» تعطيل •⊱ الردود ⊰•
📛¦ تفعيل «» تعطيل •⊱ الزخرفه ⊰•
📛¦ تفعيل «» تعطيل •⊱ اطردني ⊰•
📛¦ تفعيل «» تعطيل •⊱ جلب الصوره ⊰•
📛¦ تفعيل «» تعطيل •⊱ الاشتراك الاجباري ⊰•
📛¦ تفعيل «» تعطيل •⊱ الترحيب ⊰•
🔅¦ـ➖➖➖➖➖

👨🏻‍💻¦ للاستفسار 💡↭ @$tbbots
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}
// m2 «» By @xr_r3 
if($text=="م2" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or !in_array($from_id,$Dev) or in_array($from_id,$getCCadmins)) {
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
👨🏽‍✈️¦  اوامر الوضع للمجموعه ::

📮¦ـ➖➖➖➖➖
💭¦ ضع الترحيب + نص الترحيب
💭¦ ضع القوانين + نص القوانين 
💭¦ ضع وصف + نص الوصف  
💭¦ ضـع رابط » لوضع رابط  
💭¦ الـرابـط :↜  لعرض الرابط 
 💭¦ ضع التوديع + نص التوديع
📮¦ـ➖➖➖➖➖

👨🏽‍💻¦  اوامر رؤية الاعدادات ::

🗯¦ القوانين : لعرض  القوانين 
🗯¦ الادمنيه : لعرض  الادمنيه
🗯¦ المطورين : لعرض المطورين
🗯¦ المدراء : لعرض المدراء
🗯¦ المميزين : لعرض المميزين
🗯¦ المقيدين : لعرض  المقيدين
🗯¦ المكتومين :↜لعرض  المكتومين 
🗯¦ المطور : لعرض معلومات المطور 
🗯¦ معلوماتي :↜لعرض معلوماتك
🗯¦ رتبتي :↜لعرض موقعك
🗯¦ جلب صورة + عدد :↜ لجلب صورة من بروفايلك
🗯¦ زخرفه :↜لزخرفة اسمك
🗯¦ الوسائط : لعرض اعدادات الميديا 
🗯¦ الاعدادات : لعرض اعدادات المجموعه 
🗯¦ المجموعه : لعرض معلومات المجموعه

➖➖➖➖➖➖➖
🗯¦ راسلني للاستفسار 💡↭ @$tbbots
",
'reply_to_message_id'=>$message_id,
  	]);
  	}

  }
}
}
// m3 «» By @xr_3r 
if($text=="م3" or $textmassage=="panررel" or $textmassage=="/admin@$usernamebot"){
	if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
•⊱ {  آوآمر الرفع والتنزيل  } ⊰•


🔮¦ رفع مدير ‿ تنزيل مدير 
⚗¦ رفع مطور ‿  تنزيل مطور
📿¦ رفع ادمن ‿ تنزيل ادمن 
💈¦ رفع مميز ‿ تنزيل مميز 

⦅  ꯭آو꯭آم꯭ـر آ꯭لم꯭ـس꯭ـح꯭ للم꯭ـنش꯭ـى꯭ ⦆

🗑¦ مسح الادمنيه •⊱ لمسح الادمنيه
🗑¦ مسح المدراء •⊱ لمسح المدراء
🗑¦ مسح المميزين •⊱ لمسح المميزين 
🗑¦ مسح المطورين •⊱ لمسح المطورين 
🗑¦ مسح المكتومين •⊱ لمسح المكتومين 
🗑¦ مسح الممنوعات •⊱ لمسح الممنوعات 
🗑¦ مسح المقيدين •⊱ لمسح المقيدين  

⦅آوآمـر آلحظـر وآلطــرد وآلتقييـد⦆
      
🔱¦ حظر (بالرد) •⊱ لحظر العضو
⚜¦ طرد ( بالرد) •⊱ لطرد العضو 
🔅¦ كتم (بالرد) •⊱ لكتم العضو
🔅¦ كتم لمدة + عدد الدقائق (بالرد) •⊱ لكتم العضو بالوقت 
🌀¦ تقييد (بالرد) •⊱ لتقييد العضو
🌀¦ تقييد لمدة + عدد الدقائق (بالرد) •⊱ لتقييد العضو بالوقت
🚫¦ منع + الكلمه •⊱ لمنع كلمه داخل المجموعه
🚸¦ الغاء حظر (بالرد) •⊱ لالغاء الحظر 
🔆¦ الغاء كتم (بالرد) •⊱ لالغاء الكتم 
〰¦ الغاء تقييد (بالرد) •⊱ لالغاء تقييد العضو 
⭕️¦ الغاء منع •⊱ لالغاء منع الكلمه بالمجموعه

🗯┇ راسلني للاستفسار 💡↭ @$tbbots",
]);
}
}
}}
      if($textmassage=="الوسائط" or $textmassage=="الحمايه" or $textmassage=="الاعدادات"){
	if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
	$locklink = $settings["lock"]["link"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$bye = $settings["information"]["bye"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
if ($add == true) {
  	Mostafa('sendmessage',[
  	'chat_id'=>$chat_id,
  'text'=>"
  - هذه حالة الحماية في الجروب ، 👇
  
🎗》🔒الروابط

 : $locklink
 
🎗》🔒التاك

 : $locktag
 
🎗》🔒المعرفات

 : $lockusername
 
🎗》🔒التعديل

 : $lockedit
 
🎗》🔒السيئات

 : $lockfosh
 
🎗》🔒البوتات

 : $lockbots
 
🎗》🔒التوجيه 

: $lockforward

🎗》🔒خدمات التلجرام

  $locktg
  
🎗》🔒الرد : 

$lockreply

🎗》🔒الاوامر االعامة :

 $lockcmd
➖➖➖➖
📂قفل الاوامر :

??》🔒الملفات : 
$lockdocument
🎗》🔒المتحركة 
: $lockgif
🎗》🔒تسجيل الفيديو 
: $lockvideo_note
🎗》🔒الموقع
 : $locklocation
🎗》🔒الصور : 
$lockphoto
🎗》🔒ارسال الارقام 
: $lockcontact
🎗》🔒الموسيقى / الصوت :
 $lockaudio
🎗》🔒البصمة : 
$lockvoice
🎗》🔒الملصقات 
: $locksticker
🎗》🔒الالعاب 
: $lockgame
🎗》🔒الفيديو :
 $lockvideo
🎗》🔒الدردشة 
: $locktext
➖➖➖
- لـ الاستفسار راسلنا » @$tbbots
",
]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }  
elseif($textmassage == "/addno" or $textmassage == "تعطيل اشتراك اجباري" or $textmassage == "تعطيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم تفعيل الاشتراك الاجباري
✓",
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
// lock auto cmd 
if($textmassage=="قفل الي" or $textmassage=="تفعيل القفل الالي"){
if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┇تم تفعيل القفل الالي",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockauto"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الي" or $textmassage=="تعطيل القفل الالي"){
if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┇تم تعطيل القفل الالي",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockauto"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif (strpos($textmassage , "قفل الي") !== false or strpos($textmassage , "قفل الالي") !== false) {
if($status == 'creator' or $status == 'administrator' or $from_id == $sudo or in_array($from_id,$Dev) || in_array($from_id,$getCCadmins)) {
$num = str_replace(['قفل الي','قفل الالي'],'',$textmassage);
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
date_default_timezone_set('Asia/baghdad');
$date1 = date("H:i:s");
$startlock = date("H:i:s");
$endlock = $te[1];
			  Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم قفل الكل ، ✅

- الوقت الان ، 02:25:23 🕑 •
- وقت فتح الكل ، $endlock 🕒 •
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["timelock"]="$startlock";
$settings["information"]["timeunlock"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}


if($textmassage=="قفل الصوت" or $textmassage=="قفل البصمة"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الصوت 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الصوت" or $textmassage=="فتح البصمة"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الصوت 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// sticker
elseif($textmassage=="قفل الملصقات" or $textmassage=="قفل ملصقات"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الملصقات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الملصقات" or $textmassage=="فتح ملصقات"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الملصقات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// forward
elseif($textmassage=="قفل التوجيه" or $textmassage=="قفل التوجية"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل التوجيه 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح التوجيه" or $text =="فتح التوجية"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح التوجيه 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// fosh
elseif($textmassage=="قفل السيئات" or $textmassage=="قفل الممنوعات"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الممنوعات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح السيئات" or $textmassage=="فتح الممنوعات"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الممنوعات 
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// muteall
elseif($textmassage=="قفل كل"  or $textmassage=="mute all" or $textmassage=="قفل الكل"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الكل 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح كل"  or $textmassage=="unmute all" or $textmassage=="فتح الكل"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الكل 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="☑️ معطل ☑️";
$settings["lock"]["mute_all_time"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// muteall time
elseif (strpos($textmassage , "قفل الدردشه لمدة ") !== false or strpos($textmassage , "قفل الدردشة لمدة ") !== false) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
	$num = str_replace(['قفل الدردشه لمدة ','قفل الدردشة لمدة'],'',$textmassage);
	$add = $settings["information"]["added"];
if ($add == true) {
	if ($num <= 100000 && $num >= 1){
		date_default_timezone_set('Asia/Baghdad');
        $date1 = date("h:i:s");
        $date2 = isset($_GET['date']) ? $_GET['date'] : date("h:i:s");
        $next_date = date('h:i:s', strtotime($date2 ."+$num Minutes"));
			  Mostafa('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم قفل الدردشة لمدة $num دقيقة ، ✅ •

- الوقت الان ، $date1 🕑 •
- وقت فتح الدردشة ، $next_date 🕒 •

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["mute_all_time"]="$next_date";
$settings["lock"]["mute_all_time"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
   }else{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا ⚠️
➖➖➖➖➖➖
- تستطيع فقط الاختيار من دقيقة الى 1000 دقيقة ، ❌ •
$date1
$nextdata",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// farsi
if($textmassage=="قفل الدردشة" or $textmassage=="قفل الدردشه"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الدردشة 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الدردشة" or $textmassage=="فتح الدردشه"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الدردشة 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// cmd
elseif($textmassage=="تعطيل اوامر الاعضاء" or $textmassage=="قفل الاوامر العامة"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم قفل اوامر الاعضاء بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["cmd"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="تفعيل اوامر الاعضاء" or $textmassage=="فتح الاوامر العامة"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح الاوامر العامة بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["cmd"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// replay
elseif($textmassage=="قفل الرد" or $textmassage=="قفل رد"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الرد 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الرد" or $textmassage=="فتح رد"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الرد 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tgservic
elseif($textmassage=="قفل الخدمات" or $textmassage=="قفل الاشعارات"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل الاشعارات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الخدمات" or $textmassage=="فتح الاشعارات"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷??
📡¦ تم فتح الاشعارات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video note
elseif($textmassage=="قفل الفيديو نوت" or $textmassage=="قفل تسجيل فيديو"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم ققل تسجيل الفيديو بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($textmassage=="فتح الفيديو نوت" or $textmassage=="فتح تسجيل فيديو"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"☑️┋تم فتح تسجيل الفيديو بنجاح",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock bots
elseif ($textmassage == "قفل البوتات" or $textmassage == "قفل بوتات" or $textmassage == "قفل البوت") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم قفل البوتات  
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($textmassage == "فتح البوتات" or $textmassage == "فتح بوتات"  or $textmassage == "فتح البوت") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح البوتات 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($textmassage == "تعطيل جلب الصورة" or $textmassage == "تعطيل جلب الصوره" or $textmassage == "تعطيل جلب الصور") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم تعطيل جلب الصور 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mypic"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($textmassage == "تفعيل جلب الصورة" or $textmassage == "تفعيل جلب الصوره" or $textmassage == "تفعيل جلب الصور") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم تفعيل جلب الصور 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mypic"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

elseif ($textmassage == "تعطيل الزخرفه" or $textmassage == "تعطيل الزخرفة" or $textmassage == "قفل الزخرفه") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم تعطيل الزخرفه 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zhr"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($textmassage == "تفعيل الزخرفه" or $textmassage == "تفعيل الزخرفة"  or $textmassage == "فتح الزخرفه") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم تفعيل الزخرفه 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zhr"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}


elseif ($textmassage == "تعطيل الردود" or $textmassage == "قفل الردود" or $textmassage == "تعطيل ردود") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم تعطيل الردود 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdod"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($textmassage == "فتح الردود" or $textmassage == "تفعيل الردود"  or $textmassage == "تفعيل ردود") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂️¦ أهلا عزيزي  👷🏽
📡¦ تم فتح الردود 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdod"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}


// lock and unlock «» By @xr_3r 
if($settings["lock"]["link"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if (strstr($textmassage,"t.me") == true or strstr($textmassage,"telegram.me") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// lock photo
if($settings["lock"]["photo"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->photo){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// gif
if($settings["lock"]["gif"] == "✅ مقفول ✅"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if ($update->message->document){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
if($settings["lock"]["twasl"] == "✅ مقفول ✅"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if($tc == 'private'){
if ($update->message->text){  
Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
   'text'=>"❌┋تم تعطيل التواصل للاسف",
    ]);
  }
}
}
}
if($settings["lock"]["rdod"] == "✅ مقفول ✅"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if ($textt == "هلا" or $textt == "كيفك" or $textt == "هلو" or $textt == "هلاو" or $textt == "هيلاو"){  
Mostafa('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"😣┋تم تعطيل الردود للاسف ❌",
    ]);
  }
}
}
$arr = array("يآإهلآإ بيڪ ححبيب قلبي 😍","هلآإ نورت يآإححلو $first_namr","يآإهلآإ مرححب 😘");
$arr1 = array_rand($arr,true);
$lockrdod = $settings["lock"]["rdod"];
if ($lockrdod== "☑️ معطل ☑️") {
if($text == "هلا"){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>$arr[$arr1],
]);
}
}
$arr = array("يآإهلآإ بيڪ ححبيب قلبي 😍","هلآإ نورت يآإححلو $first_namr","يآإهلآإ مرححب 😘","هههلوااااااات حبي 😎");
$arr1 = array_rand($arr,true);
$lockrdod = $settings["lock"]["rdod"];
if ($lockrdod== "☑️ معطل ☑️") {
if($text == "هلا" or $text == "هلاو" or $text == "هيلاو" or $text == "هلو"){
bot("SendMessage",[
"chat_id"=>$chat_id,
 "text" =>$arr[$arr1],
]);
}
}
$arr2 = array("تمآإم آإلححمد لله وآإنت 😁","مدخخلڪ 😒");
$arr3 = array_rand($arr2,true);
$lockrdod = $settings["lock"]["rdod"];
if ($lockrdod== "☑️ معطل ☑️") {
if($text == "كيفك" or $text == "كيفكم" or $text == "كيف الحال"){
bot("SendMessage",[
"chat_id"=>$chat_id,
 "text" =>$arr[$arr1],
]);
}
}
// document
if($settings["lock"]["document"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->document){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
if(preg_match('/^(زخرف) (.*)/s', $text, $mtch)){
$mh = file_get_contents('https://rueslinks.000webhostapp.com/font.php?text=' . $mtch[2]);
$lockzhr = $settings["lock"]["zhr"];
if ($lockzhr == "☑️ معطل ☑️") {
file_put_contents("zhrr.txt","zhrf");
Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$mh",
]);
}
}
// video
if($settings["lock"]["video"] == "✅ مقفول ✅"){
if ($status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev)){
if ($update->message->video){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// edit 
if($editgetsettings["lock"]["edit"] == "✅ مقفول ✅"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev){
if ($update->edited_message->text){  
Mostafa('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
  }
}
}
// contact
if ($settings["lock"]["contact"] == "✅ مقفول ✅"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

if ($settings["lock"]["zhr"] == "✅ مقفول ✅"){
if(preg_match('/^(زخرف) (.*)/s', $text)){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
'text'=>"📛┋تم تعطيل الزخرفه",
    ]);
	}
}
}
}
// tag
if ($settings["lock"]["tag"] == "✅ مقفول ✅"){
if (strstr($textmassage,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}// username 
if ($settings["lock"]["username"] == "✅ مقفول ✅"){
if (strstr($textmassage,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// audio
if ($settings["lock"]["audio"] == "✅ مقفول ✅"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// voice 
if ($settings["lock"]["voice"] == "✅ مقفول ✅"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

//iduser
if ($settings["lock"]["iduser"] == "✅ مقفول ✅"){
if($textt == "ايدي"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status == "member"){
	Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
👤¦ تم تعطيل الايدي 📛",
    ]);
	}
}
}
}
//kickme
if ($settings["lock"]["kickme"] == "✅ مقفول ✅"){
if($textt == "اطردني"){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
👤¦ تم تعطيل اطردني 📛",
    ]);
	}
}
}
}

//kickme
if ($settings["lock"]["mypic"] == "✅ مقفول ✅"){
if(strpos($textt, "جلب صوره") !== false){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
👤¦ تم تعطيل جلب الصور 📛",
    ]);
	}
}
}
}

if($settings["lock"]["bot"] == "✅ مقفول ✅"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "☑️ معطل ☑️"){
 Mostafa('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
  }
else
{
 Mostafa('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   Mostafa('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
}
// sticker
if ($settings["lock"]["sticker"] == "✅ مقفول ✅"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// forward
if ($settings["lock"]["forward"] == "✅ مقفول ✅"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// fosh 
if ($settings["lock"]["fosh"] == "✅ مقفول ✅"){
if (strstr($textmassage,"كس") == true  or strstr($textmassage,"امك") == true or strstr($textmassage,"اختك") == true  or  strstr($textmassage,"قحبه") == true   or strstr($textmassage,"انيك") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// muteall
if ($settings["lock"]["mute_all"] == "✅ مقفول ✅"){
if($update->message){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
// muteall time
if ($settings["lock"]["mute_all_time"] == "✅ مقفول ✅"){
$locktime = $settings["information"]["mute_all_time"];
date_default_timezone_set('Asia/Damascus');
$date1 = date("h:i:s");
if($date1 < $locktime){
if($update->message){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
else
{
$settings["lock"]["mute_all_time"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
}
// replay
if ($settings["lock"]["reply"] == "✅ مقفول ✅"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "✅ مقفول ✅"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "✅ مقفول ✅"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "✅ مقفول ✅"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ) {
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}



if($settings["information"]["add"] == "✅ مقفول ✅") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($settings["information"]["add"] == "✅ مقفول ✅"){
if ($status != "creator" && $status != "administrator" && !in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
            if($youadding < $setadd){
			if($addtext == false){
            Mostafa('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"⚠️￤المعذرة ، يا @$username •
🗣￤عليك اولا باضافة {$setadd} عضو
💬￤لكي تتمكن من الدردشة ، ✅ •
✓",
            ]);
            Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
//  game
if($settings["lock"]["game"] == "✅ مقفول ✅"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// location
if ($settings["lock"]["location"] == "✅ مقفول ✅"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
	Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// filter
if($settings["filterlist"] != false){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
$check = check_filter("$textmassage");
if ($check == true) {
Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
}
}
}
// setrules
if($settings["information"]["step"] == "setrules"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$textmassage");
if($plus < 600) {
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم بنجاح وضع قوانين للجروب
✓",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["rules"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
// lock channel 
if($settings["information"]["lockchannel"] == "✅ مقفول ✅"){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
			if($channeltext == false){
            Mostafa('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"⚠️￤المعذرة ، يا @$username •
🗣￤عليك اولا الاشتراك بـ { $usernamechannel } 
💬￤لكي تتمكن من الدردشة ، ✅ •
✓",
            ]);
            Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              Mostafa('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
if($settings["information"]["step"] == "setchannel"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($textmassage , '@') !== false) {
$plus = mb_strlen("$textmassage");
if($plus < 25) {
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم وضع القناة { $textmassage } في قائمة الاشتراك الاجباري بنجاح
✓",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["setchannel"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍خطا المعرف غير مَسمَـَّوُوُح به",
  'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"",'callback_data'=>'lockchannel']
					 ],
                     ]
               ])
 ]);
}
}
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 📍 خطأ يجب ان تضع @ للمعرف  
	 مثال • @$channel •√",
  'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"",'callback_data'=>'lockchannel']
					 ],
                     ]
               ])
 ]);
}
}
}
}
// setwelcome
if($settings["information"]["step"] == "setwelcome"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$textmassage");
if($plus < 200) {
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"📌￤اهلا عزيزي ،  👨‍✈️•
📌￤تم وضع الترحيب بنجاح
✓",
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$textmassage";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 خطا ! النص كبير جدا يرجى تقليل م̷ـــِْن الكلمات",
  'reply_to_message_id'=>$message_id,
            'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
					 [
					 ['text'=>"",'callback_data'=>'welcome']
					 ],
                     ]
               ])
 ]);
}
}
}
}
// banall
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🛑 لقد تم حظرك م̷ـــِْن البوت

❇️ ارجو ان لٱ تقوم بارسال رسالة اخرى",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
		Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
      ]);
}
}
// sup
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($textmassage != "🔙 رجوع") {	
Mostafa('ForwardMessage',[
'chat_id'=>$Dev[0],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
			Mostafa('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"✔️ تم ارسال اقتراحك شكرا لك",
	]);	
	}
	}

// Kickme «» By @xr_3r 
elseif($textmassage=="اطردني" or $textmassage=="kickme" or $textmassage=="اخراج من"){
$lockkickme = $settings["lock"]["kickme"];
if ($lockkickme == "☑️ معطل ☑️") {
	$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
if($from_id != $owners && $from_id != $sudo && !in_array($from_id,$Dev) && !in_array($from_id,$edary) && !in_array($from_id,$getCCadmins)) {
Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
	]);
	Mostafa('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
	]);
              Mostafa('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"
🚸| لقد تم طردك بنجاح , ارسلت لك رابط المجموعه في الخاص اذا وصلت لك تستطيع الرجوع متى شئت",
'reply_markup'=>$inlinebutton,
 ]);
 bot('sendmessage',[
    'chat_id'=>$from_id,
    'text'=>"
👨🏼‍⚕️| اهلا عزيزي , لقد تم طردك من المجموعه بامر منك 
🔖| اذا كان هذا بالخطأ او اردت الرجوع للمجموعه 

🔖¦فهذا رابط المجموعه 💯
🌿¦$namegroup :

$getlinkde",
'parse_mode'=>"html",
]);
 }
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لايمكنني طرد الادمنية او المدراء او المطورين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// silent «» By @xr_3r 
elseif($textmassage == "كتم"&& $rt or $textmassage == "siرlent" && $rt or $textmassage == "تقيرريد" && $rt){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if($re_id != $owners and $re_id != $sudo and !in_array($re_id,$Dev) and !in_array($re_id,$edary) and !in_array($re_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true){
   Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم كتمه للابد
✓",
'reply_to_message_id'=>$re_msgid,
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"",'url'=>"https://t.me/tbbots"]
	]
    ]
    ])
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($textmassage , "/silوورent ") !== false && $rt or strpos($textmassage , "كتم لمدة") !== false && $rt) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if($re_id != $owners and $re_id != $sudo and !in_array($re_id,$Dev) and !in_array($re_id,$edary) and !in_array($re_id,$getCCadmins)) {
$add = $settings["information"]["added"];
$we = str_replace(['/silent ','كتم لمدة'],'',$textmassage);
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم كتم العضو لمدة {$we} دقيقة 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
elseif($textmassage == "/unsiرlent" && $rt or $textmassage == "unرsilent" && $rt or $textmassage == "الغاء الكتم" && $rt){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم الغاء كتمه بنجاح
✓",
'reply_to_message_id'=>$re_msgid,
 
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"",'url'=>"https://t.me/Allm_Telegram"]
	]
    ]
    ])
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($textmassage == "تقييد"&& $rt or $textmassage == "siرlent" && $rt or $textmassage == "تقيرريد" && $rt){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if($re_id != $owners and $re_id != $sudo and !in_array($re_id,$Dev) and !in_array($re_id,$edary) and !in_array($re_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true){
   Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم تقييدة للابد
✓",
'reply_to_message_id'=>$re_msgid,
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"",'url'=>"https://t.me/hmai5Bot"]
	]
    ]
    ])
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($textmassage , "/silوورent ") !== false && $rt or strpos($textmassage , "تقييد لمدة ") !== false && $rt) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if($re_id != $owners and $re_id != $sudo and !in_array($re_id,$Dev) and !in_array($re_id,$edary) and !in_array($re_id,$getCCadmins)) {
$add = $settings["information"]["added"];
$we = str_replace(['/silent ','تقييد لمدة'],'',$textmassage);
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم تقييد العضو لمدة {$we} دقيقة 
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"📍 لايمكنني تقييد الادمنية او المدراء او المطورين",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
elseif($textmassage == "/unsiرlent" && $rt or $textmassage == "unرsilent" && $rt or $textmassage == "الغاء التقييد" && $rt){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
 Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم الغاء تقييدة بنجاح
✓",
'reply_to_message_id'=>$re_msgid,
 
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"تابعنا ، ✅",'url'=>"https://t.me/Allm_Telegram"]
	]
    ]
    ])
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($textmassage == "/list silent"  or $textmassage == "المكتومين" or $textmassage == "قائمة المكتومين") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📮¦ قائمه المكتومين
ٴ━━━━━━━━━

$result",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif($textmassage == "المقيدين"  or $textmassage == "قائمة المقيدين" or $textmassage == "المقيديين") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📮¦ قائمه المقيدين
ٴ━━━━━━━━━

$result",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif($textmassage == "مسح المكتوميين"  or $textmassage == "حذف المكتومين" or $textmassage == "مسح المكتومين") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 Mostafa('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
         }
	  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🚸¦ تـم مسح المكتومين بنجاح
 
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($textmassage == "/clean silentlist"  or $textmassage == "cleaرn silentlist" or $textmassage == "مسح المقيدين") {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 Mostafa('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
         }
	  Mostafa('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🚸¦ تـم مسح المقيدين بنجاح
 
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// start «» By @xr_r3 
if($textmassage=="/start" && $tc == "private" or $textmassage=="/panel" && $tc == "private"){
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"💯¦ مـرحبآ آنآ بوت آسـمـي $nbot 🎖
💰¦ آختصـآصـي حمـآيهہ‌‏ آلمـجمـوعآت
📛¦ مـن آلسـبآم وآلتوجيهہ‌‏ وآلتگرآر وآلخ...
🚸¦ البوت خدمي ومتاح للكل 
👷🏽¦ فقط اضف البوت لمجموعتك وارفعه مشرف  
  ثم ارسل تفعيل

[⚖️¦ مـعرف آلمـطـور  :](t.me/$tbbots)
👨🏽‍🔧",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$helo,
    		]);
Mostafa('sendmessage',[
	'chat_id'=>$sudo,
	'text'=>"",
]);
}
// Rules «» By @xr_r3 
elseif($textmassage=="القوانين" or $textmassage=="ruرles" or $textmassage=="قورانین"){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
$text",
		 
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }   
}
}
else
{
date_default_timezone_set('Asia/baghdad');
$date = date('Y-m-d');
$date2 = date("H:i");
$text1 = $settings["information"]["rules"];
$text = str_replace(["gpname","username","time"],["$namegroup","@$username","$date | $date2"],"$text1");
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🔖 قوانين الجروب الحالية :
➖➖➖➖➖➖➖➖
$text",
		 
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
elseif (strpos($textmassage , '/setrules ') !== false or strpos($textmassage , 'ضع القوانين ') !== false) {
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setrules ','ضع القوانين '],'',$textmassage);
$plus = mb_strlen("$code");
if($plus < 600) {
 Mostafa('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم وضع قوانين جديدة بنجاح
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["rules"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يمكنك ارسال قوانين تتكون من 600 حرف فقط ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 قم بتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
// Pin «» By @xr_3r 
elseif($rt && $textmassage=="تثبيت"  or $rt && $textmassage=="piزززn" or $rt && $textmassage=="سنجاق"){
if($from_id != $owners and $from_id != $sudo and !in_array($from_id,$Dev) and !in_array($from_id,$edary) and !in_array($from_id,$getCCadmins)) {
 Mostafa('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم تثبيت الرسالة بنجاح
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif($textmassage=="الغاء تثبيت"  or  $textmassage=="unوpin"  or  $textmassage=="حذف سنجاق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
 Mostafa('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم الغاء تثبيت الرسالة بنجاح
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
// kick
elseif(strpos($textmassage ,"/kick ") !== false or strpos($textmassage ,"طرد ") !== false) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$text = str_replace(['/kick ',' طرد '],'',$textmassage);
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
	Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text
      ]);
              Mostafa('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم طردة من الجروب ،  ✅ •

✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);

   }
}
 elseif($rt && $textmassage=="حظر"  or $rt && $textmassage=="طرد" or $rt && $textmassage== "تت"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if($re_id != $owners and $re_id != $sudo and !in_array($re_id,$Dev) and !in_array($re_id,$edary) and !in_array($re_id,$getCCadmins)) {
	Mostafa('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👨‍✈️¦ العضو ↫ @$re_user
🐾¦ تم طردة من الجروب ،  ✅ •

✓",
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"❌¦ لايمكن طرد الادمنية والمدراء ، 🚫",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
   //del
elseif($rt && $textmassage == "حذف" or $rt && $textmassage == "dرel" or $rt && $textmassage == "حذررف"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$re_msgid
    ]);
	 Mostafa('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
 }
}
// rmsg
elseif ( strpos($textmassage , 'تنظيف ') !== false or strpos($textmassage , 'پاک کردن ') !== false  ) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$num = str_replace(['تنظيف ','پاک ت '],'',$textmassage);
if ($num <= 300 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
Mostafa('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"🚸¦ تم حذف $num من الرسائل بنجاح ، ✅",
'reply_markup'=>$inlinebutton,
   ]);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"- لم يتم تفعيل البوت بعد ، ارسل تفعيل لتفعيل البوت ، ✅",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"خطا⚠️
➖➖➖➖➖➖
تستطيع حذف من 1 الى 300 رسالة ⛔",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
//  setname
elseif ( strpos($textmassage , '/setname ') !== false or strpos($textmassage , 'ضع الاسم ') !== false  ) {
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
$newname= str_replace(['/setname ','ضع الاسم '],'',$textmassage);
 Mostafa('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم وضع الاسم {$newname} بنجاح
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}
// description
elseif ( strpos($textmassage , '/setdescription ') !== false or strpos($textmassage , 'ضع الوصف ') !== false  ) {
$newdec= str_replace(['/setdescription ','ضع الوصف '],'',$textmassage);
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
 Mostafa('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$newdec
      ]);
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم وضع الوصف {$newdec} بنجاح
✓",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}
// set link
 elseif($textmassage=="وضع رابط" or $textmassage=="انشاء رابط" or $textmassage=="وضع الرابط"){
if($from_id == $owners or $from_id == $sudo or in_array($from_id,$Dev) or in_array($from_id,$edary) or in_array($from_id,$getCCadmins)) {
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
Mostafa('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"🌿 تم انشاء رابط

🌿┇$getlinkde",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
 }
else
{
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
Mostafa('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"🌿┇رابط المجموعة 👮‍♀
   
🌿┇`$namegroup`
🌿┇$getlinkde",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
  elseif($textmassage=="الرابط" ){
if ($tc == 'group' | $tc == 'supergroup'){  
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "☑️ معطل ☑️") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
Mostafa('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
🔖¦رابـط الـمـجـمـوعه 💯
🌿¦ $namegroup :

$getlinkde",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
else
{
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
Mostafa('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"🔖¦رابـط الـمـجـمـوعه 💯
🌿¦ $namegroup :

$getlinkde",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
 }
// warn
 if( $text=="تحذير" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$useradmin) && !in_array($re_id,$getCCmember)) {
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn + 1;	
if ($warnplus >= $setwarn) {
$hardmodewarn = $settings["information"]["hardmodewarn"];
if($hardmodewarn == "بالتقييد"){
Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
]);
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
 }
else
{
   Mostafa('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+3600,
     ]);
	 	Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
   ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
else
{
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
 'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
 }
else
{
	Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚠️┇خطأ لا يمكن تحذير الادمن  , المدير  , المطور ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
if($text=="مسح التحذير" && $rt ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
$warnplus = $warn - 1;	
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙎‍♂┇العضو ~⪼ [$re_name](t.me/$re_user)
🚸┇تم مسح تحذيرك تحذيراتك *$warnplus* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["warnlist"]["{$re_id}"]=$warnplus;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
 }
 }
}
}
if ( strpos($text , 'وضع تحذير') !== false  ) {
$newdec = str_replace(['وضع تحذير'],'',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)){
$add = $settings["information"]["added"];
if ($add == true) {
if ($newdec <= 20 && $newdec >= 1){
Mostafa('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 👤┇تم تعيين عدد التحذيرات {*$newdec*}
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setwarn"]="$newdec";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }else{
Mostafa('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
❕┇لا تستطيع وضع اكثر من 20 تحذير  
",
'reply_markup'=>$inlinebutton,
   ]);
 }
}
}
}
elseif( $text=="تحذيراتي"){
if ($tc == 'group' | $tc == 'supergroup'){  
$warn = $settings["warnlist"]["$re_id"];
$setwarn = $settings["information"]["setwarn"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🚸┇تحذيراتك *$warn* من اصل *$setwarn*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
   ]);
 }
 }

elseif ($text == "الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$getCCmember) or in_array($from_id,$useradmin)) {
$add = $settings["information"]["added"];
if ($add == true) {
	$text = $settings["information"]["textwelcome"];
Mostafa('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text

",  'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
// add «» By @xr_3r 
elseif ($textmassage == "/add"  or $textmassage == "add" or $textmassage == "تفعيل") {
if ($status == 'creator' or $from_id == $sudo or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/owner.txt","$from_id");
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("groupslink.txt","➺ " . $namegroup . " » " . $getlinkde . "«" . "\n" , FILE_APPEND);
$add = $settings["information"]["added"];
if ($add != true) {
Mostafa('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
 ✓",
'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	  	  	 [
				 ['text'=>"",'callback_data'=>"back"],['text'=>"",'callback_data'=>"help"]
		 ],
		            [
         ['text'=>"",'url'=>"https://t.me/Allm_Telegram"]
     ],
	 ],
	   ])
 ]);
 
 		        Mostafa('sendmessage',[
            'chat_id'=>$sudo,
            'text'=>"تم اضافة مجموعة جديدة بواسطة المشرف ✅
➖➖➖➖➖
🚩معلومات المجموعة  :

🔅ايدي المجموعة : [$chat_id]

💭اسم المجموعة : [$namegroup]

🔖بواسطة : [ @$username ] 

$getlinkde
", 
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "☑️ معطل ☑️",
                "photo": "☑️ معطل ☑️",
                "link": "☑️ معطل ☑️",
                "tag": "☑️ معطل ☑️",
				"username": "☑️ معطل ☑️",
                "sticker": "☑️ معطل ☑️",
                "video": "☑️ معطل ☑️",
                "voice": "☑️ معطل ☑️",
                "audio": "☑️ معطل ☑️",
                "gif": "☑️ معطل ☑️",
                "bot": "☑️ معطل ☑️",
                "forward": "☑️ معطل ☑️",
                "document": "☑️ معطل ☑️",
                "tgservic": "☑️ معطل ☑️",
				"edit": "☑️ معطل ☑️",
				"kickme": "☑️ معطل ☑️",
				"rdod": "☑️ معطل ☑️",
				"iduser": "☑️ معطل ☑️",
				"zhr": "☑️ معطل ☑️",
				"mypic": "☑️ معطل ☑️",
				"reply": "☑️ معطل ☑️",
				"contact": "☑️ معطل ☑️",
				"location": "☑️ معطل ☑️",
				"game": "☑️ معطل ☑️",
				"cmd": "☑️ معطل ☑️",
				"mute_all": "☑️ معطل ☑️",
				"mute_all_time": "☑️ معطل ☑️",
				"fosh": "☑️ معطل ☑️",
				"lockauto": "☑️ معطل ☑️",
				"lockcharacter": "☑️ معطل ☑️",
				"video_msg": "☑️ معطل ☑️"
			},
			"information": {
            "added": "true",
			"welcome": "☑️ معطل ☑️",
			"add": "☑️ معطل ☑️",
			"lockchannel": "☑️ معطل ☑️",
			"hardmodebot": "☑️ معطل ☑️",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 روز",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "مرحبا بك عزيزي",
			"rules": "لايوجد",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
Mostafa('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"🎟¦ المجموعه بالتأكيد ✓️ تم تفعيلها
",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
['text'=>"",'url'=>"https://t.me/tbbots"],['text'=>"",'callback_data'=>"text"]
	  ],
   ]
   ])
     ]); 
}
}
}
}
//automatic
elseif ($textmassage == "قفل الكل"  or $textmassage == "automatic" or $textmassage == "قفل كل") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم قفل الكل اليا ✅
			
 ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
		$settings["lock"]["link"]="✅ مقفول ✅";
		$settings["lock"]["username"]="✅ مقفول ✅";
		$settings["lock"]["bot"]="✅ مقفول ✅";
		$settings["lock"]["forward"]="✅ مقفول ✅";
		$settings["lock"]["tgservices"]="✅ مقفول ✅";
		$settings["lock"]["contact"]="✅ مقفول ✅";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
// setwelcome
if (strpos($textmassage , "وضع ترحيب ") !== false or strpos($textmassage , "ضع الترحيب") !== false ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['ضع الترحيب ','وضع ترحيب '],'',$textmassage);
$plus = mb_strlen("$we");
if($plus < 600) {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم وضع الترحيب { $we } بنجاح ✅
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
// welcome enbale and disable
elseif ($textmassage == "تفعيل الترحيبب"  or $textmassage == "تفعيل ترحيب" or $textmassage == "تفعيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	 'text'=>"🍃￤مرحبا عزيزي ، 👨‍✈️ •
🍃￤تم تفعيل الترحيب بنجاح
✓",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="✅ مقفول ✅";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ($textmassage == "تعطيل الترحيبب"  or $textmassage == "تعطيل ترحيب" or $textmassage == "تعطيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"- تم تعطيل الترحيب ، ✅ •",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="☑️ معطل ☑️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
Mostafa('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

// تم كتابة هاذا الملف بواسطة فارس التميمي //
// يرجى نشر الملف مع الحقوق قدرو تعبي //
// قناتي » @Allm_Telegram //
// معرفي » @xr_3r //

