@extends('layouts.master')

@section('title')
Visual Pro
@endsection

@section('style')
<link rel="stylesheet" href="/css/office.css">
@endsection

@section('content')
	<div class="ui inverted segment right visible sidebar">
		<div class="ui relaxed inverted divided list">
			@for($i=1;$i<=3;$i++)
			<div class="item project" id="{{$i}}">
				<div class="content">
					<div class="header">{{$i}}</div>
					This is a demo
				</div>
			</div>
			@endfor
			<div class="ui left icon item" id="create">
				<div class="ui inverted fluid button">
					<i class="ui plus icon"></i>
					Create
				</div>
			</div>
		</div>
	</div>

<div class="ui pusher">
	<div class="flex-center position-ref full-height">
      <div class="preview-project">
				<div class="flex-center position-ref container-height">
	      	<div class="content">
						<div id="title"></div>
					</div>
      	</div>
      </div>
  </div>
		<div class="buttons-container">
			<a class="ui black right labeled icon button" href="office/songbook">
				<i class="ui music icon"></i>
				Songbook
			</a>
			<div class="ui buttons">
				<form method="GET" action="\visual\console" accept-charset="UTF-8">
					<input name="project_id" type="hidden" value="" id="view-selector">
					<button class="ui black right labeled icon button" type="submit">
						<i class="ui unhide icon"></i>
						View
					</button>
				</form>				
				<form method="GET" action="\office\edit" accept-charset="UTF-8">
					<input name="project_id" type="hidden" value="" id="edit-selector">
					<button class="ui black right labeled icon button" type="submit">
						<i class="ui pencil icon"></i>
						Edit
					</button>
				</form>
			</div>
				<div class="ui black right labeled icon button" id="archive">
					<i class="ui archive icon"></i>
					Archive
				</div>
		</div>
</div>



<!-- Create Modal -->
<div class="ui create modal">
	<div class="content">
		<form method="POST" action="\office\create" accept-charset="UTF-8">
			<h2>Create New Project</h2>
			<input name="_token" type="hidden" value="{{ csrf_token() }}">
			<table class="container-width">
				<tr>
					<th>Project Name:</th>
					<td>
						<div class="ui form">
							<input type="text" name="name" placeholder="{{ trans('office.field.project_name') }}">
						</div>
					</td>
				</tr>
				@if ($errors->has('name'))
          <tr>
          	<td colspan="2">
		          <span class="ui red pointing label"> {{ $errors->first('name') }}</span>
        		</td>
        	</tr>
        @endif
				<tr>
					<th>Description:</th>
					<td>
						<div class="ui form">
							<input type="text" name="description" placeholder="{{ trans('office.field.project_description') }}">
						</div>
					</td>
				</tr>
				<tr>
					<th></th>
					<td></td>
				</tr>
			</table>
      <div class="ui hidden divider"></div>
			<table>
				<tr>
			    <button class="ui positive fluid right labeled icon button" type="submit">
				      <i class="checkmark icon"></i>
				      Create
				  </button>
				</tr>
			</table>
		  </div>
		</form>
	</div>
</div>

<!-- Archive modal -->
@endsection

@section('script')
<script src="/js/office.js"></script>
@endsection