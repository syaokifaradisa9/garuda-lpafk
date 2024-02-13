@extends('app')

@section('sidebar_menu')
    <ul class="menu">
        <li class="sidebar-title">
            Menu
        </li>
        <li
            class="sidebar-item @if(Request::is("staffing/dashboard")) active @endif">
            <a href="{{ route('staffing.index') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li
            class="sidebar-item @if(URLHelper::has('unit')) active @endif">
            <a href="{{ route('staffing.unit.index') }}" class='sidebar-link'>
                <i class="bi bi-diagram-3-fill"></i>
                <span>Unit</span>
            </a>
        </li>
        <li
            class="sidebar-item @if(URLHelper::has('user')) active @endif">
            <a href="{{ route('staffing.user.index') }}" class='sidebar-link'>
                <i class="bi bi-people-fill"></i>
                <span>Pegawai</span>
            </a>
        </li>
    </ul>
@endsection