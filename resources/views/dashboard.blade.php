<x-app-layout>
    <div class="py-12 flex items-center justify-center h-screen" style="background-color: darkgreen;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green overflow-hidden shadow-sm sm:rounded-lg" style="background-image: url('{{ asset('images/2.png') }}'); background-size: cover;">
                <div class="p-6 text-white text-center">
                    {{ __("Welcome, you are logged in!") }}
                    <br><br>
                    Please click the link below to add student details to the prediction system.
                    <br><br>
                    <a href="{{ route('student.index') }}" class="text-green-700 hover:text-green-400">Student Page</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
