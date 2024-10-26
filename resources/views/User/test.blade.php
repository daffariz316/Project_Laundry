<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-4">Profil Pengguna</h1>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold">Informasi Pengguna</h2>
            <p><strong>Username:</strong> {{ $user->username }}</p>
            <p><strong>Nomor Telepon:</strong> {{ $user->phone_number }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Terdaftar Sejak:</strong> {{ $user->created_at->format('d M Y') }}</p>
        </div>

        <div class="mt-6">
            <a href="{{ route('user.edit') }}" class="text-blue-500 hover:underline">Edit Profil</a>
        </div>
    </div>
</body>
</html>
