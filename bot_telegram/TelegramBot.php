<?php
class Bot {
	private $bot=NULL;
	function __construct($token){
		$this->bot = $token;
	}
	public function sendMessage($id,$text,$reply="",$mode="", $reply_markup=""){
		return $this->GET('sendMessage?chat_id='.$id.'&text='.urlencode($text
			).'&reply_to_message_id='.$reply.'&allow_sending_without_reply=true&parse_mode='.$mode.'&reply_markup='.urlencode($reply_markup)
			)["ok"];
	}
	public function deleteMessage($id,$msg_id){
		return $this->GET('deleteMessage?chat_id='.$id.'&message_id='.$msg_id)["ok"];
	}
	private function GET($param){
		$url = "https://api.telegram.org/bot" .$this->bot."/".$param;
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		//for debug only!
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$resp = curl_exec($curl);
		curl_close($curl);
		return json_decode($resp,1);
	}
	
}