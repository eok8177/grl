
<div class="form-group row">
  <label for="title" class="col-sm-2 col-form-label">@lang('message.title')</label>
  <div class="col-sm-10">
    <input type="text" name="title" class="form-control" value="{{$page->title}}">
  </div>
</div>

<div class="form-group row">
  <label for="image" class="col-sm-2 col-form-label">@lang('message.image')</label>
  <div class="col-sm-10">
    <div id="holder" style="margin-top:15px;">
      <img src="/resize/0/100/?img={{urlencode($page->image)}}">
    </div>
    <a id="lfm" data-input="thumbnail" data-preview="holder" class="lfm btn btn-primary">
      <i class="icon icon-picture"></i> @lang('message.select')
    </a>
    <a id="delete-image" class="btn btn-danger {{($page->image) ? '' : 'hidden'}}">
      <i class="icon icon-trash"></i> @lang('message.delete')
    </a>
  </div>
  <input id="thumbnail" class="form-control" type="hidden" name="image" value="{{ $page->image }}">
</div>

<div class="form-group row">
  <label for="link" class="col-sm-2 col-form-label">@lang('message.link')</label>
  <div class="col-sm-10">
    <input type="text" name="link" class="form-control" value="{{$page->link}}">
  </div>
</div>

<div class="toggle-switch" data-ts-color="primary">
  <input type="hidden" name="published" value="0">
  <label for="published" class="ts-label">@lang('message.published')</label>
  <input type="checkbox" name="published" id="published" {{$page->published ? 'checked' : ''}} value="1">
  <label for="published" class="ts-helper"></label>
</div>

<hr>


<button type="submit" class="btn btn-success">
  <i class="fa fa-download"></i> &nbsp; @lang('message.save')
</button>