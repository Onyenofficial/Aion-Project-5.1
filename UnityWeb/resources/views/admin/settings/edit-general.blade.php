@extends('admin')

@section('content')


	<div class="col-sm-12 col-md-12">
		<form action="{{ action('Admin\SettingsController@postEditGeneral') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="page-header">
			<h3>General Settings Edit
			<small>
				<input class="btn btn-primary btn-xs pull-right" type="submit" value="Update Settings">
				<a class="btn btn-danger btn-xs pull-right fr" href="{{ action('Admin\SettingsController@getIndex') }}">Cancel Edit</a>
			</small></h3>

			@include('includes.form-messages')
		</div>

		@if ( ! empty($settings))
				<div class="col-sm-3">
					<div class="form-group">
						<label>Server Name</label>
						<input type="text" name="server_name" class="form-control" value="{{ $settings->server_name }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Pass Reset Expire</label>
						<input type="text" name="pass_reset_expire" class="form-control" value="{{ $settings->pass_reset_expire }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Game Port</label>
						<input type="text" name="port_game" class="form-control" value="{{ $settings->port_game }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Login Port</label>
						<input type="text" name="port_login" class="form-control" value="{{ $settings->port_login }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Port Timeout</label>
						<input type="text" name="port_timeout" class="form-control" value="{{ $settings->port_timeout }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Rates Exp</label>
						<input type="text" name="rates_exp" class="form-control" value="{{ $settings->rates_exp }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Rates Kinah</label>
						<input type="text" name="rates_kinah" class="form-control" value="{{ $settings->rates_kinah }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Rates Quest</label>
						<input type="text" name="rates_quest" class="form-control" value="{{ $settings->rates_quest }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Rates Drop</label>
						<input type="text" name="rates_drop" class="form-control" value="{{ $settings->rates_drop }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Webshop Discount Normal</label>
						<input type="text" name="webshop_discount_normal" class="form-control" value="{{ $settings->webshop_discount_normal }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Webshop Discount Premium</label>
						<input type="text" name="webshop_discount_premium" class="form-control" value="{{ $settings->webshop_discount_premium }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Webshop Discount VIP</label>
						<input type="text" name="webshop_discount_vip" class="form-control" value="{{ $settings->webshop_discount_vip }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Credits Name</label>
						<input type="text" name="credit_name" class="form-control" value="{{ $settings->credit_name }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Donate Type</label>
						<select name="donate_type" class="form-control">
							<option value="CREDITS" {{ $settings->donate_type == 'CREDITS' ? 'selected="selected"' : '' }}>CREDITS</option>
							<option value="TOLL" {{ $settings->donate_type == 'TOLL' ? 'selected="selected"' : '' }}>TOLL</option>
						</select>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Vote Type</label>
						<select name="vote_type" class="form-control">
							<option value="CREDITS" {{ $settings->vote_type == 'CREDITS' ? 'selected="selected"' : '' }}>CREDITS</option>
							<option value="TOLL" {{ $settings->vote_type == 'TOLL' ? 'selected="selected"' : '' }}>TOLL</option>
						</select>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Vote Ip Blocking</label>
						<select name="vote_ip_blocking" class="form-control">
							<option value="0" {{ $settings->vote_ip_blocking == 0 ? 'selected="selected"' : '' }}>No</option>
							<option value="1" {{ $settings->vote_ip_blocking == 1 ? 'selected="selected"' : '' }}>Yes</option>
						</select>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>No. of News</label>
						<input type="text" name="news_count" class="form-control" value="{{ $settings->news_count }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>No. of Rank Player</label>
						<input type="text" name="rank_player" class="form-control" value="{{ $settings->rank_player }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>No. of Rank Abyss</label>
						<input type="text" name="rank_abyss" class="form-control" value="{{ $settings->rank_abyss }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>No. of Rank Exp</label>
						<input type="text" name="rank_exp" class="form-control" value="{{ $settings->rank_exp }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>No. of Rank Legions</label>
						<input type="text" name="rank_legions" class="form-control" value="{{ $settings->rank_legions }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>No. of Rank GP</label>
						<input type="text" name="rank_gp" class="form-control" value="{{ $settings->rank_gp }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>No. of Rank Kinah</label>
						<input type="text" name="rank_kinah" class="form-control" value="{{ $settings->rank_kinah }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>No. of Rank AP</label>
						<input type="text" name="rank_ap" class="form-control" value="{{ $settings->rank_ap }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Allow Unstuck in Minutes</label>
						<input type="text" name="unlock_unstuck" class="form-control" value="{{ $settings->unlock_unstuck }}">
					</div>
				</div>

				<div class="col-sm-3">
					<div class="form-group">
						<label>Allow Banned Ip Login</label>
						<select name="allow_banned_ip" class="form-control">
							<option value="0" {{ $settings->allow_banned_ip == 0 ? 'selected="selected"' : '' }}>No</option>
							<option value="1" {{ $settings->allow_banned_ip == 1 ? 'selected="selected"' : '' }}>Yes</option>
						</select>
					</div>
				</div>
		</form>
		@else
			No General settings available.
		@endif
	</div>

@endsection