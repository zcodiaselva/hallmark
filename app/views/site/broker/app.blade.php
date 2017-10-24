<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<body style="font-size:12px; font-family:Serif;">
			<h3 style="color:#2a369e; text-align:center;">New Producer Appointment Application: <span  style="color:#a98d01;">Hallmark E&amp;S</span></h3>

			<table style="width:100%;vertical-align:top;">

				<thead style="color:#fff; background:#2a369e;">
					<tr>
						<td colspan="3"><p style="padding:3px 6px; margin:0;">General Information:</p></td>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td style="vertical-align:top; width:25%;">Date of Application:</td>
						<td>{{ $producer1['date_of_application'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:top;">Full Legal Name of Agency:</td>
						<td>{{ $producer1['name_of_agency'] }}</td>
						<td></td>
					</tr>

					<tr>
						<td style="vertical-align:top;">Mailing Address:</td>
						<td>{{ $producer1['mailing_address'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>State: {{ $producer1['mailing_address_state'] }}</td>
						<td>Zip Code: {{ $producer1['mailing_address_zip_code'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;">Physical Address:</td>
						<td>{{ $producer1['physical_address'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>State: {{ $producer1['physical_address_state'] }}</td>
						<td>Zip Code: {{ $producer1['physical_address_zip_code'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td>Phone: {{ $producer1['physical_address_phone'] }}</td>
						<td>Fax: {{ $producer1['physical_address_fax'] }}</td>
					</tr>
					
					<tr>
						<td style="vertical-align:top;">Corporate Address:</td>
						<td>{{ $producer1['corporate_address'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>State: {{ $producer1['corporate_address_state'] }}</td>
						<td>Zip Code: {{ $producer1['corporate_address_zip_code'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td>Phone: {{ $producer1['corporate_address_phone'] }}</td>
						<td>Fax: {{ $producer1['corporate_address_fax'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;">Organization Type:</td>
						<td>{{ $producer1['organization_type'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:top;">Year in Business:</td>
						<td>{{ $producer1['year_in_business'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:top;">Website:</td>
						<td>{{ $producer1['website'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:top;">Tax ID Number:</td>
						<td>{{ $producer1['tax_id_number'] }}</td>
						<td></td>
					</tr>


					<tr>
						<td style="vertical-align:top;"><p><strong>Additional Branch Offices:</strong></p></td>
						<td></td>
						<td></td>
					</tr>

					@if ($producer1['branch1_mailing_address'])
					<tr>
						<td style="vertical-align:top;">Branch #1 Mailing Address:</td>
						<td>{{ $producer1['branch1_mailing_address'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>State: {{ $producer1['branch1_mailing_address_state'] }}</td>
						<td>Zip Code: {{ $producer1['branch1_mailing_address_zip_code'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td>Phone: {{ $producer1['branch1_mailing_address_phone'] }}</td>
						<td>Fax: {{ $producer1['branch1_mailing_address_fax'] }}</td>
					</tr>
					@endif

					@if ($producer1['branch2_mailing_address'])
					<tr>
						<td style="vertical-align:top;">Branch #2 Mailing Address:</td>
						<td>{{ $producer1['branch2_mailing_address'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>State: {{ $producer1['branch2_mailing_address_state'] }}</td>
						<td>Zip Code: {{ $producer1['branch2_mailing_address_zip_code'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td>Phone: {{ $producer1['branch2_mailing_address_phone'] }}</td>
						<td>Fax: {{ $producer1['branch2_mailing_address_fax'] }}</td>
					</tr>
					@endif

					@if ($producer1['branch3_mailing_address'])
					<tr>
						<td style="vertical-align:top;">Branch #3 Mailing Address:</td>
						<td>{{ $producer1['branch3_mailing_address'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>State: {{ $producer1['branch3_mailing_address_state'] }}</td>
						<td>Zip Code: {{ $producer1['branch3_mailing_address_zip_code'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td>Phone: {{ $producer1['branch3_mailing_address_phone'] }}</td>
						<td>Fax: {{ $producer1['branch3_mailing_address_fax'] }}</td>
					</tr>
					@endif

				</tbody>
				
			</table>


			<br>

			<table style="width:100%;vertical-align:top;">

				<thead style="color:#fff; background:#2a369e;">
					<tr>
						<td colspan="3"><p style="padding:3px 6px; margin:0;">Insurance:</p></td>
					</tr>
				</thead>

				<tbody>

					<tr>
						<td colspan="3">Does your agency maintain Fidelity Coverage over all offices and employees? {{ ($producer2['fidelity_coverage'] == 'Yes')? 'Yes' : 'No' }}</td>
					</tr>

					@if ($producer2['fidelity_coverage'] == 'Yes')
					<tr>
						<td style="vertical-align:top; width:25%;">Insurance Company:</td>
						<td>{{ $producer2['insurance_company'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>Policy No: {{ $producer2['insurance_company_policy_no'] }}</td>
						<td>Limits: {{ $producer2['insurance_company_limits'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td>Deductible: {{ $producer2['insurance_company_deductible'] }}</td>
						<td>Expiration Date: {{ $producer2['insurance_company_expiration_date'] }}</td>
					</tr>
					@endif


					<tr>
						<td colspan="3">Does your agency maintain E &amp; O Coverage? {{ ($producer2['eo_coverage'] == 'Yes')? 'Yes' : 'No' }}</td>
					</tr>

					@if ($producer2['eo_coverage'] == 'Yes')
					<tr>
						<td style="vertical-align:top; width:25%;">Insurance Company:</td>
						<td>{{ $producer2['insurance_company2'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>Policy No: {{ $producer2['insurance_company2_policy_no'] }}</td>
						<td>Limits: {{ $producer2['insurance_company2_limits'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td>Deductible: {{ $producer2['insurance_company2_deductible'] }}</td>
						<td>Expiration Date: {{ $producer2['insurance_company2_expiration_date'] }}</td>
					</tr>
					@endif


				</tbody>
				
			</table>


			<br>

			<table style="width:100%;vertical-align:top;">

				<thead style="color:#fff; background:#2a369e;">
					<tr>
						<td colspan="3"><p style="padding:3px 6px; margin:0;">Background:</p></td>
					</tr>
				</thead>

				<tbody>

					<tr>
						<td colspan="3">Is Agency engaged in, owned by, associated with, or controlled by any other business interest? {{ $producer3['interest'] }}</td>
					</tr>

					@if ($producer3['interest'] == 'Yes')
					<tr>
						<td style="vertical-align:top; width:25%;">Explanation:</td>
						<td colspan="2">{{ $producer3['interest_explain'] }}</td>
					</tr>
					@endif

					<tr>
						<td colspan="3">Is Agency a member of NAPSLO? {{ $producer3['napslo'] }}</td>
					</tr>

					<tr>
						<td colspan="3">Is Agency a member of AAMGA? {{ $producer3['aamga'] }}</td>
					</tr>

					<tr>
						<td style="vertical-align:top;">Other? (Please list):</td>
						<td colspan="2">{{ $producer3['other'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;">Current Umbrella/Excess Volume:</td>
						<td colspan="2">{{ $producer3['excess_volume'] }}</td>
					</tr>
					<tr>
						<td style="vertical-align:top;">Current Umbrella/Excess Markets:</td>
						<td colspan="2">{{ $producer3['excess_markets'] }}</td>
					</tr>

					<tr>
						<td colspan="3">Do the Retail Agents/Brokers for whom you place business sign an agreement for you regarding payment of premium? {{ $producer3['premium'] }}</td>
					</tr>

					<tr>
						<td colspan="3">Has any member of your firm received any disciplinary action by a state insurance department or other regulatory authority? {{ $producer3['authority'] }}</td>
					</tr>

					@if ($producer3['authority'] == 'Yes')
					<tr>
						<td style="vertical-align:top; width:25%;">Explanation:</td>
						<td colspan="2">{{ $producer3['authority_explain'] }}</td>
					</tr>
					@endif

					<tr>
						<td colspan="3">Were there any pending or threatening litigations or judgments within the past 5 years exceeding $10,000 against the broker or any of the principals? {{ $producer3['principal'] }}</td>
					</tr>

					@if ($producer3['principal'] == 'Yes')
					<tr>
						<td style="vertical-align:top; width:25%;">Explanation:</td>
						<td colspan="2">{{ $producer3['principal_explain'] }}</td>
					</tr>
					@endif


				</tbody>
				
			</table>



			<br>

			<table style="width:100%;vertical-align:top;">

				<thead style="color:#fff; background:#2a369e;">
					<tr>
						<td colspan="3"><p style="padding:3px 6px; margin:0;">Licensing:</p></td>
					</tr>
				</thead>

				<tbody>

					<tr>
						<td colspan="3">With regards to item No: 1 of the Producer Payment Agreement (refer to pages 8-10) using the list below please indicate in which state's your agency writes business:</td>
					</tr>
					<tr>
						<td style="vertical-align:top; width:25%;"></td>
						<td colspan="2">{{ (isset($producer4['states'])) ? implode(", ", $producer4['states']) : 'None' }}</td>
					</tr>

					<tr>
						<td colspan="3"><p><strong>Who should our office contact for further licensing information?</strong></p></td>
					</tr>
					<tr>
						<td style="vertical-align:top;">Name:</td>
						<td>{{ $producer4['contact_name'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td style="vertical-align:top;">Mailing Address:</td>
						<td>{{ $producer4['contact_mailing_address'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>Phone: {{ $producer4['contact_phone'] }}</td>
						<td>Email: {{ $producer4['contact_email'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td>State: {{ $producer4['contact_mailing_address_state'] }}</td>
						<td>Zip Code: {{ $producer4['contact_mailing_address_zip_code'] }}</td>
					</tr>

				</tbody>
				
			</table>


			<br>

			<table style="width:100%;vertical-align:top;">

				<thead style="color:#fff; background:#2a369e;">
					<tr>
						<td colspan="3"><p style="padding:3px 6px; margin:0;">Payment Agreement:</p></td>
					</tr>
				</thead>

				<tbody>

					<tr>
						<td colspan="3">THIS AGREEMENT, executed by and between Hallmark E&S, 15280 Addison Road, Suite 260 Addison, TX 75001 ("hereinafter referred to as "the company") and <strong>{{ $producer5['agreed_company'] }}</strong>  having its principal office at <strong>{{ $producer5['office_at'] }} </strong> (Hereinafter referred to as “the Producer”).</td>
					</tr>

				</tbody>
				
			</table>

			{{ trim($page['body2']) }}




			<br>

			<table style="width:100%;vertical-align:top;">

				<thead style="color:#fff; background:#2a369e;">
					<tr>
						<td colspan="3"><p style="padding:3px 6px; margin:0;">Personnel:</p></td>
					</tr>
				</thead>

				<tbody>

					<tr>
						<td colspan="3">Please provide the following information for all employees working at each branch. Select whether each employee is authorized
to receive managerial or accounting correspondence and if he/she wishes to receive information pertinent to our firm.</td>
					</tr>

					<tr>
						<td  colspan="3" style="vertical-align:top;">Branch Name/Indicator (ex: "main" or street name): <strong>{{ $producer6['branch_name'] }}</strong></td>
					</tr>

					<tr>
						<td colspan="3">
							<table style="width:100%; border:1px solid #ccc; border-collapse:collapse;">
								<thead style="text-align:center">
									<tr>
										<th style="padding:4px;border:1px solid #ccc;"><strong>Name</strong></th>
										<th style="border:1px solid #ccc;"><strong>Phone</strong></th>
										<th style="border:1px solid #ccc;"><strong>Email Address</strong></th>
										<th style="border:1px solid #ccc;width:10%"><strong>Mgr</strong></th>
										<th style="border:1px solid #ccc;width:10%"><strong>Acct</strong></th>
										<th style="border:1px solid #ccc;width:10%"><strong>Mkt/Brk</strong></th>
									</tr>
								</thead>
								<tbody>

									@if ($producer6['employee1_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee1_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee1_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee1_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee1_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee1_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee1_mkt_brk'] }}</td>
									</tr>
									@endif

									@if ($producer6['employee2_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee2_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee2_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee2_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee2_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee2_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee2_mkt_brk'] }}</td>
									</tr>
									@endif

									@if ($producer6['employee3_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee3_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee3_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee3_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee3_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee3_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee3_mkt_brk'] }}</td>
									</tr>
									@endif

									@if ($producer6['employee4_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee4_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee4_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee4_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee4_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee4_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee4_mkt_brk'] }}</td>
									</tr>
									@endif

									@if ($producer6['employee5_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee5_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee5_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee5_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee5_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee5_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee5_mkt_brk'] }}</td>
									</tr>
									@endif

									@if ($producer6['employee6_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee6_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee6_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee6_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee6_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee6_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee6_mkt_brk'] }}</td>
									</tr>
									@endif

									@if ($producer6['employee7_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee7_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee7_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee7_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee7_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee7_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee7_mkt_brk'] }}</td>
									</tr>
									@endif

									@if ($producer6['employee8_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee8_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee8_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee8_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee8_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee8_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee8_mkt_brk'] }}</td>
									</tr>
									@endif

									@if ($producer6['employee9_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee9_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee9_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee9_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee9_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee9_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee9_mkt_brk'] }}</td>
									</tr>
									@endif

									@if ($producer6['employee10_name'])
									<tr>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee10_name'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee10_phone'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee10_email'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee10_mgr'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee10_acct'] }}</td>
										<td style="padding:3px;border:1px solid #ccc;">
											{{ $producer6['employee10_mkt_brk'] }}</td>
									</tr>
									@endif

									

								</tbody>
							</table>
						</td>
					</tr>

					<tr>
						<td colspan="3" style="vertical-align:top;"><p><strong>Accounts Payable Information:</strong> {{ $producer6['payment'] }}</p></td>
					</tr>


					<tr>
						<td colspan="3" style="vertical-align:top;"><p><em>AP Contact:</em></p></td>
					</tr>
					<tr>
						<td style="vertical-align:top; width:25%;">Name:</td>
						<td>{{ $producer6['ap_contact_name'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>Phone: {{ $producer6['ap_contact_phone'] }}</td>
						<td>Fax: {{ $producer6['ap_contact_fax'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td  colspan="2">Email: {{ $producer6['ap_contact_email'] }}</td>
					</tr>


					<tr>
						<td colspan="3" style="vertical-align:top;"><p><strong><em>Form Completed By:</em></strong></p></td>
					</tr>
					<tr>
						<td style="vertical-align:top; width:25%;">Name:</td>
						<td>{{ $producer6['completed_by_name'] }}</td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>Phone: {{ $producer6['completed_by_phone'] }}</td>
						<td>Fax: {{ $producer6['completed_by_fax'] }}</td>
					</tr>
					<tr>
						<td></td>
						<td colspan="2">Email: {{ $producer6['completed_by_email'] }}</td>
					</tr>
					<tr>
						<td>Electronic Signature: </td>
						<td colspan="2"> {{ $producer6['electronic_signature'] }} </td>					
					</tr>
					<tr>
						<td>Date:</td>
						<td colspan="2">Date: {{ $producer6['date'] }}</td>
					</tr>

				</tbody>
				
			</table>


		</body>
	</body>
</html>