<x-layout authentication='true'>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <x-errors-all></x-errors-all>
                <form class="p-5 border rounded" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email
                            utente</label>
                        <input type="email" name="email"
                            class="form-control @error('email') is-invalid    @enderror" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password"
                            class="form-control @error('password') is-invalid    @enderror" id="password" required>
                    </div>

                    <div class="d-flex flex-row gap-2">
                        <button type="submit" class="nav-btn1">Accedi</button>
                        <a href="{{ route('register') }}" class="nav-btn2">Non sei iscritto?</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-layout>
