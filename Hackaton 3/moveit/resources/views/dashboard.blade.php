<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Marketplace') }}
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body text-center">
                                @if ($product->url_img)
                                    <img src="{{ $product->url_img }}" class="img-circle" alt="Product Image">
                                @else
                                    <img src="{{ asset('images/sinfoto.jpg') }}" class="img-circle" alt="Default Image">
                                @endif
                                <h3 class="mt-4 text-lg font-semibold">{{ __('Product Name:') }} {{ $product->name }}
                                </h3>
                                <p class="mt-2">{{ __('Description: ') }} {{ $product->description }}</p>
                                <p class="mt-4">{{ __('Price ') }} $: {{ $product->price }}</p>
                                <p class="mt-4">{{ __('User: ') }} {{ $product->getUserName() }}</p>
                                <button class="btn-like" data-product-id="{{ $product->id }}">
                                    <i class="fas fa-thumbs-up"></i> {{ __('Like') }}
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-slot>



</x-app-layout>

<style>
    .img-circle {
        border-radius: 50%;
        max-width: 150px;
        max-height: 150px;
        box-shadow: 0 4px 8px rgba(255, 215, 0, 0.5);
        /* Golden shadow */
    }

    .img-circle:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 16px rgba(255, 215, 0, 0.7);
        /* Golden shadow on hover */
    }

    .btn-like {
        background-color: #FFD700;
        border: none;
        color: white;
        padding: 10px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 25px;
        transition: background-color 0.3s, transform 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .btn-like:hover {
        background-color: #FFC107;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btnLike = document.querySelectorAll('.btn-like');

        btnLike.forEach((btn) => {
            btn.addEventListener('click', () => {
                // Verifica si el botón contiene "Like"
                if (btn.textContent.includes('Like')) {
                    btn.style.backgroundColor = '#FFC107';
                    btn.innerHTML = '<i class="fas fa-thumbs-up"></i> Liked';
                } else {
                    btn.style.backgroundColor = '#FFD700';
                    btn.innerHTML = '<i class="fas fa-thumbs-up"></i> Like';
                }
            });
        });
    });
</script>

