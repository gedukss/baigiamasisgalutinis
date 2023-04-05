<div class='old-images'>
    @foreach ($images as $image)
    @php $name = (gettype($image) === 'string' ? $image : $image->name) @endphp
        <div class='old-images-block'>
            <img src='{{ asset($name ? "storage/images/$name" : "/images/no-image.png") }}'>
            <input type='hidden' name='{{$oldInputName}}' value='{{ $name }}'>
            <label>{{ $name }}</label>
            <i class="far fa-trash-alt remove-image"></i>
        </div>
    @endforeach
</div>

<label for="{{$label}}">{{$label}}</label>
<div class="input-group">
    <div class="custom-file">
        <input multiple type="file" class="custom-file-input" name="{{$inputName}}" id="{{$inputId}}">
        <label class="custom-file-label" for="{{$label}}">Choose image</label>
    </div>
    <div class="input-group-append">
        <span class="input-group-text">Upload</span>
    </div>
</div>
