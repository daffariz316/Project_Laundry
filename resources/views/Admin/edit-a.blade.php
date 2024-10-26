<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Akun Admin</title>
    <link rel="stylesheet" href="{{ asset('asset/css/create/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <form action="{{ route('admins.update', $admin->id) }}" method="POST">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $admin->username }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $admin->email }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password (Kosongkan jika tidak ingin mengubah)</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary">Update Admin</button>
                <a href="{{ route('admins.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</body>
</html>
