<?php
session_start();
class FleshMessages {

    public static function set_flash_message($name_flash_messages, $flash_messages) {
        $_SESSION[$name_flash_messages] = $flash_messages;
    }

    public static function display_flash_message($name_flash_messages, $kay_flash_messages){
        if (isset($_SESSION[$name_flash_messages])) {
            echo "<div class=\"alert alert-{$kay_flash_messages} text-dark\" role=\"alert\">{$_SESSION[$name_flash_messages]}</div>";
            self::unset_flash_message($name_flash_messages);
        }
    }

    public static function unset_flash_message($name_flash_messages){
        unset($_SESSION[$name_flash_messages]);
    }
}