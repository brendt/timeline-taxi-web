<?php

use function Tempest\uri;

?>
<x-component name="x-base">
    <html lang="en">
    <head>
        <title>Timeline Taxi</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="/main.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">

        <meta name="twitter:card" content="summary_large_image"/>
        <meta property="og:type" content="article">
        <meta name="twitter:creator" content="@brendt_gd"/>
        <meta name="twitter:title" content="Timeline Taxi — now available!">
        <meta name="title" content="Timeline Taxi — now available!">
        <meta property="og:title" content="Timeline Taxi — now available!">
        <meta itemprop="name" content="Timeline Taxi — now available!">
        <meta name="description" content="E-book and paperback versions are now available on Amazon!">
        <meta name="twitter:description" content="E-book and paperback versions are now available on Amazon!">
        <meta property="og:description" content="E-book and paperback versions are now available on Amazon!">
        <meta itemprop="description" content="E-book and paperback versions are now available on Amazon!">

        <meta property="og:image" content="<?= uri('/timeline-taxi-meta.jpg') ?>"/>
        <meta property="twitter:image" content="<?= uri('/timeline-taxi-meta.jpg') ?>"/>
        <meta name="image" content="<?= uri('/timeline-taxi-meta.jpg') ?>"/>
    </head>
    <body class="flex justify-center items-center bg-[#0a0f12] text-white">

    <x-slot/>

    </body>
    </html>
</x-component>