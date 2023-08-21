<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/onscreen@1.4.0/dist/on-screen.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/nouislider@15.7.1/dist/nouislider.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chartist/0.11.4/chartist.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartist-plugin-tooltip/0.0.11/chartist-plugin-tooltip.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notyf/3.10.0/notyf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.5/simplebar.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
<script src="/assets/js/volt.js"></script>
<script>
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
    });
</script>
