<div class="js-wizard-simple block">
    {{-- Step Tabs --}}
    <ul class="nav nav-tabs nav-tabs-alt nav-fill d-print-none" role="tablist">
        <li class="nav-item">
            <a class="nav-link {{ ($tab_active == 'profile') ? 'active' : '' }}">1. Personal Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($tab_active == 'contact') ? 'active' : '' }}">2. Contact Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($tab_active == 'course') ? 'active' : '' }}">3. Course Selection</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($tab_active == 'admission') ? 'active' : '' }}">4. Admission Requirement</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link {{ ($tab_active == 'upload') ? 'active' : '' }}">5. Upload Document</a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link {{ ($tab_active == 'finish') ? 'active' : '' }}">6. Finish</a>
        </li>
    </ul>
    {{-- END Step Tabs --}}