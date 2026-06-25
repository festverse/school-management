<x-app-layout>
    <x-slot name="header">
        <h2 class="font-serif font-bold text-2xl text-[#002855] leading-tight">
            {{ __('Add Student Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-slate-200 shadow-2xl sm:rounded-2xl overflow-hidden">
                <div class="p-8 text-slate-900">
                    <div class="mb-8 pb-4 border-b border-slate-200">
                        <h3 class="text-xl font-serif font-bold text-[#002855]">Scholar Matriculation Form</h3>
                        <p class="text-xs text-slate-500 uppercase tracking-wider font-bold mt-1">Official Office of the Registrar Record Entry</p>
                    </div>

                    <form method="POST" action="{{ route('add-student') }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block mb-2 text-sm font-bold text-[#002855]">Upload Student Identification Photo</label>
                            <input name="student_image_upload" class="block w-full text-sm text-slate-900 border border-slate-300 rounded-xl cursor-pointer bg-slate-50 focus:outline-none p-2.5" type="file" enctype="multipart/form-data">    
                        </div>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <label for="fName" class="block mb-2 text-sm font-bold text-[#002855]">First Name</label>
                                <input type="text" name="fName" id="fName" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="John" required />
                            </div>
                            <div>
                                <label for="mName" class="block mb-2 text-sm font-bold text-[#002855]">Middle Name</label>
                                <input type="text" name="mName" id="mName" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="T" required />
                            </div>
                            <div>
                                <label for="lName" class="block mb-2 text-sm font-bold text-[#002855]">Last Name</label>
                                <input type="text" name="lName" id="lName" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="Doe" required />
                            </div>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <label for="studentId" class="block mb-2 text-sm font-bold text-[#002855]">Student ID Numeric</label>
                                <input type="number" name="studentId" id="studentId" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="88392" required />
                            </div>
                            <div>
                                <label for="course" class="block mb-2 text-sm font-bold text-[#002855]">Academic Course</label>
                                <input type="text" name="course" id="course" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="BS Computer Science" required />
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-bold text-[#002855]">Student Email</label>
                                <input type="email" name="email" id="email" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="student@demo.com" required />
                            </div>
                        </div>

                        <div class="grid md:grid-cols-4 gap-6">
                            <div>
                                <label for="pNumber" class="block mb-2 text-sm font-bold text-[#002855]">Phone Number</label>
                                <input type="number" name="pNumber" maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="pNumber" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="1555382992" required />
                            </div>
                            <div>
                                <label for="age" class="block mb-2 text-sm font-bold text-[#002855]">Age</label>
                                <input type="number" name="age" maxlength="3" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="age" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="21" required />
                            </div>
                            <div>
                                <label for="gender" class="block mb-2 text-sm font-bold text-[#002855]">Gender</label>
                                <select name="gender" id="gender" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" required>
                                    <option value="" disabled selected>Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="non-binary">Non-binary</option>
                                </select>
                            </div>
                            <div>
                                <label for="enrolled" class="block mb-2 text-sm font-bold text-[#002855]">Enrollment Status</label>
                                <select name="enrolled" id="enrolled" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" required>
                                    <option value="" disabled selected>Select enroll type</option>
                                    <option value="Enrolled">Enrolled</option>
                                    <option value="Not Enrolled">Not Enrolled</option>
                                    <option value="Pending">Pending</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <label for="brgy" class="block mb-2 text-sm font-bold text-[#002855]">Barangay / District</label>
                                <input type="text" name="brgy" id="brgy" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="Cybernetics Quarter" required />
                            </div>
                            <div>
                                <label for="city" class="block mb-2 text-sm font-bold text-[#002855]">City</label>
                                <input type="text" name="city" id="city" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="Tech City" required />
                            </div>
                            <div>
                                <label for="province" class="block mb-2 text-sm font-bold text-[#002855]">Province / State</label>
                                <input type="text" name="province" id="province" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#002855] focus:border-[#002855]" placeholder="Innovation State" required />
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-200">
                            <button type="submit" class="px-8 py-4 bg-[#E51937] hover:bg-[#B21B2A] text-white font-bold uppercase tracking-wider text-sm rounded-xl shadow-lg hover:-translate-y-0.5 transition-all">Submit Scholar Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
