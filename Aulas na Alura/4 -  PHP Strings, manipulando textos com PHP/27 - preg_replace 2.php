<?php
$data = "2022-06-08";

echo preg_replace('/^([0-9]{4})-([0-9]{2})-([0-9]{2})/', '\3/\2/\1', $data);
