<template>
  <div class="antialiased font-sans flex h-screen w-screen flex-col bg-gray-50">
    <Header />
    <main class="flex-grow prose py-12">
      <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <p>terms terms terms</p>
      </div>
    </main>
    <Footer />
  </div>
</template>

<script>
import Header from "../components/Header";
import Stats from "../components/Stats";
import Team from "../components/Team";
import FaqSection from "../components/FaqSection";
import Footer from "../components/Footer";
export default {
  components: {Header, Stats, Team, FaqSection, Footer}
}
</script>
