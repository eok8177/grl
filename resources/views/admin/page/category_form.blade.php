<div class="form-group row">
  <label for="title" class="col-sm-2 col-form-label">@lang('message.title')</label>
  <div class="col-sm-10">
    <input type="text" name="title" class="form-control" value="{{$category->title}}">
  </div>
</div>

<div class="form-group row">
  <label for="image" class="col-sm-2 col-form-label">@lang('message.image')</label>
  <div class="col-sm-10">
    <div id="holder" style="margin-top:15px;">
      <img src="/resize/0/100/?img={{urlencode($category->image)}}">
    </div>
    <a id="lfm" data-input="thumbnail" data-preview="holder" class="lfm btn btn-primary">
      <i class="icon icon-picture"></i> @lang('message.select')
    </a>
    <a id="delete-image" class="btn btn-danger {{($category->image) ? '' : 'hidden'}}">
      <i class="icon icon-trash"></i> @lang('message.delete')
    </a>
  </div>
  <input id="thumbnail" class="form-control" type="hidden" name="image" value="{{ $category->image }}">
</div>

<div class="form-group row">
  <label for="description" class="col-sm-2 col-form-label">@lang('message.description')</label>
  <div class="col-sm-10">
    <textarea name="description" class="form-control" rows="2">{{ $category->description }}</textarea>
  </div>
</div>

<div class="toggle-switch" data-ts-color="primary">
  <input type="hidden" name="published" value="0">
  <label for="published" class="ts-label">@lang('message.published')</label>
  <input type="checkbox" name="published" id="published" {{$category->published ? 'checked' : ''}} value="1">
  <label for="published" class="ts-helper"></label>
</div>

<hr>

<div class="form-group row">
  <label for="slug" class="col-sm-2 col-form-label">@lang('message.slug')</label>
  <div class="col-sm-10">
    <input type="text" name="slug" class="form-control" value="{{$category->slug}}" placeholder="{{Lang::get('message.gen_auto')}}">
  </div>
</div>

<button type="submit" class="btn btn-success">
  <i class="fa fa-download"></i> &nbsp; @lang('message.save')
</button>