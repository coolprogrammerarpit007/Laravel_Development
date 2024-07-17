<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <div class="form-group">
        <label for="name">{{$label}}</label>
        <input type="{{$type}}" class="form-control" name="{{$name}}" id="{{$id}}">
        <span class="text-danger">
            @error('{{$type}}')
                {{ $message }}
            @enderror
        </span>
    </div>
</div>