<?php
// Do not edit this file.  Edit config-user.php instead.
//
$config_event_count = 16;

$n_columns = 4;
$name_style = "short";
$n_video_scroll_pixels = 380;
$n_still_scroll_pixels = 300;

$default_text_color = "black";
$selected_text_color = "#500808";
$media_text_color = "#0000EE";
$manual_video_text_color = "#085008";

$n_thumb_scroll_pixels = 770;

$n_log_scroll_pixels = 770;
$log_text_color = "black";

$background_image = "images/paper1.png";

$archive_initial_view = "thumbs";
$archive_thumbs_scrolled = "yes";
$media_thumbs_scrolled = "yes";

$include_control = "no";

function config_user_save()
	{
	global $n_video_scroll_pixels, $n_still_scroll_pixels, $n_columns, $name_style;
	global $default_text_color, $selected_text_color, $media_text_color, $manual_video_text_color;
	global $n_log_scroll_pixels, $log_text_color, $n_thumb_scroll_pixels, $background_image;
	global $config_event_count, $include_control;
	global $archive_initial_view, $archive_thumbs_scrolled, $media_thumbs_scrolled;

	$file = fopen("config-user.php", "w");
	fwrite($file, "<?php\n");
	fwrite($file, "// If this file is edited, reload web pages to see the results.\n");
	fwrite($file, "// Especially reload the Videos web page, otherwise the changes can be\n");
	fwrite($file, "// overwritten if you change Columns or Names on that page before reloading.\n");
	fwrite($file, "//\n");
	fwrite($file, "// NAME_STYLE and N_COLUMNS can be changed with the Videos page buttons.\n");
	fwrite($file, "// The remaining defines here are changed by editing this file.\n");
	fwrite($file, "// Change xxx_SCROLL_PIXELS to customize scroll window heights to your\n");
	fwrite($file, "// usual browser window height.\n");
	fwrite($file, "// DEFAULT_TEXT_COLOR applies to miscellaneous web page text.\n");
	fwrite($file, "// MEDIA_TEXT_COLOR applies to motion video and still filenames.\n");
	fwrite($file, "//\n");
	fwrite($file, "define(\"NAME_STYLE\", \"$name_style\");\n");
	fwrite($file, "define(\"N_COLUMNS\", \"$n_columns\");\n");
	fwrite($file, "\n");
	fwrite($file, "define(\"N_VIDEO_SCROLL_PIXELS\", \"$n_video_scroll_pixels\");\n");
	fwrite($file, "define(\"N_STILL_SCROLL_PIXELS\", \"$n_still_scroll_pixels\");\n");
	fwrite($file, "\n");
	fwrite($file, "define(\"DEFAULT_TEXT_COLOR\", \"$default_text_color\");\n");
	fwrite($file, "define(\"SELECTED_TEXT_COLOR\", \"$selected_text_color\");\n");
	fwrite($file, "define(\"MEDIA_TEXT_COLOR\", \"$media_text_color\");\n");
	fwrite($file, "define(\"MANUAL_VIDEO_TEXT_COLOR\", \"$manual_video_text_color\");\n");
	fwrite($file, "\n");
	fwrite($file, "define(\"ARCHIVE_INITIAL_VIEW\", \"$archive_initial_view\");\n");
	fwrite($file, "define(\"ARCHIVE_THUMBS_SCROLLED\", \"$archive_thumbs_scrolled\");\n");
	fwrite($file, "define(\"MEDIA_THUMBS_SCROLLED\", \"$media_thumbs_scrolled\");\n");
	fwrite($file, "\n");
	fwrite($file, "define(\"N_THUMB_SCROLL_PIXELS\", \"$n_thumb_scroll_pixels\");\n");
	fwrite($file, "\n");
	fwrite($file, "define(\"N_LOG_SCROLL_PIXELS\", \"$n_log_scroll_pixels\");\n");
	fwrite($file, "define(\"LOG_TEXT_COLOR\", \"$log_text_color\");\n");
	fwrite($file, "\n");
	fwrite($file, "// For backgrounds, use shadow.jpg, paper1.png or passion.jpg\n");
	fwrite($file, "// in the images directory.  Or install your own background in the\n");
	fwrite($file, "// images directory and name it bg_XXX.jpg (or .png) so git will ignore it.\n");
	fwrite($file, "//\n");
	fwrite($file, "define(\"BACKGROUND_IMAGE\", \"$background_image\");\n");
	fwrite($file, "// PiKrellCam controls in development.  Set to \"yes\" to see mock up.\n");
	fwrite($file, "// User custom controls can be implemented in custom-control.php.\n");
	fwrite($file, "//\n");
	fwrite($file, "define(\"INCLUDE_CONTROL\", \"$include_control\");\n");
	fwrite($file, "\n");
	fwrite($file, "// Do not edit this value..\n");
	fwrite($file, "define(\"CONFIG_EVENT_COUNT\", \"$config_event_count\");\n");
	fwrite($file, "?>\n");
	fclose($file);
	chmod("config-user.php", 0666);
	}

if (file_exists("config-media.php"))
	{
	include_once(dirname(__FILE__) . '/config-media.php');
	unlink("config-media.php");
	}

if (defined('N_COLUMNS'))
    $n_columns = N_COLUMNS;
if (defined('NAME_STYLE'))
    $name_style = NAME_STYLE;

//echo "<script type='text/javascript'>alert('cdef: $name_style $n_columns');</script>";

if (defined('N_VIDEO_SCROLL_PIXELS'))
    $n_video_scroll_pixels = N_VIDEO_SCROLL_PIXELS;
if (defined('N_STILL_SCROLL_PIXELS'))
    $n_still_scroll_pixels = N_STILL_SCROLL_PIXELS;

if (defined('DEFAULT_TEXT_COLOR'))
    $default_text_color = DEFAULT_TEXT_COLOR;
if (defined('SELECTED_TEXT_COLOR'))
    $selected_text_color = SELECTED_TEXT_COLOR;
if (defined('MEDIA_TEXT_COLOR'))
    $media_text_color = MEDIA_TEXT_COLOR;
if (defined('MANUAL_VIDEO_TEXT_COLOR'))
    $manual_video_text_color = MANUAL_VIDEO_TEXT_COLOR;

if (defined('ARCHIVE_INITIAL_VIEW'))
    $archive_initial_view = ARCHIVE_INITIAL_VIEW;
if (defined('ARCHIVE_THUMBS_SCROLLED'))
    $archive_thumbs_scrolled = ARCHIVE_THUMBS_SCROLLED;
if (defined('MEDIA_THUMBS_SCROLLED'))
    $media_thumbs_scrolled = MEDIA_THUMBS_SCROLLED;
if (defined('N_THUMB_SCROLL_PIXELS'))
    $n_thumb_scroll_pixels = N_THUMB_SCROLL_PIXELS;

if (defined('N_LOG_SCROLL_PIXELS'))
    $n_log_scroll_pixels = N_LOG_SCROLL_PIXELS;
if (defined('LOG_TEXT_COLOR'))
    $log_text_color = LOG_TEXT_COLOR;

if (defined('BACKGROUND_IMAGE'))
    $background_image = BACKGROUND_IMAGE;

if (defined('INCLUDE_CONTROL'))
    $include_control = INCLUDE_CONTROL;

if (defined('CONFIG_EVENT_COUNT'))
	$old_event_count = CONFIG_EVENT_COUNT;
else
	$old_event_count = $config_event_count;

if (!file_exists("config-user.php") || $old_event_count != $config_event_count)
	config_user_save();

?>
