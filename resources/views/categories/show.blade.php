<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('dashboard') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i> Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400"></i>
                        <a href="{{ route('categories.index') }}"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600">Categories</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400"></i>
                        <span class="ml-1 text-sm font-medium text-gray-500">{{ $category->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Header and Back Button -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">{{ $category->name }}</h1>
            <a href="{{ route('categories.index') }}"
                class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
                <i class="fas fa-arrow-left mr-2"></i> Back
            </a>
        </div>

        <!-- Category Details -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <h2 class="text-lg font-medium text-gray-700">Name</h2>
                    <p class="mt-1 text-gray-600">{{ $category->name }}</p>
                </div>
                <div>
                    <h2 class="text-lg font-medium text-gray-700">Slug</h2>
                    <p class="mt-1 text-gray-600">{{ $category->slug }}</p>
                </div>
                <div>
                    <h2 class="text-lg font-medium text-gray-700">Parent Category</h2>
                    <p class="mt-1 text-gray-600">{{ $category->parent ? $category->parent->name : 'None' }}</p>
                </div>
                <div>
                    <h2 class="text-lg font-medium text-gray-700">Description</h2>
                    <p class="mt-1 text-gray-600">{{ $category->description ?? 'No description' }}</p>
                </div>
            </div>
            <div class="mt-6">
                <a href="{{ route('categories.edit', $category) }}"
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    <i class="fas fa-edit mr-2"></i> Edit
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
