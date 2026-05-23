<?php
class PostController {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createPost($postData, $fileData) {
        $user_id = 1;
        $caption = htmlspecialchars($postData['caption'] ?? '');
        $location = htmlspecialchars($postData['location'] ?? null);

        $imagePath = null;
        if (isset($fileData['image']) && $fileData['image']['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $fileData['image']['tmp_name'];
            $fileName = $fileData['image']['name'];
            $fileSize = $fileData['image']['size'];
            
            $allowedExts = ['jpg', 'jpeg', 'png'];
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

            if (in_array($fileExt, $allowedExts) && $fileSize <= 10485760) {
                $newFileName = uniqid('post_') . '.' . $fileExt;
                $uploadDest = __DIR__ . '/../../public/assets/images/' . $newFileName;
                
                if (move_uploaded_file($fileTmpPath, $uploadDest)) {
                    $imagePath = 'assets/images/' . $newFileName;
                } else {
                    return "Gagal mindahin file gambar bang.";
                }
            } else {
                return "Format ga valid atau ukuran lebih dari 10MB.";
            }
        }

        $sql = "INSERT INTO posts (user_id, caption, image_path, location) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        
        if ($stmt === false) {
            return "Error prepare statement: " . $this->conn->error;
        }

        $stmt->bind_param("isss", $user_id, $caption, $imagePath, $location);
        
        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $error = $stmt->error;
            $stmt->close();
            return "Error DB: " . $error;
        }
    }
}
?>