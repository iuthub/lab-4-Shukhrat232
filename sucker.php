
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><input type="name" name="name"></dd>

			<dt>Section</dt>
			<dd>
				<select name="section">
					<option value="ma">MA</option>
					<option value="mf">MF</option>
					<option value="mc">MC</option>
                    <option value="mcc">MC</option>
				</select>
			</dd>

			<dt>Credit Card</dt>
			<dd>
				<input type="card" name="card" maxlength="16">
			</dd>
			<dd>
				<input type="Radio" name="visa">Visa
				<input type="Radio" name="mastercard">MasterCard
			</dd>
		</dl>
		<input type="submit" name="submit" value="I am a giant sucker.">
	</body>
</html>  