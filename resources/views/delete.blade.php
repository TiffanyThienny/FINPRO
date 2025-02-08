@extends('layouts.app')

@section('content')
<x-navbar />
<div class="max-w-lg mx-auto bg-brown-100 p-6 rounded-lg shadow-md border border-brown-300">
    <h1 class="text-2xl font-bold text-brown-700 mb-4">Delete User</h1>
    
    <p class="text-brown-600">Are you sure you want to delete this user?</p>
    <div class="bg-brown-200 p-4 rounded-md my-4">
        <p><strong>Name:</strong> <span class="text-brown-800">{{ $user->first_name }} {{ $user->last_name }}</span></p>
        <p><strong>Email:</strong> <span class="text-brown-800">{{ $user->email }}</span></p>
    </div>
    
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="mt-4">
        @csrf
        @method('DELETE')
        <div class="flex justify-between">
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Yes, Delete</button>
            <a href="{{ route('users.index') }}" class="bg-brown-500 text-white px-4 py-2 rounded-md hover:bg-brown-600">Cancel</a>
        </div>
    </form>
</div>
@endsection