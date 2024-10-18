@extends('component.layout')
@section('content')

@include('component.navbar')
    <div class="flex items-center justify-center min-h-screen bg-white">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-5xl">
            <div class="px-6 py-8">
                <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Contact List</h2>

                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-blue-500 text-white">name</th>
                            <th class="py-2 px-4 bg-blue-500 text-white">email</th>
                            <th class="py-2 px-4 bg-blue-500 text-white">phone</th>
                            <th class="py-2 px-4 bg-blue-500 text-white">address</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="border border-gray-300 px-6 py-4">{{ $user['name'] }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $user['email'] }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $user['phone'] }}</td>
                        <td class="border border-gray-300 px-6 py-4">{{ $user['address'] }}</td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
