@extends('layouts.base')

@section('title')
    Admin
@endsection

@section('content')
   <h3>Admins</h3>
   <hr/>
   <div class="table-responsive">
    <table class="table table-striped">
            <thead>
                <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>John</td>
                <td>Doe</td>
                <td>john@example.com</td>
                </tr>
                <tr>
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
                </tr>
                <tr>
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection