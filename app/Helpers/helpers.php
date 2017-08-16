<?php

/**
* Return sizes readable by humans
*/
function human_filesize($bytes, $decimals = 2)
{
    $size = ['B', 'kB', 'MB', 'GB', 'TB', 'PB'];
    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) .
    @$size[$factor];
}

/**
* Is the mime type an image
*/
function is_image($mimeType)
{
    return starts_with($mimeType, 'image/');
}

/**
* Return "checked" if true
*/
function checked($value)
{
    return $value ? 'checked' : '';
}

/**
* Return img url for headers
*/
function page_image($value = null)
{
    if (empty($value)) {
        $value = config('blog.page_image');
    }
    if (! starts_with($value, 'http') && $value[0] !== '/') {
        $value = config('blog.uploads.webpath') . '/' . $value;
    }

    return $value;
}

/**
* @param integer $number, string nullable $locale
* @return string formatted number
*/
function formattingNumber($number, $locale = null)
{
    return number_format($number, 0, ',', '.');
}

/**
* @param $string string of sentence
*	$limit number of words limit
* @return string of truncated text
*/
function getWords($string, $limit) {
	$text = $string;
	if (str_word_count($string, 0) > $limit) {
	  $words = str_word_count($string, 2);
	  $pos = array_keys($words);
	  $text = substr($string, 0, $pos[$limit]);
	}
	return $text;
}
