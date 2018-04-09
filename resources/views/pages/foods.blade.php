@extends('layouts.base')

@section('title')
    Foods
@endsection

@section('content')
    <h3>Foods</h3>
    <hr/>
    <div class="options-wrapper">
        <div class="search-container">
                <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>
        </div>
        <button type="button" class="btn btn-primary">Create new document</button>
    </div>
    <ul class="food-list list-group">
        <li class="list-group-item clearfix">
            <h4 class="list-group-item-heading">Ayam Pop</h4>
            <p class="list-group-item-text">List Group Item Text</p>
            <span class="button-groups pull-right">
                <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </span>
        </li>
        <li class="list-group-item clearfix">
            <h4 class="list-group-item-heading">Ayam Taliwang</h4>
            <p class="list-group-item-text">List Group Item Text</p>
            <span class="button-groups pull-right">
                <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </span>
        </li>
        <li class="list-group-item clearfix">
            <h4 class="list-group-item-heading">Ayam Rica-rica</h4>
            <p class="list-group-item-text">List Group Item Text</p>
            <span class="button-groups pull-right">
                <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </span>
        </li>
    </ul>
@endsection