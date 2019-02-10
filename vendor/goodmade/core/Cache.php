<?php

namespace goodmade;

//test @maincontroller кэшировать
class Cache{

    use TSingletone;

//создание кэша/ ключи/данные/ время хранения
    public function set($key, $data, $seconds = 3600){
        if ($seconds) {
            $content ['data'] = $data;
            $content ['end_time'] = time() + $seconds;
            //защита MD5 от вложения посторонних символов
            if (file_put_contents(CACHE . '/' . md5($key) . '.txt', serialize($content))) {
                return true;
            }
        }
        return false;
    }

    public function get($key){
        $file = CACHE . '/' . md5($key) . '.txt';
        if (file_exists($file)) {
            $content = unserialize(file_get_contents($file));
            //TODO проверка актуальности кэша(проверить время)
            if (time() <= $content['end_time']) {
                return $content['data'];
            }
            unlink($file);
        }
        return false;
    }

    public function delete($key){
        $file = CACHE . '/' . md5($key) . '.txt';
        if(file_exists($file)){
            unlink($file);
        }
    }
}
