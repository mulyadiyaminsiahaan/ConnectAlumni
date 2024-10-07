@extends('layouts.default')

@section('title', 'Category')

@section('content')

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Search and Filter Categories</h1>
    <form method="GET" action="#" class="mb-6">
        <div class="form-group mb-4">
            <input type="text" name="search" class="form-control w-full px-3 py-2 border rounded" placeholder="Search categories...">
        </div>
        <div class="form-group mb-4">
            <select name="filter" class="form-control w-full px-3 py-2 border rounded">
                <option value="">Select Filter</option>
                <option value="popular">Most Popular</option>
                <option value="recent">Most Recent</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary bg-blue-500 text-white px-4 py-2 rounded">Apply</button>
    </form>

    <div class="category-list mt-4">
        <ul class="list-disc pl-5">
            <li class="mb-2">Category 1</li>
            <li class="mb-2">Category 2</li>
            <li class="mb-2">Category 3</li>
            <li class="mb-2">Category 4</li>
        </ul>
    </div>
</div>
@endsection
