<?php
/** @var \App\Analytics\VisitsPerDayPerPage[] $visitsPerDayPerPage */
?>

<x-base>

    <div class="grid gap-4 max-w-[600px] p-4">
        <h1 class="text-5xl font-bold">Timeline Taxi Stats</h1>


        <table class="table-fixed">
            <?php foreach ($visitsPerDayPerPage as $visit): ?>
                <tr>
                    <td class="font-bold">{{ $visit->date->format('Y-m-d') }}</td>
                    <td>{{ $visit->uri }}</td>
                    <td>{{ $visit->visits }}</td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

</x-base>