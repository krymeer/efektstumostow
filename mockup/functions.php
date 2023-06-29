<?php
function get_svg( $filename = '' )
{
    if( substr( $filename, -4 ) !== '.svg' )
    {
        $filename .= '.svg';
    }

    if( file_exists( $filename ) && mime_content_type( $filename ) === 'image/svg' )
    {
        $contents = file_get_contents( $filename );
    }

    return $contents ?? '';
}