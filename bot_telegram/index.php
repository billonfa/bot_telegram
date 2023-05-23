<?php
    //Connect Bot Telegram
    $token = "5943908412:AAEXWBDlASNqVZq9WJuYMy3DvaBy2HHbzLM";
    $api_url = "https://api.telegram.org/bot" . $token;
    $update = json_decode(file_get_contents("php://input"), TRUE);
    $message = $update["message"];
    $text = $message["text"];
    $chat_id = $message["chat"]["id"];
    $firstName = $update['message']['chat']['first_name'];
    $lastName = $update['message']['chat']['last_name'];
    $name = $firstName . " " . $lastName;
    $data = file_get_contents('php://input');
    require_once "TelegramBot.php";
    //Connect Database
    $servername = gethostname();
    $username = "pulltest_bill_onfa";
    $password = "Hatemoneys1";
    $dbname = "pulltest_bill-show-kqxs";
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    
    $callback_query = $update["callback_query"];
    $data = $callback_query["data"];
    $callback_id = $callback_query["id"];
    
    // Xử lý tin nhắn của người dùng
    if ($text == "/xemkqxs") {
      $keyboard = [
        'inline_keyboard' => [
          [
            ['text' => 'Miền Bắc', 'callback_data' => 'kqmb'],
            ['text' => 'Miền Trung', 'callback_data' => 'kqmt'],
            ['text' => 'Miền Nam', 'callback_data' => 'kqmn']
          ]
        ]
      ];

      $reply_markup = json_encode($keyboard);
    
      $response = [
        'method' => 'sendMessage',
        'chat_id' => $chat_id,
        'text' => 'Xin chào! Hãy chọn miền muốn xem:',
        'reply_markup' => $reply_markup
      ];
    
      // Gửi câu trả lời đến người dùng
      file_get_contents($api_url . "/sendMessage?" . http_build_query($response));
    }
    
    if ($text == "/wm") {
         $keyboard = [
        'inline_keyboard' => [
          [
            ['text' => 'Thuật ngữ hô casino', 'callback_data' => 'tnhcsn'],
          ],
          [
            ['text' => 'Tài xỉu WM', 'callback_data' => 'txwm'],
            ['text' => 'Xóc dĩa WM', 'callback_data' => 'xdwm'],
          ],
          [
            ['text' => 'Baccarat WM', 'callback_data' => 'bcrwm'],
            ['text' => 'Rồng hổ WM', 'callback_data' => 'rhwm'],
          ]
        ]
      ];

      $reply_markup = json_encode($keyboard);
    
      $response = [
        'method' => 'sendMessage',
        'chat_id' => $chat_id,
        'text' => "OK ! $name đang muốn em hướng dẫn chơi ở sàn WM . $name vui lòng chọn tiếp các mục bên dưới để em hướng dẫn chi tiết hơn nhé! 😍",
        'reply_markup' => $reply_markup
      ];
    
      // Gửi câu trả lời đến người dùng
      file_get_contents($api_url . "/sendMessage?" . http_build_query($response));
    }
    
    if ($text == "/dg") {
        $keyboard = [
            'inline_keyboard' => [
              [
                ['text' => 'Thuật ngữ hô casino', 'callback_data' => 'tnhcsn'],
                ['text' => 'Baccarat DG', 'callback_data' => 'bcrdg'],
              ],
              [
                ['text' => 'Chẵn lẻ DG', 'callback_data' => 'cldg'],
                ['text' => 'Sicbo DG', 'callback_data' => 'sbdg'],
              ]
            ]
          ];
        $reply_markup = json_encode($keyboard);
    
        $response = [
            'method' => 'sendMessage',
            'chat_id' => $chat_id,
            'text' => "OK ! $name đang muốn em hướng dẫn chơi ở sàn DG . $name vui lòng chọn tiếp các mục bên dưới để em hướng dẫn chi tiết hơn nhé 😍",
            'reply_markup' => $reply_markup
          ];
    
      // Gửi câu trả lời đến người dùng
      file_get_contents($api_url . "/sendMessage?" . http_build_query($response));
    
    }
    
    if ($text == "/naprut") {
        $keyboard = [
        'inline_keyboard' => [
          [
            ['text' => 'Hướng dẫn nạp tiền', 'callback_data' => 'hdnt'],
            ['text' => 'Hướng dẫn rút tiền', 'callback_data' => 'hdrt'],
          ]
        ]
      ];
      $reply_markup = json_encode($keyboard);
    
      $response = [
        'method' => 'sendMessage',
        'chat_id' => $chat_id,
        'text' => "$name đang cần em hỗ trợ về vấn đề nạp rút đúng không ạ ? Hãy chọn các mục phù hợp bên dưới để em tiện hỗ trợ nhé 🤗",
        'reply_markup' => $reply_markup
      ];
    
      // Gửi câu trả lời đến người dùng
      file_get_contents($api_url . "/sendMessage?" . http_build_query($response));
    }
    
    if ($text == "/mg") {
        $keyboard = [
            'inline_keyboard' => [
                [
                    ['text' => 'Thuật ngữ bóng đá', 'callback_data' => 'mgtnbd']
                ],
                [
                    ['text' => 'HD vào sàn MG', 'callback_data' => 'mghdvs'],
                    ['text' => 'HD chơi Kèo chấp', 'callback_data' => 'mghddkc'],
                ],
                [
                    ['text' => 'HD chơi Tài xỉu', 'callback_data' => 'mghddktx'],
                    ['text' => 'HD chơi kèo Phụ', 'callback_data' => 'mghddkp'],
                ]
            ]
        ];
        $reply_markup = json_encode($keyboard);
    
        $response = [
            'method' => 'sendMessage',
            'chat_id' => $chat_id,
            'text' => "$name vui lòng chọn giúp em các hướng dẫn phù hợp bên dưới để em hướng dẫn chi tiết hơn cho $name nhé.",
            'reply_markup' => $reply_markup
          ];
    
      // Gửi câu trả lời đến người dùng
      file_get_contents($api_url . "/sendMessage?" . http_build_query($response));
    
    }
    
    if ($text == "/bov") {
        $keyboard = [
            'inline_keyboard' => [
                [
                    ['text' => 'Thuật ngữ bóng đá', 'callback_data' => 'mgtnbd'], 
                    ['text' => 'HD vào sàn BOV', 'callback_data' => 'bovhdvs'],
                  
                ],
                [
                    ['text' => 'HD chơi Tài xỉu', 'callback_data' => 'bovhddktx'],
                    ['text' => 'HD chơi Kèo chấp', 'callback_data' => 'bovhddkc']
                ],
                [
                    ['text' => 'HD kèo Đặc Biệt', 'callback_data' => 'bovhddkdb'],
                    ['text' => 'HD chơi Xiên/Xâu', 'callback_data' => 'bovhdcxx'],
                ]
            ]
        ];
        $reply_markup = json_encode($keyboard);
    
        $response = [
            'method' => 'sendMessage',
            'chat_id' => $chat_id,
            'text' => "$name vui lòng chọn giúp em các hướng dẫn phù hợp bên dưới để em hướng dẫn chi tiết hơn cho $name nhé.",
            'reply_markup' => $reply_markup
          ];
    
      // Gửi câu trả lời đến người dùng
      file_get_contents($api_url . "/sendMessage?" . http_build_query($response));
    
    }
    
    if ($text == "/testkqxs") {
        $keyboard = [
            'inline_keyboard' => [
              [
                ['text' => 'Thuật ngữ hô casino', 'callback_data' => 'tnhcsn'],
              ],
              [
                ['text' => 'Tài xỉu WM', 'callback_data' => 'txwm'],
                ['text' => 'Xóc dĩa WM', 'callback_data' => 'xdwm'],
              ],
              [
                ['text' => 'Baccarat WM', 'callback_data' => 'bcrwm'],
                ['text' => 'Rồng hổ WM', 'callback_data' => 'rhwm'],
              ]
            ]
        ];

        $reply_markup = json_encode($keyboard);
    
        $response = [
            'method' => 'sendMessage',
            'chat_id' => $chat_id,
            'text' => "OK ! $name đang muốn em hướng dẫn chơi ở sàn WM . $name vui lòng chọn tiếp các mục bên dưới để em hướng dẫn chi tiết hơn nhé 😍",
            'reply_markup' => $reply_markup
        ];
    
      // Gửi câu trả lời đến người dùng
        file_get_contents($api_url . "/sendMessage?" . http_build_query($response));
    }
    
    
    $callback_query_data = $update['callback_query']['data'];
    
    if (isset($update['callback_query'])) {
         // Tạo kết nối đến cơ sở dữ liệu
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Kiểm tra kết nối
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        switch($callback_query_data) {
            // Xem kết quả xổ số
            case 'kqmb': {
              
                $date = getdate();
                if($date['hours'] < 18 && $date['minutes'] < 46) $date['mday'] -= 1;
                if($date['mon'] < 10) $date['mon'] = "0".$date['mon'];
                $date = $date['year'] . "-" . $date['mon'] . "-" .$date['mday'];
                // Lấy dữ liệu từ database
                
                $sql = "SELECT * FROM data_xskt_mb WHERE created_at = '$date'";
                $result = $conn->query($sql);
                $text_show = "KQ xổ số miền bắc ngày ";
                
                $data = array();
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    array_push($data, $row);
                  }
                }
                foreach($data as $key_data => $value) {
                  $chuoi_thoi_gian = $value['created_at'];
                  $ngay_thang_nam = date("Y-m-d", strtotime($chuoi_thoi_gian));
                  $text_show = $text_show . $ngay_thang_nam . "\n";
                  $value['g7'] = json_decode($value['g7']);
                  $value['g6'] = json_decode($value['g6']);
                  $value['g5'] = json_decode($value['g5']);
                  $value['g4'] = json_decode($value['g4']);
                  $value['g3'] = json_decode($value['g3']);
                  $value['g2'] = json_decode($value['g2']);
                  
                  $new_i7 = 'G7: ';
                  $new_i6 = 'G6: ';
                  $new_i5 = 'G5: ';
                  $new_i4 = 'G4: ';
                  $new_i3 = 'G3: ';
                  $new_i2 = 'G2: ';
                
                  foreach($value['g7'] as $key_g7 => $item_g7) {
                    $new_i7 = $new_i7 . $item_g7 . " ";
                  }
                  foreach($value['g6'] as $key_g6 => $item_g6) {
                    $new_i6 = $new_i6 . $item_g6 . " ";
                  }
                  foreach($value['g5'] as $key_g5 => $item_g5) {
                    $new_i5 = $new_i5 . $item_g5 . " ";
                  }
                  foreach($value['g4'] as $key_g4 => $item_g4) {
                    $new_i4 = $new_i4 . $item_g4 . " ";
                  }
                  foreach($value['g3'] as $key_g3 => $item_g3) {
                    $new_i3 = $new_i3 . $item_g3 . " ";
                  }
                  foreach($value['g2'] as $key_g2 => $item_g2) {
                    $new_i2 = $new_i2 . $item_g2 . " ";
                  }
                  $value['g1'] = "G1: " . $value['g1'];
                  $value['gdb'] = "GDB: " .$value['gdb'];
                  $text_show = $text_show . $new_i7. "\n" . $new_i6. "\n" . $new_i5. "\n" . $new_i4. "\n" . $new_i3. "\n" . $new_i2. "\n" .$value['g1']. "\n" . $value['gdb']  ;
                }
                break;
            }
            
            case 'kqmt':{
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $date = getdate();
                if($date['hours'] < 17 && $date['minutes'] < 41) $date['mday'] -= 1;
                if($date['mon'] < 10) $date['mon'] = "0".$date['mon'];
                $date = $date['year'] . "-" . $date['mon'] . "-" .$date['mday'];
                // Lấy dữ liệu từ database
                $sql = "SELECT * FROM data_xskt_mt WHERE created_at = '$date'";
                $result = $conn->query($sql);
                
                // Tạo mảng chứa dữ liệu
                $data = array();
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    array_push($data, $row);
                  }
                }
                $text_show = "KQ xổ số miền Trung ngày ";
                $chuoi_thoi_gian = $data[0]['created_at'];
                $ngay_thang_nam = date("Y-m-d", strtotime($chuoi_thoi_gian));
                $text_show = $text_show . $ngay_thang_nam . "\n";
                foreach($data as $key_data => $value) {
                  $value['g6'] = json_decode($value['g6']);
                  $value['g4'] = json_decode($value['g4']);
                  $value['g3'] = json_decode($value['g3']);
                  
                  $new_i6 = 'G6: ';
                  $new_i4 = 'G4: ';
                  $new_i3 = 'G3: ';
                
                  foreach($value['g6'] as $key_g6 => $item_g6) {
                    $new_i6 = $new_i6 . $item_g6 . " ";
                  }
                
                  foreach($value['g4'] as $key_g4 => $item_g4) {
                    $new_i4 = $new_i4 . $item_g4 . " ";
                  }
                
                  foreach($value['g3'] as $key_g3 => $item_g3) {
                    $new_i3 = $new_i3 . $item_g3 . " ";
                  }
                
                  $value['g8'] = "G8: " . $value['g8'];
                  $value['g7'] = "G7: " . $value['g7'];
                  $value['g5'] = "G5: " . $value['g5'];
                  $value['g2'] = "G2: " . $value['g2'];
                  $value['g1'] = "G1: " . $value['g1'];
                  $value['gdb'] = "GDB: " .$value['gdb'];
                 
                  $text_show = $text_show . $value['name_dai'] . "\n" .$value['g8'] . "\n" . $value['g7'] . "\n" . $new_i6. "\n" . $value['g5'] . "\n" . $new_i4 . "\n" . $new_i3. "\n" . $value['g2'] . "\n" .$value['g1']. "\n" . $value['gdb'] ."\n\n" ;
                }
                break;
            }
            
            case 'kqmn': {
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $date = getdate();
                if($date['hours'] < 16 && $date['minutes'] < 55) $date['mday'] -= 1;
                if($date['mon'] < 10) $date['mon'] = "0".$date['mon'];
                $date = $date['year'] . "-" . $date['mon'] . "-" .$date['mday'];
                $newday = getdate();
                $newday = $newday['hours'] . "/" . $newday['minutes'];
                // Lấy dữ liệu từ database
                $sql = "SELECT * FROM data_xskt_mn WHERE created_at = '$date'";
                $result = $conn->query($sql);
                
                // Tạo mảng chứa dữ liệu
                $data = array();
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    array_push($data, $row);
                  }
                }
                $text_show = "KQ xổ số miền Nam ngày ";
                $chuoi_thoi_gian = $data[0]['created_at'];
                $ngay_thang_nam = date("Y-m-d", strtotime($chuoi_thoi_gian));
                $text_show = $text_show . $ngay_thang_nam . "\n";
                foreach($data as $key_data => $value) {
                  $value['g6'] = json_decode($value['g6']);
                  $value['g4'] = json_decode($value['g4']);
                  $value['g3'] = json_decode($value['g3']);
                  
                  $new_i6 = 'G6: ';
                  $new_i4 = 'G4: ';
                  $new_i3 = 'G3: ';
                
                  foreach($value['g6'] as $key_g6 => $item_g6) {
                    $new_i6 = $new_i6 . $item_g6 . " ";
                  }
                
                  foreach($value['g4'] as $key_g4 => $item_g4) {
                    $new_i4 = $new_i4 . $item_g4 . " ";
                  }
                
                  foreach($value['g3'] as $key_g3 => $item_g3) {
                    $new_i3 = $new_i3 . $item_g3 . " ";
                  }
                
                  $value['g8'] = "G8: " . $value['g8'];
                  $value['g7'] = "G7: " . $value['g7'];
                  $value['g5'] = "G5: " . $value['g5'];
                  $value['g2'] = "G2: " . $value['g2'];
                  $value['g1'] = "G1: " . $value['g1'];
                  $value['gdb'] = "GDB: " .$value['gdb'];
                 
                  $text_show = $text_show . $value['name_dai'] . "\n" .$value['g8'] . "\n" . $value['g7'] . "\n" . $new_i6. "\n" . $value['g5'] . "\n" . $new_i4 . "\n" . $new_i3. "\n" . $value['g2'] . "\n" .$value['g1']. "\n" . $value['gdb'] ."\n\n";
                }
                break;
            }
            
            // Sàn lode
            case 'choilode':{
                $photo_path = 'photo/Huong-dan-choi-xo-so-lo-de.jpg';
                // Nội dung tin nhắn
                $caption = "Đây là hướng dẫn vào Lô đề. Vui lòng xem qua giúp em để nắm được cách chơi nhé !";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            case 'randomde': {
                $id = $update['callback_query']['from']['id'];
                // Lấy dữ liệu từ database
                $sql = "SELECT * FROM id_lay_lode WHERE id = '$id'";
                $result = $conn->query($sql);
                
                // Tạo mảng chứa dữ liệu
                $data = array();
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    array_push($data, $row);
                  }
                }
                if(!$data) {
                    $random_number = sprintf('%02d', rand(0, 99)); // Tạo số ngẫu nhiên từ 00 đến 99
                    $text = "Lấy 01 lần thôi cho linh nhé👌! Con đề hôm nay của con là " . $random_number;
                    $data = array(
                     'chat_id' => $update['callback_query']['from']['id'],
                    'text' => $text,
                     'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong tin nhắn
                    );
                    $api_url = "https://api.telegram.org/bot$token/sendMessage";
                    
                  
                    $name = 'randomde';
                    $checked = 1;
                    $created_at = date("Y-m-d");
                    
                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        // đặt chế độ lỗi PDO thành ngoại lệ
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // bắt đầu giao dịch
                        $conn->beginTransaction();
                        // câu lệnh SQL của chúng tôi
                        $conn->exec("INSERT INTO id_lay_lode (id, name, checked, created_at) VALUES ('$id', '$name', '$checked', '$created_at')");
                        // cam kết giao dịch
                        $conn->commit();
                    } catch(PDOException $e) {
                        // quay trở lại giao dịch nếu điều gì đó không thành công
                        $conn->rollback();
                        echo "Error: " . $e->getMessage();
                    }
                }
                else {
                    $text = "Mỗi người chỉ lấy được 1 con đề trong 1 ngày";
                    $data = array(
                     'chat_id' => $update['callback_query']['from']['id'],
                    'text' => $text,
                     'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong tin nhắn
                    );
                    $api_url = "https://api.telegram.org/bot$token/sendMessage";
                }
                    
                    
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                break;       
            }
            
            case 'randomlo': {
                $id = $update['callback_query']['from']['id'];
                // Lấy dữ liệu từ database
                $sql = "SELECT * FROM id_lay_cang WHERE id = '$id'";
                $result = $conn->query($sql);
                
                // Tạo mảng chứa dữ liệu
                $data = array();
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    array_push($data, $row);
                  }
                }
                if(!$data) {
                    $random_number = rand(000, 999); // Tạo số ngẫu nhiên từ 000 đến 999
                    $text = "Lấy 01 lần thôi cho linh nhé👌! 3 Càng hôm nay của con là " . $random_number;
                    $data = array(
                     'chat_id' => $update['callback_query']['from']['id'],
                    'text' => $text,
                     'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong tin nhắn
                    );
                    $api_url = "https://api.telegram.org/bot$token/sendMessage";
                    
                    $name = 'random3cang';
                    $checked = 1;
                    $created_at = date("Y-m-d");
                    
                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        // đặt chế độ lỗi PDO thành ngoại lệ
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // bắt đầu giao dịch
                        $conn->beginTransaction();
                        // câu lệnh SQL của chúng tôi
                        $conn->exec("INSERT INTO id_lay_cang (id, name, checked, created_at) VALUES ('$id', '$name', '$checked', '$created_at')");
                        // cam kết giao dịch
                        $conn->commit();
                    } catch(PDOException $e) {
                        // quay trở lại giao dịch nếu điều gì đó không thành công
                        $conn->rollback();
                        echo "Error: " . $e->getMessage();
                    }
                }
                else {
                    $text = "Mỗi người chỉ lấy được 1 con 3 Càng trong 1 ngày";
                    $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'text' => $text,
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong tin nhắn
                    );
                    $api_url = "https://api.telegram.org/bot$token/sendMessage";
                }
                break;
            }
            
            case 'randomstl': {
                
                $id = $update['callback_query']['from']['id'];
                // Lấy dữ liệu từ database
                $sql = "SELECT * FROM id_lay_stl WHERE id = '$id'";
                $result = $conn->query($sql);
                
                // Tạo mảng chứa dữ liệu
                $data = array();
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    array_push($data, $row);
                  }
                }
                if(!$data) {
                    $first_and_last_digit = rand(0, 9); // Tạo một chữ số ngẫu nhiên từ 0 đến 9 cho số đầu và cuối
                    $middle_digit_1 = rand(0, 9); // Tạo một chữ số ngẫu nhiên từ 0 đến 9 cho số giữa
                    $random_number = (string)$first_and_last_digit . (string)$middle_digit_1 . (string)$first_and_last_digit; // Ghép các số lại với nhau
                    $text = "Lấy 01 lần thôi cho linh nhé👌! Song thủ lô hôm nay của con là STL " . $random_number;
                    $data = array(
                     'chat_id' => $update['callback_query']['from']['id'],
                     'text' => $text,
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong tin nhắn
                    );
                    $api_url = "https://api.telegram.org/bot$token/sendMessage";
                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        // đặt chế độ lỗi PDO thành ngoại lệ
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        // bắt đầu giao dịch
                        $conn->beginTransaction();
                        // câu lệnh SQL của chúng tôi
                        $conn->exec("INSERT INTO id_lay_stl (id, name, checked, created_at) VALUES ('$id', '$name', '$checked', '$created_at')");
                        // cam kết giao dịch
                        $conn->commit();
                    } catch(PDOException $e) {
                        // quay trở lại giao dịch nếu điều gì đó không thành công
                        $conn->rollback();
                        echo "Error: " . $e->getMessage();
                    }
                }
                else {
                    $text = "Mỗi người chỉ lấy được 1 con Song thủ lô trong 1 ngày";
                    $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'text' => $text,
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong tin nhắn
                    );
                    $api_url = "https://api.telegram.org/bot$token/sendMessage";
                }
                break;
            }
            
            // Sàn w m
            case 'tnhcsn':{
                $photo_path = 'photo/wm-thuat-ngu-casino.jpg';
                // Nội dung tin nhắn
                $caption = "Đây là thuật ngữ hô casino từ cao thủ. Vui lòng xem qua giúp em trước khi theo cao thủ hô nhé !";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            case 'txwm': {
                $photo[1] = 'photo/wm-tai-xiu-2.jpg';
                $photo[2] = 'photo/wm-tai-xiu-1.jpg';
                $caption[2] = "Đây là 2 ảnh hướng dẫn chơi tài xỉu sảnh WM. Vui lòng xem qua giúp em nhé!";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'xdwm': {
                $photo[1] = 'photo/wm-xoc-dia-2.jpg';
                $photo[2] = 'photo/wm-xoc-dia-1.jpg';
                $caption[2] = "Đây là 2 ảnh hướng dẫn chơi Xóc đĩa sảnh WM. Vui lòng xem qua giúp em nhé!";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'bcrwm': {
                $photo[1] = 'photo/wm-baccarat-2.jpg';
                $photo[2] = 'photo/wm-baccarat-1.jpg';
                $caption[2] = "Đây là 2 ảnh hướng dẫn chơi Baccarat sảnh WM. Vui lòng xem qua giúp em nhé!";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'rhwm': {
                $photo[1] = 'photo/wm-rong-ho-2.jpg';
                $photo[2] = 'photo/wm-rong-ho-1.jpg';
                $caption[2] = "Đây là 2 ảnh hướng dẫn chơi Rồng hổ sảnh WM. Vui lòng xem qua giúp em nhé!";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            // Sàn DG
            case 'bcrdg': {
                $photo[1] = 'photo/dg-baccarat-2.jpg';
                $photo[2] = 'photo/dg-baccarat-1.jpg';
                $caption[2] = "Đây là 2 ảnh hướng dẫn chơi Baccarat sảnh DG. Vui lòng xem qua giúp em nhé!";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'cldg': {
                $photo[1] = 'photo/dg-chan-le-2.jpg';
                $photo[2] = 'photo/dg-chan-le-1.jpg';
                $caption[2] = "Đây là 2 ảnh hướng dẫn chơi Chẵn Lẻ sảnh DG. Vui lòng xem qua giúp em nhé!";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'sbdg': {
                $photo[1] = 'photo/dg-sicbo-2.jpg';
                $photo[2] = 'photo/dg-sicbo-1.jpg';
                $caption[2] = "Đây là 2 ảnh hướng dẫn chơi Sicbo sảnh DG. Vui lòng xem qua giúp em nhé!";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            // Hướng dẫn nạp rút tiền
            case 'hdnt': {
                $api_url = "https://api.telegram.org/bot" . $token;
                $keyboard = [
                    'inline_keyboard' => [
                      [
                        ['text' => 'Chuyển khoản', 'callback_data' => 'ntck'],
                        ['text' => 'Internet Banking', 'callback_data' => 'ntib'],
                      ],
                      [
                        ['text' => 'Viettel Pay', 'callback_data' => 'ntvp'],
                        ['text' => 'QR Banking', 'callback_data' => 'ntqb'],
                      ],
                      [
                        ['text' => 'Momo Pay', 'callback_data' => 'ntmp'],
                        ['text' => 'Zalo Pay', 'callback_data' => 'ntzp'],
                      ]
                    ]
                ];
    
                $reply_markup = json_encode($keyboard);
            
                $response = [
                    'method' => 'sendMessage',
                    'chat_id' => $update['callback_query']['from']['id'],
                    'text' => "Hiện tại MG188.ZONE có tất cả là 06 hình thức nạp tiền. Để thuận tiện hơn, Vui lòng chọn giúp em hình thức nạp tiền mong muốn mà mình có thể nạp để em có thể hướng dẫn chính xác hơn nhé 😊",
                    'reply_markup' => $reply_markup
                ];
            
              // Gửi câu trả lời đến người dùng
                file_get_contents($api_url . "/sendMessage?" . http_build_query($response));
                break;
            }
            
            case 'ntck': {
                $photo_path = 'photo/nap-tien-chuyen-khoan.jpg';
                // Nội dung tin nhắn
                $caption = "Để nạp tiền bằng hình thức Chuyển khoản. Vui lòng xem qua hình ảnh thao tác bên trên và thực hiện đúng theo hình!";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            case 'ntib': {
                $photo_path = 'photo/nap-tien-internet-banking.jpg';
                // Nội dung tin nhắn
                $caption = "Để nạp tiền bằng hình thức Internet Banking. Vui lòng xem qua hình ảnh thao tác bên trên và thực hiện đúng theo hình!";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            case 'ntvp': {
                $photo_path = 'photo/nap-tien-viettel-pay.jpg';
                // Nội dung tin nhắn
                $caption = "Để nạp tiền bằng hình thức Viettel Pay. Vui lòng xem qua hình ảnh thao tác bên trên và thực hiện đúng theo hình!";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            case 'ntqb': {
                $photo_path = 'photo/nap-tien-qr-banking.jpg';
                // Nội dung tin nhắn
                $caption = "Để nạp tiền bằng hình thức QR Banking. Vui lòng xem qua hình ảnh thao tác bên trên và thực hiện đúng theo hình!";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            case 'ntmp': {
                $photo_path = 'photo/nap-tien-momo-pay.jpg';
                // Nội dung tin nhắn
                $caption = "Để nạp tiền bằng hình thức Momo Pay. Vui lòng xem qua hình ảnh thao tác bên trên và thực hiện đúng theo hình!";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            case 'ntzp': {
                $photo_path = 'photo/nap-tien-zalo-pay.jpg';
                // Nội dung tin nhắn
                $caption = "Để nạp tiền bằng hình thức Zalo Pay. Vui lòng xem qua hình ảnh thao tác bên trên và thực hiện đúng theo hình!";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            case 'hdrt': {
                $photo_path = 'photo/rut-tien.jpg';
                // Nội dung tin nhắn
                $caption = "Để rút tiền tại MG188 ZONE. Vui lòng xem qua hình ảnh thao tác bên trên và thực hiện đúng theo hình!";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
                
            // Sàn MG
            case 'mgtnbd': {
                $photo_path = 'photo/mg-thuat-ngu-bong-da.jpg';
                // Nội dung tin nhắn
                $caption = "Vui lòng xem qua hình ảnh bên trên các thuật ngữ và ký hiệu kèo bóng để theo kèo chuyên gia dễ hơn nhé 🤑";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            case 'mghdvs': {
                $photo[1] = 'photo/mg-huong-dan-vao-san-1.jpg';
                $photo[2] = 'photo/mg-huong-dan-vao-san-2.jpg';
                $caption[2] = "Vui lòng xem qua 2 hình ảnh bên trên cách vào sàn MG-SPORTS giúp em nhé 😍";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'mghddkc': {
                $photo[1] = 'photo/mg-huong-dan-keo-chap-1.jpg';
                $photo[2] = 'photo/mg-huong-dan-keo-chap-2.jpg';
                $caption[2] = "Vui lòng xem qua 2 hình ảnh bên trên cách vào KÈO CHẤP sàn MG-SPORTS giúp em nhé 😍";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'mghddktx': {
                $photo[1] = 'photo/mg-huong-dan-dat-keo-tai-xiu-1.jpg';
                $photo[2] = 'photo/mg-huong-dan-dat-keo-tai-xiu-2.jpg';
                $caption[2] = "Vui lòng xem qua 2 hình ảnh bên trên cách vào TÀI XỈU sàn MG-SPORTS giúp em nhé 😍";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            //Sàn BOV
            case 'bovhdvs': {
                $photo[1] = 'photo/bov-huong-dan-vao-san-1.jpg';
                $photo[2] = 'photo/bov-huong-dan-vao-san-2.jpg';
                $caption[2] = "Vui lòng xem qua 2 hình ảnh bên trên cách vào sàn BOV-BONGVIP giúp em nhé 😍";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'bovhddkc': {
                $photo[1] = 'photo/bov-huong-dan-dat-keo-chap-1.jpg';
                $photo[2] = 'photo/bov-huong-dan-dat-keo-chap-2.jpg';
                $caption[2] = "Vui lòng xem qua 2 hình ảnh bên trên cách chơi KÈO CHẤP sàn BOV-BONGVIP giúp em nhé 😍";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'bovhddktx': {
                $photo[1] = 'photo/bov-huong-dan-dat-keo-tai-xiu-1.jpg';
                $photo[2] = 'photo/bov-huong-dan-dat-keo-tai-xiu-2.jpg';
                $caption[2] = "Vui lòng xem qua 2 hình ảnh bên trên cách chơi kèo TÀI XỈU sàn BOV-BONGVIP giúp em nhé 😍";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'bovhddkdb': {
                $photo[1] = 'photo/bov-huong-dan-dat-keo-dac-biet-1.jpg';
                $photo[2] = 'photo/bov-huong-dan-dat-keo-dac-biet-2.jpg';
                $caption[2] = "Vui lòng xem qua 2 hình ảnh bên trên cách chơi kèo ĐẶC BIỆT sàn BOV-BONGVIP giúp em nhé 😍";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            case 'bovhdcxx': {
                $photo[1] = 'photo/bov-huong-dan-dat-keo-xien-xau-1.jpg';
                $photo[2] = 'photo/bov-huong-dan-dat-keo-xien-xau-2.jpg';
                $caption[2] = "Vui lòng xem qua 2 hình ảnh bên trên cách chơi kèo XIÊN/XÂU sàn BOV-BONGVIP giúp em nhé 😍";
                for($i = 1; $i <= 2; $i++) {
                    $url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';
                    $postFields = array(
                        'chat_id' => $update['callback_query']['from']['id'],
                        'caption' => $caption[$i],
                        'photo' => new CURLFile(realpath($photo[$i])),
                      );
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, count($postFields));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $result = curl_exec($ch);
                    curl_close($ch);
                }
                break;
            }
            
            //Bảo mật telegram
            case 'bmtelegram': {
                $photo_path = 'photo/Bao-mat-telegram.jpg';
                // Nội dung tin nhắn
                $caption = "Vui lòng xem qua hình ảnh bên để Bảo mật Telegram nhé!";
                
                // Dữ liệu để gửi tin nhắn
                $data = array(
                    'chat_id' => $update['callback_query']['from']['id'],
                    'caption' => $caption,
                    'photo' => new CURLfile(realpath($photo_path)),
                    'parse_mode' => 'HTML', // Cho phép sử dụng định dạng HTML trong caption
                );
                   // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
                $api_url = "https://api.telegram.org/bot$token/sendPhoto";
                break;
            }
            
            default: $text_show = "Không hợp lệ.";
        }
        
        // Sử dụng CURL để gửi tin nhắn kèm hình ảnh
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        curl_close($ch);
        
        $data = http_build_query([
                'text' => $text_show,
                'chat_id' => $update['callback_query']['from']['id']
            ]);
        file_get_contents($api_url . "/sendMessage?{$data}");
     }


     
    // lấy dữ liệu từ telegram khi có tin nhắn
    $data = file_get_contents('php://input');
    require_once "TelegramBot.php";
    $bot = new Bot('5943908412:AAEXWBDlASNqVZq9WJuYMy3DvaBy2HHbzLM');
    $json = json_decode($data,true);
    if (isset($json['message']['text'])){
        if (!checkTinNhan($bot,$json)){
            return;
        }
        $message = $json['message']['text'];
        if ($message == '/start'){
             $bot->sendMessage($id=$json["message"]["chat"]["id"],$text="Xin chào dân chơi ".$json["message"]["from"]["first_name"]." ".$json["message"]["from"]["last_name"].' Em là BOT Hạ Vy đáng yêu được tạo ra bởi Tập đoàn NFT Group. Để biết thêm nhiều thông tin hơn anh/chị có thể truy cập vào website chính thức của NFT tại đây https://nftgroupvn.com/ 🥰');
        }
        if ($message == '@nftgroupvn_bot'){
             $bot->sendMessage($id=$json["message"]["chat"]["id"],$text="Gọi em là 'Hạ Vy ơi' thì em mới trả lời tiếp nè 🥰!");
        }
        if ($message == 'Hướng dẫn'){
             $bot->sendMessage(
            $id=$json["message"]["chat"]["id"],
            $text='Dạ vâng! Em có một vài hướng dẫn nếu Anh/Chị cần ạ. Anh/Chị gõ "Hướng dẫn casino" nếu cần hướng dẫn chơi game hoặc Anh/Chị gõ "Hướng dẫn telegram" để được hướng dẫn sử dụng telegram nhé ạ',
            $reply="",
            $mode="HTML");
        }
    }

    function checkTinNhan($bot, $json) {
        $msg = strtolower($json["message"]["text"]);
        
        $arr1 = [
            'demo1'
        ];
        
        $arr15 = [
            'để cược xiên',
            'ls cược xiên',
            'cuoc xien the nao',
            'huong dan cược xiên',
            'hd cược xiên'
        ];
        
        $arr21 = [
            'choi lo the nao',
            'choi lô vào đâu',
            'chơi lô sao',
            'lo de vao',
            'chơi lô vào đâu',
            'lô đề vào',
            'đánh lô k'
        ];
        
        $arr22 = [
            'xsmb'
        ];
        
        $arr23 = [
            'xsmt'
        ];
        
        $arr24 = [
            'xsmn'
        ];
        
        $arr25 = [
            'nạp tiền phải',
            'nap tien sao'
        ];
        
        $arr26 = [
            'rút tiền sao',
            'rut tien sao',
            'rut tiền sao'
        ];
        
        $arr27 = [
            'k vào dc tiền',
            'lỗi nạp tiền',
            'loi nap tien',
            'nạp tiền lâu',
            'lâu lên điểm',
            'chưa lên điểm',
            'nạp tiền khoai',
            'vào tiền lâu',
            'nạp tiền k',
            'nạp tiền ko',
            'không nạp được tiền',
            'k vào tiền',
            'nạp tiền lần nào cũng lâu',
            'ko nạp tiền được',
            'rút tiền soa k được',
            'rút tiền ko',
            'rút tiền ở' ,
            'không nạp tiền'
        ];
        
        $arr28 = [
            'miền bắc chơi sảnh nào',
            'đánh số đề ở',
            'chơi số đề'
        ];
        
        $arr29 = [
            'hom nay danh con gi',
            'hôm nay đánh con gì',
            'cho con lô',
            'xin con lô',
            'xin con đề',
            'cho con đề',
            'de hom nay ra',
            'đề hôm nay ra',
            'đánh mỗi lô đề',
            'đánh lô con',
            'đánh đề con gì',
            'đề đánh gì'
        ];
        
        $arr30 = [
            'bú 1 lô',
            'bú đề chạm',
            'bú 3 càng lô',
            'bú 3 nháy'
        ];
        
        $arr32 = [
            'bm telegram',
            'cai tieng viet',
            'cài tiếng việt',
            'bảo mật telegram'
        ];
        
        $arr33 = [
            'cai 1.1.1',
            'cài 1.1.1',
            'cài vpn',
            'cai vpn'
        ];
        
        foreach ($arr1 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> yêu quá 😘' ,
                    $reply="",
                    $mode="HTML"
                );
                return false;
            }
        }
        
        foreach ($arr21 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'HD chơi lô đề', 'callback_data' => 'choilode']
                          
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> đang cần cách vào và chơi Lô đề ? Nếu đúng vui lòng click vào nút bên dưới để xem nhé!',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
        
        foreach ($arr22 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'Kết quả XSMB', 'callback_data' => 'kqmb']
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> đang muốn xem Kết quả xổ số Miền Bắc ? Nếu đúng vui lòng click vào nút bên dưới để xem nhé!',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
        
        foreach ($arr23 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'Kết quả XSMT', 'callback_data' => 'kqmt']
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> đang muốn xem Kết quả xổ số Miền Trung ? Nếu đúng vui lòng click vào nút bên dưới để xem nhé!',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
        
        foreach ($arr24 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'Kết quả XSMN', 'callback_data' => 'kqmn']
                          
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> đang muốn xem Kết quả xổ số Miền Nam ? Nếu đúng vui lòng click vào nút bên dưới để xem nhé!',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
        
        foreach ($arr25 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'HD Nạp tiền', 'callback_data' => 'hdnt']
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> Có vẻ như đang cần hướng dẫn nạp tiền. Nếu đúng vui lòng chọn hướng dẫn Nạp tiền bên dưới để được hướng dẫn nhé',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
        
        foreach ($arr26 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'HD Rút tiền', 'callback_data' => 'hdrt']
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> Có vẻ như chưa biết cách rút tiền. Nếu đúng vui lòng chọn hướng dẫn Rút tiền bên dưới để được hướng dẫn nhé',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
        
        foreach ($arr27 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'Nhắn tin Hỗ trợ Trang 24/24', 'url' => 'https://embed.168livechat.com/639c4bd3f02646f263e67599/']
                        ],
                        [
                            ['text' => 'Nhắn Thủy Tiên 💋 ', 'url' => 'https://t.me/thuytien06'],
                            ['text' => 'Nhắn Thủy Tiên 📥', 'url' => 'https://t.me/thuytien006']
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> Có vẻ như đang cần hỗ trợ vấn đề nạp rút tiền. Vui lòng liên hệ trực tiếp hỗ trợ viên của trang hoặc Thủy tiên ngay bên dưới để được hỗ trợ nhanh nhất nhé.',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
        
        foreach ($arr29 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'Xin con Đề 🎰', 'callback_data' => 'randomde'],
                            ['text' => 'Xin 3 Càng 🎰', 'callback_data' => 'randomlo'],
                            ['text' => 'Xin STL 🎰', 'callback_data' => 'randomstl']
                          
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> nếu hôm nay chưa biết đánh con gì thì để thầy gợi ý cho nhé !',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
        
        foreach ($arr30 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> Chúc mừng pro 🎆. Quá uy tín ' ,
                    $reply="",
                    $mode="HTML"
                );
                return false;
            }
        }
        
        foreach ($arr32 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'Cài Tiếng Việt ', 'url' => 'https://t.me/setlanguage/abcxyz'],
                            ['text' => 'Bảo mật Telegram', 'callback_data' => 'bmtelegram']
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> Vui lòng chọn các mục phù hợp bên dưới để cài đặt được Tiếng Việt cho Telegram, cũng như hướng bảo mật Telegram để tránh bị thêm vào các nhóm xấu và lừa đảo nhé!',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
        
        foreach ($arr33 as $keyword) {
            if (strpos($msg, strtolower($keyword)) !== false) {
                $keyboard = [
                    'inline_keyboard' => [
                        [
                            ['text' => 'Android ', 'url' => 'https://play.google.com/store/apps/details?id=com.cloudflare.onedotonedotonedotone&hl=vi&gl=US'],
                            ['text' => 'Iphone', 'url' => 'https://apps.apple.com/vn/app/1-1-1-1-faster-internet/id1423538627?l=vi']
                        ]
                    ]
                ];
                $reply_markup = json_encode($keyboard);
                $bot->sendMessage(
                    $id=$json["message"]["chat"]["id"],
                    $text='<a href="tg://user?id='.$json["message"]["from"]["id"].'">'.$json["message"]["from"]["first_name"].
                    " ".$json["message"]["from"]["last_name"].'</a> Nếu Hội viên bị chặn không truy cập được vào trang chơi. Hội viên có thể đổi VPN để truy cập trang chơi bình thường. Nếu Hội viên chưa cài đặt 1.1.1.1 vui lòng chọn Hệ điều hành đang dùng phù hợp để bắt đầu tải App về máy!',
                    $reply="",
                    $mode="HTML",
                    $reply_markup = $reply_markup
                );
                return false;
            }
        }
    }





?>
