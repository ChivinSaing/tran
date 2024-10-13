<?php
session_start();

// Step 1: Define languages array
$languages = [
    'en' => 'English',
    'es' => 'Spanish',
    'fr' => 'French',
    'jp' => 'Japan',
];

// Step 3: Handle form submission and set language in session
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['language'] = $_POST['language'];
}

// Step 3: Get selected language from session (default to 'en')
$selectedLanguage = isset($_SESSION['language']) ? $_SESSION['language'] : 'en';

// Step 4: Translation arrays
$translations = [
    'en' => [
        'welcome' => 'Welcome',
        'thank_you' => 'Thank you',
        'goodbye' => 'Goodbye',
    ],
    'es' => [
        'welcome' => 'Bienvenido',
        'thank_you' => 'Gracias',
        'goodbye' => 'Adiós',
    ],
    'fr' => [
        'welcome' => 'Bienvenue',
        'thank_you' => 'Merci',
        'goodbye' => 'Au revoir',
    ],
    'jp' => [
        'welcome' => 'いらっしゃいませ！',
        'thank_you' => '当社のサイトをご覧いただきありがとうございます',
        'goodbye' => 'さようなら！',
    ],
];

// Fetch the translations for the current language
$currentTranslations = $translations[$selectedLanguage];
?>