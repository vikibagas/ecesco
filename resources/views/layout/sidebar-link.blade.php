@props(['active' => false])
@php
$clasess = ($active ?? false) ? 'nav-link active' : 'nav-link';
@endphp
<li >
    <a href="/dashboard" {{$attributes->merge(['class' => 'nav-link'])}} class="active"  class="" >
        <span class="nav-icon uil uil-create-dashboard"></span>
        <span class="menu-text">Dashboard</span>
    </a>
</li>