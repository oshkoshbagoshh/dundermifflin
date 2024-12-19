<template>
  <AppLayout>
    <Navbar />
    <HeroSection />
    <FeaturesSection />

<!--    TODO: CTA Section, Footer-->
    <CTASection />
    <Footer />
  </AppLayout>

</template>
<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Navbar from "@/Components/Navbar.vue";
import HeroSection from "@/Components/HeroSection.vue";
import FeaturesSection from "@/Components/FeaturesSection.vue";
</script>