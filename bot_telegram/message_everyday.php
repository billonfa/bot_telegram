<?php
    $token = "6166646447:AAHMRkPTOLPPu6iL0SJTLtV6-C7WhCOnsAw";
    $chat_id = [
        -1001945253159,
        -1001821183568,
        -1001503048031
    ]; 
    // Nội dung tin nhắn
    $messageText = '> Anh em nào thấy Telegram đang sử dụng tiếng Anh thì bấm "CÀI TIẾNG VIỆT" bên dưới để chuyển sang tiếng Việt cho dễ sử dung nhé.
> Kèm theo là bảo mật Telegram như hình hướng dẫn bên trên để tránh bị thêm vào những Nhóm lừa đảo nhé!
> Nếu có bất kỳ thắc mắc gì Anh em có thể click vào "LIÊN HỆ THỦY TIÊN" để được hỗ trợ các vấn đề nhé!';
    // Đường dẫn tới file hình ảnh
    $photoPath = 'photo/Bao-mat-telegram.jpg';
    // Text của nút bấm
    $buttonText = 'CÀI TIẾNG VIỆT';
    $buttonText2 = 'LIÊN HỆ THỦY TIÊN';
    // URL API của Telegram
    $apiUrl = "https://api.telegram.org/bot$token/";
    // Tạo mảng inline keyboard
    $inlineKeyboard = array(
        array(
            array(
                'text' => $buttonText,
                'url' => 'https://t.me/setlanguage/abcxyz'
            ),
            array(
                'text' => $buttonText2,
                'url' => 'https://t.me/thuytien06'
            )
        )
    );
    // Chuyển đổi mảng inline keyboard thành chuỗi JSON
    $inlineKeyboardEncoded = json_encode(array('inline_keyboard' => $inlineKeyboard));
    
    foreach($chat_id as $key_chatid => $value_chatid) {
        // Gửi tin nhắn và hình ảnh
        $url = $apiUrl . 'sendPhoto';
        $postFields = array('chat_id' => $value_chatid, 'photo' => new CURLFile(realpath($photoPath)), 'caption' => $messageText, 'reply_markup' => $inlineKeyboardEncoded);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
    }
?>