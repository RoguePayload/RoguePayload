<?php
// Start a secure session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Function to sanitize user input
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Function to verify CAPTCHA
function verify_captcha($user_input) {
    if (isset($_SESSION['captcha_code']) && $_SESSION['captcha_code'] === $user_input) {
        unset($_SESSION['captcha_code']); // Invalidate used CAPTCHA
        return true;
    }
    return false;
}

// Function to generate CSRF token
function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Function to verify CSRF token
function verify_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Function to validate email format
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to limit request rate (basic rate limiting)
function rate_limit() {
    $max_requests = 10;
    $time_window = 60; // 60 seconds

    if (!isset($_SESSION['request_times'])) {
        $_SESSION['request_times'] = [];
    }

    // Remove old requests
    $_SESSION['request_times'] = array_filter($_SESSION['request_times'], function($timestamp) use ($time_window) {
        return $timestamp >= time() - $time_window;
    });

    // Check request rate
    if (count($_SESSION['request_times']) >= $max_requests) {
        return false;
    }

    // Add new request time
    $_SESSION['request_times'][] = time();
    return true;
}

// Function to check if the request is a POST request
function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

// Function to check the referrer header
function check_referrer() {
    if (!isset($_SERVER['HTTP_REFERER']) || parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) !== $_SERVER['HTTP_HOST']) {
        return false;
    }
    return true;
}

// Function to secure headers
function secure_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: DENY');
    header('X-XSS-Protection: 1; mode=block');
    header('Content-Security-Policy: default-src \'self\'; script-src \'self\' \'unsafe-inline\'; style-src \'self\' \'unsafe-inline\'; img-src \'self\' data:');
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
}

// Function to enforce HTTPS
function enforce_https() {
    if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
        header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        exit();
    }
}

// Secure headers
secure_headers();

// Enforce HTTPS
enforce_https();
?>
