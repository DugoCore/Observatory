<?php
// Test database connections
$configs = [
    ['user' => 'root', 'pass' => '', 'host' => '127.0.0.1'],
    ['user' => 'root', 'pass' => '', 'host' => 'localhost'],
];

foreach ($configs as $config) {
    echo "Testing: user={$config['user']}, pass={$config['pass']}, host={$config['host']}\n";
    
    try {
        $pdo = new PDO(
            "mysql:host={$config['host']};dbname=observatory_db",
            $config['user'],
            $config['pass']
        );
        echo "SUCCESS: Connection works!\n";
        break;
    } catch (PDOException $e) {
        echo "FAILED: " . $e->getMessage() . "\n";
    }
    echo "\n";
}
?>
