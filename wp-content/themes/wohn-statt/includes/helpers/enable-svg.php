<?php
  add_filter( 'upload_mimes', 'svg_upload_allow' );
  
  function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    return $mimes;
  }

  add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

  function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
      $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    }
    else {
      $dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
    }

    if( $dosvg ){
      if( current_user_can('manage_options') ){
        $data['ext']  = 'svg';
        $data['type'] = 'image/svg+xml';
      }
      else {
        $data['ext']  = false;
        $data['type'] = false;
      }

    }

    return $data;
  }

  add_filter( 'wp_prepare_attachment_for_js', 'show_svg_in_media_library' );

  function show_svg_in_media_library( $response ) {
    if ( $response['mime'] === 'image/svg+xml' ) {
      $response['image'] = [
        'src' => $response['url'],
      ];
    }

    return $response;
  }

  add_theme_support('post-thumbnails');
