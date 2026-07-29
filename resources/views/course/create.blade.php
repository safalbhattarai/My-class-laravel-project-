<x-layout>
    <section>
        <div class="container py-16">
           <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl">Courses create</h1>
                <a href="/course/create" class="bg-purple-600 text-white px-6 py-2 rounded-full">
                    go back
                </a>
            </div>
            <form action="/save-course" method="post">
              @csrf

{{--
                <label for="name">Enter your name</label>
                <input type="text" name="name" id="name" value="Safal" class="border px-1 py-2 w-full" required>

                <label for="age">Enter your age</label>
                <input type="number" name="age" id="age"placeholder="eg25" class="border px-1 py-2 w-full" required>

                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="border px-1 py-2 w-full" required>

                 <label for="time">Enter Time</label>
                <input type="time" name="" id="time" class="border px-1 py-2 w-full">

                <label for="email">Enter your Email</label>
                <input type="email" name="" id="email" class="border px-1 py-2 w-full">

                <label for="password">Enter your Password</label>
                <input type="password" name="" id="password" class="border px-1 py-2 w-full">

                <label for="course">Select Course</label>
                <select name="course" id="course" class="border px-1 py-2 w-full">
                    <option value="laravel">Laravel</option>
                    <option value="react">React</option>
                    <option value=" Node">Node</option>
                </select> --}}

                <div class="grid grid-cols-2 gap-6" >

                     <div>
                        <label for="Course_name">Course Name</label>
                        <input type="text" name="course name" id="course_name" class="border px-1 py-2 w-full" >

                    </div>
                     <div>
                        <label for="price">Course price</label>
                        <input type="number" name="price" id="price" class="border px-1 py-2 w-full" >

                    </div>
                    <div class="col-span-2">
                        <label for="description">Course Description</label>
                        {{-- <input type="number" name="price" id="price" class="border px-1 py-2 w-full" > --}}
                        <textarea name="description" id="description"  rows="4" class="border px-1 py-2 w-full"></textarea>

                    </div>
                </div>

                <button type="submit" class="bg-[green] px-5 py2 rounded-md tex-white">
                    Save Record
                </button>

            </form>

        </div>
    </section>
</x-layout>
