<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.task_title') }} *</label>
  <div class=" col-lg-8 col-md-9 col-sm-12">
    <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required maxlength="1000"
    value="{{ old('name' , isset($data) ? $data->title : '') }}" name="name" placeholder="">
    @if ($errors->has('name'))
        <span class="invalid-feedback">{{ $errors->first('name') }}</span>
    @endif
  </div>
</div>


<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.employees') }} *</label>
  <div class="col-lg-9 col-md-9 col-sm-12">
    <div class="kt-checkbox-list">
      @foreach ($employees as $employee)
        <div style="padding: 10px;">
          <label class="kt-checkbox">
            <input type="checkbox" value="{{ $employee->id }}" name="employees_ids[]"
              {{
                  in_array( $employee->id , old('employees_ids' , isset($data) ? $data->employees->pluck('id')->toArray() : []) )
                  ? 'checked' : ''
              }}
              >{{ $employee->name }}
            <span></span>
          </label>
        </div>
      @endforeach
    </div>
    <!-- <span class="form-text text-muted">Please select at lease 1 and maximum 2 options</span> -->
  </div>
</div>


<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.ourapp') }} *</label>
  <div class="col-lg-4 col-md-9 col-sm-12">
    <select class="form-control kt-select2 {{ $errors->has('ourapp_id') ? ' is-invalid' : '' }}" name="ourapp_id" id="kt_select2_2">
      @foreach ( $ourApps as $ourApp )
        <option {{ old('ourapp_id' , isset($data) ? ($data->ourapp->id == $ourApp->id) ? 'selected' : '' : '') }}
          value="{{ $ourApp->id }}"> {{ $ourApp->title }}</option>
      @endforeach
    </select>
    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
    @if ($errors->has('ourapp_id'))
        <span class="invalid-feedback">{{ $errors->first('ourapp_id') }}</span>
    @endif
  </div>
</div>


<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.priority_level') }} *</label>
  <div class="col-lg-4 col-md-9 col-sm-12">
    <select class="form-control kt-select2 {{ $errors->has('priority_level_id') ? ' is-invalid' : '' }}" name="priority_level_id" id="kt_select2_3">
      @foreach ( $priorityLevels as $priorityLevel )
        <option {{ old('priority_level_id' , isset($data) ? ($data->priority_level->id == $priorityLevel->id) ? 'selected' : '' : '') }}
          value="{{ $priorityLevel->id }}"> {{ $priorityLevel->title }}</option>
      @endforeach
    </select>
    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
    @if ($errors->has('priority_level_id'))
        <span class="invalid-feedback">{{ $errors->first('priority_level_id') }}</span>
    @endif
  </div>
</div>


<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.description') }}</label>
  <div class=" col-lg-8 col-md-9 col-sm-12">
    <x-inputs.ckeditor name="description" data="{!! isset($data) ? $data->description : '' !!}" />
    @if ($errors->has('description'))<span class="invalid-feedback">{{ $errors->first('description') }}</span>@endif
  </div>
</div>


<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.duration') }} *</label>
  <div class=" col-lg-4 col-md-9 col-sm-12">
    <input name="duration" type="number" step="0.01" required  class="form-control {{ $errors->has('duration') ? ' is-invalid' : '' }}"
      data="{{ isset($data) ? $data->duration : '' }}" />
    @if ($errors->has('duration'))
          <span class="invalid-feedback">{{ $errors->first('duration') }}</span>
    @endif
  </div>
</div>


<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.start_date') }}</label>
  <div class=" col-lg-4 col-md-9 col-sm-12">
    <input type="datetime-local" class="form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}"
      value="{{ old('start_date' , isset($data) ? $data->start_date : '') }}" name="start_date">
    @if ($errors->has('start_date'))
          <span class="invalid-feedback">{{ $errors->first('start_date') }}</span>
    @endif
  </div>
</div>


<div class="form-group row">
  <label class="col-form-label col-lg-3 col-sm-12">{{ __('words.is_general') }} *</label>
  <div class="col-lg-9 col-md-9 col-sm-12">
    <div class="kt-checkbox-list">
      <label class="kt-checkbox">
        <input type="checkbox" value="1" name="is_general"
           {{ old('is_general' , isset($data) ? $data->is_general ? 'checked' : '' : '' ) }}
          >
        <span></span>
      </label>
    </div>
    <!-- <span class="form-text text-muted">Please select at lease 1 and maximum 2 options</span> -->
  </div>
</div>
