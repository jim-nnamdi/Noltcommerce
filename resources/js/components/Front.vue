<template>
    <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
    <div>
        <div class="relative bg-gray-100 overflow-hidden">
            <div class="max-w-screen-xl mx-auto">
                <div
                    class="relative z-10 pb-8 bg-gray-100 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32"
                >
                    <svg
                        class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                        fill="currentColor"
                        viewBox="0 0 100 100"
                        preserveAspectRatio="none"
                    >
                        <!-- <polygon points="50,0 100,0 50,100 0,100" /> -->
                    </svg>

                    <div class="relative pt-6 pb-5 px-4 sm:px-6 lg:px-8">
                        <nav
                            class="relative flex items-center justify-between sm:h-10 lg:justify-start"
                        >
                            <div
                                class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0"
                            >
                                <div
                                    class="flex items-center justify-between w-full md:w-auto"
                                >
                                    <a href="#" aria-label="Home">
                                        <img
                                            class="h-8 w-auto sm:h-10"
                                            :src="logo"
                                            alt="Logo"
                                        />
                                    </a>
                                    <div
                                        class="-mr-2 flex items-center md:hidden"
                                    >
                                        <button
                                            type="button"
                                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                            id="main-menu"
                                            aria-label="Main menu"
                                            aria-haspopup="true"
                                        >
                                            <svg
                                                class="h-6 w-6"
                                                @click="toggleNavbar()"
                                                stroke="currentColor"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                            >
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M4 6h16M4 12h16M4 18h16"
                                                />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden md:block md:ml-10 md:pr-4">
                                <a
                                    href="#"
                                    class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out"
                                    >Product</a
                                >
                                <a
                                    href="#"
                                    class="ml-8 font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out"
                                    >Features</a
                                >
                                <a
                                    href="#"
                                    class="ml-8 font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out"
                                    >Marketplace</a
                                >
                                <a
                                    href="#"
                                    class="ml-8 font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out"
                                    >Company</a
                                >
                                <a
                                    href="#"
                                    class="ml-8 font-medium text-teal-500 hover:text-teal-900 transition duration-150 ease-in-out"
                                    >Log in</a
                                >
                            </div>
                        </nav>
                    </div>

                    <!--
        Mobile menu, show/hide based on menu open state.

        Entering: "duration-150 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
                    <div></div>
                    <main
                        class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28"
                    >
                        <div class="sm:text-center lg:text-left">
                            <h3
                                class="text-3xl tracking-tight leading-10 font-bold text-gray-900 sm:text-5xl sm:leading-none md:text-5xl"
                            >
                                Nolt Laravel
                                <br class="xl:hidden" />
                                <span class="text-teal-500"> Ecommerce</span>
                            </h3>
                            <p
                                class="text-justify mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0"
                            >
                                Noltcommerce is a laravel package and tool which
                                enables developers to automatically setup
                                ecommerce systems and it comes scaffolded with
                                payment systems and integrations and core
                                adminstrative and user dashboards. Built with
                                laravel & vueJS and Tailwindcss.
                            </p>
                            <div
                                class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start"
                            >
                                <div class="rounded-md shadow">
                                    <a
                                        href="#"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-500 focus:outline-none focus:border-teal-700 focus:shadow-outline-teal transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10"
                                    >
                                        Get started
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a
                                        href="#"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-teal-700 bg-teal-100 hover:text-teal-500 hover:bg-teal-50 focus:outline-none focus:shadow-outline-teal focus:border-teal-500 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10"
                                    >
                                        Live demo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                <img
                    class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                    src="https://images.pexels.com/photos/1569076/pexels-photo-1569076.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                    alt=""
                />
            </div>
        </div>

        <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
        <div class="hidden sm:hidden">
            <div class="px-2 pt-2 pb-3">
                <a
                    href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                    >Dashboard</a
                >
                <a
                    href="#"
                    class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                    >Team</a
                >
                <a
                    href="#"
                    class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                    >Projects</a
                >
                <a
                    href="#"
                    class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out"
                    >Calendar</a
                >
            </div>
        </div>

        <!-- start product grid here --><!-- Container -->
        <br /><br />
        <div class="max-w-screen-xl mx-auto px-4">
            <!-- Grid wrapper -->
            <div class="-mx-4 flex flex-wrap">
                <!-- Grid column -->
                <div
                    class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3"
                    v-for="product in products"
                    v-bind:key="product.id"
                >
                    <!-- Column contents -->
                    <div
                        class="flex-1 px-10 py-12 bg-gray rounded-lg shadow-lg"
                    >
                        <!-- Card contents -->
                        <h4 class="text-4xl">
                            <b>{{ product.name }}</b>
                        </h4>
                        <hr />
                        <br />
                        <p class="text-justify">{{ product.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            products: [],
            errors: [],
            showMenu: false,
            logo: "/images/noltlogo.png",
        };
    },
    created() {
        this.loadProducts();
    },
    methods: {
        loadProducts: function () {
            axios
                .get("/api/v1/products")
                .then((response) => {
                    this.products = response.data.data;
                })
                .catch((errors) => {
                    this.errors = console.log(errors);
                });
        },
        toggleNavbar: function () {
            this.showMenu = !this.showMenu;
        },
    },
};
</script>
