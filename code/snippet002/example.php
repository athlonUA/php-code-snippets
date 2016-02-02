<?php

/**
 * If you are old russian man, and you are using php version lower than 5.4,
 * you might be heard, when using the json_encode() function without
 * JSON_UNESCAPED_UNICODE option, you will receive out string like this:
 * "\u041f\u0440\u0438\u0432\u0435\u0442, \u041c\u0418\u0420!". To decode
 * it this function for you!
 *
 * @param $string
 *
 * @return string
 */
function escapeWin($string)
{
    $string = strtoupper($string);

    $alphabet = array("\U0430" => "а",
                      "\U0431" => "б",
                      "\U0432" => "в",
                      "\U0433" => "г",
                      "\U0434" => "д",
                      "\U0435" => "е",
                      "\U0451" => "ё",
                      "\U0436" => "ж",
                      "\U0437" => "з",
                      "\U0438" => "и",
                      "\U0439" => "й",
                      "\U043A" => "к",
                      "\U043B" => "л",
                      "\U043C" => "м",
                      "\U043D" => "н",
                      "\U043E" => "о",
                      "\U043F" => "п",
                      "\U0440" => "р",
                      "\U0441" => "с",
                      "\U0442" => "т",
                      "\U0443" => "у",
                      "\U0444" => "ф",
                      "\U0445" => "х",
                      "\U0446" => "ц",
                      "\U0447" => "ч",
                      "\U0448" => "ш",
                      "\U0449" => "щ",
                      "\U044A" => "ъ",
                      "\U044B" => "ы",
                      "\U044C" => "ь",
                      "\U044D" => "э",
                      "\U044E" => "ю",
                      "\U044F" => "я",
                      "\U0410" => "А",
                      "\U0411" => "Б",
                      "\U0412" => "В",
                      "\U0413" => "Г",
                      "\U0414" => "Д",
                      "\U0415" => "Е",
                      "\U0401" => "Ё",
                      "\U0416" => "Ж",
                      "\U0417" => "З",
                      "\U0418" => "И",
                      "\U0419" => "Й",
                      "\U041A" => "К",
                      "\U041B" => "Л",
                      "\U041C" => "М",
                      "\U041D" => "Н",
                      "\U041E" => "О",
                      "\U041F" => "П",
                      "\U0420" => "Р",
                      "\U0421" => "С",
                      "\U0422" => "Т",
                      "\U0423" => "У",
                      "\U0424" => "Ф",
                      "\U0425" => "Х",
                      "\U0426" => "Ц",
                      "\U0427" => "Ч",
                      "\U0428" => "Ш",
                      "\U0429" => "Щ",
                      "\U042A" => "Ъ",
                      "\U042B" => "Ы",
                      "\U042C" => "Ь",
                      "\U042D" => "Э",
                      "\U042E" => "Ю",
                      "\U042F" => "Я");

    return strtr($string, $alphabet);
}
