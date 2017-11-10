<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<body>
			<h2>New Agency Appointment Request - Hallmark CIS</h2>
			<table>
				<tr>
					<td><p>Agency Name:</p></td>
					<td><p>{{ $agency_name }}</p></td>
				</tr>
                                <tr>
					<td><p>Agency Address:</p></td>
					<td><p>{{ $agency_address }}</p></td>
				</tr>
                                <tr>
					<td><p>City:</p></td>
					<td><p>{{ $city }}</p></td>
				</tr>
				<tr>
					<td><p>Organization:</p></td>
					<td><p>@if (isset($corporation)) <img src="{{ URL::asset('assets/images/forms/tick-checked.png') }}"> @else <img src="{{ URL::asset('assets/images/forms/tick-cross.png') }}"> @endif Corporation </p>
                                            <p>@if (isset($partnership)) <img src="{{ URL::asset('assets/images/forms/tick-checked.png') }}"> @else <img src="{{ URL::asset('assets/images/forms/tick-cross.png') }}"> @endif Partnership </p>
                                            <p>@if (isset($llc)) <img src="{{ URL::asset('assets/images/forms/tick-checked.png') }}"> @else <img src="{{ URL::asset('assets/images/forms/tick-cross.png') }}"> @endif LLC</p>
                                            <p>@if (isset($other)) <img src="{{ URL::asset('assets/images/forms/tick-checked.png') }}"> @else <img src="{{ URL::asset('assets/images/forms/tick-cross.png') }}"> @endif Other</p>
                                           </td>
				</tr>
				<tr>
					<td><p>Affiliated With:</p></td>
					<td><p>@if (isset($bank)) <img src="{{ URL::asset('assets/images/forms/tick-checked.png') }}"> @else <img src="{{ URL::asset('assets/images/forms/tick-cross.png') }}"> @endif Bank </p>
                                            <p>@if (isset($estate)) <img src="{{ URL::asset('assets/images/forms/tick-checked.png') }}"> @else <img src="{{ URL::asset('assets/images/forms/tick-cross.png') }}"> @endif Real Estate </p>
                                            <p>@if (isset($mortgage)) <img src="{{ URL::asset('assets/images/forms/tick-checked.png') }}"> @else <img src="{{ URL::asset('assets/images/forms/tick-cross.png') }}"> @endif Mortgage Co.</p>
                                            <p>@if (isset($premium)) <img src="{{ URL::asset('assets/images/forms/tick-checked.png') }}"> @else <img src="{{ URL::asset('assets/images/forms/tick-cross.png') }}"> @endif Premium Finance Co.</p>
                                           </td>
				</tr>
				<tr>
					<td><p>State:</p></td>
					<td><p>{{ $state }}</p></td>
				</tr>
				<tr>
					<td><p>Zip Code:</p></td>
					<td><p>{{ $zip }}</p></td>
				</tr>	
                                <tr>
					<td><p>Why are you requesting an agency appointment?:</p></td>
					<td><p>{{ $why_appointment }}</p></td>
				</tr>	
                                
			</table>
		</body>
	</body>
</html>