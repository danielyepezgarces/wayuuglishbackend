<?php
/**
 * Wayuuglish - MediaWiki Style i18n Message System
 * Loads JSON message files from /i18n/{lang}.json with fallback to English
 *
 * Copyright (C) 2026 Daniel Yepez Garces <danielyepezgarces>
 * Licensed under GNU GPLv3
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Wayuuglish_i18n {
    private static array $messages = [];
    private static string $currentLang = 'en';
    private static string $fallbackLang = 'en';
    private static array $supportedLangs = ['en', 'es'];

    /**
     * Initialize i18n system
     */
    public static function init(): void {
        $selectedLang = self::$fallbackLang;

        if (isset($_GET['lang']) && in_array($_GET['lang'], self::$supportedLangs, true)) {
            $selectedLang = $_GET['lang'];
            $_SESSION['lang'] = $selectedLang;
        } elseif (isset($_SESSION['lang']) && in_array($_SESSION['lang'], self::$supportedLangs, true)) {
            $selectedLang = $_SESSION['lang'];
        }

        self::$currentLang = $selectedLang;
        self::loadLanguage(self::$fallbackLang);
        if ($selectedLang !== self::$fallbackLang) {
            self::loadLanguage($selectedLang);
        }
    }

    /**
     * Load JSON message file from i18n directory
     */
    private static function loadLanguage(string $langCode): void {
        if (isset(self::$messages[$langCode])) {
            return;
        }

        $filePath = dirname(__DIR__) . "/i18n/{$langCode}.json";
        if (file_exists($filePath)) {
            $content = file_get_contents($filePath);
            $data = json_decode($content, true);
            if (is_array($data)) {
                // Remove @metadata if present
                unset($data['@metadata']);
                self::$messages[$langCode] = $data;
            }
        }
    }

    /**
     * Get current language code
     */
    public static function getLang(): string {
        return self::$currentLang;
    }

    /**
     * Fetch message by key with MediaWiki parameter interpolation ($1, $2, etc.)
     */
    public static function msg(string $key, ...$params): string {
        $msg = self::$messages[self::$currentLang][$key]
            ?? self::$messages[self::$fallbackLang][$key]
            ?? $key;

        if (!empty($params)) {
            foreach ($params as $index => $param) {
                $placeholder = '$' . ($index + 1);
                $msg = str_replace($placeholder, (string)$param, $msg);
            }
        }

        return $msg;
    }
}

// Auto-initialize i18n
Wayuuglish_i18n::init();
$lang = Wayuuglish_i18n::getLang();

/**
 * MediaWiki style global message helper: wfMessage()
 */
function wfMessage(string $key, ...$params): string {
    return Wayuuglish_i18n::msg($key, ...$params);
}

/**
 * Helper function __t()
 */
function __t(string $key, ...$params): string {
    return Wayuuglish_i18n::msg($key, ...$params);
}
