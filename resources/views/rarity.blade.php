@extends('layouts.main')

@section('meta_title', "Rarity Chart")

@section('content')
    <div class="max-w-screen-lg mx-auto py-24">
        <div class="prose lg:prose-xl mx-auto">
            <h1 class="text-center">Rarity Chart</h1>
            <p class="max-w-screen-md mx-auto text-center">
                Below we have compiled a list (and some pretty pictures) of all our rarities
                this will allow you to determine the rarity of your minted Solflake.
                Whilst each Solflake is procedurally generated, we randomly determine some of it's
                trait prior to generation and render, these traits are then used to build you own,
                unique, Solflake.
            </p>
        </div>

        @foreach($rarityGroups as $group => $rarities)
            <h2 class="mt-16 text-3xl font-bold mb-6 text-gray-800">{{ Illuminate\Support\Str::title($group) }}</h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-8">
                @foreach($rarities as $name => $rarity)
                    @include('partials.rarity.item', ['group' => $group, 'name' => $name, 'rarity' => $rarity])
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
