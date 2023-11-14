<x-guest-layout>
    <div
        class="flex flex-col justify-center w-[93.8vh]  h-[93.5vh] mx-auto font-sans font-semibold text-center text-gray-300 animate-pulse text-7xl">
        <a href="{{ route('create-job-request') }}"><img src="{{ asset('images/sn-icons/facilwork.png') }}"
                alt=""></a>

        <script>
            setTimeout(function() {
                window.location.href = "{{ route('create-job-request') }}";
            }, 3000);
        </script>
    </div>


</x-guest-layout>
