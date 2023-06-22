@extends('./master') @section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 mx-auto mt-4">
            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input
                        type="text"
                        class="form-control"
                        id="username"
                        name="username"
                        placeholder="name@example.com"
                    />
                </div>
                <div class="mb-3">
                    <label for="passsword" class="form-label"
                        >Example textarea</label
                    >
                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        id="passsword"
                    />
                </div>
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
