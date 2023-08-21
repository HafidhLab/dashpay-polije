<div>
     {{-- Close your eyes. Count to one. That is how long forever feels. --}}
     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">Dashboard</h2>
            <p class="mb-0">Your web analytics dashboard template.</p>
        </div>
    </div>


    

    @push('scripts')
        <script>
        window.livewire.on('userStore', () => {
            $('#exampleModal').modal('hide');
        });
        </script>
    @endpush
</div>
