<?php
function writeToLogFile($str){
    $file = fopen("logFile.txt", 'a');
    fwrite($file, "\n".date("Y-m-d h:i:s :").$str);
    fclose($file);
}

function checkUser($data, $username, $email){
    foreach ($data['users'] as $user){
        if($user['name'] == $username && $user['email'] == $email){
            return true;
        }
    }
    return false;
}

/*
 * Массив с пользователями
 * **/
$data = array(
    'users' => [
        '1' =>[
            'id' => 1,
            'name' => 'Nikita Volkov',
            'email' => 'nikita@gmail.com'
        ],
        '2' =>[
            'id' => 2,
            'name' => 'Kirill Cherkov',
            'email' => 'kirill@gmail.com'
        ],
        '3' =>[
            'id' => 1,
            'name' => 'Danya Davadov',
            'email' => 'danya@gmail.com'
        ],
        '4' =>[
            'id' => 1,
            'name' => 'Dasha Klimushina',
            'email' => 'dahsa@gmail.com'
        ],
    ],
);

/*
 * Обработка данных из формы
 * */
if (isset($_POST['password']) && isset($_POST['passwordConfirm']) && isset($_POST['email'])) {
    $user = $_POST['username'].' '.$_POST['surname'];

    $result = array(); //Ответ сервера
    if(strpos($_POST['email'],'@')) {   //Проверка email

        if ($_POST['passwordConfirm'] != $_POST['password']) { //Проверка подтверждения пароля
            $result['error'] = 'Password not confirmed';
            writeToLogFile("Неудачная регистрация пользователся: $user \n   ' Пароль не подтвержден '");
        } else {
            if(checkUser($data, $_POST['username'].' '.$_POST['surname'], $_POST['email'])){  //Проверка на сущесвование в массиве
                $result['error'] = 'false';
                writeToLogFile("Успешная регистрация пользователя: $user \n   ' ==================== '");
            } else {
                $result['error'] = 'User not found';
                writeToLogFile("Неудачная регистрация пользователся: $user \n   ' Пользователь не найден '");
            }
        }

    } else {
       $result['error'] = 'Email must contain \'@\'';
        writeToLogFile("Неудачная регистрация пользователся: $user \n   ' Email не содержит '@' '");
    }

    // Переводим массив в JSON
    echo json_encode($result);
}
?>