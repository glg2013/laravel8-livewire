@extends('layouts.app')

@section('title', '头像')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                头像上传例子
            </div>
            <div class="card-body">
                <livewire:avatar.upload/>
            </div>
        </div>

    </div>
@endsection
