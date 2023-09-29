<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="css\signup.css" rel="stylesheet">
</head>

<!-- component -->
<body class="bg-white">
	<div class=" max-w-xl container mx-auto ">
		<div class=" w-full">
			<!-- <img src="./../images/Dummy_Logo (1).png" class="mx-auto" alt=""> -->
			<p class="text-center text-neutral-600 text-base font-semibold">Register</p>
			<div class="mt-10">
				<form action="../config/register.php" method="POST" class="px-10">
					<div class="mt-2 ">
                        <label for="" class="text-neutral-600 text-base font-normal">First Name :</label>
						<div class="flex my-3 items-center justify-between bg-zinc-100 rounded-lg  ">
							<input type="text" name="fname" placeholder="First name" id=""
                                    class="w-full text-neutral-600 placeholder:text-neutral-600 px-4 bg-transparent outline-none">
                        </div>

                        <label for="" class="text-neutral-600 text-base font-normal">Middle Name :</label>
						<div class="flex my-3 items-center justify-between bg-zinc-100 rounded-lg  ">
							<input type="text" name="mname" placeholder="Middle name" id=""
                                    class="w-full text-neutral-600 placeholder:text-neutral-600 px-4 bg-transparent outline-none">
                        </div>

                        <label for="" class="text-neutral-600 text-base font-normal">Last Name :</label>
						<div class="flex my-3 items-center justify-between bg-zinc-100 rounded-lg  ">
							<input type="text" name="lname" placeholder="Last name" id=""
                                    class="w-full text-neutral-600 placeholder:text-neutral-600 px-4 bg-transparent outline-none">
                        </div>

						<label for="" class="text-neutral-600 text-base font-normal">Email Address :</label>
						<div class="flex my-3 items-center justify-between bg-zinc-100 rounded-lg  ">
							<input type="email" name="email" placeholder="Email" id=""
                                    class="w-full text-neutral-600 placeholder:text-neutral-600 px-4 bg-transparent outline-none">
                            </div>
						</div>
						<div class="mt-6 ">
                            <label for="" class="text-neutral-600 text-base font-normal">Password :</label>
                            <div class="flex my-3 items-center justify-between bg-zinc-100 rounded-lg  ">
                                <input type="password" name="password" placeholder="Password" id=""
                                    class="w-full text-neutral-600 placeholder:text-neutral-600 px-4 bg-transparent outline-none">
                            </div>
                        </div>
                        <label for="" class="text-neutral-600 text-base font-normal">Phone Number :</label>
						<div class="flex my-3 items-center justify-between bg-zinc-100 rounded-lg  ">
							<input type="number" name="phone" placeholder="Phone number" id=""
                                    class="w-full text-neutral-600 placeholder:text-neutral-600 px-4 bg-transparent outline-none">
                        </div>
							
							<input type="submit" value="register" class="bg-indigo-900 rounded-lg shadow text-center text-white text-base font-semibold w-full py-3 mt-9" >
							

							<div class="relative flex items-center mt-8">
								<div class="border h-0 w-2/4 border-stone-300"></div>
								<div class=" text-stone-300 px-4 text-sm font-normal">OR</div>
								<div class=" border h-0 w-2/4 border-stone-300"></div>
							</div>
							<button class="bg-indigo-900 rounded-lg shadow text-center text-white text-base font-semibold w-full py-3 mt-9">Login now</button>

				</form>
			</div>
		</div>
	</div>
</body>

</html>