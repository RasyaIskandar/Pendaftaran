<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pendaftaran') }}
        </h2>
    </x-slot>
    
    
    


    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">No</th>
                                <th scope="col" class="px-4 py-3">Nama</th>
                                <th scope="col" class="px-4 py-3">Gender</th>
                                <th scope="col" class="px-4 py-3">Email</th>
                                <th scope="col" class="px-4 py-3">Nomor</th>
                                <th scope="col" class="px-4 py-3">Alamat</th>
                                <th scope="col" class="px-4 py-3">Sekolah Sebelumnya</th>
                                <th scope="col" class="px-4 py-3">Jurusan</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                            
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{$student->id}}</td>
                                <td class="px-4 py-3">{{$student->name}}</td>
                                <td class="px-4 py-3">{{$student->gender}}</td>
                                <td class="px-4 py-3">{{$student->email}}</td>
                                <td class="px-4 py-3">{{$student->phone}}</td>
                                <td class="px-4 py-3">{{$student->address}}</td>
                                <td class="px-4 py-3">{{$student->school_origin}}</td>
                                <td class="px-4 py-3">{{$student->unit}}</td>
                                <td class="px-4 py-3">{{$student->registration_type}}</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <div id="apple-imac-27-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </section>





</x-app-layout>
