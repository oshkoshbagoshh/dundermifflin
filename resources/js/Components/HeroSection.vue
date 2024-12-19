<template>
  <div class="relative bg-white pt-16 pb-32 overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block">{{ heroTitle }}</span>
              <span class="block text-blue-600">{{ heroSubtitle }}</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
              {{ heroDescription }}
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <Link
                    :href="route('register')"
                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10"
                >
                  Get Started
                </Link>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <Link
                    :href="route('about')"
                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-blue-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-10"
                >
                  Learn More
                </Link>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</template>
<script>
import {Link} from '@inertiajs/vue3'

export default {
  components: {Link},
  data() {
    return {
      heroTitle: 'Transform Your Business',
      heroSubtitle: 'With our Solutions',
      heroDescription: `We help businesses brow by providing innovative solutions that drive results.
           Join thousands of satisfied customers who have transformed their companies with us.`
    }
  }
}
</script>