<?php

class NotificationsController extends ACoreCreator
{

    public function getNotifications() {
        $notifications = $this->m->getNotifications($_SESSION['user']['id']);
        foreach ($notifications as $item) {
            $div .= '
                <div class="popupBell-item">
                    <img style="width: 32px;" src="'. $item['image'] .'">
                    <div class="popupBell-item__info">
                        <p>'. $item['body'] . ' ' . $item['date'] .'</p>
                    </div>
                </div>';
        }
        echo $div;
    }

    public function getCountNotifications()
    {
        $notifications = $this->m->getNotifications($_SESSION['user']['id']);
        echo json_encode($notifications);
    }

    public function checkNotifications() {
        $this->m->db->execute("UPDATE `notifications` SET `is_checked` = '1' WHERE user_id = ". $_SESSION['user']['id']);
    }

    public function obr()
    {
    }

    public function get_content(){}
}