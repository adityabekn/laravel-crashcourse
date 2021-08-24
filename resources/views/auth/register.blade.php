@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="sr-only" for="name">name</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror "
                           type="text" name="name" id="name"
                           placeholder="Your name" value="{{ old('name') }}">
                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="sr-only" for="username">username</label>
                    <input
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror"
                        type="text" name="username" id="username"
                        placeholder="Your username" value="{{ old('username') }}">
                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="sr-only" for="email">email</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                           type="email" name="email" id="email"
                           placeholder="Your email" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="sr-only" for="password">password</label>
                    <input
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                        type="password" name="password"
                        id="password"
                        placeholder="Your password">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="sr-only" for="password_confirmation">repeat password</label>
                    <input class="bg-gray-100 border-2 w-full p-4 rounded-lg" type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           placeholder="Repeat you password">
                </div>
                <div>
                    <button class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" type="submit">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
