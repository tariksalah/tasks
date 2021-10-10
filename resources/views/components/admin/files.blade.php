<style>.file_a {display: flex;} .file_name {color: #056164;padding: 0px 12px;} .files_img { width: 150px; height: 150px} </style>

@if (isset($totalOnly))
  @if( count($files))
    <i class="flaticon-attachment"></i>  {{ __('file.files_count') }} : {{ count($files) }}
  @endif
@else

  <div class="row">
    @foreach ($files as $file)
      @switch( $file->file_type )
        @case('image/jpeg')
            @if (isset($iconlOnly))
              <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-image"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @else
              <img src="{{ $file->filePath() }}" class="files_img">
            @endif
            @isset($showDelete) <x-buttons.but_delete_file link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
            @break
        @case('image/jpg')
            @if (isset($iconlOnly))
              <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-image"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @else
              <img src="{{ $file->filePath() }}" class="files_img">
            @endif
            @isset($showDelete) <x-buttons.but_delete_file link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
            @break
        @case('image/png')
            @if (isset($iconlOnly))
              <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-image"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @else
              <img src="{{ $file->filePath() }}" class="files_img">
            @endif
            @isset($showDelete) <x-buttons.but_delete_file link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
            @break
        @case('image/gif')
            @if (isset($iconlOnly))
              <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-image"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @else
              <img src="{{ $file->filePath() }}" class="files_img">
            @endif
            @isset($showDelete) <x-buttons.but_delete_file link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
            @break
        @case('image/bmp')
            @if (isset($iconlOnly))
              <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-image"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @else
              <img src="{{ $file->filePath() }}" class="files_img">
            @endif
            @isset($showDelete) <x-buttons.but_delete_file link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
            @break
        @case('image/*')
            @if (isset($iconlOnly))
              <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-image"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @else
              <img src="{{ $file->filePath() }}" class="files_img">
            @endif
            @isset($showDelete) <x-buttons.but_delete_file link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
            @break
        @case('video/mp4')
            @if (isset($iconlOnly))
              <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-image"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @else
              <video width="320" height="240" controls>
               <source src="{{ $file->filePath() }}" type="video/mp4">
               <!-- <source src="movie.ogg" type="video/ogg"> -->
              </video>
            @endif
            @isset($showDelete) <x-buttons.but_delete_file link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
            @break
        @case('video/*')
            @if (isset($iconlOnly))
              <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-image"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @else
              <video width="320" height="240" controls>
               <source src="{{ $file->filePath() }}" type="video/mp4">
               <!-- <source src="movie.ogg" type="video/ogg"> -->
              </video>
            @endif
            @isset($showDelete) <x-buttons.but_delete_file link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
            @break
        @case('application/pdf')
          <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-pdf"></i><span class="file_name">{{ $file->fileName() }}</span></a>
          {{--
          <div class="col-md-4"><div class="kt-demo-icon"><div class="kt-demo-icon__preview">
            <a class="file_a" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-pdf"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @isset($showDelete) <x-buttons.but_delete link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset--}}
          </div></div></div>
          @break
        @case('audio/mpeg')
          <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-audio"></i><span class="file_name">{{ $file->fileName() }}</span></a>
          {{--
          <div class="col-md-4"><div class="kt-demo-icon"><div class="kt-demo-icon__preview">
            <a class="file_a" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-audio"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @isset($showDelete) <x-buttons.but_delete link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
          </div></div></div>
          --}}
          @break
        @case('application/msword')
          <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-word"></i><span class="file_name">{{ $file->fileName() }}</span></a>
          {{--
          <div class="col-md-4"><div class="kt-demo-icon"><div class="kt-demo-icon__preview">
            <a class="file_a" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-word"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @isset($showDelete) <x-buttons.but_delete link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
          </div></div></div>
          --}}
          @break
        @case('application/vnd.openxmlformats-officedocument.wordprocessingml.document')
          <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-word"></i><span class="file_name">{{ $file->fileName() }}</span></a>
          {{--
          <div class="col-md-4"><div class="kt-demo-icon"><div class="kt-demo-icon__preview">
            <a class="file_a" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-word"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @isset($showDelete) <x-buttons.but_delete link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
          </div></div></div>
          --}}
          @break
        @case('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')
          <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-excel"></i><span class="file_name">{{ $file->fileName() }}</span></a>
          {{--
          <div class="col-md-4"><div class="kt-demo-icon"><div class="kt-demo-icon__preview">
            <a class="file_a" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-excel"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @isset($showDelete) <x-buttons.but_delete link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
          </div></div></div>
          --}}
          @break
        @case('application/vnd.openxmlformats-officedocument.presentationml.presentation')
          <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-powerpoint"></i><span class="file_name">{{ $file->fileName() }}</span></a>
          {{--
          <div class="col-md-4"><div class="kt-demo-icon"><div class="kt-demo-icon__preview">
            <a class="file_a" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-powerpoint"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @isset($showDelete) <x-buttons.but_delete link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
          </div></div></div>
          --}}
          @break
        @case('text/plain')
          <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-alt"></i><span class="file_name">{{ $file->fileName() }}</span></a>
          {{--
          <div class="col-md-4"><div class="kt-demo-icon"><div class="kt-demo-icon__preview">
            <a class="file_a" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-alt"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @isset($showDelete) <x-buttons.but_delete link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
          </div></div></div>
          --}}
          @break
        @case('application/json')
          <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-code"></i><span class="file_name">{{ $file->fileName() }}</span></a>
          {{--
          <div class="col-md-4"><div class="kt-demo-icon"><div class="kt-demo-icon__preview">
            <a class="file_a" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file-code"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            @isset($showDelete) <x-buttons.but_delete link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset
          </div></div></div>
          --}}
          @break
        @default
          <a class="file_a btn btn-secondary btn-elevate btn-pill" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file"></i><span class="file_name">{{ $file->fileName() }}</span></a>
          <div class="col-md-4"><div class="kt-demo-icon"><div class="kt-demo-icon__preview">
            <a class="file_a" href="{{ route('admin.files.download' , ['file' => $file->file_name] ) }}"><i class="fa fa-file"></i><span class="file_name">{{ $file->fileName() }}</span></a>
            {{--@isset($showDelete) <x-buttons.but_delete link="{{ route('admin.files.delete' , [ 'id' => $file->id ]) }}" /> @endisset--}}
          </div></div></div>
      @endswitch
    @endforeach
  </div>

@endif
