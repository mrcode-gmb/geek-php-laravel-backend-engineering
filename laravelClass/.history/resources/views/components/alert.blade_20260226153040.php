@props(['type' => 'success', 'class'=>'bg-green-500'])
<div class="{{ $class }} text-white font-bold rounded-lg p-4 mb-4" role="alert">
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <p>Successful alert</p>
    {{ $type }}
</div>