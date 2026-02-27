@props(['type' => 'success', 'class'=>'red'])
<div style="text-align: center; background: {{ $class }}; background: linear-gradient(90deg, {{ $class }} 0%, {{ $class }} 100%); color: white; padding: 20px; border-radius: 5px;">
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <p>Successful alert</p>
    {{ $type }}
</div>