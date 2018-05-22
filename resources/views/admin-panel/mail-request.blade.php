@extends('auth.layout.app')

@section('admin-content')
    <div class="row">
        <div class="mx-auto col-md-7 bg-white text-center">
            <div class="container-fluid h-100">
                <div class="row h-100">
                    <main class="col bg-faded py-3">
                        <h3>Звонки</h3>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Имя</th>
                                <th scope="col">Номер</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mails as $mail)
                                <tr>
                                    <td>{{$call->name}}</td>
                                    <td>{{$call->phoneNumber}}</td>
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
