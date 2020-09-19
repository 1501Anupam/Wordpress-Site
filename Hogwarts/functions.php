<?php 

function university_files() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    // wp_enqueue_scripts('university-js', get_theme_file_uri('/js/scripts-bundled.js'),'some other script on which
    // it depends', 'version number', 'where to load true for before closing the body tag');
    wp_enqueue_script('university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true); 
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'university_files')

?>


<!-- In order to prevent caching of js and css use microtime() instaed of version number so that
it will append the time in the end and we get the files loaded each time -->