<script>
import {LightningBoltIcon, ChartBarIcon, SupportIcon} from '@heroicons/vue/outline'

export default {
  components: {
    LightningBoltIcon,
    ChartBarIcon,
    SupportIcon
  },
  data() {
    return {
      features: [
        {
          id: 1,
          icon: 'LightningBoltIcon',
          title: 'Fast Performance',
          description: 'Lightning fast solutions that keep your business running efficiently.'
        },
        {
          id: 2,
          icon: 'ChartBarIcon',
          title: 'Smart Analytics',
          description: 'Detailed insights and analytics to make informed decisions.'
        },
        {
          id: 3,
          icon: 'SupportIcon',
          title: '24 / 7 Support ',
          description: 'Round-the-clock support to help you whenever you need it.'
        }

      ]
    }
  }
}
</script>

<template>
  <div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">
          Features
        </h2>
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          Everything you need to succeed
        </p>
      </div>

      <div class="mt-10">
        <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
          <div
              v-for="feature in features"
              :key="feature.id"
              class="relative"
          >
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-blue-600 text-white">
              <component :is="feature.icon" class="h-6 w-6"/>
            </div>
            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">
              {{ feature.title }}
            </p>
            <p class="mt-2 ml-16 text-base text-gray-500">
              {{ feature.description }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>