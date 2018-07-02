<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit930e281c4016bc319c3259a9057c44cc
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'thiagoalessio\\TesseractOCR\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'thiagoalessio\\TesseractOCR\\' => 
        array (
            0 => __DIR__ . '/..' . '/thiagoalessio/tesseract_ocr/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit930e281c4016bc319c3259a9057c44cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit930e281c4016bc319c3259a9057c44cc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}