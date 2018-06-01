@extends('auth.layout.app')

@section('admin-content')
    {{--<table class="table">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th scope="col">#</th>--}}
            {{--<th scope="col">First</th>--}}
            {{--<th scope="col">Last</th>--}}
            {{--<th scope="col">Handle</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--<tr>--}}
            {{--<th scope="row">1</th>--}}
            {{--<td>Mark</td>--}}
            {{--<td>Otto</td>--}}
            {{--<td>@mdo</td>--}}
        {{--</tr>--}}
        {{--</tbody>--}}
    {{--</table>--}}
    <div class="row">
        <div class="mx-auto col-md-9 bg-white text-center">
            <div class="container-fluid ">
                <div class="row ">
                    <main class="col bg-faded py-3">
                        <h3>Письма</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Имя</th>
                                <th scope="col">Емайл</th>
                                <th scope="col">Письмо</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mails as $mail)
                                <tr>
                                    <td>{{$mail->name}}</td>
                                    <td>{{$mail->email}}</td>
                                    <td>{{$mail->description}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $mails->links() }}
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
