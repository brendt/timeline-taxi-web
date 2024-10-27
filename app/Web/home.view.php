<?php

use function Tempest\uri;

?>
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

<div class="grid gap-4 max-w-[600px] p-4">
    <h1 class="text-5xl font-bold">Timeline Taxi</h1>

    <div class="p-2 grid md:gap-16 gap-8">
        <p>A throbbing pain wakes me up as it shoots from my lower arm up to my shoulder. My first instinct is to reach for whatever’s hurting my arm, but I recover fast enough to know that I shouldn’t. It’s been centuries since the invention of deep sleep, yet we still need pain stimuli to wake from it. Why no one has bothered to come up with a better way than shooting electroshocks through an arm is beyond me. I turn right and Mr. Tunaki is still strapped in firmly, deep asleep. Just the way I left him. I turn to the dashboard in front of me; both our vitals are good. Speed is nominal, 99.995% c. We’re two days worth of travel time out from Earth. All is good. I remove the probe from my arm as I stare into the blueshifted space in front of me. <br>Just the way I left it.</p>

        <a class="text-center grid gap-4 underline hover:no-underline" href="/buy">
            <div class="md:px-32">
                <img src="/timeline-taxi-cover.jpg" alt="The book cover of Timeline Taxi" class="shadow-lg">
            </div>
            <span>Buy now on Amazon</span>
        </a>
    </div>

    <div class="text-center text-sm md:my-16">
        &copy; Brent Roose <?= date('Y') ?>
    </div>
</div>


</body>
</html>