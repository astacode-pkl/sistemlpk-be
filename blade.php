<button class="btn btn-primary me-2 rounded-pill px-4" 
        data-id="{{ $item->id }}" 
        data-title="{{ $item->title }}" 
        data-description="{{ $item->description }}" 
        data-image="{{ asset('storage/'.$item->images) }}"
        onclick="handleEditClick(this)">
    <span class="text-white">Edit</span>
</button> 