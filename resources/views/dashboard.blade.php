@extends('layouts.app')

@section('active-dashboard', 'active')

@role('admin')
    @section('title', 'Admin - Dashboard')
@elserole('kepalasekolah')
    @section('title', 'Kepala Sekolah - Dashboard')
@elserole('kurikulum')
    @section('title', 'Kurikulum - Dashboard')
@elserole('guru')
    @section('title', 'Guru - Dashboard')
@elserole('supervisor')
    @section('title', 'Supervisor - Dashboard')
@endrole

@section('content')

@role('admin')
    @include('dashboard-modules.admin')
@elserole('kepalasekolah')
    @include('dashboard-modules.kepsek')
@elserole('kurikulum')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Hallo, {{ Auth::user()->name }}
                </h6>
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptatem eveniet commodi a fugit molestiae facere nostrum, quaerat assumenda ullam maxime atque dolore animi quibusdam quo. Impedit ex veniam molestias.
            </div>
        </div>
    </div>
</div>
@elserole('guru')
    @include('dashboard-modules.guru')
@elserole('supervisor')
    @include('dashboard-modules.supervisor')
@endrole
@endsection