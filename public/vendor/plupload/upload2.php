<?php

function slug($string, $replacement = '_')
{
	$_transliteration = array(
	
		// Default map of accented and special characters to ASCII characters
		'/ä|æ|ǽ/' => 'ae',
		'/ö|œ/' => 'oe',
		'/ü/' => 'ue',
		'/Ä/' => 'Ae',
		'/Ü/' => 'Ue',
		'/Ö/' => 'Oe',
		'/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ/' => 'A',
		'/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª/' => 'a',
		'/Ç|Ć|Ĉ|Ċ|Č/' => 'C',
		'/ç|ć|ĉ|ċ|č/' => 'c',
		'/Ð|Ď|Đ/' => 'D',
		'/ð|ď|đ/' => 'd',
		'/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě/' => 'E',
		'/è|é|ê|ë|ē|ĕ|ė|ę|ě/' => 'e',
		'/Ĝ|Ğ|Ġ|Ģ/' => 'G',
		'/ĝ|ğ|ġ|ģ/' => 'g',
		'/Ĥ|Ħ/' => 'H',
		'/ĥ|ħ/' => 'h',
		'/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ/' => 'I',
		'/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı/' => 'i',
		'/Ĵ/' => 'J',
		'/ĵ/' => 'j',
		'/Ķ/' => 'K',
		'/ķ/' => 'k',
		'/Ĺ|Ļ|Ľ|Ŀ|Ł/' => 'L',
		'/ĺ|ļ|ľ|ŀ|ł/' => 'l',
		'/Ñ|Ń|Ņ|Ň/' => 'N',
		'/ñ|ń|ņ|ň|ŉ/' => 'n',
		'/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ/' => 'O',
		'/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º/' => 'o',
		'/Ŕ|Ŗ|Ř/' => 'R',
		'/ŕ|ŗ|ř/' => 'r',
		'/Ś|Ŝ|Ş|Š/' => 'S',
		'/ś|ŝ|ş|š|ſ/' => 's',
		'/Ţ|Ť|Ŧ/' => 'T',
		'/ţ|ť|ŧ/' => 't',
		'/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ/' => 'U',
		'/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ/' => 'u',
		'/Ý|Ÿ|Ŷ/' => 'Y',
		'/ý|ÿ|ŷ/' => 'y',
		'/Ŵ/' => 'W',
		'/ŵ/' => 'w',
		'/Ź|Ż|Ž/' => 'Z',
		'/ź|ż|ž/' => 'z',
		'/Æ|Ǽ/' => 'AE',
		'/ß/'=> 'ss',
		'/Ĳ/' => 'IJ',
		'/ĳ/' => 'ij',
		'/Œ/' => 'OE',
		'/ƒ/' => 'f',
			
		// Decompositions for Latin Extended-A
		'/'.chr(196).chr(184).'/' => 'k',
		'/'.chr(197).chr(138).'/' => 'N',
		'/'.chr(197).chr(139).'/' => 'n',
	
		// Russian symbols (ISO 9-95)
		'/'.chr(208).chr(128).'/' => 'E',	//	Ѐ	CYRILLIC CAPITAL LETTER IE WITH GRAVE
		'/'.chr(208).chr(129).'/' => 'YO',
		'/'.chr(208).chr(132).'/' => 'E',
		'/'.chr(208).chr(134).'/' => 'I',
		'/'.chr(208).chr(135).'/' => 'YI',
		'/'.chr(208).chr(144).'/' => 'A',
		'/'.chr(208).chr(145).'/' => 'B',
		'/'.chr(208).chr(146).'/' => 'V',
		'/'.chr(208).chr(147).'/' => 'G',
		'/'.chr(208).chr(148).'/' => 'D',
		'/'.chr(208).chr(149).'/' => 'E',
		'/'.chr(208).chr(150).'/' => 'ZH',
		'/'.chr(208).chr(151).'/' => 'Z',
		'/'.chr(208).chr(152).'/' => 'I',
		'/'.chr(208).chr(153).'/' => 'Y',
		'/'.chr(208).chr(154).'/' => 'K',
		'/'.chr(208).chr(155).'/' => 'L',
		'/'.chr(208).chr(156).'/' => 'M',
		'/'.chr(208).chr(157).'/' => 'N',
		'/'.chr(208).chr(158).'/' => 'O',
		'/'.chr(208).chr(159).'/' => 'P',
		'/'.chr(208).chr(160).'/' => 'R',
		'/'.chr(208).chr(161).'/' => 'S',
		'/'.chr(208).chr(162).'/' => 'T',
		'/'.chr(208).chr(163).'/' => 'U',
		'/'.chr(208).chr(164).'/' => 'F',
		'/'.chr(208).chr(165).'/' => 'H',
		'/'.chr(208).chr(166).'/' => 'TS',
		'/'.chr(208).chr(167).'/' => 'CH',
		'/'.chr(208).chr(168).'/' => 'SH',
		'/'.chr(208).chr(169).'/' => 'SCH',
		'/'.chr(208).chr(170).'/' => '',	//	Ъ	CYRILLIC CAPITAL LETTER HARD SIGN
		'/'.chr(208).chr(171).'/' => 'YI',
		'/'.chr(208).chr(172).'/' => '',	//	Ь	CYRILLIC CAPITAL LETTER SOFT SIGN
		'/'.chr(208).chr(173).'/' => 'E',
		'/'.chr(208).chr(174).'/' => 'YU',
		'/'.chr(208).chr(175).'/' => 'YA',
		'/'.chr(208).chr(176).'/' => 'a',
		'/'.chr(208).chr(177).'/' => 'b',
		'/'.chr(208).chr(178).'/' => 'v',
		'/'.chr(208).chr(179).'/' => 'g',
		'/'.chr(208).chr(180).'/' => 'd',
		'/'.chr(208).chr(181).'/' => 'e',
		'/'.chr(208).chr(182).'/' => 'zh',
		'/'.chr(208).chr(183).'/' => 'z',
		'/'.chr(208).chr(184).'/' => 'i',
		'/'.chr(208).chr(185).'/' => 'y',
		'/'.chr(208).chr(186).'/' => 'k',
		'/'.chr(208).chr(187).'/' => 'l',
		'/'.chr(208).chr(188).'/' => 'm',
		'/'.chr(208).chr(189).'/' => 'n',
		'/'.chr(208).chr(190).'/' => 'o',
		'/'.chr(208).chr(191).'/' => 'p',
		'/'.chr(209).chr(128).'/' => 'r',
		'/'.chr(209).chr(129).'/' => 's',
		'/'.chr(209).chr(130).'/' => 't',
		'/'.chr(209).chr(131).'/' => 'u',
		'/'.chr(209).chr(132).'/' => 'f',
		'/'.chr(209).chr(133).'/' => 'h',
		'/'.chr(209).chr(134).'/' => 'ts',
		'/'.chr(209).chr(135).'/' => 'ch',
		'/'.chr(209).chr(136).'/' => 'sh',
		'/'.chr(209).chr(137).'/' => 'sch',
		'/'.chr(209).chr(138).'/' => '',	//	ъ	CYRILLIC SMALL LETTER HARD SIGN
		'/'.chr(209).chr(139).'/' => 'yi',
		'/'.chr(209).chr(140).'/' => '',	//	ь	CYRILLIC SMALL LETTER SOFT SIGN
		'/'.chr(209).chr(141).'/' => 'e',
		'/'.chr(209).chr(142).'/' => 'yu',
		'/'.chr(209).chr(143).'/' => 'ya',
		'/'.chr(209).chr(144).'/' => 'e',	//	ѐ	CYRILLIC SMALL LETTER IE WITH GRAVE
		'/'.chr(209).chr(145).'/' => 'yo',
		'/'.chr(209).chr(148).'/' => 'e',
		'/'.chr(209).chr(150).'/' => 'i',
		'/'.chr(209).chr(151).'/' => 'yi',
		'/'.chr(210).chr(144).'/' => 'G',
		'/'.chr(210).chr(145).'/' => 'g',
	
		// Euro Sign
		'/'.chr(226).chr(130).chr(172).'/' => 'E'
	);
	
	$quotedReplacement = preg_quote($replacement, '/');
	
	$merge = array(
		'/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
		'/\\s+/' => $replacement,
		sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
	);
	$map = $_transliteration + $merge;
	return strtolower(preg_replace(array_keys($map), array_values($map), $string));
}

/**
 * upload.php
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under GPL License.
 *
 * License: http://www.plupload.com/license
 * Contributing: http://www.plupload.com/contributing
 */

// HTTP headers for no cache etc
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Settings
$targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
//$targetDir = 'uploads';

$cleanupTargetDir = true; // Remove old files
$maxFileAge = 5 * 3600; // Temp file age in seconds

// 5 minutes execution time
@set_time_limit(5 * 60);

// Uncomment this one to fake upload time
// usleep(5000);

// Get parameters
$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
$fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

//$handle = fopen($targetDir . DIRECTORY_SEPARATOR . 'log.txt', 'w');
//fwrite($handle, $_FILES);


//	====================================================================
//	Clean the fileName for security reasons: start

	$extPos       = strrpos($fileName, '.');
	$ext          = substr($fileName, $extPos);
	$fileNameBase = substr($fileName, 0, $extPos);
	$fileName     = slug($fileNameBase) . $ext;
	unset($extPos, $ext, $fileNameBase);

//	Clean the fileName for security reasons: end
//	====================================================================


// Make sure the fileName is unique but only if chunking is disabled
if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName)) {
	$ext = strrpos($fileName, '.');
	$fileName_a = substr($fileName, 0, $ext);
	$fileName_b = substr($fileName, $ext);

	$count = 1;
	while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
		$count++;

	$fileName = $fileName_a . '_' . $count . $fileName_b;
}



$filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

// Create target dir
if (!file_exists($targetDir))
	@mkdir($targetDir);

// Remove old temp files	
if ($cleanupTargetDir) {
	if (is_dir($targetDir) && ($dir = opendir($targetDir))) {
		while (($file = readdir($dir)) !== false) {
			$tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

			// Remove temp file if it is older than the max age and is not the current file
			if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge) && ($tmpfilePath != "{$filePath}.part")) {
				@unlink($tmpfilePath);
			}
		}
		closedir($dir);
	} else {
		die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory'.($_SERVER['REMOTE_ADDR'] == '80.233.141.157' ? ': '.$targetDir : '').'."}, "id" : "id"}');
	}
}	

// Look for the content type header
if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
	$contentType = $_SERVER["HTTP_CONTENT_TYPE"];

if (isset($_SERVER["CONTENT_TYPE"]))
	$contentType = $_SERVER["CONTENT_TYPE"];

// Handle non multipart uploads older WebKit versions didn't support multipart in HTML5
if (strpos($contentType, "multipart") !== false) {
	if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
		// Open temp file
		$out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
		if ($out) {
			// Read binary input stream and append it to temp file
			$in = @fopen($_FILES['file']['tmp_name'], "rb");

			if ($in) {
				while ($buff = fread($in, 4096))
					fwrite($out, $buff);
			} else
				die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
			@fclose($in);
			@fclose($out);
			@unlink($_FILES['file']['tmp_name']);
		} else
			die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
	} else
		die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
} else {
	// Open temp file
	$out = @fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
	if ($out) {
		// Read binary input stream and append it to temp file
		$in = @fopen("php://input", "rb");

		if ($in) {
			while ($buff = fread($in, 4096))
				fwrite($out, $buff);
		} else
			die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

		@fclose($in);
		@fclose($out);
	} else
		die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
}

// Check if file has been uploaded
if (!$chunks || $chunk == $chunks - 1) {
	// Strip the temp .part suffix off 
	rename("{$filePath}.part", $filePath);
}

die('{"jsonrpc" : "2.0", "result" : null, "id" : "id", "fileName" : "'.$fileName.'"}');