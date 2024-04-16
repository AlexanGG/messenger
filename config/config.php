<?php

const HTTPS_LOGIN = "Alex00"; //Ваш логин для HTTPS-протокола
const HTTPS_PASSWORD = "qweasdzxc0008910"; //Ваш пароль для HTTPS-протокола
const HTTPS_ADDRESS = "https://lcab.smsprofi.ru/"; //HTTPS-Адрес, к которому будут обращаться скрипты. Со слэшем на конце.
const HTTP_ADDRESS = "http://lcab.smsprofi.ru/"; //HTTP-Адрес, к которому будут обращаться скрипты. Со слэшем на конце.
const HTTPS_METHOD = "curl"; //метод, которым отправляется запрос (curl или file_get_contents)
const USE_HTTPS = 1; //1 - использовать HTTPS-адрес, 0 - HTTP

//Класс попытается автоматически определить кодировку ваших скриптов.
//Если вы хотите задать ее сами в параметре HTTPS_CHARSET, то укажите HTTPS_CHARSET_AUTO_DETECT значение FALSE
const HTTPS_CHARSET_AUTO_DETECT = false;

const HTTPS_CHARSET = "utf-8"; //кодировка ваших скриптов. cp1251 - для Windows-1251, либо же utf-8 для, сообственно - utf-8 :)
