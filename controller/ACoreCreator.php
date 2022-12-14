<?php
if (!class_exists('PHPMailer\PHPMailer\Exception'))
{
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../vendor/phpmailer/phpmailer/src/SMTP.php';
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
}

    abstract class  ACoreCreator {

        protected $m;
        protected $ourEmail = "envelope@course-creator.io";
        protected $ourPassword = "1u*V90z*29pP";
        protected $ourNickName = "course-creator.io";
        protected $email;

        protected $url_dir;

        public function __construct() {
            date_default_timezone_set('Europe/Moscow');
            $this->m = new User();
            $this->url_dir = "./uploads/users/" . $_SESSION['user']['id'] . '/';
        }

        public function obr() {
            if (isset($_SESSION['user']['is_creator']) && $_SESSION['user']['is_creator'] == 0) {
                header("Location: /UserMain");
            } else if (!isset($_SESSION['user']) || is_null($_SESSION['user'])) {
                header("Location: /login");
            }
        }

        public function addNotifications($class, $message, $image, $user_id = null) {
            if (is_null($user_id)) $user_id = $_SESSION['user']['id'];
            $date = date("Y-m-d");
            $time = date("H:i:s");
            return $this->m->db->execute("INSERT INTO `notifications` (`user_id`, `class`, `body`, `image`, `date`, `time`, `is_checked`) VALUES ('$user_id', '$class', '$message', '$image', '$date', '$time', 0)");
        }

        protected function dir_size($path) {
            $path = ($path . '/');
            $size = 0;
            $dir = opendir($path);
            if (!$dir) {
                return 0;
            }

            while (false !== ($file = readdir($dir))) {
                if ($file == '.' || $file == '..') {
                    continue;
                } elseif (is_dir($path . $file)) {
                    $size += $this->dir_size($path . '//' . $file);
                } else {
                    $size += filesize($path . '//' . $file);
                }
            }
            closedir($dir);
            return $size;
        }

        public function SendEmail ($title, $body, $email, $file = null, $file_name = null) {

            $mail = new PHPMailer\PHPMailer\PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->CharSet = "UTF-8";
                $mail->SMTPAuth   = true;
                $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

                // ?????????????????? ?????????? ??????????
                $mail->Host       = 'smtp.yandex.ru'; // SMTP ?????????????? ?????????? ??????????
                $mail->Username   = $this->ourEmail; // ?????????? ???? ??????????
                $mail->Password   = $this->ourPassword; // ???????????? ???? ??????????
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = 465;
                $mail->smtpConnect(
                    array(
                        "ssl" => array(
                            "verify_peer" => false,
                            "verify_peer_name" => false,
                            "allow_self_signed" => true
                        )
                    )
                );
                $mail->setFrom($this->ourEmail, $this->ourNickName); // ?????????? ?????????? ?????????? ?? ?????? ??????????????????????

                // ???????????????????? ????????????
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = $title;
                $mail->Body = $body;
                if (!is_null($file)) {
                    $mail->addAttachment($file, $file_name);
                }

                if ($mail->send()) {$result = "success";}
                else {$result = "allGood";}

            } catch (Exception $e) {
                $result = $mail->ErrorInfo;
                $status = "?????????????????? ???? ???????? ????????????????????. ?????????????? ????????????: {$mail->ErrorInfo}";
            }
            echo $result;
        }
    }