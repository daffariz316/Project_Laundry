<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/icon.jpg') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/icon.jpg') }}" />
    <title>Yuma Laundry</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Main Styling -->
    <link href="{{ asset('assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">

    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="{{url('admin/dashboard')}}" target="_blank">
              <img src="{{ asset('assets/img/yuma.png') }}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
            </a>
          </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{url('admin/dashboard')}}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <i class='bx bxs-dashboard '></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Halaman utama</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ url('/waiting') }}">
                <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <i class='bx bx-spreadsheet' ></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">List Antrian</span>
              </a>
          </li>
          <li class="w-full mt-4">
            <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Account pages</h6>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ url('/admin/pengguna') }}">
                <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                  <i class='bx bxs-user'></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Akun Pengguna</span>
              </a>
          </li>
          <li class="mt-0.5 w-full">
            <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ url('/admin') }}">
                <div class="bg-gradient-to-tl  from-blue-600 to-cyan-400 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <i class='bx bx-user text-white'></i>
                </div>
                <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Akun Admin</span>
              </a>
          </li>

          <li class="mt-0.5 w-full">
            <form action="{{ route('admin.logout') }}" method="POST" class="flex items-center">
                @csrf
                <button type="submit" class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                        <i class='bx bx-log-out'></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
                </button>
            </form>
            </li>
    </aside>

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <h6 class="mb-0 mt-6 font-bold capitalize">Akun Admin</h6>
          </nav>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
            <div class="flex items-center md:ml-auto md:pr-4">
                <form action="{{ route('admin.admins') }}" method="GET">
                    <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                        <span class="text-sm ease-soft leading-5 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </span>
                        <input type="text" name="search" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." value="{{ request('search') }}" />
                        <button type="submit" class="hidden"></button> <!-- Optional: Button for form submission -->
                    </div>
                </form>
            </div>
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                <li class="flex items-center">
                    <a href="../pages/sign-in.html" class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-sm text-slate-500">
                    <i class="fa fa-user sm:mr-1"></i>
                    <span class="hidden sm:inline">{{ session('admin')->email }}</span>
                    </a>
                </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  </div>
                </a>
              </li>
            </ul>
      </nav>

      <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
              <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                  <h6>Akun Admin </h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                  <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400 opacity-70">Number</th>
                                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400 opacity-70">Username</th>
                                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400 opacity-70">Email</th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400 opacity-70">Password</th>
                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xs tracking-wide whitespace-nowrap text-slate-400 opacity-70">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $key => $admin)
                            <tr>
                                <td class="px-6 py-4 text-sm text-left">{{ $key + 1 }}</td>
                                <td class="px-6 py-4 text-sm text-left">{{$admin ->username}}</td>
                                <td class="px-6 py-4 text-sm text-left">{{$admin ->email}}</td>
                                <td class="px-6 py-4 text-sm text-center">{{$admin ->password}}</td>
                                <td class="px-6 py-4 text-sm text-center">
                                    <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" class="delete-form" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="text-xs font-semibold leading-tight text-red-500 ml-4 delete-button">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
              </div>
              </div>
            </div>
          </div>
        <footer class="pt-4 mt-auto">
            <div class="w-full px-6 mx-auto">
              <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                  <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                    ©
                    <script>
                      document.write(new Date().getFullYear() + ",");
                    </script>
                    Yuma Laundry. All rights reserved.
                  </div>
                </div>
                <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                  <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                    <li class="nav-item">
                      <a href="#" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
      </div>
    </main>
  </body>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.delete-button').forEach(button => {
        button.addEventListener('click', function() {
            const form = this.closest('form'); // Ambil form terdekat

            Swal.fire({
                title: "Anda yakin di hapus?",
                text: "Kalau anda tidak yakin untuk di Hapus silahkan di tolak!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#4caf50",
                cancelButtonColor: "#d33",
                confirmButtonText: "Iya, hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Kirim form jika dikonfirmasi
                }
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
  const sidenavTrigger = document.querySelector('[sidenav-trigger]');
  const sidenav = document.querySelector('aside');
  const sidenavClose = document.querySelector('[sidenav-close]');

  // Fungsi untuk menampilkan atau menyembunyikan sidenav
  function toggleSidenav() {
    if (sidenav.classList.contains('-translate-x-full')) {
      sidenav.classList.remove('-translate-x-full');
    } else {
      sidenav.classList.add('-translate-x-full');
    }
  }

  // Ketika sidenav trigger ditekan
  sidenavTrigger.addEventListener('click', toggleSidenav);

  // Ketika sidenav close ditekan
  if (sidenavClose) {
    sidenavClose.addEventListener('click', toggleSidenav);
  }
});

</script>

</html>
