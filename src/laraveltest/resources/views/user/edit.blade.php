@extends('layout.layout')
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div
            class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">

                <p class="text-4xl">Edit</p>
                <form method="POST" action="{{ route('user.update',$user->id) }}">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    @method('PUT')
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <ul class="list-disc space-y-2">
                                <li class="flex items-start">
                                    <div><label for="form-name">Name</label>
                                        <input type="text" name="name"
                                               value="{{ $user->name }}"
                                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-indigo-600"
                                               required>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div>
                                        <label for="form-pass">Birthday</label>
                                        <input type="date" name="birthday" value="{{ $user->birthday }}"
                                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-indigo-600">
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div>
                                        <label for="form-email">Email</label>
                                        <input type="email" name="email" value="{{ $user->email }}"
                                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-indigo-600">
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div>
                                        <label for="form-cool">Is Cool</label>
                                        <input type="checkbox" name="cool" value="1"
                                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                               @if (old('cool', $user->iscool) == 1) checked @endif>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                            <button href="{{ route('/') }}"
                                    class="bg-yellow-500 btn hover:bg-yellow-300 font-semibold text-white py-2 px-4 rounded">
                                Index
                            </button>
                            <button
                                class="bg-blue-700 btn hover:bg-blue-500 font-semibold text-white py-2 px-4 rounded"
                                type="submit">Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
