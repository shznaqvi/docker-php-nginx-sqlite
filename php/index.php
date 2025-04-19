<?php
$db = new SQLite3('/var/www/html/data/database.sqlite');
$db->exec("CREATE TABLE IF NOT EXISTS visits (id INTEGER PRIMARY KEY AUTOINCREMENT, created_at TEXT)");
$db->exec("INSERT INTO visits (created_at) VALUES (datetime('now'))");
$result = $db->query("SELECT COUNT(*) as count FROM visits");
$row = $result->fetchArray();
echo "Visit Count: " . $row['count'];