<?php

function NextStage_files()
{
    wp_enqueue_script('main-NextStage-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('NextStage_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('NextStage_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'NextStage_files');

function NextStage_features()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'NextStage_features');
