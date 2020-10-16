<?php
/**
 * Arkhe用子テーマ用 function.php
 */
defined( 'ABSPATH' ) || exit;


/**
 * 子テーマのパス, URI
 */
define( 'ARKHE_CHILD_PATH', get_stylesheet_directory() );
define( 'ARKHE_CHILD_URI', get_stylesheet_directory_uri() );


/**
 * style.css 読み込み
 */
add_action( 'wp_enqueue_scripts', function() {
	$time_stamp = date('mdgis');

	// フロント用のスタイル
	wp_enqueue_style( 'arkhe-child-style', ARKHE_CHILD_URI . '/style.css', [], $time_stamp );

	// フロント & エディター共通のスタイル
	wp_enqueue_style( 'arkhe-child-common', ARKHE_CHILD_URI . '/assets/css/common.css', [], LMFFG_VERSION );
} );

/**
 * エディター用のファイルを読み込む
 */
add_action( 'enqueue_block_editor_assets', function() {

	$time_stamp = date('mdgis');

	// フロント & エディター共通のスタイル
	wp_enqueue_style( 'arkhe-child-common', ARKHE_CHILD_URI . '/css/common.css', [], $time_stamp );

	// エディター用のスタイル
	wp_enqueue_style( 'arkhe-child-editor', ARKHE_CHILD_URI . '/css/editor.css', [], $time_stamp );

	// エディター用のスクリプト
	wp_enqueue_script( 'arkhe-child-editor-script', ARKHE_CHILD_URI . '/js/editor.js', [], $time_stamp, true );

}, 20 );