<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'landing', [
    'faqs' => [
        [
            'question' => "What do I get for my SOL?",
            'answer' => "A beautiful, procedurally-generated snowflake non-fungible token (NFT).",
        ],
        [
            'question' => "Wait, what about the giveaway?",
            'answer' => "Yes, there's that as well. But you're buying the NFT. The giveaway participation is a nice bonus. Everyone minting gets the NFT, a few will also get the giveaway prize.",
        ],
        [
            'question' => "Do all 2500 NFTs need to be minted for the giveaway to start?",
            'answer' => "No, but there will be a minimum quota that will need to be reached. Details dropping soon.",
        ],
        [
            'question' => "Are there any restrictions for the giveaway?",
            'answer' => "Check our terms and conditions.",
        ],
        [
            'question' => "Is there a roadmap for utility beyond the mint and giveaway?",
            'answer' => "A lot of projects promise abstract utility, secondary tokens, and even metaverses. Very few properly deliver on those promises. We take pride in what we do, and take our promises and commitments seriously. Thus, right now, we're not promising more in advance. HOWEVER! Should the community end up being strong, positive, and vocal, decisions could be made about pushing this project beyond its original goals."
        ],
        [
            'question' => "How does the charity bit work?",
            'answer' => "After a certain cut-off date (TBD), 21% of the proceeds from the NFT sales will be distributed to three charities. 1. One charity will be chosen by the team. 2. One charity will be chosen by a golden snowflake holder (randomly chosen). 3. One charity will be chosen by the whole community. Each of three charities will receive an equal share of the charitable distribution, that is 7% each.",
        ],
        [
            'question' => "Will I be able to sell my NFT on a marketplace?",
            'answer' => "Yes. Though if you don't hold at least 1 NFT during the giveaway, you won't be participating.",
        ],
    ],
]);
Route::view('/terms', 'terms');
Route::view('/rarity', 'rarity', [
    'rarityGroups' => json_decode(file_get_contents(base_path('rarity.json'))),
]);
