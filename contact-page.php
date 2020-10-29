<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Contact us Form | CodingNepal</title> -->
    <link rel="stylesheet" href="static/css/contact-page.css"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
    <div class="text">
         Contact Us </div>
    <form action="#">
        <div class="form-row">
            <div class="input-data">
                <input type="text" required>
                <div class="underline">
                </div>
                <label for="">First Name</label>
            </div>

            <div class="input-data">
                <input type="text" required>
                <div class="underline">
                </div>
                <label for="">Last Name</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="text" required>
                <div class="underline">
                </div>
                <label for="">Email Address</label>
            </div>
            <div class="input-data">
                <input type="text" required>
                <div class="underline">
                </div>
                <label for="">Phone Number</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <input type="text" required>
                <div class="underline">
                </div>
                <label for="">Message</label>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <select name = langauge class=input size =1 style = 'width: 1000'>
                    <option>What property type are you looking for?    </option>
                    <option>Coops</option>
                    <option>Condos</option>
                    <option>Townhouse</option>
                    <option>Vacant Land</option>
                    <option>Office Buildings</option>
                    <option>Luxury Hotels</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <select name = education id = slctSingle class=input size =1 style = 'width: 100'>
                        <option> How many bedrooms are you looking for?</option>
                        <option> Studio</option>
                        <option> 1</option>
                        <option> 2</option>
                        <option> 3</option>
                        <option> 4</option>
                        <option> 5+</option>
                    </select>
                    </div>
                </div>

        <div class="form-row">
            <div class="input-data">
                <select name = langauge class=input size =1 style = 'width: 1000'>
                    <option>What property status are you looking for?   </option>
                    <option>Active</option>
                    <option>Coming Soon</option>
                    <option>Contingent</option>
                    <option>Pending</option>
                    <option>Sold</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="input-data">
                <select name = langauge class=input size =1 style = 'width: 1000'>
                    <option> How did you hear from us?  </option>
                    <option> Streeteasy</option>
                    <option> Zillow</option>
                    <option> Facebook</option>
                    <option> Instgram</option>
                </select>
            </div>
        </div>

                <div class="form-row submit-btn">
                    <div class="input-data">
                        <div class="inner"></div>
                        <input type="submit" value="submit">
                    </div>
                </div>
    </form>
</div>

</body>
</html>

