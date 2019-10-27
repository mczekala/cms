@extends('layouts.app')
@section('title', 'Create Page')
@section('content')
    <section class="section-maker">
        <select class="section-maker__select">
            <option value="html">html</option>
            <option value="text">text</option>
            <option value="photo">photo</option>
        </select>
        <input class="section-maker__name" placeholder="section name"/>
        <input class="section-maker__content" placeholder="section content"/>
        <button>add section</button>
    </section>
@endsection