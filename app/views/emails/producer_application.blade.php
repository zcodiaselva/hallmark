<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<body>
			<h2>New Producer Agreement Application - Hallmark Aerospace</h2>
			<table>
				<tr>
					<td><p><strong>Date of Application:</strong></p></td>
					<td><p>{{ $date }}</p></td>
				</tr>
				<tr>
					<td><p><strong>Full Legal Name of Agency:</strong></p></td>
					<td><p>{{ $name_of_agency }}</p></td>
				</tr>
				<tr>
					<td><p><strong>Mailing Address:</strong></p></td>
					<td><p>{{ $mailing_address }}</p></td>
				</tr>
				<tr>
					<td><p>&nbsp;</p></td>
					<td>
						<p>
							<strong>State:</strong> {{ $mailing_address_state }} &nbsp; &nbsp; &nbsp; &nbsp; 
							<strong>Zip Code:</strong> {{ $mailing_address_zip_code }}
						</p>
					</td>
				</tr>
				<tr>
					<td><p><strong>Physical Address:</strong></p></td>
					<td><p>{{ $physical_address }}</p></td>
				</tr>
				<tr>
					<td><p>&nbsp;</p></td>
					<td>
						<p>
							<strong>State:</strong> {{ $physical_address_state }} &nbsp; &nbsp; &nbsp; &nbsp; 
							<strong>Zip Code:</strong> {{ $physical_address_zip_code }}
						</p>
					</td>
				</tr>
				<tr>
					<td><p>&nbsp;</p></td>
					<td>
						<p>
							<strong>Phone:</strong> {{ $physical_address_phone }} &nbsp; &nbsp; &nbsp; &nbsp; 
							<strong>Fax:</strong> {{ $physical_address_fax }}
						</p>
					</td>
				</tr>
				<tr>
					<td><p><strong>Organization Type:</strong></p></td>
					<td><p>{{ implode(", ", $organization_type) }}</p></td>
				</tr>
				<tr>
					<td><p><strong>Primary Contact:</strong></p></td>
					<td><p>{{ $primary_contact }}</p></td>
				</tr>
				<tr>
					<td><p><strong>Email Address:</strong></p></td>
					<td><p>{{ $year_in_business }}</p></td>
				</tr>
				<tr>
					<td><p><strong>Website:</strong></p></td>
					<td><p>{{ $website }}</p></td>
				</tr>
				
			</table>
		</body>
	</body>
</html>