<style>
    .card-title{
        overflow: hidden;
        word-wrap: break-word;
    }
</style>
<div class="card {{$event['color']}}" onclick="window.location = '{{ route('notes.find', $event['id']) }}'">
    <div class="content">
        <span class="card-title">{{ $event['title'] }}</span>
        <p>{{ $event['description'] }}</p>
    </div>
</div>

