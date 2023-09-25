<div >
    <div class="grid grid-cols-4 gap-2">
        @foreach ($products as $item)
            <x-card-fav product="{{ $item->product_id }}" price="{{ $item->product_price }}"
                name="{{ $item->product_name }}" slug="{{ $item->product_name_slug }}" />
        @endforeach
    </div>
</div>
