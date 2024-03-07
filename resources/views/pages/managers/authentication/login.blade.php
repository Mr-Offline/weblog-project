<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<div class="w-screen h-screen grid place-items-center">
    <div class="w-1/3 bg-gray-100 p-4 rounded-md flex flex-col gap-20 shadow-lg">
        <h1 class="text-3xl self-center">ورود مدیریت</h1>
        <form action="{{route('manager.login')}}" method="post" class="w-full grid grid-cols-2 gap-4">
            @csrf
            <div class="flex flex-col gap-4">
                <label for="username">نام کاربری</label>
                <input type="text" id="username" name="username" class="px-4 py-2 rounded-md">
                @error('username')
                    <p class="text-red-600">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-4">
                <label for="password">رمز عبور</label>
                <input type="password" id="password" name="password" class="px-4 py-2 rounded-md">
                @error('password')
                <p class="text-red-600">{{$message}}</p>
                @enderror
            </div>
            <div class="col-span-2 flex gap-4">
                <label for="remember">مرا به خاطر بسپار</label>
                <input type="checkbox" id="remember" name="remember">
                @error('remember')
                <p class="text-red-600">{{$message}}</p>
                @enderror
            </div>
            <button class="col-span-2 bg-blue-500 text-white p-2 rounded-md">ورود</button>
            @error('login')
            <p class="text-red-600">{{$message}}</p>
            @enderror
        </form>
    </div>
</div>
</body>
</html>
