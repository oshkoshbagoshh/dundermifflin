<template>
  <AppLayout>
    <Navbar />
    <HeroSection />
    <FeaturesSection />
    <CTASection />
    <Footer />
  </AppLayout>

</template>
<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Navbar from "@/Components/Navbar.vue";
import HeroSection from "@/Components/HeroSection.vue";
import FeaturesSection from "@/Components/FeaturesSection.vue";
import CTASection from "@/Components/CTASection.vue";
import Footer from "@/Components/Footer.vue";

export default {
  components: {
    AppLayout,
    Navbar,
    HeroSection,
    FeaturesSection,
    CTASection,
    Footer
  }
}
</script>
<style scoped>
</style>