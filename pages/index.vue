<template>
  <div class="antialiased font-sans flex h-screen w-screen flex-col bg-gray-50">
    <Header />
    <main class="flex-grow">
      <Hero/>
      <Stats/>
      <Team/>
      <FaqSection/>
    </main>
    <Footer />
  </div>
</template>

<script>
import Header from "../components/Header";
import Hero from "../components/Hero";
import Stats from "../components/Stats";
import Team from "../components/Team";
import FaqSection from "../components/FaqSection";
import Footer from "../components/Footer";
export default {
  components: {Header, Hero, Stats, Team, FaqSection, Footer},
  head () {
    return {
      script: [
        {
          hid: 'snowflakes',
          src: 'https://unpkg.com/magic-snowflakes/dist/snowflakes.min.js',
          defer: true,
          // Changed after script load
          callback: () => { new Snowflakes() }
        }
      ]
    }
  }
}
</script>
