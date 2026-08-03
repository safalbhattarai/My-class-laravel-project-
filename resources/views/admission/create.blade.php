<x-layout>
    <section>
        <div class="container py-16">

            <div class="flex justify-between items-center mb-5">
                <h1 class="text-4xl">Admission Create</h1>

                <a href="/admission" class="bg-purple-600 text-white px-6 py-2 rounded-full">
                    Go Back
                </a>
            </div>

            <form action="/admission/save" method="POST">
                @csrf

                <div class="grid grid-cols-2 gap-6 mb-5">

                    <div>
                        <label for="name" class="block mb-2">Enter Your Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="border px-3 py-2 w-full rounded"
                            required>
                    </div>

                    <div>
                        <label for="email" class="block mb-2">Enter Your Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="border px-3 py-2 w-full rounded"
                            required>
                    </div>

                    <div>
                        <label for="course" class="block mb-2">Select Course</label>
                        <input
                            type="text"
                            name="course"
                            id="course"
                            class="border px-3 py-2 w-full rounded"
                            required>
                    </div>

                </div>

                <button
                    type="submit"
                    class="bg-green-600 text-white px-5 py-2 rounded-md">
                    Save Record
                </button>

            </form>

        </div>
    </section>
</x-layout>
