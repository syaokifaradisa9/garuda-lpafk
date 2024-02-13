@extends('app')

@section('sidebar_menu')
    <ul class="menu">
        <li class="sidebar-title">
            Menu
        </li>
        <li
            class="sidebar-item @if(Request::is("inventory/dashboard")) active @endif">
            <a href="{{ route('inventory.dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li
            class="sidebar-item @if(URLHelper::has('master')) active @endif">
            <a href="{{ route('inventory.master.index') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Inventaris</span>
            </a>
        </li>
    </ul>
@endsection