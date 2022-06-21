<?php
ini_set('display_errors', true);

require_once __DIR__ .'/private/vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/private/');
$dotenv->load();

// Initialize database connection
DB::$host = $_ENV['DB_HOST'] ?? 'localhost';
DB::$user = $_ENV['DB_USER'] ?? '';
DB::$password = $_ENV['DB_PASSWORD'] ?? '';
DB::$port = $_ENV['DB_PORT'] ?? 3306;

DB::useDb($_ENV['DB_DATABASE']);