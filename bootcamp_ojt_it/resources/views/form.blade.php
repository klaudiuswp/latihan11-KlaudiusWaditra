<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Form') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("You're logged in!") }} -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Profile Image and Info -->
                        <div class="flex flex-col items-center md:items-start">
                            <img src="images.jpg" alt="Profile Image" class="w-32 h-32 rounded-full mb-4">
                            <h2 class="text-xl font-bold">Klaudius</h2>
                            <p class="text-gray-500">Back End</p>
                            <div class="flex space-x-4 mt-4">
                                <button class="bg-blue-500 text-white px-4 py-2 rounded">Kontak</button>
                                <button class="border border-green-500 text-green-500 px-4 py-2 rounded">Resume</button>
                            </div>
                        </div>

                        <div class="col-span-2">
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <p class="font-semibold">Availability:</p>
                                    <p class="text-gray-700">Internship</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Usia:</p>
                                    <p class="text-gray-700">20</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Lokasi:</p>
                                    <p class="text-gray-700">abc</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Pengalaman:</p>
                                    <p class="text-gray-700">abc</p>
                                </div>
                                <div>
                                    <p class="font-semibold">Email:</p>
                                    <p class="text-gray-700">abc</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mt-5 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form>
                        <div class="space-y-12">


                            <div class="col-span-full">
                                <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama" autocomplete="nama" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="role" class="block text-sm font-medium leading-6 text-gray-900">Role</label>
                                <div class="">
                                    <select id="role" name="role" autocomplete="role-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="availability" class="block text-sm font-medium leading-6 text-gray-900">Availability</label>
                                <div class="">
                                    <select id="availability" name="availability" autocomplete="availability-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="Age" class="block text-sm font-medium leading-6 text-gray-900">Age</label>
                                <div class="mt-2">
                                    <input type="text" name="Age" id="Age" autocomplete="Age" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="lokasi" class="block text-sm font-medium leading-6 text-gray-900">lokasi</label>
                                <div class="mt-2">
                                    <input type="text" name="lokasi" id="lokasi" autocomplete="lokasi" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="pengalaman" class="block text-sm font-medium leading-6 text-gray-900">pengalaman</label>
                                <div class="mt-2">
                                    <input type="text" name="pengalaman" id="pengalaman" autocomplete="pengalaman" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">email</label>
                                <div class="mt-2">
                                    <input type="text" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="border-t border-gray-900/10 pt-6 flex items-center justify-center gap-x-6">
                                <button type="submit" class="w-96 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>