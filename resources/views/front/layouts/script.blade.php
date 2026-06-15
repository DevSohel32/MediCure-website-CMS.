<script src="{{ asset('dist-front/js/vendor/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('dist-front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist-front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('dist-front/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('dist-front/js/ajax-form.js') }}"></script>
<script src="{{ asset('dist-front/js/wow.min.js') }}"></script>
<script src="{{ asset('dist-front/js/aos.js') }}"></script>
<script src="{{ asset('dist-front/js/jquery.datetimepicker.min.js') }}"></script>
<script src="{{ asset('dist-front/js/gsap.min.js') }}"></script>
<script src="{{ asset('dist-front/js/SplitText.min.js') }}"></script>
<script src="{{ asset('dist-front/js/lenis.min.js') }}"></script>
<script src="{{ asset('dist-front/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('dist-front/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('dist-front/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('dist-front/js/sweetalert2.min.js') }}"></script>
<script src="{{ asset('dist-front/js/main.js') }}"></script>

@if($global_setting->cookie_consent_status == 'Show')
    <script src="https://cdn.websitepolicies.io/lib/cookieconsent/1.0.3/cookieconsent.min.js" defer></script><script >window.addEventListener("load",function(){window.wpcc.init({"colors":{"popup":{"background":"#{{ $global_setting->cookie_consent_bg_color }}","text":"#{{ $global_setting->cookie_consent_text_color }}","border":"#b3d0e4"},"button":{"background":"#{{ $global_setting->cookie_consent_button_bg_color }}","text":"#{{ $global_setting->cookie_consent_button_text_color }}"}},"position":"bottom","padding":"large","margin":"none","content":{"message":"{{ $global_setting->cookie_consent_message }}","button":"{{ $global_setting->cookie_consent_button_text }}"}})});</script>
@endif

@if($global_setting->tawk_live_chat_status == 'Show')
<style>
    .scroll__top {
        bottom: 80px!important;
    }
</style>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/{{ $global_setting->tawk_live_chat_property_id }}/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
@endif

@if($global_setting->layout_direction == 'RTL')
@php
    $position = "top-start";
@endphp
@else
@php
    $position = "top-end";
@endphp
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "{{ $position }}",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: 'error',
            title: '{{ $error }}'
        });
    </script>
    @endforeach
@endif
@if(Session::has('error'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "{{ $position }}",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: 'error',
            title: '{{ Session::get("error") }}'
        });
    </script>
@endif
@if(Session::has('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "{{ $position }}",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "success",
            title: "{{ Session::get("success") }}"
        });
    </script>
@endif
@if(Session::has('info'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: "{{ $position }}",
            showConfirmButton: false,
            timer: 1800,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "info",
            title: "{{ Session::get("info") }}"
        });
    </script>
@endif