<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<body>
			<h2>Contact Our Team Page Information</h2>
			<table>
				<tr>
					<td><p>Contact Name:</p></td>
					<td><p>{{ $contact_name }}</p></td>
				</tr>
                                <tr>
					<td><p>Agency Name:</p></td>
					<td><p>{{ $agency }}</p></td>
				</tr>
                                <tr>
					<td><p>Phone:</p></td>
					<td><p>{{ $phone }}</p></td>
				</tr>
				<tr>
					<td><p>Email:</p></td>
					<td><p>{{ $email }}</p></td>
				</tr>
				<tr>
					<td><p>State Agency Licensed in:</p></td>
					<td><p>{{ $licensed }}</p></td>
				</tr>
				<tr>
					<td><p>State(s) Agency does business in:</p></td>
					<td><p>{{ $business }}</p></td>
				</tr>
				<tr>
					<td><p>Message:</p></td>
					<td><p>{{ $meg }}</p></td>
				</tr>			
			</table>
		</body>
	</body>
</html>