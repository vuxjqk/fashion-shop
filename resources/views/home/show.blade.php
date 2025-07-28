<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product['name'] ?? 'Elegant Summer Dress' }} - Fashion Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1f2937',
                        accent: '#f59e0b',
                        rose: '#f43f5e'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50">
    @php
        // Sample product data
        $product = [
            'id' => 1,
            'name' => 'Elegant Summer Dress',
            'price' => 149.99,
            'original_price' => 199.99,
            'discount' => 25,
            'rating' => 4.5,
            'reviews_count' => 127,
            'description' =>
                'Experience effortless elegance with our stunning summer dress. Crafted from premium cotton blend fabric, this dress features a flattering A-line silhouette that complements all body types. Perfect for both casual outings and special occasions.',
            'features' => [
                'Premium cotton blend fabric',
                'A-line silhouette for flattering fit',
                'Breathable and comfortable',
                'Machine washable',
                'Available in multiple colors',
            ],
            'sizes' => ['XS', 'S', 'M', 'L', 'XL', 'XXL'],
            'colors' => [
                ['name' => 'Coral Pink', 'hex' => '#ff6b9d'],
                ['name' => 'Ocean Blue', 'hex' => '#4a90e2'],
                ['name' => 'Sage Green', 'hex' => '#8fbc8f'],
                ['name' => 'Sunset Orange', 'hex' => '#ff8c42'],
                ['name' => 'Lavender', 'hex' => '#dda0dd'],
            ],
            'images' => [
                'https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?w=800&h=1000&fit=crop',
                'https://images.unsplash.com/photo-1539008835657-9e8e9680c956?w=800&h=1000&fit=crop',
                'https://images.unsplash.com/photo-1544957992-20ba4c3d9890?w=800&h=1000&fit=crop',
                'https://images.unsplash.com/photo-1583496661160-fb5886a13d93?w=800&h=1000&fit=crop',
                'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=800&h=1000&fit=crop',
            ],
            'in_stock' => true,
            'stock_count' => 15,
        ];

        // Sample related products
        $relatedProducts = [
            [
                'id' => 2,
                'name' => 'Casual Midi Skirt',
                'price' => 79.99,
                'image' => 'https://images.unsplash.com/photo-1583496661160-fb5886a13d93?w=400&h=500&fit=crop',
                'rating' => 4.3,
            ],
            [
                'id' => 3,
                'name' => 'Floral Blouse',
                'price' => 89.99,
                'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=400&h=500&fit=crop',
                'rating' => 4.7,
            ],
            [
                'id' => 4,
                'name' => 'Summer Cardigan',
                'price' => 119.99,
                'image' => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=500&fit=crop',
                'rating' => 4.4,
            ],
            [
                'id' => 5,
                'name' => 'Denim Jacket',
                'price' => 129.99,
                'image' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400&h=500&fit=crop',
                'rating' => 4.6,
            ],
        ];

        // Sample reviews
        $reviews = [
            [
                'user' => 'Sarah M.',
                'rating' => 5,
                'date' => '2024-01-15',
                'comment' =>
                    'Absolutely love this dress! The fabric is so comfortable and the fit is perfect. Received so many compliments!',
            ],
            [
                'user' => 'Emma K.',
                'rating' => 4,
                'date' => '2024-01-10',
                'comment' => 'Great quality dress. The color is exactly as shown. Only wish it came in more sizes.',
            ],
            [
                'user' => 'Jessica L.',
                'rating' => 5,
                'date' => '2024-01-05',
                'comment' => 'Perfect for summer! Lightweight and breathable. Will definitely order in other colors.',
            ],
        ];
    @endphp

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-primary">
                        <i class="fas fa-shopping-bag mr-2 text-accent"></i>
                        Fashion Store
                    </h1>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">Home</a>
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">Women</a>
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">Men</a>
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">Accessories</a>
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">Sale</a>
                </nav>

                <!-- User Actions -->
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-primary transition-colors">
                        <i class="fas fa-search text-xl"></i>
                    </button>
                    <button class="text-gray-600 hover:text-primary transition-colors">
                        <i class="fas fa-user text-xl"></i>
                    </button>
                    <button class="text-gray-600 hover:text-primary transition-colors relative">
                        <i class="fas fa-heart text-xl"></i>
                        <span
                            class="absolute -top-2 -right-2 bg-rose text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </button>
                    <button class="text-gray-600 hover:text-primary transition-colors relative">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span
                            class="absolute -top-2 -right-2 bg-accent text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="bg-gray-100 py-4">
        <div class="container mx-auto px-4">
            <nav class="text-sm">
                <ol class="flex items-center space-x-2">
                    <li><a href="#" class="text-gray-500 hover:text-primary">Home</a></li>
                    <li><i class="fas fa-chevron-right text-gray-400 text-xs"></i></li>
                    <li><a href="#" class="text-gray-500 hover:text-primary">Women</a></li>
                    <li><i class="fas fa-chevron-right text-gray-400 text-xs"></i></li>
                    <li><a href="#" class="text-gray-500 hover:text-primary">Dresses</a></li>
                    <li><i class="fas fa-chevron-right text-gray-400 text-xs"></i></li>
                    <li class="text-primary font-medium">{{ $product['name'] }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="relative overflow-hidden rounded-2xl bg-white shadow-lg">
                    <img id="mainImage" src="{{ $product['images'][0] }}" alt="{{ $product['name'] }}"
                        class="w-full h-96 lg:h-[600px] object-cover transition-transform duration-300 hover:scale-105">

                    <!-- Discount Badge -->
                    @if ($product['discount'] > 0)
                        <div
                            class="absolute top-4 left-4 bg-rose text-white px-3 py-1 rounded-full text-sm font-semibold">
                            -{{ $product['discount'] }}%
                        </div>
                    @endif

                    <!-- Favorite Button -->
                    <button id="favoriteBtn"
                        class="absolute top-4 right-4 w-10 h-10 bg-white rounded-full shadow-md flex items-center justify-center hover:bg-gray-50 transition-colors">
                        <i class="far fa-heart text-gray-600"></i>
                    </button>

                    <!-- Image Navigation -->
                    <button id="prevImage"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full shadow-md flex items-center justify-center hover:bg-opacity-100 transition-all">
                        <i class="fas fa-chevron-left text-gray-600"></i>
                    </button>
                    <button id="nextImage"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 w-10 h-10 bg-white bg-opacity-80 rounded-full shadow-md flex items-center justify-center hover:bg-opacity-100 transition-all">
                        <i class="fas fa-chevron-right text-gray-600"></i>
                    </button>
                </div>

                <!-- Thumbnail Images -->
                <div class="flex space-x-3 overflow-x-auto pb-2">
                    @foreach ($product['images'] as $index => $image)
                        <button
                            class="thumbnail-btn flex-shrink-0 w-20 h-20 rounded-lg overflow-hidden border-2 {{ $index === 0 ? 'border-accent' : 'border-gray-200' }} hover:border-accent transition-colors"
                            data-index="{{ $index }}">
                            <img src="{{ $image }}" alt="Thumbnail {{ $index + 1 }}"
                                class="w-full h-full object-cover">
                        </button>
                    @endforeach
                </div>
            </div>

            <!-- Product Details -->
            <div class="space-y-6">
                <!-- Product Title & Rating -->
                <div>
                    <h1 class="text-3xl font-bold text-primary mb-2">{{ $product['name'] }}</h1>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            @for ($i = 1; $i <= 5; $i++)
                                <i
                                    class="fas fa-star text-sm {{ $i <= floor($product['rating']) ? 'text-accent' : 'text-gray-300' }}"></i>
                            @endfor
                            <span class="ml-2 text-sm text-gray-600">{{ $product['rating'] }}
                                ({{ $product['reviews_count'] }} reviews)</span>
                        </div>
                    </div>
                </div>

                <!-- Price -->
                <div class="flex items-center space-x-4">
                    <span class="text-3xl font-bold text-primary">${{ number_format($product['price'], 2) }}</span>
                    @if ($product['original_price'] > $product['price'])
                        <span
                            class="text-xl text-gray-500 line-through">${{ number_format($product['original_price'], 2) }}</span>
                    @endif
                </div>

                <!-- Stock Status -->
                <div class="flex items-center space-x-2">
                    @if ($product['in_stock'])
                        <i class="fas fa-check-circle text-green-500"></i>
                        <span class="text-green-600 font-medium">In Stock ({{ $product['stock_count'] }} items
                            left)</span>
                    @else
                        <i class="fas fa-times-circle text-red-500"></i>
                        <span class="text-red-600 font-medium">Out of Stock</span>
                    @endif
                </div>

                <!-- Description -->
                <div class="prose max-w-none">
                    <p class="text-gray-600 leading-relaxed">{{ $product['description'] }}</p>
                </div>

                <!-- Features -->
                <div>
                    <h3 class="text-lg font-semibold text-primary mb-3">Key Features</h3>
                    <ul class="space-y-2">
                        @foreach ($product['features'] as $feature)
                            <li class="flex items-center text-gray-600">
                                <i class="fas fa-check text-green-500 mr-3"></i>
                                {{ $feature }}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Size Selection -->
                <div>
                    <h3 class="text-lg font-semibold text-primary mb-3">Size</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($product['sizes'] as $size)
                            <button
                                class="size-btn px-4 py-2 border-2 border-gray-300 rounded-lg hover:border-accent transition-colors focus:border-accent focus:outline-none"
                                data-size="{{ $size }}">
                                {{ $size }}
                            </button>
                        @endforeach
                    </div>
                    <button class="text-sm text-accent hover:underline mt-2">Size Guide</button>
                </div>

                <!-- Color Selection -->
                <div>
                    <h3 class="text-lg font-semibold text-primary mb-3">Color</h3>
                    <div class="flex flex-wrap gap-3">
                        @foreach ($product['colors'] as $index => $color)
                            <button
                                class="color-btn relative w-10 h-10 rounded-full border-4 border-gray-300 hover:border-accent transition-colors focus:border-accent focus:outline-none {{ $index === 0 ? 'border-accent' : '' }}"
                                style="background-color: {{ $color['hex'] }}" data-color="{{ $color['name'] }}"
                                title="{{ $color['name'] }}">
                                @if ($index === 0)
                                    <i
                                        class="fas fa-check text-white text-sm absolute inset-0 flex items-center justify-center"></i>
                                @endif
                            </button>
                        @endforeach
                    </div>
                    <p class="text-sm text-gray-600 mt-2">Selected: <span
                            id="selectedColor">{{ $product['colors'][0]['name'] }}</span></p>
                </div>

                <!-- Quantity & Add to Cart -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <label class="text-lg font-semibold text-primary">Quantity:</label>
                        <div class="flex items-center border-2 border-gray-300 rounded-lg">
                            <button id="decreaseQty" class="px-3 py-2 hover:bg-gray-100 transition-colors">
                                <i class="fas fa-minus text-sm"></i>
                            </button>
                            <input id="quantity" type="number" value="1" min="1"
                                max="{{ $product['stock_count'] }}"
                                class="w-16 text-center py-2 border-0 focus:outline-none">
                            <button id="increaseQty" class="px-3 py-2 hover:bg-gray-100 transition-colors">
                                <i class="fas fa-plus text-sm"></i>
                            </button>
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <button id="addToCartBtn"
                            class="flex-1 bg-accent text-white py-3 px-6 rounded-lg font-semibold hover:bg-yellow-600 transition-colors flex items-center justify-center space-x-2">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Add to Cart</span>
                        </button>
                        <button
                            class="bg-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-800 transition-colors">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Additional Actions -->
                <div class="flex space-x-6 pt-4 border-t border-gray-200">
                    <button class="flex items-center space-x-2 text-gray-600 hover:text-primary transition-colors">
                        <i class="fas fa-share-alt"></i>
                        <span>Share</span>
                    </button>
                    <button class="flex items-center space-x-2 text-gray-600 hover:text-primary transition-colors">
                        <i class="fas fa-question-circle"></i>
                        <span>Ask a Question</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="mt-16">
            <div class="border-b border-gray-200">
                <nav class="flex space-x-8">
                    <button class="tab-btn py-4 px-1 border-b-2 border-accent text-accent font-medium"
                        data-tab="reviews">
                        Reviews ({{ $product['reviews_count'] }})
                    </button>
                    <button
                        class="tab-btn py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-primary hover:border-gray-300 font-medium"
                        data-tab="shipping">
                        Shipping & Returns
                    </button>
                    <button
                        class="tab-btn py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-primary hover:border-gray-300 font-medium"
                        data-tab="care">
                        Care Instructions
                    </button>
                </nav>
            </div>

            <!-- Tab Contents -->
            <div class="py-8">
                <!-- Reviews Tab -->
                <div id="reviews-tab" class="tab-content">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Rating Summary -->
                        <div class="bg-white p-6 rounded-lg shadow-sm border">
                            <h3 class="text-xl font-semibold mb-4">Customer Reviews</h3>
                            <div class="flex items-center space-x-4 mb-4">
                                <span class="text-3xl font-bold">{{ $product['rating'] }}</span>
                                <div>
                                    <div class="flex items-center mb-1">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fas fa-star text-accent"></i>
                                        @endfor
                                    </div>
                                    <p class="text-sm text-gray-600">Based on {{ $product['reviews_count'] }} reviews
                                    </p>
                                </div>
                            </div>

                            <!-- Rating Breakdown -->
                            <div class="space-y-2">
                                @for ($i = 5; $i >= 1; $i--)
                                    <div class="flex items-center space-x-2">
                                        <span class="text-sm">{{ $i }}</span>
                                        <i class="fas fa-star text-accent text-sm"></i>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-accent h-2 rounded-full"
                                                style="width: {{ rand(10, 80) }}%"></div>
                                        </div>
                                        <span class="text-sm text-gray-600">{{ rand(5, 45) }}%</span>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <!-- Write Review -->
                        <div class="bg-white p-6 rounded-lg shadow-sm border">
                            <h3 class="text-xl font-semibold mb-4">Write a Review</h3>
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium mb-2">Rating</label>
                                    <div class="flex space-x-1">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <button type="button"
                                                class="rating-star text-2xl text-gray-300 hover:text-accent transition-colors"
                                                data-rating="{{ $i }}">
                                                <i class="fas fa-star"></i>
                                            </button>
                                        @endfor
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2">Your Review</label>
                                    <textarea class="w-full p-3 border border-gray-300 rounded-lg focus:border-accent focus:outline-none" rows="4"
                                        placeholder="Share your experience with this product..."></textarea>
                                </div>
                                <button type="submit"
                                    class="bg-accent text-white py-2 px-6 rounded-lg hover:bg-yellow-600 transition-colors">
                                    Submit Review
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Reviews List -->
                    <div class="mt-8 space-y-6">
                        @foreach ($reviews as $review)
                            <div class="bg-white p-6 rounded-lg shadow-sm border">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-accent rounded-full flex items-center justify-center">
                                            <span
                                                class="text-white font-semibold">{{ substr($review['user'], 0, 1) }}</span>
                                        </div>
                                        <div>
                                            <h4 class="font-semibold">{{ $review['user'] }}</h4>
                                            <div class="flex items-center space-x-2">
                                                <div class="flex">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <i
                                                            class="fas fa-star text-sm {{ $i <= $review['rating'] ? 'text-accent' : 'text-gray-300' }}"></i>
                                                    @endfor
                                                </div>
                                                <span
                                                    class="text-sm text-gray-500">{{ date('M j, Y', strtotime($review['date'])) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-gray-600">{{ $review['comment'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Shipping Tab -->
                <div id="shipping-tab" class="tab-content hidden">
                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <h3 class="text-xl font-semibold mb-4">Shipping & Returns</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold mb-2">Shipping Options</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li><i class="fas fa-truck mr-2"></i>Standard Shipping (5-7 days) - Free</li>
                                    <li><i class="fas fa-shipping-fast mr-2"></i>Express Shipping (2-3 days) - $9.99
                                    </li>
                                    <li><i class="fas fa-clock mr-2"></i>Next Day Delivery - $19.99</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Return Policy</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li><i class="fas fa-undo mr-2"></i>30-day return window</li>
                                    <li><i class="fas fa-shield-alt mr-2"></i>Free returns on all orders</li>
                                    <li><i class="fas fa-exchange-alt mr-2"></i>Easy online returns process</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Care Tab -->
                <div id="care-tab" class="tab-content hidden">
                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <h3 class="text-xl font-semibold mb-4">Care Instructions</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-semibold mb-2">Washing</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li><i class="fas fa-tint mr-2"></i>Machine wash cold with like colors</li>
                                    <li><i class="fas fa-ban mr-2"></i>Do not bleach</li>
                                    <li><i class="fas fa-wind mr-2"></i>Tumble dry low</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-semibold mb-2">Storage</h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li><i class="fas fa-hanger mr-2"></i>Hang or fold neatly</li>
                                    <li><i class="fas fa-sun mr-2"></i>Avoid direct sunlight</li>
                                    <li><i class="fas fa-temperature-low mr-2"></i>Store in cool, dry place</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-primary mb-8">You Might Also Like</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($relatedProducts as $relatedProduct)
                    <div
                        class="bg-white rounded-lg shadow-sm border overflow-hidden hover:shadow-lg transition-shadow group">
                        <div class="relative overflow-hidden">
                            <img src="{{ $relatedProduct['image'] }}" alt="{{ $relatedProduct['name'] }}"
                                class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                            <button
                                class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full shadow-md flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2">{{ $relatedProduct['name'] }}</h3>
                            <div class="flex items-center justify-between">
                                <span
                                    class="text-lg font-bold text-primary">${{ number_format($relatedProduct['price'], 2) }}</span>
                                <div class="flex items-center">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i
                                            class="fas fa-star text-xs {{ $i <= floor($relatedProduct['rating']) ? 'text-accent' : 'text-gray-300' }}"></i>
                                    @endfor
                                    <span class="text-xs text-gray-500 ml-1">{{ $relatedProduct['rating'] }}</span>
                                </div>
                            </div>
                            <button
                                class="w-full mt-3 bg-gray-100 text-gray-800 py-2 rounded-lg hover:bg-accent hover:text-white transition-colors">
                                Quick Add
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white mt-20">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Fashion Store</h3>
                    <p class="text-gray-300 mb-4">Your destination for elegant and trendy fashion. Discover the latest
                        styles and timeless classics.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white transition-colors">
                            <i class="fab fa-pinterest text-xl"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">About Us</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Contact</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Size Guide</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Shipping
                                Info</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Returns</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Women's
                                Clothing</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Men's
                                Clothing</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Accessories</a>
                        </li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Shoes</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">Sale Items</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-300 mb-4">Subscribe to get updates on new arrivals and special offers.</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email"
                            class="flex-1 px-4 py-2 rounded-l-lg text-gray-800 focus:outline-none">
                        <button class="bg-accent px-4 py-2 rounded-r-lg hover:bg-yellow-600 transition-colors">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-600 mt-8 pt-8 text-center">
                <p class="text-gray-300">&copy; 2024 Fashion Store. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Success Toast -->
    <div id="successToast"
        class="fixed top-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 z-50">
        <div class="flex items-center space-x-2">
            <i class="fas fa-check-circle"></i>
            <span id="toastMessage">Item added to cart!</span>
        </div>
    </div>

    <script>
        // Global variables
        let currentImageIndex = 0;
        let selectedSize = '';
        let selectedColor = '{{ $product['colors'][0]['name'] }}';
        let isFavorited = false;
        let currentRating = 0;

        // DOM elements
        const mainImage = document.getElementById('mainImage');
        const thumbnailBtns = document.querySelectorAll('.thumbnail-btn');
        const prevImageBtn = document.getElementById('prevImage');
        const nextImageBtn = document.getElementById('nextImage');
        const favoriteBtn = document.getElementById('favoriteBtn');
        const sizeBtns = document.querySelectorAll('.size-btn');
        const colorBtns = document.querySelectorAll('.color-btn');
        const quantityInput = document.getElementById('quantity');
        const decreaseQtyBtn = document.getElementById('decreaseQty');
        const increaseQtyBtn = document.getElementById('increaseQty');
        const addToCartBtn = document.getElementById('addToCartBtn');
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');
        const ratingStars = document.querySelectorAll('.rating-star');
        const successToast = document.getElementById('successToast');
        const toastMessage = document.getElementById('toastMessage');

        const productImages = @json($product['images']);

        // Image gallery functionality
        function updateMainImage(index) {
            currentImageIndex = index;
            mainImage.src = productImages[index];

            // Update thumbnail active state
            thumbnailBtns.forEach((btn, i) => {
                btn.classList.toggle('border-accent', i === index);
                btn.classList.toggle('border-gray-200', i !== index);
            });
        }

        // Thumbnail clicks
        thumbnailBtns.forEach((btn, index) => {
            btn.addEventListener('click', () => updateMainImage(index));
        });

        // Previous/Next image navigation
        prevImageBtn.addEventListener('click', () => {
            const newIndex = currentImageIndex > 0 ? currentImageIndex - 1 : productImages.length - 1;
            updateMainImage(newIndex);
        });

        nextImageBtn.addEventListener('click', () => {
            const newIndex = currentImageIndex < productImages.length - 1 ? currentImageIndex + 1 : 0;
            updateMainImage(newIndex);
        });

        // Favorite button
        favoriteBtn.addEventListener('click', () => {
            isFavorited = !isFavorited;
            const icon = favoriteBtn.querySelector('i');

            if (isFavorited) {
                icon.classList.remove('far');
                icon.classList.add('fas', 'text-rose');
                favoriteBtn.classList.add('bg-rose-50');
                showToast('Added to favorites!');
            } else {
                icon.classList.remove('fas', 'text-rose');
                icon.classList.add('far');
                icon.classList.remove('text-rose');
                favoriteBtn.classList.remove('bg-rose-50');
                showToast('Removed from favorites!');
            }
        });

        // Size selection
        sizeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active state from all buttons
                sizeBtns.forEach(b => {
                    b.classList.remove('border-accent', 'bg-accent', 'text-white');
                    b.classList.add('border-gray-300');
                });

                // Add active state to clicked button
                btn.classList.remove('border-gray-300');
                btn.classList.add('border-accent', 'bg-accent', 'text-white');

                selectedSize = btn.dataset.size;
                console.log('Selected size:', selectedSize);
            });
        });

        // Color selection
        colorBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active state from all buttons
                colorBtns.forEach(b => {
                    b.classList.remove('border-accent');
                    b.classList.add('border-gray-300');
                    b.querySelector('i')?.remove();
                });

                // Add active state to clicked button
                btn.classList.remove('border-gray-300');
                btn.classList.add('border-accent');

                // Add checkmark
                const checkmark = document.createElement('i');
                checkmark.className =
                    'fas fa-check text-white text-sm absolute inset-0 flex items-center justify-center';
                btn.appendChild(checkmark);

                selectedColor = btn.dataset.color;
                document.getElementById('selectedColor').textContent = selectedColor;
                console.log('Selected color:', selectedColor);
            });
        });

        // Quantity controls
        decreaseQtyBtn.addEventListener('click', () => {
            const currentQty = parseInt(quantityInput.value);
            if (currentQty > 1) {
                quantityInput.value = currentQty - 1;
            }
        });

        increaseQtyBtn.addEventListener('click', () => {
            const currentQty = parseInt(quantityInput.value);
            const maxQty = parseInt(quantityInput.max);
            if (currentQty < maxQty) {
                quantityInput.value = currentQty + 1;
            }
        });

        // Add to cart functionality
        addToCartBtn.addEventListener('click', () => {
            if (!selectedSize) {
                showToast('Please select a size!', 'error');
                return;
            }

            const quantity = parseInt(quantityInput.value);
            const cartItem = {
                productId: {{ $product['id'] }},
                name: '{{ $product['name'] }}',
                price: {{ $product['price'] }},
                size: selectedSize,
                color: selectedColor,
                quantity: quantity,
                image: productImages[0]
            };

            console.log('Adding to cart:', cartItem);

            // Simulate API call
            setTimeout(() => {
                showToast(`Added ${quantity} item(s) to cart!`);

                // Update cart count (simulate)
                const cartBadge = document.querySelector('.fas.fa-shopping-cart').parentElement
                    .querySelector('span');
                const currentCount = parseInt(cartBadge.textContent);
                cartBadge.textContent = currentCount + quantity;
            }, 500);
        });

        // Tab functionality
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetTab = btn.dataset.tab;

                // Update button states
                tabBtns.forEach(b => {
                    b.classList.remove('border-accent', 'text-accent');
                    b.classList.add('border-transparent', 'text-gray-500');
                });
                btn.classList.remove('border-transparent', 'text-gray-500');
                btn.classList.add('border-accent', 'text-accent');

                // Show/hide tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });
                document.getElementById(targetTab + '-tab').classList.remove('hidden');
            });
        });

        // Rating stars functionality
        ratingStars.forEach((star, index) => {
            star.addEventListener('click', () => {
                currentRating = index + 1;

                ratingStars.forEach((s, i) => {
                    s.classList.toggle('text-accent', i < currentRating);
                    s.classList.toggle('text-gray-300', i >= currentRating);
                });

                console.log('Rating selected:', currentRating);
            });

            star.addEventListener('mouseenter', () => {
                ratingStars.forEach((s, i) => {
                    s.classList.toggle('text-accent', i <= index);
                    s.classList.toggle('text-gray-300', i > index);
                });
            });

            star.addEventListener('mouseleave', () => {
                ratingStars.forEach((s, i) => {
                    s.classList.toggle('text-accent', i < currentRating);
                    s.classList.toggle('text-gray-300', i >= currentRating);
                });
            });
        });

        // Toast notification function
        function showToast(message, type = 'success') {
            toastMessage.textContent = message;

            // Update toast styling based on type
            successToast.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg transform transition-transform duration-300 z-50 ${
                type === 'error' ? 'bg-red-500' : 'bg-green-500'
            } text-white`;

            // Show toast
            successToast.classList.remove('translate-x-full');

            // Hide toast after 3 seconds
            setTimeout(() => {
                successToast.classList.add('translate-x-full');
            }, 3000);
        }

        // Form submissions (simulate API calls)
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();

            if (currentRating === 0) {
                showToast('Please select a rating!', 'error');
                return;
            }

            const reviewText = e.target.querySelector('textarea').value.trim();
            if (!reviewText) {
                showToast('Please write a review!', 'error');
                return;
            }

            console.log('Submitting review:', {
                rating: currentRating,
                comment: reviewText
            });

            showToast('Review submitted successfully!');

            // Reset form
            e.target.reset();
            currentRating = 0;
            ratingStars.forEach(star => {
                star.classList.remove('text-accent');
                star.classList.add('text-gray-300');
            });
        });

        // Newsletter subscription
        document.querySelector('footer form').addEventListener('submit', (e) => {
            e.preventDefault();
            const email = e.target.querySelector('input[type="email"]').value;

            if (email) {
                console.log('Newsletter subscription:', email);
                showToast('Successfully subscribed to newsletter!');
                e.target.reset();
            }
        });

        // Keyboard navigation for image gallery
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                prevImageBtn.click();
            } else if (e.key === 'ArrowRight') {
                nextImageBtn.click();
            }
        });

        // Initialize page
        document.addEventListener('DOMContentLoaded', () => {
            console.log('Fashion Store Product Detail Page Loaded');

            // Preload images for better performance
            productImages.forEach(src => {
                const img = new Image();
                img.src = src;
            });
        });
    </script>
</body>

</html>
