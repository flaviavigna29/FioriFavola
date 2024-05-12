<div>
    <input type="text" wire:model="name" placeholder="Search by name...">
    <select wire:model="category">
        <option value="">Select Category</option>
        <option value="category1">Category 1</option>
        <option value="category2">Category 2</option>
        <!-- Add more categories here -->
    </select>
    <select wire:model="price">
        <option value="">Select Price</option>
        <option value="100">$100</option>
        <option value="200">$200</option>
        <!-- Add more price ranges here -->
    </select>

    <ul>
        @foreach ($articles as $article)
            <li>{{ $article->name }} - {{ $article->price }} - {{ $article->category }}</li>
        @endforeach
    </ul>
</div>
