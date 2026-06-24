<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="border rounded p-10">
                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                @if ($students->studentImage)
                                    <img src="{{ asset('storage/images/' . $students->studentImage) }}" alt="" width="500" height="500" class="rounded-xl sm:block sm:mx-auto md:block md:mx-auto">
                                @endif
                            </div>
                            <div>
                                
                                <div class="text-3xl">
                                    <b>Name: </b>{{ $students->fName }} {{ $students->mName }} {{ $students->lName }}
                                </div>

                                <hr class="my-3">
                                
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-5">
                                    <div>
                                        <b>Student ID: </b>{{ $students->studentId }}
                                    </div>
                                    <div>
                                        <b>Email: </b>{{ $students->email }}
                                    </div>
                                    <div>
                                        <b>Contact: </b>{{ $students->pNumber }}
                                    </div>
                                    <div>
                                        <b>Course: </b>{{ $students->course }}
                                    </div>
                                    <div>
                                        <b>Age: </b>{{ $students->age }}
                                    </div>
                                    <div>
                                        <b>Gender: </b>{{ $students->gender }}
                                    </div>
                                    <div>
                                        <b>Barangay: </b>{{ $students->brgy }}
                                    </div>
                                    <div>
                                        <b>City: </b>{{ $students->city }}
                                    </div>
                                    <div>
                                        <b>Province: </b>{{ $students->province }}
                                    </div>
                                    <div>
                                        <b>Enroll type: </b>
                                        @if ($students->enrolled === 'Enrolled')
                                            <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Enrolled</span>
                                        @elseif ($students->enrolled === 'Not Enrolled')
                                            <span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Not Enrolled</span>
                                        @elseif ($students->enrolled === 'Pending')
                                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Pending</span>
                                        @endif
                                    </div>
                                </div> 
                                
                            </div>
                        </div>
                    {{-- </div> --}}

                        

                </div>
            </div>
        </div>
    </div>
</x-app-layout>