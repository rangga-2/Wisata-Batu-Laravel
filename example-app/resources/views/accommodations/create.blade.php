@extends('layouts.app')

@section('content')
    <h1>Tambah Akomodasi</h1>
    <form action="{{ route('akomodasi.store') }}" method="POST">
        @csrf
        <label for="