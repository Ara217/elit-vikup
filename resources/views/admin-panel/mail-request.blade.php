@extends('auth.layout.app')

@section('admin-content')
    <div class="row">
        <div class="mx-auto col-md-9 bg-white text-center">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <main class="col bg-faded py-3">
                        <h3>Письма</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Имя</th>
                                <th scope="col">Номер</th>
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
