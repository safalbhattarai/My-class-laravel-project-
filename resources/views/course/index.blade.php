<x-layout>
    <section>
        <div class="container py-16">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl">Courses</h1>

                <a href="/courses/create" class="bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700">
                    Add New
                </a>
            </div>

            <table class="w-full text-center border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 py-2">SN</th>
                        <th class="border border-gray-300 py-2">Name</th>
                        <th class="border border-gray-300 py-2">Price</th>
                        <th class="border border-gray-300 py-2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($courses as $course)
                    <tr>
                        <td class="border border-gray-300 py-2">{{$loop->iteration}}</td>
                        <td class="border border-gray-300 py-2">{{ $course->name }}</td>
                        <td class="border border-gray-300 py-2">Rs. {{ $course->price }}</td>
                        <td class="border border-gray-300 py-2">
                            <a href="#" class="text-blue-600">Edit</a>
                            <a href="#" class="text-red-600">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-layout>
