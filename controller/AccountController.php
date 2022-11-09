<?php
class AccountController extends ACore {

    public function IsFreedomSiteName () {
        $site_url = $_GET['site_url'];

        if ((int)$this->m->db->query("SELECT count(*) FROM user WHERE `site_url` = " . $site_url) > 0) {
            return False;
        }
        return True;
    }

    public function saveAdditionalSettings() {

        if($_FILES['file_upload']['name']){

            if($_SESSION['user']['avatar'] != "uploads/ava/1.jpg"){
                unlink("../".$_SESSION['user']['avatar']);
            }
            move_uploaded_file($_FILES['file_upload']['tmp_name'], "./uploads/ava/".$_SESSION['user']['email']."_".$_FILES['file_upload']['name']);
            $path = "uploads/ava/".$_SESSION['user']['email']."_".$_FILES['file_upload']['name'];
            $this->m->db->execute("UPDATE `user` SET `avatar` = '$path' WHERE `id` = " . $_SESSION['user']['id']);

            $_SESSION['user']['avatar'] = $path;
        }

        $niche = strlen($_POST['niche']) != 0 ? $_POST['niche'] : $_SESSION['user']['niche'];
        $gender = strlen($_POST['gender']) != 0 ? $_POST['gender'] : $_SESSION['user']['gender'];

        $this->m->db->execute("UPDATE `user` SET `gender`='$gender',`niche`='$niche' WHERE `id` = " . $_SESSION['user']['id']);
    }

    public function SaveSettings() {
        $user = $this->m->db->query("SELECT * FROM user WHERE `id` = ". $_SESSION['user']['id']);

        if (strlen($_POST['email']) == 0) {
            $email = $user[0]['email'];
        } else {
            $temp_email = $_POST['email'];
            if (!filter_var($temp_email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['error']['email_message'] = 'Неверный email';
                return False;
            }

            if (count($this->m->db->query("SELECT * FROM user WHERE email = '$temp_email'")) != 0) {
                $_SESSION['error']['email_message'] = 'Такой email уже зарегистрирован';
                return False;
            }
            $email = $_POST['email'];
        }

        if (strlen($_POST['first_name']) == 0) {
            $first_name = $user[0]['first_name'];
        } else {
            if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/",$_POST['first_name'])) {
                $_SESSION['error']['first_name_message'] = 'Имя содержит запрещенные знаки';
                return False;
            }
            $first_name = $_POST['first_name'];
        }

        if (strlen($_POST['second_name']) == 0) {
            $second_name = $user[0]['second_name'];
        } else {
            if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/",$_POST['second_name'])) {
                $_SESSION['error']['second_name_message'] = 'Фамилия содержит запрещенные знаки';
                return False;
            }
            $second_name = $_POST['second_name'];
        }

        if (strlen($_POST['site_url']) == 0) {
            $site_url = $user[0]['site_url'];
        } else {
            $site_url = $_POST['site_url'];
            $count = (int)($this->m->db->query("SELECT * FROM user WHERE `site_url` = '$site_url'"));
            if ($count != 0) {
                $_SESSION['error']['url_message'] = 'Данный Url уже занят';
                return False;
            }
        }

        $this->m->db->execute("UPDATE user SET `email` = '$email', `first_name` = '$first_name', `second_name` = '$second_name', `site_url` = '$site_url' WHERE id = " . $_SESSION['user']['id']);
        $_SESSION["user"]['first_name'] = $first_name;
        $_SESSION["user"]['second_name'] = $second_name;
        $_SESSION["user"]['email'] = $email;
        $_SESSION["user"]['site_url'] = $site_url;
        return true;
    }
	
	public function saveUserSettings() {
		
		$user = $this->m->db->query("SELECT * FROM user WHERE `id` = ". $_SESSION['user']['id']);
		
		if (strlen($_POST['first_name']) == 0) {
            $first_name = $_SESSION['user']['first_name'];
        } else {
            if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/",$_POST['first_name'])) {
                $_SESSION['error']['first_name_message'] = 'Имя содержит запрещенные знаки';
                return False;
            }
            $first_name = $_POST['first_name'];
        }

        if (strlen($_POST['second_name']) == 0) {
            $second_name =  $_SESSION['user']['second_name'];
        } else {
            if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/",$_POST['second_name'])) {
                $_SESSION['error']['second_name_message'] = 'Фамилия содержит запрещенные знаки';
                return False;
            }
            $second_name = $_POST['second_name'];
        }
		
		$this->m->db->execute("UPDATE user SET `first_name` = '$first_name', `second_name` = '$second_name' WHERE id = " . $_SESSION['user']['id']);
		
		$_SESSION["user"]['first_name'] = $first_name;
        $_SESSION["user"]['second_name'] = $second_name;
		
		$npass = $_POST['new_pass'];
		$npassr = $_POST['new_pass_repeat'];
		
		if ($user[0]["password"] != $_POST['old_pass']) {
                $_SESSION['error']['pass_message'] = 'Неверный пароль';
                return False;
            }
			if($npass != $npassr){
				$_SESSION['error']['pass_message'] = 'Пароли не совпадают';
                return False;
			}else{
				$this->m->db->execute("UPDATE user SET `password` = '$npass' WHERE id = " . $_SESSION['user']['id']);
				unset($_SESSION['error']['pass_message']);
				
				$date = date("d.m.Y");
				$time = date("H:i");
				
				$this->m->db->execute("INSERT INTO notifications (`class`, `body`, `date`, `time`, `user_id`) VALUES ('item-lite','Ваш пароль изменен','$date','$time',". $_SESSION["user"]["id"] .")");
			}
	}
	
    function get_content()
    {
		if($_SESSION["user"]["is_creator"] == 1){
			echo '<!DOCTYPE html>
					<html lang="en">
					<head>
					<meta charset="UTF-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<title>Document</title>
					</head>
					<body>
						<script>
							window.location.replace("?option=Account");
						</script>
					</body>
					</html>';
		}else{
			echo '<!DOCTYPE html>
					<html lang="en">
					<head>
					<meta charset="UTF-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<title>Document</title>
					</head>
					<body>
						<script>
							window.location.replace("?option=SettingsAccountUser");
						</script>
					</body>
					</html>';
		}
    }

    function obr()
    {
        // TODO: Implement obr() method.
    }
}