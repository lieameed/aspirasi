<?php
class Notifications {
    public function index() {
        // Coba pakai path ini, biasanya di MVC lo pake __DIR__ biar gak nyasar
        require_once __DIR__ . '/../views/notifications.php';
    }
}
?>