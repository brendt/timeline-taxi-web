<x-component name="x-quote">
    <blockquote class="p-4 bg-[#1a2b30] rounded shadow-2xl mb-4">
        <x-slot/>

        <a :if="($author ?? null)" href="<?= $href ?? '#' ?>" target="_blank" rel="noopener noreferrer">
            — {{ $author }}
        </a>
    </blockquote>
</x-component>