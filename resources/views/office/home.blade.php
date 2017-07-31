@extends('office.layout')

@section('title')
Home:
@endsection

@section('style')
@endsection

@section('sidebar')

@forelse($projects as $project)
<div class="item project" id="{{$project->id}}" data-name="{{$project->name}}" data-description="{{$project->description}}">
	<div class="content">
		<div class="header" id="projectname">{{$project->name}}</div>
	</div>
</div>
@empty
<div class="item project" id="This is an Empty Project">
	<div class="content">
		<div class="header">No project created yet</div>
		Create a new project now!
	</div>
</div>
@endforelse
<div class="ui left icon item" id="create">
	<div class="ui inverted fluid button">
		<i class="ui plus icon"></i>
		Create new project
	</div>
</div>

@endsection

@section('preview')

<div class="content">
	<div id="title">
	</div>
</div>

@endsection

@section('controls')

<div class="buttons-container">
	<a class="ui black right labeled icon button" href="office/songbook">
		<i class="ui music icon"></i>
		Songbook
	</a>
	<div class="ui buttons">
		<form method="GET" action="\visual\console" accept-charset="UTF-8">
			<input name="projectID" type="hidden" value="" id="view-selector">
			<button class="ui black right labeled icon button" type="submit">
				<i class="ui unhide icon"></i>
				View
			</button>
		</form>				
		<form method="GET" action="\office\project" accept-charset="UTF-8">
			<input name="projectID" type="hidden" value="" id="edit-selector">
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

@endsection

@section('modal')

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
<script src="/js/office/home.js"></script>
@endsection