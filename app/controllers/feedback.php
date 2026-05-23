<?php
class Feedback {
    public function index() {
        require_once __DIR__ . '/../config/fedback.php';
        $feedbacks = getAllFeedbacks(); 
        require_once __DIR__ . '/../views/feedback.php';
    }

    public function add() {
        require_once __DIR__ . '/../views/addfedback.php';
    }

    public function vote() {
        require_once __DIR__ . '/../config/fedback.php';
        if (isset($_GET['id'])) {
            addVote($_GET['id']);
            header("Location: index.php?url=feedback");
        }
    }
}
?>