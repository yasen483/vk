<?php
// الملف قدييم معرف لمنو
// بي كم خطأ اذا لك خبره تكدر تسويهن
// تكدر تحط بيه اكوادي وتطوره وتنشره
// @FFFFy .
ob_start();
$API_KEY = '1748807735:AAHRBbz1tBTfnMgg8GLbuakemRLQwlCC0Zk';
define('API_KEY',$API_KEY);
echo "https://api.telegram.org/bot".API_KEY."/setwebhook?url=https://".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
function bot($method,$datas=[]){
  $url = "https://api.telegram.org/bot".API_KEY."/".$method;
  $datas = http_build_query($datas);
  $res = file_get_contents($url.'?'.$datas);
  return json_decode($res);

}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$admin = 1189284654;
$sso = "SARMAD";

$files = json_decode(file_get_contents('files.json'),1);
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
}
function save($array){
    file_put_contents('files.json', json_encode($array));
}
function clear($array){
	foreach($array as $key => $val){
		$array[$key] = null;
	}
	return $array;
}
if($chat_id == $admin){
	if($text == '/start'){
		save(clear($files));
		bot('sendMessage',[
			'chat_id'	=> $chat_id,
			'text'=>"اهلا بك تم تفعيل الاستضافه 
			بكود (SARMAD) باشتراك شهري
			'parse_mode'=>'MarkDown',
			'reply_markup'=>json_encode([
					'inline_keyboard'=>[
							[['text'=>'حذف ملف','callback_data'=>'delete'],['text'=>'رفع ملف','callback_data'=>'upload']],
							[['text'=>'تعديل أسم ملف','callback_data'=>'eFile']],
							[['text'=>'تعديل أسم مجلد','callback_data'=>'eDir']],
							[['text'=>'حذف جلد','callback_data'=>'deleteD'],['text'=>'انشاء مجلد','callback_data'=>'uploadD']],
							[['text'=>'عرض الملفات','callback_data'=>'show']],
							[['text'=>'عرض المجلدات','callback_data'=>'showDir']],
						]
				])
		]);
	}
		
	
	if($data == 'upload'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'- قم بأرسال الملف كـ (ملف ، رساله ) ، '
		]);
		$files['mode'] = 'upload';
		save($files);
		exit;
	}
	if($data == 'show'){
		$d = 1;
		$f = 1;
		$dirs = "- المجلدات 📂؛\n";
		$all = count(scandir(__DIR__) );
		$files = "- الملفات 📃'\n ";
		foreach(scandir(__DIR__) as $file){
			if($file == '.' || $file == '..'){ continue;}
			if(is_dir($file)){
				$dirs .= "*$d-* `$file`\n";
				$d+=1;
			}
			if(is_file($file)){
				$files .= "*$f-* `$file`\n";
				$f+=1;
			}
		}
		
		bot('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>"• العدد الكلي ، $all\n\n$dirs\n-----------\n$files",
			'parse_mode'=>'markdown'
		]);
	}
	if($data == 'showDir'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'- قم بأرسال اسم المجلد، '
		]);
		$files['mode'] = 'showDir';
		save($files);
		exit;
	}
	if($files['mode'] == 'showDir'){
		save(clear($files));
		if(is_dir($text)){
			$d = 1;
		$f = 1;
		$dirs = "- المجلدات 📂؛\n";
		$all = count((scandir($text))) - 2;
		$files = "- الملفات 📃'\n ";
		foreach(scandir(__DIR__.'/'.$text) as $file){
			if($file == '.' || $file == '..'){ continue;}
			if(is_dir($file)){
				$dirs .= "*$d-* `$file`\n";
				$d+=1;
			}
			if(is_file($file)){
				$files .= "*$f-* `$file`\n";
				$f+=1;
			}
		}
		
		bot('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>"• العدد الكلي ، $all\n\n$dirs\n-----------\n$files",
			'parse_mode'=>'markdown'
		]);
		} else {
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- لا يوجد ملف او مجلد بهذا الاسم ، حدث خطأ 🚫؛ *$text*",
				'parse_mode'=>'MarkDown',
			]);
		}
	}
	if($data == 'delete'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'- قم بأرسال اسم الملف ،'
		]);
		$files['mode'] = 'delete';
		save($files);
		exit;
	}
	if($data == 'eDir' or $data == 'eFile'){
		if($data == 'eDir'){
			$d = 'المجلد';
		} else {
			$d = 'الملف';
		}
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>"- قم بأرسال اسم $d القديم"
			
		]);
		$files['mode'] = 'old';
		save($files);
		exit;
	}
	if($files['mode'] == 'old'){
		if(is_file($text) or is_dir($text)){
				bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>'✅┇ تم الحفظ الان ارسل ( اسم الملف الجديد ) ',
				'parse_mode'=>'MarkDown',
			]);
			$files['mode'] = 'rename';
			$files['old'] = $text;
			save($files);
			exit;
		} else {
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- لا يوجد ملف او مجلد بهذا الاسم ، حدث خطأ 🚫؛ *$text*",
				'parse_mode'=>'MarkDown',
			]);
		}
	}
	if($files['mode'] == 'rename'){
		if(rename($files['old'], $text)){
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- تم التغيير بنجاح بنجاح ✅؛ من *$text* الى  *".$files['old']."*",
				'parse_mode'=>'MarkDown',
			]);
		} else {
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- لم يتم تغيير الاسم، حدث خطأ 🚫؛ *$text*",
				'parse_mode'=>'MarkDown',
			]);
		}
		save(clear($files));
	}
	if($data == 'uploadD'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'- قم بأرسال اسم المجلد ، '
		]);
		$files['mode'] = 'uploadD';
		save($files);
		exit;
	}
	if($data == 'deleteD'){
		bot('editMessageText',[
			'chat_id'=>$chat_id,
			'message_id'=>$message_id,
			'text'=>'- قم بأرسال اسم المجلد ، '
		]);
		$files['mode'] = 'deleteD';
		save($files);
		exit;
	}
	if($files['mode'] == 'deleteD'){
		if(is_dir($text)){
			$sc = scandir($text);
			foreach($sc as $file){
				if($file == '.' or $file == '..'){
					continue;
				}
				if(is_file($text.'/'.$file)){
					unlink($text.'/'.$file);
				} elseif(is_dir($text.'/'.$file)){
					foreach(scandir($text.'/'.$file) as $f1){
						if($f1 == '.' or $f1 == '..'){
							continue;
						}
						if(is_file($text.'/'.$file.'/'.$f1)){
							unlink($text.'/'.$file.'/'.$f1);
						} elseif(is_dir($text.'/'.$file.'/'.$f1)){
							foreach(scandir($text.'/'.$file.'/'.$f1) as $f2){
								if($f2 == '.' or $f2 == '..'){
									continue;
								}
								if(is_file($text.'/'.$file.'/'.$f1.'/'.$f2)){
									unlink($text.'/'.$file.'/'.$f1.'/'.$f2);
								}
							}
						}
					}
				}
			}
			rmdir($text);
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- تم الحذف بنجاح ✅؛ *$text* ",
				'parse_mode'=>'MarkDown',
			]);
		} else {
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"-المجلد غير موجود ، حدث خطأ 🚫؛ *$text*",
				'parse_mode'=>'MarkDown',
			]);
		}
		save(clear($files));
	}
	if($files['mode'] == 'uploadD'){
		if(mkdir($text)){
		bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- تم الانشاء بنجاح ✅؛ *$text* ",
				'parse_mode'=>'MarkDown',
			]);
		} else {
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- لم يتم انشاء المجلد ، حدث خطأ 🚫؛ *$text*",
				'parse_mode'=>'MarkDown',
			]);
		}
		save(clear($files));
	}
	if($files['mode'] == 'delete'){
		if(unlink($text)){
		bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- تم الحذف بنجاح ✅؛ *$text* ",
				'parse_mode'=>'MarkDown',
			]);
		} else {
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- لم يتم حذف الملف ، حدث خطأ 🚫؛ *$text*",
				'parse_mode'=>'MarkDown',
			]);
		}
		save(clear($files));
	}
	if($files['mode'] == 'upload'){
		if($message->document){
			$url = 'https://api.telegram.org/file/bot'.$API_KEY.'/'.bot('getFile',['file_id'=>$message->document->file_id])->result->file_path;
			$files['url'] = $url;
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>'✅┇ تم الحفظ الان ارسل ( اسم الملف مسار الملف ) ، مثل *bots/bot.php*',
				'parse_mode'=>'MarkDown',
			]);
			$files['mode'] = 'path';
			save($files);
			exit;
		} elseif(isset($message->text)) {
			$files['file'] = $text;
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>'✅┇ تم الحفظ الان ارسل ( اسم الملف مسار الملف ) ، مثل *bots/bot.php*',
				'parse_mode'=>'MarkDown',
			]);
			$files['mode'] = 'path';
			save($files);
			exit;
		}
	}
	if($files['mode'] == 'path'){
		if(isset($files['url'])){
			$data = file_get_contents($files['url']);
		} else {
			$data = $files['file'];
		}
		if(file_put_contents($text, $data)){
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- تم الرفع بنجاح ✅؛ *$text* ",
				'parse_mode'=>'MarkDown',
			]);
		} else {
			bot('sendMessage',[
				'chat_id'=>$chat_id,
				'text'=>"- لم يتم رفع الملف ، حدث خطأ 🚫؛ *$text*",
				'parse_mode'=>'MarkDown',
			]);
		}
		save(clear($files));
	}
}