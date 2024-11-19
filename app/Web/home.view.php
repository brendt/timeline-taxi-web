<?php

use App\Web\BuyController;
use App\Web\BuyType;
use function Tempest\uri;

?>
<x-base>

<div class="grid gap-4 max-w-[600px] p-4">
    <h1 class="text-5xl font-bold mt-24 mb-2">Timeline Taxi</h1>

    <div class="p-4 bg-[#1a2b30] rounded shadow-2xl mb-4">
        Now available on <a href="<?= uri(BuyController::class, buyType: BuyType::APPLE->value)?>">Apple Books</a>, <a href="<?= uri(BuyController::class, buyType: BuyType::KOBO->value)?>">Kobo</a>, <a href="<?= uri(BuyController::class, buyType: BuyType::GOOGLE->value)?>">Google Play</a>, <a href="<?= uri(BuyController::class, buyType: BuyType::KINDLE->value)?>">Kindle</a> and <a href="<?= uri(BuyController::class, buyType: BuyType::AMAZON->value)?>">paperback</a>!
    </div>

    <div class="p-2 grid md:gap-16 gap-8">
        <div class="grid gap-4">
            <p>
                Doctor Jonathan Russel stands out indeed, dressed in a typical brown English raincoat, a hat, a small bag in one hand, and an umbrella — an umbrella of all things — in the other.
            </p>
            <p>
                “Where did you think you’d travel to?” I ask him.
            </p>
            <p>
                “Oh it was raining in the UK when I boarded the plane, I had almost no time to prepare, so here I am, but how about we skip the smalltalk?”
            </p>
            <p>
                We sit down, and he continues.
            </p>
            <p>
                “On the phone I told you I’m a doctor at the Sheffield Institute of Interspatial Communication. Have you heard of it?”
            </p>
            <p>
                I shake my head but let the doctor continue.
            </p>
            <p>
                “Naturally,” he replies. “The institute was founded five years ago, so it makes sense that you haven’t heard of it, I believe you were still travelling back then. At the Institute, we’re concerned with the study of long-distance space travel and communication; and, well, everything related to it. I particularly, am working on a study about possible ways of dealing with time dilation — a concept you’re fairly familiar with, I reckon; given that you’ve made it into your job.”
            </p>
            <p>
                I nod.
            </p>
            <p>
                “Now, part of my study involves a practical test, flying to a specific point in space, and back. I’m looking for a pilot.”
            </p>
            <p>
                I interrupt him. “Look, I just came back from a trip, and plan to stay for a year or two. If you want to, we can schedule a trip two years from now, but I’m sure you’ll find other taxis that are available to leave earlier.”
            </p>
            <p>
                “Well, here’s the problem. No one wants to take me.”
            </p>
        </div>

        <x-quote author="Marco" href="https://x.com/marcorieser/status/1851874619290014066">
            I just started reading the preview in Apple Books, and so far it's phenomenal! If you ever want to change careers, become a writer.
        </x-quote>

        <div class="text-center grid gap-4 underline hover:no-underline">
            <div class="md:px-32">
                <img src="/timeline-taxi-cover.jpg" alt="The book cover of Timeline Taxi" class="shadow-lg">
            </div>
        </div>


        <div class="p-4 bg-[#1a2b30] rounded shadow-2xl mb-4">
            Buy on <a href="<?= uri(BuyController::class, buyType: BuyType::APPLE->value)?>">Apple Books</a>, <a href="<?= uri(BuyController::class, buyType: BuyType::KOBO->value)?>">Kobo</a>, <a href="<?= uri(BuyController::class, buyType: BuyType::GOOGLE->value)?>">Google Play</a>, <a href="<?= uri(BuyController::class, buyType: BuyType::KINDLE->value)?>">Kindle</a> and <a href="<?= uri(BuyController::class, buyType: BuyType::AMAZON->value)?>">paperback</a>!
        </div>
    </div>

    <div class="text-center text-sm md:my-16 flex gap-2 justify-center">
        <span>&copy; Brent Roose <?= date('Y') ?></span>
        <span>—</span>
        <a href="mailto:brendt@stitcher.io">Contact Me</a>
    </div>
</div>

</x-base>