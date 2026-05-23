<?php

class Ide {
    public function index() {
        require_once __DIR__ . '/../db-connection/db-connection.php';
        require_once __DIR__ . '/../config/crud.php'; 
        
        global $conn; 
        if (!$conn) { $conn = koneksi(); }

        $filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';

        $result = getAllIdeas($conn, $filter); 

        require_once __DIR__ . '/../views/ide.php';
    }

public function delete() {
        require_once __DIR__ . '/../db-connection/db-connection.php';
        require_once __DIR__ . '/../config/crud.php'; 

        global $conn; 

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            if (deleteIdea($id)) {
                header("Location: index.php?url=ide");
                exit;
            }
        }
    }

public function post() {
    require_once __DIR__ . '/../config/crud.php';
    $idea = null;
    require_once __DIR__ . '/../views/addidea.php';
}

public function edit() {
    require_once __DIR__ . '/../config/crud.php';
    if (isset($_GET['id'])) {
        $idea = getIdeaById($_GET['id']);
        require_once __DIR__ . '/../views/addidea.php';
    }
}
}
?>