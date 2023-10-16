<?php
session_start();
define('DBNAME', 'week-1');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBHOST', 'localhost');

try {
    $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create the audit log table if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS audit_log (
                id INT AUTO_INCREMENT PRIMARY KEY,
                action_message TEXT,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
    $db->exec($sql);

    // Function to add an entry to the audit log
    function logAction($message) {
        global $db;

        $sql = "INSERT INTO audit_log (action_message) VALUES (:message)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        $stmt->execute();
    }
} catch(PDOException $e) {
    echo "Issue -> Connection failed: " . $e->getMessage();
}
?>
