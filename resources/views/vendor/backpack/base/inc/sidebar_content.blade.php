{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('project') }}"><i class="nav-icon las la-code-branch"></i> Projects</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('degree') }}"><i class="nav-icon la la-graduation-cap"></i> Degrees</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('experience') }}"><i class="nav-icon la la-briefcase"></i> Experiences</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('skill') }}"><i class="nav-icon la la-certificate"></i> Skills</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('skill-category') }}"><i class="nav-icon la la-layer-group"></i> Skills categories</a></li>
