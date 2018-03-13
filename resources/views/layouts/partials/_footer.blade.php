            {{-- Footer --}}
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="{{ url('/') }}" target="_blank">{{ config('app.name') }}</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="{{ url('/') }}" target="_blank">{{ config('app.name') }}</a> &copy; {{ date('Y') }}
                    </div>
                </div>
            </footer>
            {{-- END Footer --}}
        </div>
        {{-- END Page Container --}}

        {{-- Codebase Core JS --}}
        <script src="{{ asset('assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.scrollLock.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/jquery.countTo.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/js.cookie.min.js') }}"></script>
        <script src="{{ asset('assets/js/codebase.js') }}"></script>

        {{-- Page JS Plugins --}}       
        @yield('page_js_plugin')

        {{-- Page JS Code --}}
        @yield('page_js')
        
    </body>
</html>