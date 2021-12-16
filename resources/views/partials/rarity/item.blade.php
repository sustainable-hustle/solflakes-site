<div>
    <img
        src="{{ asset("images/rarity/thumbnails/" . Illuminate\Support\Str::kebab($group) . "-" . Illuminate\Support\Str::kebab($name) . ".png") }}"
        alt="{{ Illuminate\Support\Str::title($group) }} rarity with value {{ $name }} and chance {{ $rarity }}"
        class="rounded-lg"
    />
    <p class="mt-2 font-bold text-center text-gray-700 text-lg">{{ Illuminate\Support\Str::title($group) }}: {{ Illuminate\Support\Str::title($name) }}</p>
    <p class="text-center text-gray-600 text-sm">Rarity: {{ number_format($rarity * 100, 2) }}%</p>
</div>
