@extends('auth.layout.app')

@section('admin-content')
    <div class="mx-auto col-md-9 bg-white text-center">
        <div class="wrapper">
            <div id="content" class="w-100">
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
                        @foreach($calls as $call)
                            <tr>
                                <td>{{$call->name}}</td>
                                <td>{{$call->phoneNumber}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $calls->links() }}
                </main>
            </div>
        </div>
    </div>
@endsection
