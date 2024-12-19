<template>
  <nav class="bg-white shadow-lg fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between items-center h-16">
        <div class="flex-shrink-0">
        <span class="text-2xl font-bold text-blue-600">
          {{ companyName }}
        </span>
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-center space-x-4">
            <Link
                v-for="link in navLinks" :key="link.href" :href="link.href"
                class="text-gray-700 hover:text-blue600 px-3 py-2">
              {{ link.label }}
            </Link>
            <Link :href="route('register')"
                  class="bg-blue-600 text-white px-4 py-2 rounded-md">
              Get Started
            </Link>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>
import {Link} from "@inertiajs/vue3";

export default {
  components: {Link},
  data() {
    return {
      companyName: 'TechInnovate',
      navLinks: [
        {href: '/', label: 'Home'},
        {href: '/services', label: 'Services'},
        {href: '/about', label: 'About'},
        {href: '/contact', label: 'Contact'}
      ]
    }
  }
}
</script>