<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Contact Us Page</title>
    </head>
    <body>
        <header class="text-gray-600 body-font" style="background: #a6c4cb">
            <div
                class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
            >
                <a
                    href="index.php"
                    class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
                >
                    <img
                        src="images/Hub.png"
                        class="w-10 h-10 text-white bg-indigo-500 rounded-full"
                    />
                    <span class="ml-3 text-xl">Smile Hub</span>
                </a>
                <nav
                    class="md:ml-auto flex flex-wrap items-center text-base justify-center"
                >
                    <a
                        href="about-us.php"
                        class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        >About Us</a
                    >
                    <a
                        href="services.php"
                        class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        >Services</a
                    >
                    <a
                        href="pricing.php"
                        class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        >Pricing</a
                    >
                    <a
                        href="gallery.php"
                        class="px-4 py-2 mt-2 mr-4 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        >Gallery</a
                    >
                </nav>
                <a
                    href="contact-us.php"
                    class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
                >
                    Book a Free Appointment
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        class="w-4 h-4 ml-1"
                        viewBox="0 0 24 24"
                    >
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </header>

        <section class="text-gray-600 body-font relative">
            <div class="absolute inset-0 bg-gray-300">
                <iframe
                    width="100%"
                    height="100%"
                    frameborder="0"
                    marginheight="0"
                    marginwidth="0"
                    title="map"
                    scrolling="no"
                    src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                    style="filter: grayscale(1) contrast(1.2) opacity(0.4)"
                ></iframe>
            </div>
            <div class="container px-5 py-24 mx-auto flex">
                <div
                    class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md"
                >
                    <h2
                        class="text-gray-900 text-lg mb-1 font-medium title-font"
                    >
                        Contact Us
                    </h2>
                    <p class="leading-relaxed mb-5 text-gray-600">
                        Book an appintment to meet us without any hurdle.
                    </p>
                    <div class="relative mb-4">
                        <label
                            for="email"
                            class="leading-7 text-sm text-gray-600"
                            >Email</label
                        >
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        />
                    </div>
                    <div class="relative mb-4">
                        <label
                            for="Mobile"
                            class="leading-7 text-sm text-gray-600"
                            >mobile</label
                        >
                        <input
                            type="text"
                            id="Mobile"
                            name="mobile"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                        />
                    </div>
                    <div class="relative mb-4">
                        <label
                            for="message"
                            class="leading-7 text-sm text-gray-600"
                            >Message</label
                        >
                        <textarea
                            id="message"
                            name="message"
                            class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                        ></textarea>
                    </div>
                    <button
                        class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                    >
                        Button
                    </button>
                    <p class="text-xs text-gray-500 mt-3">
                        Chicharrones blog helvetica normcore iceland tousled
                        brook viral artisan.
                    </p>
                </div>
            </div>
        </section>

        <footer class="text-gray-600 body-font">
            <div
                class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col"
            >
                <a
                    class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
                        ></path>
                    </svg>
                    <span class="ml-3 text-xl">Smile Hub</span>
                </a>
                <p
                    class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"
                >
                    © 2022 Smile Hub —
                    <a
                        href="https://twitter.com/keerti6031"
                        class="text-gray-600 ml-1"
                        rel="noopener noreferrer"
                        target="_blank"
                        >@keerti6031</a
                    >
                </p>
                <span
                    class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start"
                >
                    <a class="text-gray-500">
                        <svg
                            fill="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="w-5 h-5"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"
                            ></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg
                            fill="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="w-5 h-5"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"
                            ></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            class="w-5 h-5"
                            viewBox="0 0 24 24"
                        >
                            <rect
                                width="20"
                                height="20"
                                x="2"
                                y="2"
                                rx="5"
                                ry="5"
                            ></rect>
                            <path
                                d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"
                            ></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg
                            fill="currentColor"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="0"
                            class="w-5 h-5"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"
                            ></path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </footer>
    </body>
</html>
