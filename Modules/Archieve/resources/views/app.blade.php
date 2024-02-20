@extends('app')

@section('sidebar_menu')
    <ul class="menu">
        <li class="sidebar-title">
            Menu
        </li>
        <li
            class="sidebar-item @if(Request::is("archieve/dashboard")) active @endif">
            <a href="{{ route('archieve.dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li
            class="sidebar-item has-sub @if(URLHelper::has('code'))) active @endif">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-people-fill"></i>
                <span>Kode Arsip</span>
            </a>
            <ul class="submenu @if(URLHelper::has('code'))) active @endif">
                <li class="submenu-item @if(URLHelper::has('code|main'))) active @endif">
                    <a
                        href="{{ route('archieve.code.main.index') }}"
                        class="submenu-link">
                        Pokok
                    </a>
                </li>
                <li class="submenu-item @if(URLHelper::has('code|sub'))) active @endif">
                    <a
                        href="{{ route('archieve.code.sub.index') }}"
                        class="submenu-link">
                        Sub Masalah
                    </a>
                </li>
                <li class="submenu-item @if(URLHelper::has('code|specific'))) active @endif">
                    <a
                        href="{{ route('archieve.code.specific.index') }}"
                        class="submenu-link">
                        Sub Sub Masalah
                    </a>
                </li>
            </ul>
        </li>
    </ul>
@endsection