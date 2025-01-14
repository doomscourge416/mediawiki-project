<?php
$memcached = new Memcached();
$memcached->addServer('127.127.126.13', 11211);

$key = 'test_key';
$value = 'Hello, Memcached!';
$memcached->set($key, $value);

$result = $memcached->get($key);
if ($result) {
    echo "Memcached is working! Stored value: $result";
} else {
    echo "Ошибка подключения к Memcached.";
}
?>
