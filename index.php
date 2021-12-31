<?php
session_start();
require_once "../Component/component.php";

FleshMessages::set_flash_message('name', 'Hello!');
FleshMessages::display_flash_message('name', 'success');
