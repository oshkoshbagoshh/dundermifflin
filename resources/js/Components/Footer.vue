<script>
export default {
    name: "Footer",
};
</script>

<template>
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8 xl:col-span-1">
                    <span class="text-2xl font-bold text-white">Company</span>
                    <p class="text-gray-300 text-base">
                        Making the world a better place through innovative
                        solutions.
                    </p>
                    <div class="flex space-x-6">
                        <!-- Social Media Links -->
                        <a href="#" class="text-gray-400 hover:text-gray-300">
                            <span class="sr-only">Facebook</span>
                            <!-- Facebook Icon -->
                        </a>
                        <!-- Add more social media links as needed -->
                    </div>
                </div>
                <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3
                                class="text-sm font-semibold text-gray-400 tracking-wider uppercase"
                            >
                                Solutions
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a
                                        href="#"
                                        class="text-base text-gray-300 hover:text-white"
                                    >
                                        Marketing
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="text-base text-gray-300 hover:text-white"
                                    >
                                        Analytics
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="text-base text-gray-300 hover:text-white"
                                    >
                                        Commerce
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-12 md:mt-0">
                            <h3
                                class="text-sm font-semibold text-gray-400 tracking-wider uppercase"
                            >
                                Support
                            </h3>
                            <ul class="mt-4 space-y-4">
                                <li>
                                    <a
                                        href="#"
                                        class="text-base text-gray-300 hover:text-white"
                                    >
                                        Pricing
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="text-base text-gray-300 hover:text-white"
                                    >
                                        Documentation
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="text-base text-gray-300 hover:text-white"
                                    >
                                        Guides
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8">
                <p class="text-base text-gray-400 xl:text-center">
                    &copy; 2024 Company Name. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</template>

<style scoped></style>
