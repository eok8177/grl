
<div class="form-group row">
  <label for="title" class="col-sm-2 col-form-label">@lang('message.name')</label>
  <div class="col-sm-10">
    {!! Form::text('title', $page->title, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  <label for="work" class="col-sm-2 col-form-label">@lang('message.work')</label>
  <div class="col-sm-10">
    {!! Form::text('work', $page->work, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="form-group row">
  <label for="image" class="col-sm-2 col-form-label">@lang('message.image')</label>
  <div class="col-sm-10">
    <img id="holder" style="margin-top:15px;max-height:100px;" src="{{ $page->image }}">
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
  <label for="text" class="col-sm-2 col-form-label">@lang('message.description')</label>
  <div class="col-sm-10">
    {!! Form::textarea('text', $page->text, ['class' => 'form-control', 'rows' => '2']) !!}
  </div>
</div>

<div class="toggle-switch" data-ts-color="primary">
  {!! Form::hidden('published', 0) !!}
  <label for="published" class="ts-label">@lang('message.published')</label>
  {!! Form::checkbox('published', 1, $page->published, ['id' => 'published']) !!}
  <label for="published" class="ts-helper"></label>
</div>

<hr>


<button type="submit" class="btn btn-success">
  <i class="fa fa-download"></i> &nbsp; @lang('message.save')
</button>