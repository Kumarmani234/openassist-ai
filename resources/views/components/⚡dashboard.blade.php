<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="min-h-screen bg-gray-100">

    <!-- Sidebar + Content -->
    <div class="flex">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 min-h-screen text-white">

            <div class="p-5 text-xl font-bold">
                OpenAssist AI
            </div>


            <nav class="mt-5">

                <a href="#" 
                class="block px-5 py-3 hover:bg-gray-700">
                    Dashboard
                </a>

                <a href="#" 
                class="block px-5 py-3 hover:bg-gray-700">
                    AI Chat
                </a>


                <a href="#" 
                class="block px-5 py-3 hover:bg-gray-700">
                    Projects
                </a>


                <a href="#" 
                class="block px-5 py-3 hover:bg-gray-700">
                    Settings
                </a>

            </nav>

        </aside>



        <!-- Main Content -->

        <main class="flex-1 p-8">


            <h1 class="text-3xl font-bold mb-6">
                Dashboard
            </h1>



            <!-- Cards -->

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


                <div class="bg-white p-6 rounded shadow">

                    <h3 class="text-gray-500">
                        Total Chats
                    </h3>

                    <p class="text-3xl font-bold">
                        0
                    </p>

                </div>



                <div class="bg-white p-6 rounded shadow">

                    <h3 class="text-gray-500">
                        AI Models
                    </h3>

                    <p class="text-3xl font-bold">
                        0
                    </p>

                </div>




                <div class="bg-white p-6 rounded shadow">

                    <h3 class="text-gray-500">
                        Projects
                    </h3>

                    <p class="text-3xl font-bold">
                        0
                    </p>

                </div>


            </div>



            <!-- Welcome -->

            <div class="mt-8 bg-white p-6 rounded shadow">

                <h2 class="text-xl font-bold">
                    Welcome to OpenAssist AI
                </h2>


                <p class="text-gray-600 mt-2">

                    Your open-source AI SaaS platform.

                </p>


            </div>


        </main>


    </div>


</div>