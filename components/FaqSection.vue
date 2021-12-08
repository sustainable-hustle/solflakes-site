<template>
  <div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto divide-y-2 divide-gray-200">
        <h2 class="text-center text-3xl font-extrabold text-gray-900 sm:text-4xl">
          Frequently asked questions
        </h2>
        <dl class="mt-6 space-y-6 divide-y divide-gray-200">
          <FaqItem v-for="(faq, key) in faqs" :key="key" :question="faq.question" :answer="faq.answer"></FaqItem>
        </dl>
      </div>
    </div>
  </div>
</template>

<script>
const faqs = [
  {
    question: "What do I get for my 1 SOL?",
    answer: "A beautiful, procedurally-generated snowflake non-fungible token (NFT).",
  },
  {
    question: "Wait, what about the giveaway?",
    answer: "Yes, there's that as well. But you're buying the NFT. The giveaway participation is a nice bonus. Everyone minting gets the NFT, a few will also get the giveaway prize.",
  },
  {
    question: "Do all 2500 NFTs need to be minted for the giveaway to start?",
    answer: "No, but there will be a minimum quota that will need to be reached. Details dropping soon.",
  },
  {
    question: "Are there any restrictions for the giveaway?",
    answer: "Check our terms and conditions.",
  },
  {
    question: "How does the charity bit work?",
    answer: "After a certain cut-off date (TBD), 21% of the proceeds from the NFT sales will be distributed to three charities. 1. One charity will be chosen by the team. 2. One charity will be chosen by a golden snowflake holder (randomly chosen). 3. One charity will be chosen by the whole community. Each of three charities will receive an equal share of the charitable distribution, that is 7% each.",
  },
  {
    question: "Will I be able to sell my NFT on a marketplace?",
    answer: "Yes. Though if you don't hold at least 1 NFT during the giveaway, you won't be participating.",
  },
  {
    question: "Is there a pre-sale, whitelist??",
    answer: "Sure is. Details coming shortly.",
  },
]

export default {
  data() {
    return {
      faqs,
    }
  },
}
</script>
