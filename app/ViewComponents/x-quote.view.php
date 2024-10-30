<x-component name="x-quote">
    <blockquote class="p-4 bg-[#1a2b30] rounded shadow-2xl mb-4">
        <x-slot/>
        <span :if="$author ?? null">
            — {{ $author }}
        </span>
    </blockquote>
</x-component>